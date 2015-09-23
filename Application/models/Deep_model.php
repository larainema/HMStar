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
    public function get_deep_by_id($deep_id)
    {
        $this->db->where('deepId', $deep_id);
        $query = $this->db->get('hmstar_deep');
        return $query->result();
    }

    public function get_meets()
    {
        $query = $this->db->get('hmstar_meet');
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

    /** Admin part **/
    public function insert_deep($deep_title, $deep_img,$deep_content,$deep_type,$deep_user)
    {
      $sql = "INSERT INTO hmstar_deep (deepTitle, deepImg, deepTime, deepContent, deepUser, deepType) VALUES('$deep_title', '$deep_img', now(), '$deep_content', '$deep_user', '$deep_type');";
      //$data = array('deepTitle' => $deep_title, 'deepImg' => $deep_img, 'deepTime' => 'now()', 'deepContent' => $deep_content, 'deepUser' => $deep_user, 'deepType' => $deep_type);
      $this->db->query($sql);
      if ($this->db->affected_rows() > 0) {
          return true;
      }
      return false;
    }
    public function insert_meet($meet_name,$meet_video,$meet_img,$meet_hoster,$meet_hoster_img,$meet_hoster_intro,$meet_ceo,$meet_ceo_intro,$meet_ceo_img,$meet_hands,$meet_time)
    {
      $sql = "INSERT INTO hmstar_meet (meetName, meetVideo, meetImg, meetCreateTime, meetHoster, meetHosterImg,meetHosterIntro,meetCEO,meetCEOImg,meetCEOIntro,meetHands,meetTime) VALUES('$meet_name','$meet_video','$meet_img',now(),'$meet_hoster','$meet_hoster_img','$meet_hoster_intro','$meet_ceo','$meet_ceo_img','$meet_ceo_intro','$meet_hands','$meet_time');";
      //$data = array('deepTitle' => $deep_title, 'deepImg' => $deep_img, 'deepTime' => 'now()', 'deepContent' => $deep_content, 'deepUser' => $deep_user, 'deepType' => $deep_type);
      $this->db->query($sql);
      if ($this->db->affected_rows() > 0) {
          return true;
      }
      return false;
    }

}
