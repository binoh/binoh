<?php /* Smarty version Smarty-3.1.11, created on 2013-01-14 13:16:10
         compiled from "C:\wamp\www\b\template\address.html" */ ?>
<?php /*%%SmartyHeaderCode:1372150f4051ac688d0-86450629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3179369cdc09170c49dc5b8fd14bfc25e43f0508' => 
    array (
      0 => 'C:\\wamp\\www\\b\\template\\address.html',
      1 => 1358131245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1372150f4051ac688d0-86450629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'temroot' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50f4051ae87ac6_61040540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f4051ae87ac6_61040540')) {function content_50f4051ae87ac6_61040540($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    	
        <?php echo $_smarty_tpl->getSubTemplate ('left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <!-- END of sidebar -->
       <form action="order_do.php" method="post">
        <div id="content">
       		<h2>填写支付地址</h2>
            <h5><strong></strong></h5>
            <input type="hidden" name="g_id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['g_id'];?>
" />
            <div class="col col_13 checkout">
				收货地址:<input type="text" name="addall" style="width:300px;" />
                手机号码:
                <input type="text" name="tel"  style="width:300px;"  />
                收货人:
                <input type="text" name="addname"   style="width:300px;"  />
                客户留言:
                <input type="text" name="mess"  style="width:300px;"  />
            </div>
            
            
            
             <div style="float:left; width: 265px; margin-top: 20px;clear:both;">
                    
                        <div class="continueshopping" style="float:right;"><a href="#" class="more">
                         <input type="submit" name="o_sub" value="保存订单" style="font-weight: bold;color: #21bdd0;border:none;background:none;width:100px;height:30px;" />
                        </a></div>
                       
                        <div class="continueshopping" style="float:left;"><a href="#" class="more">
                        <input type="submit" name="sub" onclick="return confirm('是否确定购买?');" value="支付" style="font-weight: bold;color: #21bdd0;border:none;background:none;width:100px;height:30px;" />
                        </a></div>
                    	
                    </div>
          
		</form>     
		</div>
        <div class="cleaner"></div>
     <!-- END of main -->
    
    <?php echo $_smarty_tpl->getSubTemplate ('foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <!-- END of footer -->   
   
</div>

</body>
</html><?php }} ?>