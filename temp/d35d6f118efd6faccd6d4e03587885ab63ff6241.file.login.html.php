<?php /* Smarty version Smarty-3.1.11, created on 2013-03-24 15:30:51
         compiled from "/home/binohcom/public_html/b/template/login.html" */ ?>
<?php /*%%SmartyHeaderCode:69781262514f1c2b686427-92601150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd35d6f118efd6faccd6d4e03587885ab63ff6241' => 
    array (
      0 => '/home/binohcom/public_html/b/template/login.html',
      1 => 1358088722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69781262514f1c2b686427-92601150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'temroot' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_514f1c2b6e6da8_77943264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514f1c2b6e6da8_77943264')) {function content_514f1c2b6e6da8_77943264($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台登陆</title>
<link href="../template/css/login.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
css/ddsmoothmenu.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
js/ddsmoothmenu.js"></script>
<script src="../template/js/chai.js" type="text/javascript"></script>
<script src="../template/js/new.js" type="text/javascript"></script>
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
<div class="box w960">
       <?php echo $_smarty_tpl->getSubTemplate ('top.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

       <div class="body w960">
               <div class="login">
               <form action="login.php" method="post">
                       <div class="user">
                             <div class="u_left">
                             <strong>帐&nbsp;&nbsp;号：</strong>
                             </div>
                             <div class="u_right">
                             <input name="username" type="text" class="input" />
                             </div>
                       </div>
                       <div class="user">
                              <div class="u_left">
                              <strong>密&nbsp;&nbsp;码：</strong>
                             </div>
                             <div class="u_right">
                             <input name="password" type="password" class="input" />
                             </div>
                       </div>
                       <div class="user">
                              <div class="u_left">
                              <strong>验证码：</strong>
                              </div>
                              <div class="yan_middle">
                              <input name="yan" type="text" size="5" maxlength="4" class="input2"  />
                         </div>
                              <div class="yan_right">
                              <img src="yan.php"/>
                              </div>
                       </div>
                       <div class="user">
                              <div class="den">
                       <input type="submit" name="submit" value="登陆" class="input" />
                              </div>
                       </div>
              </form>  
                       <div class="user">
                       
                       </div>
                       <div class="msg">
                       <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

                       </div>
               </div>
               
       </div>
        <?php echo $_smarty_tpl->getSubTemplate ('foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>       
</body>
</html>
<?php }} ?>