{foreach from=$categories item=subCat name=subCatLoop}
<li><a href="#" subscriber-cat-id="{$subCat.id}" data-lang="{$subCat.name|htmlspecialchars}" data-show-in-signup="{$subCat.show_on_signup}" data-item-value="{$subCat.id}" class="bpe_selection_tool greyedOut"><span class="overflowEllipsis">{$subCat.name|htmlentities}</span></a></li>
{/foreach}