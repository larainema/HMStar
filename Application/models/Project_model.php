<?php

class Project_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_project_by_videoid($video_id)
    {
        $this->db->where('projectVideoCategory', $video_id);
        $query = $this->db->get('hmstar_project');
        return $query->result();
    }
    public function get_projects()
    {
       $query = $this->db->get('hmstar_project');
       return $query->result();
    }
    public function get_project_categorys($indexi, $indexe)
    {
      $sql = "SELECT * FROM hmstar_project_category WHERE projectCategoryId BETWEEN ? AND ? ";
      $query = $this->db->query($sql, array($indexi,$indexe));
      return $query->result();
    }
}
