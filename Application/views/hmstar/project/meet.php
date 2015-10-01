<?php $this->load->view('hmstar/includes/css')?>
<?php $this->load->view('hmstar/includes/top')?>
<?php $this->load->view('hmstar/includes/menu')?>
<div class="hmstar-meet">
<div class="hmstar-main-red-tag"></div>
<div class="hmstar-main-red-line-tag1 mt-5 hmstar-meet-red-line-tag"></div>
<div class="hmstar-meet-header">
  <span>黑马会客室</span>CEO访谈<img src="/assets/images/hmstar-main-tag-right.png" style="width:20px;margin-bottom:5px"></img>
</div>
<div class="row-fluid">
  <div class="span8 hmstar-meet-title">
    <h3><?php echo $meet->meetName?></h3>
    <p>发表于  <?php echo $meet->meetCreateTime?>    作者  <?php echo $meet->meetHoster?></p>
  </div>
  <div class="span4 hmstar-meet-number">
    <h1><?php echo $meet->meetTime?>期</h1>
  </div>
</div>
<div class="row-fluid">
  <div class="span8">
    <embed src="<?php echo $meet->meetVideo?>" allowFullScreen="true" quality="high" width="100%" height="750" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed><span>.</span>
  </div>
  <div class="span4">
    <?php foreach ($meets as $item) {?>
      <div class="hmstar-meet-time">
        <a href="/hmstar/project/meet/<?php echo $item->meetTime?>"><div class="hmstar-home-video-img hmstar-meet-time-img"></div></a>
        <span><?php echo $item->meetTime?>期</span>
        <!--
        <embed src="<?php echo $item->meetImg?>" allowFullScreen="true" quality="high" width="100%" height="200" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
        -->
      </div>
    <?php }?>
  </div>
</div>
<div class="hmstar-main-red-tag"></div>
<div class="hmstar-main-red-line-tag1 mt-5"></div>
<div class="hmstar-meet-ceo-header">
  <span>CEO访谈手记</span>
</div>
<div class="row-fluid hmstar-meet-ceo-hoster">
  <div class="span3 hmstar-meet-ceo">
    <img src='<?php echo $meet->meetCEOImg?>' width='400' align='middle'></img>
    <div class='hmstar-meet-ceo-body'>
    <div class='hmstar-meet-ceo-title'><p>CEO&nbsp;&nbsp;&nbsp;<?php echo $meet->meetCEO?></p></div>
    <div class='hmstar-meet-ceo-des'><p>介绍&nbsp;&nbsp;&nbsp;<?php echo $meet->meetCEOIntro?></p></div>
    </div>
  </div>
  <div class="span6 hmstar-meet-body">
    <span class="f36">访谈手迹</span>
    <p><?php echo $meet->meetHands?></p>
  </div>
  <div class="span3 hmstar-meet-hoster">
    <img src='<?php echo $meet->meetHosterImg?>' width='400' align='middle'></img>
    <div class='hmstar-meet-hoster-body'>
    <div class='hmstar-meet-hoster-title'><p>主持人&nbsp;&nbsp;&nbsp;<?php echo $meet->meetHoster?></p></div>
    <div class='hmstar-meet-hoster-des'><p>介绍&nbsp;&nbsp;&nbsp;<?php echo $meet->meetHosterIntro?></p></div>
    </div>
  </div>
</div>
<script src="/assets/js/hmstar-project.js"></script>
<div class="hmstar-main-red-tag"></div>
<div class="hmstar-main-red-line-tag1 mt-5 hmstar-meet-red-line-tag1"></div>
<div class="hmstar-meet-header">
  <span>往期精彩回顾</span>
</div>
<script>
var page = <?php echo $p?>;
var pagecount = <?php echo $meet_page_count?>;
</script>
<div class="hmstar-meet-old">
  <a href="javascript:void(0);" onclick="hmstar_meet_old_pre()"><div class="hmstar-meet-old-pre"></div></a>
  <div id="hmstar-meet-old">
<?php foreach ($meetsbypage as $item) {?>
  <a href="/hmstar/project/meet/<?php echo $item->meetTime?>">
  <div class="hmstar-meet-old-des"><ul>
    <li class="hmstar-meet-old-des-img"><img src="<?php echo $item->meetImg?>" width="50px"></img></li>
    <li class="hmstar-meet-old-des-number"><?php echo $item->meetTime?>期</li></ul>
  </div>
  </a>
<?php }?>
  </div>
  <a href="javascript:void(0);" onclick="hmstar_meet_old_next()"><div class="hmstar-meet-old-next"></div></a>
</div>
</div>
<?php $this->load->view('hmstar/includes/footer')?>
<?php $this->load->view('hmstar/includes/js')?>
