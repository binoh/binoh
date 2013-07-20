<?
header("content-type:text/html;charset=utf-8");
if(!defined("CHAI")){
	die("黑客入侵");
}
$db=new mysql;
$db->mysql_con($dbhost,$mysql_name,$mysql_pw,$base_name);
?>