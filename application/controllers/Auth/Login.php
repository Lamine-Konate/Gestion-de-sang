<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{



public function login()
    {
           
        $this->load->view('Admin/include/header')
                   ->view('auth/login')
                   ->view('Admin/include/footer');
        
    }

}