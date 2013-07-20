<?php /* Smarty version Smarty-3.1.11, created on 2013-01-14 13:15:57
         compiled from "C:\wamp\www\b\template\member_bus.html" */ ?>
<?php /*%%SmartyHeaderCode:924750f4050d0ef652-56559052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c0f1356e9c47a39f9b78407d1b7f0173449b536' => 
    array (
      0 => 'C:\\wamp\\www\\b\\template\\member_bus.html',
      1 => 1358134203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '924750f4050d0ef652-56559052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'temroot' => 0,
    'bus_arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50f4050d2d58e8_16495638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f4050d2d58e8_16495638')) {function content_50f4050d2d58e8_16495638($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
       		<h2>购物车</h2>
            
            <div class="col col_13 checkout">
             <table width="99%" border="0" align="center"  cellpadding="3" cellspacing="1" class="table_style">
                <tr>
                  <td width="25%" class="left_title">商品名称</td>
                  <td width="25%" class="left_title">商品价格</td>
                  <td width="25%" class="left_title">商品剩余</td>
                  <td width="24%" class="left_title">购买</td>
                </tr>
                 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['name'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['name']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['name']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['bus_arr']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['name']['name'] = 'name';
$_smarty_tpl->tpl_vars['smarty']->value['section']['name']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['name']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['name']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['name']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['name']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['name']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['name']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['name']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['name']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['name']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['name']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['name']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['name']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['name']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['name']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['name']['total']);
?>
                <tr>
                 <td width="25%"><?php echo $_smarty_tpl->tpl_vars['bus_arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['name']['index']]['g_name'];?>
</td>
                  <td width="25%"><?php echo $_smarty_tpl->tpl_vars['bus_arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['name']['index']]['g_price'];?>
</td>
                  <td width="25%"><?php echo $_smarty_tpl->tpl_vars['bus_arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['name']['index']]['g_last'];?>
</td>
                  <td width="24%"><a href="order.php?do=buy&g_id=<?php echo $_smarty_tpl->tpl_vars['bus_arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['name']['index']]['g_id'];?>
">购买</a></td>
               </tr>
               <?php endfor; else: ?>
               <tr>
               <td colspan="4">
                暂无数据
                <?php endif; ?>
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