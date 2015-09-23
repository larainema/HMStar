<html>
<head>
<title>Upload News Form</title>
</head>
<body>
<?php $this->load->view('admin/main');?>
<br/><br/>

<?php echo $error;?>

<?php echo form_open_multipart('admin/upload/do_upload');?>

广告图片：<input type="file" name="newsimg" size="20" />

<br /><br />
广告链接：<input type="text" name="newshref" size="20" />

<br /><br />
广告介绍：<input type="text" name="newsalt" size="20" />

<br /><br />
<input type="submit" value="upload" />

</form>

</body>
</html>
