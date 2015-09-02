<?php $this->load->view('hmstar/includes/css')?>
<?php $this->load->view('hmstar/includes/top')?>
<?php $this->load->view('hmstar/includes/menu')?>
<div class="col-sm-6">
<div>
  <div class="hmstar-cd-panel-heading">
    <h3 class="hmstar-cd-panel-title">黑马深度</h3>
  </div>
  <div class="hmstar-cd-panel-body">
    <?php if (!empty($deeps)) { ?>
      <?php foreach ($deeps as $item):?>
        <ul>
          <li><a href="$item->deepId"><?php echo $item->deepTitle;?></a></li>
        </ul>
      <?php endforeach;?>
    <?php } ?>
  </div>
</div>
<?php $this->load->view('hmstar/includes/footer')?>
<?php $this->load->view('hmstar/includes/js')?>
