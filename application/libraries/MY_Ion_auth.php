<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Ion_auth extends Ion_auth {

    public function __construct()
    {
        parent::__construct();
    }

    public function register($first_name, $last_name, $email, $password)
    {
        // Prepare user data
        $username = strtolower($first_name . '.' . $last_name);
        $email = strtolower($email);
        $additional_data = array(
            'first_name' => $first_name,
            'last_name'  => $last_name,
        );

        // Register user
        $user_id = $this->ion_auth->register($username, $password, $email, $additional_data);

        return $user_id;
    }
}
