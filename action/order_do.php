<?
header("content-type:text/html;charset=utf-8");
define("CHAI",true);
require_once(dirname(dirname(__FILE__)).'/common/common.inc.php');
$fun->sess();
$u_id=isset($_SESSION['u_id'])?$_SESSION['u_id']:$fun->showmsg("缓存错误,请重新登陆！",-1,0,2000);
if(isset($_POST['sub'])){
	$g_id=intval($_POST['g_id']);
	$addall=trim($_POST['addall']);
	$addname=trim($_POST['addname']);
	$tel=trim($_POST['tel']);
	$mess=trim($_POST['mess']);
	//$num=intval($_POST['num']);
	$sql="select price from userbiao where `u_id`='$u_id'";
	$sql1="select `g_id`,`g_price` from goods_list where `g_id`='$g_id'";
	$goods_arr=$db->fetchOne($sql1);
	$user_arr=$db->fetchOne($sql);
	//$priceall=$num*$user_arr['price'];
	if($user_arr['price']<$goods_arr['g_price']){
		$fun->showmsg("余额不足，购买失败，正在为你跳转充值页面",'order.php?do=pay',0,3000);
	}else{
		/*如何在原来的基础上加减，而不用循环出结果，再加减,myisam如何进行事务处理*/
		//$sql="update userbiao set `price`=".($user_arr['price']-$priceall);
		//$sql1="insert into info (`g_id`,`d_num`,`u_id`,`mess`,`in_order`,`statue`)values('$g_id','$num','$u_id','$mess','$priceall',2)";
		/*这里要创建存储过程*/
		//$sql2="insert into address (`o_id`,`user_id`,`add_name`,`addall`,`tel`)values(1,'$u_id','$addname','$addall','$tel')";
		$fun->showmsg("购买成功，正在为你跳转个人页面",'member.php',0,2000);
	}
}
if(isset($_POST['o_sub'])){
	$g_id=intval($_POST['g_id']);
	$addall=trim($_POST['addall']);
	$addname=trim($_POST['addname']);
	$tel=trim($_POST['tel']);
	$mess=trim($_POST['mess']);
	//$num=intval($_POST['num']);
	$sql="select price from userbiao where `u_id`='$u_id'";
	$sql1="select `g_id`,`g_price` from goods_list where `g_id`='$g_id'";
	$goods_arr=$db->fetchOne($sql1);
	$user_arr=$db->fetchOne($sql);
	//$priceall=$num*$user_arr['price'];
	
		/*如何在原来的基础上加减，而不用循环出结果，再加减,myisam如何进行事务处理*/
		
		//$sql1="insert into info (`g_id`,`d_num`,`u_id`,`mess`,`in_order`)values('$g_id','$num','$u_id','$mess','$priceall')";
		/*这里要创建存储过程*/
		//$sql2="insert into address (`o_id`,`user_id`,`add_name`,`addall`,`tel`)values(1,'$u_id','$addname','$addall','$tel')";
		$fun->showmsg("订单填加成功，正在为你跳转个人页面",'member.php',0,2000);
	
}
?>