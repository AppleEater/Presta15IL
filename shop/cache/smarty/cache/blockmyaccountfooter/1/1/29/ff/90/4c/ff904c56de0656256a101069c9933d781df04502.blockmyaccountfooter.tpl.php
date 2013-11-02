<?php /*%%SmartyHeaderCode:12138727835274bf5dded969-60453970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff904c56de0656256a101069c9933d781df04502' => 
    array (
      0 => '/Users/Udi/Sites/PS156/shop/themes/default/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1381141710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12138727835274bf5dded969-60453970',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5274bf5e1901b1_11003877',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274bf5e1901b1_11003877')) {function content_5274bf5e1901b1_11003877($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://localhost/shop/index.php?controller=my-account" title="Manage your customer account" rel="nofollow">My account</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://localhost/shop/index.php?controller=history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://localhost/shop/index.php?controller=order-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://localhost/shop/index.php?controller=addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://localhost/shop/index.php?controller=identity" title="Manage your personal information" rel="nofollow">My personal info</a></li>
						
		</ul>
		<p class="logout"><a href="http://localhost/shop/index.php?mylogout" title="Sign out" rel="nofollow">Sign out</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>