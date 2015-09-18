<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 17:12:32
         compiled from "/srv/www/livestreet/templates/skin/justsimple/blocks/block.blogs_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179757445155f6d5d0f3af62-60568570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17cdae9f7fa41f1ab35aff6fbcd0b445354f8811' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/justsimple/blocks/block.blogs_top.tpl',
      1 => 1442239843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179757445155f6d5d0f3af62-60568570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aBlogs' => 0,
    'oBlog' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d5d100d2d7_19640892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d5d100d2d7_19640892')) {function content_55f6d5d100d2d7_19640892($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.cfg.php';
?><ul class="block-blog-list">
	<?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
$_smarty_tpl->tpl_vars['oBlog']->_loop = true;
?>
		<li>
			<a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a><?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getType()=='close'){?><img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/lock.png" alt="[x]" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_closed'];?>
" /><?php }?>
			
			<strong><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getRating();?>
</strong>
		</li>
	<?php } ?>
</ul>				<?php }} ?>