<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:08
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/cashondelivery/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16885124445815c5988d3531-07110628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d39c181007317c3a98a6b28f02f78277f4e324f' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/cashondelivery/views/templates/hook/payment.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16885124445815c5988d3531-07110628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c5988e5bf1_76050157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c5988e5bf1_76050157')) {function content_5815c5988e5bf1_76050157($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cash" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cashondelivery','validation',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>
" rel="nofollow">
            	<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>

            	<span>(<?php echo smartyTranslate(array('s'=>'You pay for the merchandise upon delivery','mod'=>'cashondelivery'),$_smarty_tpl);?>
)</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
