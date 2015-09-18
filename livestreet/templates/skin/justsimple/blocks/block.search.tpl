<section class="block search">

    <header class="block-header">
        <h3>{$aLang.block_search_h2}</h3>
    </header>
    
	<form action="{router page='search'}topics/" method="GET" class="search">
    	<input class="text" type="text" onblur="if (!value) value=defaultValue" onclick="if (value==defaultValue) value=''" value="{$aLang.block_search_find}" name="q" />
    	<input class="search-submit" type="submit" value="" />
    </form>
</section>