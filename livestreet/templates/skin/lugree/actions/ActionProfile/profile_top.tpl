<div class="profile">
	{hook run='profile_top_begin' oUserProfile=$oUserProfile}
    <div class="strength">
        <div class="vote-label">{$aLang.user_skill}</div>
        <div class="count" id="user_skill_{$oUserProfile->getId()}">{$oUserProfile->getSkill()}</div>
    </div>
	<div class="vote-profile">
        <div class="vote-label">{$aLang.user_rating}</div>
		<div id="vote_area_user_{$oUserProfile->getId()}" class="vote-topic
																	{if $oUserProfile->getRating() > 0}
																		vote-count-positive
																	{elseif $oUserProfile->getRating() < 0}
																		vote-count-negative
																	{elseif $oUserProfile->getRating() == 0}
																		vote-count-zero
																	{/if}
																	
																	{if $oVote} 
																		voted 
																		
																		{if $oVote->getDirection() > 0}
																			voted-up
																		{elseif $oVote->getDirection() < 0}
																			voted-down
																		{/if}
																	{else}
																		not-voted
																	{/if}
																	
																	{if ($oUserCurrent && $oUserProfile->getId() == $oUserCurrent->getId()) || !$oUserCurrent}
																		vote-nobuttons
																	{/if}">
			<div class="vote-item vote-count" title="{$aLang.user_vote_count}: {$oUserProfile->getCountVote()}">
                <span id="vote_total_user_{$oUserProfile->getId()}">{$oUserProfile->getRating()}</span>
            </div>
            <div class="vote-item vote-up" onclick="return ls.vote.vote({$oUserProfile->getId()},this,1,'user');"><span><i></i></span></div>
            <div class="vote-item vote-down" onclick="return ls.vote.vote({$oUserProfile->getId()},this,-1,'user');"><span><i></i></span></div>
        </div>
		<div class="vote-label">{$aLang.user_vote_count}: {$oUserProfile->getCountVote()}</div>
	</div>
	
	{hook run='profile_top_end' oUserProfile=$oUserProfile}
</div>