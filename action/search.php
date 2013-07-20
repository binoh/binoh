<?
header("content-type:text/html;charset=utf-8");
define("CHAI",true);
//$where="";
require_once(dirname(dirname(__FILE__)).'/common/common.inc.php');
    
	/*为什么字符串0转化成整形为0*/
	
	$key=isset($_GET['key'])?trim($_GET['key']):"";
	$sql="select * from goods_list where `g_name` like '%".$key."%'"; 
	$arr=$db->fetchAll($sql);	
	$count=count($arr);
	$pagesize=20;
	$pagenum=ceil($count/$pagesize);	
	$page=empty($_GET['page'])?1:intval($_GET['page']);
	$sql2="select * from `goods_list` where `g_name` like '%".$key."%' limit ".($page-1)*$pagesize.",".$pagesize;
	$arr2=$db->fetchAll($sql2);
	$page = new PageClass($count,$pagesize,$page,'?page={page}');		
    $page=$page -> myde_write();   
	
	
	$smarty->assign('page',$page);  
	$smarty->assign("arr",$arr2);
	$smarty->display('search.html');
?>