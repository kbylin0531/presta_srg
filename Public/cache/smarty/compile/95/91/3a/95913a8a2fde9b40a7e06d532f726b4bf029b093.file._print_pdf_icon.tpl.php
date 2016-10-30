<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:12
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12928270635815c59cc5aa86-14392491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95913a8a2fde9b40a7e06d532f726b4bf029b093' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12928270635815c59cc5aa86-14392491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59cc647e2_45393501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59cc647e2_45393501')) {function content_5815c59cc647e2_45393501($_smarty_tpl) {?>



<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateOrderSlipPDF&amp;id_order_slip=<?php echo intval($_smarty_tpl->tpl_vars['order_slip']->value->id);?>
">
	<i class="icon-file-text"></i>
	<?php echo smartyTranslate(array('s'=>'Download credit slip'),$_smarty_tpl);?>

</a>

<?php }} ?>
