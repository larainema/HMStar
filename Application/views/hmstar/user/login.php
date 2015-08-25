<!--登陆模态框 -->
<div class="modal fade" id="hmstar_header_box_login">
    <div class="modal-dialog modal-small">
        <div class="modal-content modal-content_index">
            <div class="modal-header modal-header_index">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <ul class="hmstar_header_box_login_ul">
                    <li id="hmstar_header_box_login_li" class="hmstar_header_box_login_li hmstar_header_box_login_li_now" onclick="showLogin();">登录</li>
                    <li id="hmstar_header_box_register_li" class="hmstar_header_box_login_li" onclick="showRegister();">注册</li>
                </ul>
                <p class="clear-both"></p>
                <form autocomplete="off" action="" method="post" name="hmstar_header_box_login_form" id="hmstar_header_box_login_form">
                    <table border="0px" class="hmstar_header_box_login_form_table">
                        <div class="hmstar_header_box_login_form_div">
                            <div class="hmstar_header_box_login_form_div_top">
                                <span class="fl hmstar_header_box_login_form_div_top_span">手机号:</span>
                                <!--<input type="text" name="username"  class="fr hmstar_header_box_login_form_input" id="hmstar_header_box_login_form_usename" placeholder="请输入登录名/手机号/邮箱" />  -->
                            	<input type="text" class="fr input_text input_text hmstar_header_box_login_form_input" id="hmstar_header_box_login_form_usename" />
                            </div>
                            <p class="clear-both"></p>
                            <div class="hmstar_header_box_login_form_div_bottom"><div id="hmstar_header_box_login_form_usenameTip"></div></div>
                        </div>


                        <div class="hmstar_header_box_login_form_div">
                            <div class="hmstar_header_box_login_form_div_top">
                                <span class="fl hmstar_header_box_login_form_div_top_span">密码:</span>
                                <input type="password" name="password" class="fr hmstar_header_box_login_form_input" id="hmstar_header_box_login_form_password" />
                                <!--<input type="text" class="fr input_text hmstar_header_box_login_form_input" id="hmstar_header_box_login_form_password_two" value="请输入密码" />
                      			<input type="password" class="fr input_text hmstar_header_box_login_form_input" id="hmstar_header_box_login_form_password" style="display:none; color:#000;"/>-->
                            </div>
                            <p class="clear-both"></p>
                            <div class="hmstar_header_box_login_form_div_bottom"><div id="hmstar_header_box_login_form_passwordTip"></div></div>
                        </div>
                        <div class="hmstar_header_box_login_form_div">
                            <div class="hmstar_header_box_login_form_div_top">
                                <input checked="checked" class="fl hmstar_header_box_login_form_div_checkbox" id="remembername" value="1" name="remembername" type="checkbox"/>
                                <p class="fl">记住用户名</p>
                                <a href="/hmstar/user/passwordfind" class="fr">忘记密码?</a>
                            </div>
                            <p class="clear-both"></p>
                        </div>
                        <input type="hidden" name="btn_submit" value="login" />
                        <input type="hidden" name="captcha" value="1" />
                        <input type="reset" name="reset" style="display: none;" />
                        <button type="submit" id="login_button" class="btn-ju hmstar_header_box_login_form_btn">登录</button>
                    </table>
                    <br />
                <input type="hidden" name="_hash_" value="a21dac8b2e1b41674d207ee8a7351e8f" /></form>
                <form  autocomplete="off"  action="/hmstar/user/add/" method="post" name="hmstar_header_box_login_form" id="hmstar_header_box_register_form">
                    <table border="0px" class="hmstar_header_box_login_form_table">
                        <div class="hmstar_header_box_login_form_div">
                            <div class="hmstar_header_box_login_form_div_top">
                                <span class="fl hmstar_header_box_login_form_div_top_span">手机号:</span>
                                <!-- <input type="text" name="mobile" class="fr hmstar_header_box_login_form_input" id="hmstar_header_box_register_form_mobile" placeholder="请输入手机号" />  -->
                             	<input type="text" class="fr input_text input_text hmstar_header_box_login_form_input" id="hmstar_header_box_register_form_mobile" />
                            </div>
                            <p class="clear-both"></p>
                            <div class="hmstar_header_box_login_form_div_bottom"><div id="hmstar_header_box_register_form_mobileTip"></div></div>
                        </div>
                        <div class="hmstar_header_box_login_form_div">
                            <div class="hmstar_header_box_login_form_div_top">
                                <span class="fl hmstar_header_box_login_form_div_top_span">验证码:</span>
                                 <input type="text" name="mobilecode" style="  width: 170px; float: left; margin-left: 25px;" class="fr hmstar_header_box_login_form_input" id="hmstar_header_box_register_form_telcode" />
                                <!--<input type="text" style="  width: 170px; float: left; margin-left: 25px;" class="fr input_text input_text hmstar_header_box_login_form_input" id="hmstar_header_box_register_form_telcode" value="请输入验证码" />-->
                                <input type="button" class="hmstar_header_box_form_gettelcode" id="hmstar_header_box_register_yzm_btn" data-toggle="modal" data-backdrop="static" onclick="common_showMobileSend();" value="获取验证码" />
                            </div>
                            <p class="clear-both"></p>
                            <div class="hmstar_header_box_login_form_div_bottom"><div id="hmstar_header_box_register_form_telcodeTip"></div></div>
                        </div>


                        <div class="hmstar_header_box_login_form_div">
                            <div class="hmstar_header_box_login_form_div_top">
                                <span class="fl hmstar_header_box_login_form_div_top_span">密码:</span>
                                  <input type="password" name="password" class="fr hmstar_header_box_login_form_input" id="hmstar_header_box_register_form_password" />
                            	<!--<input type="text" class="fr hmstar_header_box_login_form_input" id="hmstar_header_box_register_form_password_two" value="请输入密码"  />
                      			<input type="password" class="fr hmstar_header_box_login_form_input" id="hmstar_header_box_register_form_password" style="display:none; color:#000;"/>-->
                            </div>
                            <p class="clear-both"></p>
                            <div class="hmstar_header_box_login_form_div_bottom"><div id="hmstar_header_box_register_form_passwordTip"></div></div>
                        </div>
                        <div class="hmstar_header_box_login_form_div" style="width: 370px;">
                            <div class="hmstar_header_box_login_form_div_top" style="width: 370px;">
                                <input class="fl hmstar_header_box_login_form_div_checkbox" name="xieyi" id="hmstar_header_box_register_form_xieyi_input_value" value="1" type="checkbox" checked />
                                <p class="fl">我已阅读并同意<a href="#" class="hmstar_header_box_register_form_xieyi" data-toggle="modal" data-backdrop="static" data-target="#hmstar_header_box_register_form_xieyi">《网站服务协议》</a></p>
                            </div>
                            <p class="clear-both"></p>
                            <div class="hmstar_header_box_login_form_div_bottom"><div id="hmstar_header_box_register_form_xieyiTip"></div></div>
                        </div>
                        <input type="hidden" name="btn_submit" value="register" />
                        <button type="submit" id="register_button" class="btn-ju hmstar_header_box_login_form_btn">注册</button>
                        <!--  <button type="button" id="register_button" onclick="return on_submit('99');" class="btn-ju hmstar_header_box_login_form_btn">注册</button>-->
                        <div class="hmstar_header_box_login_form_div">
                            <div class="hmstar_header_box_login_form_div_top">
                                <p class="fl" style=" margin-left: 115px;">已有账号</p>
                                <a href="javascript:void(0);" class="fr" onclick="showLogin();" style=" margin-right: 45px;color: #0066cc; text-decoration: underline;">立即登录?</a>
                            </div>
                            <p class="clear-both"></p>
                        </div>
                    </table>
                <input type="hidden" name="_hash_" value="a21dac8b2e1b41674d207ee8a7351e8f" /></form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal --><!--验证码态框 --><div class="modal fade" id="hmstar_header_box_form_gettelcode" tabindex="-1" role="dialog" aria-labelledby="hmstarlLabel" aria-hidden="true">    <div class="modal-dialog modal-small"style=" width:600px;">        <div class="modal-content">            <div class="modal-header">                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                <h4 class="modal-title">输入验证码</h4>            </div>            <div class="modal-body" style="height:400px; overflow: auto; width:600px; padding:0;">                <form action="/hmstar/user/signin/" method="post" name="hmstar_header_box_login_form" autocomplete="off" id="hmstar_header_box_gettelcode_form">                    <table border="0px" class="hmstar_header_box_login_form_table">                        <div class="hmstar_header_box_login_form_div">                            <div class="hmstar_header_box_login_form_div_top">                                <input type="text" class="fl hmstar_header_box_login_form_input" id="hmstar_header_box_gettelcode_form_code" placeholder="请输入图形验证码" style=" width:180px;" />                                <img src="/hmstar/user/mobilecode" id="mobile_fresh_valicode" class="fl hmstar_header_box_gettelcode_form_img">                                <span onclick="common_updateCode();" class="fr hmstar_header_box_gettelcode_form_btn hmstar_header_box_gettelcode_form_btn_shuaxin">刷新</span>                            </div>                            <p class="clear-both"></p>                            <div class="hmstar_header_box_login_form_div_bottom" style="padding-left:0px;"><div id="hmstar_header_box_gettelcode_form_codeTip"></div></div>                        </div>                        <div class="hmstar_header_box_login_form_div">                            <div class="hmstar_header_box_login_form_div_top">                                <button type="button" onclick="common_sendMobileCode($('#hmstar_header_box_register_yzm_btn'),'txt');" class="fl hmstar_header_box_gettelcode_form_btn hmstar_header_box_gettelcode_form_btn_code">获取短信验证码</button>                                <button type="button" onclick="common_sendMobileCode($('#hmstar_header_box_register_yzm_btn'),'voice');" class="fr hmstar_header_box_gettelcode_form_btn hmstar_header_box_gettelcode_form_btn_code">获取语音验证码</button>                            </div>                        </div>                    </table>                <input type="hidden" name="_hash_" value="a21dac8b2e1b41674d207ee8a7351e8f" /></form>            </div>        </div>        <!-- /.modal-content -->    </div>    <!-- /.modal-dialog --></div><!-- /.modal -->