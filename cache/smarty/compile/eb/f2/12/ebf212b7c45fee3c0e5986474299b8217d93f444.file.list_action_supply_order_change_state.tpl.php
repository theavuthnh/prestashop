<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 04:13:32
         compiled from "/var/www/html/ps/blog/admin/themes/default/template/helpers/list/list_action_supply_order_change_state.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48270547653a8faecbdfff7-52673662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebf212b7c45fee3c0e5986474299b8217d93f444' => 
    array (
      0 => '/var/www/html/ps/blog/admin/themes/default/template/helpers/list/list_action_supply_order_change_state.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48270547653a8faecbdfff7-52673662',
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
  'unifunc' => 'content_53a8faecc045b7_64228980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a8faecc045b7_64228980')) {function content_53a8faecc045b7_64228980($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="">
	<i class="icon-time"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>