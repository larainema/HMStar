<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect(base64_decode($this->input->get('url')));
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
        //$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        //log_message('debug', $this->input->post('username'));
        $mobilecode = $this->input->post('mobilecode');

        if ($this->check_mobilecode($mobilecode) == false) {
            $data['status'] = -5;
            $data['msg'] = '手机验证码错误！';

            return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
        } else {
            $username = $this->input->post('mobile');
            $mobile = $this->input->post('mobile');
            $password = $this->encryption->encrypt($this->input->post('password'));
            //$email = $this->input->post('email');
            log_message('debug', $password);
            if ($this->User_model->add_user($username, $password, $mobile)) {
                $data['status'] = 1;
                $data['msg'] = '用户注册成功！';
            } else {
                $data['status'] = -5;
                $data['msg'] = '用户注册失败！请再次注册!';
            }

            return $this->output
              ->set_content_type('application/json')
              ->set_output(json_encode($data));
        }
        //$this->load->view('hmstar/main', $data);
    }

    public function passwordfind()
    {
        $this->load->view('hmstar/includes/css');
        $this->load->view('hmstar/includes/top');
        $this->load->view('hmstar/includes/menu');
        $this->load->view('hmstar/user/passwordfind');
        $this->load->view('hmstar/includes/footer');
        $this->load->view('hmstar/includes/js');
    }

    public function checkmobile()
    {
        $this->load->model('User_model');
      //log_message('debug', $this->input->get('hmstar_header_box_register_form_mobile'));
      $mobile = $this->input->get('hmstar_header_box_register_form_mobile');
        if ($this->mobile_exists($mobile) == false) {
            $data['status'] = 0;

            return $this->output
          ->set_content_type('application/json')
          ->set_output(json_encode($data));
        } else {
            $data['status'] = 1;

            return $this->output
          ->set_content_type('application/json')
          ->set_output(json_encode($data));
        }
    }
    public function check_mobilecode($mobilecode)
    {
        if ($mobilecode == '1234') {
            return true;
        } else {
            return false;
        }
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
    public function mobile_exists($mobile)
    {
        log_message('debug', $mobile);
        if ($this->User_model->mobile_exists($mobile)) {
            //$this->form_validation->set_message('mobile_exists', '手机号已被占用');

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
        //log_message('debug', $this->input->post('username'));
        if ($this->form_validation->run() == false) {
            $response['status'] = 0;
            $response['msg'] = '用户名或密码不正确!';

            return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
        } else {
            $this->User_model->login($this->_username);
            $data['message'] = $this->session->userdata('username').' 登录成功! '
                                   .anchor('/hmstar/user/dashboard/', '我的帐户');
            $data['status'] = 1;
            $data['msg'] = '登录成功!';

            return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
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

    /**
     * 生成验证码.
     */
    public function mobilecode()
    {
        $this->load->helper('captcha');
        $this->load->model('User_model');
        $vals = array(
          'img_path' => './assets/captcha/',
          'img_url' => '/assets/captcha/',
          'img_width' => 80,
          'img_height' => 30,
          'expiration' => 7200,
          'word_length' => 4,
          'font_size' => 16,
          'img_id' => 'Imageid',
          'pool' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

          'colors' => array(
            'background' => array(255, 255, 255),
            'border' => array(255, 255, 255),
            'text' => array(0, 0, 0),
            'grid' => array(255, 40, 40),
          ),
      );

        $cap = create_captcha($vals);
        $data = array(
          'captcha_time' => $cap['time'],
          'ip_address' => $this->input->ip_address(),
          'word' => $cap['word'],
      );

        $this->User_model->insert_captcha($data);

      //echo $cap['image'];
      //print_r($cap);
      $path = './assets/captcha/'.$cap['filename'];
      //return $this->output
      //  ->set_content_type('image/png')
      //  ->set_output(file_get_contents($returndata));
      $this->load->library('image_lib');
        $imageinit['quality'] = '90%';
        $imageinit['dynamic_output'] = true;
        $imageinit['source_image'] = $path;
        $imageinit['maintain_ratio'] = false;

        $this->image_lib->initialize($imageinit);
        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        }
    }

    public function sendmobilecode()
    {
        $this->load->model('User_model');
        $mobile = $this->input->get('mobile');
        $code = $this->input->get('code');
        $msg_type = $this->input->get('msg_type');

        if ($this->User_model->check_code($code, $this->input->ip_address()) == false) {
            $data['status'] = -5;
            $data['msg'] = '图片验证码错误！';

            return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
        } else {
            $data['status'] = 1;

            return $this->output
              ->set_content_type('application/json')
              ->set_output(json_encode($data));
        }
    }


    public function dashboard()
    {
      $this->load->model('User_model');
      $username = $this->session->userdata('username');

      $data['userinfo'] = $this->User_model->get_by_username($username);
      $this->load->view('hmstar/includes/css');
      $this->load->view('hmstar/includes/top');
      $this->load->view('hmstar/includes/menu');
      $this->load->view('hmstar/user/dashboard',$data);
      $this->load->view('hmstar/includes/footer');
      $this->load->view('hmstar/includes/js');

    }
}
