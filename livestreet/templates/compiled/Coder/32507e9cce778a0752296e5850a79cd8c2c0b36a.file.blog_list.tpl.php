<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 16:18:28
         compiled from "/srv/www/livestreet/templates/skin/coder/blog_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98644402955f2d4a4b32251-89792395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32507e9cce778a0752296e5850a79cd8c2c0b36a' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/coder/blog_list.tpl',
      1 => 1441974725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98644402955f2d4a4b32251-89792395',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aBlogs' => 0,
    'oBlog' => 0,
    'sBlogsEmptyList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2d4a4b493b8_92866165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2d4a4b493b8_92866165')) {function content_55f2d4a4b493b8_92866165($_smarty_tpl) {?><table class="table table-blogs" cellspacing="0">
	<tbody>
		<?php if ($_smarty_tpl->tpl_vars['aBlogs']->value){?>
			<?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
$_smarty_tpl->tpl_vars['oBlog']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars["oUserOwner"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlog']->value->getOwner(), null, 0);?>

				<tr>
					<td class="cell-name">
						<p>
							<a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
" class="blog-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
						</p>
					</td>
				</tr>
			<?php } ?>
		<?php }else{ ?>
			<tr>
				<td colspan="1">
					<?php if ($_smarty_tpl->tpl_vars['sBlogsEmptyList']->value){?>
						<?php echo $_smarty_tpl->tpl_vars['sBlogsEmptyList']->value;?>

					<?php }else{ ?>

					<?php }?>
				</td>
			</tr>
		<?php }?>
	</tbody>
</table><?php }} ?>