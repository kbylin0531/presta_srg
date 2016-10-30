<?php /*%%SmartyHeaderCode:5047919735815e99f67e593-81014242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcb492d38df7cf880289ad362e7695e14abb84e8' => 
    array (
      0 => '/home/asus/workspace/sharin7/Public/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1476936586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5047919735815e99f67e593-81014242',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5815ef89291160_12088070',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5815ef89291160_12088070')) {function content_5815ef89291160_12088070($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost:8090/sharin7/Public/en/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
