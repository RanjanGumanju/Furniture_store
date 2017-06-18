<?php
class User extends CI_Controller
{
    public function login()
    {
        $this->load->view('pages/login');
    }
}

