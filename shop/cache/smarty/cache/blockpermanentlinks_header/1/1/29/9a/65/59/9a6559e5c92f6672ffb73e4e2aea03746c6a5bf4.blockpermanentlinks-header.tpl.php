<?php /*%%SmartyHeaderCode:4516947515274bf59871ba9-06406539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a6559e5c92f6672ffb73e4e2aea03746c6a5bf4' => 
    array (
      0 => '/Users/Udi/Sites/PS156/shop/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1381141710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4516947515274bf59871ba9-06406539',
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5274bf59952866_44454540',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274bf59952866_44454540')) {function content_5274bf59952866_44454540($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://localhost/shop/index.php?controller=contact" title="Contact">Contact</a></li>
	<li id="header_link_sitemap"><a href="http://localhost/shop/index.php?controller=sitemap" title="Sitemap">Sitemap</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://localhost/shop/index.php', 'ShopPS156', 'bookmark');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>