<?php
$config = array(
        'hmstar/user/signin'=>array(                        //登录表单的规则
             array(
                 'field'=>'username',
                 'label'=>'用户名',
                 'rules'=>'trim|required|xss_clean|callback_username_check'
             ),
             array(
                 'field'=>'password',
                 'label'=>'密码',
                 'rules'=>'trim|required|xss_clean|callback_password_check'
             )
         ),
	'hmstar/user/add'=>array(                    //用户注册表单的规则
             array(
                 'field'=>'username',
                 'label'=>'用户名',
                 'rules'=>'trim|required|xss_clean|callback_username_exists'
             ),
             array(
                 'field'=>'password',
                 'label'=>'密码',
                 'rules'=>'trim|required|min_length[4]|max_length[12]|xss_clean'
             ),
             array(
                 'field'=>'email',
                 'label'=>'邮箱账号',
                 'rules'=>'trim|required|xss_clean|callback_email_exists'
             )
	)
);
