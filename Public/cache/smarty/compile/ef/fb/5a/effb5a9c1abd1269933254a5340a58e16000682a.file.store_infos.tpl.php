<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:14
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19051882875815c59e057829-57341928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'effb5a9c1abd1269933254a5340a58e16000682a' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/store_infos.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19051882875815c59e057829-57341928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59e0610e4_88940976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59e0610e4_88940976')) {function content_5815c59e0610e4_88940976($_smarty_tpl) {?>


	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value) {
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<p>
		<strong class="dark"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
: </strong> &nbsp;<span><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</span>
	</p>
	<?php } ?>

<?php }} ?>
