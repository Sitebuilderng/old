{if $categories}
	{foreach from=$categories item=prodCat name=loop1}
	<li><a href="#" product-cat-id="{$prodCat.id}" data-lang="{$prodCat.name|htmlspecialchars}" data-item-value="{$prodCat.id}" product-parent-id="{$prodCat.parent_id}" class="indent{$prodCat.level} bpe_selection_tool greyedOut"><span class="overflowEllipsis">{$prodCat.name|htmlspecialchars}</span></a></li>	
	{/foreach}
{/if}