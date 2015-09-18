<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 17:51:48
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionComments/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116240936955f6df04868cf4-85718231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e24df4c80c8003c65320806f432ef315735b0b4' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionComments/index.tpl',
      1 => 1441978726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116240936955f6df04868cf4-85718231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6df04873c99_82395333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6df04873c99_82395333')) {function content_55f6df04873c99_82395333($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['comments_all'];?>
</h2>

<?php echo $_smarty_tpl->getSubTemplate ('comment_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>