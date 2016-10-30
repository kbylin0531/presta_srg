<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:09
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/cheque/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9780975305815c599eb6448-47995905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c1afdae09c7f7d31c6b5ea5cfb24c0c0056301' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/cheque/views/templates/hook/payment.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9780975305815c599eb6448-47995905',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c599ec0e82_66152764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c599ec0e82_66152764')) {function content_5815c599ec0e82_66152764($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cheque" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
                <?php echo smartyTranslate(array('s'=>'Pay by check','mod'=>'cheque'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'cheque'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
