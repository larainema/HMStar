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
      $this->load->view('admin/meet', array('error' => ' ' ));
    }
    public function add()
    {
      $config['upload_path']      = './uploads/';
      $config['allowed_types']    = 'gif|jpg|png';
      $config['max_size']     = 0;
      $config['max_width']        = 1024;
      $config['max_height']       = 768;

      $meet_name = $this->input->post('meet_name');
      $meet_video = $this->input->post('meet_video');
      $meet_hoster = $this->input->post('meet_hoster');
      $meet_hoster_intro = $this->input->post('meet_hoster_intro');
      $meet_ceo = $this->input->post('meet_ceo');
      $meet_ceo_intro = $this->input->post('meet_ceo_intro');
      $meet_hands = $this->input->post('meet_hands');
      $meet_time = $this->input->post('meet_time');

      $this->load->model('Deep_model');

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('meet_img'))
      {
          $error = array('error' => $this->upload->display_errors());

          $this->load->view('admin/meet', $error);
      }
      else
      {
          $data = $this->upload->data();
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
      $this->Deep_model->insert_meet($meet_name,$meet_video,$meet_img,$meet_hoster,$meet_hoster_img,$meet_hoster_intro,$meet_ceo,$meet_ceo_intro,$meet_ceo_img,$meet_hands,$meet_time);
      $this->load->view('admin/meet', array('error' => '添加成功！ ' ));

    }
}
