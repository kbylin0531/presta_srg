<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:08
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20477462205815c5987bd702-41875799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53fd58ef4e8a752caa57c5cf3fdda967c005c93b' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20477462205815c5987bd702-41875799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c5987c4b20_66229284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c5987c4b20_66229284')) {function content_5815c5987c4b20_66229284($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-up"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
