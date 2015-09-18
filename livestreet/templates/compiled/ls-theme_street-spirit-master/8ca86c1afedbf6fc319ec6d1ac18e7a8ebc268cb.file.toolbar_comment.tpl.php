<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 16:52:42
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/toolbar_comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207014832455f6d12a8a6b33-45619988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ca86c1afedbf6fc319ec6d1ac18e7a8ebc268cb' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/toolbar_comment.tpl',
      1 => 1441978719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207014832455f6d12a8a6b33-45619988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'params' => 0,
    'aPagingCmt' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d12a8bd1c1_40845562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d12a8bd1c1_40845562')) {function content_55f6d12a8bd1c1_40845562($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
	<?php $_smarty_tpl->tpl_vars['aPagingCmt'] = new Smarty_variable($_smarty_tpl->tpl_vars['params']->value['aPagingCmt'], null, 0);?>
	<section class="toolbar-update" id="update" style="<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value&&$_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage']>1){?>display: none;<?php }?>">
		<a href="#" class="update-comments" id="update-comments" onclick="ls.comments.load(<?php echo $_smarty_tpl->tpl_vars['params']->value['iTargetId'];?>
,'<?php echo $_smarty_tpl->tpl_vars['params']->value['sTargetType'];?>
'); return false;"><i></i></a>
		<a href="#" class="new-comments" id="new_comments_counter" style="display: none;" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_count_new'];?>
" onclick="ls.comments.goToNextComment(); return false;"></a>

		<input type="hidden" id="comment_last_id" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['iMaxIdComment'];?>
" />
		<input type="hidden" id="comment_use_paging" value="<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value&&$_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage']>1){?>1<?php }?>" />
	</section>
<?php }?>
	
<?php }} ?>