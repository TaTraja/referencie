<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Setup extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function check_phase()
    {

        $gameID = $this->uri->segment(3, 0);

        if ($gameID === 0) {
            exit;
        }

        $this->load->model("setup_model");
        $model_result = $this->setup_model->check_phase($gameID);

        if ($model_result->player_setup_phase or $model_result->opponent_setup_phase) {

            $response_data['result'] = array('result_message' => 'setup_phase');
        } else {

            $response_data['result'] = array('result_message' => 'play_phase');
        }

        $this->load->view('response', $response_data);
    }

    public function request_pieces_positions()
    {
        //$playerID = $this->uri->segment(3, 0);
        $gameID = $this->uri->segment(3, 0);
        $playerTYPE = $this->uri->segment(4, 0);

        $flag_position = $this->uri->segment(5, 0);
        $trap_position = $this->uri->segment(6, 0);

        if ($gameID === 0 or $playerTYPE === 0) {
            exit;
        }


        $player_starting_positions = array('A1', 'B1', 'A2', 'B2', 'A3', 'B3', 'A4', 'B4', 'A5', 'B5', 'A6', 'B6', 'A7', 'B7');

        $opponent_starting_positions = array('E1', 'F1', 'E2', 'F2', 'E3', 'F3', 'E4', 'B4', 'E5', 'F5', 'E6', 'F6', 'E7', 'F7');

        //tieto miesta musis odstranit z pola vyssie

        if ($playerTYPE == "player") {

            if (($key = array_search($flag_position, $player_starting_positions)) !== false) {
                unset($player_starting_positions[$key]);
            }

            if (($key = array_search($trap_position, $player_starting_positions)) !== false) {
                unset($player_starting_positions[$key]);
            }

            $player_starting_positions = array_values($player_starting_positions);

            shuffle($player_starting_positions);

            $player_rock_positions = json_encode(array_slice($player_starting_positions, 0, 4));
            $player_paper_positions = json_encode(array_slice($player_starting_positions, 4, 4));
            $player_scissors_positions = json_encode(array_slice($player_starting_positions, 8, 4));
        } else if ($playerTYPE == "opponent") {

            if (($key = array_search($flag_position, $opponent_starting_positions)) !== false) {
                unset($opponent_starting_positions[$key]);
            }

            if (($key = array_search($trap_position, $opponent_starting_positions)) !== false) {
                unset($opponent_starting_positions[$key]);
            }

            $opponent_starting_positions = array_values($opponent_starting_positions);

            shuffle($opponent_starting_positions);

            $player_rock_positions = json_encode(array_slice($opponent_starting_positions, 0, 4));
            $player_paper_positions = json_encode(array_slice($opponent_starting_positions, 4, 4));
            $player_scissors_positions = json_encode(array_slice($opponent_starting_positions, 8, 4));
        }


        $this->load->model("setup_model");
        $model_result = $this->setup_model->set_pieces_positions($gameID, $playerTYPE, $player_rock_positions, $player_paper_positions, $player_scissors_positions);

        $response_data['result'] = array('result_message' => 'set_ok', 'rock_positions' => json_decode($player_rock_positions), 'paper_positions' => json_decode($player_paper_positions), 'scissors_positions' => json_decode($player_scissors_positions));
        $this->load->view('response', $response_data);
    }

    public function set_trap_and_flag_positions()
    {
        $playerID = $this->uri->segment(3, 0);
        $playerTYPE = $this->uri->segment(4, 0);

        $flagPOSITION = $this->uri->segment(5, 0);
        $trapPOSITION = $this->uri->segment(6, 0);

        $gameID = $this->uri->segment(7, 0);

        if ($playerID === 0 or $playerTYPE === 0 or $flagPOSITION === 0 or $trapPOSITION === 0 or $gameID === 0) {

            exit;
        }

        $this->load->model("setup_model");
        $model_result = $this->setup_model->set_trap_and_flag_positions($playerID, $playerTYPE, $flagPOSITION, $trapPOSITION, $gameID);

        $response_data['result'] = array('result_message' => 'update_ok');
        $this->load->view('response', $response_data);
    }

    public function add_me_to_queue()
    {
        $user_id = $this->uri->segment(3, 0);

        if ($user_id == 0) {
            exit;
        }

        $this->load->model('matchmaking_model');

        // Check if user is already there
        $model_result = $this->matchmaking_model->check_user_in_queue($user_id);

        //If yes, do not continue
        if ($model_result <> NULL) {
            $response_data['result'] = array('result_message' => 'already_in_queue');
        } else {
            //Else add him/her to the queue
            $model_result = $this->matchmaking_model->add_user_to_queue($user_id);

            if ($model_result == 1) {
                $response_data['result'] = array('result_message' => 'added_to_queue');
            }
        }


        $this->load->view('response', $response_data);
    }

    public function check_status()
    {

        $user_id = $this->uri->segment(3, 0);

        if ($user_id == 0) {
            exit;
        }

        $this->load->model('matchmaking_model');
        // Check if user is already there

        $model_result = $this->matchmaking_model->check_user_in_queue($user_id);

        if ($model_result <> NULL) {

            $response_data['result'] = array('result_message' => 'in_queue');
            $this->load->view('response', $response_data);
            return;
        }

        $model_result = $this->matchmaking_model->check_user_in_match($user_id);

        if ($model_result <> NULL) {

            $response_data['result'] = array('result_message' => 'in_game', 'opponent_id' => $model_result->user_id_b, 'gameID' => $model_result->gameID);
            $this->load->view('response', $response_data);
            return;
        }


        $response_data['result'] = array('result_message' => 'nowhere');
        $this->load->view('response', $response_data);
        return;

        // $model_result = $this->matchmaking_model->check_user_in_match($user_id, 'a');
        //   $this->load->view('response', $response_data);
    }

    public function create_matches()
    {
    }
}
