<?php /* Smarty version Smarty-3.1.11, created on 2013-03-24 15:30:30
         compiled from "/home/binohcom/public_html/b/template/top.html" */ ?>
<?php /*%%SmartyHeaderCode:1506447363514f1c1669a8c3-24070271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd1deaffbcc90039d0635d3c0fefebbd2e7fc568' => 
    array (
      0 => '/home/binohcom/public_html/b/template/top.html',
      1 => 1358220084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1506447363514f1c1669a8c3-24070271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_user' => 0,
    'goodscat' => 0,
    'wencat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_514f1c167600b0_57487855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514f1c167600b0_57487855')) {function content_514f1c167600b0_57487855($_smarty_tpl) {?><div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="#">网上超市</a></h1></div>
        
        <div id="header_right">
            <ul id="language">
            <?php if ($_smarty_tpl->tpl_vars['title_user']->value=='login'){?>
            	<li><a href="register.php">注册</a></li>
                <li><a href="login.php">登陆</a></li>
                
                <?php }else{ ?>
                <li><a href="member.php">个人主页</a></li>
                <li><a href="index.php?out=out" id="out" onclick="return confirm('你确定要退出吗?');">退出</a></li>
                <li><?php echo $_smarty_tpl->tpl_vars['title_user']->value;?>
 欢迎你！</li>
                
                
                <?php }?>
            </ul>
            <div class="cleaner"></div>
            <div id="templatemo_search">
                <form action="search.php" method="get">
                  <input type="text" value="搜索商品" name="key" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="s_sub" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
         </div> <!-- END -->
    </div> <!-- END of header -->
    
    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="../" class="selected">首页</a></li>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dao'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['goodscat']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if ($_smarty_tpl->tpl_vars['goodscat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['up_id']==0&&$_smarty_tpl->tpl_vars['goodscat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['is_dao']==1){?>
            <li><a href="index_do.php?cat_id=<?php echo $_smarty_tpl->tpl_vars['goodscat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['goodscat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['cat_name'];?>
</a>
            
                <ul>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['goodscat']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['name'] = 'erdao';
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['total']);
?>
				<?php if ($_smarty_tpl->tpl_vars['goodscat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['erdao']['index']]['up_id']==$_smarty_tpl->tpl_vars['goodscat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['cat_id']){?>
                    <li><a href="index_do.php?cat_d_id=<?php echo $_smarty_tpl->tpl_vars['goodscat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['erdao']['index']]['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['goodscat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['erdao']['index']]['cat_name'];?>
</a></li>
                 <?php }?>
				<?php endfor; endif; ?>  
              </ul>
            </li>
            <?php }?>
			<?php endfor; endif; ?>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dao'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dao']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dao']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['wencat']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if ($_smarty_tpl->tpl_vars['wencat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['fid']==0&&$_smarty_tpl->tpl_vars['wencat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['isshow']==1){?>
            <li><a href="index_do.php?wen_id=<?php echo $_smarty_tpl->tpl_vars['wencat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['wen_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['wencat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['name'];?>
</a>
                <ul>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['wencat']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['name'] = 'erdao';
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['erdao']['total']);
?>
				<?php if ($_smarty_tpl->tpl_vars['wencat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['erdao']['index']]['fid']==$_smarty_tpl->tpl_vars['wencat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['wen_id']){?>
                    <li><a href="index_do.php?wen_d_id=<?php echo $_smarty_tpl->tpl_vars['wencat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['erdao']['index']]['wen_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['wencat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['erdao']['index']]['name'];?>
</a></li>
                    <?php }?>
					<?php endfor; endif; ?>
                    
              </ul>
            </li>
            <?php }?>
			<?php endfor; endif; ?>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu --><?php }} ?>