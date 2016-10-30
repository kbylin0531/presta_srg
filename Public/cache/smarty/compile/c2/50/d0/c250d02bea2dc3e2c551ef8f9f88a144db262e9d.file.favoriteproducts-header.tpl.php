<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:09
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1796444105815c599d08233-60075143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c250d02bea2dc3e2c551ef8f9f88a144db262e9d' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1796444105815c599d08233-60075143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c599d21744_09612824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c599d21744_09612824')) {function content_5815c599d21744_09612824($_smarty_tpl) {?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('favorite_products_url_add'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),Tools::usingSecureMode()))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('favorite_products_url_remove'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),Tools::usingSecureMode()))),$_smarty_tpl);?>
<?php if (isset($_GET['id_product'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('favorite_products_id_product'=>intval($_GET['id_product'])),$_smarty_tpl);?>
<?php }?><?php }} ?>
