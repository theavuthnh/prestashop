<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 16:29:57
         compiled from "/var/www/html/ps/blog/admin7004/themes/default/template/controllers/modules/configuration_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62820894753a94515e6c9d7-00694346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '990b7b5f612422d995ffa0b800fdef249cd63c68' => 
    array (
      0 => '/var/www/html/ps/blog/admin7004/themes/default/template/controllers/modules/configuration_bar.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62820894753a94515e6c9d7-00694346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_languages' => 0,
    'trad_link' => 0,
    'language' => 0,
    'module_name' => 0,
    'display_multishop_checkbox' => 0,
    'module' => 0,
    'current_url' => 0,
    'shop_context' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a94515f2d8a6_87485139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a94515f2d8a6_87485139')) {function content_53a94515f2d8a6_87485139($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/var/www/html/ps/blog/tools/smarty/plugins/modifier.regex_replace.php';
?>
<div class="bootstrap panel">
	<h3><i class="icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'Configuration'),$_smarty_tpl);?>
</h3>
	<div class="input-group">
		<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
			<i class="icon-flag"></i>
			<?php echo smartyTranslate(array('s'=>'Manage translations'),$_smarty_tpl);?>

			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['trad_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
#<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
			<?php } ?>
		</ul>
	</div>
	<?php $_smarty_tpl->tpl_vars['module_name'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['module_name']->value, ENT_QUOTES, 'UTF-8', true), null, 0);?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><?php echo (('/&module_name=').($_smarty_tpl->tpl_vars['module_name']->value)).('/');?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if (isset($_smarty_tpl->tpl_vars['display_multishop_checkbox']->value)&&$_smarty_tpl->tpl_vars['display_multishop_checkbox']->value){?>
	<input type="checkbox" name="activateModule" value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value->isEnabledForShopContext()){?> checked="checked"<?php }?> 
		onclick="location.href = '<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['current_url']->value,Smarty::$_smarty_vars['capture']['default'],'');?>
&module_name=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
&enable=' + (($(this).attr('checked')) ? 1 : 0);" />
	<?php echo smartyTranslate(array('s'=>'Activate module for'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>

	<?php }?>
</div><?php }} ?>