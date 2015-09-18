<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 16:53:22
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/blocks/block.blogInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146455317455f6d1527f2e49-47955660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5635197fce498e2754ba2efc4a27af6b8c0a3e37' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/blocks/block.blogInfo.tpl',
      1 => 1441978721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146455317455f6d1527f2e49-47955660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d1527f95e2_43200696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d1527f95e2_43200696')) {function content_55f6d1527f95e2_43200696($_smarty_tpl) {?><section class="block">
	<header class="block-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blog_info'];?>
</h3>
	</header>
	
	<div class="block-content with_tborder">
		<p id="block_blog_info"></p>
	</div>	
</section>


<section class="block">
	<header class="block-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blog_info_note'];?>
</h3>
	</header>
	
	<div class="block-content with_tborder">	
		<p><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blog_info_note_text'];?>
</p>
	</div>	
</section><?php }} ?>