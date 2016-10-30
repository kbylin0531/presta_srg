<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:08
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19945491675815c598753cf2-13698038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8644efe878ef2724fb3c82d1f398faa37c56b12b' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19945491675815c598753cf2-13698038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c598766bb8_56374684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c598766bb8_56374684')) {function content_5815c598766bb8_56374684($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
