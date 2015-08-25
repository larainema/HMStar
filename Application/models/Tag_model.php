<?php

class Tag_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_video_category()
    {
        $query = $this->db->get('hmstar_video_category');
        return $query->result();
    }
}
