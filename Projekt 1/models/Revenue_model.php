<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Revenue_model extends CI_Model {

    public function get_passive_safety_revenues($user_id, $active_product_id ) {
        //$query = $this->db->get_where('passive_safety_revenues', array('active_product_id' => $active_product_id, 'user_id' => $user_id));

        $this->db->select('*');
        $this->db->from('passive_safety_revenues');
        $this->db->where('active_product_id', $active_product_id);
        $this->db->where('user_id', $user_id);
        $this->db->order_by('timestamp', 'asc');
        $query = $this->db->get();

        return $query->result();
    }

    public function get_hybrid_revenues_for_particular_user($user_id, $product_id) {

        $this->db->select('*');
        $this->db->from('hybrid_revenues');
        $this->db->where('product_id', $product_id);
        $this->db->where('user_id', $user_id);
        $this->db->order_by('timestamp', 'asc');
        $query = $this->db->get();

        return $query->result();
    }

    public function get_last_known_hybrid_balance_for_particular_user($user_id, $product_id) {

        $this->db->select('value_balance');
        $this->db->from('hybrid_revenues');
        $this->db->where('product_id', $product_id);
        $this->db->where('user_id', $user_id);
        $this->db->order_by('timestamp', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();

        return $query->row(0)->value_balance;
        
    }

    public function get_last_ten_entries() {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    public function insert_entry() {

        $this->user_id = $this->ion_auth->user()->row()->id; 
        $this->product = $this->input->post('product');
        $this->type = "deposit";
        $this->status = "pending";
        $this->date = time();

        $this->db->insert('transaction_history', $this);
    }

    public function update_entry() {
        $this->title = $_POST['title'];
        $this->content = $_POST['content'];
        $this->type = "deposit";
        $this->status = "pending";

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}
