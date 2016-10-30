<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:11
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18190472735815c59b546480-18620890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22e872776276081e3bfd6e640c6ea671847e2bc5' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18190472735815c59b546480-18620890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59b54a076_06396138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59b54a076_06396138')) {function content_5815c59b54a076_06396138($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
