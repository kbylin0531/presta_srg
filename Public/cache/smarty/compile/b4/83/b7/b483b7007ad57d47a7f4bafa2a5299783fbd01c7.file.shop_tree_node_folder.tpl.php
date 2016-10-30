<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:10
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13692322575815c59a556371-44292631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b483b7007ad57d47a7f4bafa2a5299783fbd01c7' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_folder.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13692322575815c59a556371-44292631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_shop_group' => 0,
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59a5621e3_57034192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59a5621e3_57034192')) {function content_5815c59a5621e3_57034192($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/asus/workspace/sharin7/Public/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_shop_group']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_shop_group=<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
