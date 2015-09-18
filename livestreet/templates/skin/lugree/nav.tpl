<div class="nav-wrapper">
    <nav id="nav">
        {if $menu}
            {if in_array($menu,$aMenuContainers)}{$aMenuFetch.$menu}{else}{include file="menu.$menu.tpl"}{/if}
        {/if}

        <div class="search-header">
            <form class="search-header-form" id="search-header-form" action="{router page='search'}topics/">
                <input type="text" placeholder="{$aLang.search}" maxlength="255" name="q" class="input-text">
                <input type="submit" value="" title="{$aLang.search_submit}" class="input-submit">
            </form>
        </div>
    </nav>
    {include file='nav_content.tpl' usermenu=$usermenu}
</div>