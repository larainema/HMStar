<?php

class Industry_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_industrys($indexi,$indexe)
    {
        $sql = "SELECT * FROM hmstar_movie_category WHERE industryId BETWEEN ? AND ? ";
        $query = $this->db->query($sql, array($indexi,$indexe));
        return $query->result();
    }
}
