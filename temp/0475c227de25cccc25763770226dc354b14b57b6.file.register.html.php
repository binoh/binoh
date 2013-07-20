<?php /* Smarty version Smarty-3.1.11, created on 2013-01-15 13:20:41
         compiled from "C:\wamp\www\b\template\register.html" */ ?>
<?php /*%%SmartyHeaderCode:2282850f45ae7c48633-95041479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0475c227de25cccc25763770226dc354b14b57b6' => 
    array (
      0 => 'C:\\wamp\\www\\b\\template\\register.html',
      1 => 1358256037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2282850f45ae7c48633-95041479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50f45ae7e487e2_29540253',
  'variables' => 
  array (
    'temroot' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f45ae7e487e2_29540253')) {function content_50f45ae7e487e2_29540253($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台登陆</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
css/rel.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
js/chai.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
js/rel.js" type="text/javascript"></script>
<link href="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
css/ddsmoothmenu.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['temroot']->value;?>
js/ddsmoothmenu.js"></script>
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

</head>
<body id="home">
<div class="box w960">
        <?php echo $_smarty_tpl->getSubTemplate ('top.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

       <div class="body w960">
               <div class="login">
					<form id="form1" method="post" action="register.php">
                       <div class="user">
                             <div class="u_left">
                             <strong>用户名：</strong>
                             </div>
                             <div class="u_right">
								<input type="text" name="u_name" id="name" class="input"/>               
                              </div>
                              <div class="message name">
                              
                              </div>
                       </div>
                       <div class="user">
                              <div class="u_left">
                              <strong>手&nbsp;&nbsp;机：</strong>
                             </div>
                             <div class="u_right">
                            <input type="text" name="u_tel" id="tel"  class="input"/>
                             </div>
                             <div class="message tel">
                              
                              </div>
                       </div>
                       <div class="user">
                              <div class="u_left">
                              <strong>邮&nbsp;&nbsp;箱：</strong>
                             </div>
                             <div class="u_right">
                             <input type="text" name="u_mail" id="email" class="input"/>
                             </div>
                             <div class="message email">
                              
                              </div>
                       </div>
                       <div class="user">
                              <div class="u_left">
                              <strong>密&nbsp;&nbsp;码：</strong>
                             </div>
                             <div class="u_right">
                             <input name="u_pw" type="password" id="pw" class="input" />
                             </div>
                             <div class="message pw">
                              
                              </div>
                       </div>
                       <div class="user">
                              <div class="u_left">
                              <strong>密&nbsp;&nbsp;码：</strong>
                             </div>
                             <div class="u_right">
                             <input name="u_pw2" type="password" id="pw2" class="input" />
                             </div>
                             <div class="message pw2">
                              
                              </div>
                       </div>
                       <div class="user">
                              <div class="u_left">
                              <strong>验证码：</strong>
                              </div>
                              <div class="yan_middle">
                              <input name="yan" type="text" size="5" maxlength="4" class="input2" id="yan"   />
                         </div>
                              <div class="yan_right">
                              <img src="yan.php"/>
                              </div>
                       </div>
                       <div class="user">
                              <div class="den">
                       <input type="submit" name="submit" id="button" value="注册" class="input" />
                              </div>
                       </div>
              </form>  
                       <div class="user">
                       
                       </div>
                       
               </div>
               
       </div>
      <?php echo $_smarty_tpl->getSubTemplate ('foot.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>       
</body>
</html>
<?php }} ?>