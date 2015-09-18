<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 17:12:33
         compiled from "/srv/www/livestreet/templates/skin/justsimple/toolbar_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133350231255f6d5d10664f6-06183956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '044ea7d75464961e259d50193ce2ccda64ed8504' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/justsimple/toolbar_admin.tpl',
      1 => 1442239840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133350231255f6d5d10664f6-06183956',
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
  'unifunc' => 'content_55f6d5d106ec17_94777205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d5d106ec17_94777205')) {function content_55f6d5d106ec17_94777205($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<section class="toolbar-admin">
	<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_title'];?>
">
		<i></i>
	</a>
</section>
<?php }?><?php }} ?>