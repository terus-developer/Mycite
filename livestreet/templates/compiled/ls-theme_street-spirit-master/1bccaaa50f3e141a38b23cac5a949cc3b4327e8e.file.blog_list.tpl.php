<?php /* Smarty version Smarty-3.1.8, created on 2015-09-14 15:47:32
         compiled from "/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/blog_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80042662555f6c1e4b4ecd0-79952680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bccaaa50f3e141a38b23cac5a949cc3b4327e8e' => 
    array (
      0 => '/srv/www/livestreet/templates/skin/ls-theme_street-spirit-master/blog_list.tpl',
      1 => 1441978716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80042662555f6c1e4b4ecd0-79952680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bBlogsUseOrder' => 0,
    'sBlogOrder' => 0,
    'sBlogsRootPage' => 0,
    'sBlogOrderWayNext' => 0,
    'sBlogOrderWay' => 0,
    'aLang' => 0,
    'oUserCurrent' => 0,
    'aBlogs' => 0,
    'oBlog' => 0,
    'oUserOwner' => 0,
    'sBlogsEmptyList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f6c1e4bcf1f1_66275452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f6c1e4bcf1f1_66275452')) {function content_55f6c1e4bcf1f1_66275452($_smarty_tpl) {?><table class="table table-blogs" cellspacing="0">
	<?php if ($_smarty_tpl->tpl_vars['bBlogsUseOrder']->value){?>
		<thead>
			<tr>
				<th class="cell-info">&nbsp;</th>
				<th class="cell-name cell-tab">
					<div class="cell-tab-inner <?php if ($_smarty_tpl->tpl_vars['sBlogOrder']->value=='blog_title'){?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['sBlogsRootPage']->value;?>
?order=blog_title&order_way=<?php if ($_smarty_tpl->tpl_vars['sBlogOrder']->value=='blog_title'){?><?php echo $_smarty_tpl->tpl_vars['sBlogOrderWayNext']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['sBlogOrderWay']->value;?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['sBlogOrder']->value=='blog_title'){?>class="<?php echo $_smarty_tpl->tpl_vars['sBlogOrderWay']->value;?>
"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs_title'];?>
</span></a></div>
				</th>

				<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
					<th class="cell-join">&nbsp;</th>
				<?php }?>

				<th class="cell-readers cell-tab">
					<div class="cell-tab-inner <?php if ($_smarty_tpl->tpl_vars['sBlogOrder']->value=='blog_count_user'){?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['sBlogsRootPage']->value;?>
?order=blog_count_user&order_way=<?php if ($_smarty_tpl->tpl_vars['sBlogOrder']->value=='blog_count_user'){?><?php echo $_smarty_tpl->tpl_vars['sBlogOrderWayNext']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['sBlogOrderWay']->value;?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['sBlogOrder']->value=='blog_count_user'){?>class="<?php echo $_smarty_tpl->tpl_vars['sBlogOrderWay']->value;?>
"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs_readers'];?>
</span></a></div>
				</th>
				<th class="cell-rating cell-tab align-center">
					<div class="cell-tab-inner <?php if ($_smarty_tpl->tpl_vars['sBlogOrder']->value=='blog_rating'){?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['sBlogsRootPage']->value;?>
?order=blog_rating&order_way=<?php if ($_smarty_tpl->tpl_vars['sBlogOrder']->value=='blog_rating'){?><?php echo $_smarty_tpl->tpl_vars['sBlogOrderWayNext']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['sBlogOrderWay']->value;?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['sBlogOrder']->value=='blog_rating'){?>class="<?php echo $_smarty_tpl->tpl_vars['sBlogOrderWay']->value;?>
"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs_rating'];?>
</span></a></div>
				</th>
			</tr>
		</thead>
	<?php }else{ ?>
		<thead>
			<tr>
				<th class="cell-info">&nbsp;</th>
				<th class="cell-name cell-tab"><div class="cell-tab-inner"><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs_title'];?>
</span></div></th>

				<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
					<th class="cell-join">&nbsp;</th>
				<?php }?>

				<th class="cell-readers cell-tab"><div class="cell-tab-inner"><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs_readers'];?>
</span></div></th>
				<th class="cell-rating cell-tab align-center">
					<div class="cell-tab-inner active"><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs_rating'];?>
</span></div>
				</th>
			</tr>
		</thead>
	<?php }?>
	
	
	<tbody>
		<?php if ($_smarty_tpl->tpl_vars['aBlogs']->value){?>
			<?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
$_smarty_tpl->tpl_vars['oBlog']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars["oUserOwner"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlog']->value->getOwner(), null, 0);?>

				<tr>
					<td class="cell-info">
						<a href="#" onclick="return ls.infobox.showInfoBlog(this,<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
);" class="blog-list-info"></a>
					</td>
					<td class="cell-name">
						<p>
							<a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
" class="blog-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
							
							<?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getType()=='close'){?>
								<i title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_closed'];?>
" class="icon-synio-topic-private"></i>
							<?php }?>
						</p>
						
						<span class="user-avatar">
							<a href="<?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getProfileAvatarPath(24);?>
" alt="avatar" /></a>
							<a href="<?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getLogin();?>
</a>
						</span>
					</td>

					<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
						<td class="cell-join">
							<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()&&$_smarty_tpl->tpl_vars['oBlog']->value->getType()=='open'){?>
								<button type="submit"  onclick="ls.blog.toggleJoin(this, <?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
); return false;" class="read_blog <?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getUserIsJoin()){?>active<?php }?>">
									<span><?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getUserIsJoin()){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_leave'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_join'];?>
<?php }?></span>
								</button>
							<?php }else{ ?>
								&mdash;
							<?php }?>
						</td>
					<?php }?>

					<td class="cell-readers" id="blog_user_count_<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getCountUser();?>
</td>
					<td class="cell-rating align-center <?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getRating()<0){?>negative<?php }?>"><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getRating();?>
</td>
				</tr>
			<?php } ?>
		<?php }else{ ?>
			<tr>
				<td colspan="5">
					<?php if ($_smarty_tpl->tpl_vars['sBlogsEmptyList']->value){?>
						<?php echo $_smarty_tpl->tpl_vars['sBlogsEmptyList']->value;?>

					<?php }else{ ?>

					<?php }?>
				</td>
			</tr>
		<?php }?>
	</tbody>
</table><?php }} ?>