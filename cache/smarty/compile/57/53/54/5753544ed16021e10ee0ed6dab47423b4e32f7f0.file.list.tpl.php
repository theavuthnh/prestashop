<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 16:24:19
         compiled from "/var/www/html/ps/blog/admin7004/themes/default/template/controllers/modules/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33675009253a943c3ac1450-25465468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5753544ed16021e10ee0ed6dab47423b4e32f7f0' => 
    array (
      0 => '/var/www/html/ps/blog/admin7004/themes/default/template/controllers/modules/list.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33675009253a943c3ac1450-25465468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modules' => 0,
    'module' => 0,
    'modules_uri' => 0,
    'currentIndex' => 0,
    'token' => 0,
    'option' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a943c423b3b5_06009190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a943c423b3b5_06009190')) {function content_53a943c423b3b5_06009190($_smarty_tpl) {?>

<table id="module-list" class="table">
	<thead>
		<tr>
			<th width="1%">
				<!-- <input type="checkbox" rel="false" class="noborder" id="checkme"> -->
			</th>
			<th colspan="3">
				<div class="pull-left">
					<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/filters.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
				<!-- 
				<div class="pull-right">
					<a class="btn btn-default <?php if (!isset($_GET['select'])){?> active<?php }?>" href="index.php?controller=<?php echo htmlentities($_GET['controller']);?>
&amp;token=<?php echo htmlentities($_GET['token']);?>
" title="<?php echo smartyTranslate(array('s'=>'Normal view'),$_smarty_tpl);?>
">
						<i class="icon-list"></i> 
					</a>					
					<a class="btn btn-default <?php if (isset($_GET['select'])&&$_GET['select']=='favorites'){?> active<?php }?>" href="index.php?controller=<?php echo htmlentities($_GET['controller']);?>
&amp;token=<?php echo htmlentities($_GET['token']);?>
&select=favorites" title="<?php echo smartyTranslate(array('s'=>'Favorites view'),$_smarty_tpl);?>
">
						<i class="icon-star"></i>
					</a>
				</div>
				-->
			</th>
		</tr>
	</thead>
	<?php if (count($_smarty_tpl->tpl_vars['modules']->value)){?>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
			
<?php $_smarty_tpl->_capture_stack[0][] = array("moduleStatutClass", null, null); ob_start(); ?>
<?php if (isset($_smarty_tpl->tpl_vars['module']->value->id)&&$_smarty_tpl->tpl_vars['module']->value->id>0&&$_smarty_tpl->tpl_vars['module']->value->active==1){?>
module_active
<?php }else{ ?>
module_inactive
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<tr>
					<td class="<?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['moduleStatutClass'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
">
						<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->id)&&$_smarty_tpl->tpl_vars['module']->value->id>0)||!isset($_smarty_tpl->tpl_vars['module']->value->type)||$_smarty_tpl->tpl_vars['module']->value->type!='addonsMustHave'){?>
						<input type="checkbox" name="modules" value="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
"
							<?php if (!isset($_smarty_tpl->tpl_vars['module']->value->confirmUninstall)||empty($_smarty_tpl->tpl_vars['module']->value->confirmUninstall)){?>rel="false"<?php }else{ ?>rel="<?php echo addslashes($_smarty_tpl->tpl_vars['module']->value->confirmUninstall);?>
"<?php }?>
							class="noborder" title="<?php echo smartyTranslate(array('s'=>sprintf('Module %1s ',$_smarty_tpl->tpl_vars['module']->value->name)),$_smarty_tpl);?>
" />
						<?php }?>
					</td>
					<td class="fixed-width-xs">
						<img width="32" alt="<?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
" title="<?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
" src="<?php if (isset($_smarty_tpl->tpl_vars['module']->value->image)){?><?php echo $_smarty_tpl->tpl_vars['module']->value->image;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['modules_uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->logo;?>
<?php }?>" />
					</td>
					<td>
						<div id="anchor<?php echo ucfirst($_smarty_tpl->tpl_vars['module']->value->name);?>
" title="<?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
">
							<div class="text-muted">
								<?php echo $_smarty_tpl->tpl_vars['module']->value->categoryName;?>

							</div>
							<div class="module_name">
								<span style="display:none"><?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
</span>
								<?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>

								<small class="text-muted">v<?php echo $_smarty_tpl->tpl_vars['module']->value->version;?>
 - by <?php echo $_smarty_tpl->tpl_vars['module']->value->author;?>
</small>
								<?php if (isset($_smarty_tpl->tpl_vars['module']->value->type)&&$_smarty_tpl->tpl_vars['module']->value->type=='addonsMustHave'){?>
									- <span class="module-badge-popular help-tooltip text-primary" data-title="<?php echo smartyTranslate(array('s'=>"This module is available on PrestaShop Addons"),$_smarty_tpl);?>
"><i class="icon-group"></i> <small><?php echo smartyTranslate(array('s'=>"Popular"),$_smarty_tpl);?>
</small></span>
								<?php }elseif(isset($_smarty_tpl->tpl_vars['module']->value->type)&&$_smarty_tpl->tpl_vars['module']->value->type=='addonsPartner'){?>
									- <span class="module-badge-partner help-tooltip text-warning" data-title="<?php echo smartyTranslate(array('s'=>"Official, PrestaShop certified module. Free, secure and includes updates!"),$_smarty_tpl);?>
"><i class="icon-pushpin"></i> <small><?php echo smartyTranslate(array('s'=>"Official"),$_smarty_tpl);?>
</small></span>
								<?php }elseif(isset($_smarty_tpl->tpl_vars['module']->value->id)&&$_smarty_tpl->tpl_vars['module']->value->id>0){?>
									<?php if (isset($_smarty_tpl->tpl_vars['module']->value->version_addons)&&$_smarty_tpl->tpl_vars['module']->value->version_addons){?>
										<span class="label label-warning"><?php echo smartyTranslate(array('s'=>'Need update'),$_smarty_tpl);?>
</span>
									<?php }?>
								<?php }?>
							</div>
							<p class="module_description">
								<?php if (isset($_smarty_tpl->tpl_vars['module']->value->description)&&$_smarty_tpl->tpl_vars['module']->value->description!=''){?>
									<?php echo $_smarty_tpl->tpl_vars['module']->value->description;?>

								<?php }?>
								<?php if (isset($_smarty_tpl->tpl_vars['module']->value->show_quick_view)&&$_smarty_tpl->tpl_vars['module']->value->show_quick_view){?>
									<br><a href="<?php echo $_smarty_tpl->tpl_vars['currentIndex']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&ajax=1&action=GetModuleQuickView&module=<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" class="fancybox-quick-view"><i class="icon-search"></i> <?php echo smartyTranslate(array('s'=>'Read more'),$_smarty_tpl);?>
</a>
								<?php }?>
							</p>
							<?php if (isset($_smarty_tpl->tpl_vars['module']->value->message)&&(empty($_smarty_tpl->tpl_vars['module']->value->name)!==false)&&(!isset($_smarty_tpl->tpl_vars['module']->value->type)||($_smarty_tpl->tpl_vars['module']->value->type!='addonsMustHave'||$_smarty_tpl->tpl_vars['module']->value->type!=='addonsNative'))){?><div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo $_smarty_tpl->tpl_vars['module']->value->message;?>
</div><?php }?>
						</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
								<?php if (isset($_smarty_tpl->tpl_vars['module']->value->type)&&$_smarty_tpl->tpl_vars['module']->value->type=='addonsMustHave'){?>
									<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['module']->value->addons_buy_url;?>
" target="_blank">
										<i class="icon-shopping-cart"></i> &nbsp;<?php if (isset($_smarty_tpl->tpl_vars['module']->value->id_currency)&&isset($_smarty_tpl->tpl_vars['module']->value->price)){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['module']->value->price,'currency'=>$_smarty_tpl->tpl_vars['module']->value->id_currency),$_smarty_tpl);?>
<?php }?>
									</a>
								<?php }else{ ?>
									<?php if (isset($_smarty_tpl->tpl_vars['module']->value->id)&&$_smarty_tpl->tpl_vars['module']->value->id>0){?>
										<?php if (isset($_smarty_tpl->tpl_vars['module']->value->version_addons)&&$_smarty_tpl->tpl_vars['module']->value->version_addons){?>
											<a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['module']->value->options['update_url'];?>
">
												<i class="icon-refresh"></i> <?php echo smartyTranslate(array('s'=>'Update it!'),$_smarty_tpl);?>

											</a>
										<?php }elseif(!isset($_smarty_tpl->tpl_vars['module']->value->not_on_disk)){?>
											<?php if (count($_smarty_tpl->tpl_vars['module']->value->optionsHtml)>0){?>
												<?php $_smarty_tpl->tpl_vars['option'] = new Smarty_variable($_smarty_tpl->tpl_vars['module']->value->optionsHtml[0], null, 0);?>
												<?php echo $_smarty_tpl->tpl_vars['option']->value;?>

											<?php }?>
										<?php }else{ ?>
											<a class="btn btn-danger" <?php if (!empty($_smarty_tpl->tpl_vars['module']->value->options['uninstall_onclick'])){?>onclick="<?php echo $_smarty_tpl->tpl_vars['module']->value->options['uninstall_onclick'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['module']->value->options['uninstall_url'];?>
">
												<i class="icon-minus-sign-alt"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Uninstall'),$_smarty_tpl);?>

											</a>
										<?php }?>
									<?php }else{ ?>
										<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['module']->value->options['install_url'];?>
">
											<i class="icon-plus-sign-alt"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Install'),$_smarty_tpl);?>

										</a>
									<?php }?>

									<?php if (!isset($_smarty_tpl->tpl_vars['module']->value->not_on_disk)&&isset($_smarty_tpl->tpl_vars['module']->value->id)){?>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
											<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['module']->value->optionsHtml; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
												<?php if ($_smarty_tpl->tpl_vars['key']->value!=0){?>
													<?php if (strpos($_smarty_tpl->tpl_vars['option']->value,'title="divider"')!==false){?>
														<li class="divider"></li>
													<?php }else{ ?>
														<li><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</li>
													<?php }?>
												<?php }?>
											<?php } ?>
										</ul>
									<?php }elseif(!isset($_smarty_tpl->tpl_vars['module']->value->not_on_disk)&&!isset($_smarty_tpl->tpl_vars['module']->value->id)){?>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
											<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['module']->value->optionsHtml; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
												<?php if ($_smarty_tpl->tpl_vars['key']->value!=0){?>
													<?php if (strpos($_smarty_tpl->tpl_vars['option']->value,'title="divider"')!==false){?>
														<li class="divider"></li>
													<?php }else{ ?>
														<li><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</li>
													<?php }?>
												<?php }?>
											<?php } ?>
										</ul>
									<?php }elseif(isset($_smarty_tpl->tpl_vars['module']->value->not_on_disk)){?>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
											<?php if (isset($_smarty_tpl->tpl_vars['module']->value->preferences)&&isset($_smarty_tpl->tpl_vars['module']->value->preferences['favorite'])&&$_smarty_tpl->tpl_vars['module']->value->preferences['favorite']==1){?>
												<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" data-value="0" href="#">
														<i class="icon-star"></i> <?php echo smartyTranslate(array('s'=>'Remove from Favorites'),$_smarty_tpl);?>

													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" data-value="1" href="#" style="display: none;">
														<i class="icon-star"></i> <?php echo smartyTranslate(array('s'=>'Mark as Favorite'),$_smarty_tpl);?>

													</a>
												</li>
											<?php }else{ ?>
												<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> <?php echo smartyTranslate(array('s'=>'Remove from Favorites'),$_smarty_tpl);?>

													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" data-value="1" href="#">
														<i class="icon-star"></i> <?php echo smartyTranslate(array('s'=>'Mark as Favorite'),$_smarty_tpl);?>

													</a>
												</li>
											<?php }?>
										</ul>
									<?php }else{ ?>
										&nbsp;
									<?php }?>
								<?php }?>
							</div>
						</div>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<div class="btn-group pull-left">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			<?php echo smartyTranslate(array('s'=>'bulk actions'),$_smarty_tpl);?>

			 <span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li>
			 	<a href="#" onclick="modules_management('install')">
					<i class="icon-plus-sign-alt"></i>&nbsp;
					<?php echo smartyTranslate(array('s'=>'Install the selection'),$_smarty_tpl);?>

				</a>
			</li>
			<li>
				<a href="#" onclick="modules_management('uninstall')">
					<i class="icon-minus-sign-alt"></i>&nbsp;
					<?php echo smartyTranslate(array('s'=>'Uninstall the selection'),$_smarty_tpl);?>

				</a>
			</li>
		</ul>
	</div>
	<?php }else{ ?>
		<tbody>
			<tr>
				<td colspan="4" class="text-center"><i class="icon-warning-sign"></i> <?php echo smartyTranslate(array('s'=>'No modules available in this section.'),$_smarty_tpl);?>
</td>
			</tr>
		</tbody>
	</table>
	<?php }?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script><?php }} ?>