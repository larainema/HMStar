<!--广告位-->
<div>
   <a href="" target="_blank" style="display:block; background:url(http://img2.renrenchou.com/s/upload/adv/2015/0822/b8b5b9bbd16d04fd6a871ace716f44a8.jpg) no-repeat top center; width:100%; height:110px; margin-top:30px;"></a>
</div>

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active" align="middle">
        <embed src="http://static.youku.com/v1.0.0149/v/swf/loader.swf?VideoIDS=XMjM2OTE3ODg4ID&winType=adshow&isAutoPlay=true" quality="high" width="1000" height="460" align="middle" allowScriptAccess="never" allowNetworking="internal" allowfullscreen="true" autostart="0" type="application/x-shockwave-flash"></embed>
      </div>
      <div class="item" align="middle">
        <embed src="http://static.youku.com/v1.0.0149/v/swf/loader.swf?VideoIDS=XMjM2OTE3ODg4ID&winType=adshow&isAutoPlay=true" quality="high" width="1000" height="460" align="middle" allowScriptAccess="never" allowNetworking="internal" allowfullscreen="true" autostart="0" type="application/x-shockwave-flash"></embed>
      </div>
      <div class="item" align="middle">
        <embed src="http://static.youku.com/v1.0.0149/v/swf/loader.swf?VideoIDS=XMjM2OTE3ODg4ID&winType=adshow&isAutoPlay=true" quality="high" width="1000" height="460" align="middle" allowScriptAccess="never" allowNetworking="internal" allowfullscreen="true" autostart="0" type="application/x-shockwave-flash"></embed>
      </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <div><p></div>
  </div>

<div id="hmstar-tag" class="container">
  <div class="page-header">
    <span>标签</span>  大家都在看
  </div>
  <nav>
  <ul class="nav nav-justified">
    <?php foreach ($tags as $item):?>
        <li><a href="../includes/tag/<?php echo $item->videoId;?>"><?php echo $item->videoName;?></a></li>
    <?php endforeach;?>
  </ul>
  </nav>
  <div><p></div>
  <div><p></div>
    <?php if (!empty($projectsofvideo)) { ?>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <?php foreach ($projectsofvideo as $item):?>
          <div class="item active" align="middle">
            <img src="" height="300" width="500"></img>
            <?php echo $item->projectName;?>
          </div>
          <?php endforeach;?>
        </div>
        <div><p></div>
      </div>
    <?php } ?>
</div>
<div id="hmstar-cd" class="row">
  <div class="col-sm-6">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">商业合作</h3>
      </div>
      <div class="panel-body">
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
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">黑马深度</h3>
    </div>
    <div class="panel-body">
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
<div id="hmstar-industry" class="container">
  <div class="page-header">
    <span>行业分类</span>
  </div>
  <?php if (!empty($industrys1)) { ?>
  <div class="container">
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
<div id="hmstar-vote" class="container">
  <div class="page-header">
    <span>大家投</span>
  </div>
  <div class="well">
    <div class="input-group">
    <input type='radio'  class='nav-input' name="vote-option" id="option1" value='vote-all' autocomplete='off' checked>全部
    <input type='radio'  class='nav-input' name="vote-option" id="option2" value='vote-before' autocomplete='off'>预热中
    <input type='radio'  class='nav-input' name="vote-option" id="option3" value='vote-in' autocomplete='off'>投票中
      <input type='text'  class='nav-input' placeholder="Search for..." name="vote-search" autocomplete="off">
        <button class="btn btn-default" type="button">Go!</button>
    </div>
  </div>
  <ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="#">综合推荐</a></li>
    <li role="presentation"><a href="#">最新上线</a></li>
    <li role="presentation"><a href="#">TOP 10</a></li>
    <li role="presentation"><a href="#">评论最多</a></li>
 </ul>
 <div><p></div>
   <?php if (!empty($projects)) { ?>
 <div class="row">
   <div class="col-sm-6 col-md-4">
     <?php foreach ($projects as $item):?>
     <div class="thumbnail">
       <img src="..." alt="...">
       <div class="caption">
         <h3><?php echo $item->projectName ?></h3>
         <p><?php echo $item->projectDescription ?></p>
       </div>
     </div>
     <?php endforeach;?>
   </div>
 </div>
 <?php } ?>
</div>
<div id="hmstar-category" class="container">
  <div class="page-header">
    <span>分类浏览</span>
  </div>
  <div class="well">
    <?php if (!empty($pcs1)) { ?>
    <div class="container">
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
</div>
