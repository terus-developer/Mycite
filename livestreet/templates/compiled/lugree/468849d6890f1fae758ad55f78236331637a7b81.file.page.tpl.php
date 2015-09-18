<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 15:23:18
         compiled from "/srv/www/livestreet/plugins/page/templates/skin/default/actions/ActionPage/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179505771955f2c7b65a6490-77240321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '468849d6890f1fae758ad55f78236331637a7b81' => 
    array (
      0 => '/srv/www/livestreet/plugins/page/templates/skin/default/actions/ActionPage/page.tpl',
      1 => 1363893368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179505771955f2c7b65a6490-77240321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oConfig' => 0,
    'oPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2c7b65c54a9_10346515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2c7b65c54a9_10346515')) {function content_55f2c7b65c54a9_10346515($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="topic">
	<div class="topic-content text">
		<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('view.tinymce')){?>
			<?php echo $_smarty_tpl->tpl_vars['oPage']->value->getText();?>

		<?php }else{ ?>
			<?php if ($_smarty_tpl->tpl_vars['oPage']->value->getAutoBr()){?>
				<?php echo nl2br($_smarty_tpl->tpl_vars['oPage']->value->getText());?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->tpl_vars['oPage']->value->getText();?>

			<?php }?>
		<?php }?>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>