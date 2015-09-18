<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 16:18:30
         compiled from "/srv/www/livestreet/templates/skin/coder/blocks/block.blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205497854955f2d4a663b3b4-38800781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cbd164818104aa9ed684fe371c1b0aa957e541e' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/coder/blocks/block.blogs.tpl',
      1 => 1441974723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205497854955f2d4a663b3b4-38800781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sBlogsTop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2d4a663f133_10809052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2d4a663f133_10809052')) {function content_55f2d4a663f133_10809052($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?><div class="block block-type-blogs" id="block_blogs">
	<header class="block-header sep">
		<h3>Разделы</h3>
	</header>
	
	<div class="block-content">
		<div class="js-block-blogs-content">
			<?php echo $_smarty_tpl->tpl_vars['sBlogsTop']->value;?>

		</div>
		<footer>
			<a href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
">Все разделы</a>
		</footer>
	</div>
</div>
<?php }} ?>