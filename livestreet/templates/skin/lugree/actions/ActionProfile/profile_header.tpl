<div class="profile-info-header">
    <a href="{$oUserProfile->getUserWebPath()}" class="avatar"><img src="{$oUserProfile->getProfileAvatarPath(100)}" alt="avatar" itemprop="photo" /></a>
    <div class="col profile-info">
        <h2 class="user-login word-wrap {if !$oUserProfile->getProfileName()}no-user-name{/if}" itemprop="nickname">{if $oUserProfile->getProfileName()} {$oUserProfile->getProfileName()|escape:'html'} <span>({/if}{$oUserProfile->getLogin()}{if $oUserProfile->getProfileName()})</span>{/if}</h2>
        {if $oUserCurrent && $oUserCurrent->getId()!=$oUserProfile->getId()}
        <a href="{router page='talk'}add/?talk_users={$oUserProfile->getLogin()}" class="button button-action button-action-send-message">
            <i class="icon-synio-send-message"></i>
            <span>{$aLang.user_write_prvmsg}</span>
        </a>
        <button type="submit"  class="button button-action button-action-join" onclick="ls.user.followToggle(this, {$oUserProfile->getId()}); return false;">
            <i class="icon icon-synio-join"></i>
            <span>Подписаться</span>
        </button>
        {include file='actions/ActionProfile/friend_item.tpl' oUserFriend=$oUserProfile->getUserFriend()}                 
        {/if}
        <div class="row profile-info-list">
            <span>
                <span class="title">{$aLang.profile_date_registration}:</span> <br>
                {date_format date=$oUserProfile->getDateRegister()}
            </span>
            {if $oSession}
            <span>
                <span class="title">{$aLang.profile_date_last}:</span> <br>
                {date_format date=$oSession->getDateLast()}
            </span>
        </div>
        {/if}
    </div>
    <div class="col">
        {include file='actions/ActionProfile/profile_top.tpl'}
    </div>
</div>  