<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_model extends CI_Model {

    public function get_user_info($id) {
        $query = $this->db->get_where('users', array('id' => $id), 1, 0);
        return $query->row();
    }

    public function get_last_ten_entries() {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    public function insert_entry() {

        $this->user_id = $this->ion_auth->user()->row()->id; // please read the below note
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
