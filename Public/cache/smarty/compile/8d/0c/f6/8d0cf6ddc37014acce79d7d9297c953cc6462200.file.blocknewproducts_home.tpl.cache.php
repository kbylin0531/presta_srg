<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 13:48:02
         compiled from "/home/asus/workspace/sharin7/Public/modules/blocknewproducts/views/templates/hook/blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19990861715815ec02529788-99530548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d0cf6ddc37014acce79d7d9297c953cc6462200' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/modules/blocknewproducts/views/templates/hook/blocknewproducts_home.tpl',
      1 => 1476936588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19990861715815ec02529788-99530548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815ec02534743_79090503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815ec02534743_79090503')) {function content_5815ec02534743_79090503($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
