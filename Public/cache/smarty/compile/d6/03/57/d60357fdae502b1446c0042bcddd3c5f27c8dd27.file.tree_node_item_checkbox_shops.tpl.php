<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:08
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/helpers/tree/tree_node_item_checkbox_shops.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6206911195815c598e7c473-07559433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd60357fdae502b1446c0042bcddd3c5f27c8dd27' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/helpers/tree/tree_node_item_checkbox_shops.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6206911195815c598e7c473-07559433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'table' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c598e92237_62953828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c598e92237_62953828')) {function content_5815c598e92237_62953828($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="checkbox" name="checkBoxShopAsso_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['node']->value['id_shop'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_shop'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
