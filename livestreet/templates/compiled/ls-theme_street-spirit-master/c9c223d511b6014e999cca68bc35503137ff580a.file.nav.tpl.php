<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 12:58:54
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103332759655f69a5e348548-77313950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9c223d511b6014e999cca68bc35503137ff580a' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/nav.tpl',
      1 => 1441978718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103332759655f69a5e348548-77313950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'iUserCurrentCountTalkNew' => 0,
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'menu' => 0,
    'aMenuContainers' => 0,
    'aMenuFetch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f69a5e3a83e2_97318287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f69a5e3a83e2_97318287')) {function content_55f69a5e3a83e2_97318287($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?><div class="container clear">

	<nav id="nav">

		<ul class="dropdown-nav-main dropdown-menu" id="dropdown-mainmenu-menu"></ul>

		<?php echo smarty_function_hook(array('run'=>'main_menu'),$_smarty_tpl);?>

		
		
		<?php echo smarty_function_hook(array('run'=>'userbar_nav'),$_smarty_tpl);?>

		
		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
			<div class="dropdown-user" id="dropdown-user">
                <?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value){?><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" class="new-messages"><i class="icon-synio-new-message"></i><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_new_messages'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value;?>
</b></a><?php }?>
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

							<?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value){?><div class="new"><span>+<?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value;?>
</span></div><?php }?>
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

				<li><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
" class="js-login-form-show sign-in"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_submit'];?>
</a></li>
				<li><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['or'];?>
</span></li>
				<li><a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
" class="js-registration-form-show sign-up"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_submit'];?>
</a></li>
			</ul>
		<?php }?>

	<!-- <nav id="nav"> -->
		<?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
			<?php if (in_array($_smarty_tpl->tpl_vars['menu']->value,$_smarty_tpl->tpl_vars['aMenuContainers']->value)){?><?php echo $_smarty_tpl->tpl_vars['aMenuFetch']->value[$_smarty_tpl->tpl_vars['menu']->value];?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
			<a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/" class="button button-write js-write-window-show" id="modal_write_show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create'];?>
</a>
		<?php }?>
		
		<!-- <div class="search-header">
			<div class="search-header-show" id="search-header-show"><i class="icon-synio-search"></i> <a href="#" class="link-dotted"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
</a></div>
			
			<form class="search-header-form" id="search-header-form" action="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
topics/">
				<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search'];?>
" maxlength="255" name="q" class="input-text">
				<input type="submit" value="" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
" class="input-submit">
			</form>
		</div> -->
	</nav>
</div>


</header><?php }} ?>