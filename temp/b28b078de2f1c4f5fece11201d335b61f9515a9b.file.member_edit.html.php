<?php /* Smarty version Smarty-3.1.11, created on 2013-01-14 20:27:44
         compiled from "C:\wamp\www\b\template\member_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:941750f4634261af91-43393899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b28b078de2f1c4f5fece11201d335b61f9515a9b' => 
    array (
      0 => 'C:\\wamp\\www\\b\\template\\member_edit.html',
      1 => 1358195257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '941750f4634261af91-43393899',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50f463427fd7a5_97199977',
  'variables' => 
  array (
    'temroot' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f463427fd7a5_97199977')) {function content_50f463427fd7a5_97199977($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Store Theme - Checkout</title>
<meta name="keywords" content="web store, checkout, free ecommerce templates, store templates, CSS, HTML" />
<meta name="description" content="Web Store Theme, Checkout, free CSS template provided by templatemo.com" />
<link href="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
css/ddsmoothmenu.css" />

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

</head>

<body id="subpage">

<div id="templatemo_wrapper">
	 <!-- END of header -->
    <?php echo $_smarty_tpl->getSubTemplate ('top.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

     <!-- end of templatemo_menu -->
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	 <?php echo $_smarty_tpl->getSubTemplate ('mem_left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
         <!-- END of sidebar -->
       
        <div id="content">
       		<h2>个人主页</h2>
           <form action="member_do.php?do=edit" method="post">
            <div class="col col_13 checkout" style="width:400px;">
             <table width="99%" border="0" align="center"  cellpadding="3" cellspacing="1" class="table_style">
                <tr>
                  <td width="25%" class="left_title">用户名</td>
                  <td width="49%" colspan="2"><input name='u_name' value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['u_name'];?>
" type="text" width="130px" /></td>
                  
                </tr>
                <tr>
                  <td width="25%" class="left_title">密码</td>
                  <td width="25%" class="left_title"><input name='u_pw' value="" type="text" width="130px" /></td><td>(*为空不改动)</td>
                  
                </tr>
                <tr>
                  <td width="25%" class="left_title">邮箱</td>
                  <td width="49%" colspan="2" class="left_title"><input name='u_mail' value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['u_mail'];?>
" type="text" width="130px" /></td>
                  
                </tr>
                 <tr>
                  <td width="25%" class="left_title">手机号码</td>
                  <td width="49%" colspan="2" class="left_title"><input name='u_tel' value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['u_tel'];?>
" type="text" width="130px" /></td>
                  
                </tr>
                <tr>
                <td colspan="2">
               <input name="sub" type="submit" class="subscribebtn" />
               </td>
               </tr>
              </table>
           
				
            </div>
            </form>
            <div class="col col_13 checkout">
            	
            </div>
            
           
               
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    <?php echo $_smarty_tpl->getSubTemplate ('foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

     <!-- END of footer -->   
   
</div>

</body>
</html><?php }} ?>