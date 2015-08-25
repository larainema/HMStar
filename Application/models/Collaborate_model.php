<?php

class Collaborate_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_collaborates()
    {
        $query = $this->db->get('hmstar_collaborate');
        return $query->result();
    }
}
