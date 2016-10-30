<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:08
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/referralprogram/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20039221245815c5989c28e7-88517057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1d738007639a83a6546d033454b98d915a776f1' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/referralprogram/views/templates/hook/my-account.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20039221245815c5989c28e7-88517057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c5989cdc26_50643468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c5989cdc26_50643468')) {function content_5815c5989cdc26_50643468($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<li class="referralprogram">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-cogs"></i><span><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE ReferralProgram --><?php }} ?>
