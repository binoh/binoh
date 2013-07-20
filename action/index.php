<?
header("content-type:text/html;charset=utf-8");
define("CHAI",true);
//$where="in";
require_once(dirname(dirname(__FILE__)).'/common/common.inc.php');
//var_dump(yanMa());验证码类没有用，加斜杠类没有用
if(isset($_GET['out'])){
	session_destroy();
	header("location:index.php");
};

$gonggao="select * from article where article.art_id in (select wen_id from wencat where `fid`=5 or `wen_id`=5)";
$gonggao=$db->fetchAll($gonggao);
$zhixun="select * from article where article.art_id not in (select wen_id from wencat where `fid`=5 or `wen_id`=5) order by `a_time` DESC limit 0,5";
$zhixun=$db->fetchAll($zhixun);
$picbo="select g_id,g_name,g_pic from goods_list where `g_tui`<6 limit 0,12";
$picbo=$db->fetchAll($picbo);
$goodstime="select g_id,g_name,g_pic from goods_list order by add_time DESC limit 0,10";
$goodstime=$db->fetchAll($goodstime);
$goodsclick="select g_id,g_name,g_pic,g_price from goods_list order by g_click DESC limit 0,9";
$goodsclick=$db->fetchAll($goodsclick);
$goodsprice="select g_id,g_name,g_pic,g_price from goods_list order by g_price limit 0,9";
$goodsprice=$db->fetchAll($goodsprice);
$goodslast="select g_id,g_name,g_pic,g_price from goods_list order by g_last limit 0,4";
$goodslast=$db->fetchAll($goodslast);
$brand="select * from brand limit 0,6";
$brand=$db->fetchAll($brand);
if($goodscat&&$wencat){
$smarty->assign("brand",$brand);
$smarty->assign("goodsclick",$goodsclick);
$smarty->assign("goodslast",$goodslast);
$smarty->assign("goodsprice",$goodsprice);
$smarty->assign("goodstime",$goodstime);
$smarty->assign("zhixun",$zhixun);
$smarty->assign("gonggao",$gonggao);
$smarty->display('index.html');
unset($smarty);
}else{
	die("系统错误");
}
?>