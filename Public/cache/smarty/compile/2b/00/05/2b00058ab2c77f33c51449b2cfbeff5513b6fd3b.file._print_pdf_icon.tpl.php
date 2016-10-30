<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:10
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5228138705815c59ad08b73-71873088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b00058ab2c77f33c51449b2cfbeff5513b6fd3b' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5228138705815c59ad08b73-71873088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59ad12cd4_89552020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59ad12cd4_89552020')) {function content_5815c59ad12cd4_89552020($_smarty_tpl) {?>


<?php if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }?><?php }} ?>
