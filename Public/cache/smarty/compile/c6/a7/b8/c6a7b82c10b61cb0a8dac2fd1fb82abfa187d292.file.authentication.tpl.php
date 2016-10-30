<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:08
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/referralprogram/views/templates/hook/authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7464875705815c5989b2093-91654531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6a7b82c10b61cb0a8dac2fd1fb82abfa187d292' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/referralprogram/views/templates/hook/authentication.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7464875705815c5989b2093-91654531',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c5989bf314_74415518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c5989bf314_74415518')) {function content_5815c5989bf314_74415518($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<fieldset class="account_creation">
	<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>
	<p class="form-group">
		<label for="referralprogram"><?php echo smartyTranslate(array('s'=>'E-mail address of your sponsor','mod'=>'referralprogram'),$_smarty_tpl);?>
</label>
		<input class="form-control" type="text" size="52" maxlength="128" id="referralprogram" name="referralprogram" value="<?php if (isset($_POST['referralprogram'])) {?><?php echo htmlspecialchars($_POST['referralprogram'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
	</p>
</fieldset>
<!-- END : MODULE ReferralProgram --><?php }} ?>
