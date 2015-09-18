<?php /* Smarty version Smarty-3.1.8, created on 2015-09-11 16:18:30
         compiled from "/srv/www/livestreet/templates/skin/coder/topic_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64021190555f2d4a66ce576-80448173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '378260a40a0e60435d577329a75641f7a1c35f37' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/coder/topic_list.tpl',
      1 => 1441974722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64021190555f2d4a66ce576-80448173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTopics' => 0,
    'oTopic' => 0,
    'oVote' => 0,
    'oUserCurrent' => 0,
    'oConfig' => 0,
    'aLang' => 0,
    'oBlog' => 0,
    'bVoteInfoShow' => 0,
    'aPaging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f2d4a679df96_22940873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2d4a679df96_22940873')) {function content_55f2d4a679df96_22940873($_smarty_tpl) {?><?php if (!is_callable('smarty_function_add_block')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.add_block.php';
if (!is_callable('smarty_modifier_declension')) include '/srv/www/livestreet/engine/modules/viewer/plugs/modifier.declension.php';
if (!is_callable('smarty_modifier_truncate')) include '/srv/www/livestreet/engine/lib/external/Smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_hook')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_date_format')) include '/srv/www/livestreet/engine/modules/viewer/plugs/function.date_format.php';
?><?php if (count($_smarty_tpl->tpl_vars['aTopics']->value)>0){?>
	<?php echo smarty_function_add_block(array('group'=>'toolbar','name'=>'toolbar_topic.tpl','iCountTopic'=>count($_smarty_tpl->tpl_vars['aTopics']->value)),$_smarty_tpl);?>


<ul class="topic-list">
	<?php  $_smarty_tpl->tpl_vars['oTopic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTopic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aTopics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oTopic']->key => $_smarty_tpl->tpl_vars['oTopic']->value){
$_smarty_tpl->tpl_vars['oTopic']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars["countRead"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getCountRead(), null, 0);?>	
		<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>
		<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getUser(), null, 0);?>
		<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getVote(), null, 0);?>

	<?php if ($_smarty_tpl->tpl_vars['oVote']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())||strtotime($_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd())<time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.topic.limit_time')){?>
		<?php $_smarty_tpl->tpl_vars["bVoteInfoShow"] = new Smarty_variable(true, null, 0);?>
	<?php }?>

		<li class="topic-short">
			<a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#comments" class="answers"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountComment();?>
<p><?php echo smarty_modifier_declension($_smarty_tpl->tpl_vars['oTopic']->value->getCountComment(),$_smarty_tpl->tpl_vars['aLang']->value['comment_declension'],'russian');?>
</p></a>

			<div class="topic-blog"><a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getAvatarPath(48);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
" class="avatar"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a></div>
			<div class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a></div>
			<div class="desc"><?php echo htmlspecialchars(smarty_modifier_truncate(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['oTopic']->value->getText())),250,'...'), ENT_QUOTES, 'UTF-8', true);?>
</div>
			<div class="info">
				<div id="vote_area_topic_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" class="vote
																	<?php if ($_smarty_tpl->tpl_vars['oVote']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())||strtotime($_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd())<time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.topic.limit_time')){?>
																		<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getRating()>0){?>
																			vote-count-positive
																		<?php }elseif($_smarty_tpl->tpl_vars['oTopic']->value->getRating()<0){?>
																			vote-count-negative
																		<?php }elseif($_smarty_tpl->tpl_vars['oTopic']->value->getRating()==0){?>
																			vote-count-zero
																		<?php }?>
																	<?php }?>
																	
																	<?php if (!$_smarty_tpl->tpl_vars['oUserCurrent']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()!=$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
																		vote-not-self
																	<?php }?>
																	
																	<?php if ($_smarty_tpl->tpl_vars['oVote']->value){?> 
																		voted
																		
																		<?php if ($_smarty_tpl->tpl_vars['oVote']->value->getDirection()>0){?>
																			voted-up
																		<?php }elseif($_smarty_tpl->tpl_vars['oVote']->value->getDirection()<0){?>
																			voted-down
																		<?php }elseif($_smarty_tpl->tpl_vars['oVote']->value->getDirection()==0){?>
																			voted-zero
																		<?php }?>
																	<?php }else{ ?>
																		not-voted
																	<?php }?>
																	
																	<?php if ((strtotime($_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd())<time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.topic.limit_time')&&!$_smarty_tpl->tpl_vars['oVote']->value)||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
																		vote-nobuttons
																	<?php }?>
																	
																	<?php if (strtotime($_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd())>time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.topic.limit_time')){?>
																		vote-not-expired
																	<?php }?>

																	<?php if ($_smarty_tpl->tpl_vars['bVoteInfoShow']->value){?>js-infobox-vote-topic<?php }?>">
					<div class="vote-item vote-up" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,this,1,'topic');"><i class="fa fa-arrow-up"></i></div>
					
					<div class="vote-item vote-count" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_vote_count'];?>
: <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVote();?>
">
						<span id="vote_total_topic_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
">
							<?php if ($_smarty_tpl->tpl_vars['bVoteInfoShow']->value){?>
								<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getRating();?>

							<?php }else{ ?>
								&mdash;
							<?php }?>
						</span>
					</div>
					
					<?php if ($_smarty_tpl->tpl_vars['bVoteInfoShow']->value){?>
						<div id="vote-info-topic-<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" style="display: none;">
							<ul class="vote-topic-info">
								<li><i class="icon-synio-vote-info-up"></i> <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVoteUp();?>
</li>
								<li><i class="icon-synio-vote-info-down"></i> <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVoteDown();?>
</li>
								<li><i class="icon-synio-vote-info-zero"></i> <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVoteAbstain();?>
</li>
								<?php echo smarty_function_hook(array('run'=>'topic_show_vote_stats','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>

							</ul>
						</div>
					<?php }?>
					<div class="vote-item vote-down" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,this,-1,'topic');"><i class="fa fa-arrow-down"></i></div>
				</div>

				<time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'format'=>'c'),$_smarty_tpl);?>
" title="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'format'=>'j F Y, H:i'),$_smarty_tpl);?>
">
					<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>

				</time>
				•
				<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountRead();?>
 <?php echo smarty_modifier_declension($_smarty_tpl->tpl_vars['oTopic']->value->getCountRead(),$_smarty_tpl->tpl_vars['aLang']->value['comment_read'],'russian');?>

			</div>
		</li>
	<?php } ?>
</ul>

	<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_no_topic'];?>

<?php }?><?php }} ?>