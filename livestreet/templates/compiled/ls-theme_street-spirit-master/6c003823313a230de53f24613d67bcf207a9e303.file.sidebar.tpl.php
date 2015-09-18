<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 23:45:52
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionPeople/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137716346055f73200c63d08-39989788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c003823313a230de53f24613d67bcf207a9e303' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionPeople/sidebar.tpl',
      1 => 1441978726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137716346055f73200c63d08-39989788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aStat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f73200c83ee0_65527544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f73200c83ee0_65527544')) {function content_55f73200c83ee0_65527544($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_insert_block')) include '/srv/www/livestreet/engine/modules/viewer/plugs/insert.block.php';
?><?php echo smarty_function_hook(array('run'=>'people_sidebar_begin'),$_smarty_tpl);?>

<section class="block">
	<header class="block-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_stats'];?>
</h3>
	</header>
	
	
	<div class="block-content">
		<ul>
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_stats_all'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['aStat']->value['count_all'];?>
</strong></li>
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_stats_active'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['aStat']->value['count_active'];?>
</strong></li>
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_stats_noactive'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['aStat']->value['count_inactive'];?>
</strong></li>
		</ul>
		
		<br />
		
		<ul>
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_stats_sex_man'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['aStat']->value['count_sex_man'];?>
</strong></li>
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_stats_sex_woman'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['aStat']->value['count_sex_woman'];?>
</strong></li>
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_stats_sex_other'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['aStat']->value['count_sex_other'];?>
</strong></li>
		</ul>
	</div>
</section>


<?php echo smarty_insert_block(array('block' => 'tagsCountry'),$_smarty_tpl);?>

<?php echo smarty_insert_block(array('block' => 'tagsCity'),$_smarty_tpl);?>


<?php echo smarty_function_hook(array('run'=>'people_sidebar_end'),$_smarty_tpl);?>
<?php }} ?>