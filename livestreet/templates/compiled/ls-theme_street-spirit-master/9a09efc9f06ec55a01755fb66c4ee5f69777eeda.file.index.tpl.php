<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 16:51:36
         compiled from "/srv/www/livestreet/plugins/blockseditor/templates/skin/default/actions/ActionBlockseditor/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84593828955f6d0e8d29543-27159935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a09efc9f06ec55a01755fb66c4ee5f69777eeda' => 
    array (
      0 => '/srv/www/livestreet/plugins/blockseditor/templates/skin/default/actions/ActionBlockseditor/index.tpl',
      1 => 1442223160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84593828955f6d0e8d29543-27159935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'oConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d0e8d512c6_36795430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d0e8d512c6_36795430')) {function content_55f6d0e8d512c6_36795430($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?><?php $_smarty_tpl->tpl_vars["bNoSidebar"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <div class="BlockseditorEditor">
    <h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['blockseditor']['Title'];?>
</h2>
    
    <form action="<?php echo smarty_function_router(array('page'=>'blockseditor'),$_smarty_tpl);?>
" method="post" enctype="application/x-www-form-urlencoded">
      <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" />
      <textarea name="blockseditor" rows="20" class="input-text input-width-full"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oConfig']->value->GetValue("plugin.blockseditor.Block_Content"), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
      <br /><br />
      <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['blockseditor']['Priority'];?>
:
      <input type="text" name="priority" value="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->GetValue("plugin.blockseditor.Priority");?>
" class="input-text input-width-250" />
      <br /><br />
      <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['blockseditor']['ActionsToShow'];?>
:
      <input type="text" name="actions" value="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->GetValue("plugin.blockseditor.Actions");?>
" class="input-text input-width-250" />
      <br /><br />
      <input type="submit" name="submit_edit_block_content" value="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['blockseditor']['Submit'];?>
" class="button button-primary" />
    </form>

  </div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>