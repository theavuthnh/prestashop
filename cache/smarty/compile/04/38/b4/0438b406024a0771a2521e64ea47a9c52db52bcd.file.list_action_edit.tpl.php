<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 11:45:19
         compiled from "/var/www/html/ps/blog/admin7004/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117455173953a9025fac3af5-13084207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0438b406024a0771a2521e64ea47a9c52db52bcd' => 
    array (
      0 => '/var/www/html/ps/blog/admin7004/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117455173953a9025fac3af5-13084207',
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
  'unifunc' => 'content_53a9025fadade0_48052255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a9025fadade0_48052255')) {function content_53a9025fadade0_48052255($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>