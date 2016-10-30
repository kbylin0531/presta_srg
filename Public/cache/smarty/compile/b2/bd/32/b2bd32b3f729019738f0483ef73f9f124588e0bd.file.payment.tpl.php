<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:09
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2666237935815c59a00aa94-70401084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2bd32b3f729019738f0483ef73f9f124588e0bd' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2666237935815c59a00aa94-70401084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59a014ea2_10800233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59a014ea2_10800233')) {function content_5815c59a014ea2_10800233($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
		<p class="payment_module">
			<a class="bankwire" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
			</a>
		</p>
	</div>
</div>
<?php }} ?>
