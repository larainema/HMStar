<!-- 头部区域 -->
<div class="hmstar-header">
        <div class="hmstar-header-brand">
          <a href="/hmstar/"><img src="/assets/images/hmstar-header-home.png" width="30px" height="30px"></img>黑马STAR首页</a>
        </div>
        <div class="hmstar-header-nav">
          <ul>
            <?php if (!empty($this->session->userdata('username'))) { ?>
              <li></li>
              <li></li>
            <?php } else {?>
            <li><a onclick="hmstar_common_show_user();" href="javascript:void(0)">用户登录</a></li>
            <li><a onclick="hmstar_common_show_user('register');" href="javascript: void(0)">用户注册</a></li>
            <?php }?>
            <li><a href="#">联系我们</a></li>
          </ul>
        </div><!--/.nav-collapse -->
</div>
<!-- 头部搜索 -->
<div class="hmstar-logo-header">
  <div class="hmstar-logo">
    <a href="/hmstar/"><img class="img-responsive" src="/assets/images/hmstar.png" alt="黑马Star" title="黑马Star" width="148px" height="60px"></a>
  </div>
  <div class="hmstar-logo-name">
    <ul>
      <li class="f18">创业者我们想让全世界认识你</li>
      <li class="color-red f14">www.heimaxing.com</li>
    </ul>
  </div>
  <div class="hmstar-logo-search">
    <form accept-charset="utf-8" action="/hmstar/" method="GET" name="site-search" role="search">
      <input type='text' value="" name='field-keywords' autocomplete='off' placeholder="搜索">
    </form>
  </div>
  <?php if (!empty($this->session->userdata('username'))) { ?>
    <div class="hmstar-logo-user"><img src="/assets/images/hmstar-header-user.png"></img></div>
    <div class="hmstar-logo-dropdown">
    <div class="dropdown">
  <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    我的黑马<span class="caret hmstar-caret"></span>
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/hmstar/user/dashboard/">个人帐户</a></li>
    <li><a href="/hmstar/user/logout/?url=<?php echo base64_encode(current_url());?>" target="_parent">退出登录</a></li>
  </ul>
  </div>
</div>
  <?php } ?>
</div>

<?php $this->load->view('/hmstar/user/login.php') ?>
