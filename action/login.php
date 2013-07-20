<?
define("CHAI",true);
require_once(dirname(dirname(__FILE__)).'/common/common.inc.php');
if(isset($_POST['submit'])){
	
	$yan=$_POST['yan'];
	$yansession=$_SESSION['login_check_num'];
	if($yan!=$yansession){
		$msg="验证码错误";
	header("location:login.php");	
	}else{
$username=$_POST['username'];
$password=$_POST['password'];
$password=md5($password);
$sql="select * from userbiao where `u_name`='$username'";
$find=$db->fetchOne($sql);
if(empty($find)){
$msg= "用户名不存在";	
header("location:login.php");
}else{
	
	if($find['u_pw']==$password){
		
		$_SESSION['username']=$username;
		$_SESSION['u_id']=$find['u_id'];
		$_SESSION['shell']=$password.md5("user");
		
		header("location:member.php");	
		
	}else{
		header("location:login.php");
		$msg= "密码错误,请重新输入";
	}
}
}
$_SESSION['msg']=$msg;

}
$msg=isset($_SESSION['msg'])?$_SESSION['msg']:"";
$smarty->assign('msg',$msg);

$smarty->display('login.html');
?>