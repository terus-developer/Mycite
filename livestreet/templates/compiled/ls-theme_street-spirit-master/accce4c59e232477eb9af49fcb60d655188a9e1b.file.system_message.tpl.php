<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 12:58:54
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/system_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172069695755f69a5e3b2848-69344813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'accce4c59e232477eb9af49fcb60d655188a9e1b' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/system_message.tpl',
      1 => 1441978718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172069695755f69a5e3b2848-69344813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noShowSystemMessage' => 0,
    'aMsgError' => 0,
    'aMsg' => 0,
    'aMsgNotice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f69a5e3cda78_82370461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f69a5e3cda78_82370461')) {function content_55f69a5e3cda78_82370461($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['noShowSystemMessage']->value){?>
	<?php if ($_smarty_tpl->tpl_vars['aMsgError']->value){?>
		<ul class="system-message-error">
			<?php  $_smarty_tpl->tpl_vars['aMsg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aMsg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aMsgError']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aMsg']->key => $_smarty_tpl->tpl_vars['aMsg']->value){
$_smarty_tpl->tpl_vars['aMsg']->_loop = true;
?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['aMsg']->value['title']!=''){?>
						<strong><?php echo $_smarty_tpl->tpl_vars['aMsg']->value['title'];?>
</strong>:
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['aMsg']->value['msg'];?>

				</li>
			<?php } ?>
		</ul>
	<?php }?>


	<?php if ($_smarty_tpl->tpl_vars['aMsgNotice']->value){?>
		<ul class="system-message-notice">
			<?php  $_smarty_tpl->tpl_vars['aMsg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aMsg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aMsgNotice']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aMsg']->key => $_smarty_tpl->tpl_vars['aMsg']->value){
$_smarty_tpl->tpl_vars['aMsg']->_loop = true;
?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['aMsg']->value['title']!=''){?>
						<strong><?php echo $_smarty_tpl->tpl_vars['aMsg']->value['title'];?>
</strong>:
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['aMsg']->value['msg'];?>

				</li>
			<?php } ?>
		</ul>
	<?php }?>
<?php }?><?php }} ?>