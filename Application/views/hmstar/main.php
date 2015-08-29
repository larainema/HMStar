<!--广告位-->
<div>
   <a href="" target="_blank" style="display:block; background:url() no-repeat top center; width:100%; height:310px; background-color:#000;"></a>
</div>

<!--标签-->
<script src="/assets/js/hmstar-project.js"></script>
<div class="hmstar-tag">
   <div>
    <ul class="hmstar-tag-nav">
      <li><b>标签</b><span>大家都在看</span></li>
      <?php foreach ($tags as $item):?>
          <li><a onclick="hmstar_main_get_project_by_tag('/hmstar/includes/tag/<?php echo $item->videoId;?>')" href="javascript:void(0);"><?php echo $item->videoName;?></a></li>
      <?php endforeach;?>
    </ul>
  </div>
  <div><p></div>
  <div><p></div>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div><p></div>
      </div>
</div>

<div class="hmstar-cd">
  <div class="col-sm-6">
    <div>
      <div class="hmstar-cd-panel-heading">
        <h3 class="hmstar-cd-panel-title">商业合作</h3>
      </div>
      <div class="hmstar-cd-panel-body">
        <?php if (!empty($collaborates)) { ?>
          <?php foreach ($collaborates as $item):?>
            <ul>
              <li><a href="$item->collaborateId"><?php echo $item->collaborateName;?></a></li>
            </ul>
          <?php endforeach;?>
        <?php } ?>
      </div>
    </div>
  </div>
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
  </div>
</div>

<div class="hmstar-industry">
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

<div class="hmstar-category">
  <div class="hmstar-category-header">
    <span>分类浏览</span>
  </div>
    <?php if (!empty($pcs1)) { ?>
    <div class="hmstar-category-body">
      <table class="table">
        <tbody>
          <tr>
            <?php foreach ($pcs1 as $item):?>
            <td><a href="$item->projectCategoryId"><?php echo $item->projectCategoryName;?></a></td>
            <?php endforeach;?>
          </tr>
          <tr>
            <?php foreach ($pcs2 as $item):?>
            <td><a href="$item->projectCategoryId"><?php echo $item->projectCategoryName;?></a></td>
            <?php endforeach;?>
          </tr>
          <tr>
            <?php foreach ($pcs3 as $item):?>
            <td><a href="$item->projectCategoryId"><?php echo $item->projectCategoryName;?></a></td>
            <?php endforeach;?>
          </tr>
          <tr>
            <?php foreach ($pcs4 as $item):?>
            <td><a href="$item->projectCategoryId"><?php echo $item->projectCategoryName;?></a></td>
            <?php endforeach;?>
          </tr>
        </tbody>
      </table>
    </div>
    <?php } ?>
</div>
