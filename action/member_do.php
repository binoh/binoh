<?
header("content-type:text/html;charset=utf-8");
define("CHAI",true);
require_once(dirname(dirname(__FILE__)).'/common/common.inc.php');
$u_id=isset($_SESSION['u_id'])?$_SESSION['u_id']:$fun->showmsg("缓存错误,请重新登陆！",-1,0,2000);

$do=isset($_GET['do'])?trim($_GET['do']):"";
if($do=='quxiao'){
	$g_id=isset($_GET['g_id'])?intval($_GET['g_id']):$fun->showmsg("数据格式传输错误",-1,0,2000);
	$sql="delete from co_good where `user_id`='$u_id' and `g_id`='$g_id'";
	$db->query($sql)?$fun->showmsg("取消收藏成功，正带你返回个人页面！",'member.php',0,2000):$fun->showmsg("数据传输失败，请重新取消！",-1,0,2000);	
}else if($do=='edit'){
	if(isset($_POST['sub'])){
$u_name=preg_match("/^[0-9a-z](\w){5,20}[0-9a-z]$/i",$_POST['u_name'])?trim($_POST['u_name']):$fun->showmsg("用户名格式错误,不能少于7位，且只能为数字，字母，下划线！",-1,"",2000);
	$u_mail=isset($_POST['u_mail'])?trim($_POST['u_mail']):$fun->showmsg("数据格式传输错误2",-1,0,2000);
	$u_mail=preg_match("/^[0-9a-z](\w){3,15}[0-9a-z]@(\w){2,8}(\.[0-9\.a-z]{2,8})$/i",$_POST['u_mail'])?trim($_POST['u_mail']):$fun->showmsg("邮箱格式错误！",-1,"",2000);
	$u_tel=preg_match("/13[1-9]{1}(\d){8}|15[1-9](\d){8}|18[9|2|8](\d){8}/",$_POST['u_tel'])?trim($_POST['u_tel']):$fun->showmsg("电话或手机格式错误！",-1,"",2000);
	$u_tel=isset($_POST['u_tel'])?trim($_POST['u_tel']):$fun->showmsg("数据格式传输错误3",-1,0,2000);	
	$u_pw=isset($_POST['u_pw'])?trim($_POST['u_pw']):$fun->showmsg("数据格式传输错误4",-1,0,2000);
	if(empty($u_pw)){
		$sql="update userbiao set `u_name`='$u_name',`u_mail`='$u_mail',`u_tel`='$u_tel'";
	
		$db->query($sql)?$fun->showmsg("个人资料修改成功，为你跳转个人首页",'member.php',0,2000):$fun->showmsg("个人资料修改失败，请重新修改",-1,0,2000);
	}else{
		$u_pw=md5($u_pw);
		$sql="update userbiao set `u_name`='$u_name',`u_pw`='$u_pw',`u_mail`='$u_mail',`u_tel`='$u_tel'";
		$db->query($sql)?$fun->showmsg("个人资料修改成功，为你跳转个人首页",'member.php',0,2000):$fun->showmsg("个人资料修改失败，请重新修改",-1,0,2000);
	}
	}
}

?>