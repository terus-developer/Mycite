<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 17:12:50
         compiled from "/srv/www/livestreet/templates/skin/justsimple/actions/ActionBlog/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177122334755f6d5e2e1a771-43684923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a09670e0262c1ef9e937f64668c68a523ef8fe99' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/justsimple/actions/ActionBlog/index.tpl',
      1 => 1442239850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177122334755f6d5e2e1a771-43684923',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d5e2e24c10_73828461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d5e2e24c10_73828461')) {function content_55f6d5e2e24c10_73828461($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>