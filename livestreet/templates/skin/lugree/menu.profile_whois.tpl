<ul class="nav nav-pills nav-pills-profile">
	<li {if $sMenuSubItemSelect=='main'}class="active"{/if}>
		<a href="{$oUserProfile->getUserWebPath()}">{$aLang.user_menu_profile_whois}</a>
	</li>
	<li {if $sMenuSubItemSelect=='topics'}class="active"{/if}>
		<a href="{$oUserProfile->getUserWebPath()}favourites/topics/">{$aLang.user_menu_profile_favourites_topics}  {if $iCountTopicFavourite} <span>+{$iCountTopicFavourite}</span> {/if}</a>
	</li>
	<li {if $sMenuSubItemSelect=='comments'}class="active"{/if}>
		<a href="{$oUserProfile->getUserWebPath()}favourites/comments/">{$aLang.user_menu_profile_favourites_comments}  {if $iCountCommentFavourite} <span>+{$iCountCommentFavourite}</span> {/if}</a>
	</li>

	{hook run='menu_profile_whois_item' oUserProfile=$oUserProfile}
</ul>

{hook run='menu_profile_whois' oUserProfile=$oUserProfile}
