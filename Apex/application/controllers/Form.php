<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

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
        redirect('auth/logout');
    }

    public function deposit() {

        if (!$this->ion_auth->logged_in()) {
            redirect('auth');
            exit;
        }


        $this->load->library('form_validation');

        $this->form_validation->set_rules('deposit_usd', 'Deposit in USD', 'required');
        $this->form_validation->set_rules('product', 'Product', 'required');

        if ($this->form_validation->run() == FALSE) {
            redirect(base_url('finance/deposit/' . $this->input->post('product')));
        } else {

            //udaje ulozit do tabulky transaction history
            $this->load->model('transaction_model');
            $this->transaction_model->insert_entry();
            //poslat email

            redirect(base_url('finance/deposit/request-received'));
        }
    }

}
