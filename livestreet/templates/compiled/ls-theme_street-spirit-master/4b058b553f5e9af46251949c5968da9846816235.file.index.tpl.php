<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 15:22:47
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionIndex/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62001526855f6bc174969e4-76794309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b058b553f5e9af46251949c5968da9846816235' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionIndex/index.tpl',
      1 => 1441978726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62001526855f6bc174969e4-76794309',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6bc174a3253_41853836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6bc174a3253_41853836')) {function content_55f6bc174a3253_41853836($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>