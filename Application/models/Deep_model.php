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
    public function get_deeps_by_type($type)
    {
        if ($type == 'all'){
          $sql = 'SELECT * FROM hmstar_deep;';
        }elseif ($type == 'comment') {
            $sql = 'SELECT D.*, C.comments FROM hmstar_deep D LEFT JOIN (SELECT deepId, COUNT(deepId) comments FROM hmstar_deep_review GROUP BY deepId) C ON D.deepId = C.deepId LIMIT 10;';
        }else{
          $sql = 'SELECT * FROM hmstar_deep LIMIT 10;';
        }
        $query = $this->db->query($sql);

        return $query->result();
    }
    public function get_deeps_by_page($per_page, $type)
    {
        $sql = 'SELECT * FROM hmstar_deep ';
        if ($type == 'comment') {
            $sql = 'SELECT D.*, C.comments FROM hmstar_deep D LEFT JOIN (SELECT deepId, COUNT(deepId) comments FROM hmstar_deep_review GROUP BY deepId) C ON D.deepId = C.deepId ';
        }
        if ($type == 'new') {
            $sql .= 'ORDER BY deepTime DESC ';
        } elseif ($type == 'top') {
            $sql .= 'ORDER BY deepFavour DESC ';
        }elseif ($type == 'comment'){
          $sql .= 'ORDER BY comments DESC ';
        }
        $sql .= "LIMIT 10 OFFSET $per_page;";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function get_deep_by_id($deep_id)
    {
        $this->db->where('deepId', $deep_id);
        $query = $this->db->get('hmstar_deep');

        return $query->result();
    }

    public function get_meets()
    {
        $sql = 'SELECT * FROM hmstar_meet LIMIT 5;';
        $query = $this->db->query($sql);

        return $query->result();
    }
    public function get_meet_by_time($meet_time)
    {
        $this->db->where('meetTime', $meet_time);
        $query = $this->db->get('hmstar_meet');
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function get_meet_by_project($project_id)
    {
        $this->db->where('projectId', $project_id);
        $query = $this->db->get('hmstar_meet');
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function get_meet_pagecount()
    {
        $sql = 'SELECT count(*) AS count FROM hmstar_meet;';
        $query = $this->db->query($sql);
        $totlecount = $query->row();
      //print_r($totlecount);
      $pagecount = intval($totlecount->count / 8);
        if ((intval($totlecount->count) % 8) == 0) {
            return $pagecount;
        } else {
            return $pagecount + 1;
        }
    }
    public function get_meet_by_page($page)
    {
        $offset = ($page - 1) * 8;
        $sql = "SELECT * FROM hmstar_meet LIMIT 8 OFFSET $offset;";
        $query = $this->db->query($sql);

        return $query->result();
    }
    public function get_meetId()
    {
        $sql = 'SELECT max(meetId) AS maxid FROM hmstar_meet;';
        $query = $this->db->query($sql);
        if ($query->num_rows() == 1) {
            return $query->row()->maxid;
        } else {
            return false;
        }
    }
    /** Admin part **/
    public function insert_deep($deep_title, $deep_img, $deep_content, $deep_type, $deep_user, $deep_user_img, $deep_user_contact)
    {
        $sql = "INSERT INTO hmstar_deep (deepTitle, deepImg, deepTime, deepContent, deepUser, deepUserImg, deepUserContact, deepType) VALUES('$deep_title', '$deep_img', now(), '$deep_content', '$deep_user', '$deep_user_img', '$deep_user_contact', '$deep_type');";
      //$data = array('deepTitle' => $deep_title, 'deepImg' => $deep_img, 'deepTime' => 'now()', 'deepContent' => $deep_content, 'deepUser' => $deep_user, 'deepType' => $deep_type);
      $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    }
    public function insert_meet($meet_name, $meet_video, $meet_img, $meet_hoster, $meet_hoster_img, $meet_hoster_intro, $meet_ceo, $meet_ceo_intro, $meet_ceo_img, $meet_hands, $meet_time, $meet_project)
    {
        $sql = "INSERT INTO hmstar_meet (meetName, meetVideo, meetImg, meetCreateTime, meetHoster, meetHosterImg,meetHosterIntro,meetCEO,meetCEOImg,meetCEOIntro,meetHands,meetTime,projectId) VALUES('$meet_name','$meet_video','$meet_img',now(),'$meet_hoster','$meet_hoster_img','$meet_hoster_intro','$meet_ceo','$meet_ceo_img','$meet_ceo_intro','$meet_hands','$meet_time','$meet_project');";
      //$data = array('deepTitle' => $deep_title, 'deepImg' => $deep_img, 'deepTime' => 'now()', 'deepContent' => $deep_content, 'deepUser' => $deep_user, 'deepType' => $deep_type);
      $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    }
}
