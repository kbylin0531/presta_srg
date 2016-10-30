<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:10
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16332367225815c59a6fd7e2-10241408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e8aa3d73bbc7953b1cd8fa0e46ce8b23f8adde7' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16332367225815c59a6fd7e2-10241408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59a7042b4_51744888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59a7042b4_51744888')) {function content_5815c59a7042b4_51744888($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
