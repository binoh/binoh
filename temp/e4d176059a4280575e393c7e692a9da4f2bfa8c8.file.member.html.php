<?php /* Smarty version Smarty-3.1.11, created on 2013-01-14 20:35:57
         compiled from "C:\wamp\www\b\template\member.html" */ ?>
<?php /*%%SmartyHeaderCode:3021950f40123cf3b82-45187337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4d176059a4280575e393c7e692a9da4f2bfa8c8' => 
    array (
      0 => 'C:\\wamp\\www\\b\\template\\member.html',
      1 => 1358195756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3021950f40123cf3b82-45187337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50f40123e7dad4_18019128',
  'variables' => 
  array (
    'temroot' => 0,
    'co_num' => 0,
    'order_num' => 0,
    'bus_num' => 0,
    'user_arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f40123e7dad4_18019128')) {function content_50f40123e7dad4_18019128($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
           
            <div class="col col_13 checkout">
				<table width="99%" border="0" align="center"  cellpadding="3" cellspacing="1" class="table_style">
                <tr>
                  <td width="40%" class="left_title"><span class="left-title">收藏商品</span></td>
                  <td width="40%"><?php echo $_smarty_tpl->tpl_vars['co_num']->value;?>
</td>
                </tr>
                <tr>
                  <td class="left_title">订单总数</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['order_num']->value;?>
</td>
                </tr>
                <tr>
                  <td class="left_title">购物车数量</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['bus_num']->value;?>
</td>
                </tr>
                 <tr>
                  <td class="left_title">剩余金额</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['user_arr']->value['price'];?>
</td>
                </tr>
               
               
              </table>
              
            </div>
            
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