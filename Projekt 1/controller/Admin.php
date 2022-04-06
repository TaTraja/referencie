<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    public function index()
    {
        //skontrolujeme ci prihlasujuci je admin 
        $this->_check_clearance();
        //modely
        $this->load->model("products_model");
        $this->load->model("transactions_model");

        $data['admin'] = $this->_get_admin_info();
        //$data['product'] = $this->get_all_products($this->ion_auth->user()->row()->id);
        //zistime investment request od klienta
        $data['investment_requests'] = $this->_get_investment_requests();
        //zistime investment request od klienta stage 2 
        $data['investment_confirmations'] = $this->investment_model->get_investment_confirmations();
        //zistime withdrawal request od klienta        
        $data['withdrawal_requests'] = $this->_get_withdrawal_requests();


        //query na zistenie poctu produktov t1
        $data['active_passive_safety_products_count'] = $this->products_model->get_all_active_passive_safety_products_count();
        //query na zistenie poctu produktov t2
        $data['active_hybrid_products_count'] = $this->products_model->get_all_active_hybrid_products_count();
        //query na zistenie suctu hodnoty produktov t2
        $data['active_hybrid_products_value'] = $this->transactions_model->_get_transaction_history_admin($data['admin']->user_id);
        //vypocet hodnoty 
        foreach ($data['active_hybrid_products_value'] as $hyb_value_line) {
            if ($hyb_value_line->type == "deposit" & $hyb_value_line->product_name == "hybrid") {
                $hybrid_products_value = $hybrid_products_value + $hyb_value_line->value;
            } elseif ($hyb_value_line->type == "deposit" & $hyb_value_line->product_name == "passive-safety") {
                $passive_products_value = $passive_products_value + $hyb_value_line->value;
            }
        }

        $data['hybrid_products_value'] = intval($hybrid_products_value);
        $data['passive_products_value'] = intval($passive_products_value);



        $this->load->view('admin/elements/header', $data);
        $this->load->view('admin/elements/menu', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/elements/footer', $data);
    }
    //spocitame pocet riadkov t2 
    
    public function report_hybrid_revenues()
    {

        $this->_check_clearance();
        $data['admin'] = $this->_get_admin_info();

        $this->load->model("products_model");
        $data['active_hybrid_products_count'] = $this->products_model->get_all_active_hybrid_products_count();

        $this->load->view('admin/elements/header', $data);
        $this->load->view('admin/elements/menu', $data);
        //   $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/elements/footer', $data);
    }

    function _check_clearance()
    {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth');
            exit;
        }

        if (!$this->ion_auth->is_admin()) {
            redirect('auth/logout');
            exit;
        }
    }

    function _get_admin_info()
    {

        $this->load->model("user_model");
        return $this->user_model->get_user_info($this->ion_auth->user()->row()->id);
    }

    //$$$$$$$\                                          $$\   $$\                                   
    //$$  __$$\                                         \__|  $$ |                                  
    //$$ |  $$ | $$$$$$\   $$$$$$\   $$$$$$\   $$$$$$$\ $$\ $$$$$$\                                 
    //$$ |  $$ |$$  __$$\ $$  __$$\ $$  __$$\ $$  _____|$$ |\_$$  _|                                
    //$$ |  $$ |$$$$$$$$ |$$ /  $$ |$$ /  $$ |\$$$$$$\  $$ |  $$ |                                  
    //$$ |  $$ |$$   ____|$$ |  $$ |$$ |  $$ | \____$$\ $$ |  $$ |$$\                               
    //$$$$$$$  |\$$$$$$$\ $$$$$$$  |\$$$$$$  |$$$$$$$  |$$ |  \$$$$  |                              
    //\_______/  \_______|$$  ____/  \______/ \_______/ \__|   \____/                               
    //                    $$ |                                                                      
    //                    $$ |                                                                      
    //                    \__|  

    //query na investment requesty                                                               
    function _get_investment_requests()
    {

        $this->load->model("investment_model");
        return $this->investment_model->get_investment_requests();
    }
    //query na investment requesty ak je state 2 
    function _get_investment_request()
    {

        $this->load->model("investment_model");
        return $this->investment_model->get_investment_request(intval($this->uri->segment(3)));
    }
    //query inv req update verdictu 
    function _update_investment_requests_status($verdict)
    {
    
        $this->load->model("investment_model");

        return $this->investment_model->update_investment_requests_status(intval($this->uri->segment(3)), $verdict);
    }

    //query na update ked admin vyplni udaje wallet and value
    function _update_investment_request_wallet_and_btc_value()
    {

        $this->load->model("investment_model");

        $this->investment_model->update_investment_request_wallet_and_btc_value(intval($this->uri->segment(3)), $this->uri->segment(5), $this->uri->segment(6));
    }

    //toto treba opravit do v0.5!!!!!
    //po vyplneni udajov posli vsetko mailom klientovi

    public function investment_request_send_wallet_to_client()
    {

        if (intval($this->uri->segment(3, 0)) === 0) {
            redirect(base_url());
        }

        if (intval($this->uri->segment(4, 0)) === 0) {
            redirect(base_url());
        }


        
        if (intval($this->uri->segment(5, 0)) === 0) {
            //    redirect(base_url());
        }

        if (intval($this->uri->segment(6, 0)) === 0) {
            //     redirect(base_url());
        }
        
        //preistotu
        $this->_check_clearance();

        //     $this->_update_investment_requests_status('wallet_sent');
        $this->_update_investment_request_wallet_and_btc_value();

        //POSLAT MAIL OHLADOM WALLET 
        redirect(base_url('email/send-payment-details-to-client/' . $this->uri->segment(3, 0) . '/' . $this->uri->segment(4, 0) . '/' . $this->uri->segment(5, 0) . '/' . $this->uri->segment(6, 0)));
    }

    //funkcia na prijatie requestu a vytvorenie finalnej transakcie
    public function accept_investment_request()
    {
        //ak tam nieco chyba naspat
        if (intval($this->uri->segment(3, 0)) === 0) {
            redirect(base_url());
        }


        if (intval($this->uri->segment(4, 0)) === 0) {
            redirect(base_url());
        }
        $this->_check_clearance();
        //$data['admin'] = $this->_get_admin_info();
        // $data['investment_request'] = $this->_get_investment_request(intval($this->uri->segment(3)));

        $this->load->model('investment_model');
        $this->load->model("products_model");

        //query ziskaj cislo transakcie s udajmi
        $investment_data = $this->investment_model->get_investment_request(intval($this->uri->segment(3, 0)));
        //vytvor novy aktivny produkt
        $product_id = $this->products_model->create_active_product($investment_data);
        //updatuj na state completed a ukonci dalsie akcie
        $this->_update_investment_requests_status('completed');
        
        $transaction_data = $this->investment_model->get_to_investment_request(intval($this->uri->segment(3, 0)));
        //vytvor finalnu transakciu
        $this->investment_model->create_transaction_history($investment_data, $product_id);

        redirect(base_url());
    }

    //zamietni request
    public function reject_investment_request()
    {

        if (intval($this->uri->segment(3, 0)) === 0) {
            redirect(base_url());
        }
        $this->_check_clearance();

        $data['admin'] = $this->_get_admin_info();

        // $data['investment_request'] = $this->_get_investment_request(intval($this->uri->segment(3)));
        //zamietni a ukonci dalsie akcie
        $this->_update_investment_requests_status('rejected');

        redirect(base_url());
    }

    //$$\      $$\ $$\   $$\     $$\             $$\                                            $$\ 
    //$$ | $\  $$ |\__|  $$ |    $$ |            $$ |                                           $$ |
    //$$ |$$$\ $$ |$$\ $$$$$$\   $$$$$$$\   $$$$$$$ | $$$$$$\  $$$$$$\  $$\  $$\  $$\  $$$$$$\  $$ |
    //$$ $$ $$\$$ |$$ |\_$$  _|  $$  __$$\ $$  __$$ |$$  __$$\ \____$$\ $$ | $$ | $$ | \____$$\ $$ |
    //$$$$  _$$$$ |$$ |  $$ |    $$ |  $$ |$$ /  $$ |$$ |  \__|$$$$$$$ |$$ | $$ | $$ | $$$$$$$ |$$ |
    //$$$  / \$$$ |$$ |  $$ |$$\ $$ |  $$ |$$ |  $$ |$$ |     $$  __$$ |$$ | $$ | $$ |$$  __$$ |$$ |
    //$$  /   \$$ |$$ |  \$$$$  |$$ |  $$ |\$$$$$$$ |$$ |     \$$$$$$$ |\$$$$$\$$$$  |\$$$$$$$ |$$ |
    //\__/     \__|\__|   \____/ \__|  \__| \_______|\__|      \_______| \_____\____/  \_______|\__|
    //

    //query zisti withdrawal req 
    function _get_withdrawal_requests()
    {

        $this->load->model("investment_model");
        return $this->investment_model->get_withdrawal_requests();
    }
    //query na withdrawal requesty ak je state 2
    function _get_withdrawal_request()
    {

        $this->load->model("investment_model");
        return $this->investment_model->get_withdrawal_request(intval($this->uri->segment(3)));
    }
    // update verdict
    function _update_withdrawal_requests_status($verdict)
    {

        $this->load->model("investment_model");
        return $this->investment_model->update_withdrawal_requests_status(intval($this->uri->segment(3)), $verdict);
    }
    //akceptuj withdrawal 
    public function accept_withdrawal_request()
    {



        if (intval($this->uri->segment(3, 0)) === 0) {
            redirect(base_url());
        }


        if (intval($this->uri->segment(4, 0)) === 0) {
            redirect(base_url());
        }
        $this->_check_clearance();
        //$data['admin'] = $this->_get_admin_info();
        // $data['investment_request'] = $this->_get_investment_request(intval($this->uri->segment(3)));
        //$investment_data = $this->investment_model->get_investment_request(intval($this->uri->segment(3, 0)));
        //$product_id = $this->products_model->get_all_products($user_id);

        $this->load->model('products_model');
        $this->load->model("investment_model");
        //ukonci transakciu nastav complete
        $user_id = $this->_update_withdrawal_requests_status('completed');
        //ziskaj produkt
        $product_id = intval($this->products_model->get_all_products($user_id)->id);
        //ziskaj request id
        $withdrawal_data = $this->investment_model->get_to_withdrawal_request(intval($this->uri->segment(3, 0)));
        // echo "<pre>";
        // var_dump($withdrawal_data);
        // exit;
        
        //vytvor transakciu
        $this->investment_model->create_transaction_history_withdrawal($withdrawal_data, $user_id, $product_id);

        redirect(base_url());
    }

    //zamietni request
    public function reject_withdrawal_request()
    {

        if (intval($this->uri->segment(3, 0)) === 0) {
            redirect(base_url());
        }
        $this->_check_clearance();

        $data['admin'] = $this->_get_admin_info();

        // $data['investment_request'] = $this->_get_investment_request(intval($this->uri->segment(3)));
        $this->_update_withdrawal_requests_status('rejected');

        redirect(base_url());
    }
    //$$$$$$$\                                                              
    //$$  __$$\                                                             
    //$$ |  $$ | $$$$$$\ $$\    $$\  $$$$$$\  $$$$$$$\  $$\   $$\  $$$$$$\  
    //$$$$$$$  |$$  __$$\\$$\  $$  |$$  __$$\ $$  __$$\ $$ |  $$ |$$  __$$\ 
    //$$  __$$< $$$$$$$$ |\$$\$$  / $$$$$$$$ |$$ |  $$ |$$ |  $$ |$$$$$$$$ |
    //$$ |  $$ |$$   ____| \$$$  /  $$   ____|$$ |  $$ |$$ |  $$ |$$   ____|
    //$$ |  $$ |\$$$$$$$\   \$  /   \$$$$$$$\ $$ |  $$ |\$$$$$$  |\$$$$$$$\ 
    //\__|  \__| \_______|   \_/     \_______|\__|  \__| \______/  \_______|
    //

    //zatial nepouzivame, cakame na update a ideme od znova
    // public function _update_hybrid_revenue()
    // {


    //     $this->_check_clearance();
    //     //$data['admin'] = $this->_get_admin_info();
    //     // $data['investment_request'] = $this->_get_investment_request(intval($this->uri->segment(3)));
    //     //$investment_data = $this->investment_model->get_investment_request(intval($this->uri->segment(3, 0)));
    //     //$product_id = $this->products_model->get_all_products($user_id);

    //     $this->load->model('products_model');
    //     $this->load->model("investment_model");
    //     $this->load->model("revenue_model");



    //     $user_id = $this->_update_withdrawal_requests_status('completed');
    //     $product_id = intval($this->products_model->get_all_products($user_id)->id);

    //     $withdrawal_data = $this->investment_model->get_to_withdrawal_request(intval($this->uri->segment(3, 0)));
    //     // echo "<pre>";
    //     // var_dump($withdrawal_data);
    //     // exit;
    //     $this->investment_model->create_transaction_history_withdrawal($withdrawal_data, $user_id, $product_id);

    //     redirect(base_url());
    // }
}
