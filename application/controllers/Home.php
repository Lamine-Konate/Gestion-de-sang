<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
    class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }


    public function index()
    {
        
       
        $this->load->view('accueil');

    }

    public function login()
    {
           
        $this->load->view('login');
        
    }

    public function register()
    {
        $this->load->view('register');
    }
   

}