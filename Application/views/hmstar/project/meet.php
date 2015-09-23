<?php $this->load->view('hmstar/includes/css')?>
<?php $this->load->view('hmstar/includes/top')?>
<?php $this->load->view('hmstar/includes/menu')?>
<div class="hmstar-meet">
<div class="hmstar-meet-header">
  <span>黑马会客室</span>
</div>
<div class="row-fluid">
  <div class="span12">
    <h3><?php echo $meet->meetName?></h3>
    <p>发表于<?php echo $meet->meetCreateTime?> 作者<?php echo $meet->meetHoster?></p>
    <h1><?php echo $meet->meetTime?></h1>
  </div>
</div>
<div class="row-fluid">
  <div class="span8">
    <embed src="<?php echo $meet->meetVideo?>" allowFullScreen="true" quality="high" width="1000" height="600" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed><span>.</span>
  </div>
  <div class="span4">
    <?php foreach ($meets as $item) {?>
      <div class="media">
        <embed src="<?php echo $item->meetImg?>" allowFullScreen="true" quality="high" width="400" height="200" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
      </div>
    <?php }?>
  </div>
</div>
<div class="row-fluid">
  <div class="span4">
    <div class='hmstar-vote-body-col-sm-4'>
    <div class='hmstar-vote-body-thumbnail'>
    <img src='<?php echo $meet->meetCEOImg?>' width='400' height='200' align='middle'></img>
    <div class='hmstar-vote-body-title'><p><?php echo $meet->meetCEO?></p></div>
    <div class='hmstar-vote-body-des'><p><?php echo $meet->meetCEOIntro?></p></div>
    </div>
    </div>
  </div>
  <div class="span4">
    <?php echo $meet->meetHands?>
  </div>
  <div class="span4">
    <div class='hmstar-vote-body-col-sm-4'>
    <div class='hmstar-vote-body-thumbnail'>
    <img src='<?php echo $meet->meetHosterImg?>' width='400' height='200' align='middle'></img>
    <div class='hmstar-vote-body-title'><p><?php echo $meet->meetHoster?></p></div>
    <div class='hmstar-vote-body-des'><p><?php echo $meet->meetHosterIntro?></p></div>
    </div>
    </div>
  </div>
</div>
</div>
<?php $this->load->view('hmstar/includes/footer')?>
<?php $this->load->view('hmstar/includes/js')?>
