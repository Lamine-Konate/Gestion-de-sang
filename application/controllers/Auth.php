<?php

class Auth extends CI_Controller
{

   

    public function registerNow()
	{
		if(isset($_POST['register']))
		{
			$this->form_validation->set_rules('nom', 'Nom', 'required');
			$this->form_validation->set_rules('prenom_user', 'Prenom', 'required');
			$this->form_validation->set_rules('email_user', 'Adress Email', 'required');
			$this->form_validation->set_rules('password_user', 'Mot de passe', 'required|min-lenght[5]');
			$this->form_validation->set_rules('comfirmepsd', 'Confirmation', 'required|min-lenght[5]mathes[password]');
			$this->form_validation->set_rules('localite_user', 'Localité', 'required');
			$this->form_validation->set_rules('tel_user', 'Tel', 'required|min-lenght[5]');

			if($this->form_validation->run()==TRUE)
			{
                
                $data = array(
                    'nom'=>$_POST['nom'],
                    'prenom_user'=>$_POST['prenom_user'],
                    'email_user'=>$_POST['email_user'],
                    'password_user'=>$_POST['password_user'],
                    'comfirmepsd'=>$_POST['comfirmepsd'],
                    'localite_user'=>$_POST['localite_user'],
                    'tel_user'=>$_POST['tel_user'],
                $this->db->insert('user', $data));

                $this->set_flashdata("Success", "Compte crée avec success !")
				/*$nom = $this->input->post('nom');
				$prenom = $this->input->post('prenom');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$comfirmepsd = $this->input->post('comfirmepsd');
				$localite = $this->input->post('localite');
				$tel = $this->input->post('Tel');

				

				$this->load->model('admin');
				$this->Admin->insertadmin($data);
				redirect(base_url('Welcome_message')); */

			}
		}
        $this->load->view('registera');
        /*redirect(base_url('Welcome/index'));*/
    }

}