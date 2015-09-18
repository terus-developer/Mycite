<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 17:32:17
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionAdmin/user_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116721642355f6da719fa049-02212148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb54d1a24bf8563ee37706e7123cee7e869d357c' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/actions/ActionAdmin/user_fields.tpl',
      1 => 1441978725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116721642355f6da719fa049-02212148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aUserFieldTypes' => 0,
    'sFieldType' => 0,
    'aUserFields' => 0,
    'oField' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6da71a4d233_29389174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6da71a4d233_29389174')) {function content_55f6da71a4d233_29389174($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_field_admin_title'];?>
</h2>


<div class="modal" id="userfield_form">
	<header class="modal-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_field_admin_title_add'];?>
</h3>
		<a href="#" class="close jqmClose"></a>
	</header>

	<form class="modal-content">
		<p><label for="user_fields_form_type"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfield_form_type'];?>
:</label>
		<select id="user_fields_form_type" class="input-text input-width-full">
			<option value=""></option>
			<?php  $_smarty_tpl->tpl_vars['sFieldType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sFieldType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUserFieldTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sFieldType']->key => $_smarty_tpl->tpl_vars['sFieldType']->value){
$_smarty_tpl->tpl_vars['sFieldType']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['sFieldType']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sFieldType']->value;?>
</option>
			<?php } ?>
		</select></p>

		<p><label for="user_fields_form_name"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfield_form_name'];?>
:</label>
		<input type="text" id="user_fields_form_name" class="input-text input-width-full" /></p>
		
		<p><label for="user_fields_form_title"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfield_form_title'];?>
:</label>
		<input type="text" id="user_fields_form_title" class="input-text input-width-full" /></p>
		
		<p><label for="user_fields_form_pattern"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfield_form_pattern'];?>
:</label>
		<input type="text" id="user_fields_form_pattern" class="input-text input-width-full" /></p>
		
		<input type="hidden" id="user_fields_form_action" />
		<input type="hidden" id="user_fields_form_id" />
		
		<button type="button" onclick="ls.userfield.applyForm(); return false;" class="button button-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_field_add'];?>
</button>
	</form>
</div>

 
<a href="javascript:ls.userfield.showAddForm()" class="link-dotted" id="userfield_form_show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_field_add'];?>
</a>
<br /><br />

<ul class="userfield-list" id="user_field_list">
	<?php  $_smarty_tpl->tpl_vars['oField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUserFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oField']->key => $_smarty_tpl->tpl_vars['oField']->value){
$_smarty_tpl->tpl_vars['oField']->_loop = true;
?>
		<li id="field_<?php echo $_smarty_tpl->tpl_vars['oField']->value->getId();?>
"><strong class="userfield_admin_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oField']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>
</strong>
			/ <span class="userfield_admin_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oField']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</span>
            / <span class="userfield_admin_type"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oField']->value->getType(), ENT_QUOTES, 'UTF-8', true);?>
</span>
            / <span class="userfield_admin_pattern"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oField']->value->getPattern(), ENT_QUOTES, 'UTF-8', true);?>
</span>

			<div class="userfield-actions">
				<a href="javascript:ls.userfield.showEditForm(<?php echo $_smarty_tpl->tpl_vars['oField']->value->getId();?>
)" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_field_update'];?>
" class="icon-edit"></a> 
				<a href="javascript:ls.userfield.deleteUserfield(<?php echo $_smarty_tpl->tpl_vars['oField']->value->getId();?>
)" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_field_delete'];?>
" class="icon-remove"></a>
			</div>
		</li>
	<?php } ?>
</ul>
	

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>