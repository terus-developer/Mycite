{if $aUsersList}
<ul class="user-list">
	{foreach from=$aUsersList item=oUserList}
		{assign var="oSession" value=$oUserList->getSession()}
		{assign var="oUserNote" value=$oUserList->getUserNote()}
		<li class="card">
			<div class="card-in">
				<a href="{$oUserList->getUserWebPath()}"><img src="{$oUserList->getProfileAvatarPath(48)}" alt="avatar" class="avatar" /></a>
				<div class="nickname"><a href="{$oUserList->getUserWebPath()}">{$oUserList->getLogin()}</a></div>
				<p class="realname">{if $oUserList->getProfileName()}{$oUserList->getProfileName()}{else}&nbsp;{/if}</p>

				<div class="info">
					<a href="{$oUserList->getUserWebPath()}created/topics/">{$aLang.qa}</a>
					•
					<a href="{$oUserList->getUserWebPath()}created/comments/">{$aLang.answ}</a>
				</div>
				{if $oSession}<p class="realname" style="padding-top:0">{$aLang.was_come} {date_format date=$oSession->getDateLast()}</p>{else}<p class="realname" style="padding-top:0">{$aLang.reg_now}</p>{/if}
			</div>
		</li>
	{/foreach}
</ul>	
{else}
<p style="font-size:15px">{$aLang.none}</p>
{/if}

{include file='paging.tpl' aPaging=$aPaging}