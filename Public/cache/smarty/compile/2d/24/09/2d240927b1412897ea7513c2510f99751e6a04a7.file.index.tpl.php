<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:14
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14274538265815c59eb8a072-83098906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d240927b1412897ea7513c2510f99751e6a04a7' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/index.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14274538265815c59eb8a072-83098906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59eb9f396_26039988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59eb9f396_26039988')) {function content_5815c59eb9f396_26039988($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

		</ul>
	<?php }?>
	<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
	<div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>
</div>
<?php }?><?php }} ?>
