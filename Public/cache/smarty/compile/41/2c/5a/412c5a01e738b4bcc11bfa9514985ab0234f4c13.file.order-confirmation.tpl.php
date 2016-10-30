<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:08
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/referralprogram/views/templates/hook/order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:456643615815c5989a7ba4-18431572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '412c5a01e738b4bcc11bfa9514985ab0234f4c13' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/referralprogram/views/templates/hook/order-confirmation.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '456643615815c5989a7ba4-18431572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sponsor_firstname' => 0,
    'sponsor_lastname' => 0,
    'discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c5989af474_43480788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c5989af474_43480788')) {function content_5815c5989af474_43480788($_smarty_tpl) {?>

<p class="success">
	<?php echo smartyTranslate(array('s'=>'Thanks to your order, your sponsor %1$s %2$s will earn a voucher worth %3$d off when this order is confirmed.','sprintf'=>array($_smarty_tpl->tpl_vars['sponsor_firstname']->value,$_smarty_tpl->tpl_vars['sponsor_lastname']->value,$_smarty_tpl->tpl_vars['discount']->value),'mod'=>'referralprogram'),$_smarty_tpl);?>

</p>
<br/><?php }} ?>
