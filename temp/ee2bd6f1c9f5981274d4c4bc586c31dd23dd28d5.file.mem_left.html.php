<?php /* Smarty version Smarty-3.1.11, created on 2013-01-14 12:59:15
         compiled from "C:\wamp\www\b\template\mem_left.html" */ ?>
<?php /*%%SmartyHeaderCode:1968850f40123ea5bc4-98354897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee2bd6f1c9f5981274d4c4bc586c31dd23dd28d5' => 
    array (
      0 => 'C:\\wamp\\www\\b\\template\\mem_left.html',
      1 => 1358132082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1968850f40123ea5bc4-98354897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50f4012405eb71_41259735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f4012405eb71_41259735')) {function content_50f4012405eb71_41259735($_smarty_tpl) {?><div id="sidebar">
        	<h3><?php echo $_smarty_tpl->tpl_vars['title_user']->value;?>
，欢迎你！</h3>
            <ul class="sidebar_menu">
			    <li><a href="member.php">个人主页</a></li>
                <li><a href="member.php?do=order">订单详情</a></li>				
                <li><a href="member.php?do=co">收藏商品</a></li>
                <li><a href="member.php?do=bus">购物车</a></li>				
            	<li><a href="member.php?do=pay">充值</a></li>
                <li><a href="member.php?do=edit">修改信息</a></li>     
               
			</ul>
             <h3>商品搜索</h3>
            <p>最好的网上超市！</p>
            <div id="newsletter">
               <form action="search.php" method="get">
                  <input type="text" value="输入商品名称" name="key" id="email_newsletter" title="email_newsletter" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="s_sub" value="搜索" alt="Subscribe" id="subscribebtn" title="Subscribe" class="subscribebtn"  />
                </form>
                <div class="cleaner"></div>
            </div>
        </div>
<?php }} ?>