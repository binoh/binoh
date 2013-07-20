<?php /* Smarty version Smarty-3.1.11, created on 2013-04-19 04:34:36
         compiled from "/home2/binohcom/bin/b/template/goods.html" */ ?>
<?php /*%%SmartyHeaderCode:1830809055170c95ca45009-50074209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae673e08e7dfe1224c8e2e75e44add44fbb88634' => 
    array (
      0 => '/home2/binohcom/bin/b/template/goods.html',
      1 => 1364227233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1830809055170c95ca45009-50074209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'temroot' => 0,
    'root' => 0,
    'arr' => 0,
    'tui_arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5170c95cb310f2_75266921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5170c95cb310f2_75266921')) {function content_5170c95cb310f2_75266921($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网上超市-电子商务</title>
<meta name="keywords" content="web store, free templates, website templates, CSS, HTML" />
<meta name="description" content="Web Store Theme is a free CSS template provided by templatemo.com." />
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

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
css/lightbox.css" type="text/css" media="screen" />
	
<script src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
js/prototype.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
js/lightbox.js" type="text/javascript"></script>

</head>

<body id="subpage">

<div id="templatemo_wrapper">
	<?php echo $_smarty_tpl->getSubTemplate ('top.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	
        <?php echo $_smarty_tpl->getSubTemplate ('left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <!-- END of sidebar -->
        
        <div id="content">
        	<h2>产品详情</h2>
            <div class="col col_13">
        	<img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
<?php echo $_smarty_tpl->tpl_vars['arr']->value['g_pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['arr']->value['g_name'];?>
" width="300px" height="200px" />
            </div>
            <div class="col col_13 no_margin_right">
                <table>
                    <tr>
                        <td height="30" width="160">商品名:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['g_name'];?>
</td>
                    </tr>
                    <tr>
                        <td height="30">价格:</td>
                        <td>￥<?php echo $_smarty_tpl->tpl_vars['arr']->value['g_price'];?>
.00</td>
                    </tr>
                    <tr>
                        <td height="30">剩余:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['g_last'];?>
</td>
                    </tr>
                    <tr>
                        <td height="30">品牌:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['g_bakd'];?>
</td>
                    </tr>
                    <tr><td height="30">数量:</td><td><input type="text" value="1" style="width: 20px; text-align: right" /></td></tr>
                </table>
                <div class="cleaner h20"></div>
                <a href="order.php?do=buy&g_id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['g_id'];?>
" class="add_to_cart">购买</a>
                <a href="ajax.php?do=co&g_id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['g_id'];?>
" class="add_to_cart">加入收藏</a>
                <a href="ajax.php?do=bus&g_id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['g_id'];?>
" class="add_to_cart">加入购物车</a>
			</div>
            <div class="cleaner h30"></div>
            
            <h5><strong>商品详情</strong></h5>
            <div class="info_all" style="margin: 0 0 10px 0;padding: 0;width:700px;overflow:hidden;">
            <?php echo $_smarty_tpl->tpl_vars['arr']->value['g_info'];?>

            </div>	
            
            <div class="cleaner h50"></div>
            
            <h4>推荐产品</h4>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tui'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tui']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tui_arr']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['name'] = 'tui';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tui']['total']);
?>
        	<div class="col col_14 product_gallery <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['tui']['last']){?>no_margin_right<?php }?> ">
            	<a href="index_do.php?g_id=<?php echo $_smarty_tpl->tpl_vars['tui_arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tui']['index']]['g_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
<?php echo $_smarty_tpl->tpl_vars['tui_arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tui']['index']]['g_pic'];?>
" width="200px" height="150px"/></a>
                <h3>Ut eu feugiat</h3>
                <p class="product_price">￥<?php echo $_smarty_tpl->tpl_vars['tui_arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tui']['index']]['g_price'];?>
</p>
                <a href="ajax.php?do=bus&g_id=<?php echo $_smarty_tpl->tpl_vars['tui_arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tui']['index']]['g_id'];?>
" class="add_to_cart">加入购物车</a>
            </div> 
            <?php endfor; endif; ?>       	
            
           
            <div class="cleaner"></div>
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
     <?php echo $_smarty_tpl->getSubTemplate ('foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

     <!-- END of footer -->   
   
</div>

</body>
</html><?php }} ?>