<!-- 头部区域 -->
<div id="hmstar-header" class="header">
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="images/favicon.ico"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a onclick="hmstar_common_show_user('register');" href="javascript: void(0)">注册</a></li>
            <li><a onclick="hmstar_common_show_user();" href="javascript:void(0)">登录</a></li>
            <li><a href="#">联系我们</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>
</div>
<!-- 头部搜索 -->
<div id="hmstar-logo-search" class="hmstar-header">
  <div class="hmstar-header-content">
  <div class="hmstar-logo">
    <a href="#"><img class="img-responsive" src="/assets/images/hmstar.jpg" alt="黑马Star" title="黑马Star" width="148" height="60"></a>
  </div>
  <div class="hmstar-logo-name">
    <ul>
      <li>黑马STAR投票平台</li>
      <li>H&M STAR VOTE</li>
      <li>www.heimaxing.com</li>
    </ul>
  </div>
  <div class="hmstar-search">
  <?php if (!empty($this->session)) { ?>
    <div><?php echo $this->session->username ?></div>
  <?php } ?>
  <?php if (!empty($this->message)) { ?>
    <div><?php echo $this->message ?></div>
  <?php } ?>


    <form accept-charset="utf-8" action="../search" method="GET" name="site-search" role="search">
      <input type='text' value="" name='field-keywords' autocomplete='off'>
      <input type="submit" value="搜索"/>
    </form>
  </div>
</div>
</div>

<?php $this->load->view('/hmstar/user/login.php') ?>
