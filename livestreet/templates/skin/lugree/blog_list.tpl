
<table class="table table-blogs" cellspacing="0">
	{if $bBlogsUseOrder}
		<thead>
			<tr>
				<th class="cell-rating cell-tab sort-tab">
					<div class="cell-tab-inner {if $sBlogOrder=='blog_rating'}active{/if}">
                        Сортировать по: <a href="{$sBlogsRootPage}?order=blog_title&order_way={if $sBlogOrder=='blog_title'}{$sBlogOrderWayNext}{else}{$sBlogOrderWay}{/if}" {if $sBlogOrder=='blog_title'}class="{$sBlogOrderWay}"{/if}><span>{$aLang.blogs_title}</span></a>
                        <a href="{$sBlogsRootPage}?order=blog_count_user&order_way={if $sBlogOrder=='blog_count_user'}{$sBlogOrderWayNext}{else}{$sBlogOrderWay}{/if}" {if $sBlogOrder=='blog_count_user'}class="{$sBlogOrderWay}"{/if}><span>{$aLang.blogs_readers}</span></a>
                        <a href="{$sBlogsRootPage}?order=blog_rating&order_way={if $sBlogOrder=='blog_rating'}{$sBlogOrderWayNext}{else}{$sBlogOrderWay}{/if}" {if $sBlogOrder=='blog_rating'}class="{$sBlogOrderWay}"{/if}><span>{$aLang.blogs_rating}</span></a>
                    </div>
				</th>
			</tr>
		</thead>
	{else}
		<thead>
			<tr>
				<th class="cell-name cell-tab"><div class="cell-tab-inner"></div></th>

				{if $oUserCurrent}
					<th class="cell-join">&nbsp;</th>
				{/if}

				<th class="cell-readers cell-tab"><div class="cell-tab-inner"></div></th>
				<th class="cell-rating cell-tab align-center">
					<div class="cell-tab-inner active">
                        <span>{$aLang.blogs_title}</span>
                        <span>{$aLang.blogs_readers}</span>
                        <span>{$aLang.blogs_rating}</span>
                    </div>
				</th>
			</tr>
		</thead>
	{/if}
	
	
	<tbody>
		{if $aBlogs}
			{foreach from=$aBlogs item=oBlog}
				{assign var="oUserOwner" value=$oBlog->getOwner()}

				<tr>
					<td class="cell-name">
						<span class="user-avatar">
							<a href="{$oUserOwner->getUserWebPath()}"><img src="{$oBlog->getAvatarPath(48)}" alt="avatar" /></a>
							<!--<a href="{$oUserOwner->getUserWebPath()}">{$oUserOwner->getLogin()}</a>-->
						</span>
                        <p class="blog-link-wrap">
                            <a href="{$oBlog->getUrlFull()}" class="blog-name">{$oBlog->getTitle()|escape:'html'}</a>

                            {if $oBlog->getType() == 'close'}
                            <i title="{$aLang.blog_closed}" class="icon-synio-topic-private"></i>
                            {/if}
                        </p>
                        <p>{$oBlog->getBlogDescription()}</p>
                        <div class="blog-item-footer">
                            <div class="col join-to-blog">
                            	{if $oUserCurrent and $oUserCurrent->getId() != $oBlog->getOwnerId() and $oBlog->getType() == 'open'}
                                	<a href="#" onclick="ls.blog.toggleJoin(this, {$oBlog->getId()}); return false;">
                                		<i class="icon-pencil"></i>
                                		{if $oBlog->getUserIsJoin()}{$aLang.blog_leave}{else}{$aLang.blog_join}{/if}
                                	</a>
								{else}
									&mdash;
								{/if}
                            </div>
                            <div class="col readers-count">{$oBlog->getCountUser()|declension:$aLang.reader_declension:'russian'}: {$oBlog->getCountUser()}</div>
                            <div class="col caretaker">
                                <div class="col-inner">
                                    <span>{$aLang.blogs_owner}</span>
                                    <img src="{$oUserOwner->getProfileAvatarPath(48)}" alt="avatar" class="avatar"/>
                                    <a href="{$oUserOwner->getUserWebPath()}">{$oUserOwner->getLogin()}</a>
                                </div>
                            </div>
                            <div class="col blog-rating">
                                <div class="col-inner">
                                    <span>{$aLang.blog_rating}</span>
                                    <b>{$oBlog->getRating()}</b>
                                </div>
                            </div>
                        </div>
					</td>
				</tr>
			{/foreach}
		{else}
			<tr>
				<td colspan="5">
					{if $sBlogsEmptyList}
						{$sBlogsEmptyList}
					{else}

					{/if}
				</td>
			</tr>
		{/if}
	</tbody>
</table>