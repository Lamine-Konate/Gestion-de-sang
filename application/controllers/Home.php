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
        $this->load->view('Admin/include/header')
                   ->view('Admin/include/sidebar')
                   ->view('accueil')
                   ->view('Admin/include/footer');

        $data['agent_de_sante'] = $this->agent_model->getAllData();

        return $this->load->view('Admin/agents', $data);        
    }

    public function agents()
    {
        
      
        $this->load->view('Admin/include/header')
                   ->view('Admin/include/sidebar')
                   ->view('Admin/agents')
                   ->view('Admin/include/footer');
                         
    }

    public function blank()
    {
      
        $this->load->view('Admin/include/header')
                   ->view('Admin/include/sidebar')
                   ->view('Admin/blank')
                   ->view('Admin/include/footer');
    }

    public function basic_table()
    {
      
        $this->load->view('Admin/include/header')
                   ->view('Admin/include/sidebar')
                   ->view('Admin/basic-table')
                   ->view('Admin/include/footer');
    }

    public function fontawesome ()
    {
       
        $this->load->view('Admin/include/header')
                   ->view('Admin/include/sidebar')
                   ->view('Admin/fontawesome')
                   ->view('Admin/include/footer');
    }

    public function map_google ()
    {
       
        $this->load->view('Admin/include/header')
                   ->view('Admin/include/sidebar')
                   ->view('Admin/map-google')
                   ->view('Admin/include/footer');
    }

    public function file_not_found ()
    {
        
        $this->load->view('Admin/include/header')
                   ->view('Admin/include/sidebar')
                   ->view('Admin/404')
                   ->view('Admin/include/footer');
    }
    
    
   

} 