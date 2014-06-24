<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 04:13:20
         compiled from "/var/www/html/ps/blog/admin/themes/default/template/controllers/customer_threads/helpers/view/timeline_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209366227453a8fae05fd503-38880607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63207489a012174b91274488394499238bb550c7' => 
    array (
      0 => '/var/www/html/ps/blog/admin/themes/default/template/controllers/customer_threads/helpers/view/timeline_item.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209366227453a8fae05fd503-38880607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'timeline_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a8fae068afe6_80030384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a8fae068afe6_80030384')) {function content_53a8fae068afe6_80030384($_smarty_tpl) {?>

<article class="timeline-item <?php if (isset($_smarty_tpl->tpl_vars['timeline_item']->value['alt'])){?> alt <?php }?>">
	<div class="timeline-caption">
		<div class="timeline-panel arrow arrow-<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['arrow'];?>
">
			<span class="timeline-icon" style="background-color:<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['background_color'];?>
">
				<i class="<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['icon'];?>
"></i>
			</span>
			<span class="timeline-date"><i class="icon-calendar"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['timeline_item']->value['date'],'full'=>0),$_smarty_tpl);?>
 - <i class="icon-time"></i> <?php echo substr($_smarty_tpl->tpl_vars['timeline_item']->value['date'],11,5);?>
</span>
			<?php if (isset($_smarty_tpl->tpl_vars['timeline_item']->value['id_order'])){?><a class="badge" href="#"><?php echo smartyTranslate(array('s'=>"Order #"),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['id_order'];?>
</a><br><?php }?>
			<span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['timeline_item']->value['content'],220);?>
</span>
			<?php if (isset($_smarty_tpl->tpl_vars['timeline_item']->value['see_more_link'])){?>
				<br><br><a href="<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['see_more_link'];?>
" target="_blank" class="btn btn-default"><?php echo smartyTranslate(array('s'=>"See more"),$_smarty_tpl);?>
</a>
			<?php }?>
		</div>
	</div>
</article><?php }} ?>