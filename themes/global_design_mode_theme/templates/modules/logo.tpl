<div id="branding" {if $theme_vars_main_logo_fixed}data-logo-fixed-img="/images/themegraphics/{$theme_vars_main_logo_fixed}"{/if}  {if $logo_fixed}data-logo-fixed-img="/images/themegraphics/{$logo_fixed}" data-logo-normal-img="{if $logo}/images/themegraphics/{$logo}{else}{if $theme_vars_main_logo}/images/themegraphics/{$theme_vars_main_logo}{else}/graphics/logo.png{/if}{/if}"{/if} class="module clearfix align-{$align} clear-{$clear} {if $width}width width-{$width} width-valign-{$valign}{/if} {if !$width}valign-{$valign}{if $valign} valign{/if}{/if} logo-module {if $logo_fixed||$theme_vars_main_logo_fixed}with-fixed-logo-version{/if}">
	<a href="{if $link!=""}{$link}{else}/{/if}" {if $link!=""}target="_blank"{/if}><img src="{if $logo}/images/themegraphics/{$logo}{else}{if $theme_vars_main_logo}/images/themegraphics/{$theme_vars_main_logo}{else}/graphics/logo.png{/if}{/if}" alt="{$sitetitle}"/></a>
</div>

{*

	How to use this module. 
	
	Add a code block like this to your ~/templates/main.tpl inside a section.row element:
	
		{include file=modules/logo.tpl
			property=value
			...
		}
	
	You can use the following properties and values:
	align: left (default)|center|right|justify
	valign: top (default)|bottom|middle
	clear: none (default)|left|right
	width: auto (default) | one_half | three_quarters | four_fifths | three_fifths | two_fifths | one_fifth | one_quarter | two_thirds | one_third
	
*}