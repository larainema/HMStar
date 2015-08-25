<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/assets/css/bootstrap.css" rel="stylesheet">
<link href="/assets/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="/assets/css/hmstar-theme.css" rel="stylesheet">
<link href="/assets/css/hmstar.css" rel="stylesheet">
<script src="/assets/js/ie-emulation-modes-warning.js"></script>
<base target="main" />
</head>
<body>
<title>黑马Star</title>
<?php $this->load->view('hmstar/includes/top')?>
<?php $this->load->view('hmstar/includes/menu')?>
<?php $this->load->view('hmstar/main')?>
<?php $this->load->view('hmstar/includes/footer')?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="/assets/js/hmstar.js"></script>
<script src="/assets/js/formvalidator.js"></script>
</body>
</html>
