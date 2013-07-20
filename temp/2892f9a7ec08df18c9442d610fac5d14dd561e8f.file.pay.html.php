<?php /* Smarty version Smarty-3.1.11, created on 2013-01-14 18:08:48
         compiled from "C:\wamp\www\b\template\pay.html" */ ?>
<?php /*%%SmartyHeaderCode:2207750f449b04ad950-02943090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2892f9a7ec08df18c9442d610fac5d14dd561e8f' => 
    array (
      0 => 'C:\\wamp\\www\\b\\template\\pay.html',
      1 => 1358134813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2207750f449b04ad950-02943090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'temroot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50f449b0793a79_89692544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f449b0793a79_89692544')) {function content_50f449b0793a79_89692544($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
       		<h2>充值</h2> 
            <div class="cleaner h50"></div>
            
			
            <table style="border:1px solid #CCCCCC;" width="100%">
                <tr>
                    <td height="80px"> 银行汇款</td>
                    <td width="400px;" style="padding: 0px 20px;">银行名称 收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。 注意事项：办理电汇时，请在电汇单"汇款用途"一栏处注明您的订单号。
                    </td>
                    <td><a href="#" class="more">go</a></td>
                </tr>
                <tr>
                    <td  height="80px">货到付款
                    </td>
                    <td  width="400px;" style="padding: 0px 20px;">开通城市：××× 货到付款区域：×××
                    </td>
                    <td><a href="#" class="more">go</a></td>
                </tr>
            </table>
               
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <?php echo $_smarty_tpl->getSubTemplate ('foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <!-- END of footer -->   
   
</div>

</body>
</html><?php }} ?>