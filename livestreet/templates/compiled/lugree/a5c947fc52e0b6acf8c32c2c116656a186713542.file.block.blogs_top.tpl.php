<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 15:23:31
         compiled from "/srv/www/livestreet/templates/skin/lugree/blocks/block.blogs_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127898200255f2c7c3f2dbe0-82915615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5c947fc52e0b6acf8c32c2c116656a186713542' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/lugree/blocks/block.blogs_top.tpl',
      1 => 1441973968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127898200255f2c7c3f2dbe0-82915615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aBlogs' => 0,
    'oBlog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2c7c3f3afd7_46489555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2c7c3f3afd7_46489555')) {function content_55f2c7c3f3afd7_46489555($_smarty_tpl) {?><ul class="block-blog-list">
	<?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
$_smarty_tpl->tpl_vars['oBlog']->_loop = true;
?>
		<li>
			<a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
			
			<strong><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getRating();?>
</strong>
		</li>
	<?php } ?>
</ul>				<?php }} ?>