{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}

<span class="noPages" {if $emailGroups}style='display:none'{/if}>{$SetSeedLangs.No_Mailing_Lists|htmlspecialchars}</span>
{if $emailGroups}
<div class="dropzone"><div></div></div>
{foreach from=$emailGroups item=calCat key=key name=loop1}
	<div class="responsiveListItem dropship_component_item mailingListItem" group-id="{$calCat.id}" title="{$calCat.name|@htmlspecialchars}" data-autoresponder-id="{$calCat.autoresponder_id}" data-autoresponder-title="{$calCat.autoresponder_page_title}" data-autoresponder-subject="{$calCat.autoresponder_subject}">
		<span class="responsiveListItemInfo totalRecipients">{$calCat.subscribersCount}</span>
		<span class="overflowEllipsis" id="{$calCat.id}">{$calCat.name|@htmlspecialchars}</span>
		{foreach from=$calCat.categories item=cat} 
			<input type="hidden" id="groupcat" class="groupcat" data-id="{$cat.id}" value="{$cat.name|htmlspecialchars}"/>
		{/foreach}
	</div>
	<form action="newsletterActions.php" method="post" class="menu_with_options menuForm renameForm" style="display:none">
		<input type="hidden" name="id" value="{$calCat.id}"/>
		<input type="hidden" name="newsletterAction" value="renameGroup"/>
		<input type="text" name="name" value=" Enter a title, then hit return" class="pageMenuInput greyedOut focus"/>
	</form>
	<div class="dropzone"><div></div></div>
{/foreach}

{*<div class="listTipUp">{$SetSeedLangs.Tip_List_No_Sort}</div>*}

{else}
{**}
{/if}