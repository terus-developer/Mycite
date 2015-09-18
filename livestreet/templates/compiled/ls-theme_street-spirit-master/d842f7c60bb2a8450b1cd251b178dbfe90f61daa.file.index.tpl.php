<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 16:52:53
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionBlog/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184032047055f6d135c9daf9-46798841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd842f7c60bb2a8450b1cd251b178dbfe90f61daa' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionBlog/index.tpl',
      1 => 1441978725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184032047055f6d135c9daf9-46798841',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d135cac849_08504073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d135cac849_08504073')) {function content_55f6d135cac849_08504073($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>