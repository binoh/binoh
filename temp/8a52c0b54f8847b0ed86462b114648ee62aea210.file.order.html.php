<?php /* Smarty version Smarty-3.1.11, created on 2013-01-14 13:16:07
         compiled from "C:\wamp\www\b\template\order.html" */ ?>
<?php /*%%SmartyHeaderCode:1609650f40517d003d7-25075653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a52c0b54f8847b0ed86462b114648ee62aea210' => 
    array (
      0 => 'C:\\wamp\\www\\b\\template\\order.html',
      1 => 1358125524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1609650f40517d003d7-25075653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'temroot' => 0,
    'root' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50f405180dfd68_02045509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f405180dfd68_02045509')) {function content_50f405180dfd68_02045509($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Store Theme - Shopping Cart</title>
<meta name="keywords" content="web store, shopping cart, free templates, ecommerce templates, CSS, HTML" />
<meta name="description" content="Web Store, Shopping Cart, free CSS Template from www.cssmoban.com" />
<link href="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
css/ddsmoothmenu.css" />

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
js/ddsmoothmenu.js">

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<script language="javascript" type="text/javascript">
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
    	
        <?php echo $_smarty_tpl->getSubTemplate ('left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
       
        <div id="content">
		
        	<table width="700px" cellspacing="0" cellpadding="5">
                   	  <tr bgcolor="#CCCCCC">
                        	<th width="220" align="left">商品</th> 
                        	<th width="180" align="left">Description </th> 
                       	  	<th width="100" align="center">数量 </th> 
                        	<th width="60" align="right">价格 </th> 
                        	<th width="60" align="right">总价格 </th> 
                        	
                            
                      </tr>
                    	<tr>
                        	<td><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
<?php echo $_smarty_tpl->tpl_vars['arr']->value['g_pic'];?>
" height="120px" width="160px"/></td> 
                        	<td><?php echo $_smarty_tpl->tpl_vars['arr']->value['g_name'];?>
</td> 
                            <td align="center"><input type="text" value="1" style="width: 20px; text-align: right" /> </td>
                            <td align="right">￥<?php echo $_smarty_tpl->tpl_vars['arr']->value['g_price'];?>
 </td> 
                            <td align="right">￥<?php echo $_smarty_tpl->tpl_vars['arr']->value['g_price'];?>
 </td>
                            
						</tr>
                       
					</table>
                    <div style="float:right; width: 215px; margin-top: 20px;">
                    
                        <div class="checkout"></div>
                        <div class="cleaner h20"></div>
                        <div class="continueshopping"><a href="order.php?do=address&g_id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['g_id'];?>
" class="more">下一步，填写收货地址</a></div>
                    	
                    </div>
            
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <?php echo $_smarty_tpl->getSubTemplate ('foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <!-- END of footer -->   
   
</div>

</body>
</html><?php }} ?>