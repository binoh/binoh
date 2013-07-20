<?
if(!defined('CHAI'))
{
die('黑客入侵!');
}
class fun extends mysql{
	function alert($msg,$url){
		echo "<script>alert('$msg');location.href='$url';</script>";
	}
	function alert2($msg){
		echo "<script>alert('$msg');history.go(-1);</script>";
	}

	
function ShowMsg($msg, $gourl, $onlymsg=0, $limittime=0)
{
    $htmlhead  ="<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">";
    $htmlhead .= "<html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n<head>\r\n<title>提示信息</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n";
    $htmlhead .= "<base target='_self'/>\r\n<style>div{line-height:160%;}</style></head>\r\n<body leftmargin='0' topmargin='0' bgcolor='#FFFFFF'>\r\n<center>\r\n<script>\r\n";
    $htmlfoot  = "</script>\r\n</center>\r\n</body>\r\n</html>\r\n";

    $litime = ($limittime==0 ? 1000 : $limittime);
    $func = '';

    if($gourl=='-1')
    {
        if($limittime==0) $litime = 5000;
        $gourl = "javascript:history.go(-1);";
    }

    if($gourl=='' || $onlymsg==1)
    {
        $msg = "<script>alert(\"".str_replace("\"","“",$msg)."\");</script>";
    }
    else
    {
      
       
        
        $func .= "      var pgo=0;
      function JumpUrl(){
        if(pgo==0){ location='$gourl'; pgo=1; }
      }\r\n";
        $rmsg = $func;
        $rmsg .= "document.write(\"<br /><div style='width:450px;padding:0px;border:1px solid #DADADA;'>";
        $rmsg .= "<div style='padding:6px;font-size:12px;border-bottom:1px solid #DADADA;background:#DBEEBD;';'><b>提示信息！</b></div>\");\r\n";
        $rmsg .= "document.write(\"<div style='height:130px;font-size:10pt;background:#ffffff'><br />\");\r\n";
        $rmsg .= "document.write(\"".str_replace("\"","“",$msg)."\");\r\n";
        $rmsg .= "document.write(\"";
        
        if($onlymsg==0)
        {
            if( $gourl != 'javascript:;' && $gourl != '')
            {
                $rmsg .= "<br /><a href='{$gourl}'>如果你的浏览器没反应，请点击这里...</a>";
                $rmsg .= "<br/></div>\");\r\n";
                $rmsg .= "setTimeout('JumpUrl()',$litime);";
            }
            else
            {
                $rmsg .= "<br/></div>\");\r\n";
            }
        }
        else
        {
            $rmsg .= "<br/><br/></div>\");\r\n";
        }
        $msg  = $htmlhead.$rmsg.$htmlfoot;
    }
    echo $msg;
	exit();
}

function sess(){	
	if(isset($_SESSION['username'])){
	$ad_name=$_SESSION['username'];
	$shell=$_SESSION['shell'];
	$sql="select * from userbiao where `u_name`='$ad_name'";
	$arr=$this->fetchOne($sql);
	if($shell<>$arr['u_pw'].md5("user")){
		$this->showmsg("缓存错误,请重新登陆！",-1,0,2000);
	}	
	}
	else{
		$this->showmsg("请先登陆！",'login.php',0,2000);
	}
	$_SESSION['u_id']=$arr['u_id'];
}
function sess_show(){
	
	if(isset($_SESSION['username'])){
	$ad_name=$_SESSION['username'];
	$shell=$_SESSION['shell'];
	$sql="select * from userbiao where `u_name`='$ad_name'";
	$arr=$this->fetchOne($sql);
	if($shell=$arr['u_pw'].md5("user")){
	    return $_SESSION['username'];		
	}}
	else{
		return "login";
	}
}
function admin_sess(){
	
	if(isset($_SESSION['adminname'])){
	$ad_name=$_SESSION['adminname'];
	$shell=$_SESSION['shell'];
	$sql="select * from shopadmin where `a_name`='$ad_name'";	
	$arr=$this->fetchOne($sql);
	if($shell<>$arr['a_pw'].md5("admin")){
		$this->showmsg("缓存错误,请重新登陆！",-1,0,2000);	
	}
	}
	else{
		
		$this->showmsg("请先登陆！",'login.php',0,2000);
	}
}
function count_table($table){
    $num="select count(*) as num from ".$table;
	
	$num=$this->query($num);
	
	$count=$this->fetch($num);
	
	return $count;



}
}
?>
