<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 12:58:54
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/header_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158619358355f69a5e2bec34-90712775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cead22a563703aa904c2df2fdf501e994d536364' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/header_top.tpl',
      1 => 1441978717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158619358355f69a5e2bec34-90712775',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sMenuHeadItemSelect' => 0,
    'oUserCurrent' => 0,
    'iUserCurrentCountTalkNew' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f69a5e32c869_44361656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f69a5e32c869_44361656')) {function content_55f69a5e32c869_44361656($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cfg')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?><header id="header" role="banner">
	<?php echo smarty_function_hook(array('run'=>'header_banner_begin'),$_smarty_tpl);?>

	<div class="container clear">
		<h1 class="site-name"><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a></h1>
	</div>
	
	<div class="wrap main_menu clear">
		<div class="container clear">
			<div class="search-header">
				<!-- <div class="search-header-show" id="search-header-show"><i class="icon-synio-search"></i> <a href="#" class="link-dotted"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
</a></div> -->
				
				<form class="search-header-form" id="search-header-form" action="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
topics/">
					<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search'];?>
" maxlength="255" name="q" class="input-text">
					<input type="submit" value="" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
" class="input-submit">
				</form>
			</div>

			<ul class="nav nav-main" id="nav-main">
				<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='blog'){?>class="active"<?php }?>><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_title'];?>
</a> <i></i></li>
				<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='blogs'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs'];?>
</a> <i></i></li>
				<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='people'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people'];?>
</a> <i></i></li>
				<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='stream'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu'];?>
</a> <i></i></li>

				<?php echo smarty_function_hook(array('run'=>'main_menu_item'),$_smarty_tpl);?>


				<li class="nav-main-more"><a href="#" id="dropdown-mainmenu-trigger" onclick="return false"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['more'];?>
</a></li>
			</ul>
		</div>
	</div>
	
	<!-- <div class="container clear">
		<ul class="dropdown-nav-main dropdown-menu" id="dropdown-mainmenu-menu"></ul>

		<?php echo smarty_function_hook(array('run'=>'main_menu'),$_smarty_tpl);?>

		
		
		<?php echo smarty_function_hook(array('run'=>'userbar_nav'),$_smarty_tpl);?>

		
		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
			<div class="dropdown-user" id="dropdown-user">
				<a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileAvatarPath(48);?>
" alt="avatar" class="avatar" /></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
" class="username"><?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getLogin();?>
</a>
				
				<div class="dropdown-user-shadow"></div>
				<div class="dropdown-user-trigger" id="dropdown-user-trigger"><i></i></div>
				
				<ul class="dropdown-user-menu" id="dropdown-user-menu" style="display: none">
					<li class="item-stat">
						<span class="strength" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_skill'];?>
"><i class="icon-synio-star-green"></i> <?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getSkill();?>
</span>
						<span class="rating <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->getRating()<0){?>negative<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_rating'];?>
"><i class="icon-synio-rating"></i> <?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getRating();?>
</span>
						<?php echo smarty_function_hook(array('run'=>'userbar_stat_item'),$_smarty_tpl);?>

					</li>
					<?php echo smarty_function_hook(array('run'=>'userbar_item_first'),$_smarty_tpl);?>

					<li class="item-messages">
						<a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" id="new_messages">
							<i class="item-icon"></i>
							<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_privat_messages'];?>

							<?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value){?><div class="new">+<?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value;?>
</div><?php }?>
						</a>
					</li>
					<li class="item-favourite"><i class="item-icon"></i><a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
favourites/topics/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_menu_profile_favourites'];?>
</a></li> 
					<li class="item-profile"><i class="item-icon"></i><a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['footer_menu_user_profile'];?>
</a></li>
					<li class="item-settings"><i class="item-icon"></i><a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
profile/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_settings'];?>
</a></li>
					<li class="item-create"><i class="item-icon"></i><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create'];?>
</a></li>
					<?php echo smarty_function_hook(array('run'=>'userbar_item_last'),$_smarty_tpl);?>

					<li class="item-signout"><i class="item-icon"></i><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
exit/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['exit'];?>
</a></li>
				</ul>
			</div>
		<?php }else{ ?>
			<ul class="auth">
				<?php echo smarty_function_hook(array('run'=>'userbar_item'),$_smarty_tpl);?>

				<li><a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
" class="js-registration-form-show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_submit'];?>
</a></li>
				<li><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
" class="js-login-form-show sign-in"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_submit'];?>
</a></li>
			</ul>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value){?><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" class="new-messages">+<?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value;?>
 <i class="icon-synio-new-message"></i></a><?php }?>
	</div> -->
	
	<?php echo smarty_function_hook(array('run'=>'header_banner_end'),$_smarty_tpl);?>

<?php }} ?>