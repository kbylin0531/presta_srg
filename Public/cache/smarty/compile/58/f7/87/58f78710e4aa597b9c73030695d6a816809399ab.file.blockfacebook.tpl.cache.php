<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 13:48:02
         compiled from "/home/asus/workspace/sharin7/Public/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8223340105815ec0233c8e0-86893222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58f78710e4aa597b9c73030695d6a816809399ab' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/modules/blockfacebook/blockfacebook.tpl',
      1 => 1476936588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8223340105815ec0233c8e0-86893222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815ec02374993_01216475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815ec02374993_01216475')) {function content_5815ec02374993_01216475($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
