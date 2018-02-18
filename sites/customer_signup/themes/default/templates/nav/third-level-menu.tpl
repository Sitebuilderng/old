{* Third level sub navs *}
{if $subSubs|@count>0}
	<ul>
	{foreach from=$subSubs item=sub key=key2 name=loop3}
		<li class="kbItem1 {if $sub.subSubSubs|@count>0}hasSubs{else}kbArticle{/if} {if $sub.id==$content.id}current{/if} {if $smarty.foreach.loop3.iteration=="1"}firstSubSub{/if} {if $sub.id==$content.parent}showingSubUL{/if}"><a href="/{$sub.topParentUrl}/{$sub.parentUrl}/{$sub.url}/">{$sub.pagetitle}</a>
		
		
		
		{include file=nav/fourth-level-menu.tpl subSubSubs=$sub.subSubSubs}
		
		</li>
	{/foreach}
	</ul>
{/if} 
