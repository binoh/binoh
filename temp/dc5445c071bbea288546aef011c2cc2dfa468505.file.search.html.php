<?php /* Smarty version Smarty-3.1.11, created on 2013-01-14 13:16:41
         compiled from "C:\wamp\www\b\template\search.html" */ ?>
<?php /*%%SmartyHeaderCode:828650f40539ccbe49-74804734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc5445c071bbea288546aef011c2cc2dfa468505' => 
    array (
      0 => 'C:\\wamp\\www\\b\\template\\search.html',
      1 => 1358123655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '828650f40539ccbe49-74804734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'temroot' => 0,
    'arr' => 0,
    'root' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50f4053a0cf291_52696801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f4053a0cf291_52696801')) {function content_50f4053a0cf291_52696801($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网上超市-电子商务</title>
<meta name="keywords" content="web store, products, free templates, website templates, CSS, HTML" />
<meta name="description" content="Web Store, Products, free CSS Template from www.cssmoban.com" />
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
<link rel="stylesheet" type="text/css" href="css/styles.css" />
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
</script>

</head>

<body id="subpage">

<div id="templatemo_wrapper">
	
    <?php echo $_smarty_tpl->getSubTemplate ('top.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   
    
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	
        
        <?php echo $_smarty_tpl->getSubTemplate ('left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
        <div id="content">
        
        	<h2>搜索结果</h2> 
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['name'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['name']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['name']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <div class="col col_14 product_gallery no_margin_right">
            	<a href="index_do.php?g_id=<?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['name']['index']]['g_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
<?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['name']['index']]['g_pic'];?>
" width="160px" height="120px"/></a>
                <h3><?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['name']['index']]['g_name'];?>
</h3>
                <p class="product_price">￥<?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['name']['index']]['g_price'];?>
.00</p>
                <a href="ajax.php?do=co&g_id=<?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['name']['index']]['g_id'];?>
" class="add_to_cart">加入收藏</a>
            </div> 
            
            <?php endfor; endif; ?>
			   	
            
            <div class="cleaner h50"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
           
           
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <?php echo $_smarty_tpl->getSubTemplate ('foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <!-- END of footer -->   
   
</div>

</body>
</html><?php }} ?>