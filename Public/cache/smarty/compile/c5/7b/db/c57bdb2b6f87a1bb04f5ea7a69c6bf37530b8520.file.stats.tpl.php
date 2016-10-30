<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:10
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/stats/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4048758305815c59acf3d93-17155310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c57bdb2b6f87a1bb04f5ea7a69c6bf37530b8520' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/stats/stats.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4048758305815c59acf3d93-17155310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59ad017a8_92041551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59ad017a8_92041551')) {function content_5815c59ad017a8_92041551($_smarty_tpl) {?>

		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.'),$_smarty_tpl);?>
</h3>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
