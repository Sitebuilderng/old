{if $content.sentAsEmail}
<table width="100%" class="colblock">
	<tr>
		<td width="24%" valign="top">
		{$editable.sidebar_content}{if $editable.sidebar_content==""}&nbsp;{/if}
		</td>
		<td width="2%" class="colblock-divider">
		&nbsp;
		</td>
		<td width="74%" valign="top">
		{$editable.main_content}{if $editable.main_content==""}&nbsp;{/if}
		</td>
	</tr>
</table>
{else}
<div class="column_row">
<div class='column quartCol first'>
	{$editable.sidebar_content}{if $editable.sidebar_content==""}&nbsp;{/if}
</div>
<div class='column threeCol last'>
	{$editable.main_content}{if $editable.main_content==""}&nbsp;{/if}
</div>
</div>
{/if}
