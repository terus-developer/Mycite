<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 15:21:20
         compiled from "/srv/www/livestreet/templates/skin/lugree/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40734864455f2c74009d882-55315788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a973249e0513c868c10ac13bc94f3fc17f6793fe' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/lugree/footer.tpl',
      1 => 1441973967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40734864455f2c74009d882-55315788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2c7400c9532_13386212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2c7400c9532_13386212')) {function content_55f2c7400c9532_13386212($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?>			<?php echo smarty_function_hook(array('run'=>'content_end'),$_smarty_tpl);?>

		</div> <!-- /content -->
	</div> <!-- /wrapper -->
</div> <!-- /container -->
<footer id="footer">
   <div class="inside">
        <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
        <ul class="footer-list">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['footer_menu_user_profile'];?>
</a></li>
            <li><a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
profile/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_settings'];?>
</a></li>
            <li><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/" class="js-write-window-show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create'];?>
</a></li>
            <?php echo smarty_function_hook(array('run'=>'footer_menu_user_item','oUser'=>$_smarty_tpl->tpl_vars['oUserCurrent']->value),$_smarty_tpl);?>

            <li><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
exit/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['exit'];?>
</a></li>
        </ul>
        <?php }else{ ?>
           <ul class="auth footer-list">
               <?php echo smarty_function_hook(array('run'=>'userbar_item'),$_smarty_tpl);?>

               <li><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
" class="js-login-form-show sign-in button button-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_submit'];?>
</a></li>
               <li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['header_or'];?>
</li>
               <li><a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
" class="js-registration-form-show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_submit'];?>
</a></li>
           </ul>
        <?php }?>

       <div class="powered">
           <?php echo smarty_function_hook(array('run'=>'copyright'),$_smarty_tpl);?>

       </div>

       


        
        

        

        <div class="copyright">
            <div class="design-by">
                <?php echo $_smarty_tpl->tpl_vars['aLang']->value['design_by'];?>
 <a href="http://stfalcon.com"><span class="icon-stfalcon"></span>stfalcon.com</a>
            </div>
        </div>
        <?php echo smarty_function_hook(array('run'=>'footer_end'),$_smarty_tpl);?>

   </div>
</footer>

<?php echo $_smarty_tpl->getSubTemplate ('toolbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo smarty_function_hook(array('run'=>'body_end'),$_smarty_tpl);?>


</body>
</html><?php }} ?>