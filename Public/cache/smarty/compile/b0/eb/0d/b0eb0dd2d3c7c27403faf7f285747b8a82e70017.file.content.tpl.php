<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:10
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12617052405815c59a4faae2-26555744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0eb0dd2d3c7c27403faf7f285747b8a82e70017' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12617052405815c59a4faae2-26555744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59a500dd7_57342727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59a500dd7_57342727')) {function content_5815c59a500dd7_57342727($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
