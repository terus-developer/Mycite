<ul class="block-blog-list">
	{foreach from=$aBlogs item=oBlog}
		<li>
			{strip}
				<a href="{$oBlog->getUrlFull()}">{$oBlog->getTitle()|escape:'html'}</a>
			{/strip}
			
			<strong>{$oBlog->getRating()}</strong>
		</li>
	{/foreach}
</ul>				