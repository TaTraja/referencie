<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {

    public function get_all_products($user_id) {
        $query = $this->db->get_where('active_products', array('user_id' => $user_id), 1, 0);
        return $query->row();
    }

    public function get_all_active_passive_safety_products_count() {
        $this->db->where('product_name', 'passive-safety');
        return $this->db->count_all_results('active_products');
    }

    public function get_all_active_hybrid_products_count() {
        $this->db->where('product_name', 'hybrid');
        return $this->db->count_all_results('active_products');
    }

    public function create_active_product($investment_data) {

        $data = array(
            'user_id' => intval($investment_data->user_id),
            'product_name' => $investment_data->product_name,
            'investment_request_id' => intval($this->uri->segment(3))
        );

        $this->db->insert('active_products', $data);
        return $this->db->insert_id();
    }

    public function get_products_and_transactions($user_id) {

        $this->db->select('a.id, a.user_id, a.product_name, a.investment_request_id, a.product_activation_timestamp, b.id, b.user_id, b.product_id, b.value, b.type, b.status, b.date');
        $this->db->from('active_products a');
        $this->db->where('a.user_id', $user_id);
        $this->db->join('transaction_history b', 'b.product_id=a.id', 'left');
        $this->db->order_by('a.id', 'asc');
        $query = $this->db->get();

        return $query->result();
    }

    public function get_pasive_safety_products($user_id) {
        $query = $this->db->get_where('active_products', array('user_id' => $user_id, 'product_name' => 'passive safety'), 0, 0);
        return $query->result();
    }

    public function get_pasive_safety_revenues($active_product_id) {
        $query = $this->db->get_where('passive_safety_revenues', array('active_product_id' => $active_product_id), 0, 0);
        return $query->result();
    }

    public function insert_entry() {
        $this->title = $_POST['title']; 
        $this->content = $_POST['content'];
        $this->date = time();

        $this->db->insert('entries', $this);
    }

    public function update_entry() {
        $this->title = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}
