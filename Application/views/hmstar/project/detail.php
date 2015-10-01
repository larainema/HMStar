<?php $this->load->view('hmstar/includes/css')?>
<?php $this->load->view('hmstar/includes/top')?>
<?php $this->load->view('hmstar/includes/menu')?>
<script src="/assets/js/hmstar-page.js"></script>
<div id="hmstar-modal-container-bdshare" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">
			一键分享
		</h3>
	</div>
	<div class="modal-body">
		<div class="bdsharebuttonbox">
			<a href="#" class="bds_more" data-cmd="more"></a>
			<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
			<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
			<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
			<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
			<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
		</div>
	</div>
	<div class="modal-footer">
		 <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>
<div class="container-fluid hmstar-home">
	<div class="hmstar-main-red-tag"></div>
  <div class="hmstar-main-red-line-tag1"></div>
	<div class="row-fluid">
		<div class="span12 hmstar-home-header">
			<span>
				当家视频：<?php echo $project->projectName?>
			</span>
			<p>
				<?php echo $project->projectCreateTime?> - <?php echo $project->projectCreateTime?>
			</p>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span8">
			<div class="media">
				<div class="media-body hmstar-home-video" id="hmstar-home-video">
						<embed src="<?php echo $project->projectVideo?>" allowFullScreen="true" quality="high" width="1000" height="620" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed><span>.</span>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="media">
				<a href="javascript:void(0);" onclick="hmstar_home_video('<?php echo $project->projectVideo?>')"><div class="hmstar-home-video-img"></div></a>
				<embed src="<?php echo $project->projectImgA?>" allowFullScreen="true" quality="high" width="100%" height="200" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
			</div>
			<div class="media">
				<a href="javascript:void(0);" onclick="hmstar_home_ceo_video('<?php echo $project->projectId?>')"><div class="hmstar-home-video-img"></div></a>
				<embed src="<?php echo $project->projectImgC?>" allowFullScreen="true" quality="high" width="100%" height="200" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
			</div>
			<div class="row-fluid hmstar-home-action">
				<div class="span4">
					 <button class="hmstar-home-btn" type="button" onclick="hmstar_home_favour('<?php echo $project->projectId?>')" alt="赞一下">
						 <img src="/assets/images/hmstar-home-favour.png"/>赞一下</button>
					 <h3 class="hmstar-home-action-num">(<span id="favourCount"><?php echo $project->projectFavour?></span>)</h3>
				</div>
				<div class="span4">
					 <button class="hmstar-home-btn" type="button" id="attention" onclick="hmstar_home_attention('<?php echo $project->projectId?>')">
						 <img src="/assets/images/hmstar-home-attention.png"/>
						 <span id="attentionText">
							 <?php if ($isAttention == '1') {
    echo '已关注';
} else {
    echo '加关注';
}?>
						 </span>
					 </button>
					 <h3 class="hmstar-home-action-num">(<span id="attentionCount"><?php echo $project->projectAttention?></span>)</h3>
				</div>
				<div class="span4">
					 <button class="hmstar-home-btn" href="#hmstar-modal-container-bdshare" role="button" data-toggle="modal">
						 <img src="/assets/images/hmstar-home-share.png"/>
						 一键分享</button>
					 <h3 class="hmstar-home-action-num">(<span id="shareCount"><?php echo $project->projectShare?></span>)</h3>
					 <?php $this->load->view('hmstar/includes/bs')?>
				</div>
			</div>
		</div>
	</div>
	<div class="hmstar-main-red-line-tag1"></div>
	<div class="hmstar-main-red-line-tag1" style="margin-top:800px"></div>
	<div class="row-fluid">
		<div class="span8 hmstar-home-body">
			<ul class="nav nav-tabs hmstar-home-nav">
        <li role="presentation" onclick="hmstar_home_describe('<?php echo $project->projectId?>','0')"><a href="javascript:void(0);">公司介绍</a></li>
        <li role="presentation" onclick="hmstar_home_describe('<?php echo $project->projectId?>','1')"><a href="javascript:void(0);">投票规则</a></li>
        <li role="presentation" onclick="hmstar_home_describe('<?php echo $project->projectId?>','2')"><a href="javascript:void(0);">预约CEO</a></li>
        <li role="presentation" onclick="hmstar_home_describe('<?php echo $project->projectId?>','3')"><a href="javascript:void(0);">招募合伙人</a></li>
        <li role="presentation" onclick="hmstar_home_describe('<?php echo $project->projectId?>','4')"><a href="javascript:void(0);">加入我们</a></li>
			</ul>
      <div id="hmstar-home-body" class="hmstar-home-describe">
				<?php echo $project->projectDescription?>
      </div>
			<div class="hmstar-home-comment">
				<div class="hmstar-home-comment-header">网友评论<img src="/assets/images/hmstar-home-comment.png" style="width:20px;margin-bottom:5px"></img></div>
				<div class="tcdPageCode">
				</div>
<script>
$.ajax({
	url: "/hmstar/project/comment/",
	data: {
		project_id:<?php echo $project->projectId?>,
		p:1,
	},
	dataType: 'json',
	success: function(data) {
		if (data.status == 1) {
			$('#hmstar-comment-body').html(data.msg);
		} else {
			$('#hmstar-comment-body').html(data.msg);
		}
		return true;
	}
});
$(".tcdPageCode").createPage({
		pageCount:<?php echo $pagecount?>,
		current:1,
		backFn:function(p){
			$.ajax({
				url: "/hmstar/project/comment/",
				data: {
					project_id:<?php echo $project->projectId?>,
					p:p,
				},
				dataType: 'json',
				success: function(data) {
					if (data.status == 1) {
						$('#hmstar-comment-body').html(data.msg);
					} else {
						$('#hmstar-comment-body').html(data.msg);
					}
					return true;
				}
			})
		}
});
</script>
			<div id="hmstar-comment-body" class="hmstar-home-comment-body"></div>

			</div>
		</div>
		<div class="span4">
			<div class="hmstar-home-ceo">
			<h2>
				公司CEO<img src="/assets/images/hmstar-home-ceo.png" style="width:20px;margin-bottom:5px"></img>
			</h2>
			<div class="hmstar-home-ceo-img"><img src="<?php echo $project->projectCeoImg?>"></img></div>
			<div class="hmstar-home-ceo-info">
				<ul><li class="f20"><?php echo $project->projectCeo?></li>
				<li><?php echo $project->projectManagement?></li>
				<li><?php echo $project->projectCeoMobile?></li>
			</div>
		  </div>
			<div class="hmstar-home-vote">
				<div class="hmstar-home-vote-button">
					 <button class="hmstar-home-vote-button-free" type="button" onclick="hmstar_home_freevote('<?php echo $project->projectId?>')">免费投票</button>
					 <button class="hmstar-home-vote-button-nonfree" type="button">回报投票</button>
				</div>
				<div class="hmstar-home-vote-info">
					 <p>已累计<span id="voteCount"><?php echo(($project->vote == null) ? 0 : $project->vote)?></span>票</p>
				</div>
			</div>
			<div class="hmstar-home-ad">
				<?php
					//echo $project->projectAd;
					$ads = explode(",",$project->projectAd);
					foreach ($ads as $key => $value) {
				?>
				<div class="hmstar-home-ad-img">
					<img src="<?php echo $value?>"></img>
				</div>
				<?php }?>
			</div>
			<div class="hmstar-home-foot">
					<div class="hmstar-home-foot-header">
						足迹-最近浏览<img src="/assets/images/hmstar-home-comment.png"></img>
					</div>
					<div class="hmstar-home-foot-body"></div>
			</div>
		</div>
	</div>
	<div class="hmstar-home-favour">
	  <div class="hmstar-main-red-tag"></div>
	  <div class="hmstar-main-red-line-tag"></div>
	  <div class="hmstar-home-favour-header">
	    <span>猜你喜欢</span><img src="/assets/images/hmstar-home-like.png"></img>
	  </div>
		<div class="hmstar-home-favour-body"><?php echo $msg?></div>
	</div>
</div>
<?php $this->load->view('hmstar/includes/footer')?>
<script src="/assets/js/hmstar-project.js"></script>
<?php $this->load->view('hmstar/includes/js')?>
<script>
var isAttention = "<?php echo $isAttention ?>";
</script>
