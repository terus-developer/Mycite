<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 15:59:19
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionLogin/exit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58016628255f6c4a7eb6197-03814025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f26d2624114a89c32b55aca1679dc038d0dd661' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionLogin/exit.tpl',
      1 => 1441978726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58016628255f6c4a7eb6197-03814025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6c4a7ec8d94_73052299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6c4a7ec8d94_73052299')) {function content_55f6c4a7ec8d94_73052299($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_exit_notice'];?>
</h2>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>