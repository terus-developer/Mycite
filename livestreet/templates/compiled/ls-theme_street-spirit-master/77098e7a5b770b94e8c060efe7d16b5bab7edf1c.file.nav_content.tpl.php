<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 12:58:54
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/nav_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154598617055f69a5e3ac501-17804302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77098e7a5b770b94e8c060efe7d16b5bab7edf1c' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/nav_content.tpl',
      1 => 1441978718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154598617055f69a5e3ac501-17804302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f69a5e3b1278_85853785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f69a5e3b1278_85853785')) {function content_55f69a5e3b1278_85853785($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['menu_content']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu_content']->value).".content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>