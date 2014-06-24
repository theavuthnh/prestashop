<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 11:47:46
         compiled from "/var/www/html/ps/blog/themes/blog-post/modules/blocknewproducts/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156154343553a902f29293d2-09636507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d6c4ab37903098a4ae8a9276187f1155c5322a5' => 
    array (
      0 => '/var/www/html/ps/blog/themes/blog-post/modules/blocknewproducts/tab.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156154343553a902f29293d2-09636507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a902f294bd59_97137508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a902f294bd59_97137508')) {function content_53a902f294bd59_97137508($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/var/www/html/ps/blog/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#blocknewproducts" class="blocknewproducts"><?php echo smartyTranslate(array('s'=>'New arrivals','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></li><?php }} ?>