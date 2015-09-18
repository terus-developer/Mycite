<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 16:18:30
         compiled from "/srv/www/livestreet/templates/skin/coder/actions/ActionIndex/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155944874755f2d4a65e6891-44093962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aa66c1074169180f0aa9b6e1ca87cc22ec0a49a' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/coder/actions/ActionIndex/index.tpl',
      1 => 1441974726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155944874755f2d4a65e6891-44093962',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2d4a65f00b5_70392277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2d4a65f00b5_70392277')) {function content_55f2d4a65f00b5_70392277($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>