<?php /*%%SmartyHeaderCode:4447830145274bf5adfbf42-39696645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acd71c1682a19c8afcccc2dc7367f929774933ca' => 
    array (
      0 => '/Users/Udi/Sites/PS156/shop/themes/default/modules/blocksupplier/blocksupplier.tpl',
      1 => 1381141710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4447830145274bf5adfbf42-39696645',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5274bf5b1044e5_41198904',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274bf5b1044e5_41198904')) {function content_5274bf5b1044e5_41198904($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://localhost/shop/index.php?controller=supplier" title="Suppliers">Suppliers</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://localhost/shop/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1" title="About AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://localhost/shop/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1" title="About Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/shop/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">All suppliers</option>
									<option value="http://localhost/shop/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1">AppleStore</option>
									<option value="http://localhost/shop/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>