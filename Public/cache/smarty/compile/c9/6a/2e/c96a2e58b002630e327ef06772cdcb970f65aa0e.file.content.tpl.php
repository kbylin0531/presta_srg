<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:13
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/not_found/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9276102625815c59d680189-24448736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c96a2e58b002630e327ef06772cdcb970f65aa0e' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/not_found/content.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9276102625815c59d680189-24448736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59d68d6c7_94176350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59d68d6c7_94176350')) {function content_5815c59d68d6c7_94176350($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['controller']->value)&&!empty($_smarty_tpl->tpl_vars['controller']->value)&&$_smarty_tpl->tpl_vars['controller']->value!='adminnotfound') {?>
	<h1><?php echo smartyTranslate(array('s'=>'The controller %s is missing or invalid.','sprintf'=>$_smarty_tpl->tpl_vars['controller']->value),$_smarty_tpl);?>
</h1>
<?php }?>
<a class="btn btn-default" href="javascript:window.history.back();">
	<i class="icon-arrow-left"></i>
	<?php echo smartyTranslate(array('s'=>'Back to the previous page'),$_smarty_tpl);?>

</a>
<a class="btn btn-default" href="index.php">
	<i class="icon-dashboard"></i>
	<?php echo smartyTranslate(array('s'=>'Go to the dashboard'),$_smarty_tpl);?>

</a><?php }} ?>
