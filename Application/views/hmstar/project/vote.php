<?php $this->load->view('hmstar/includes/css')?>
<?php $this->load->view('hmstar/includes/top')?>
<?php $this->load->view('hmstar/includes/menu')?>
<div class="hmstar-industry, hmstar-vote-detail">
  <div class="hmstar-industry-header">
    <span>行业分类</span>
  </div>
  <?php if (!empty($industrys1)) { ?>
  <div class="hmstar-industry-body">
    <table class="table">
      <tbody>
        <tr>
          <?php foreach ($industrys1 as $item):?>
          <td><a href="$item->industryId"><?php echo $item->industryName;?></a></td>
          <?php endforeach;?>
        </tr>
        <tr>
          <?php foreach ($industrys2 as $item):?>
          <td><a href="$item->industryId"><?php echo $item->industryName;?></a></td>
          <?php endforeach;?>
        </tr>
        <tr>
          <?php foreach ($industrys3 as $item):?>
          <td><a href="$item->industryId"><?php echo $item->industryName;?></a></td>
          <?php endforeach;?>
        </tr>
      </tbody>
    </table>
  </div>
  <?php } ?>
</div>

<div class="hmstar-vote">
  <div class="hmstar-vote-header">
    <span>大家投</span>
  </div>
  <div class="hmstar-vote-well">
    <div class="hmstar-vote-input">
    <input type='radio' name="vote-option" id="vote-option" value='vote-all' autocomplete='off' checked>全部
    <input type='radio' name="vote-option" id="vote-option" value='vote-before' autocomplete='off'>预热中
    <input type='radio' name="vote-option" id="vote-option" value='vote-in' autocomplete='off'>投票中
      <input type='text' placeholder="Search for..." id="vote-search" autocomplete="off">
        <button class="btn btn-default" type="button">Go!</button>
    </div>
  </div>
  <ul class="hmstar-vote-nav">
    <li role="presentation" onclick="hmstar_main_get_project_by_vote('all')" class="active"><a href="javascript:void(0);">综合推荐</a></li>
    <li role="presentation" onclick="hmstar_main_get_project_by_vote('new')"><a href="javascript:void(0);">最新上线</a></li>
    <li role="presentation" onclick="hmstar_main_get_project_by_vote('top')"><a href="javascript:void(0);">TOP 10</a></li>
    <li role="presentation" onclick="hmstar_main_get_project_by_vote('comment')"><a href="javascript:void(0);">评论最多</a></li>
 </ul>
 <div><p></div>
 <div id="hmstar-vote-body" class="hmstar-vote-body">
 </div>
</div>
<?php $this->load->view('hmstar/includes/footer')?>
<?php $this->load->view('hmstar/includes/js')?>
