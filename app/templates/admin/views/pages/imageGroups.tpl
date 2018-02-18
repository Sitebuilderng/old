{foreach from=$categories item=subCat name=subCatLoop}
<li><a href="#" images-category-id="{$subCat.id}" data-lang="{$subCat.name|htmlspecialchars}" data-item-value="{$subCat.id}" class="bpe_selection_tool greyedOut"><span class="overflowEllipsis">{$subCat.name|htmlentities}</span></a></li>
{/foreach}