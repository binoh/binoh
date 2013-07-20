<?
header("content-type:text/html;charset=utf-8");
define("CHAI",true);
require_once(dirname(dirname(__FILE__)).'/common/common.inc.php');
$fun->sess();
$do=trim($_GET['do']);
$u_id=isset($_SESSION['u_id'])?$_SESSION['u_id']:$fun->showmsg("缓存错误,请重新登陆！",-1,0,2000);
//$g_id=isset($_GET['g_id'])?intval($_GET['g_id']):$fun->showmsg("数据格式传输错误",-1,0,2000);
if($do=='buy'){
	$g_id=isset($_GET['g_id'])?intval($_GET['g_id']):$fun->showmsg("数据格式传输错误",-1,0,2000);
	$sql="select * from goods_list where `g_id`='$g_id'";
	$arr=$db->fetchOne($sql);
	$smarty->assign("arr",$arr);
	$smarty->display('order.html');	
}else if($do=='address'){
	$g_id=isset($_GET['g_id'])?intval($_GET['g_id']):$fun->showmsg("数据格式传输错误",-1,0,2000);
	$sql="select * from goods_list where `g_id`='$g_id'";
	$arr=$db->fetchOne($sql);
	$smarty->assign("arr",$arr);
	$smarty->display('address.html');
}
else if($do=='pay'){
	$smarty->display('pay.html');
}
?>