<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Investment_model extends CI_Model {

// /$$$$$$                                           /$$                                         /$$    
//|_  $$_/                                          | $$                                        | $$    
//  | $$   /$$$$$$$  /$$    /$$ /$$$$$$   /$$$$$$$ /$$$$$$   /$$$$$$/$$$$   /$$$$$$  /$$$$$$$  /$$$$$$  
//  | $$  | $$__  $$|  $$  /$$//$$__  $$ /$$_____/|_  $$_/  | $$_  $$_  $$ /$$__  $$| $$__  $$|_  $$_/  
//  | $$  | $$  \ $$ \  $$/$$/| $$$$$$$$|  $$$$$$   | $$    | $$ \ $$ \ $$| $$$$$$$$| $$  \ $$  | $$    
//  | $$  | $$  | $$  \  $$$/ | $$_____/ \____  $$  | $$ /$$| $$ | $$ | $$| $$_____/| $$  | $$  | $$ /$$
// /$$$$$$| $$  | $$   \  $/  |  $$$$$$$ /$$$$$$$/  |  $$$$/| $$ | $$ | $$|  $$$$$$$| $$  | $$  |  $$$$/
//|______/|__/  |__/    \_/    \_______/|_______/    \___/  |__/ |__/ |__/ \_______/|__/  |__/   \___/  
//
// old stuff - nechame do v0.6
//
//
//
//                                                                                                      
//   public function get_investment_request($id) {
//        $query = $this->db->get_where('investment_requests', array('id' => $id), 1, 0);
//        return $query->row();
//    }
//    
//    public function update_investment_requests_status($id, $verdict) {
//        $this->approver_id = $this->ion_auth->user()->row()->id;
//        $this->verdict = $verdict;
//
//        $this->db->update('investment_requests', $this, array('id' => $id));
//    }
//    
//        public function create_active_product($investment_data) {
//
//        $data = array(
//            'user_id' => intval($investment_data->user_id),
//            'product_name' => $investment_data->product_name,
//            'investment_request_id' => intval($this->uri->segment(3))
//        );
//
//        $this->db->insert('active_products', $data);
//    }
//        public function get_investment_requests() {
//
//        $this->db->select('a.id, a.product_name, a.deposit, a.request_timestamp, b.username, b.email');
//        $this->db->from('investment_requests a');
//        $this->db->where('approver_id', NULL);
//        $this->db->where('verdict', NULL);
//        $this->db->where('verdict_timestamp', NULL);
//        $this->db->join('users b', 'b.id=a.user_id', 'left');
//        $this->db->order_by('a.request_timestamp', 'desc');
//        $query = $this->db->get();
//
//        return $query->result();
//    }                                                                                                   
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
    public function get_investment_request($id) {
        $query = $this->db->get_where('investment_requests', array('id' => $id), 1, 0);

        return $query->row();
    }
    
    
       public function get_investment_request_based_on_user_id($user_id) {
        $query = $this->db->get_where('investment_requests', array('user_id' => $user_id), 1, 0);

        return $query->row();
    }

    //ADMIN CONTROLLER
    public function update_investment_requests_status($id, $verdict) {
        $this->approver_id = $this->ion_auth->user()->row()->id;
        $this->verdict = $verdict;
        $this->db->update('investment_requests', $this, array('id' => $id));
    }

    //ADMIN CONTROLLER
    public function update_investment_request_wallet_and_btc_value($id, $wallet_id, $value_btc) {

        $this->verdict = 'wallet_sent';
        $this->wallet = $wallet_id;
        $this->value_btc = $value_btc;

        $this->db->update('investment_requests', $this, array('id' => $id));
    }

    public function create_active_investment($investment_data) {

        $data = array(
            'user_id' => intval($investment_data->user_id),
            'product_name' => $investment_data->product_name,
            'investment_request_id' => intval($this->uri->segment(3))
        );

        $this->db->insert('investment_requests', $data);
    }

    public function get_investment_requests() {

        $this->db->select('a.id, a.user_id, a.product_name, a.deposit, a.wallet, a.value, a.request_timestamp, b.username, b.email');
        $this->db->from('investment_requests a');
        $this->db->where('approver_id', NULL);
        $this->db->where('verdict', 'pending');
//        $this->db->where('verdict_timestamp', NULL);
        $this->db->join('users b', 'b.id=a.user_id', 'left');
        $this->db->order_by('a.request_timestamp', 'desc');
        $query = $this->db->get();

        return $query->result();
    }
    
     
       public function get_investment_confirmations() {

        $this->db->select('a.id, a.user_id, a.product_name, a.deposit, a.wallet, a.value, a.request_timestamp, b.username, b.email');
        $this->db->from('investment_requests a');
        $this->db->where('approver_id', NULL);
        $this->db->where('verdict', 'wallet_sent');
//        $this->db->where('verdict_timestamp', NULL);
        $this->db->join('users b', 'b.id=a.user_id', 'left');
        $this->db->order_by('a.request_timestamp', 'desc');
        $query = $this->db->get();

        return $query->result();
    }

    public function insert_deposit_entry() {

        $this->user_id = $this->ion_auth->user()->row()->id; // please read the below note
        $this->product_name = $this->input->post('product');
        $this->value = $_POST['value'];
        $this->wallet = $_POST['wallet'];
        $this->deposit = "deposit";
        $this->verdict = "pending";

        $this->db->insert('investment_requests', $this);
    }

    public function update_deposit_entry() {
        $this->title = $_POST['title'];
        $this->content = $_POST['content'];
        $this->value = 'value';
        $this->wallet = "wallet";
        $this->approver_id = $_POST['approver_id'];
        $this->verdict = "accepted";

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

//
//$$\      $$\ $$\   $$\     $$\             $$\                                            $$\ 
//$$ | $\  $$ |\__|  $$ |    $$ |            $$ |                                           $$ |
//$$ |$$$\ $$ |$$\ $$$$$$\   $$$$$$$\   $$$$$$$ | $$$$$$\  $$$$$$\  $$\  $$\  $$\  $$$$$$\  $$ |
//$$ $$ $$\$$ |$$ |\_$$  _|  $$  __$$\ $$  __$$ |$$  __$$\ \____$$\ $$ | $$ | $$ | \____$$\ $$ |
//$$$$  _$$$$ |$$ |  $$ |    $$ |  $$ |$$ /  $$ |$$ |  \__|$$$$$$$ |$$ | $$ | $$ | $$$$$$$ |$$ |
//$$$  / \$$$ |$$ |  $$ |$$\ $$ |  $$ |$$ |  $$ |$$ |     $$  __$$ |$$ | $$ | $$ |$$  __$$ |$$ |
//$$  /   \$$ |$$ |  \$$$$  |$$ |  $$ |\$$$$$$$ |$$ |     \$$$$$$$ |\$$$$$\$$$$  |\$$$$$$$ |$$ |
//\__/     \__|\__|   \____/ \__|  \__| \_______|\__|      \_______| \_____\____/  \_______|\__|
//                                                                                              
//                                                                                              
    public function get_withdrawal_request($id) {
        $query = $this->db->get_where('withdrawal_requests', array('id' => $id), 1, 0);
        return $query->row();
    }

    public function update_withdrawal_requests_status($id, $verdict) {
        $this->approver_id = $this->ion_auth->user()->row()->id;
        $this->verdict = $verdict;

        $this->db->update('withdrawal_requests', $this, array('id' => $id));

        $query = $this->db->get_where('withdrawal_requests', array('id' => $id, 'verdict' => $verdict), 1, 0);

        return intval($query->row(0)->user_id);
    }

    public function create_active_withdrawal($withdrawal_data) {

        $data = array(
            'user_id' => intval($withdrawal_data->user_id),
            'product_name' => $withdrawal_data->product_name,
            'value' => $withdrawal_data->value,
            'withdrawal' => 'withdrawal',
            'wallet' => $withdrawal_data->wallet,
            'verdict' => 'pending',
//            'withdrawal_request_id' => intval($this->uri->segment(3))
        );

        $this->db->insert('withdrawal_requests', $data);
    }

    public function get_withdrawal_requests() {

        $this->db->select('a.id, a.user_id, a.product_name, a.value, a.wallet, a.request_timestamp, b.username, b.email');
        $this->db->from('withdrawal_requests a');
        $this->db->where('approver_id', NULL);
        $this->db->where('verdict', 'pending');
        $this->db->where('verdict_timestamp', NULL);
        $this->db->join('users b', 'b.id=a.user_id', 'left');
        $this->db->order_by('a.request_timestamp', 'desc');
        $query = $this->db->get();

        return $query->result();
    }

    public function insert_withdrawal_entry() {

        $this->user_id = $this->ion_auth->user()->row()->id;
        $this->product_name = $this->input->post('product');
        $this->value = $this->input->post('value');
        $this->wallet = $this->input->post('wallet');
        $this->withdrawal = 'withdrawal';
        $this->verdict = "pending";

        $this->db->insert('withdrawal_requests', $this);
    }

    public function update_withdrawal_entry() {
        $this->title = $_POST['title'];
        $this->content = $_POST['content'];
        $this->value = 'value';
        $this->wallet = "wallet";
        $this->verdict = "accepted";

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

//$$$$$$$$\                                                           $$\     $$\                     
//\__$$  __|                                                          $$ |    \__|                    
//   $$ | $$$$$$\  $$$$$$\  $$$$$$$\   $$$$$$$\  $$$$$$\   $$$$$$$\ $$$$$$\   $$\  $$$$$$\  $$$$$$$\  
//   $$ |$$  __$$\ \____$$\ $$  __$$\ $$  _____| \____$$\ $$  _____|\_$$  _|  $$ |$$  __$$\ $$  __$$\ 
//   $$ |$$ |  \__|$$$$$$$ |$$ |  $$ |\$$$$$$\   $$$$$$$ |$$ /        $$ |    $$ |$$ /  $$ |$$ |  $$ |
//   $$ |$$ |     $$  __$$ |$$ |  $$ | \____$$\ $$  __$$ |$$ |        $$ |$$\ $$ |$$ |  $$ |$$ |  $$ |
//   $$ |$$ |     \$$$$$$$ |$$ |  $$ |$$$$$$$  |\$$$$$$$ |\$$$$$$$\   \$$$$  |$$ |\$$$$$$  |$$ |  $$ |
//   \__|\__|      \_______|\__|  \__|\_______/  \_______| \_______|   \____/ \__| \______/ \__|  \__|
//
//
// old stuff - nechame sak preco nie
//
//
//
//   public function get_transaction_request($id) {
//        
//        $query = $this->db->get_where('investment_requests', array('id' => $id), 1, 0);
//        return $query->row();
//    }
//    
//    public function update_transaction_requests_status($id, $verdict) {
//        $this->approver_id = $this->ion_auth->user()->row()->id;
//        $this->verdict = $verdict;
//
//        $this->db->update('investment_requests', $this, array('id' => $id));
//    }
//    
//    public function create_active_product_withdrawal($transaction_data) {
//
//        $data = array(
//            'user_id' => intval($transaction_data->user_id),
//            'product_name' => $transaction_data->product_name,
//            
//            'withdrawal_request_id' => intval($this->uri->segment(3))
//            
//        );
//        
//
//        $this->db->insert('active_products', $data);
//    }

    public function get_to_investment_request() {

        $this->db->select('a.id, a.user_id, a.product_name, a.deposit, a.wallet, a.value, b.id, a.request_timestamp, b.user_id, b.product_name');
        $this->db->from('investment_requests a');
//        $this->db->where('approver_id', '1');
        $this->db->where('verdict', 'completed');
//        $this->db->where('verdict_timestamp', NULL);
        $this->db->join('active_products b', 'b.user_id=a.user_id', 'left');
        $this->db->order_by('a.request_timestamp', 'desc');
        $query = $this->db->get();

        return $query->result();
    }

    public function get_to_withdrawal_request() {

        $this->db->select('a.user_id, a.product_name, a.value, a.withdrawal, a.wallet, a.request_timestamp, b.id,  b.user_id, b.product_name');
        $this->db->from('withdrawal_requests a');
   //     $this->db->where('approver_id', '1');
        $this->db->where('verdict', 'completed');
//        $this->db->where('verdict_timestamp', NULL);
        $this->db->join('active_products b', 'b.user_id=a.user_id', 'left');
        $this->db->order_by('a.request_timestamp', 'desc');
        $query = $this->db->get();

        return $query->result();
    }

    public function create_transaction_history($transaction_data, $product_id) {



        $transaction_data = array(
            'user_id' => intval($transaction_data->user_id),
            'product_id' => intval($product_id),
            'type' => $transaction_data->deposit,
            'value' => $this->uri->segment(4, 0),
            'status' => 'completed',
            'approver_id' => $this->ion_auth->user()->row()->id,
        );

        $this->db->insert('transaction_history', $transaction_data);
    }

    public function create_transaction_history_withdrawal($withdrawal_data, $user_id, $product_id) {


        $withdrawal_data = array(
            'user_id' => intval($user_id),
            'product_id' => intval($product_id),
            'type' => 'withdrawal',
            'value' => intval($this->uri->segment(4, 0)),
            'status' => 'completed',
            'approver_id' => $this->ion_auth->user()->row()->id,
        );

        $this->db->insert('transaction_history', $withdrawal_data);
    }

    ////
}


