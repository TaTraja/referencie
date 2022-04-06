<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
    public function index() {

        $data['user'] = $this->_check_login_and_get_user_info($this->ion_auth->user()->row()->id);

        if (!intval($data['user']->verified)) {

            redirect(base_url("dashboard/verify"));
            exit;
        } 
        
        $this->load->view('dashboard/dashboard', $data);
        
    }

    public function verify() {


        $data['user'] = $this->_check_login_and_get_user_info($this->ion_auth->user()->row()->id);

        if (intval($data['user']->verified)) {

            redirect(base_url("dashboard"));
            exit;
        }

        $this->load->view("dashboard/verify/verify", $data);
    }

    function _check_login_and_get_user_info($id) {


        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
            exit;
            die;
        }



        //Nacitame si vsetko o prihlasenom uzivatelovi
        $this->load->model("user_model");
        return $this->user_model->get_user_info($id);
    }

}
