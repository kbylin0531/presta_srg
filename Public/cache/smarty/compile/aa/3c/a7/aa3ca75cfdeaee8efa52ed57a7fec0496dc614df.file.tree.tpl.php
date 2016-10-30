<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:08
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/helpers/tree/tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11057423575815c598de8349-58806032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa3ca75cfdeaee8efa52ed57a7fec0496dc614df' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/helpers/tree/tree.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11057423575815c598de8349-58806032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c598df4e41_58878448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c598df4e41_58878448')) {function content_5815c598df4e41_58878448($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div><?php }} ?>
