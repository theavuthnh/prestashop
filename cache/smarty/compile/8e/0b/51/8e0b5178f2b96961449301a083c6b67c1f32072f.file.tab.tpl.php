<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 04:13:10
         compiled from "/var/www/html/ps/blog/themes/default-bootstrap/modules/blocknewproducts/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15655798953a8fad6592a91-63933998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e0b5178f2b96961449301a083c6b67c1f32072f' => 
    array (
      0 => '/var/www/html/ps/blog/themes/default-bootstrap/modules/blocknewproducts/tab.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15655798953a8fad6592a91-63933998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a8fad65b2853_58527865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a8fad65b2853_58527865')) {function content_53a8fad65b2853_58527865($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/var/www/html/ps/blog/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#blocknewproducts" class="blocknewproducts"><?php echo smartyTranslate(array('s'=>'New arrivals','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></li><?php }} ?>