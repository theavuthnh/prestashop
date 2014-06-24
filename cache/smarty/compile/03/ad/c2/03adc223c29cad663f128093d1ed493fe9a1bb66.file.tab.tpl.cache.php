<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 11:47:46
         compiled from "/var/www/html/ps/blog/themes/blog-post/modules/homefeatured/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131134230853a902f2988905-09524328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03adc223c29cad663f128093d1ed493fe9a1bb66' => 
    array (
      0 => '/var/www/html/ps/blog/themes/blog-post/modules/homefeatured/tab.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131134230853a902f2988905-09524328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a902f29a8bf2_88327705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a902f29a8bf2_88327705')) {function content_53a902f29a8bf2_88327705($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/var/www/html/ps/blog/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>