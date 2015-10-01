<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Deep extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
      $this->load->view('admin/deep', array('error' => ' ' ));
    }
    public function add()
    {
      $config['upload_path']      = './uploads/';
      $config['allowed_types']    = 'gif|jpg|png';
      $config['max_size']     = 0;
      $config['max_width']        = 1024;
      $config['max_height']       = 768;

      $deep_type = $this->input->post('deep_type');
      $deep_title = $this->input->post('deep_title');
      $deep_content = $this->input->post('deep_content');
      $deep_user = $this->input->post('deep_user');
      $deep_user_contact = $this->input->post('deep_user_contact');

      $this->load->model('Deep_model');

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('deep_img'))
      {
          $error = array('error' => $this->upload->display_errors());

          $this->load->view('admin/deep', $error);
      }
      else
      {
          $data = $this->upload->data();
          $deep_img = '/uploads/'.$data['file_name'];
      }
      if ( ! $this->upload->do_upload('deep_user_img'))
      {
          $error = array('error' => $this->upload->display_errors());

          $this->load->view('admin/deep', $error);
      }
      else
      {
          $data = $this->upload->data();
          $deep_user_img = '/uploads/'.$data['file_name'];
      }

      $this->Deep_model->insert_deep($deep_title, $deep_img,$deep_content,$deep_type,$deep_user,$deep_user_img,$deep_user_contact);
      $this->load->view('admin/deep', array('error' => '添加成功！ ' ));
    }
}
