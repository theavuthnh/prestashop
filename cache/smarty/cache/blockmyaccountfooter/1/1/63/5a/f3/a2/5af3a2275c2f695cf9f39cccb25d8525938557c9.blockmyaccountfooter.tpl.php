<?php /*%%SmartyHeaderCode:40701759153a902f3f345b8-78336167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5af3a2275c2f695cf9f39cccb25d8525938557c9' => 
    array (
      0 => '/var/www/html/ps/blog/themes/blog-post/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40701759153a902f3f345b8-78336167',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a902f41327f3_05454190',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a902f41327f3_05454190')) {function content_53a902f41327f3_05454190($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost/ps/blog/my-account" title="Manage my customer account" rel="nofollow">My account</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost/ps/blog/order-history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://localhost/ps/blog/order-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://localhost/ps/blog/addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://localhost/ps/blog/identity" title="Manage my personal information" rel="nofollow">My personal info</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>