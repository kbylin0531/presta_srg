<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 20:56:37
         compiled from "/home/asus/workspace/sharin7/Public/admin044gobd9f/themes/default/template/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19286132375815ee05a9a300-71064377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98d6d6037282fcc6225c22b847199adaf7d6b4a8' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin044gobd9f/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19286132375815ee05a9a300-71064377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815ee05ad6f99_14346995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815ee05ad6f99_14346995')) {function content_5815ee05ad6f99_14346995($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
