<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:11
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/groups/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12367366645815c59b9275e0-66882231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dca21b35e19b699a2b97e45c67f35f341496f939' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/groups/helpers/tree/tree_node_item_radio.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12367366645815c59b9275e0-66882231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59b937c09_03452347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59b937c09_03452347')) {function content_5815c59b937c09_03452347($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="id_category" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
