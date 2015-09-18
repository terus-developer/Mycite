<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 22:19:51
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/menu.stream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108218554055f71dd79181d6-22823619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bac879a96f4c4a3bbd549974e00549661e59841' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/menu.stream.tpl',
      1 => 1441978718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108218554055f71dd79181d6-22823619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'sMenuItemSelect' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f71dd792ba93_26863647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f71dd792ba93_26863647')) {function content_55f71dd792ba93_26863647($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.hook.php';
?><ul class="nav nav-menu">
	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='user'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
user/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu_user'];?>
</a></li>
	<?php }?>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='all'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
all/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu_all'];?>
</a></li>

	<?php echo smarty_function_hook(array('run'=>'menu_stream_item'),$_smarty_tpl);?>

</ul>
<?php echo smarty_function_hook(array('run'=>'menu_stream'),$_smarty_tpl);?>

<?php }} ?>