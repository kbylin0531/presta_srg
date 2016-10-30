<?php /* Smarty version Smarty-3.1.19, created on 2016-10-30 10:04:09
         compiled from "/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/blockrss/blockrss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16180971215815c599b1f3f0-09410908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f94b8b4337853d949de9c4365d3f0018cced384' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/blockrss/blockrss.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16180971215815c599b1f3f0-09410908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'rss_links' => 0,
    'rss_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815c599b2e370_75667265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815c599b2e370_75667265')) {function content_5815c599b2e370_75667265($_smarty_tpl) {?>

<!-- Block RSS module-->
<div id="rss_block_left" class="block">
	<p class="title_block"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</p>
	<div class="block_content">
		<?php if ($_smarty_tpl->tpl_vars['rss_links']->value) {?>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['rss_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rss_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rss_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rss_link']->key => $_smarty_tpl->tpl_vars['rss_link']->value) {
$_smarty_tpl->tpl_vars['rss_link']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['rss_link']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['rss_link']->value['title'];?>
</a></li>
				<?php } ?>
			</ul>
		<?php } else { ?>
			<p><?php echo smartyTranslate(array('s'=>'No RSS feed added','mod'=>'blockrss'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>
</div>
<!-- /Block RSS module-->
<?php }} ?>
