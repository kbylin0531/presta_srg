<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:09
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/homeslider/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12199014135815c5993f53f4-94080630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f48a36ed724132976fa061177c97b6c480828a77' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/homeslider/header.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12199014135815c5993f53f4-94080630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c599407300_65123492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c599407300_65123492')) {function content_5815c599407300_65123492($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)) {?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_loop'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['loop'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_width'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['width'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_speed'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['speed'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_pause'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['pause'])),$_smarty_tpl);?>

<?php }?><?php }} ?>
