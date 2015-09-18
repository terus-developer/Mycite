{if count($aTopics)>0}
	{add_block group='toolbar' name='toolbar_topic.tpl' iCountTopic=count($aTopics)}

<ul class="topic-list">
	{foreach from=$aTopics item=oTopic}
		{assign var="countRead" value=$oTopic->getCountRead()}	
		{assign var="oBlog" value=$oTopic->getBlog()}
		{assign var="oUser" value=$oTopic->getUser()}
		{assign var="oVote" value=$oTopic->getVote()}

	{if $oVote || ($oUserCurrent && $oTopic->getUserId() == $oUserCurrent->getId()) || strtotime($oTopic->getDateAdd()) < $smarty.now-$oConfig->GetValue('acl.vote.topic.limit_time')}
		{assign var="bVoteInfoShow" value=true}
	{/if}

		<li class="topic-short">
			<a href="{$oTopic->getUrl()}#comments" class="answers"><i class="fa fa-check"></i> {$oTopic->getCountComment()}<p>{$oTopic->getCountComment()|declension:$aLang.comment_declension:'russian'}</p></a>

			<div class="topic-blog"><a href="{$oBlog->getUrlFull()}"><img src="{$oBlog->getAvatarPath(48)}" alt="{$oBlog->getTitle()|escape:'html'}" class="avatar">{$oBlog->getTitle()|escape:'html'}</a></div>
			<div class="title"><a href="{$oTopic->getUrl()}">{$oTopic->getTitle()|escape:'html'}</a></div>
			<div class="desc">{$oTopic->getText()|strip_tags|trim|truncate:250:'...'|escape:'html'}</div>
			<div class="info">
				<div id="vote_area_topic_{$oTopic->getId()}" class="vote
																	{if $oVote || ($oUserCurrent && $oTopic->getUserId() == $oUserCurrent->getId()) || strtotime($oTopic->getDateAdd()) < $smarty.now-$oConfig->GetValue('acl.vote.topic.limit_time')}
																		{if $oTopic->getRating() > 0}
																			vote-count-positive
																		{elseif $oTopic->getRating() < 0}
																			vote-count-negative
																		{elseif $oTopic->getRating() == 0}
																			vote-count-zero
																		{/if}
																	{/if}
																	
																	{if !$oUserCurrent or ($oUserCurrent && $oTopic->getUserId() != $oUserCurrent->getId())}
																		vote-not-self
																	{/if}
																	
																	{if $oVote} 
																		voted
																		
																		{if $oVote->getDirection() > 0}
																			voted-up
																		{elseif $oVote->getDirection() < 0}
																			voted-down
																		{elseif $oVote->getDirection() == 0}
																			voted-zero
																		{/if}
																	{else}
																		not-voted
																	{/if}
																	
																	{if (strtotime($oTopic->getDateAdd()) < $smarty.now-$oConfig->GetValue('acl.vote.topic.limit_time') && !$oVote) || ($oUserCurrent && $oTopic->getUserId() == $oUserCurrent->getId())}
																		vote-nobuttons
																	{/if}
																	
																	{if strtotime($oTopic->getDateAdd()) > $smarty.now-$oConfig->GetValue('acl.vote.topic.limit_time')}
																		vote-not-expired
																	{/if}

																	{if $bVoteInfoShow}js-infobox-vote-topic{/if}">
					<div class="vote-item vote-up" onclick="return ls.vote.vote({$oTopic->getId()},this,1,'topic');"><i class="fa fa-arrow-up"></i></div>
					
					<div class="vote-item vote-count" title="{$aLang.topic_vote_count}: {$oTopic->getCountVote()}">
						<span id="vote_total_topic_{$oTopic->getId()}">
							{if $bVoteInfoShow}
								{$oTopic->getRating()}
							{else}
								&mdash;
							{/if}
						</span>
					</div>
					
					{if $bVoteInfoShow}
						<div id="vote-info-topic-{$oTopic->getId()}" style="display: none;">
							<ul class="vote-topic-info">
								<li><i class="icon-synio-vote-info-up"></i> {$oTopic->getCountVoteUp()}</li>
								<li><i class="icon-synio-vote-info-down"></i> {$oTopic->getCountVoteDown()}</li>
								<li><i class="icon-synio-vote-info-zero"></i> {$oTopic->getCountVoteAbstain()}</li>
								{hook run='topic_show_vote_stats' topic=$oTopic}
							</ul>
						</div>
					{/if}
					<div class="vote-item vote-down" onclick="return ls.vote.vote({$oTopic->getId()},this,-1,'topic');"><i class="fa fa-arrow-down"></i></div>
				</div>

				<time datetime="{date_format date=$oTopic->getDateAdd() format='c'}" title="{date_format date=$oTopic->getDateAdd() format='j F Y, H:i'}">
					{date_format date=$oTopic->getDateAdd() hours_back="12" minutes_back="60" now="60" day="day H:i" format="j F Y, H:i"}
				</time>
				•
				{$oTopic->getCountRead()} {$oTopic->getCountRead()|declension:$aLang.comment_read:'russian'}
			</div>
		</li>
	{/foreach}
</ul>

	{include file='paging.tpl' aPaging=$aPaging}
{else}
	{$aLang.blog_no_topic}
{/if}