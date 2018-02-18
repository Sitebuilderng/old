{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}

{foreach from=$emailGroups item=calCat key=key name=loop1}
	<li class="dropship_component_item drag_insert_subscribe dragInsertItem" group-id="{$calCat.id}" title="{$calCat.name|@htmlspecialchars}" rel="newsletter">
		{$calCat.name|@htmlspecialchars}
	</li>
{/foreach}
