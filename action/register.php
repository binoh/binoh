<?php
define("CHAI",true);
require_once(dirname(dirname(__FILE__)).'/common/common.inc.php');
$msg="";
if(isset($_POST['submit'])){
	$yan=$_POST['yan'];
	$yansession=$_SESSION['login_check_num'];
	if($yan!=$yansession){
		$fun->showmsg("验证码错误,请重新输入！",-1,0,2000);
	}else{
		
$u_name=preg_match("/^[0-9a-z](\w){5,20}[0-9a-z]$/i",$_POST['u_name'])?trim($_POST['u_name']):$fun->showmsg("用户名格式错误,不能少于7位，且只能为数字，字母，下划线！",-1,"",2000);
$u_pw=preg_match("/^[0-9a-z](\w){5,20}[0-9a-z]$/i",$_POST['u_pw'])?md5(trim($_POST['u_pw'])):$fun->showmsg("密码格式错误,不能少于7位，且只能为数字，字母，下划线！",-1,"",2000);
$u_mail=preg_match("/^[0-9a-z](\w){3,15}[0-9a-z]@(\w){2,8}(\.[0-9\.a-z]{2,8})$/i",$_POST['u_mail'])?trim($_POST['u_mail']):$fun->showmsg("邮箱格式错误！",-1,"",2000);
$u_tel=preg_match("/13[1-9]{1}(\d){8}|15[1-9](\d){8}|18[9|2|8](\d){8}/",$_POST['u_tel'])?trim($_POST['u_tel']):$fun->showmsg("电话或手机格式错误！",-1,"",2000);
$u_pw2=preg_match("/^[0-9a-z](\w){5,20}[0-9a-z]$/i",$_POST['u_pw2'])?md5(trim($_POST['u_pw2'])):$fun->showmsg("密码格式错误,不能少于7位，且只能为数字，字母，下划线！",-1,"",2000);
if($u_pw<>$u_pw2){
	$fun->showmsg("两次密码输入不相同，请重新输入！",-1,"",2000);
}
$ss="insert into userbiao(`u_name`,`u_pw`,`u_tel`,`u_mail`)values('$u_name','$u_pw','$u_tel','$u_mail')";
$ago=$db->query($ss);//插入数据
if($ago){
	$_SESSION['username']=$u_name;
	$_SESSION['shell']=$u_pw.md5("user");
	
	$fun->showmsg("注册成功，正在为你跳转个人页面","member.php",0,2000);
	
	}else
	{
		$msg= "注册失败！";
		
	}
	$smarty->assign('msg',$msg);
	}
}

$smarty->display('register.html');
?>