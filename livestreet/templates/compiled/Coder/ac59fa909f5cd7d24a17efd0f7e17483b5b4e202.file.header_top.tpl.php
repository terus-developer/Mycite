<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 15:37:04
         compiled from "/srv/www/livestreet/templates/skin/coder/header_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128664777155f2caf03ef609-68665436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac59fa909f5cd7d24a17efd0f7e17483b5b4e202' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/coder/header_top.tpl',
      1 => 1441974721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128664777155f2caf03ef609-68665436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2caf03fea46_41510953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2caf03fea46_41510953')) {function content_55f2caf03fea46_41510953($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?><div id="header">
	<div class="toggle-sidebar-left"><i class="fa fa-bars"></i></div>

	<div class="logo"><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
">Coder</a></div>

	<div class="add-button">
		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
			<a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/" class="button button-primary js-write-window-show" id="modal_write_show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['add_to'];?>
</a>
		<?php }else{ ?>
			<a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
" class="button button-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['add_to'];?>
</a>
		<?php }?>
	</div>

	<div class="content-search">
		<form id="search-header-form" action="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
topics/">
			<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_site'];?>
" maxlength="255" name="q" class="input-text">
		</form>
	</div>

	<div class="clear"></div>
</div>

<div class="header-back"></div><?php }} ?>