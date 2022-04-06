<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CI_Controller {

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

    public function deposit() {

        $data['user'] = $this->_check_login_and_get_user_info($this->ion_auth->user()->row()->id);
        
        
        if ($this->uri->segment(3) == "request-received") {
            
            $this->load->view("dashboard/finance/deposit/request_received", $data);
            return;
            
        }
        
        if (!$this->uri->segment(3)) {

            $this->load->view("dashboard/finance/deposit/select_product", $data);
            return;
        } 
        if ($this->uri->segment(3) == "passive-safety") {
            $data['selected_product'] = "passive-safety";
            $data['selected_product_human'] = "Passive Safety";
        } 
        if ($this->uri->segment(3) == "hybrid") {
            $data['selected_product'] = "hybrid";
            $data['selected_product_human'] = "Hybrid";
        } 
        
        if ($this->uri->segment(3) == "crypto-savings") {
            $data['selected_product'] = "crypto-savings";
            $data['selected_product_human'] = "Crypto Savings";
        }
        
        $this->load->view("dashboard/finance/deposit/input_details", $data);
        
    }

    function _check_login_and_get_user_info($id) {


        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
            exit;
            die;
        }




        //Nacitame si vsetko o prihlasenom uzivatelovi
        $this->load->model("user_model");

        $data['user'] = $this->user_model->get_user_info($id);

        if (!intval($data['user']->verified)) {

            redirect(base_url("auth/logout"));
            exit;
        }


        return $data['user'];
    }

}
