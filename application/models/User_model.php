<?php

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function registerUser($data)
    {
        return $this->db->insert('user', $data);
    }
}