<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 12:58:54
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/window_write.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164411389155f69a5e293655-64570539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3a4229340e226f3fe10c5e298055cf56c90add5' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/window_write.tpl',
      1 => 1441978721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164411389155f69a5e293655-64570539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iUserCurrentCountTopicDraft' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f69a5e2b2fb8_52630252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f69a5e2b2fb8_52630252')) {function content_55f69a5e2b2fb8_52630252($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_declension')) include '/srv/www/livestreet/engine/modules/viewer/plugs/modifier.declension.php';
if (!is_callable('smarty_function_hook')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.hook.php';
?><div class="modal modal-write <?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value){?> with-draft <?php }?>" id="modal_write">
	<header class="modal-header">
		<a href="#" class="close jqmClose"></a>
	</header>
	
	<div class="modal-content"><ul class="write-list"><?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value){?><li class="write-item-type-draft"><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
saved/" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
saved/" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value;?>
 <?php echo smarty_modifier_declension($_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value,$_smarty_tpl->tpl_vars['aLang']->value['draft_declension'],'russian');?>
</a></li><?php }?><li class="write-item-type-topic"><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_topic_topic'];?>
</a></li><li class="write-item-type-blog"><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
add" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_blog'];?>
</a></li><li class="write-item-type-message"><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add" class="write-item-image"></a><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add" class="write-item-link"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_talk'];?>
</a></li><?php echo smarty_function_hook(array('run'=>'write_item','isPopup'=>true),$_smarty_tpl);?>
</ul></div>
</div>
	<?php }} ?>