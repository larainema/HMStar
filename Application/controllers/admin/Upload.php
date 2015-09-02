<?php

class Upload extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('admin/upload_news', array('error' => ' ' ));
    }

    public function do_upload()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']     = 0;
        $config['max_width']        = 1920;
        $config['max_height']       = 768;

        $newsalt = $this->input->post('newsalt');
        $newshref = $this->input->post('newshref');
        $this->load->model('Tag_model');

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('newsimg'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('admin/upload_news', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $this->Tag_model->insert_news($this->upload->data(),$newshref,$newsalt);

            $this->load->view('admin/upload_success', $data);
        }
    }
}
?>
