<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/index
	 *	- or -
	 * 		http://example.com/index.php/index/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 */
	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
	public function index()
	{
		$this->load->model('Tag_model');
		$data['tags'] = $this->Tag_model->get_video_category();
		$this->load->model('Collaborate_model');
		$data['collaborates'] = $this->Collaborate_model->get_collaborates();
		$this->load->model('Deep_model');
		$data['deeps'] = $this->Deep_model->get_deeps();
		$this->load->model('Industry_model');
		$data['industrys1'] = $this->Industry_model->get_industrys(1,6);
		$data['industrys2'] = $this->Industry_model->get_industrys(7,12);
		$data['industrys3'] = $this->Industry_model->get_industrys(13,18);
		$this->load->model('Project_model');
		$data['projects'] = $this->Project_model->get_projects();
		$data['pcs1'] = $this->Project_model->get_project_categorys(1,5);
		$data['pcs2'] = $this->Project_model->get_project_categorys(6,10);
		$data['pcs3'] = $this->Project_model->get_project_categorys(11,15);
		$data['pcs4'] = $this->Project_model->get_project_categorys(16,20);
		$this->load->view('hmstar/index', $data);
	}
}
