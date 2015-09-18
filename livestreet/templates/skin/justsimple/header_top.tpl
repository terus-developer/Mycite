<div id="header">

	<h1 class="logo"><a href="{cfg name='path.root.web'}" title="{cfg name='view.name'}"><img src="{cfg name='path.static.skin'}/images/logo.png" alt="LiveStreet"></a></h1>

	{if $oUserCurrent}
		<div class="profile">
			<a href="{$oUserCurrent->getUserWebPath()}"><img src="{$oUserCurrent->getProfileAvatarPath(48)}" alt="{$oUserCurrent->getLogin()}" class="avatar" /></a>
			<ul>
				<li>
					<a href="{$oUserCurrent->getUserWebPath()}" class="username">{$oUserCurrent->getLogin()}</a>
                    <strong class="{if $oUserCurrent->getRating()>=0}plus{elseif $oUserCurrent->getRating()<0}minus{/if}">{$oUserCurrent->getRating()}</strong>
				</li>
				<li>
					{if $iUserCurrentCountTalkNew}
						<a href="{router page='talk'}" id="new_messages">{$iUserCurrentCountTalkNew} {$aLang.user_mail}</a>
					{else}
						<a href="{router page='talk'}" id="new_messages">{$aLang.user_mail_none}</a>
					{/if}
                    <a href="{router page='settings'}profile/">{$aLang.user_settings}</a>
					<a href="{router page='login'}exit/?security_ls_key={$LIVESTREET_SECURITY_KEY}">{$aLang.exit}</a>
				</li>
				{hook run='userbar_item'}
			</ul>

		    {hook run='userbar_nav'}
		</div>
	{else}
		<div class="profile">
            <img src="{cfg name='path.static.skin'}/images/avatar_48x48.jpg" alt="guest_avatar" class="avatar" />
            <ul class="guest">
                <li><a href="{router page='login'}" class="js-login-form-show login-link">{$aLang.user_login_submit}</a></li>
                <li><a href="{router page='registration'}" class="js-registration-form-show">{$aLang.registration_submit}</a> </li>
            </ul>
		</div>
	{/if}

	<ul class="pages">
		<li {if $sMenuHeadItemSelect=='blog'}class="active"{/if}><a href="{cfg name='path.root.web'}">{$aLang.topic_title}</a></li>
		<li {if $sMenuHeadItemSelect=='blogs'}class="active"{/if}><a href="{router page='blogs'}">{$aLang.blogs}</a></li>
		<li {if $sMenuHeadItemSelect=='people'}class="active"{/if}><a href="{router page='people'}">{$aLang.people}</a></li>
		{if $oUserCurrent}<li {if $sMenuHeadItemSelect=='add'}class="active"{/if}><a href="{router page='topic'}add" class="js-write-window-show" id="modal_write_show" style="color:#FF4242">{$aLang.header_add}</a></li>{/if}
		<li {if $sMenuItemSelect=='stream'}class="active"{/if}><a href="{router page='stream'}">{$aLang.stream_menu}</a></li>

		{hook run='main_menu_item'}
	</ul>

    {hook run='main_menu'}

</div>