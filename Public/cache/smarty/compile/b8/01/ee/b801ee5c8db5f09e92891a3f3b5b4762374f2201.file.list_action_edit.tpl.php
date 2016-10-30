<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:11
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2788184405815c59b6ee361-36502111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b801ee5c8db5f09e92891a3f3b5b4762374f2201' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2788184405815c59b6ee361-36502111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59b6f3d78_11159526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59b6f3d78_11159526')) {function content_5815c59b6f3d78_11159526($_smarty_tpl) {?>
<a onclick="loadTaxRule('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i> 
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
