<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:09
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11950730165815c599dbef36-91917832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65ccfbe90c66dc2cddfdb24eefc43f36c7c19fb7' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11950730165815c599dbef36-91917832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c599dc9f87_32707314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c599dc9f87_32707314')) {function content_5815c599dc9f87_32707314($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>
