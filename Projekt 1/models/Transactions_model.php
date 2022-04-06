<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Transactions_model extends CI_Model {

    public function get_initial_deposit($user_id, $product_id) {
        $query = $this->db->get_where('transaction_history', array('product_id' => $product_id, 'user_id' => $user_id, 'type' => 'deposit'), 1, 0);
        return $query->row();
       
//       echo '</pre>';
//        var_dump($query->row());
//        exit;

        
    }

//    public function get_deposit_value_hybrid($user_id, $product_id) {
//        $deposits = $this->db->get_where('transaction_history', array('product_id' => $product_id, 'user_id' => $user_id, 'type' => 'deposit'), 1, 0);
//        $withdrawals = $this->db->get_where('transaction_history', array('product_id' => $product_id, 'user_id' => $user_id, 'type' => 'withdrawal'), 1, 0);
//        return $deposits;
//    }
    public function _get_transaction_history_admin() {

        $this->db->select('value, product_id, type, product_name');
        $this->db->from('transaction_history');
        //$this->db->where('approver_id', $approver_id);
        //$this->db->where('product_id', $product_id);
        $this->db->where('type', 'deposit');
        $this->db->order_by('timestamp', 'asc');

        $query = $this->db->get();

        return $query->result();
    }
    
    public function get_transaction_history($user_id, $product_id) {

        $this->db->select('*');
        $this->db->from('transaction_history');
        $this->db->where('user_id', $user_id);
        $this->db->where('product_id', $product_id);
        $this->db->order_by('timestamp', 'asc');

        $query = $this->db->get();

        return $query->result();
    }
//    

    public function get_passive_safety_transactions() {
        
    }

    public function get_transaction_history_for_particular_user($user_id) {

        $this->db->select('a.user_id, a.product_id, a.value, a.status, a.date, b.id, b.product_name, b.investment_request_id, b.product_activation_timestamp');
        $this->db->from('transaction_history a');
        $this->db->where('a.user_id', $user_id);
        $this->db->join('active_products b', 'b.id=a.product_id', 'left');
        $this->db->order_by('a.date', 'desc');
        $query = $this->db->get();

        return $query->result();
    }

    public function insert_entry() {

        $this->user_id = $this->ion_auth->user()->row()->id; // please read the below note
        $this->product_id = $this->input->post('product');
        $this->type = "deposit";
        $this->value = "deposit_usd";
        $this->status = "pending";
        $this->timestamp = time();

        $this->db->insert('transaction_history', $this);
    }

    public function update_entry() {
        $this->title = $_POST['title'];
        $this->content = $_POST['content'];
        $this->type = "deposit";
        $this->status = "pending";

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




    public function get_transaction_request($id) {

        $query = $this->db->get_where('investment_requests', array('id' => $id), 1, 0);
        return $query->row();
    }

    public function update_transaction_requests_status($id, $verdict) {
        $this->approver_id = $this->ion_auth->user()->row()->id;
        $this->verdict = $verdict;

        $this->db->update('investment_requests', $this, array('id' => $id));
    }

    public function create_active_product($investment_data) {

        $data = array(
            'user_id' => intval($investment_data->user_id),
            'product_name' => $investment_data->product_name,
            'investment_request_id' => intval($this->uri->segment(3))
        );

        $this->db->insert('active_products', $data);
    }

    public function get_investment_requests() {

        $this->db->select('a.id, a.product_name, a.deposit, a.request_timestamp, b.username, b.email');
        $this->db->from('investment_requests a');
        $this->db->where('approver_id', NULL);
        $this->db->where('verdict', NULL);
        $this->db->where('verdict_timestamp', NULL);
        $this->db->join('users b', 'b.id=a.user_id', 'left');
        $this->db->order_by('a.request_timestamp', 'desc');
        $query = $this->db->get();

        return $query->result();
    }
    
   
    
    
//    public function insert_deposit_entry() {
//
//        $this->user_id = $this->ion_auth->user()->row()->id; // please read the below note
//        $this->product_name = $this->input->post('product');
//        $this->value = $_POST['value'];
//        $this->wallet = $_POST['wallet'];
//        $this->deposit = "deposit";
//        $this->verdict = "pending";
//        
//
//        $this->db->insert('investment_requests', $this);
//    }
//
//    public function update_deposit_entry() {
//        $this->title = $_POST['title'];
//        $this->content = $_POST['content'];
//        $this->value = 'value';
//        $this->wallet = "wallet";
//        $this->approver_id = $_POST['approver_id'];
//        $this->verdict = "accepted";
//
//        $this->db->update('entries', $this, array('id' => $_POST['id']));
//    }
}
