<ul class="block-blog-list">
	{foreach from=$aBlogs item=oBlog}
		<li>
			{strip}
				<a href="{$oBlog->getUrlFull()}">{$oBlog->getTitle()|escape:'html'}</a>
			{if $oBlog->getType()=='close'}<img src="{cfg name='path.static.skin'}/images/lock.png" alt="[x]" title="{$aLang.blog_closed}" />{/if}
			{/strip}
			
			<strong>{$oBlog->getRating()}</strong>
		</li>
	{/foreach}
</ul>				