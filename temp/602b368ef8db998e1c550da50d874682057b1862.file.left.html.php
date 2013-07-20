<?php /* Smarty version Smarty-3.1.11, created on 2013-04-19 04:34:16
         compiled from "/home2/binohcom/bin/b/template/left.html" */ ?>
<?php /*%%SmartyHeaderCode:16833894495170c9484af446-93348904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '602b368ef8db998e1c550da50d874682057b1862' => 
    array (
      0 => '/home2/binohcom/bin/b/template/left.html',
      1 => 1364227233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16833894495170c9484af446-93348904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goodscat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5170c9484d58b5_60320057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5170c9484d58b5_60320057')) {function content_5170c9484d58b5_60320057($_smarty_tpl) {?><div id="sidebar">
        	<h3>商品分类</h3>
            <ul class="sidebar_menu">
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
				<?php if ($_smarty_tpl->tpl_vars['goodscat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['up_id']==0){?>
			    <li><a href="index_do.php?cat_id=<?php echo $_smarty_tpl->tpl_vars['goodscat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['goodscat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dao']['index']]['cat_name'];?>
</a></li>
                <?php }?>
				<?php endfor; endif; ?>
                
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
        </div><?php }} ?>