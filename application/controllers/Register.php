<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('my_ion_auth'); // Load your extended Ion Auth library
    }

    public function index()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() === FALSE)
        {
            // Load the registration view
            $this->load->view('auth/register');
        }
        else
        {
            $first_name = $this->input->post('first_name');
            $last_name  = $this->input->post('last_name');
            $email      = $this->input->post('email');
            $password   = $this->input->post('password');

            $user_id = $this->my_ion_auth->register($first_name, $last_name, $email, $password);

            if ($user_id)
            {
                // Registration successful, redirect to login page
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect('auth/login');
            }
            else
            {
                // Registration failed, show error message
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('register');
            }
        }
    }
}
