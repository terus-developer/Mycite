<aside id="sidebar-left">
	{hook run='header_banner_begin'}

	<div class="logo"><a href="{cfg name='path.root.web'}">JimmySkin</a></div>

	{if $oUserCurrent}
		<div class="userbar">
			<div class="toggle-click"><i class="fa fa-sort-desc"></i></div>

			<div class="name">
				<a href="{$oUserCurrent->getUserWebPath()}">
					<img src="{$oUserCurrent->getProfileAvatarPath(48)}" alt="{$oUserCurrent->getLogin()}" class="avatar">{$oUserCurrent->getLogin()}
				</a>
			</div>

			<div class="toggle-menu">
				<ul>
					{hook run='userbar_item_first'}
					<li><a href="{router page='topic'}add/"><i class="fa fa-plus"></i>Создать</a></li>
					<li><a href="{router page='talk'}/"><i class="fa fa-envelope-o"></i>Сообщения{if $iUserCurrentCountTalkNew} +{$iUserCurrentCountTalkNew}{/if}</a></li>
					<li><a href="{router page='settings'}profile/"><i class="fa fa-cog"></i>Настройки</a></li>
					{hook run='userbar_item_last'}
					<li><a href="{router page='login'}exit/?security_ls_key={$LIVESTREET_SECURITY_KEY}"><i class="fa fa-sign-out"></i>Выход</a></li>
				</ul>
			</div>

			{hook run='userbar_nav'}
		</div>
	{else}
		<div class="join"><a href="{router page='login'}" class="js-login-form-show"><i class="fa fa-sign-in"></i>Войти на сайт</a></div>
	{/if}

	<div class="navigation">
		<ul>
			<li {if $sAction=='index'}class="active"{/if}><a href="{cfg name='path.root.web'}"><i class="fa fa-tasks"></i>Все записи</a></li>
			{if $oUserCurrent}<li {if $sAction=='feed'}class="active"{/if}><a href="{router page='feed'}"><i class="fa fa-newspaper-o"></i>Моя лента</a></li>{/if}
			<li {if $sMenuHeadItemSelect=='people'}class="active"{/if}><a href="{router page='people'}"><i class="fa fa-users"></i>Пользователи</a></li>
			<li {if $sMenuHeadItemSelect=='blogs'}class="active"{/if}><a href="{router page='blogs'}"><i class="fa fa-book"></i>Список рубрик</a></li>
			{if $oUserCurrent}<li {if $sMenuHeadItemSelect=='stream'}class="active"{/if}><a href="{router page='stream'}"><i class="fa fa-bullhorn"></i>Уведомления</a></li>{/if}
			{hook run='main_menu_item'}
		</ul>
		{hook run='main_menu'}
	</div>

	{if !$oUserCurrent}
	<div class="wannareg">
		<div class="note">Регистрация позволит вам публиковать свои записи и оставлять комментарии к&nbsp;записям других пользователей.</div>
		<a href="{router page='registration'}" class="button button-primary js-registration-form-show">Зарегистрироваться</a>
	</div>
	{/if}

	{hook run='header_banner_end'}
</aside>