<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 17:12:32
         compiled from "/srv/www/livestreet/templates/skin/justsimple/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160341185155f6d5d0e78868-23843061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f92c4a0f64f4ee4c12538f1034a01ef77b1d666' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/justsimple/sidebar.tpl',
      1 => 1442239840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160341185155f6d5d0e78868-23843061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebarPosition' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d5d0e7dea7_48465718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d5d0e7dea7_48465718')) {function content_55f6d5d0e7dea7_48465718($_smarty_tpl) {?><aside id="sidebar" <?php if ($_smarty_tpl->tpl_vars['sidebarPosition']->value=='left'){?>class="sidebar-profile"<?php }?>>
	<?php echo $_smarty_tpl->getSubTemplate ('blocks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>'right'), 0);?>

</aside><?php }} ?>