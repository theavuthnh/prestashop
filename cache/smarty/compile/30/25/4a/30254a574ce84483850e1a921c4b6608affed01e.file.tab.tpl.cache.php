<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 11:47:46
         compiled from "/var/www/html/ps/blog/themes/blog-post/modules/blockbestsellers/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58213536753a902f29d3494-32472821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30254a574ce84483850e1a921c4b6608affed01e' => 
    array (
      0 => '/var/www/html/ps/blog/themes/blog-post/modules/blockbestsellers/tab.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58213536753a902f29d3494-32472821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a902f2a03a98_26269169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a902f2a03a98_26269169')) {function content_53a902f2a03a98_26269169($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/var/www/html/ps/blog/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></li><?php }} ?>