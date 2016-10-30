<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 13:48:02
         compiled from "/home/asus/workspace/sharin7/Public/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3694168465815ec02755125-26111274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9f589fdbaa8e37006d063acf0f80919e4ed03ec' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3694168465815ec02755125-26111274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815ec0275cb27_85775851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815ec0275cb27_85775851')) {function content_5815ec0275cb27_85775851($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
