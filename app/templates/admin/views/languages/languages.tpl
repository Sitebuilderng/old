{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}
	{if $languages|@count > 0}
		{section name=x loop=$languages}
		<li><a data-lang="{$languages[x].name}" fakehref="{$languages[x].abr}" data-item-value="{$languages[x].abr}" class="changeLanguage dontIncludeInPreview" id="{$languages[x].abr}">{$languages[x].name}</a></li>
		{/section}
	{/if}
		{*<a fakehref="en">English </a>*}