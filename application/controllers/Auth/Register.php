<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller
{

   public function __construct()
   {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		//$this->load->model('User_model');
   }

   public function register()
   {
	   $this->load->view('Admin/include/header')
				  ->view('auth/register')
				  ->view('Admin/include/footer');
   } 

    public function registerNow()
	{
		
			$this->form_validation->set_rules('nom', 'Nom', 'trim|required|alpha ');
			$this->form_validation->set_rules('prenom_user', 'Prenom', 'trim|required|alpha ');
			$this->form_validation->set_rules('email_user', 'Adress Email', 'trim|required|valid_email|is_unique[user.email]');
			$this->form_validation->set_rules('password_user', 'Mot de passe', 'trim|required|min-lenght[5]');
			$this->form_validation->set_rules('comfirmepsd', 'Confirmation', 'trim|required|min-lenght[5]mathes[password]');
			$this->form_validation->set_rules('localite_user', 'Localité', 'trim|required');
			$this->form_validation->set_rules('tel_user', 'Tel', 'trim|required|min-lenght[5]');

			if($this->form_validation->run() == TRUE)
			{
                
                $data = array(
                    'nom'=>$this->input->post('nom'),
                    'prenom_user'=>$this->input->post('prenom_user'),
                    'email_user'=>$this->input->post('email_user'),
                    'password_user'=>$this->input->post('password_user'),
                    'comfirmepsd'=>$this->input->post('comfirmepsd'),
                    'localite_user'=>$this->input->post('localite_user'),
                    'tel_user'=>$this->input->post('tel_user'));
		
				//$register_user = new User_model;
				$enregistre = $register_user->registerUser($data);
				if($enregistre)
				{
					$this->session->set_flashdata('status', 'Enregistrement a été success');
					redirect(base_url('home/login'));
				}else{
					$this->session->set_flashdata('status', 'erreur d\'enregistrement ');
					redirect(base_url('home/register'));
					
				}
			}
		
        /*redirect(base_url('Welcome/index'));*/
    }

}