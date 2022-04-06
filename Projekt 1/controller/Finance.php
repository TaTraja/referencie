<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Finance extends CI_Controller
{

    /**
    
     */
    public function index()
    {

        $data['user'] = $this->_check_login_and_get_user_info($this->ion_auth->user()->row()->id);

        if (!intval($data['user']->verified)) {

            redirect(base_url("dashboard/verify"));
            exit;
        }

        //      $this->load->view('dashboard/dashboard', $data);
        redirect(base_url());
    }
    //
    public function deposit()
    {

        $data['user'] = $this->_check_login_and_get_user_info($this->ion_auth->user()->row()->id);


        //ak client vybral produkt a mame zaznam daj sweetalert request recieved 
        if ($this->uri->segment(3) == "request-received") {

            $this->load->view("dashboard/elements/header", $data);
            $this->load->view("dashboard/elements/topbar_menu", $data);
            $this->load->view("dashboard/elements/menu", $data);
            $this->load->view("dashboard/finance/deposit/request_received", $data);
            $this->load->view("dashboard/elements/footer", $data);
            return;
        }
        //ak client este nevybral produkt a nemame zaznam vrat na select
        if (!$this->uri->segment(3)) {

            $this->load->view("dashboard/elements/header", $data);
            $this->load->view("dashboard/elements/topbar_menu", $data);
            $this->load->view("dashboard/elements/menu", $data);
            $this->load->view("dashboard/finance/deposit/select_product", $data);
            $this->load->view("dashboard/elements/footer", $data);

            return;
        }
        //ak ma klient zvoleny t1
        if ($this->uri->segment(3) == "passive-safety") {
            $data['selected_product'] = "passive-safety";
            $data['selected_product_human'] = "Passive Safety";
        }
        //ak ma klient zvoleny t2
        if ($this->uri->segment(3) == "hybrid") {
            $data['selected_product'] = "hybrid";
            $data['selected_product_human'] = "Hybrid";
        }
        //ak ma klient zvoleny t3 - predpriprava
        if ($this->uri->segment(3) == "crypto-savings") {
            $data['selected_product'] = "crypto-savings";
            $data['selected_product_human'] = "Crypto Savings";
        }
        //ak ma clovek vybrany produkt ideme na vyplnenie info
        $this->load->view("dashboard/elements/header", $data);
        $this->load->view("dashboard/elements/topbar_menu", $data);
        $this->load->view("dashboard/elements/menu", $data);
        $this->load->view("dashboard/finance/deposit/input_details", $data);
        $this->load->view("dashboard/elements/footer", $data);
    }

    public function withdrawal()
    {

        //List all of available products

        $data['user'] = $this->_check_login_and_get_user_info($this->ion_auth->user()->row()->id);

        $this->load->model('products_model');
        $data['active_products'] = $this->products_model->get_all_products($this->ion_auth->user()->row()->id);

        //                             /$$ /$$                                 /$$           /$$                     /$$          
        //                            | $$|__/                                | $$          | $$                    |__/          
        //    /$$$$$$   /$$$$$$   /$$$$$$$ /$$  /$$$$$$   /$$$$$$   /$$$$$$$ /$$$$$$        | $$  /$$$$$$   /$$$$$$  /$$  /$$$$$$$
        //   /$$__  $$ /$$__  $$ /$$__  $$| $$ /$$__  $$ /$$__  $$ /$$_____/|_  $$_/        | $$ /$$__  $$ /$$__  $$| $$ /$$_____/
        //  | $$  \__/| $$$$$$$$| $$  | $$| $$| $$  \__/| $$$$$$$$| $$        | $$          | $$| $$  \ $$| $$  \ $$| $$| $$      
        //  | $$      | $$_____/| $$  | $$| $$| $$      | $$_____/| $$        | $$ /$$      | $$| $$  | $$| $$  | $$| $$| $$      
        //  | $$      |  $$$$$$$|  $$$$$$$| $$| $$      |  $$$$$$$|  $$$$$$$  |  $$$$/      | $$|  $$$$$$/|  $$$$$$$| $$|  $$$$$$$
        //  |__/       \_______/ \_______/|__/|__/       \_______/ \_______/   \___/        |__/ \______/  \____  $$|__/ \_______/
        //                                                                                                 /$$  \ $$              
        //                                                                                                |  $$$$$$/              
        //                                                                                                 \______/               
        //        if (!$this->uri->segment(3)) {
        //
        //            $this->load->view("dashboard/finance/withdrawal/select_product", $data);
        //            return;
        //        }



        //vyplnime withdrawal dotaznik za klienta aby nic nedototo/ neybral nespravny produkt

        //zistime produkt 
        if ($this->uri->segment(3) == "passive-safety") {
            $data['selected_product'] = "passive-safety";
            $data['selected_product_human'] = "Passive Safety";

            $this->load->view("dashboard/elements/header", $data);
            $this->load->view("dashboard/elements/topbar_menu", $data);
            $this->load->view("dashboard/elements/menu", $data);
            $this->load->view("dashboard/finance/withdrawal/withdraw", $data);
            $this->load->view("dashboard/elements/footer", $data);

            return;
        }
        if ($this->uri->segment(3) == "hybrid") {

            $data['selected_product'] = "hybrid";
            $data['selected_product_human'] = "Hybrid";

            $this->load->view("dashboard/elements/header", $data);
            $this->load->view("dashboard/elements/topbar_menu", $data);
            $this->load->view("dashboard/elements/menu", $data);
            $this->load->view("dashboard/finance/withdrawal/withdraw", $data);
            $this->load->view("dashboard/elements/footer", $data);

            return;
        }

        //        if ($this->uri->segment(3) == "crypto-savings") {
        //            $data['selected_product'] = "crypto-savings";
        //            $data['selected_product_human'] = "Crypto Savings";
        //        }

        //a vyplnime udaje o jeho zvolenom produkte a presmerujeme na form
        if ($data['active_products'] === NULL) {
            redirect(base_url());
        }

        if ($data['active_products']->product_name === "passive-safety") {
            redirect(base_url('finance/withdrawal/passive-safety'));
        }

        if ($data['active_products']->product_name === "hybrid") {
            redirect(base_url('finance/withdrawal/hybrid'));
        }


        //                             /$$ /$$                                 /$$           /$$                     /$$          
        //                            | $$|__/                                | $$          | $$                    |__/          
        //    /$$$$$$   /$$$$$$   /$$$$$$$ /$$  /$$$$$$   /$$$$$$   /$$$$$$$ /$$$$$$        | $$  /$$$$$$   /$$$$$$  /$$  /$$$$$$$
        //   /$$__  $$ /$$__  $$ /$$__  $$| $$ /$$__  $$ /$$__  $$ /$$_____/|_  $$_/        | $$ /$$__  $$ /$$__  $$| $$ /$$_____/
        //  | $$  \__/| $$$$$$$$| $$  | $$| $$| $$  \__/| $$$$$$$$| $$        | $$          | $$| $$  \ $$| $$  \ $$| $$| $$      
        //  | $$      | $$_____/| $$  | $$| $$| $$      | $$_____/| $$        | $$ /$$      | $$| $$  | $$| $$  | $$| $$| $$      
        //  | $$      |  $$$$$$$|  $$$$$$$| $$| $$      |  $$$$$$$|  $$$$$$$  |  $$$$/      | $$|  $$$$$$/|  $$$$$$$| $$|  $$$$$$$
        //  |__/       \_______/ \_______/|__/|__/       \_______/ \_______/   \___/        |__/ \______/  \____  $$|__/ \_______/
        //                                                                                                 /$$  \ $$              
        //                                                                                                |  $$$$$$/              
        //                                                                                                 \______/               

        //ak mame recieved dame sweetalert na 10 sek
        if ($this->uri->segment(3) == "request-received") {

            $this->load->view("dashboard/elements/header", $data);
            $this->load->view("dashboard/elements/topbar_menu", $data);
            $this->load->view("dashboard/finance/withdrawal/request_received", $data);
            $this->load->view("dashboard/elements/footer", $data);
            return;
        }
    }

    function _check_login_and_get_user_info($id)
    {


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
