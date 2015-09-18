
    <div id="nav">
		{if $menu}
			{if in_array($menu,$aMenuContainers)}{$aMenuFetch.$menu}{else}{include file="menu.$menu.tpl"}{/if}
        {elseif $sAction=='talk'}
            {include file="menu.talk.tpl"}
		{/if}
    </div>
