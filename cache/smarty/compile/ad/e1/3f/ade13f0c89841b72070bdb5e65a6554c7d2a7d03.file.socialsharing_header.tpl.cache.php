<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 15:25:36
         compiled from "/var/www/html/ps/blog/modules/socialsharing/views/templates/hook/socialsharing_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16732225653a93600158558-15805139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ade13f0c89841b72070bdb5e65a6554c7d2a7d03' => 
    array (
      0 => '/var/www/html/ps/blog/modules/socialsharing/views/templates/hook/socialsharing_header.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16732225653a93600158558-15805139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_rewrite' => 0,
    'cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a936001b7497_00205455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a936001b7497_00205455')) {function content_53a936001b7497_00205455($_smarty_tpl) {?>
<meta property="og:title" content="" />
<meta property="og:type" content="product" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<meta property="og:email" content="" />
<meta property="og:phone_number" content="" />
<meta property="og:street-address" content="" />
<meta property="og:locality" content="" />
<meta property="og:country-name" content="" />
<meta property="og:postal-code" content="" />
<?php if (isset($_smarty_tpl->tpl_vars['link_rewrite']->value)&&isset($_smarty_tpl->tpl_vars['cover']->value)&&isset($_smarty_tpl->tpl_vars['cover']->value['id_image'])){?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['link_rewrite']->value,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
" />
<?php }?><?php }} ?>