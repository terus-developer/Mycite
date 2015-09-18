<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 12:58:54
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/toolbar_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41046437055f69a5e4352f6-84424615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28c56e7702d38e9d1c90a55c363f338eb9161c37' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/toolbar_admin.tpl',
      1 => 1441978719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41046437055f69a5e4352f6-84424615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f69a5e43d1c6_41835519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f69a5e43d1c6_41835519')) {function content_55f69a5e43d1c6_41835519($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<section class="toolbar-admin">
	<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_title'];?>
">
		<i></i>
	</a>
</section>
<?php }?><?php }} ?>