<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Includes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
                // Your own constructor code
    }
    public function header()
    {
        $this->load->view('hmstar/includes/header');
    }
    public function footer()
    {
        $this->load->view('hmstar/includes/footer');
    }
    public function menu()
    {
        $this->load->view('hmstar/includes/menu');
    }
    public function main()
    {
			$this->load->model('Tag_model');
			$data['tags'] = $this->Tag_model->get_video_category();
      $data['news'] = $this->Tag_model->get_news();
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
      $this->load->view('hmstar/index',$data);
    }
		public function tag($video_id)
		{
			$this->load->model('Project_model');
			$data['projectsofvideo'] = $this->Project_model->get_project_by_videoid($video_id);
      log_message('debug', sizeof($data['projectsofvideo']));
		  if (sizeof($data['projectsofvideo']) > 0)
      {
        $project = $data['projectsofvideo'][0];
        //$msg = "<ol class='carousel-indicators'>";
        //$msg .= "<li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>";
        //$msg .= "<li data-target='#carousel-example-generic' data-slide-to='1'></li>";
        //$msg .= "</ol>";
        $msg = "<div class='carousel-inner' role='listbox'>";
        $msg .= "<div class='item active' align='middle' background='url(/assets/images/tag-$video_id)'>";
        $msg .= "<embed src='$project->projectVideo' quality='high' width='1000' height='460' align='middle' allowScriptAccess='never' allowNetworking='internal' allowfullscreen='true' autostart='0' type='application/x-shockwave-flash'></embed>";
        $msg .= "</div></div>";
        /*
        for($num=1;$num<sizeof($data['projectsofvideo']);$num++)
        {
          $msg .= "<div class='item' align='middle'>";
          $msg .= "<embed src='http://static.youku.com/v1.0.0149/v/swf/loader.swf?VideoIDS=XMjM2OTE3ODg4ID&winType=adshow&isAutoPlay=true' quality='high' width='1000' height='460' align='middle' allowScriptAccess='never' allowNetworking='internal' allowfullscreen='true' autostart='0' type='application/x-shockwave-flash'></embed>";
          $msg .= "</div>";
        }
        if(sizeof($data['projectsofvideo']) > 1)
        {
          $msg .= "<a class='left carousel-control' href=''#carousel-example-generic' role='button' data-slide='prev'>";
          $msg .= "<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>";
          $msg .= "<span class='sr-only'>Previous</span>";
          $msg .= "</a>";
          $msg .= "<a class='right carousel-control' href=''#carousel-example-generic' role='button' data-slide='next'>";
          $msg .= "<span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>";
          $msg .= "<span class='sr-only'>Next</span>";
          $msg .= "</a>";
        }
        */
        $data['status'] = 1;
        $data['msg'] = $msg;
      }else{
        $data['status'] = 0;
        $data['msg'] = "没有这个标签内容";
      }
      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));
		}
    public function top()
    {
        $this->load->view('hmstar/includes/top');
    }
}
