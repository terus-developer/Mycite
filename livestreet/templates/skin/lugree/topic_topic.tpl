{include file='topic_part_header.tpl'}
   
   
<div class="topic-content text">
	{hook run='topic_content_begin' topic=$oTopic bTopicList=$bTopicList}
	
	{if $bTopicList}
		{$oTopic->getTextShort()}
		
		{if $oTopic->getTextShort()!=$oTopic->getText()}
			<div class="topic-read-more-cnt dotted-cnt">
				<a class="read-more" href="{$oTopic->getUrl()}#cut" title="{$aLang.topic_read_more}">
					{if $oTopic->getCutText()}
						{$oTopic->getCutText()}
					{else}
						{$aLang.topic_read_more} &rarr;
					{/if}
				</a>
			</div>
		{/if}
	{else}
		{$oTopic->getText()}
	{/if}
	
	{hook run='topic_content_end' topic=$oTopic bTopicList=$bTopicList}
</div> 


{include file='topic_part_footer.tpl'}
