<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Collaborate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
      $this->load->view('admin/collaborate', array('error' => ' ' ));
    }
    public function add()
    {
      $config['upload_path']      = './uploads/';
      $config['allowed_types']    = 'gif|jpg|png';
      $config['max_size']     = 0;
      $config['max_width']        = 500;
      $config['max_height']       = 500;

      $collaborate_type = $this->input->post('collaborate_type');
      $collaborate_name = $this->input->post('collaborate_name');
      $collaborate_description = $this->input->post('collaborate_description');

      $this->load->model('Collaborate_model');

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('collaborate_logo'))
      {
          $error = array('error' => $this->upload->display_errors());

          $this->load->view('admin/collaborate', $error);
      }
      else
      {
          $data = $this->upload->data();

          $collaborate_logo = '/uploads/'.$data['file_name'];
          $this->Collaborate_model->insert_collaborate($collaborate_logo,$collaborate_type,$collaborate_name,$collaborate_description);


          $this->load->view('admin/collaborate', array('error' => '添加成功！ ' ));
      }

    }
}
