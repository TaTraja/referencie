<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function index()
    {

        $data['user'] = $this->_check_login_and_get_user_info($this->ion_auth->user()->row()->id);

        $this->load->model('products_model');
        $this->load->model('transactions_model');
        $this->load->model('revenue_model');
        $this->load->model('investment_model');

        //ZMENA JE ZIVOT tu predpokladame ze clovek ma iba jeden produkt, bude sa to menit na t1 a jeden t2 mozny pre kazdeho
        $data['product'] = $this->products_model->get_all_products($this->ion_auth->user()->row()->id);


        $data['investment_request'] = $this->investment_model->get_investment_request_based_on_user_id($this->ion_auth->user()->row()->id);


        //ak nemas produkt nezobrayuj data
        //v0.15 - nepustime cloveka do dashboardu kym nema produkt 
        if ($data['product'] === NULL) {
            $data['deposit'] = "";
            $data['history'] = "";
        } else {
            $data['deposit'] = $this->transactions_model->get_initial_deposit($this->ion_auth->user()->row()->id, intval($data['product']->id));
            //             echo '</pre>';
            //            var_dump($data['deposit']);
            //            exit;
            $data['transaction_history'] = $this->transactions_model->get_transaction_history($this->ion_auth->user()->row()->id, intval($data['product']->id));
        }

        if ($data['investment_request'] && !$data['transaction_history']) {
            $this->load->view("dashboard/elements/header", $data);
            $this->load->view("dashboard/elements/topbar_menu", $data);
            $this->load->view("dashboard/elements/menu", $data);
            $this->load->view('dashboard/dashboard_passive', $data);
            $this->load->view("dashboard/elements/footer", $data);
            //ak je v url "request_received" poslat tam sweet_alert - na dashboard ideme po 10 sek - nastavene v JS sweetalert
            if ($this->uri->segment(3, 0) === "request_received") {
                $this->load->view("dashboard/elements/sweet_alert", $data);
            }

            return;
        }


        //   /$$$$$$$                              /$$                    
        //  | $$__  $$                            |__/                    
        //  | $$  \ $$ /$$$$$$   /$$$$$$$ /$$$$$$$ /$$ /$$    /$$ /$$$$$$ 
        //  | $$$$$$$/|____  $$ /$$_____//$$_____/| $$|  $$  /$$//$$__  $$
        //  | $$____/  /$$$$$$$|  $$$$$$|  $$$$$$ | $$ \  $$/$$/| $$$$$$$$
        //  | $$      /$$__  $$ \____  $$\____  $$| $$  \  $$$/ | $$_____/
        //  | $$     |  $$$$$$$ /$$$$$$$//$$$$$$$/| $$   \  $/  |  $$$$$$$
        //  |__/      \_______/|_______/|_______/ |__/    \_/    \_______/
        //                                                                
        //                                                                
        //                                                                

        //ak mas t1
        if ($data['product'] <> NULL) {
            if ($data['product']->product_name === "passive-safety") {
                $data['revenues'] = $this->revenue_model->get_passive_safety_revenues($this->ion_auth->user()->row()->id, intval($data['product']->id));
                //spojime a zistime rev a tr_history
                $merged = array_merge($data['revenues'], $data['transaction_history']);

                // Sorting array by time (ASC ORDER)
                usort($merged, function ($firstItem, $secondItem) {
                    $timeStamp1 = strtotime($firstItem->timestamp);
                    $timeStamp2 = strtotime($secondItem->timestamp);
                    return $timeStamp1 - $timeStamp2;
                });
                $index_counter = 0;

                foreach ($merged as $merged_line) {

                    if ($merged_line->type == "withdrawal") {

                        $withdrawal_index_and_value[$index_counter]['value'] = $merged_line->value;
                    }

                    $index_counter = $index_counter + 1;
                }

                //$data['withdrawal_index_and_values'] = $withdrawal_index_and_value;

                $total_revenue = 0;

                foreach ($data['revenues'] as $revenue_line) {
                    $total_revenue = $total_revenue + $revenue_line->value;
                }

                //echo $total_revenue;

                $counter = 0;
                $total_withdrawal = 0;
                foreach ($data['transaction_history'] as $withdrawal_line) {

                    if ($withdrawal_line->type == "withdrawal") {

                        $total_withdrawal = $total_withdrawal + $withdrawal_line->value;
                    } elseif ($withdrawal_line->type == "affiliate") {
                        $affiliate = $affiliate + $withdrawal_line->value;
                    }

                    $counter++;
                }
                //pocitame balance
                $data['balance'] = intval($total_revenue) - intval($total_withdrawal) + intval($affiliate);

                //VIEW DELIME PODLA TYPU PRODUKTU
                $this->load->view("dashboard/elements/header", $data);
                $this->load->view("dashboard/elements/topbar_menu", $data);
                $this->load->view("dashboard/elements/menu", $data);
                $this->load->view('dashboard/dashboard_passive', $data);
                $this->load->view("dashboard/elements/footer", $data);

                if ($this->uri->segment(3, 0) === "request_received") {
                    $this->load->view("dashboard/elements/sweet_alert", $data);
                }
            }
        } else {
            //ak clovek nema produkt ide na vyber produktov
            if ($data['investment_request'] <> NULL) {
            } else {
                redirect(base_url('finance/deposit'));
                exit;
            }
        }


        //  $$\   $$\           $$\                 $$\       $$\ 
        //  $$ |  $$ |          $$ |                \__|      $$ |
        //  $$ |  $$ |$$\   $$\ $$$$$$$\   $$$$$$\  $$\  $$$$$$$ |
        //  $$$$$$$$ |$$ |  $$ |$$  __$$\ $$  __$$\ $$ |$$  __$$ |
        //  $$  __$$ |$$ |  $$ |$$ |  $$ |$$ |  \__|$$ |$$ /  $$ |
        //  $$ |  $$ |$$ |  $$ |$$ |  $$ |$$ |      $$ |$$ |  $$ |
        //  $$ |  $$ |\$$$$$$$ |$$$$$$$  |$$ |      $$ |\$$$$$$$ |
        //  \__|  \__| \____$$ |\_______/ \__|      \__| \_______|
        //            $$\   $$ |                                  
        //            \$$$$$$  |                                  
        //             \______/                                   


        //ak mas produkt t2
        if ($data['product'] <> NULL) {
            if ($data['product']->product_name === "hybrid") {

                //ziskaj vsetky revenues
                $data['revenues'] = $this->revenue_model->get_hybrid_revenues_for_particular_user($this->ion_auth->user()->row()->id, intval($data['product']->id));
                //                 echo '</pre>';
                //                var_dump($data['balance']);
                //                exit;
                
                //ziskaj posledny balance pre vypocet novej odmeny
                $data['old_balance'] = $this->revenue_model->get_last_known_hybrid_balance_for_particular_user($this->ion_auth->user()->row()->id, intval($data['product']->id));

                // $total_revenue = 0;

                $data['transactions_hybrid'] = $this->transactions_model->get_transaction_history($this->ion_auth->user()->row()->id, intval($data['product']->id));

                //Zistujueme hodnotu depositu na hybide, teda aj balance do dalsieho mesiaca
                $hybrid_deposit = 0;
                $dep_affiliate = 0;
                $wit_affiliate = 0;
                $new_balance = 0;

                foreach ($data['transactions_hybrid'] as $deposit_line) {
                    if ($deposit_line->type == "deposit") {
                        $hybrid_deposit = $hybrid_deposit + $deposit_line->value;
                    } elseif ($deposit_line->type == "withdrawal") {
                        $new_balance = $new_balance - $deposit_line->value;
                    } elseif ($deposit_line->type == "dep_affiliate") {
                        $dep_affiliate = $dep_affiliate + $deposit_line->value;
                    } elseif ($deposit_line->type == "wit_affiliate") {
                        $wit_affiliate = $wit_affiliate - $deposit_line->value;
                    }
                    $data['hybrid_deposit'] = intval($hybrid_deposit);
                    ////

                    //Zistujeme balance s hodnotami vkladu vyberu a affiliate 


                    //           
                }
                $data['hybrid_deposit'] = intval($hybrid_deposit);
                $data['new_balance'] = $data['old_balance'] + intval($dep_affiliate) + intval($wit_affiliate);
                //                 echo '</pre>';
                //                var_dump($data['balance']);
                //                exit;





                $this->load->view("dashboard/elements/header", $data);
                $this->load->view("dashboard/elements/topbar_menu", $data);
                $this->load->view("dashboard/elements/menu", $data);
                $this->load->view('dashboard/dashboard_hybrid', $data);
                $this->load->view("dashboard/elements/footer", $data);

                if ($this->uri->segment(3, 0) === "request_received") {
                    $this->load->view("dashboard/elements/sweet_alert", $data);
                }
            }
        } else {
            redirect(base_url('finance/deposit'));
            exit;
        }
    }

    public function verify()
    {

        $data['user'] = $this->_check_login_and_get_user_info($this->ion_auth->user()->row()->id);

        if (intval($data['user']->verified)) {

            redirect(base_url("dashboard"));
            exit;
        }

        $this->load->view("dashboard/verify/verify", $data);
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
        return $this->user_model->get_user_info($id);
    }
}
