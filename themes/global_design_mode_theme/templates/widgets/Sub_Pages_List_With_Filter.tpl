<div id="subPageIndexProducts">
	<div id="filterBox" class="styleBox clearfix"></div>
{foreach from=$content.subPageIndex item=item key=key name=loop1}

	<div class="styleBox subPageProducts clearfix{if $smarty.foreach.loop1.iteration is div by 3} last{/if}">
		{if $item.page_preview==""}
		{if $item.imgUrl}<a href="{$item.fullUrl}"><div class="subPageThumb" style="background-image:url({$item.imgUrl}?s=80)" ></div></a>{else}<div class="subPageThumb" style="width:1px;"></div>{/if}
		
		<a href="{$item.fullUrl}"><span class="title">{$item.title}</span></a>
		{else}
		{$item.page_preview}
		{/if}
		<div class="productMeta">
			{$item.keywords}
		</div> <!-- end #name -->
		</div>
{/foreach}
</div>