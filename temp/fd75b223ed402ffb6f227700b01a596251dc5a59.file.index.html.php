<?php /* Smarty version Smarty-3.1.11, created on 2013-05-04 02:33:17
         compiled from "D:\wamp\www\bmall\template\index.html" */ ?>
<?php /*%%SmartyHeaderCode:254325184736dd33c08-66300887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd75b223ed402ffb6f227700b01a596251dc5a59' => 
    array (
      0 => 'D:\\wamp\\www\\bmall\\template\\index.html',
      1 => 1364227231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254325184736dd33c08-66300887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'temroot' => 0,
    'goodstime' => 0,
    'root' => 0,
    'goodsclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5184736e0433f7_97165644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5184736e0433f7_97165644')) {function content_5184736e0433f7_97165644($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网上超市-电子商务</title>
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

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
css/styles.css" />
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
scripts/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
scripts/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
scripts/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
	window.addEvents({
		'domready': function(){
			/* thumbnails example , div containers */
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',		
						itemsVisible: 5,
						elemsSlide: 2,
						duration: 200,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 171,
						showControls:1});
		},
		
	});

	function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
</script>

</head>

<body id="home">

<?php echo $_smarty_tpl->getSubTemplate ('top.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
   
    
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	<div id="product_slider">
    		<div id="SlideItMoo_outer">	
                <div id="SlideItMoo_inner">			
                    <div id="SlideItMoo_items">
                        <div id="SlideItMoo_items">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dao'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['goodstime']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['name'] = 'dao';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['total']);
?>
                        <div class="SlideItMoo_element">
                                <a href="index_do.php?g_id=<?php echo $_smarty_tpl->tpl_vars['goodstime']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['g_id'];?>
" target="_parent">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
<?php echo $_smarty_tpl->tpl_vars['goodstime']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['g_pic'];?>
" width="160px" height="120px" alt="<?php echo $_smarty_tpl->tpl_vars['goodstime']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['g_name'];?>
" /></a>
                        </div>	
                    <?php endfor; endif; ?>   
                    </div>	
                    </div>			
                </div>
            </div>
            <div class="cleaner"></div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

         <!-- END of sidebar -->
        
        <div id="content">
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dao'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['goodsclick']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['name'] = 'dao';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['total']);
?>
        	<div class="col col_14 product_gallery <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['dao']['index_next']%3==0){?>no_margin_right<?php }?>">
            	<a href="index_do.php?g_id=<?php echo $_smarty_tpl->tpl_vars['goodsclick']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['g_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
<?php echo $_smarty_tpl->tpl_vars['goodsclick']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['g_pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goodsclick']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['g_name'];?>
" width="200px" height="150px" /></a>
                <h3><?php echo $_smarty_tpl->tpl_vars['goodsclick']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['g_name'];?>
<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['dao']['index_next'];?>
</h3>
                <p class="product_price">￥<?php echo $_smarty_tpl->tpl_vars['goodsclick']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['g_price'];?>
.00</p>
                <a href="ajax.php?do=bus&g_id=<?php echo $_smarty_tpl->tpl_vars['goodsclick']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['g_id'];?>
" class="add_to_cart">加入购物车</a>
            </div> 
         <?php endfor; endif; ?>          	
                  	
            	
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    <?php echo $_smarty_tpl->getSubTemplate ('foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

     <!-- END of footer -->   
   
</div>

</body>
</html><?php }} ?>