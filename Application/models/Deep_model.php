<?php

class Deep_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_deeps()
    {
        $query = $this->db->get('hmstar_deep');
        return $query->result();
    }
}
