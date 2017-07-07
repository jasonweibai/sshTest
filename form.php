<?php
    header('Content-type:text/html;charset=utf-8');
   //获取表单提交的数据
	echo"<h1>form_get</h1>";

	//用超全局变量 $_GET 获取
	$user = $_GET['username'];
	$pwd = $_GET['password'];

	echo '用户名'.$user;
	echo '密码'.$pwd;

?>