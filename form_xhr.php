<?php
    //接收页面用户输入的 用户名和密码
    $user = $_POST['user'];
    $pwd =$_POST['pwd'];

    if($user=='admin'&&$pwd=='123456'){
        echo 'login succ';
    }else{
    	echo 'login error';
    }
?>