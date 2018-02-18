{foreach from=$customFields item=custom_field}
	<div class="stylesHeading">
		<h2>{$custom_field.name|htmlspecialchars}</h2>
	</div>			
	<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" data-if-empty-val="{$SetSeedLangs.None|htmlspecialchars}" data-test-value="data-custom-field-{$custom_field.id}" 
		data-update-url="calendarActions.php?calendarAction=changeCustomFieldValue&amp;id={$custom_field.id}"
		data-dialogue-title="{$SetSeedLangs.Change_Event_Custom_Title|replace:"<FIELD>":$custom_field.name|htmlspecialchars}"
		data-dialogue-info="{$SetSeedLangs.Change_Event_Custom_Info|replace:"<FIELD>":$custom_field.name|htmlspecialchars}"
		data-items="#calendarEventsPaneInner .eventItem"
	></a>
	
{/foreach}
