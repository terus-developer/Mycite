<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 16:18:30
         compiled from "/srv/www/livestreet/templates/skin/coder/blocks/block.blogs_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39534348255f2d4a662e4f7-74793986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4969461166d1694a0fa9d65d73dbce14e333aefb' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/coder/blocks/block.blogs_top.tpl',
      1 => 1441974723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39534348255f2d4a662e4f7-74793986',
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
  'unifunc' => 'content_55f2d4a6639199_63325628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2d4a6639199_63325628')) {function content_55f2d4a6639199_63325628($_smarty_tpl) {?><ul class="block-blog-list">
	<?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
$_smarty_tpl->tpl_vars['oBlog']->_loop = true;
?>
		<li>
			<a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
		</li>
	<?php } ?>
</ul>				<?php }} ?>