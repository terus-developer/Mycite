<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 17:12:32
         compiled from "/srv/www/livestreet/templates/skin/justsimple/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85841080755f6d5d0b26bb2-69341177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f20793bcc69b45f356296f1963c09db306a8eee' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/justsimple/nav.tpl',
      1 => 1442239840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85841080755f6d5d0b26bb2-69341177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'aMenuContainers' => 0,
    'aMenuFetch' => 0,
    'sAction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d5d0b36243_12482044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d5d0b36243_12482044')) {function content_55f6d5d0b36243_12482044($_smarty_tpl) {?>
    <div id="nav">
		<?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
			<?php if (in_array($_smarty_tpl->tpl_vars['menu']->value,$_smarty_tpl->tpl_vars['aMenuContainers']->value)){?><?php echo $_smarty_tpl->tpl_vars['aMenuFetch']->value[$_smarty_tpl->tpl_vars['menu']->value];?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
        <?php }elseif($_smarty_tpl->tpl_vars['sAction']->value=='talk'){?>
            <?php echo $_smarty_tpl->getSubTemplate ("menu.talk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
    </div>
<?php }} ?>