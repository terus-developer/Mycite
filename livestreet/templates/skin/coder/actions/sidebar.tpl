<aside id="sidebar-right">
	<div class="add-button">
		{if $oUserCurrent}
			<a href="{router page='topic'}add/" class="button button-primary js-write-window-show" id="modal_write_show">Добавить на сайт</a>
		{else}
			<a href="{router page='registration'}" class="button button-primary">Добавить на сайт</a>
		{/if}
	</div>

	{include file='blocks.tpl' group='right'}
</aside>