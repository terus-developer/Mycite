<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 15:47:32
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionBlogs/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29156748055f6c1e4af7532-00434208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f0990f0843abe778b00586417abbfe9fabf1d3d' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionBlogs/index.tpl',
      1 => 1441978726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29156748055f6c1e4af7532-00434208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sBlogsRootPage' => 0,
    'aPaging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6c1e4b12030_73010014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6c1e4b12030_73010014')) {function content_55f6c1e4b12030_73010014($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sMenuHeadItemSelect'=>"blogs"), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs'];?>
</h2>

<form action="" method="POST" id="form-blogs-search" onsubmit="return false;" class="search-item">
	<div class="search-input-wrapper">
		<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs_search_title_hint'];?>
" autocomplete="off" name="blog_title" class="input-text" value="" onkeyup="ls.timer.run(ls.blog.searchBlogs,'blogs_search',['form-blogs-search'],1000);">
		<div class="input-submit" onclick="jQuery('#form-blogs-search').submit()"></div>
	</div>
</form>

<div id="blogs-list-search" style="display:none;"></div>

<div id="blogs-list-original">
	<?php echo smarty_function_router(array('page'=>'blogs','assign'=>'sBlogsRootPage'),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSubTemplate ('blog_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bBlogsUseOrder'=>true,'sBlogsRootPage'=>$_smarty_tpl->tpl_vars['sBlogsRootPage']->value), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>