<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 11:45:02
         compiled from "/var/www/html/ps/blog/admin7004/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56884826853a9024e041e88-59391072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b30cfc9cc0756e598b4f48fd12fe5785eb043455' => 
    array (
      0 => '/var/www/html/ps/blog/admin7004/themes/default/template/content.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56884826853a9024e041e88-59391072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a9024e067082_84849862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a9024e067082_84849862')) {function content_53a9024e067082_84849862($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>