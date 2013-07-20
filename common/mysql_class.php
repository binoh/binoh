<?
header("content-type:text/html;charset=utf-8");
if(!defined('CHAI'))
{
die('黑客入侵!');
}
class mysql{
	public $localhost;
	public $mysql_name;
	public $mysql_pw;
	public $base_name;
	function mysql_con($localhost,$mysql_name,$mysql_pw,$base_name){
		$this->localhost=$localhost;
		$this->mysql_name=$mysql_name;
		$this->mysql_pw=$mysql_pw;
		$this->base_name=$base_name;
    $conn=mysql_connect($localhost,$mysql_name,$mysql_pw);
      if(!$conn)
	{
		die("连接数据库失败");
	}
     
$ok  =mysql_select_db($this->base_name,$conn);
if(!$ok){
	die("选择数据库错误");
}
	}
	function query($sql){
	   mysql_query("set names utf8");
		if($con=mysql_query($sql)){
		return $con;
		}else{ 
		 die("查询数据库错误");
		}
	}
	function fetch($sql2){
		$con2=mysql_fetch_array($sql2,MYSQL_ASSOC);
		return $con2;
	}
	function fetchAll($sql){
		$arr='';
		mysql_query("set names utf8");
		$con=mysql_query($sql)or die(mysql_error());
		while($cone=mysql_fetch_array($con,MYSQL_ASSOC)){
               $arr[]=$cone;
		}
		return $arr;
		
		
	}
	function fetchOne($sql){
	    mysql_query("set names utf8");
		$con=mysql_query($sql);		
		$cone=mysql_fetch_array($con,MYSQL_ASSOC);
		return $cone;
		
		
	}
}


?>