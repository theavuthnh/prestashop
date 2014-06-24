<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 04:13:16
         compiled from "/var/www/html/ps/blog/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137861427953a8fadc208551-80590308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '028e9d64c8bf538f558fa9d3218a9da2e28d243f' => 
    array (
      0 => '/var/www/html/ps/blog/admin/themes/default/template/content.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137861427953a8fadc208551-80590308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a8fadc22a232_11080131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a8fadc22a232_11080131')) {function content_53a8fadc22a232_11080131($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>