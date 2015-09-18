<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 17:12:32
         compiled from "/srv/www/livestreet/templates/skin/justsimple/blocks/block.search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163478731955f6d5d0f1c073-88764593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5268621724f57fea2c03e1f1274c7cd9078e904f' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/justsimple/blocks/block.search.tpl',
      1 => 1442239843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163478731955f6d5d0f1c073-88764593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d5d0f2d0c1_44812410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d5d0f2d0c1_44812410')) {function content_55f6d5d0f2d0c1_44812410($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?><section class="block search">

    <header class="block-header">
        <h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_search_h2'];?>
</h3>
    </header>
    
	<form action="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
topics/" method="GET" class="search">
    	<input class="text" type="text" onblur="if (!value) value=defaultValue" onclick="if (value==defaultValue) value=''" value="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_search_find'];?>
" name="q" />
    	<input class="search-submit" type="submit" value="" />
    </form>
</section><?php }} ?>