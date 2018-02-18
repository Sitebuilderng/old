{foreach from=$customFields item=custom_field}
	<div class="stylesHeading">
		<h2>{$custom_field.name|htmlspecialchars}</h2>
	</div>		
	<a title="" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="{$SetSeedLangs.None|htmlspecialchars}" data-test-value="data-custom-field-{$custom_field.id}" data-field-id="{$custom_field.id}"></a>
{/foreach}
