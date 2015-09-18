<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 16:52:42
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204900610955f6d12a7a1eb0-25580966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '283dc575753a9c9d6587d6e41d61c844d0e8b29b' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/topic.tpl',
      1 => 1441978719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204900610955f6d12a7a1eb0-25580966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'LS' => 0,
    'sTopicTemplateName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6d12a7aec25_76014114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6d12a7aec25_76014114')) {function content_55f6d12a7aec25_76014114($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['LS']->value->Topic_IsAllowTopicType($_smarty_tpl->tpl_vars['oTopic']->value->getType())){?>
	<?php $_smarty_tpl->tpl_vars["sTopicTemplateName"] = new Smarty_variable("topic_".($_smarty_tpl->tpl_vars['oTopic']->value->getType()).".tpl", null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['sTopicTemplateName']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>