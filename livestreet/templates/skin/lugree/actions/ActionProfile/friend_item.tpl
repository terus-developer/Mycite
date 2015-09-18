{if $oUserFriend and ($oUserFriend->getFriendStatus()==$USER_FRIEND_ACCEPT+$USER_FRIEND_OFFER or $oUserFriend->getFriendStatus()==$USER_FRIEND_ACCEPT+$USER_FRIEND_ACCEPT)}
	<!-- <li id="delete_friend_item"> -->
		<button type="button"  class="button button-action button-action-add-friend" onclick="return ls.user.removeFriend(this,{$oUserProfile->getId()},'del');">
            {$aLang.user_friend_del}
        </button>
		<!-- <a href="#"  title="{$aLang.user_friend_del}" >{$aLang.user_friend_del}</a> -->
	<!-- </li> -->
{elseif $oUserFriend and $oUserFriend->getStatusTo()==$USER_FRIEND_REJECT and $oUserFriend->getStatusFrom()==$USER_FRIEND_OFFER and $oUserFriend->getUserTo()==$oUserCurrent->getId()}
	<!-- <li id="add_friend_item"> -->
		<button type="button"  class="button button-action button-action-add-friend" onclick="return ls.user.addFriend(this,{$oUserProfile->getId()},'accept');">
            <i class="icon icon-synio-add-friend"></i>
            <span>{$aLang.user_friend_add}</span>
        </button>
		<!-- <a href="#"  title="{$aLang.user_friend_add}" onclick="return ls.user.addFriend(this,{$oUserProfile->getId()},'accept');">{$aLang.user_friend_add}</a> -->
	<!-- </li> -->
{elseif $oUserFriend and $oUserFriend->getFriendStatus()==$USER_FRIEND_OFFER+$USER_FRIEND_REJECT and $oUserFriend->getUserTo()!=$oUserCurrent->getId()}
	<!-- <li> -->
		<button type="button"  class="button button-action button-action-add-friend">
            {$aLang.user_friend_offer_reject}
        </button>
	<!-- </li>							 -->
{elseif $oUserFriend and $oUserFriend->getFriendStatus()==$USER_FRIEND_OFFER+$USER_FRIEND_NULL and $oUserFriend->getUserFrom()==$oUserCurrent->getId()}
	<!-- <li> -->
		<button type="button"  class="button button-action button-action-add-friend">
            {$aLang.user_friend_offer_send}
        </button>
	<!-- </li>						 -->
{elseif $oUserFriend and $oUserFriend->getFriendStatus()==$USER_FRIEND_OFFER+$USER_FRIEND_NULL and $oUserFriend->getUserTo()==$oUserCurrent->getId()}
	<!-- <li id="add_friend_item"> -->
		<button type="button"  class="button button-action button-action-add-friend"  onclick="return ls.user.addFriend(this,{$oUserProfile->getId()},'accept');">
            {$aLang.user_friend_add}
        </button>
		<!-- <a href="#"  title="{$aLang.user_friend_add}" onclick="return ls.user.addFriend(this,{$oUserProfile->getId()},'accept');">{$aLang.user_friend_add}</a> -->
	<!-- </li> -->
{elseif !$oUserFriend}
	<div id="add_friend_form" class="modal">
		<header class="modal-header">
			<h3>{$aLang.profile_add_friend}</h3>
			<a href="#" class="close jqmClose"></a>
		</header>

		<form onsubmit="return ls.user.addFriend(this,{$oUserProfile->getId()},'add');" class="modal-content">
			<p><label for="add_friend_text">{$aLang.user_friend_add_text_label}</label>
			<textarea id="add_friend_text" rows="3" class="input-text input-width-full"></textarea></p>

			<button type="submit"  class="button button-primary">{$aLang.user_friend_add_submit}</button>
		</form>
	</div>
	<button type="button" id="add_friend_show"  class="button button-action button-action-add-friend">
        <i class="icon icon-synio-add-friend"></i>
        <span>{$aLang.user_friend_add}</span>
    </button>
	<!-- <li id="add_friend_item"><a href="#"  title="{$aLang.user_friend_add}" id="add_friend_show">{$aLang.user_friend_add}</a></li> -->
{else}
	<button type="button" class="button button-action button-action-add-friend"  onclick="return ls.user.addFriend(this,{$oUserProfile->getId()},'link');">
        <i class="icon icon-synio-add-friend"></i>
        <span>{$aLang.user_friend_add}</span>
    </button>
	<!-- <li id="add_friend_item"><a href="#" title="{$aLang.user_friend_add}" onclick="return ls.user.addFriend(this,{$oUserProfile->getId()},'link');">{$aLang.user_friend_add}</a></li> -->
{/if}