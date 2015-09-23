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

    public function get_collaborate_by_id($collaborate_id)
    {
        $this->db->where('collaborateId', $collaborate_id);
        $query = $this->db->get('hmstar_collaborate');
        return $query->result();
    }

    /** Admin part **/
    public function insert_collaborate($collaborate_logo,$collaborate_type,$collaborate_name,$collaborate_description)
    {
      $data = array('collaborateType' => $collaborate_type, 'collaborateName' => $collaborate_name, 'collaborateLogo' => $collaborate_logo, 'collaborateDescription' => $collaborate_description);
      $this->db->insert('hmstar_collaborate', $data);
      if ($this->db->affected_rows() > 0) {
          return true;
      }
      return false;
    }
}
