<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 16:18:28
         compiled from "/srv/www/livestreet/templates/skin/coder/blocks/block.stream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126817893655f2d4a4b26715-71228849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37756d3a28c04e546e27ccd1090892a3b95c703f' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/coder/blocks/block.stream.tpl',
      1 => 1441974723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126817893655f2d4a4b26715-71228849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sStreamComments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2d4a4b2c379_92678084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2d4a4b2c379_92678084')) {function content_55f2d4a4b2c379_92678084($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.hook.php';
?><section class="block block-type-stream">
	<?php echo smarty_function_hook(array('run'=>'block_stream_nav_item','assign'=>"sItemsHook"),$_smarty_tpl);?>


	<header class="block-header sep">
		<h3>Последние ответы</h3>
	</header>
	
	<div class="block-content">
		<div class="js-block-stream-content">
			<?php echo $_smarty_tpl->tpl_vars['sStreamComments']->value;?>

		</div>
	</div>
</section>

<?php }} ?>