<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 17:12:33
         compiled from "/srv/www/livestreet/templates/skin/justsimple/blocks/block.blogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81941158455f6d5d100fbf3-64140463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '523b82b0a4e36b7271983dfbb1bd06c641635e78' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/justsimple/blocks/block.blogs.tpl',
      1 => 1442239843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81941158455f6d5d100fbf3-64140463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'oUserCurrent' => 0,
    'sBlogsTop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d5d101eb70_89801492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d5d101eb70_89801492')) {function content_55f6d5d101eb70_89801492($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?><div class="block block-type-blogs" id="block_blogs">
	<header class="block-header sep">
    	<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs'];?>
<div class="block-update js-block-blogs-update"></div></h3>

        <div class="main-switch">
    		<ul class="nav-pills js-block-blogs-nav">
    			<li class="active js-block-blogs-item" data-type="top"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs_top'];?>
</a></li>
    			<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
    				<li class="js-block-blogs-item" data-type="join"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs_join'];?>
</a></li>
    				<li class="js-block-blogs-item" data-type="self"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs_self'];?>
</a></li>
    			<?php }?>
    		</ul>
        </div>
	</header>  
	
	<div class="block-content">
		
		<div class="js-block-blogs-content">
			<?php echo $_smarty_tpl->tpl_vars['sBlogsTop']->value;?>

		</div>


		<footer>
			<a href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blogs_all'];?>
</a>
		</footer>
	</div>
</div>
<?php }} ?>