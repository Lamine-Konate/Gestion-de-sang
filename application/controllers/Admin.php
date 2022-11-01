<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Admin extends CI_Controller
   {
      public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('agent_model');
    }

    public function index()
    {
        
        // lister les noms
       $data['agent_de_sante'] = $this->agent_model->getAllData();

       return $this->load->view('Admin/include/header')
                        ->view('Admin/include/sidebar')
                        ->view('Admin/agents', $data)
                        ->view('Admin/include/footer');   
                       
     }
      //ajouter les noms
     public function ajout()
     {
      $this -> form_validation -> set_rules ( 'nom_agent' ,  'Nom' ,  'required|trim' ); 
      $this -> form_validation -> set_rules ( 'prenom_agent' ,  'Prenom' ,  'required|trim' ); 
      $this ->form_validation -> set_rules ( 'email_agent' ,  'Mail' ,  'required|trim|valid_email' );
      $this -> form_validation -> set_rules ( 'password_agent' ,  'Password' ,  'required|trim' );
       $this ->form_validation -> set_rules ( 'profession_agent' ,  'Profession' ,  'required|trim');
      if  ( $this -> form_validation -> run ()  ==  true )
      { 
               $this -> load ->model( 'agent_model' );
               $this->agent_model->insert_data(); 
      }
      {
        redirect(base_url());  
      }
     }
      // modifier les noms
     public function edit($id)
     {
      $this->load->model('agent_model');
      $data['edit'] = $this->agent_model->edit($id);
      $this->load->view('Admin/agentsEdit', $data);
     }

     //Mettre à jour
     public function update($id)
     {
      $this->agent_model->update($id);
      redirect(base_url());
     }

     //Supprimer
     public function delete($id)
     {
      $this->agent_model->delete($id);
      redirect(base_url());
     }   
   }
 ?>

