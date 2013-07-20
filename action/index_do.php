<?
header("content-type:text/html;charset=utf-8");
define("CHAI",true);
//$where="";
require_once(dirname(dirname(__FILE__)).'/common/common.inc.php');
if(isset($_GET['a_id'])){
	$a_id=intval(trim($_GET['a_id']));
	$sql="select * from article where `a_id`='$a_id'"; 
	$arr=$db->fetchOne($sql);
	$smarty->assign("arr",$arr);
	$smarty->display('article.html');
}
if(isset($_GET['cat_id'])){
	$cat_id=intval(trim($_GET['cat_id']));
	$sql1="select * from goodcat where `cat_id`='$cat_id'";
	$cat_arr=$db->fetchOne($sql1);
	$sql="select * from goods_list where `cat_id` in (select cat_id from goodcat where `up_id` ='$cat_id' or `cat_id`='$cat_id')";
	
	$arr=$db->fetchAll($sql);
	//var_dump($arr); 
	$sql2="select * from goodcat where `up_id` ='$cat_id'";
	$twoarr=$db->fetchAll($sql2);
	//var_dump($twoarr);
	$smarty->assign("twoarr",$twoarr);
	$smarty->assign("arr",$arr);
	$smarty->assign("cat_arr",$cat_arr);
	$smarty->display('goods_cat.html');
}
if(isset($_GET['cat_d_id'])){
	$cat_id=intval(trim($_GET['cat_d_id']));
	$sql1="select * from goodcat where `cat_id`='$cat_id'";
	$cat_arr=$db->fetchOne($sql1);
	$sql="select * from goods_list where `cat_id` ='$cat_id'";
	
	$arr=$db->fetchAll($sql);
	
	
	
	$smarty->assign("arr",$arr);
	$smarty->assign("cat_arr",$cat_arr);
	$smarty->display('goods_d_cat.html');
}
if(isset($_GET['wen_id'])){
	$wen_id=intval(trim($_GET['wen_id']));
	$sql1="select * from wencat where `wen_id`='$wen_id'";
	$cat_arr=$db->fetchOne($sql1);
	$sql="select * from article where `art_id` in (select wen_id from wencat where `fid` ='$wen_id' or `wen_id`='$wen_id')"; 
	$arr=$db->fetchAll($sql);
	
	$sql2="select wen_id,name from wencat where `fid` ='$wen_id'";
	$twoarr=$db->fetchAll($sql2);
	
	$smarty->assign("twoarr",$twoarr);
	$smarty->assign("arr",$arr);
	$smarty->assign("cat_arr",$cat_arr);
	$smarty->display('article_cat.html');
}
if(isset($_GET['wen_d_id'])){
	$wen_id=intval(trim($_GET['wen_d_id']));
	$sql1="select * from wencat where `wen_id`='$wen_id'";
	$cat_arr=$db->fetchOne($sql1);
	$sql="select * from article where `art_id`='$wen_id'"; 
	$arr=$db->fetchAll($sql);
	$smarty->assign("arr",$arr);
	$smarty->assign("cat_arr",$cat_arr);
	$smarty->display('article_d_cat.html');
}
if(isset($_GET['g_id'])){
	$g_id=intval(trim($_GET['g_id']));
	$sql1="select * from goods_list where `g_id`='$g_id'";
	$arr=$db->fetchOne($sql1);
	$sql2="select * from goods_list where `g_tui`=3 limit 0,3";
	$tui_arr=$db->fetchAll($sql2);
	$smarty->assign("arr",$arr);
	$smarty->assign("tui_arr",$tui_arr);
	$smarty->display('goods.html');
}
?>