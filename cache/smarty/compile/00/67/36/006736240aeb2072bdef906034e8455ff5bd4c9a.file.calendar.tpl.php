<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 04:13:28
         compiled from "/var/www/html/ps/blog/admin/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153516481753a8fae8cbe033-80127723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '006736240aeb2072bdef906034e8455ff5bd4c9a' => 
    array (
      0 => '/var/www/html/ps/blog/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153516481753a8fae8cbe033-80127723',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a8fae8cc7052_55900324',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a8fae8cc7052_55900324')) {function content_53a8fae8cc7052_55900324($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>