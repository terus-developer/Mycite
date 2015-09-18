<?php /* Smarty version Smarty-3.1.8, created on 2015-09-15 01:02:37
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionSearch/opensearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111050397355f743fd406fc8-82794513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fcd00945dd54dea564931454b7c68c14a92b4c8' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionSearch/opensearch.tpl',
      1 => 1441978728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111050397355f743fd406fc8-82794513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sHtmlTitle' => 0,
    'sAdminMail' => 0,
    'sHtmlDescription' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f743fd63ea92_80828749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f743fd63ea92_80828749')) {function content_55f743fd63ea92_80828749($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.router.php';
?><OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/"> 
	<ShortName><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</ShortName> 
	<Description><?php echo $_smarty_tpl->tpl_vars['sHtmlTitle']->value;?>
</Description> 
	<Contact><?php echo $_smarty_tpl->tpl_vars['sAdminMail']->value;?>
</Contact> 
	<Url type="text/html" template="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
topics/?q={searchTerms}" /> 
	<LongName><?php echo $_smarty_tpl->tpl_vars['sHtmlDescription']->value;?>
</LongName> 
	<Image height="64" width="64" type="image/png"><?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/logo.png</Image> 
	<Image height="16" width="16" type="image/vnd.microsoft.icon"><?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/favicon.ico</Image> 
	<Developer><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
 (<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
)</Developer> 
	<Attribution> 
		© «<?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
»
	</Attribution> 
	<SyndicationRight>open</SyndicationRight> 
	<AdultContent>false</AdultContent> 
	<Language>ru-ru</Language> 
	<OutputEncoding>UTF-8</OutputEncoding> 
	<InputEncoding>UTF-8</InputEncoding> 
</OpenSearchDescription><?php }} ?>