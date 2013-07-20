<?
header("content-type:text/html;charset=utf-8");
define("CHAI",true);
require_once(dirname(dirname(__FILE__)).'/common/common.inc.php');
$do=isset($_GET['do'])?trim($_GET['do']):"";
if(isset($_GET['do'])){
$do=trim($_GET['do']);
$fun->sess();
$u_id=isset($_SESSION['u_id'])?$_SESSION['u_id']:$fun->showmsg("缓存错误,请重新登陆！",-1,0,2000);
$g_id=isset($_GET['g_id'])?intval($_GET['g_id']):$fun->showmsg("数据格式传输错误",-1,0,2000);
$time=time();
if($title_user=='login'){
	$fun->showmsg("请先登陆",'login.php',0,2000);
}
if($do=='co'){
	
	$sql1="select `g_id` from co_good where `user_id`='$u_id'";
	$arr=$db->fetchAll($sql1);
	if(!empty($arr)){
	foreach($arr as $key=>$value){
	$b[$key]=$value['g_id'];		
	}
	if(in_array($g_id,$b)){
		$fun->showmsg("你已加入收藏，请忽重复填加！",-1,0,2000);
	}}
	$sql="insert into co_good (`user_id`,`g_id`,`add_time`)values('$u_id','$g_id','$time')";
	$query=$db->query($sql);
	$echo=$query?$fun->showmsg("加入收藏成功",-1,0,2000):$fun->showmsg("加入收藏失败",-1,0,2000);
}elseif($do=='bus'){
	
	$sql1="select `g_id` from bus where `u_id`='$u_id'";
	$arr=$db->fetchAll($sql1);
	if(!empty($arr)){
	foreach($arr as $key=>$value){
	$b[$key]=$value['g_id'];		
	}
	if(in_array($g_id,$b)){
		$fun->showmsg("你已加入购物车，请忽重复填加！",-1,0,2000);
	}}
	$g_num=isset($_GET['g_num'])?intval($_GET['g_num']):1;
	$sql="insert into bus(`u_id`,`g_id`,`g_num`)values('$u_id','$g_id','$g_num')";
	$query=$db->query($sql);
	$echo=$query?$fun->showmsg("加入购物车成功",-1,0,2000):$fun->showmsg("加入购物车失败",-1,0,2000);
	
}
}

?>