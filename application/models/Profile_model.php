<?php
class Profile_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_user($user_id) {
        $query = $this->db->get_where('users', array('id' => $user_id));
        return $query->row_array();
    }

    public function update_user($user_id, $data) {
        $this->db->where('id', $user_id);
        return $this->db->update('users', $data);
    }
}
