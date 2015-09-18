{assign var="oUser" value=$oTopic->getUser()}

<h3 class="profile-page-header">{$aLang.topic_preview}</h3>

<article class="topic topic-type-{$oTopic->getType()}">
	<h1 class="title">{$oTopic->getTitle()|escape:'html'}</h1>

	<div class="topic-content text">
		{hook run='topic_preview_content_begin' topic=$oTopic}

		{$oTopic->getText()}

		{hook run='topic_preview_content_end' topic=$oTopic}
	</div>

    <div class="date">
		<time datetime="{date_format date=$oTopic->getDateAdd() format='c'}" title="{date_format date=$oTopic->getDateAdd() format='j F Y, H:i'}">
			{date_format date=$oTopic->getDateAdd() hours_back="12" minutes_back="60" now="60" day="day H:i" format="j F Y, H:i"}
		</time>
    </div>

  	<ul class="tags js-favourite-insert-after-form js-favourite-tags-topic-{$oTopic->getId()}">
  		{strip}
    		{if $oTopic->getTagsArray()}
    			{foreach from=$oTopic->getTagsArray() item=sTag name=tags_list}
    				<li>{if !$smarty.foreach.tags_list.first}, {/if}<a rel="tag" href="{router page='tag'}{$sTag|escape:'url'}/">{$sTag|escape:'html'}</a></li>
    			{/foreach}
    		{else}
    			<li>{$aLang.topic_tags_empty}</li>
    		{/if}

    		{if $oUserCurrent}
    			{if $oFavourite}
    				{foreach from=$oFavourite->getTagsArray() item=sTag name=tags_list_user}
    					<li class="topic-tags-user js-favourite-tag-user">, <a rel="tag" href="{$oUserCurrent->getUserWebPath()}favourites/topics/tag/{$sTag|escape:'url'}/">{$sTag|escape:'html'}</a></li>
    				{/foreach}
    			{/if}

    			<li class="topic-tags-edit js-favourite-tag-edit" {if !$oFavourite}style="display:none;"{/if}>
    				&nbsp;&nbsp;<a href="#" onclick="return ls.favourite.showEditTags({$oTopic->getId()},'topic',this);" class="link-dotted">{$aLang.favourite_form_tags_button_show}</a>
    			</li>
    		{/if}
    	{/strip}
  	</ul>

    <ul class="info">
  		<li class="username" style="margin-left:15px">
            <a href="{$oUser->getUserWebPath()}"><img src="{$oUser->getProfileAvatarPath(24)}" class="avatar" alt="avatar" /></a>
            <a rel="author" href="{$oUser->getUserWebPath()}">{$oUser->getLogin()}</a>
        </li>
  		{hook run='topic_preview_show_info' topic=$oTopic}
  	</ul>

    {hook run='topic_preview_show_end' topic=$oTopic}
</article>


<button type="submit"  name="submit_topic_publish" class="button button-primary fl-r" onclick="jQuery('#submit_topic_publish').trigger('click');">{$aLang.topic_create_submit_publish}</button>
<button type="submit"  name="submit_preview" onclick="jQuery('#text_preview').html('').hide(); return false;" class="button">{$aLang.topic_create_submit_preview_close}</button>
<button type="submit"  name="submit_topic_save" class="button" onclick="jQuery('#submit_topic_save').trigger('click');">{$aLang.topic_create_submit_save}</button>