<html>
<head>
<title>黑马会客室管理</title>
</head>
<body>

<?php $this->load->view('admin/main');?>
<br/><br/>
<?php echo $error;?>

<?php echo form_open_multipart('admin/meet/add');?>

<br /><br />
访谈标题：<input type="text" name="meet_name" size="30" />
<br /><br />
访谈视频：<input type="text" name="meet_video" size="30" />
<br /><br />
访谈配图：<input type="file" name="meet_img" size="30" />
<br /><br />
访谈作者：<input type="text" name="meet_hoster" size="30" />
<br /><br />
访谈作者配图：<input type="file" name="meet_hoster_img" size="30" />
<br /><br />
访谈作者介绍：<input type="text" name="meet_hoster_intro" size="30" />
<br /><br />
访谈CEO：<input type="text" name="meet_ceo" size="30" />
<br /><br />
访谈CEO配图：<input type="file" name="meet_ceo_img" size="30" />
<br /><br />
访谈CEO介绍：<input type="text" name="meet_ceo_intro" size="30" />
<br /><br />
访谈期数：<input type="text" name="meet_time" size="30" />
<br /><br />
访谈手迹：<textarea name="meet_hands" cols="30" rows="40" /></textarea>
<br /><br />
<input type="submit" value="upload" />

</form>

</body>
</html>
