<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('includes/header')
				   ->view('welcome_message')
				   ->view('includes/footer');
	}

	public function Accueil()
	{
		echo "Im a programmer";
		$this->load->view('Accueil');
	}

	public function register()
	{
		$this->load->view('register')
				   ->view('includes/footer');
		
	}

	public function registerNow()
	{
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('nom', 'Nom', 'required');
			$this->form_validation->set_rules('prenom', 'Prenom', 'required');
			$this->form_validation->set_rules('email', 'Adress Email', 'required');
			$this->form_validation->set_rules('password', 'Mot de passe', 'required');
			$this->form_validation->set_rules('comfirmepsd', 'Confirmation', 'required');
			$this->form_validation->set_rules('localite', 'Localité', 'required');
			$this->form_validation->set_rules('tel', 'Tel', 'required');

			if($this->form_validation->run()==TRUE)
			{
				$nom = $this->input->post('nom');
				$prenom = $this->input->post('prenom');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$comfirmepsd = $this->input->post('comfirmepsd');
				$localite = $this->input->post('localite');
				$tel = $this->input->post('Tel');

				$data = array(
					'nom'=>$nom,
					'prenom'=>$prenom,
					'email'=>$email,
					'password'=>$password,
					'comfirmepsd'=>$comfirmepsd,
					'localite'=>$localite,
					'tel'=>$tel,
				);

				$this->load->model('admin');
				$this->Admin->insertadmin($data);
				redirect(base_url('accueil'));

			}
		}
		
	}
}
