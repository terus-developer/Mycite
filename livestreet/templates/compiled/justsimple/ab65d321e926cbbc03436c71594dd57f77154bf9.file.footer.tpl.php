<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 17:12:32
         compiled from "/srv/www/livestreet/templates/skin/justsimple/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20066838755f6d5d0e491b7-79431506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab65d321e926cbbc03436c71594dd57f77154bf9' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/justsimple/footer.tpl',
      1 => 1442239839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20066838755f6d5d0e491b7-79431506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noSidebar' => 0,
    'sMenuHeadItemSelect' => 0,
    'aLang' => 0,
    'oUserCurrent' => 0,
    'sMenuItemSelect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d5d0e76722_13641234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d5d0e76722_13641234')) {function content_55f6d5d0e76722_13641234($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_cfg')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?>			<?php echo smarty_function_hook(array('run'=>'content_end'),$_smarty_tpl);?>


		</div><!-- /content -->

		<?php if (!$_smarty_tpl->tpl_vars['noSidebar']->value){?>
			<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
	</div><!-- /wrapper -->

    <div id="hFooter"></div>
</div> <!-- /container -->

<div id="footer">
  <div id="footer-inner">
  	<div class="right">
        <?php echo smarty_function_hook(array('run'=>'copyright'),$_smarty_tpl);?>
<br />
        Дизайн &mdash; <a href="http://koulikov.com/">Кирилл Куликов</a>
    </div>

  	<ul class="pages">
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='blog'){?>class="active"<?php }?>><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_title'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='blogs'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='people'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people'];?>
</a></li>
		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?><li <?php if ($_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value=='add'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add" style="color:#FF4242"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['header_add'];?>
</a></li><?php }?>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='stream'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu'];?>
</a></li>

		<?php echo smarty_function_hook(array('run'=>'main_menu_item'),$_smarty_tpl);?>

  	</ul>

  	<?php echo smarty_function_hook(array('run'=>'footer_end'),$_smarty_tpl);?>

  </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('toolbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo smarty_function_hook(array('run'=>'body_end'),$_smarty_tpl);?>


</body>
</html><?php }} ?>