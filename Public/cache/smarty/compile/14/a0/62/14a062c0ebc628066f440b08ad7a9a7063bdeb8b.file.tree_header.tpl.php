<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 20:56:37
         compiled from "/home/asus/workspace/sharin7/Public/admin044gobd9f/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2652130805815ee05af0c89-53808341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14a062c0ebc628066f440b08ad7a9a7063bdeb8b' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin044gobd9f/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2652130805815ee05af0c89-53808341',
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
  'unifunc' => 'content_5815ee05af6ab0_97332259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815ee05af6ab0_97332259')) {function content_5815ee05af6ab0_97332259($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
