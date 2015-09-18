<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 16:52:42
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionBlog/topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186176013355f6d12a6fd805-28706079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1121a355f4d27b7e81af91631a1e38a1396649c0' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionBlog/topic.tpl',
      1 => 1441978725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186176013355f6d12a6fd805-28706079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'aLang' => 0,
    'aPagingCmt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d12a71f5d7_84469269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d12a71f5d7_84469269')) {function content_55f6d12a71f5d7_84469269($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('topic.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('comment_tree.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('iTargetId'=>$_smarty_tpl->tpl_vars['oTopic']->value->getId(),'iAuthorId'=>$_smarty_tpl->tpl_vars['oTopic']->value->getUserId(),'sAuthorNotice'=>$_smarty_tpl->tpl_vars['aLang']->value['topic_author'],'sTargetType'=>'topic','iCountComment'=>$_smarty_tpl->tpl_vars['oTopic']->value->getCountComment(),'sDateReadLast'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateRead(),'bAllowNewComment'=>$_smarty_tpl->tpl_vars['oTopic']->value->getForbidComment(),'sNoticeNotAllow'=>$_smarty_tpl->tpl_vars['aLang']->value['topic_comment_notallow'],'sNoticeCommentAdd'=>$_smarty_tpl->tpl_vars['aLang']->value['topic_comment_add'],'bAllowSubscribe'=>true,'oSubscribeComment'=>$_smarty_tpl->tpl_vars['oTopic']->value->getSubscribeNewComment(),'aPagingCmt'=>$_smarty_tpl->tpl_vars['aPagingCmt']->value), 0);?>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>