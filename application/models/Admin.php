<?php

class Admin extends CI_Model
{
    public function insertadmin($data)
    {
        $this->db->insert('users', $data);
    }
}