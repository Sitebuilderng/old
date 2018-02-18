{foreach from=$groups item=subCat name=subCatLoop}
<li><a href="#" permission-group-id="{$subCat.id}" data-lang="{$subCat.name|htmlspecialchars}" data-item-value="{$subCat.id}" class="bpe_selection_tool greyedOut" title="{$subCat.name|htmlentities}"><span class="overflowEllipsis">{$subCat.name|htmlentities}</span></a></li>
{/foreach}