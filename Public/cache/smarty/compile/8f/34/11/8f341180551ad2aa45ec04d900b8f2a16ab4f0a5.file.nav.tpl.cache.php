<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 13:37:52
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1097146615815e9a0609419-62247941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f341180551ad2aa45ec04d900b8f2a16ab4f0a5' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/blockcontact/nav.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1097146615815e9a0609419-62247941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815e9a0619ba6_38029778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815e9a0619ba6_38029778')) {function content_5815e9a0619ba6_38029778($_smarty_tpl) {?>
<div id="contact-link" <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone<?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> is_logged<?php }?>">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?>
<?php }} ?>
