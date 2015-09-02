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

    public function get_project_by_type($type, $vote_type, $search)
    {
      if ($type == 'all' or $type == 'new') {
        $sql = "SELECT * FROM hmstar_project ";
      } else if ($type == 'top'){
        $sql = "SELECT P.*, V.* FROM hmstar_project P LEFT JOIN (SELECT projectId, COUNT(projectId) vote FROM `hmstar_vote` GROUP BY projectId) V ON P.projectId = V.projectId ";
      } else if ($type == 'comment'){
        $sql = "SELECT P.*, C.* FROM hmstar_project P LEFT JOIN (SELECT projectId, COUNT(projectId) comment FROM `hmstar_review` GROUP BY projectId) C ON P.projectId = C.projectId ";
      }
      if ($vote_type == 'vote-before')
      {
        $sql .= "WHERE projectStatus = 0 ";
      } else if ($vote_type == 'vote-in')
      {
        $sql .= "WHERE projectStatus = 1 ";
      } else {
        $sql .= "WHERE projectStatus IN (0,1) ";
      }
      if (!empty($search)){
        $sql .= "AND projectName LIKE '$search' ";
      }
      if($type == 'new'){
        $sql .= "ORDER BY projectCreateTime DESC";
      }
      $sql .= "LIMIT 12;";
      log_message('debug', $sql);
      $query = $this->db->query($sql);
      return $query->result();
      //return $sql;
    }
    public function get_project_all()
    {
      $sql = "SELECT P.*, hmstar_vote.* FROM (SELECT * FROM hmstar_project,hmstar_project_category,hmstar_movie_category,hmstar_video_category WHERE hmstar_project.projectCategory = hmstar_project_category.projectCategoryId AND hmstar_project.projectVideoCategory = hmstar_video_category.videoId AND hmstar_project.projectMoveCategory = hmstar_movie_category.industryId) P LEFT JOIN hmstar_vote ON P.projectId = hmstar_vote.projectId";
      $query = $this->db->query($sql);
      return $query->result();
    }
    public function get_project_by_id($projectid)
    {
        $this->db->where('projectId', $projectid);
        $query = $this->db->get('hmstar_project');
        if ($query->num_rows() == 1){
          return $query->row();
        }else{
          return false;
        }

    }

    public function add_project()
    {
      $data = array('projectName' => $projectname,
                    'projectVideo' => $projectvideo,
                    'projectDescription' => $projectdescription,
                    'projectManagement' => $projectmanagement,
                    'projectVideoCategory' => $projectvideocategory,
                    'projectMoveCategory' => $projectmovecategory);
      $this->db->insert('hmstar_project', $data);
      if ($this->db->affected_rows() > 0) {
          return true;
      }
      return false;
    }
}
