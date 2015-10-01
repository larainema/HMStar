<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Meet extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
      $this->load->model('Project_model');
      $data['projects'] = $this->Project_model->get_projects_nomeet();
      $data['error'] = ' ';
      $this->load->view('admin/meet', $data);
    }
    public function add()
    {
      $config['upload_path']      = './uploads/';
      $config['allowed_types']    = 'gif|jpg|png';
      $config['max_size']     = 0;
      $config['max_width']        = 1024;
      $config['max_height']       = 768;
      $config['encrypt_name'] = TRUE;

      $meet_name = $this->input->post('meet_name');
      $meet_video = $this->input->post('meet_video');
      $meet_hoster = $this->input->post('meet_hoster');
      $meet_hoster_intro = $this->input->post('meet_hoster_intro');
      $meet_ceo = $this->input->post('meet_ceo');
      $meet_ceo_intro = $this->input->post('meet_ceo_intro');
      $meet_hands = $this->input->post('meet_hands');
      $meet_time = $this->input->post('meet_time');
      $meet_project = $this->input->post('meet_project');

      $this->load->model('Deep_model');
      $id = $this->Deep_model->get_meetId();
      $nextid = $id + 1;


      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('meet_img'))
      {
          $error = array('error' => $this->upload->display_errors());

          $this->load->view('admin/meet', $error);
      }
      else
      {
          $data = $this->upload->data();
          //$file_name = explode(".",$data['file_name']);
          //$meet_img = '/uploads/'.$file_name[0].'_'.$nextid.'.'.$file_name[1];
          $meet_img = '/uploads/'.$data['file_name'];
      }
      if ( ! $this->upload->do_upload('meet_ceo_img'))
      {
          $error = array('error' => $this->upload->display_errors());

          $this->load->view('admin/meet', $error);
      }
      else
      {
          $data = $this->upload->data();
          $meet_ceo_img = '/uploads/'.$data['file_name'];
      }
      if ( ! $this->upload->do_upload('meet_hoster_img'))
      {
          $error = array('error' => $this->upload->display_errors());

          $this->load->view('admin/meet', $error);
      }
      else
      {
          $data = $this->upload->data();
          $meet_hoster_img = '/uploads/'.$data['file_name'];
      }
      $this->Deep_model->insert_meet($meet_name,$meet_video,$meet_img,$meet_hoster,$meet_hoster_img,$meet_hoster_intro,$meet_ceo,$meet_ceo_intro,$meet_ceo_img,$meet_hands,$meet_time,$meet_project);
      $this->load->model('Project_model');
      $data['projects'] = $this->Project_model->get_projects_nomeet();
      $data['error'] = '添加成功!';
      $this->load->view('admin/meet', $data);

    }
}
