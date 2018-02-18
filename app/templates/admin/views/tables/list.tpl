{if !$ajax || $searching}
<div class="dropzone"><div></div></div>
{/if}
{if !$ajax || $searching}
<div class="noPages" {if $tables}style="display:none"{/if}>{$SetSeedLangs.No_Tables}</div>
{/if}
{foreach from=$tables item=item key=key name=loop1}
	<div class="tableItem responsiveListItem dropship_component_item" id="{$item.id}" alt="{$item.id}" title="{$item.name|htmlspecialchars}" data-table-header="{$item.headers}" table-id="{$item.id}" data-csv="{$item.csv|@htmlspecialchars}">
		<span class="overflowEllipsis" title="{$item.name|@htmlspecialchars}">{$item.name|@htmlspecialchars}</span>
	</div>
<div class="dropzone"><div></div></div>
{/foreach}
{if !$ajax || $searching}
<div class="clear insertNewItemsBefore"></div>
<a href="50" class="showMoreItems">Show more tables</a>
{/if}
