<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 15:23:06
         compiled from "/srv/www/livestreet/templates/skin/lugree/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28053181355f2c7aae62b13-51837303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51c65cbf6f563242d5db06fd84373128b77736b8' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/lugree/sidebar.tpl',
      1 => 1441973967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28053181355f2c7aae62b13-51837303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebarPosition' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2c7aae69434_87899054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2c7aae69434_87899054')) {function content_55f2c7aae69434_87899054($_smarty_tpl) {?><aside id="sidebar" <?php if ($_smarty_tpl->tpl_vars['sidebarPosition']->value=='left'){?>class="sidebar-profile"<?php }?>>
	<?php echo $_smarty_tpl->getSubTemplate ('blocks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>'right'), 0);?>

</aside><?php }} ?>