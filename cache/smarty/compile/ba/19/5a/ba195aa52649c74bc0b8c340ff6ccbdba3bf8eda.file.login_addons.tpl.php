<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 16:24:19
         compiled from "/var/www/html/ps/blog/admin7004/themes/default/template/controllers/modules/login_addons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147213839753a943c39f5de5-72186954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba195aa52649c74bc0b8c340ff6ccbdba3bf8eda' => 
    array (
      0 => '/var/www/html/ps/blog/admin7004/themes/default/template/controllers/modules/login_addons.tpl',
      1 => 1397128152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147213839753a943c39f5de5-72186954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'add_permission' => 0,
    'logged_on_addons' => 0,
    'username_addons' => 0,
    'check_url_fopen' => 0,
    'check_openssl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a943c3aab8d5_62169873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a943c3aab8d5_62169873')) {function content_53a943c3aab8d5_62169873($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['add_permission']->value=='1'){?>
	<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['logged_on_addons']->value)){?>
			<!--start addons login-->
			<div class="panel-heading">
				<i class="icon-user"></i>
				<?php echo smartyTranslate(array('s'=>'You are logged into %s','sprintf'=>'<a target="_blank" href="http://addons.prestashop.com/?utm_source=backoffice_modules">PrestaShop Addons</a>'),$_smarty_tpl);?>

			</div>
			<div id="addons_login_div">	
				<p><?php echo smartyTranslate(array('s'=>'Welcome'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['username_addons']->value;?>
</p>
				<a class="btn btn-default" href="#" id="addons_logout_button">
					<i class="icon-signout"></i> <?php echo smartyTranslate(array('s'=>'Sign out from PrestaShop Addons.'),$_smarty_tpl);?>

				</a>
			</div>
			<!--end addons login-->
	<?php }else{ ?>
		<?php if ($_smarty_tpl->tpl_vars['check_url_fopen']->value=='ko'||$_smarty_tpl->tpl_vars['check_openssl']->value=='ko'){?>
			<div class="alert alert-warning">
				<?php echo smartyTranslate(array('s'=>'If you want to be able to fully use the AdminModules panel and have free modules available, you should enable the following configuration on your server:'),$_smarty_tpl);?>

				<br />
				<?php if ($_smarty_tpl->tpl_vars['check_url_fopen']->value=='ko'){?>- <?php echo smartyTranslate(array('s'=>'Enable allow_url_fopen'),$_smarty_tpl);?>
<br /><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['check_openssl']->value=='ko'){?>- <?php echo smartyTranslate(array('s'=>'Enable php openSSL extension'),$_smarty_tpl);?>
<br /><?php }?>
			</div>
		<?php }else{ ?>
			<!--start addons login-->
			<div class="panel-heading">
				<i class="icon-puzzle-piece"></i>
				<a target="_blank" href="http://addons.prestashop.com/?utm_source=backoffice_modules">PrestaShop Addons</a>
			</div>
			<form id="addons_login_form" method="post" >
				<div class="form-group">
					<div class="input-group">
						<span class="help-tooltip" data-toggle="tooltip" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'PrestaShop Addons is PrestaShop\'s marketplace with more than 3,500 modules and themes available.'),$_smarty_tpl);?>
">
							<?php echo smartyTranslate(array('s'=>"Connect your shop with PrestaShop's marketplace in order to import automatically all your purchases."),$_smarty_tpl);?>

						</span>
					</div>
				</div>
				<div class="form-group">
					<label for="username_addons"><?php echo smartyTranslate(array('s'=>'Addons Login'),$_smarty_tpl);?>
 :</label> 
					<div class="input-group">
						<span class="input-group-addon"><i class="icon-user"></i></span>
						<input id="username_addons" class="form-control" name="username_addons" type="text" value=""  autocomplete="off" class="form-control ac_input">
					</div>
				</div>
				<div class="form-group">
					<label for="password_addons"><?php echo smartyTranslate(array('s'=>'Password Addons'),$_smarty_tpl);?>
 :</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="icon-key"></i></span>
						<input id="password_addons" class="form-control" name="password_addons" type="password" value=""  autocomplete="off" class="form-control ac_input">
					</div>
				</div>
				<div class="row">
					<button id="addons_login_button" class="btn btn-default btn-block btn-lg" type="submit">
						<i class="icon-unlock"></i> <?php echo smartyTranslate(array('s'=>'Sign in'),$_smarty_tpl);?>

					</button>
					<a target="_blank" href="http://addons.prestashop.com/en/login#createnow"><?php echo smartyTranslate(array('s'=>"Don't have an account ?"),$_smarty_tpl);?>
</a>
				</div>
				<div id="addons_loading" class="help-block"></div>
			</form>
			<!--end addons login-->
		<?php }?>
	<?php }?>
	</div>
<?php }?><?php }} ?>