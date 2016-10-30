<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:13
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/orders/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13637645865815c59d1081f4-59092720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b01b3994cb633e28916b3f9e5cbc2d36d3859aea' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/orders/_print_pdf_icon.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13637645865815c59d1081f4-59092720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59d11f417_68481025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59d11f417_68481025')) {function content_5815c59d11f417_68481025($_smarty_tpl) {?>


<span class="btn-group-action">
	<span class="btn-group">
	<?php if (Configuration::get('PS_INVOICE')&&$_smarty_tpl->tpl_vars['order']->value->invoice_number) {?>
		<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-file-text"></i>
		</a>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['order']->value->delivery_number) {?>
		<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateDeliverySlipPDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-truck"></i>
		</a>
	<?php }?>
	</span>
</span>
<?php }} ?>
