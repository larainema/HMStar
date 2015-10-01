<?php

class Project_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /** Get项目by视频标签 **/
    public function get_project_by_videoid($video_id)
    {
        $this->db->where('projectVideoCategory', $video_id);
        $query = $this->db->get('hmstar_project');

        return $query->result();
    }
    /** Get项目by行业分类 **/
    public function get_project_by_industryid($industry_id)
    {
      $sql = "SELECT PV.*, C.comment FROM (SELECT P.*, V.vote FROM hmstar_project P LEFT JOIN (SELECT projectId, COUNT(projectId) vote FROM `hmstar_vote` GROUP BY projectId) V ON P.projectId = V.projectId ) PV LEFT JOIN (SELECT projectId, COUNT(projectId) comment FROM `hmstar_review` GROUP BY projectId) C ON PV.projectId = C.projectId WHERE PV.projectMovieCategory=$industry_id;";
      $query = $this->db->query($sql);

        return $query->result();
    }
    public function get_projects()
    {
        $query = $this->db->get('hmstar_project');

        return $query->result();
    }
    public function get_projects_nomeet()
    {
        $sql = "SELECT * FROM hmstar_project WHERE projectId NOT IN (SELECT projectId FROM hmstar_meet);";
        $query = $this->db->query($sql);

        return $query->result();
    }
    public function get_project_categorys($indexi, $indexe)
    {
        $sql = 'SELECT * FROM hmstar_project_category WHERE projectCategoryId BETWEEN ? AND ? ';
        $query = $this->db->query($sql, array($indexi, $indexe));

        return $query->result();
    }

    public function get_project_by_type($type)
    {
        $sql = 'SELECT P.*, V.vote FROM hmstar_project P LEFT JOIN (SELECT projectId, COUNT(projectId) vote FROM `hmstar_vote` GROUP BY projectId) V ON P.projectId = V.projectId ';

        if ($type == 'comment') {
            $sql = 'SELECT PV.*, C.comment FROM (SELECT P.*, V.vote FROM hmstar_project P LEFT JOIN (SELECT projectId, COUNT(projectId) vote FROM `hmstar_vote` GROUP BY projectId) V ON P.projectId = V.projectId ) PV LEFT JOIN (SELECT projectId, COUNT(projectId) comment FROM `hmstar_review` GROUP BY projectId) C ON PV.projectId = C.projectId ';
        } elseif ($type == 'vote-before') {
            $sql .= 'WHERE projectStatus = 0 ';
        } elseif ($type == 'vote-in') {
            $sql .= 'WHERE projectStatus = 1 ';
        } elseif ($type == 'vote-after') {
            $sql .= 'WHERE projectStatus = 2 ';
        } else {
            $sql .= 'WHERE projectStatus IN (0,1,2) ';
        }
      //if (!empty($search)){
      //  $sql .= "AND projectName LIKE '$search' ";
      //}
      if ($type == 'new') {
          $sql .= 'ORDER BY projectCreateTime DESC ';
      } elseif ($type == 'top') {
          $sql .= 'ORDER BY vote DESC ';
      } elseif ($type == 'comment') {
          $sql .= 'ORDER BY comment DESC ';
      }
        $sql .= 'LIMIT 12;';
        log_message('debug', $sql);
        $query = $this->db->query($sql);

        return $query->result();
      //return $sql;
    }
    public function get_project_all()
    {
        $sql = 'SELECT P.*, hmstar_vote.* FROM (SELECT * FROM hmstar_project,hmstar_project_category,hmstar_movie_category,hmstar_video_category WHERE hmstar_project.projectCategory = hmstar_project_category.projectCategoryId AND hmstar_project.projectVideoCategory = hmstar_video_category.videoId AND hmstar_project.projectMovieCategory = hmstar_movie_category.industryId) P LEFT JOIN hmstar_vote ON P.projectId = hmstar_vote.projectId';
        $query = $this->db->query($sql);

        return $query->result();
    }
    public function get_project_by_id($projectid)
    {
        $sql = "SELECT PV.*, C.comment FROM (SELECT P.*, V.vote FROM hmstar_project P LEFT JOIN (SELECT projectId, COUNT(projectId) vote FROM `hmstar_vote` GROUP BY projectId) V ON P.projectId = V.projectId ) PV LEFT JOIN (SELECT projectId, COUNT(projectId) comment FROM `hmstar_review` GROUP BY projectId) C ON PV.projectId = C.projectId WHERE PV.projectId=$projectid;";
        $query = $this->db->query($sql);
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    /** Admin part **/
    public function add_project()
    {
        $data = array('projectName' => $projectname,
                    'projectVideo' => $projectvideo,
                    'projectDescription' => $projectdescription,
                    'projectManagement' => $projectmanagement,
                    'projectVideoCategory' => $projectvideocategory,
                    'projectMoveCategory' => $projectmovecategory, );
        $this->db->insert('hmstar_project', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    }
    /** 赞一下 **/
    public function add_favour($project_id)
    {
        $sql = 'UPDATE hmstar_project SET projectFavour = projectFavour + 1 WHERE projectId = '.$project_id;
        $query = $this->db->query($sql);

        return $query;
    }
    /** 关注 **/
    public function add_attention($project_id, $username)
    {
        $sql = 'UPDATE hmstar_project SET projectAttention = projectAttention + 1 WHERE projectId = '.$project_id.';';
        $sql1 = "UPDATE hmstar_user SET userAttention = CONCAT(userAttention,',$project_id') WHERE userName = '$username';";
        $this->db->trans_start();
        $this->db->query($sql);
        $this->db->query($sql1);
        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            return false;
        } else {
            return true;
        }
    }
    /** 取消关注 **/
    public function del_attention($project_id, $username)
    {
        $sql = 'UPDATE hmstar_project SET projectAttention = projectAttention - 1 WHERE projectId = '.$project_id.';';
        $sql1 = "UPDATE hmstar_user SET userAttention = REPLACE(userAttention,',$project_id','') WHERE userName = '$username';";
        $this->db->trans_start();
        $this->db->query($sql);
        $this->db->query($sql1);
        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            return false;
        } else {
            return true;
        }
    }
    /** 免费投票 **/
    public function add_freevote($project_id, $userid)
    {
        $data = array('userId' => $userid,
                    'projectId' => $project_id,
                    'voteContent' => 'free', );
        $this->db->insert('hmstar_vote', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    }
    /** 项目评论 **/
    public function get_comments($project_id, $page)
    {
      $offset = ($page - 1) * 5;
      $sql = "SELECT * FROM hmstar_review WHERE projectId = $project_id LIMIT 5 OFFSET $offset;";
      $query = $this->db->query($sql);
      return $query->result();
    }
    public function get_commets_pagecount($project_id)
    {
      $sql = "SELECT count(*) AS count FROM hmstar_review WHERE projectId = $project_id;";
      $query = $this->db->query($sql);
      $totlecount = $query->row();
      //print_r($totlecount);
      $pagecount = intval($totlecount->count / 5);
      if((intval($totlecount->count) % 5) == 0)
      {
        return $pagecount;
      }else{
        return $pagecount+1;
      }
    }
}
