<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Investment_model extends CI_Model {

    public function get_investment_request($id) {
        $query = $this->db->get_where('investment_requests', array('id' => $id), 1, 0);
        return $query->row();
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

    public function create_active_product($investment_data) {

        $data = array(
            'user_id' => intval($investment_data->user_id),
            'product_name' => $investment_data->product_name,
            'investment_request_id' => intval($this->uri->segment(3))
        );

        $this->db->insert('active_products', $data);
    }

    public function update_investment_requests_status($id, $verdict) {
        $this->approver_id = $this->ion_auth->user()->row()->id;
        $this->verdict = $verdict;

        $this->db->update('investment_requests', $this, array('id' => $id));
    }

}
