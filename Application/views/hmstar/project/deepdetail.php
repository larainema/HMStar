<?php $this->load->view('hmstar/includes/css')?>
<?php $this->load->view('hmstar/includes/top')?>
<?php $this->load->view('hmstar/includes/menu')?>
  <div>
    <div>
      <h3>黑马深度文章</h3>
      <?php if (!empty($deep)) { ?>
          <ul>
            <li>文章标签：<?php echo $deep[0]->deepType?></li>
            <li><img src="<?php echo $deep[0]->deepImg?>"></img></li>
            <li>文章标题：<?php echo $deep[0]->deepTitle?></li>
            <li>发表于：<?php echo $deep[0]->deepTime?></li>
            <li>文章作者：<?php echo $deep[0]->deepUser?></li>
            <li>文章内容：<?php echo $deep[0]->deepContent?></li>
          </ul>
      <?php } ?>
    </div>
  </div>
<?php $this->load->view('hmstar/includes/footer')?>
