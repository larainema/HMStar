<html>
<head>
<title>添加新项目</title>
</head>
<body>
<?php $this->load->view('admin/main');?>
<br/><br/>

<form action="/admin/project/add">
项目名称：<input type="text" name="projectname" size="20" />
<br /><br />
项目视频：<input type="text" name="projectvideo" size="200" />
<br /><br />
项目介绍：<input type="text-decoration" name="projectdescription" size="200" />
<br /><br />
项目CEO：<input type="text" name="projectmanagement" size="200" />
<br /><br />
视频标签：<select name="projectvideocategory">
  <?php foreach ($tags as $item):?>
    <option value="<?php echo $item->videoId;?>"><?php echo $item->videoName;?></option>
  <?php endforeach;?>
</select>
行业分类：<select name="projectvideocategory">
  <?php foreach ($industrys as $item):?>
  <option value="<?php echo $item->industryId;?>"><?php echo $item->industryName;?></option>
<?php endforeach;?>
</select>
<input type="submit" value="添加新项目" />

</form>

</body>
</html>
