<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:08
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/helpers/list/list_action_supply_order_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6733926495815c598747135-93955813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '609ce1af61c30df12a8231efd738b7d6d46e1a67' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/helpers/list/list_action_supply_order_receipt.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6733926495815c598747135-93955813',
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
  'unifunc' => 'content_5815c598751449_17987491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c598751449_17987491')) {function content_5815c598751449_17987491($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-truck"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
