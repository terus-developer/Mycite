<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 15:21:20
         compiled from "/srv/www/livestreet/templates/skin/lugree/toolbar_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127357607155f2c7400eb527-59331265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66f6d606d9514d46897b3bc49891f93c14f90d9a' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/lugree/toolbar_admin.tpl',
      1 => 1441973967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127357607155f2c7400eb527-59331265',
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
  'unifunc' => 'content_55f2c7400f3265_89048317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2c7400f3265_89048317')) {function content_55f2c7400f3265_89048317($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<section class="toolbar-admin">
	<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_title'];?>
">
		<i></i>
	</a>
</section>
<?php }?><?php }} ?>