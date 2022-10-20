<?php

class Register extends CI_Controller
{

   public function __construct()
   {
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->library('form_validation');
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

			if($this->form_validation->run()==FALSE)
			{
              

			}
		
        /*redirect(base_url('Welcome/index'));*/
    }

}