<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }
    public function login()
    {
        $this->load->view('hmstar/user/login');
    }
    public function register()
    {
        $this->load->view('hmstar/user/register');
    }
    //create new user
    public function add()
    {
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        log_message('debug', $this->input->post('username'));
        if ($this->form_validation->run() == false) {
            $this->load->view('hmstar/user/register');
        } else {
            $username = $this->input->post('username');
            $password = $this->encryption->encrypt($this->input->post('password'));
            $email = $this->input->post('email');
            log_message('debug', $password);
            if ($this->User_model->add_user($username, $password, $email)) {
                $data['message'] = '用户注册成功！请'.anchor('hmstar/user/login', '登录').'。';
            } else {
                $data['message'] = '用户注册失败！请再次'.anchor('hmstar/user/register', '注册').'。';
            }
        }
        $this->load->view('hmstar/main', $data);
    }

    /**
     * ======================================
     * 用于注册表单验证的函数
     * 1、username_exists()
     * 2、email_exists()
     * ======================================.
     */
    /**
     * 验证用户名是否被占用。
     * 存在返回false, 否者返回true.
     *
     * @param string $username
     *
     * @return bool
     */
    public function username_exists($username)
    {
        log_message('debug', $username);
        if ($this->User_model->get_by_username($username)) {
            $this->form_validation->set_message('username_exists', '用户名已被占用');

            return false;
        }

        return true;
    }
    public function email_exists($email)
    {
        if ($this->User_model->email_exists($email)) {
            $this->form_validation->set_message('email_exists', '邮箱已被占用');

            return false;
        }

        return true;
    }

    public function signin()
    {
        $this->load->library('form_validation');
        $this->load->model('User_model');
        //设置错误定界符
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->_username = $this->input->post('username');
        if ($this->form_validation->run() == false) {
            $this->load->view('hmstar/user/login');
        } else {
            $this->User_model->login($this->_username);
            $data['message'] = $this->session->userdata('username').' You are logged in! Now take a look at the '
                                   .anchor('hmstar/user/dashboard', 'Dashboard');
            $this->load->model('Tag_model');
            $data['tags'] = $this->Tag_model->get_video_category();
            $this->load->model('Collaborate_model');
            $data['collaborates'] = $this->Collaborate_model->get_collaborates();
            $this->load->model('Deep_model');
            $data['deeps'] = $this->Deep_model->get_deeps();
            $this->load->model('Industry_model');
            $data['industrys1'] = $this->Industry_model->get_industrys(1, 6);
            $data['industrys2'] = $this->Industry_model->get_industrys(7, 12);
            $data['industrys3'] = $this->Industry_model->get_industrys(13, 18);
            $this->load->model('Project_model');
            $data['projects'] = $this->Project_model->get_projects();
            $data['pcs1'] = $this->Project_model->get_project_categorys(1, 5);
            $data['pcs2'] = $this->Project_model->get_project_categorys(6, 10);
            $data['pcs3'] = $this->Project_model->get_project_categorys(11, 15);
            $data['pcs4'] = $this->Project_model->get_project_categorys(16, 20);
            $this->load->view('hmstar/index', $data);
        }
    }

    /**
     * 提示用户名是不存在的登录.
     *
     * @param string $username
     *
     * @return bool
     */
    public function username_check($username)
    {
        if ($this->User_model->get_by_username($username)) {
            return true;
        } else {
            $this->form_validation->set_message('username_check', '用户名不存在');

            return false;
        }
    }
    /**
     * 检查用户的密码正确性.
     */
    public function password_check($password)
    {
        //$password = $this->encryption->encrypt($password);
        if ($this->User_model->password_check($this->_username, $password)) {
            return true;
        } else {
            $this->form_validation->set_message('password_check', '用户名或密码不正确');

            return false;
        }
    }
}
