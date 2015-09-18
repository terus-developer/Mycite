<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 15:21:20
         compiled from "/srv/www/livestreet/plugins/page/templates/skin/default/main_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186609195555f2c74004b045-25885219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29a2222dafa897d44ba185c1cb4dcb2cb7aca6df' => 
    array (
      0 => '/srv/www/livestreet/plugins/page/templates/skin/default/main_menu.tpl',
      1 => 1363893368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186609195555f2c74004b045-25885219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aPagesMain' => 0,
    'sAction' => 0,
    'sEvent' => 0,
    'oPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2c74005aee6_85306599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2c74005aee6_85306599')) {function content_55f2c74005aee6_85306599($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?><?php  $_smarty_tpl->tpl_vars['oPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPagesMain']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oPage']->key => $_smarty_tpl->tpl_vars['oPage']->value){
$_smarty_tpl->tpl_vars['oPage']->_loop = true;
?>
	<li <?php if ($_smarty_tpl->tpl_vars['sAction']->value=='page'&&$_smarty_tpl->tpl_vars['sEvent']->value==$_smarty_tpl->tpl_vars['oPage']->value->getUrl()){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'page'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['oPage']->value->getUrlFull();?>
/" ><?php echo $_smarty_tpl->tpl_vars['oPage']->value->getTitle();?>
</a><i></i></li>
<?php } ?>	<?php }} ?>