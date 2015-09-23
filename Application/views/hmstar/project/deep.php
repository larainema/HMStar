<?php $this->load->view('hmstar/includes/css')?>
<?php $this->load->view('hmstar/includes/top')?>
<?php $this->load->view('hmstar/includes/menu')?>
<div class="container-fluid">
  <div class="row-fluid hmstar-cd-panel-heading">
    <h3 class="hmstar-cd-panel-title">黑马深度</h3>
  </div>
  <div class="row-fluid">
  <div class="span8 hmstar-cd-panel-body">
    <?php if (!empty($deeps)) { ?>
      <?php foreach ($deeps as $item):?>
        <ul>
          <li><a href="/hmstar/project/deepid/<?php echo $item->deepId?>"><?php echo $item->deepTitle;?></a></li>
          <li>发表于：<?php echo $item->deepTime;?> 作者：<?php echo $item->deepUser;?></li>
        </ul>
      <?php endforeach;?>
    <?php } ?>
  </div>
</div>
</div>
<?php $this->load->view('hmstar/includes/footer')?>
<?php $this->load->view('hmstar/includes/js')?>
