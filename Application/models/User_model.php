<?php

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * 添加用户session数据,设置用户在线状态.
     *
     * @param string $username
     */
    public function login($username)
    {
        $data = array('username' => $username, 'logged_in' => true);
        $this->session->set_userdata($data);                    //添加session数据
    }
    /**
     * 通过用户名获得用户记录.
     *
     * @param string $username
     */
    public function get_by_username($username)
    {
        $this->db->where('userName', $username);
        $query = $this->db->get('hmstar_user');
         //return $query->row();                            //不判断获得什么直接返回
         if ($query->num_rows() == 1) {
             return $query->row();
         } else {
             return false;
         }
    }
    /**
     * 用户名不存在时,返回false
     * 用户名存在时，验证密码是否正确.
     */
    public function password_check($username, $password)
    {
        if ($user = $this->get_by_username($username)) {
            log_message('debug', $user->userPassword);
            log_message('debug', $password);
            log_message('debug', $this->encryption->decrypt($user->userPassword));

            return  $this->encryption->decrypt($user->userPassword) == $password ? true : false;
        }

        return false;                                    //当用户名不存在时
    }
    /**
     * 添加用户.
     */
    public function add_user($username, $password, $email)
    {
        $data = array('userName' => $username, 'userPassword' => $password, 'userEmail' => $email);
        $this->db->insert('hmstar_user', $data);
        if ($this->db->affected_rows() > 0) {
            $this->login($username);

            return true;
        }

        return false;
    }
    /**
     * 检查邮箱账号是否存在.
     *
     * @param string $email
     *
     * @return bool
     */
    public function email_exists($email)
    {
        $this->db->where('userEmail', $email);
        $query = $this->db->get('hmstar_user');

        return $query->num_rows() ? true : false;
    }
}
