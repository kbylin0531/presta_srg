<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:11
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13675425055815c59b598561-35371991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aed087d6567f05498c292ea3b3ef53a496c56b8' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13675425055815c59b598561-35371991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'add_new_theme_label' => 0,
    'context_mode' => 0,
    'add_new_theme_href' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59b5a2ed5_76616277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59b5a2ed5_76616277')) {function content_5815c59b5a2ed5_76616277($_smarty_tpl) {?>
<div class="panel">
    <h3>
        <i class="icon-picture"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['context_mode']->value==Context::MODE_HOST) {?><?php echo smartyTranslate(array('s'=>'(Advanced)'),$_smarty_tpl);?>
<?php }?>
    </h3>
    <p><?php echo smartyTranslate(array('s'=>'Duplicate an existing theme and edit it; or create a new theme from scratch! Recommended for advanced users only.'),$_smarty_tpl);?>
</p>
    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['add_new_theme_href']->value;?>
"><i class="icon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
</a>
</div>
<?php }} ?>
