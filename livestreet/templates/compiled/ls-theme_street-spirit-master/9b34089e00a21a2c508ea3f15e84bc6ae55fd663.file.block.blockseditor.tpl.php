<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 15:22:47
         compiled from "/srv/www/livestreet/plugins/blockseditor/templates/skin/default/blocks/block.blockseditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14408236855f6bc174e1675-35929776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b34089e00a21a2c508ea3f15e84bc6ae55fd663' => 
    array (
      0 => '/srv/www/livestreet/plugins/blockseditor/templates/skin/default/blocks/block.blockseditor.tpl',
      1 => 1442223158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14408236855f6bc174e1675-35929776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6bc174e4fb1_57828411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6bc174e4fb1_57828411')) {function content_55f6bc174e4fb1_57828411($_smarty_tpl) {?>
  <!-- Blockseditor plugin -->
  <div class="block Blockseditor">
    <?php echo $_smarty_tpl->tpl_vars['oConfig']->value->GetValue("plugin.blockseditor.Block_Content");?>

  </div>
  <!-- /Blockseditor plugin -->
<?php }} ?>