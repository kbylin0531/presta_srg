<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:13
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/orders/_select_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4275088255815c59d492960-67883294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cedc10c36567efbd4c32f20d15207e0fd7287cbe' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/orders/_select_payment.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4275088255815c59d492960-67883294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_CATALOG_MODE' => 0,
    'payment_modules' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59d4a9a34_18995105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59d4a9a34_18995105')) {function content_5815c59d4a9a34_18995105($_smarty_tpl) {?>
<select name="payment_module_name" id="payment_module_name">
  <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" <?php if (isset($_POST['payment_module_name'])&&$_smarty_tpl->tpl_vars['module']->value->name==$_POST['payment_module_name']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
</option>
    <?php } ?>
  <?php } else { ?>
      <option value="<?php echo smartyTranslate(array('s'=>'Back office order'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Back office order'),$_smarty_tpl);?>
</option>
  <?php }?>
</select>
<?php }} ?>
