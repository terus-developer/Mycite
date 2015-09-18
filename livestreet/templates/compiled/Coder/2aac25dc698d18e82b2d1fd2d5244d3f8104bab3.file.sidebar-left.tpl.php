<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 15:37:04
         compiled from "/srv/www/livestreet/templates/skin/coder/sidebar-left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47554709155f2caf0400bf1-12454906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aac25dc698d18e82b2d1fd2d5244d3f8104bab3' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/coder/sidebar-left.tpl',
      1 => 1441974721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47554709155f2caf0400bf1-12454906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'oUserCurrent' => 0,
    'iUserCurrentCountTalkNew' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'sAction' => 0,
    'sMenuHeadItemSelect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2caf0459670_88977891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2caf0459670_88977891')) {function content_55f2caf0459670_88977891($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.cfg.php';
?><aside id="sidebar-left">
	<?php echo smarty_function_hook(array('run'=>'header_banner_begin'),$_smarty_tpl);?>


	<div class="title-left"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['panel'];?>
</div>
	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
		<div class="userbar">
			<div class="toggle-click"><i class="fa fa-sort-desc"></i></div>

			<div class="name">
				<a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileAvatarPath(48);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getLogin();?>
" class="avatar"><?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getLogin();?>

				</a>
			</div>

			<div class="toggle-menu">
				<ul>
					<?php echo smarty_function_hook(array('run'=>'userbar_item_first'),$_smarty_tpl);?>

					<li><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/"><i class="fa fa-plus"></i><?php echo $_smarty_tpl->tpl_vars['aLang']->value['add'];?>
</a></li>
					<li><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
/"><i class="fa fa-envelope-o"></i><?php echo $_smarty_tpl->tpl_vars['aLang']->value['message'];?>
<?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value){?> +<?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value;?>
<?php }?></a></li>
					<li><a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
profile/"><i class="fa fa-cog"></i><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings'];?>
</a></li>
					<?php echo smarty_function_hook(array('run'=>'userbar_item_last'),$_smarty_tpl);?>

					<li><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
exit/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><i class="fa fa-sign-out"></i><?php echo $_smarty_tpl->tpl_vars['aLang']->value['quit'];?>
</a></li>
				</ul>
			</div>

			<?php echo smarty_function_hook(array('run'=>'userbar_nav'),$_smarty_tpl);?>

		</div>
	<?php }else{ ?>
		<div class="join"><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
" class="js-login-form-show"><i class="fa fa-sign-in"></i><?php echo $_smarty_tpl->tpl_vars['aLang']->value['join'];?>
</a></div>
	<?php }?>

	<div class="hr-left"></div>

	<div class="title-left"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['nav_panel'];?>
</div>
	<div class="navigation">
		<ul>
			<li <?php if ($_smarty_tpl->tpl_vars['sAction']->value=='index'){?>class="active"<?php }?>><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><i class="fa fa-tasks"></i><?php echo $_smarty_tpl->tpl_vars['aLang']->value['all'];?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?><li <?php if ($_smarty_tpl->tpl_vars['sAction']->value=='feed'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'feed'),$_smarty_tpl);?>
"><i class="fa fa-newspaper-o"></i><?php echo $_smarty_tpl->tpl_vars['aLang']->value['myfeed'];?>
</a></li><?php }?>
			<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='people'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
"><i class="fa fa-users"></i><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='blogs'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
"><i class="fa fa-book"></i><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs'];?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?><li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='stream'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
"><i class="fa fa-bullhorn"></i><?php echo $_smarty_tpl->tpl_vars['aLang']->value['feeds'];?>
</a></li><?php }?>
			<?php echo smarty_function_hook(array('run'=>'main_menu_item'),$_smarty_tpl);?>

		</ul>
		<?php echo smarty_function_hook(array('run'=>'main_menu'),$_smarty_tpl);?>

	</div>

	<?php if (!$_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
	<div class="wannareg">
		<div class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['reg_note'];?>
</div>
		<a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
" class="button button-primary js-registration-form-show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['reg'];?>
</a>
	</div>
	<?php }?>

	<?php echo smarty_function_hook(array('run'=>'header_banner_end'),$_smarty_tpl);?>

</aside><?php }} ?>