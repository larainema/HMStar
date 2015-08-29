<?php $this->load->view('hmstar/includes/css')?>
<?php $this->load->view('hmstar/includes/top')?>
<?php $this->load->view('hmstar/includes/menu')?>
<div class="hmstar-home">
<div class="hmstar-home-header">
  <span>当家视频：<?php echo $project->projectName?></span>
  <p><?php echo $project->projectCreateTime?></p>
</div>
<div class="hmstar-home-video">
<embed src='http://static.youku.com/v1.0.0149/v/swf/loader.swf?VideoIDS=XMjM2OTE3ODg4ID&winType=adshow&isAutoPlay=true' quality='high' width='1000' height='460' align='middle' allowScriptAccess='never' allowNetworking='internal' allowfullscreen='true' autostart='0' type='application/x-shockwave-flash'></embed>
</div>
<div>
  <ul class="hmstar-home-nav">
    <li role="presentation" onclick="" class="active"><a href="javascript:void(0);">公司介绍</a></li>
    <li role="presentation" onclick=""><a href="javascript:void(0);">投票规则</a></li>
    <li role="presentation" onclick=""><a href="javascript:void(0);">预约CEO</a></li>
    <li role="presentation" onclick=""><a href="javascript:void(0);">招募合伙人</a></li>
    <li role="presentation" onclick=""><a href="javascript:void(0);">加入我们</a></li>
 </ul>
</div>
<div class="hmstar-home-body">
  
</div>
</div>
<?php $this->load->view('hmstar/includes/footer')?>
<?php $this->load->view('hmstar/includes/js')?>
