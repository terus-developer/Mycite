<div id="header">
	<div class="toggle-sidebar-left"><i class="fa fa-bars"></i></div>

	<div class="logo"><a href="{cfg name='path.root.web'}">Coder</a></div>

	<div class="add-button">
		{if $oUserCurrent}
			<a href="{router page='topic'}add/" class="button button-primary js-write-window-show" id="modal_write_show">{$aLang.add_to}</a>
		{else}
			<a href="{router page='registration'}" class="button button-primary">{$aLang.add_to}</a>
		{/if}
	</div>

	<div class="content-search">
		<form id="search-header-form" action="{router page='search'}topics/">
			<input type="text" placeholder="{$aLang.search_site}" maxlength="255" name="q" class="input-text">
		</form>
	</div>

	<div class="clear"></div>
</div>

<div class="header-back"></div>