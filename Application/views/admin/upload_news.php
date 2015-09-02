<html>
<head>
<title>Upload News Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('admin/upload/do_upload');?>

<input type="file" name="newsimg" size="20" />

<br /><br />
<input type="text" name="newshref" size="20" />

<br /><br />
<input type="text" name="newsalt" size="20" />

<br /><br />
<input type="submit" value="upload" />

</form>

</body>
</html>
