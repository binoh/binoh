<?php /* Smarty version Smarty-3.1.11, created on 2013-01-14 19:19:57
         compiled from "C:\wamp\www\b\template\article_d_cat.html" */ ?>
<?php /*%%SmartyHeaderCode:2725850f45987bd37f3-73489010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fd43bbfb70401cf31f73760c031944664cf7044' => 
    array (
      0 => 'C:\\wamp\\www\\b\\template\\article_d_cat.html',
      1 => 1358191120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2725850f45987bd37f3-73489010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50f45987e1de51_78895190',
  'variables' => 
  array (
    'temroot' => 0,
    'cat_arr' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f45987e1de51_78895190')) {function content_50f45987e1de51_78895190($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Store Theme - FAQs</title>
<meta name="keywords" content="web store, FAQs, free templates, website templates, CSS, HTML" />
<meta name="description" content="Web Store Theme, FAQs, free CSS template provided by templatemo.com" />
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
	<?php echo $_smarty_tpl->getSubTemplate ('top.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	<?php echo $_smarty_tpl->getSubTemplate ('left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <!-- END of sidebar -->
        
        <div id="content" class="faq">
        <h1><?php echo $_smarty_tpl->tpl_vars['cat_arr']->value['name'];?>
</h1>
       
        	
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['na'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['na']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['na']['name'] = 'na';
$_smarty_tpl->tpl_vars['smarty']->value['section']['na']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['na']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['na']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['na']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['na']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['na']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['na']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['na']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['na']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['na']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['na']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['na']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['na']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['na']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['na']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['na']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['na']['total']);
?>
			
            <h3 style="border-bottom:1px solid #CCC;"><a href="index_do.php?a_id=<?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['na']['index']]['a_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['na']['index']]['a_title'];?>
</a></h3>
            
           
          <?php endfor; endif; ?>  
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <?php echo $_smarty_tpl->getSubTemplate ('foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <!-- END of footer -->   
   
</div>

</body>
</html><?php }} ?>