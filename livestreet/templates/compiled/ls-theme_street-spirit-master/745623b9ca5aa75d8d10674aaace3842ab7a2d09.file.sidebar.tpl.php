<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 15:22:47
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88603023355f6bc174d6c49-84898329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '745623b9ca5aa75d8d10674aaace3842ab7a2d09' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/sidebar.tpl',
      1 => 1441978718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88603023355f6bc174d6c49-84898329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebarPosition' => 0,
    'iUserCurrentCountTalkNew' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6bc174defa6_20056176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6bc174defa6_20056176')) {function content_55f6bc174defa6_20056176($_smarty_tpl) {?><aside id="sidebar" class="<?php if ($_smarty_tpl->tpl_vars['sidebarPosition']->value=='left'){?>sidebar-profile<?php }?> <?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value){?>new-messages<?php }?>">
	<?php echo $_smarty_tpl->getSubTemplate ('blocks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>'right'), 0);?>

</aside><?php }} ?>