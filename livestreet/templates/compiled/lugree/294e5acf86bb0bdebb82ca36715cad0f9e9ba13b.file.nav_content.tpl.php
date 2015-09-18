<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 15:21:20
         compiled from "/srv/www/livestreet/templates/skin/lugree/nav_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91893770455f2c7400744c3-29681382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '294e5acf86bb0bdebb82ca36715cad0f9e9ba13b' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/lugree/nav_content.tpl',
      1 => 1441973967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91893770455f2c7400744c3-29681382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_content' => 0,
    'usermenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2c74007dfc6_80159943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2c74007dfc6_80159943')) {function content_55f2c74007dfc6_80159943($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['menu_content']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu_content']->value).".content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['usermenu']->value){?>
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['usermenu']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php }} ?>