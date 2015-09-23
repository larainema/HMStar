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
    public function get_video_category_by_id($id)
    {
        $this->db->where('videoId', $id);
        $query = $this->db->get('hmstar_video_category');
        if ($query->num_rows() == 1) {
          $result = $query->row();
            return $result->videoName;
        } else {
            return false;
        }
    }
    public function get_news()
    {
        $query = $this->db->get('hmstar_news');

        return $query->result();
    }
    public function insert_news($upload_data,$newshref,$newsalt)
    {
      $data = array('newsHref' => $newshref, 'newsAlt' => $newsalt, 'newsImg' => $upload_data['full_path']);
      $this->db->insert('hmstar_news', $data);
      if ($this->db->affected_rows() > 0) {
          return true;
      }
      return false;
    }
}
