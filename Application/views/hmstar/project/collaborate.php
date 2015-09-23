<?php $this->load->view('hmstar/includes/css')?>
<?php $this->load->view('hmstar/includes/top')?>
<?php $this->load->view('hmstar/includes/menu')?>
<div class="container-fluid">
  <div>
    <div class="hmstar-cd-panel-heading">
      <h3 class="hmstar-cd-panel-title">商业合作</h3>
    </div>
    <div class="hmstar-cd-panel-body">
      <?php if (!empty($collaborates)) { ?>
        <?php foreach ($collaborates as $item):?>
          <ul>
            <li><a href="/hmstar/project/collaborate/<?php echo $item->collaborateId?>"><?php echo $item->collaborateName;?></a></li>
          </ul>
        <?php endforeach;?>
      <?php } ?>
    </div>
  </div>
</div>
<?php $this->load->view('hmstar/includes/footer')?>
<?php $this->load->view('hmstar/includes/js')?>
