{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}

<div class="dropzone"><div></div></div>

{if $calCats}
{foreach from=$calCats|@array_reverse item=calCat key=key name=loop1}
	<div class="dropship_component_item responsiveListItem calendarItem" id="calCat-{$calCat.id}" rel="{$calCat.id}" title="{$calCat.name|@htmlspecialchars}">
		<span class="overflowEllipsis">{$calCat.name|@htmlspecialchars}</span>
	</div>
<div class="dropzone"><div></div></div>
{/foreach}
{/if}



<div class="noPages" {if $calCats}style="display:none;"{/if}>{$SetSeedLangs.No_Calendars}</div>

