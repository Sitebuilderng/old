{foreach from=$categories item=snipCat name=snipCatLoop}
<li><a href="#" snippet-cat-id="{$snipCat.id}" data-lang="{$snipCat.name|htmlspecialchars}" data-item-value="{$snipCat.id}" class="bpe_selection_tool greyedOut" data-pinned="{$snipCat.pinned}"><span class="overflowEllipsis">{$snipCat.name|htmlspecialchars}</span></a></li>
{/foreach}