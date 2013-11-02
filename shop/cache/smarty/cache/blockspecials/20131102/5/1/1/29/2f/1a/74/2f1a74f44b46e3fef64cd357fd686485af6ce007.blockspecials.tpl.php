<?php /*%%SmartyHeaderCode:16029111775274bf5bc71863-57173751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f1a74f44b46e3fef64cd357fd686485af6ce007' => 
    array (
      0 => '/Users/Udi/Sites/PS156/shop/themes/default/modules/blockspecials/blockspecials.tpl',
      1 => 1381141710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16029111775274bf5bc71863-57173751',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'mediumSize' => 0,
    'PS_CATALOG_MODE' => 0,
    'specific_prices' => 0,
    'priceDisplay' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5274bf5c0865f1_56138633',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274bf5c0865f1_56138633')) {function content_5274bf5c0865f1_56138633($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block products_block exclusive blockspecials">
	<p class="title_block"><a href="http://localhost/shop/index.php?controller=prices-drop" title="Specials">Specials</a></p>
	<div class="block_content">

		<ul class="products clearfix">
			<li class="product_image">
				<a href="http://localhost/shop/index.php?id_product=1&amp;controller=product&amp;id_lang=1"><img src="http://localhost/shop/img/p/1/5/15-medium_default.jpg" alt="" height="58" width="58" title="iPod Nano" /></a>
			</li>
			<li>
																												<span class="reduction"><span>-5%</span></span>
															
					<p class="s_title_block"><a href="http://localhost/shop/index.php?id_product=1&amp;controller=product&amp;id_lang=1" title="iPod Nano">iPod Nano</a></p>
									<span class="price-discount">196,34 ₪‎</span>
					<span class="price">186,52 ₪‎</span>
							</li>
		</ul>
		<p>
			<a href="http://localhost/shop/index.php?controller=prices-drop" title="All specials">&raquo; All specials</a>
		</p>
	</div>
</div>
<!-- /MODULE Block specials --><?php }} ?>