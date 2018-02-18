<div class="responsiveListItem dropship_component_item embedCodeItem" embed-code-id="{$embedCode.id}" embed-code-name="{$embedCode.name|htmlspecialchars}">
	<span class="overflowEllipsis">{$embedCode.name|htmlspecialchars}</span>
</div>
<div class="responsiveListAddForm inline" style="display:none">
	<div class="imageContextEditFieldset">
		<div class="imageContextEditLabel">&nbsp;{$SetSeedLangs.Embed_Code_Name}</div>
		<div class="imageContextEditInputWrap linkField"><input type="text" name="" class="focus editEmbedCodeName" value="{$embedCode.name|@htmlspecialchars}"/></div>
	</div>
	<div class="imageContextEditFieldset">
		<div class="imageContextEditLabel">&nbsp;{$SetSeedLangs.Embed_Code_Code}</div>
		<div class="imageContextEditInputWrap"><textarea class="editEmbedCodeCode">{$embedCode.code|@htmlspecialchars}</textarea></div>
	</div>
</div>
<div class="dropzone"><div></div></div>