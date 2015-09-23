<?php $this->load->view('hmstar/includes/css')?>
<?php $this->load->view('hmstar/includes/top')?>
<?php $this->load->view('hmstar/includes/menu')?>
  <div>
    <div>
      <h3>商业合作</h3>
      <?php if (!empty($collaborate)) { ?>
          <ul>
            <li><?php echo $collaborate[0]->collaborateType?></li>
            <li><img src="<?php echo $collaborate[0]->collaborateLogo?>"></img></li>
            <li>名字：<?php echo $collaborate[0]->collaborateName?></li>
            <li>介绍：<?php echo $collaborate[0]->collaborateDescription?></li>
          </ul>
      <?php } ?>
    </div>
  </div>
<?php $this->load->view('hmstar/includes/footer')?>
