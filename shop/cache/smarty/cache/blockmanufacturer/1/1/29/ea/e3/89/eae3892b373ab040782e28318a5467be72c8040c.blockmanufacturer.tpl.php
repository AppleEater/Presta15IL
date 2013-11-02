<?php /*%%SmartyHeaderCode:100046305274bf5ab6a384-03934227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eae3892b373ab040782e28318a5467be72c8040c' => 
    array (
      0 => '/Users/Udi/Sites/PS156/shop/themes/default/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1381141710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100046305274bf5ab6a384-03934227',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5274bf5ada2e40_99444357',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274bf5ada2e40_99444357')) {function content_5274bf5ada2e40_99444357($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block"><a href="http://localhost/shop/index.php?controller=manufacturer" title="Manufacturers">Manufacturers</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://localhost/shop/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1" title="Learn more about Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://localhost/shop/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1" title="Learn more about Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/shop/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">All manufacturers</option>
									<option value="http://localhost/shop/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1">Apple Computer, Inc</option>
									<option value="http://localhost/shop/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>