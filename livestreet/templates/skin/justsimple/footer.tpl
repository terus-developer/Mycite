			{hook run='content_end'}

		</div><!-- /content -->

		{if !$noSidebar}
			{include file='sidebar.tpl'}
		{/if}
	</div><!-- /wrapper -->

    <div id="hFooter"></div>
</div> <!-- /container -->

<div id="footer">
  <div id="footer-inner">
  	<div class="right">
        {hook run='copyright'}<br />
        Дизайн &mdash; <a href="http://koulikov.com/">Кирилл Куликов</a>
    </div>

  	<ul class="pages">
		<li {if $sMenuHeadItemSelect=='blog'}class="active"{/if}><a href="{cfg name='path.root.web'}">{$aLang.topic_title}</a></li>
		<li {if $sMenuHeadItemSelect=='blogs'}class="active"{/if}><a href="{router page='blogs'}">{$aLang.blogs}</a></li>
		<li {if $sMenuHeadItemSelect=='people'}class="active"{/if}><a href="{router page='people'}">{$aLang.people}</a></li>
		{if $oUserCurrent}<li {if $sMenuHeadItemSelect=='add'}class="active"{/if}><a href="{router page='topic'}add" style="color:#FF4242">{$aLang.header_add}</a></li>{/if}
		<li {if $sMenuItemSelect=='stream'}class="active"{/if}><a href="{router page='stream'}">{$aLang.stream_menu}</a></li>

		{hook run='main_menu_item'}
  	</ul>

  	{hook run='footer_end'}
  </div>
</div>

{include file='toolbar.tpl'}

{hook run='body_end'}

</body>
</html>