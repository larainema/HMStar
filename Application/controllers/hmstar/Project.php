<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{
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
        $this->load->model('Tag_model');
        $vote_type = $this->input->get('vote_type');
        $type = $this->input->get('type');
        //$search = $this->input->get('search');
        //log_message('debug', $type);
        $data['projectsoftype'] = $this->Project_model->get_project_by_type($type);
        //log_message('debug', sizeof($data['projectsoftype']));
        if (sizeof($data['projectsoftype']) > 0) {
            $data['status'] = 1;
            $msg = '';
            foreach ($data['projectsoftype'] as $key => $value) {
                //print_r($value);
                $tagname = $this->Tag_model->get_video_category_by_id($value->projectVideoCategory);
                $vote_status = '预热中';
                $vote_css = 'before';
                if ($value->projectStatus == 1) {
                    $vote_status = '投票中';
                    $vote_css = 'in';
                } elseif ($value->projectStatus == 2) {
                    $vote_status = '已完成';
                    $vote_css = 'after';
                }
                $msg .= "<div class='hmstar-vote-body-col-sm-4'>";
                $msg .= "<div class='hmstar-vote-body-$vote_css'>$vote_status</div>";
                $msg .= "<div class='hmstar-vote-body-thumbnail'>";
                //$msg .= "<embed src='$value->projectVideo' quality='high' width='400' height='200' align='middle' autostart='0' type='application/x-shockwave-flash'></embed>";
                $msg .= "<img src='$value->projectImg' align='middle'></img>";
                $msg .= "<div class='hmstar-vote-body-title'><p class='hmstar-vote-body-title-p'>$value->projectName<span><img src='/assets/images/hmstar-vote-body-attention.png' class='hmstar-vote-body-attention'></img></span></p>";
                $msg .= "<p class='hmstar-vote-body-tag'><img src='/assets/images/hmstar-vote-body-tag.png'></img>$tagname</p></div>";
                $msg .= "<div class='hmstar-vote-body-des'><p>$value->projectDescription</p></div>";
                $msg .= "<div class='hmstar-vote-body-vote'><table><tr><th>00%</th><th>".(($value->vote == null) ? 0 : $value->vote).'票</th><th>00天</th></tr><tr><td>已达</td><td>已投</td><td>倒计时</td></tr></table></div>';
                $msg .= '</div>';
                $msg .= "<a href='/hmstar/project/detail/$value->projectId'>";
                $msg .= "<div class='hmstar-vote-body-img'></div>";
                $msg .= '</a>';
                $msg .= '</div>';
            }
            $data['msg'] = $msg;
        } else {
            $data['status'] = 0;
            $data['msg'] = 'ERRor';
        }

        return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));
    }

    public function detail($projectid)
    {
        $this->load->model('Project_model');
        $this->load->model('Tag_model');
        if ($projectid == 0) {
            $data['project'] = $this->Project_model->get_project_by_id(4);
            $data['pagecount'] = $this->Project_model->get_commets_pagecount(4);
        } else {
            $data['project'] = $this->Project_model->get_project_by_id($projectid);
            $data['pagecount'] = $this->Project_model->get_commets_pagecount($projectid);
        }
        $data['projectsoftype'] = $this->Project_model->get_project_by_type('all');
        if (sizeof($data['projectsoftype']) > 0) {
            $data['status'] = 1;
            $msg = '';
            foreach ($data['projectsoftype'] as $key => $value) {
                $tagname = $this->Tag_model->get_video_category_by_id($value->projectVideoCategory);
                $vote_status = '预热中';
                $vote_css = 'before';
                if ($value->projectStatus == 1) {
                    $vote_status = '投票中';
                    $vote_css = 'in';
                } elseif ($value->projectStatus == 2) {
                    $vote_status = '已完成';
                    $vote_css = 'after';
                }
                $msg .= "<div class='hmstar-vote-body-col-sm-4'>";
                $msg .= "<div class='hmstar-vote-body-$vote_css'>$vote_status</div>";
                $msg .= "<div class='hmstar-vote-body-thumbnail'>";
                $msg .= "<img src='$value->projectImg' align='middle'></img>";
                $msg .= "<div class='hmstar-vote-body-title'><p class='hmstar-vote-body-title-p'>$value->projectName<span><img src='/assets/images/hmstar-vote-body-attention.png' class='hmstar-vote-body-attention'></img></span></p>";
                $msg .= "<p class='hmstar-vote-body-tag'><img src='/assets/images/hmstar-vote-body-tag.png'></img>$tagname</p></div>";
                $msg .= "<div class='hmstar-vote-body-des'><p>$value->projectDescription</p></div>";
                $msg .= "<div class='hmstar-vote-body-vote'><table><tr><th>00%</th><th>".(($value->vote == null) ? 0 : $value->vote).'票</th><th>00天</th></tr><tr><td>已达</td><td>已投</td><td>倒计时</td></tr></table></div>';
                $msg .= '</div>';
                $msg .= "<a href='/hmstar/project/detail/$value->projectId'>";
                $msg .= "<div class='hmstar-vote-body-img'></div>";
                $msg .= '</a>';
                $msg .= '</div>';
            }
            $data['msg'] = $msg;
        }
        $data['isAttention'] = '0';
        if (!empty($this->session->userdata('username'))) {
            $userattention = $this->session->userattention;
            $attention_project = explode(',', $userattention);
            foreach ($attention_project as $key => $value) {
                if ($value == $projectid) {
                    $data['isAttention'] = '1';
                    break;
                }
            }
        }
        $this->load->view('hmstar/project/detail', $data);
    }
    public function vote()
    {
        $this->load->model('Project_model');
        $data['projects'] = $this->Project_model->get_project_by_type('all');
        $industry_id = 0;
        $this->load->model('Industry_model');
        $data['industrys1'] = $this->Industry_model->get_industrys(1, 6);
        $data['industrys2'] = $this->Industry_model->get_industrys(7, 12);
        $data['industrys3'] = $this->Industry_model->get_industrys(13, 18);
        $data['industry_id'] = $industry_id;
        $this->load->view('/hmstar/project/list', $data);
    }
    public function meet($meet_time)
    {
        $this->load->model('Deep_model');
        $page = $this->input->get('p');
        //$meet_time = $this->input->get('meet_time');
        if (empty($meet_time))
        {
          $meet_time = "001";
        }
        if(empty($page)){
          $page = 1;
        }
        $data['meets'] = $this->Deep_model->get_meets();
        $data['meet'] = $this->Deep_model->get_meet_by_time($meet_time);
        $data['meet_page_count'] = $this->Deep_model->get_meet_pagecount();
        $data['meetsbypage'] = $this->Deep_model->get_meet_by_page($page);
        $data['p'] = $page;
        $this->load->view('/hmstar/project/meet', $data);
    }
    public function meetbyproject()
    {
        $this->load->model('Deep_model');
        $project_id = $this->input->get('project_id');
        $data['meetbyproject'] = $this->Deep_model->get_meet_by_project($project_id);
        if (!empty($data['meetbyproject'])) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
            $data['msg'] = 'ERRor';
        }

        return $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
    }
    public function meetbypage()
    {
        $this->load->model('Deep_model');
        $page = $this->input->get('p');
        $action = $this->input->get('action');
        $pagecount = $this->Deep_model->get_meet_pagecount();
        if ($action == "pre"){
          if($page == "1"){
            $page = $pagecount;
            $meetsbypage = $this->Deep_model->get_meet_by_page($page);
          }else{
            $page = $page - 1;
            $meetsbypage = $this->Deep_model->get_meet_by_page($page);
          }
        }elseif ($action == "next") {
          if($page == $pagecount){
            $page = 1;
            $meetsbypage = $this->Deep_model->get_meet_by_page($page);
          }else{
            $page = $page + 1;
            $meetsbypage = $this->Deep_model->get_meet_by_page($page);
          }
        }
        //print_r($meetsbypage);
        $msg = '';
        foreach ($meetsbypage as $item) {
          //print_r($item);
          $msg .= "<a href='/hmstar/project/meet/$item->meetTime'>";
          $msg .= "<div class='hmstar-meet-old-des'><ul>";
          $msg .= "<li class='hmstar-meet-old-des-img'><img src='$item->meetImg'></img></li>";
          $msg .= "<li class='hmstar-meet-old-des-number'>$item->meetTime"."期</li></ul>";
          $msg .= "</div>";
          $msg .= "</a>";
        }
        $data['msg'] = $msg;
        if (!empty($data['msg'])) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
            $data['msg'] = 'ERRor';
        }

        return $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
    }
    public function deep()
    {
        $this->load->model('Deep_model');
        $per_page = $this->input->get('per_page');
        $type = $this->input->get('type');
        if (empty($type)){
          $type = 'all';
        }
        if (empty($per_page)){
          $per_page = 0;
        }
        //print_r($per_page);
        $data['deeps'] = $this->Deep_model->get_deeps_by_page($per_page,$type);
        $data['totaldeeps'] = $this->Deep_model->get_deeps_by_type($type);
        //$data['deepnumber'] = $this->Deep_model->get_deepnumber();

        $this->load->view('/hmstar/project/deep', $data);
    }
    public function deepid($deep_id)
    {
        $this->load->model('Deep_model');
        $data['deep'] = $this->Deep_model->get_deep_by_id($deep_id);
        $this->load->view('/hmstar/project/deepdetail', $data);
    }

    public function collaborateall()
    {
        $this->load->model('Collaborate_model');
        $data['collaborates'] = $this->Collaborate_model->get_collaborates();
        $this->load->view('/hmstar/project/collaborate', $data);
    }
    public function collaborate($collaborate_id)
    {
        $this->load->model('Collaborate_model');
        $data['collaborate'] = $this->Collaborate_model->get_collaborate_by_id($collaborate_id);
        $this->load->view('/hmstar/project/collaboratedetail', $data);
    }
    public function pub()
    {
        $this->load->view('/hmstar/project/pub', $data);
    }

    public function video($video_id)
    {
        $this->load->model('Project_model');
        $data['projects'] = $this->Project_model->get_project_by_videoid($video_id);
        $this->load->model('Tag_model');
        $data['tags'] = $this->Tag_model->get_video_category();
        $data['video_id'] = $video_id;
        $this->load->view('/hmstar/project/list', $data);
    }
    public function industry($industry_id)
    {
        $this->load->model('Project_model');
        if (!empty($industry_id)) {
            $data['projects'] = $this->Project_model->get_project_by_industryid($industry_id);
        } else {
            $data['projects'] = $this->Project_model->get_project_by_type('all');
            $industry_id = 0;
        }
        //$this->load->model('Tag_model');
        //$data['tags'] = $this->Tag_model->get_video_category();
        $this->load->model('Industry_model');
        $data['industrys1'] = $this->Industry_model->get_industrys(1, 6);
        $data['industrys2'] = $this->Industry_model->get_industrys(7, 12);
        $data['industrys3'] = $this->Industry_model->get_industrys(13, 18);
        $data['industry_id'] = $industry_id;
        $this->load->view('/hmstar/project/list', $data);
    }

    /* 赞一下 */
    public function favour()
    {
        $this->load->model('Project_model');
        $project_id = $this->input->get('project_id');
        $result = $this->Project_model->add_favour($project_id);
        if ($result) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
            $data['msg'] = 'ERRor';
        }

        return $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode($data));
    }
    /* 关注 */
    public function attention()
    {
        $this->load->model('Project_model');
        $project_id = $this->input->get('project_id');
        $op = $this->input->get('op');
        if (!empty($this->session->userdata('username'))) {
            $username = $this->session->username;
            if ($op) {
                $result = $this->Project_model->add_attention($project_id, $username);
                $data['status'] = 1;
            } else {
                $result = $this->Project_model->del_attention($project_id, $username);
                $data['status'] = 1;
            }
        } else {
            $data['status'] = 0;
            $data['info'] = '请先登录!';
            $data['nologin'] = true;
        }

        return $this->output
  ->set_content_type('application/json')
  ->set_output(json_encode($data));
    }
    /* 免费投票 */
    public function freevote()
    {
        $this->load->model('Project_model');
        $project_id = $this->input->get('project_id');
        if (!empty($this->session->userdata('username'))) {
            $userid = $this->session->userid;
            $result = $this->Project_model->add_freevote($project_id, $userid);
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
            $data['info'] = '请先登录!';
            $data['nologin'] = true;
        }

        return $this->output
  ->set_content_type('application/json')
  ->set_output(json_encode($data));
    }
    /* Description */
    public function describe()
    {
        $this->load->model('Project_model');
        $project_id = $this->input->get('project_id');
        $op = $this->input->get('op');
        $project = $this->Project_model->get_project_by_id($project_id);
        if ($op == '0') {
            $data['msg'] = $project->projectDescription;
            $data['status'] = 1;
        } elseif ($op == '1') {
            $data['msg'] = '投票规则!';
            $data['status'] = 1;
        } elseif ($op == '2') {
            $data['msg'] = '预约CEO!';
            $data['status'] = 1;
        } elseif ($op == '3') {
            $data['msg'] = '招募合伙人!';
            $data['status'] = 1;
        } elseif ($op == '4') {
            $data['msg'] = '加入我们!';
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
            $data['info'] = '请先登录!';
            $data['nologin'] = true;
        }

        return $this->output
  ->set_content_type('application/json')
  ->set_output(json_encode($data));
    }
    /* comment page */
    public function comment()
    {
        $this->load->model('Project_model');
        $project_id = $this->input->get('project_id');
        $p = $this->input->get('p');
        $comments = $this->Project_model->get_comments($project_id, $p);
        $pagecount = $this->Project_model->get_commets_pagecount($project_id);
        $data['pagecount'] = $pagecount;
        $msg = '<ul>';
        foreach ($comments as $key => $value) {
            $build = ($key + 1) + (($p - 1) * 5);
            $msg .= '<li>'.$build.'楼  '.$value->reviewContent.'</li>';
        }
        $msg .= '</ul>';
        $data['msg'] = $msg;
        $data['status'] = 1;

        return $this->output
  ->set_content_type('application/json')
  ->set_output(json_encode($data));
    }
}
