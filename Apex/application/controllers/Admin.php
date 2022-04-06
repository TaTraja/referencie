<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

        $this->_check_clearance();
        $data['admin'] = $this->_get_admin_info();
        $data['investment_requests'] = $this->_get_investment_requests();
        // echo "<pre>";
        // var_dump($data['investment_requests']);
        $this->load->view('admin/dashboard', $data);

//$this->load->view('welcome_message');
    }

    public function accept_investment_request() {

        if (intval($this->uri->segment(3, 0)) === 0) {
            redirect(base_url());
        }
        $this->_check_clearance();
        //$data['admin'] = $this->_get_admin_info();
        // $data['investment_request'] = $this->_get_investment_request(intval($this->uri->segment(3)));
        $this->_update_investment_requests_status('accepted');

        $investment_data = $this->investment_model->get_investment_request(intval($this->uri->segment(3, 0)));
        $this->investment_model->create_active_product($investment_data);

        redirect(base_url());
    }

    public function reject_investment_request() {

        if (intval($this->uri->segment(3, 0)) === 0) {
            redirect(base_url());
        }
        $this->_check_clearance();

        $data['admin'] = $this->_get_admin_info();

        // $data['investment_request'] = $this->_get_investment_request(intval($this->uri->segment(3)));
        $this->_update_investment_requests_status('rejected');

        redirect(base_url());
    }

    function _check_clearance() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth');
            exit;
        }

        if (!$this->ion_auth->is_admin()) {
            redirect('auth/logout');
            exit;
        }
    }

    function _get_admin_info() {

        $this->load->model("user_model");
        return $this->user_model->get_user_info($this->ion_auth->user()->row()->id);
    }

    function _get_investment_requests() {

        $this->load->model("investment_model");
        return $this->investment_model->get_investment_requests();
    }

    function _get_investment_request() {

        $this->load->model("investment_model");
        return $this->investment_model->get_investment_request(intval($this->uri->segment(3)));
    }

    function _update_investment_requests_status($verdict) {

        $this->load->model("investment_model");
        return $this->investment_model->update_investment_requests_status(intval($this->uri->segment(3)), $verdict);
    }

}
