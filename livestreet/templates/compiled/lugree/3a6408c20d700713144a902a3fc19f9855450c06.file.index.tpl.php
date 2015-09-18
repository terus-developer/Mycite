<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 15:23:31
         compiled from "/srv/www/livestreet/templates/skin/lugree/actions/ActionIndex/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84528412055f2c7c3decaa8-18397434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a6408c20d700713144a902a3fc19f9855450c06' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/lugree/actions/ActionIndex/index.tpl',
      1 => 1441973971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84528412055f2c7c3decaa8-18397434',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2c7c3df6951_87750796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2c7c3df6951_87750796')) {function content_55f2c7c3df6951_87750796($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>