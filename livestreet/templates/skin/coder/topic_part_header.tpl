{assign var="oBlog" value=$oTopic->getBlog()}
{assign var="oUser" value=$oTopic->getUser()}
{assign var="oVote" value=$oTopic->getVote()}


<article class="topic topic-type-{$oTopic->getType()} js-topic">
	<header class="topic-header">
		<div class="about-author">
			<a href="{$oUser->getUserWebPath()}">
				<img src="{$oUser->getProfileAvatarPath(48)}" alt="{$oUser->getLogin()}" class="avatar">{$oUser->getLogin()}
			</a>
		</div>

		<div class="topic-blog">
			<a href="{$oBlog->getUrlFull()}"><img src="{$oBlog->getAvatarPath(48)}" alt="{$oBlog->getTitle()|escape:'html'}" class="avatar">{$oBlog->getTitle()|escape:'html'}</a>
{if $oTopic->getTagsArray()}		
<div class="tag">	<span>+</span>
					{foreach from=$oTopic->getTagsArray() item=sTag name=tags_list}
						{if !$smarty.foreach.tags_list.first}, {/if}<a rel="tag" href="{router page='tag'}{$sTag|escape:'url'}/">{$sTag|escape:'html'}</a>
					{/foreach}
				</div>
				{/if}
			</div>
			<div class="title">{$oTopic->getTitle()|escape:'html'}</div>
		
		{if $oUserCurrent and ($oUserCurrent->getId()==$oTopic->getUserId() or $oUserCurrent->isAdministrator() or $oBlog->getUserIsAdministrator() or $oBlog->getUserIsModerator() or $oBlog->getOwnerId()==$oUserCurrent->getId())}
			<ul class="topic-actions">								   
				{if $oUserCurrent and ($oUserCurrent->getId()==$oTopic->getUserId() or $oUserCurrent->isAdministrator() or $oBlog->getUserIsAdministrator() or $oBlog->getUserIsModerator() or $oBlog->getOwnerId()==$oUserCurrent->getId())}
					<li class="edit"><i class="icon-synio-actions-edit"></i><a href="{cfg name='path.root.web'}/{$oTopic->getType()}/edit/{$oTopic->getId()}/" title="{$aLang.topic_edit}" class="actions-edit">{$aLang.topic_edit}</a></li>
				{/if}
				
				{if $oUserCurrent and ($oUserCurrent->isAdministrator() or $oBlog->getUserIsAdministrator() or $oBlog->getOwnerId()==$oUserCurrent->getId())}
					<li class="delete"><i class="icon-synio-actions-delete"></i><a href="{router page='topic'}delete/{$oTopic->getId()}/?security_ls_key={$LIVESTREET_SECURITY_KEY}" title="{$aLang.topic_delete}" onclick="return confirm('{$aLang.topic_delete_confirm}');" class="actions-delete">{$aLang.topic_delete}</a></li>
				{/if}
			</ul>
		{/if}
	</header>