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
	<div class="row-fluid">
		<div class="span12 hmstar-home-header">
			<h3>
				当家视频：<?php echo $project->projectName?>
			</h3>
			<p>
				<?php echo $project->projectCreateTime?> - <?php echo $project->projectCreateTime?>
			</p>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span8">
			<div class="media">
				<div class="media-body hmstar-home-video">
						<embed src="<?php echo $project->projectVideo?>" allowFullScreen="true" quality="high" width="1000" height="600" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed><span>.</span>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="media">
				<embed src="<?php echo $project->projectImg?>" allowFullScreen="true" quality="high" width="400" height="200" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
			</div>
			<div class="media">
				<embed src="<?php echo $project->projectImg?>" allowFullScreen="true" quality="high" width="400" height="200" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
			</div>
			<div class="row-fluid">
				<div class="span4">
					 <button class="btn btn-large btn-primary" type="button" onclick="hmstar_home_favour('<?php echo $project->projectId?>')">赞一下</button>
					 <h3>(<span id="favourCount"><?php echo $project->projectFavour?></span>)</h3>
				</div>
				<div class="span4">
					 <button class="btn btn-primary btn-large" type="button" id="attention" onclick="hmstar_home_attention('<?php echo $project->projectId?>')">
						 <span id="attentionText">
							 <?php if ($isAttention == '1') {
    echo '已关注';
} else {
    echo '加关注';
}?>
						 </span>
					 </button>
					 <h3>(<span id="attentionCount"><?php echo $project->projectAttention?></span>)</h3>
				</div>
				<div class="span4">
					 <a class="btn btn-large btn-primary" href="#hmstar-modal-container-bdshare" role="button" data-toggle="modal">一键分享</a>
					 <h3>(<span id="shareCount"><?php echo $project->projectShare?></span>)</h3>
					 <?php $this->load->view('hmstar/includes/bs')?>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span8">
			<ul class="nav nav-tabs hmstar-home-nav">
        <li role="presentation" onclick="hmstar_home_describe('<?php echo $project->projectId?>','0')"><a href="javascript:void(0);">公司介绍</a></li>
        <li role="presentation" onclick="hmstar_home_describe('<?php echo $project->projectId?>','1')"><a href="javascript:void(0);">投票规则</a></li>
        <li role="presentation" onclick="hmstar_home_describe('<?php echo $project->projectId?>','2')"><a href="javascript:void(0);">预约CEO</a></li>
        <li role="presentation" onclick="hmstar_home_describe('<?php echo $project->projectId?>','3')"><a href="javascript:void(0);">招募合伙人</a></li>
        <li role="presentation" onclick="hmstar_home_describe('<?php echo $project->projectId?>','4')"><a href="javascript:void(0);">加入我们</a></li>
			</ul>
      <div class="hmstar-home-body" id="hmstar-home-body">
				<?php echo $project->projectDescription?>
      </div>
			<div>
				网友评论:
				<?php echo(($project->vote == null) ? 0 : $project->vote)?>
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
		pageCount:2,
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
			<div id="hmstar-comment-body"></div>

			</div>
		</div>
		<div class="span4">
			<div class="">
			<h2>
				公司CEO
			</h2>
			<p>
				<?php echo $project->projectManagement?>
			</p>
		  </div>
			<div class="row-fluid">
				<div class="span12">
					 <button class="btn btn-large btn-primary" type="button" onclick="hmstar_home_freevote('<?php echo $project->projectId?>')">免费投票</button> <button class="btn btn-large btn-primary" type="button">回报投票</button>
					 <p>已累计<span id="voteCount"><?php echo(($project->vote == null) ? 0 : $project->vote)?></span>票</p>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<h3>
						广告位
					</h3>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<h3>
						足迹-最近浏览:
					</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<h3>
				猜你喜欢
			</h3>
		</div>
	</div>
</div>
<?php $this->load->view('hmstar/includes/footer')?>
<?php $this->load->view('hmstar/includes/js')?>
<script src="/assets/js/hmstar-project.js"></script>
<script>
var isAttention = "<?php echo $isAttention ?>";
</script>
