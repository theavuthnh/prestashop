<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 04:13:32
         compiled from "/var/www/html/ps/blog/admin/themes/default/template/helpers/list/list_action_transferstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27741662653a8faec6bc8c7-68405293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b05afe772b39cf50f37f8d6c961970ff7046109e' => 
    array (
      0 => '/var/www/html/ps/blog/admin/themes/default/template/helpers/list/list_action_transferstock.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27741662653a8faec6bc8c7-68405293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a8faec6e0718_71030463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a8faec6e0718_71030463')) {function content_53a8faec6e0718_71030463($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-exchange"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>