<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 17:12:32
         compiled from "/srv/www/livestreet/templates/skin/justsimple/header_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89974079555f6d5d0aaeb15-83585600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b2d0a8c5fff27779731b93799e73b231243e1f5' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/justsimple/header_top.tpl',
      1 => 1442239839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89974079555f6d5d0aaeb15-83585600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'iUserCurrentCountTalkNew' => 0,
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'sMenuHeadItemSelect' => 0,
    'sMenuItemSelect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d5d0b0b588_13847620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d5d0b0b588_13847620')) {function content_55f6d5d0b0b588_13847620($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.hook.php';
?><div id="header">

	<h1 class="logo"><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
" title="<?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
"><img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/logo.png" alt="LiveStreet"></a></h1>

	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
		<div class="profile">
			<a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileAvatarPath(48);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getLogin();?>
" class="avatar" /></a>
			<ul>
				<li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
" class="username"><?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getLogin();?>
</a>
                    <strong class="<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->getRating()>=0){?>plus<?php }elseif($_smarty_tpl->tpl_vars['oUserCurrent']->value->getRating()<0){?>minus<?php }?>"><?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getRating();?>
</strong>
				</li>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value){?>
						<a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" id="new_messages"><?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_mail'];?>
</a>
					<?php }else{ ?>
						<a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" id="new_messages"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_mail_none'];?>
</a>
					<?php }?>
                    <a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
profile/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_settings'];?>
</a>
					<a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
exit/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['exit'];?>
</a>
				</li>
				<?php echo smarty_function_hook(array('run'=>'userbar_item'),$_smarty_tpl);?>

			</ul>

		    <?php echo smarty_function_hook(array('run'=>'userbar_nav'),$_smarty_tpl);?>

		</div>
	<?php }else{ ?>
		<div class="profile">
            <img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/avatar_48x48.jpg" alt="guest_avatar" class="avatar" />
            <ul class="guest">
                <li><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
" class="js-login-form-show login-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_submit'];?>
</a></li>
                <li><a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
" class="js-registration-form-show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_submit'];?>
</a> </li>
            </ul>
		</div>
	<?php }?>

	<ul class="pages">
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='blog'){?>class="active"<?php }?>><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_title'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='blogs'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='people'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people'];?>
</a></li>
		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?><li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='add'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add" class="js-write-window-show" id="modal_write_show" style="color:#FF4242"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['header_add'];?>
</a></li><?php }?>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='stream'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu'];?>
</a></li>

		<?php echo smarty_function_hook(array('run'=>'main_menu_item'),$_smarty_tpl);?>

	</ul>

    <?php echo smarty_function_hook(array('run'=>'main_menu'),$_smarty_tpl);?>


</div><?php }} ?>