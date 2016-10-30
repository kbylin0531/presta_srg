<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:09
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18315078765815c599ac5530-26061294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93d417019e4792dcd99bd448c3b6d5b297af988e' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/blockwishlist/my-account.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18315078765815c599ac5530-26061294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c599acfa08_76085166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c599acfa08_76085166')) {function content_5815c599acfa08_76085166($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
