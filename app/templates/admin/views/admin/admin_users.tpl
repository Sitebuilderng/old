
<div class="dropzone"><div></div></div>
{foreach from=$admin_users item=adminUser key=key name=loop1}
	<div class="responsiveListItem" name="{$adminUser.username|htmlspecialchars}" staff-id="{$adminUser.id}" data-privs="{$adminUser.privs}" data-master="{$adminUser.master}" data-permission-groups="{$adminUser.in_groups_csv}">
		{if $adminUser.master}<span class="responsiveListItemInfo">{$SetSeedLangs.Master}</span>{/if}
		<span class="overflowEllipsis">{$adminUser.username|htmlspecialchars}</span>
		{foreach from=$adminUser.in_groups_array item=grp} 
			<input type="hidden" id="permissiongroup{$grp}" value="{$grp}"/>
		{/foreach}
	</div>
	<div class="dropzone"><div></div></div>
{/foreach}

<div class="noPages" {if $admin_users}style="display:none;"{/if}>{$SetSeedLangs.No_Staff}</div>
