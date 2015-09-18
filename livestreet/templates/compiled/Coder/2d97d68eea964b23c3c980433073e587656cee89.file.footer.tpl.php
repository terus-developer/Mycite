<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 15:37:04
         compiled from "/srv/www/livestreet/templates/skin/coder/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90832466555f2caf04b8613-56423008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d97d68eea964b23c3c980433073e587656cee89' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/coder/footer.tpl',
      1 => 1441974721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90832466555f2caf04b8613-56423008',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2caf04c0942_48879656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2caf04c0942_48879656')) {function content_55f2caf04c0942_48879656($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.hook.php';
?>				<?php echo smarty_function_hook(array('run'=>'content_end'),$_smarty_tpl);?>

					
				<?php echo $_smarty_tpl->getSubTemplate ('content_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div> <!-- /content-inner -->
			<div class="clear"></div>
		</div> <!-- /content -->
			<div class="clear"></div>
	</div> <!-- /wrapper -->
		
	<?php echo smarty_function_hook(array('run'=>'footer_end'),$_smarty_tpl);?>


</div> <!-- /container -->

<?php echo $_smarty_tpl->getSubTemplate ('toolbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo smarty_function_hook(array('run'=>'body_end'),$_smarty_tpl);?>


</body>
</html><?php }} ?>