<?php $this->load->view('hmstar/includes/css')?>
<?php $this->load->view('hmstar/includes/top')?>
<?php $this->load->view('hmstar/includes/menu')?>
<?php if (!empty($industrys1)) { ?>
<div class="hmstar-industry, hmstar-vote-detail">
  <div class="hmstar-industry-header">
    <span>行业分类</span>
  </div>
  <div class="hmstar-industry-body">
    <table class="table">
      <tbody>
        <tr>
          <?php foreach ($industrys1 as $item):?>
            <?php if($item->industryId == $industry_id){?>
          <td><a class="hmstar-green" href="/hmstar/project/industry/<?php echo $item->industryId?>"><?php echo $item->industryName;?></a></td>
            <?php }else{?>
          <td><a href="/hmstar/project/industry/<?php echo $item->industryId?>"><?php echo $item->industryName;?></a></td>
            <?php }?>
          <?php endforeach;?>
        </tr>
        <tr>
          <?php foreach ($industrys2 as $item):?>
            <?php if($item->industryId == $industry_id){?>
          <td><a class="hmstar-green" href="/hmstar/project/industry/<?php echo $item->industryId?>"><?php echo $item->industryName;?></a></td>
            <?php }else{?>
          <td><a href="/hmstar/project/industry/<?php echo $item->industryId?>"><?php echo $item->industryName;?></a></td>
            <?php }?>
          <?php endforeach;?>
        </tr>
        <tr>
          <?php foreach ($industrys3 as $item):?>
            <?php if($item->industryId == $industry_id){?>
          <td><a class="hmstar-green" href="/hmstar/project/industry/<?php echo $item->industryId?>"><?php echo $item->industryName;?></a></td>
            <?php }else{?>
          <td><a href="/hmstar/project/industry/<?php echo $item->industryId?>"><?php echo $item->industryName;?></a></td>
            <?php }?>
          <?php endforeach;?>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<?php } ?>
<?php if (!empty($tags)) { ?>
  <div>
   <ul class="hmstar-tag-nav">
     <li><b>标签</b></li>
     <?php foreach ($tags as $item):?>
       <?php if($item->videoId == $video_id){?>
         <li><a class="hmstar-green" href="/hmstar/project/video/<?php echo $item->videoId;?>"><?php echo $item->videoName;?></a></li>
       <?php }else{?>
         <li><a href="/hmstar/project/video/<?php echo $item->videoId;?>"><?php echo $item->videoName;?></a></li>
       <?php }?>
     <?php endforeach;?>
   </ul>
 </div>
<?php } ?>
<div class="hmstar-vote">
  <div class="hmstar-vote-header">
    <span>大家投</span>
  </div>
  <div class="hmstar-vote-well">
    <div class="hmstar-vote-input">
    <input type='radio' onclick="hmstar_main_get_project_by_vote('all')" name="vote-option" id="vote-option" value='vote-all' autocomplete='off' checked>全部
    <input type='radio' onclick="hmstar_main_get_project_by_vote('vote-before')" name="vote-option" id="vote-option" value='vote-before' autocomplete='off'>预热中
    <input type='radio' onclick="hmstar_main_get_project_by_vote('vote-in')" name="vote-option" id="vote-option" value='vote-in' autocomplete='off'>投票中
    <input type='radio' onclick="hmstar_main_get_project_by_vote('vote-after')" name="vote-option" id="vote-option" value='vote-after' autocomplete='off'>已完成
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
   <?php if (!empty($projects)) { ?>
     <?php foreach ($projects as $key => $value) {?>
         <div class='hmstar-vote-body-col-sm-4'>
         <div class='hmstar-vote-body-thumbnail'>
         <a href='/hmstar/project/detail/<?php echo $value->projectId?>'>
         <img src='<?php echo $value->projectImg?>' width='400' height='200' align='middle'></img>
         <div class='hmstar-vote-body-title'><p><?php echo $value->projectName?><span>收藏</span></p>
         <p><?php echo $value->projectVideoCategory?></p></div>
         <div class='hmstar-vote-body-des'><p><?php echo $value->projectDescription?></p></div>
         <div class='hmstar-vote-body-vote'><table><tr><th>00%</th><th><?php echo (($value->vote == null) ? 0 : $value->vote)?>'票</th><th>00天</th></tr><tr><td>已达</td><td>已投</td><td>倒计时</td></tr></table></div>
         </a>
         </div>
         </div>
    <?php }?>
   <?php } ?>
 </div>
</div>
<?php $this->load->view('hmstar/includes/footer')?>
