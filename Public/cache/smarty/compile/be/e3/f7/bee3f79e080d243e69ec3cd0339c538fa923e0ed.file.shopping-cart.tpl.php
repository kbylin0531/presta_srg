<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:08
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/referralprogram/views/templates/hook/shopping-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11909448365815c5989d0584-11727671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bee3f79e080d243e69ec3cd0339c538fa923e0ed' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/referralprogram/views/templates/hook/shopping-cart.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11909448365815c5989d0584-11727671',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'discount_display' => 0,
    'discount' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c5989e0025_41132356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c5989e0025_41132356')) {function content_5815c5989e0025_41132356($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<p id="referralprogram">
	<i class="icon-flag"></i>
	<?php echo smartyTranslate(array('s'=>'You have earned a voucher worth %s thanks to your sponsor!','sprintf'=>$_smarty_tpl->tpl_vars['discount_display']->value,'mod'=>'referralprogram'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Enter voucher name %s to receive the reduction on this order.','sprintf'=>$_smarty_tpl->tpl_vars['discount']->value->name,'mod'=>'referralprogram'),$_smarty_tpl);?>

	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'View your referral program.','mod'=>'referralprogram'),$_smarty_tpl);?>
</a>
</p>
<br />
<!-- END : MODULE ReferralProgram --><?php }} ?>
