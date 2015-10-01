<?php $this->load->view('hmstar/includes/css')?>
<?php $this->load->view('hmstar/includes/top')?>
<?php $this->load->view('hmstar/includes/menu')?>
<div class="hmstar-deep">
  <div class="hmstar-main-red-tag"></div>
  <div class="hmstar-main-red-line-tag1 mt-5 hmstar-meet-red-line-tag"></div>
  <div class="hmstar-deep-header">
    <span>黑马深度</span>深度文章 我们的观点<img src="/assets/images/hmstar-main-tag-right.png" style="width:20px;margin-bottom:5px"></img>
  </div>
  <div class="row-fluid">
    <div class="span8">
      <ul class="hmstar-deep-nav">
        <li role="presentation" class="active"><a href="/hmstar/project/deep/">综合推荐</a></li>
        <li role="presentation"><a href="/hmstar/project/deep/?type=new">最新文章</a></li>
        <li role="presentation"><a href="/hmstar/project/deep/?type=top">热门文章</a></li>
        <li role="presentation"><a href="/hmstar/project/deep/?type=comment">评论最多</a></li>
     </ul>
     <div class="hmstar-deep-body" id="hmstar-deep-body">
       <?php if (!empty($deeps)) { ?>
         <?php foreach ($deeps as $item):?>
           <div class="hmstar-deep-body-item">
           <img src="<?php echo $item->deepImg?>"></img>
           <ul>
             <li class="f24"><img src="/assets/images/hmstar-main-deep.png" style="width:30px;margin-bottom:5px"></img><a href="/hmstar/project/deepid/<?php echo $item->deepId?>"><?php echo $item->deepTitle;?></a></li>
             <li class="f12 color-red">发表于：<?php echo $item->deepTime;?> 作者：<?php echo $item->deepUser;?></li>
             <li><?php echo $item->deepContent;?></li>
           </ul>
         </div>
         <?php endforeach;?>
       <?php } ?>
     </div>
  <div class="hmstar-deep-page">
    <?php $this->load->library('pagination');
          $config['base_url'] = '/hmstar/project/deep/page/';
          $config['total_rows'] = count($totaldeeps);
          $config['per_page'] = 10;
          $config['num_links'] = 2;
          $config['page_query_string'] = TRUE;
          $config['first_link'] = '第一页';
          $config['last_link'] = '最后一页';
          $config['next_link'] = '下一页';
          $config['prev_link'] = '上一页';

          $this->pagination->initialize($config);
          echo $this->pagination->create_links();
    ?>
  </div>
</div>
  <div class="span4">
    <div class="hmstar-deep-tag">
      <div class="hmstar-deep-tag-header">热门标签<img src="/assets/images/hmstar-deep-tag.png"></img></div>
      <div class="hmstar-deep-tag-body">
        <ul>  <li>创业干货</li>
          <li>设计家</li>
          <li>颠覆者</li>
          <li>创造者</li>
          <li>商业咨询</li>
          <li>天使投资</li>
          <li>众筹</li>
          <li>管理经验</li>
          <li>培训</li>
          <li>原创设计</li>
          <li>产品设计</li>
          <li>公开课</li>
          <li>孵化器</li>
          <li>招聘</li>
          <li>求职</li>
          <li>其他</li>
        </ul>
      </div>
    </div>
    <div class="hmstar-deep-user">
      <div class="hmstar-deep-tag-header">文章作者<img src="/assets/images/hmstar-home-ceo.png"></img></div>
      <div class="hmstar-deep-user-body">
        <?php if (!empty($deepusers)) { ?>
          <?php foreach ($deepusers as $item):?>
            <div class="hmstar-deep-body-item">
            <img src="<?php echo $item->deepUserImg?>"></img>
            <ul>
              <li>名字 <?php echo $item->deepUser;?></li>
              <li><button>打赏</button><button>赞</button></li>
            </ul>
          </div>
          <?php endforeach;?>
        <?php } ?>
      </div>
    </div>
    <div class="hmstar-deep-top">
      <div class="hmstar-deep-tag-header">TOP文章<img src="/assets/images/hmstar-home-ceo.png"></img></div>
      <?php if (!empty($deeps)) { ?>
        <?php foreach ($deeps as $item):?>
          <div class="hmstar-deep-body-item">
          <img src="<?php echo $item->deepImg?>"></img>
          <ul>
            <li class="f24"><img src="/assets/images/hmstar-main-deep.png" style="width:30px;margin-bottom:5px"></img><a href="/hmstar/project/deepid/<?php echo $item->deepId?>"><?php echo $item->deepTitle;?></a></li>
            <li class="f12 color-red">发表于：<?php echo $item->deepTime;?> 作者：<?php echo $item->deepUser;?></li>
          </ul>
        </div>
        <?php endforeach;?>
      <?php } ?>
    </div>
  </div>
</div>
</div>
<script src="/assets/js/hmstar-project.js"></script>
<?php $this->load->view('hmstar/includes/footer')?>
<?php $this->load->view('hmstar/includes/js')?>
