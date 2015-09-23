<html>
<head>
<title>深度文章管理</title>
</head>
<body>

<?php $this->load->view('admin/main');?>
<br/><br/>
<?php echo $error;?>

<?php echo form_open_multipart('admin/deep/add');?>

文章标签：<select name="deep_type">
  <option value="创业干货">创业干货</option>
  <option value="设计家">设计家</option>
  <option value="颠覆者">颠覆者</option>
  <option value="创造者">创造者</option>
  <option value="商业咨询">商业咨询</option>
  <option value="天使投资">天使投资</option>
  <option value="众筹">众筹</option>
  <option value="管理经验">管理经验</option>
  <option value="培训">培训</option>
  <option value="原创设计">原创设计</option>
  <option value="产品设计">产品设计</option>
  <option value="公开课">公开课</option>
  <option value="孵化器">孵化器</option>
  <option value="招聘">招聘</option>
  <option value="求职">求职</option>
  <option value="其他">其他</option>
</select>
<br /><br />
文章标题：<input type="text" name="deep_title" size="30" />
<br /><br />
文章配图：<input type="file" name="deep_img" size="30" />
<br /><br />
文章作者：<input type="text" name="deep_user" size="30" />
<br /><br />
文章内容：<textarea name="deep_content" cols="30" rows="40" /></textarea>
<br /><br />
<input type="submit" value="upload" />

</form>

</body>
</html>
