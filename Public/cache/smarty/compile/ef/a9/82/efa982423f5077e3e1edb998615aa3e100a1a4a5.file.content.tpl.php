<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:13
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8421394105815c59d6a0939-43680550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efa982423f5077e3e1edb998615aa3e100a1a4a5' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/localization/content.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8421394105815c59d6a0939-43680550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59d6ac719_62108391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59d6ac719_62108391')) {function content_5815c59d6ac719_62108391($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
