<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="/assets/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="/assets/css/hmstar.css" rel="stylesheet">
<base target="main" />
</head>
<div id="main" class="main" >
<div class="container">
<?php echo validation_errors(); ?>
<form method='post' id="form-add" action="../user/add/" >
<h2 class="form-signin-heading">用户注册</h2>
        <label for="username" class="sr-only">用户名：</label><?php echo form_error('username'); ?>
        <input type="text" name="username" id="username" class="form-control" placeholder="用户名" required autofocus>
        <label for="password" class="sr-only">密码</label><?php echo form_error('password'); ?>
        <input type="password" name="password" id="password" class="form-control" placeholder="密码" required>
        <label for="email" class="sr-only">邮箱</label><?php echo form_error('email'); ?>
        <input type="email" name="email" id="email" class="form-control" placeholder="邮箱" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">注 册</button>
</form>
</div>
</div>
