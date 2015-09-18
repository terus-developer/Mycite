<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 17:12:32
         compiled from "/srv/www/livestreet/templates/skin/justsimple/topic_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181901733655f6d5d0c327f6-28517334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '986d41637c90aa48ae7a7e469079b400d3a294cd' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/justsimple/topic_list.tpl',
      1 => 1442239841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181901733655f6d5d0c327f6-28517334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTopics' => 0,
    'oTopic' => 0,
    'LS' => 0,
    'sTopicTemplateName' => 0,
    'aPaging' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d5d0c505b7_09269021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d5d0c505b7_09269021')) {function content_55f6d5d0c505b7_09269021($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_block')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.add_block.php';
?><?php if (count($_smarty_tpl->tpl_vars['aTopics']->value)>0){?>
	<?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'toolbar_topic.tpl','iCountTopic'=>count($_smarty_tpl->tpl_vars['aTopics']->value)),$_smarty_tpl);?>


	<?php  $_smarty_tpl->tpl_vars['oTopic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTopic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aTopics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oTopic']->key => $_smarty_tpl->tpl_vars['oTopic']->value){
$_smarty_tpl->tpl_vars['oTopic']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['LS']->value->Topic_IsAllowTopicType($_smarty_tpl->tpl_vars['oTopic']->value->getType())){?>
			<?php $_smarty_tpl->tpl_vars["sTopicTemplateName"] = new Smarty_variable("topic_".($_smarty_tpl->tpl_vars['oTopic']->value->getType()).".tpl", null, 0);?>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['sTopicTemplateName']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bTopicList'=>true), 0);?>

		<?php }?>
	<?php } ?>

	<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_no_topic'];?>

<?php }?><?php }} ?>