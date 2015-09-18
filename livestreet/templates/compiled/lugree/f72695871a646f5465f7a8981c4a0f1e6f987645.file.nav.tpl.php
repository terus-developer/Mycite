<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 15:21:20
         compiled from "/srv/www/livestreet/templates/skin/lugree/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114372193155f2c74005e4d4-34824364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f72695871a646f5465f7a8981c4a0f1e6f987645' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/lugree/nav.tpl',
      1 => 1441973967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114372193155f2c74005e4d4-34824364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'aMenuContainers' => 0,
    'aMenuFetch' => 0,
    'aLang' => 0,
    'usermenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2c7400724e7_73571082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2c7400724e7_73571082')) {function content_55f2c7400724e7_73571082($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?><div class="nav-wrapper">
    <nav id="nav">
        <?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
            <?php if (in_array($_smarty_tpl->tpl_vars['menu']->value,$_smarty_tpl->tpl_vars['aMenuContainers']->value)){?><?php echo $_smarty_tpl->tpl_vars['aMenuFetch']->value[$_smarty_tpl->tpl_vars['menu']->value];?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
        <?php }?>

        <div class="search-header">
            <form class="search-header-form" id="search-header-form" action="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
topics/">
                <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search'];?>
" maxlength="255" name="q" class="input-text">
                <input type="submit" value="" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
" class="input-submit">
            </form>
        </div>
    </nav>
    <?php echo $_smarty_tpl->getSubTemplate ('nav_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('usermenu'=>$_smarty_tpl->tpl_vars['usermenu']->value), 0);?>

</div><?php }} ?>