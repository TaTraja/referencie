<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

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

        //Nacitame si vsetko o prihlasenom uzivatelovi
        $this->load->model("user_model");
        $data['user'] = $this->user_model->get_user_info($this->ion_auth->user()->row()->id);
        
        //toto sa posle ked sa prijmu peniaza a aktivuje sa produkt
        $this->load->view('email/admin/admin_mail_product_activated', $data);
        //toto dostane typek ked admin posle udaje o platbe
        $this->load->view('email/admin/admin_mail_deposit_reply', $data);
        //toto dostane admin ked typek chce vlozit love
        $this->load->view('email/admin/admin_mail_deposit', $data);
        //toto sa posle ked admin odosle platbu a potvrdi ju cez web
        $this->load->view('email/admin/admin_mail_withdraw_reply', $data);
        //toto dostane admin ked si typek zaziada o vyber
        $this->load->view('email/admin/admin_mail_withdraw', $data);
        //po spracovani udajov sa mail posiela s5 
        $this->load->view('email/admin/admin_mail_verify', $data);
        //ked typek posle svoje udaje na spracovanie
        $this->load->view('email/user/user_mail_verify', $data);
        //ked si typek chce vlozit, po vybrati produktu a sumy co chce za to zaplatit
        $this->load->view('email/user/user_mail_deposit', $data);
        //ked si typek chce vytiahnut lovky, info o tom ze sa na tom pracuje
        $this->load->view('email/user/user_mail_withdraw', $data);
        //ked sa typek zaregistruje
        $this->load->view('email/user/user_mail_welcome', $data);
    }

}
