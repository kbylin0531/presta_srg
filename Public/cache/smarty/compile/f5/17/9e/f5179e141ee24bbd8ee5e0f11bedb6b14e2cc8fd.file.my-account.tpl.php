<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:09
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16447377485815c599d34861-10495114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5179e141ee24bbd8ee5e0f11bedb6b14e2cc8fd' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/my-account.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16447377485815c599d34861-10495114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'in_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c599d541d8_60272634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c599d541d8_60272634')) {function content_5815c599d541d8_60272634($_smarty_tpl) {?>

<li class="favoriteproducts">
	<a
	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
"
	title="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
">
		<?php if (!$_smarty_tpl->tpl_vars['in_footer']->value) {?>
			<i class="icon-heart-empty"></i>
			<span><?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</span>
		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>

		<?php }?>
	</a>
</li>
<?php }} ?>
