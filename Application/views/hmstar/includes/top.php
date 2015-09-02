<!-- 头部区域 -->
<div class="hmstar-header">
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="images/favicon.ico"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav hmstar-header-nav">
            <?php if (!empty($this->session->userdata('username'))) { ?>
              <li><a><?php echo $this->session->username ?></a></li>
            <?php } else {?>
            <li><a onclick="hmstar_common_show_user('register');" href="javascript: void(0)">注册</a></li>
            <li><a onclick="hmstar_common_show_user();" href="javascript:void(0)">登录</a></li>
            <?php }?>
            <li><a href="#">联系我们</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>
</div>
<!-- 头部搜索 -->
<div class="hmstar-logo-header">
  <div class="hmstar-header-content">
  <div class="hmstar-logo">
    <a href="#"><img class="img-responsive" src="/assets/images/hmstar.jpg" alt="黑马Star" title="黑马Star" width="148" height="60"></a>
  </div>
  <div class="hmstar-logo-name">
    <ul>
      <li>创业者我们想让全世界认识你</li>
      <li>www.heimaxing.com</li>
    </ul>
  </div>
  <div class="hmstar-logo-search">
    <form accept-charset="utf-8" action="../search" method="GET" name="site-search" role="search">
      <input type='text' value="" name='field-keywords' autocomplete='off'>
      <input type="submit" value="搜索"/>
    </form>
  </div>
  <?php if (!empty($this->session->userdata('username'))) { ?>
    <div class="hmstar-logo-dropdown">
    <div class="dropdown">
  <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    我的黑马
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/hmstar/user/dashboard/">个人帐户</a></li>
    <li><a href="/hmstar/user/logout/?url=<?php echo base64_encode(current_url());?>" target="_parent">退出登录</a></li>
  </ul>
  </div>
</div>
  <?php } ?>
</div>
</div>

<?php $this->load->view('/hmstar/user/login.php') ?>
