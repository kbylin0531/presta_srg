<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:11
         compiled from "/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/addons_catalog/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21130036145815c59b811a64-66150870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d0ce25430628b35210d260df4c0cb19caa5d904' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/admin/themes/default/template/controllers/addons_catalog/content.tpl',
      1 => 1476936584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21130036145815c59b811a64-66150870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59b81d132_25647241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59b81d132_25647241')) {function content_5815c59b81d132_25647241($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
