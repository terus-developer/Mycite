<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 17:12:55
         compiled from "/srv/www/livestreet/templates/skin/justsimple/actions/ActionPersonalBlog/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102824295755f6d5e70a19b1-60050701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde22995e45d09684edfeb617873b1dc32a63907' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/justsimple/actions/ActionPersonalBlog/index.tpl',
      1 => 1442239854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102824295755f6d5e70a19b1-60050701',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d5e70b2447_64725383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d5e70b2447_64725383')) {function content_55f6d5e70b2447_64725383($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.blog.content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>