<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:12
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/products/helpers/tree/subtree_associated_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11485395985815c59c4eaa70-44099363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '857352b265e7987a47a2fdd85817e596bd143a17' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/products/helpers/tree/subtree_associated_categories.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11485395985815c59c4eaa70-44099363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nodes' => 0,
    'selected_categories' => 0,
    'imploded_selected_categories' => 0,
    'id_tree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59c4f98e3_66237245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59c4f98e3_66237245')) {function content_5815c59c4f98e3_66237245($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

<?php }?>

<script type="text/javascript">
<?php if (isset($_smarty_tpl->tpl_vars['selected_categories']->value)&&!empty($_smarty_tpl->tpl_vars['selected_categories']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['imploded_selected_categories'] = new Smarty_variable(implode('","',$_smarty_tpl->tpl_vars['selected_categories']->value), null, 0);?>
	var selected_categories = new Array("<?php echo $_smarty_tpl->tpl_vars['imploded_selected_categories']->value;?>
");

	$('#<?php echo $_smarty_tpl->tpl_vars['id_tree']->value;?>
').tree('collapseAll');
	$('#<?php echo $_smarty_tpl->tpl_vars['id_tree']->value;?>
').find(":input").each(
		function()
		{
			if ($.inArray($(this).val(), selected_categories) != -1)
			{
				$(this).prop("checked", true);
				$(this).parent().addClass("tree-selected");
				$(this).parents("ul.tree").each(
					function()
					{
						$(this).children().children().children(".icon-folder-close")
							.removeClass("icon-folder-close")
							.addClass("icon-folder-open");
						$(this).show();
					}
				);
			}
		}
	);
<?php }?>
</script><?php }} ?>
