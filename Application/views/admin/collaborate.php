<html>
<head>
<title>商业合作管理</title>
</head>
<body>

<?php $this->load->view('admin/main');?>
<br/><br/>
<?php echo $error;?>

<?php echo form_open_multipart('admin/collaborate/add');?>

商业服务类型：<select name="collaborate_type"><option value="融资">融资</option><option value="企业管理培训">企业管理培训</option><option value="法律咨询">法律咨询</option></select>
<br /><br />
企业Logo：<input type="file" name="collaborate_logo" size="20" />
<br /><br />
名称：<input type="text" name="collaborate_name" size="20" />
<br /><br />
介绍：<input type="text" name="collaborate_description" size="20" />

<br /><br />
<input type="submit" value="upload" />

</form>

</body>
</html>
