<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->model('profile_model');
        $this->load->helper('url');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
    }

    public function index() {
        $user_id = $this->ion_auth->get_user_id();
        $data['user'] = $this->profile_model->get_user($user_id);
        $this->load->view('profile_view', $data);
    }

    public function edit() {
        $user_id = $this->ion_auth->get_user_id();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $data['user'] = $this->profile_model->get_user($user_id);
            $this->load->view('profile_edit_view', $data);
        } else {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
            );
            $this->profile_model->update_user($user_id, $data);
            redirect('profile');
        }
    }
}
