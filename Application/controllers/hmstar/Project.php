<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

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
		$this->load->view('hmstar/index');
	}
	public function projectlist()
	{
			$this->load->model('Project_model');
			$vote_type = $this->input->get('vote_type');
			$type = $this->input->get('type');
			$search = $this->input->get('search');
      //log_message('debug', $type);
			$data['projectsoftype'] = $this->Project_model->get_project_by_type($type, $vote_type, $search);
			//log_message('debug', sizeof($data['projectsoftype']));
			if (sizeof($data['projectsoftype']) > 0){
				$data['status'] = 1;
				$msg = "";
				foreach ($data['projectsoftype'] as $key => $value) {
					$msg .= "<div class='col-sm-4'>";
					$msg .= "<div class='hmstar-vote-body-thumbnail'>";
					$msg .= "<p>".$value->projectId."</p>";
					$msg .= "<p>".$value->projectName."</p>";
					$msg .= "<p>".$value->projectCreateTime."</p>";
					$msg .= "<p>".$value->projectDescription."</p>";
					$msg .= "</div>";
					$msg .= "</div>";
				}
				$data['msg'] = $msg;
			}else{
				$data['status'] = 0;
				$data['msg'] = "ERRor";
			}
			return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));
	}

	public function detail($projectid)
	{
		$this->load->model('Project_model');
		if ($projectid == 0)
		{
			$data['project'] = $this->Project_model->get_project_by_id(4);
		}else{
			$data['project'] = $this->Project_model->get_project_by_id($projectid);
		}
		$this->load->view('hmstar/project/detail', $data);
	}
	public function vote()
	{
		$this->load->model('Industry_model');
		$data['industrys1'] = $this->Industry_model->get_industrys(1,6);
		$data['industrys2'] = $this->Industry_model->get_industrys(7,12);
		$data['industrys3'] = $this->Industry_model->get_industrys(13,18);
		$this->load->view('/hmstar/project/vote',$data);
	}
}
