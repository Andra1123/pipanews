<?php

class Auth_model extends CI_Model
{
    public function login($email)
    {
        return $this->db->get_where('users', ['email' => $email])->row();
    }
}
