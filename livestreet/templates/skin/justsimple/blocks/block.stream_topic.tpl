<ul class="latest-list">
	{foreach from=$oTopics item=oTopic name="cmt"}
		{assign var="oUser" value=$oTopic->getUser()}							
		{assign var="oBlog" value=$oTopic->getBlog()}

		<li class="js-title-topic" title="{$oTopic->getText()|strip_tags|trim|truncate:150:'...'|escape:'html'}">
            <a href="{$oTopic->getUrl()}" class="topic-title">{$oTopic->getTitle()|escape:'html'}</a>
            <span>{$oTopic->getCountComment()}</span><br />
			<a href="{$oUser->getUserWebPath()}" class="user">{$oUser->getLogin()}</a>, {$aLang.in}   
    		<time datetime="{date_format date=$oTopic->getDateAdd() format='c'}" title="{date_format date=$oTopic->getDateAdd() format='j F Y, H:i'}">
    			{date_format date=$oTopic->getDateAdd() hours_back="12" minutes_back="60" now="60" day="day H:i" format="j F Y, H:i"}
    		</time>
		</li>
	{/foreach}
</ul>


<footer>
	<a href="{router page='index'}new/">{$aLang.block_stream_topics_all}</a>
</footer>
					