<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 20:56:37
         compiled from "/home/asus/workspace/sharin7/Public/admin044gobd9f/themes/default/template/helpers/tree/tree_node_folder_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8027874715815ee05b04b63-04439595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db40e54f0859742461009fad992d39d33c778b5a' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin044gobd9f/themes/default/template/helpers/tree/tree_node_folder_radio.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8027874715815ee05b04b63-04439595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'root_category' => 0,
    'input_name' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815ee05b13e73_14998345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815ee05b13e73_14998345')) {function content_5815ee05b13e73_14998345($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/asus/workspace/sharin7/Public/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<?php if ($_smarty_tpl->tpl_vars['node']->value['id_category']!=$_smarty_tpl->tpl_vars['root_category']->value) {?>
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<?php }?>
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li>
<?php }} ?>
