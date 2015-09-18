<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 17:12:33
         compiled from "/srv/www/livestreet/templates/skin/justsimple/toolbar_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123706128655f6d5d1070363-17482719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca26636873ca5af74100c79eabb6c24f29504ca7' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/justsimple/toolbar_topic.tpl',
      1 => 1442239840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123706128655f6d5d1070363-17482719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d5d1076bc0_00915997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d5d1076bc0_00915997')) {function content_55f6d5d1076bc0_00915997($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['params']->value['iCountTopic']){?>
	<section class="toolbar-topic" id="" style="">
		<a href="#" onclick="return ls.toolbar.topic.goPrev();" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['toolbar_topic_prev'];?>
" class="toolbar-topic-prev"><i></i></a>
		<a href="#" onclick="return ls.toolbar.topic.goNext();" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['toolbar_topic_next'];?>
" class="toolbar-topic-next"><i></i></a>
	</section>
<?php }?>

	
<?php }} ?>