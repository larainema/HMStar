<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
      $this->load->model('Tag_model');
  		$data['tags'] = $this->Tag_model->get_video_category();
      $this->load->model('Industry_model');
      $data['industrys'] = $this->Industry_model->get_industrys(1,18);
      $this->load->view('admin/project',$data);
    }
    public function add()
    {
      
    }
}
