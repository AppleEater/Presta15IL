<?php /*%%SmartyHeaderCode:19866704635274bf5a88d885-83202005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f31433bb10ddd0963b42aeb0093ebd437b0f535' => 
    array (
      0 => '/Users/Udi/Sites/PS156/shop/themes/default/modules/blockcategories/blockcategories.tpl',
      1 => 1381141710,
      2 => 'file',
    ),
    '4ec17fab8b45b75a14a4eade1c163f35db4e0347' => 
    array (
      0 => '/Users/Udi/Sites/PS156/shop/themes/default/modules/blockcategories/category-tree-branch.tpl',
      1 => 1381141710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19866704635274bf5a88d885-83202005',
  'variables' => 
  array (
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5274bf5ab292d3_04462737',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274bf5ab292d3_04462737')) {function content_5274bf5ab292d3_04462737($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Categories</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost/shop/index.php?id_category=3&amp;controller=category&amp;id_lang=1" 		title="Now that you can buy movies from the iTunes Store and sync them to your iPod, the whole world is your theater.">iPods</a>
	</li>

												
<li >
	<a href="http://localhost/shop/index.php?id_category=4&amp;controller=category&amp;id_lang=1" 		title="Wonderful accessories for your iPod">Accessories</a>
	</li>

												
<li class="last">
	<a href="http://localhost/shop/index.php?id_category=5&amp;controller=category&amp;id_lang=1" 		title="The latest Intel processor, a bigger hard drive, plenty of memory, and even more new features all fit inside just one liberating inch. The new Mac laptops have the performance, power, and connectivity of a desktop computer. Without the desk part.">Laptops</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>