<?
header("content-type:text/html;charset=utf-8");
define("CHAI",true);
require_once(dirname(dirname(__FILE__)).'/common/common.inc.php');
$fun->sess();
$u_id=isset($_SESSION['u_id'])?$_SESSION['u_id']:$fun->showmsg("缓存错误,请重新登陆！",-1,0,2000);
$do=isset($_GET['do'])?trim($_GET['do']):'';

/*这里用左外联会怎么样*/
$sql="select * from userbiao where `u_id`='$u_id'";
$user_arr=$db->fetchOne($sql);
//$sql="select g_id from co_good where `user_id`='$u_id'";
//$co_arr=$db->fetchAll($sql);
//$good_arr="";
//foreach($co_arr as $key =>$each){
//$good_arr.=$each['g_id'].",";	
//}
//$good_arr=substr($good_arr,0,-1);
$sql_good="select g_id,g_name,g_price,g_last,g_pic from goods_list where `g_id` in(select g_id from co_good where `user_id`='$u_id')";
$co_good=$db->fetchAll($sql_good);
if(empty($co_good)){
	$co_num=0;
}else{
$co_num=count($co_good);
}
//$sql="select * from bus where `u_id`='$u_id'";
//$bus=$db->fetchAll($sql);
//$bus_arr="";
//foreach($bus as $key =>$each){
//$bus_arr.=$each['g_id'].",";	
//}
//$bus_arr=substr($bus_arr,0,-1);
$bus_arr="select g_id,g_name,g_price,g_last,g_pic from goods_list where `g_id` in(select g_id from bus where `u_id`='$u_id')";
$bus_arr=$db->fetchAll($bus_arr);
if(empty($bus_arr)){
	$bus_num=0;
}else{
$bus_num=count($bus_arr);
}
$arr_order="select * from info,goods_list where info.g_id=goods_list.g_id and info.u_id='$u_id'";
$arr_order=$db->fetchAll($arr_order);
if(empty($arr_order)){
	$order_num=0;
}else{
$order_num=count($arr_order);
}
$smarty->assign('user_arr',$user_arr);
$smarty->assign('co_good',$co_good);
$smarty->assign('co_num',$co_num);
$smarty->assign('bus_num',$bus_num);
$smarty->assign('arr_order',$arr_order);

$smarty->assign('bus_arr',$bus_arr);
if($do==''){
	$smarty->assign('co_num',$co_num);
	$smarty->assign('bus_num',$bus_num);
	$smarty->assign('order_num',$order_num);
	$smarty->display('member.html');
}else if($do=='order'){
	$smarty->display('member_order.html');
}else if($do=='co'){
	$smarty->display('member_co.html');
	
}else if($do=='bus'){
	$smarty->display('member_bus.html');
	
}else if($do=='pay'){
	$smarty->display('pay.html');
	
}else if($do=='edit'){
	$sql="select * from userbiao where `u_id`='$u_id'";
	$sql=$db->fetchOne($sql);
	$smarty->assign('arr',$sql);
	$smarty->display('member_edit.html');
	
}
?>