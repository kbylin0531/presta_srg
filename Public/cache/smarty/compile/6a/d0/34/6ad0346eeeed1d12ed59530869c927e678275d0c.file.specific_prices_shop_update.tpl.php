<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:12
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/products/specific_prices_shop_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12638963665815c59c7005f2-24974330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ad0346eeeed1d12ed59530869c927e678275d0c' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/products/specific_prices_shop_update.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12638963665815c59c7005f2-24974330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option_list' => 0,
    'key_id' => 0,
    'row' => 0,
    'key_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59c70c0d1_68971088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59c70c0d1_68971088')) {function content_5815c59c70c0d1_68971088($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<option value="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_id']->value]);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_value']->value], ENT_QUOTES, 'UTF-8', true);?>
</option>
<?php } ?><?php }} ?>
