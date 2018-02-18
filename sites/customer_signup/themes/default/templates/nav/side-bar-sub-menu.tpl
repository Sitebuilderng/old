{*STATIC SUB NAVS *}
<nav id="sidebarNav">
{if $staticSubs|@count>0}

	{* remove the following foreach to stop the parent top level page showing as first item in the left nav*}

	{foreach from=$mainNav item=item key=key name=loop1}
	{if $item.url == $content.url && $item.url=="support"}
	<div id="supportBannerLeft"><a href="/{$item.url}/">Back to {$item.title} home</a></div>
	{elseif ($item.id == $content.parent || $item.id == $content.topParent) && $item.url=="support"}
	<div id="supportBannerLeft"><a href="/{$item.url}/">Back to {$item.title} home</a></div>
	{/if}
	{/foreach}
	{* *}


	<div class="kbItem kbItemLeft">
	{foreach from=$staticSubs item=sub key=key2 name=loop2}
	{if ($content.parent==$sub.subSubs[0].parent && $content.type!="topLevel") || $sub.url == $content.url || ($content.id==$sub.subSubs[0].parent || $content.parent==$sub.subSubs[0].parent || $content.subParent==$sub.subSubs[0].parent)}
	{strip}
	<h3>{$sub.pagetitle}</h3>
	{if $content.id==$sub.subSubs[0].parent || $content.parent==$sub.subSubs[0].parent || $content.subParent==$sub.subSubs[0].parent}
		
		{include file=nav/third-level-menu.tpl subSubs=$sub.subSubs}
	
	{/if}
	</li>
	{/strip}
	{/if}
	{/foreach}
	</div>

{/if} 
</nav>
{* END SUB NAV *}
