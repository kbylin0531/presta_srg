<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:10
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2261124275815c59a5646f4-09456190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f67fcf3eec1f2c624d2937f6f8a91872d5ec71b' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2261124275815c59a5646f4-09456190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59a5720a7_53627494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59a5720a7_53627494')) {function content_5815c59a5720a7_53627494($_smarty_tpl) {?>
<div class="panel-heading">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-sitemap"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<div class="pull-right">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
</div><?php }} ?>
