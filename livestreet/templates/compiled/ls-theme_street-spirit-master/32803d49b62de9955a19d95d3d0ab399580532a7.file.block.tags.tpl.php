<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 15:22:47
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/blocks/block.tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51022752355f6bc17582729-60182310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32803d49b62de9955a19d95d3d0ab399580532a7' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/blocks/block.tags.tpl',
      1 => 1441978722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51022752355f6bc17582729-60182310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'oUserCurrent' => 0,
    'aTags' => 0,
    'oTag' => 0,
    'aTagsUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6bc175b4044_60493223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6bc175b4044_60493223')) {function content_55f6bc175b4044_60493223($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?><section class="block block-type-tags">
	<header class="block-header sep">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_tags'];?>
</h3>
		
		<ul class="nav nav-pills">
			<li class="active js-block-tags-item" data-type="all"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_favourite_tags_block_all'];?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
				<li class="js-block-tags-item" data-type="user"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_favourite_tags_block_user'];?>
</a></li>
			<?php }?>

			<?php echo smarty_function_hook(array('run'=>'block_tags_nav_item'),$_smarty_tpl);?>

		</ul>
	</header>
	
	
	<div class="block-content">
		<form action="" method="GET" class="js-tag-search-form search-form-wrapper">
			<div class="search-input-wrapper">
				<input type="text" name="tag" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_tags_search'];?>
" value="" class="input-text input-width-full autocomplete-tags js-tag-search" />
				<div class="input-submit" onclick="jQuery('.js-tag-search-form').submit()"></div>
			</div>
		</form>

		<div class="js-block-tags-content" data-type="all">
			<?php if ($_smarty_tpl->tpl_vars['aTags']->value){?>
				<ul class="tag-cloud word-wrap">
					<?php  $_smarty_tpl->tpl_vars['oTag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aTags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oTag']->key => $_smarty_tpl->tpl_vars['oTag']->value){
$_smarty_tpl->tpl_vars['oTag']->_loop = true;
?>
						<li><a class="tag-size-<?php echo $_smarty_tpl->tpl_vars['oTag']->value->getSize();?>
" href="<?php echo smarty_function_router(array('page'=>'tag'),$_smarty_tpl);?>
<?php echo rawurlencode($_smarty_tpl->tpl_vars['oTag']->value->getText());?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTag']->value->getText(), ENT_QUOTES, 'UTF-8', true);?>
</a></li>
					<?php } ?>
				</ul>
			<?php }else{ ?>
				<div class="notice-empty"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_tags_empty'];?>
</div>
			<?php }?>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
			<div class="js-block-tags-content" data-type="user" style="display: none;">
				<?php if ($_smarty_tpl->tpl_vars['aTagsUser']->value){?>
					<ul class="tag-cloud word-wrap">
						<?php  $_smarty_tpl->tpl_vars['oTag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aTagsUser']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oTag']->key => $_smarty_tpl->tpl_vars['oTag']->value){
$_smarty_tpl->tpl_vars['oTag']->_loop = true;
?>
							<li><a class="tag-size-<?php echo $_smarty_tpl->tpl_vars['oTag']->value->getSize();?>
" href="<?php echo smarty_function_router(array('page'=>'tag'),$_smarty_tpl);?>
<?php echo rawurlencode($_smarty_tpl->tpl_vars['oTag']->value->getText());?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTag']->value->getText(), ENT_QUOTES, 'UTF-8', true);?>
</a></li>
						<?php } ?>
					</ul>
					<?php }else{ ?>
					<div class="notice-empty"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_tags_empty'];?>
</div>
				<?php }?>
			</div>
		<?php }?>
	</div>
</section><?php }} ?>