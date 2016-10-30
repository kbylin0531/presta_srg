<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:09
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4510984615815c599be5b32-96588862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5696160c3120fc2a81cee2106da2f698f4b52a0e' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4510984615815c599be5b32-96588862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c599bf1215_32213344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c599bf1215_32213344')) {function content_5815c599bf1215_32213344($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<li class="loyalty">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary'),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-flag"></i><span><?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE Loyalty --><?php }} ?>
