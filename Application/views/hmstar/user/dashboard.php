<div class="hmstar_user_info">
  <?php if (!empty($this->session->userdata('username'))) { ?>
  <div class="">
    <strong class=""><span id="username_text" class=""><?php echo $userinfo->userName ?></span></strong>
  </div>
  <div class="">您于<span class="under"><?php echo $userinfo->userCreateTime ?></span>注册</div>
  <div class="">
   <ul class="clear">
      <li><a href="">邮箱</a></li>
      <li class="tel over">手机</li>
  </ul>
  </div>
  <?php }else{ ?>
    <div>请先<a onclick="hmstar_common_show_user();" href="javascript:void(0)">登录</a></div>
  <?php } ?>
</div>
