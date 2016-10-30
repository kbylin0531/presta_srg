<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:08
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3031003385815c5985d8952-67735191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c07ca3cb16d2ff83203ed438252f73aeec01569d' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3031003385815c5985d8952-67735191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c5985dfdc6_33813820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c5985dfdc6_33813820')) {function content_5815c5985dfdc6_33813820($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
