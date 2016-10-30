<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:14
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19780810255815c59e0319b7-06263344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5b814ea71c673df57aab37e1c4e58e30dba2f4b' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/category-count.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19780810255815c59e0319b7-06263344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c59e0510a1_11463668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c59e0510a1_11463668')) {function content_5815c59e0510a1_11463668($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
