{if !$snippetsInPane}
{if !$ajax || $init}
<div class="filterBox clearfix dropshipToolbar">
	<div class="toolbarFilter clearfix">

	<input type="text" class="searchList" value="{if $snippetsFilterSearch}{$snippetsFilterSearch}{else}Search{/if}" target="snippetsWrapper" alt="snippetsActions.php?snippetsAction=search&string="/>

	{if $snippetsFilterSearch}
	<img src="/admin/graphics/bpeditor/remove_menu_item_off.png" class="clearSearch" id='clearSearch'/>
	{/if}

		</div>
		{*
	<label id="filterSearchLabel">Search:</label>
	{if $snippetsSets|@count>1}
		{if $snippetsSets|@count > 7}
			{if $snippetsCurrentPage<5 && $snippetsCurrentPage!=$snippetsSets|@count}
				{foreach from=$snippetsSets item=set key=key name=loop1}
					{if $smarty.foreach.loop1.iteration<=5}
					<a href="snippetsActions.php?snippetsAction=page&page={$set}" class="ajaxHref filterSnippetsSet filterPage_cssOnly{if $snippetsCurrentPage==$set} currentFilterPage_cssOnly{/if}" target="snippetsWrapper">{$set}</a>
					{/if}
				{/foreach}
				{if $snippetsSets|@count>6}
				{if $snippetsSets|@count!=7}
				<span class="pageHellip">&hellip;</span>
				{/if}
				<a href="snippetsActions.php?snippetsAction=page&page={$snippetsSets|@count}" class="ajaxHref filterSnippetsSet filterPage_cssOnly"  target="snippetsWrapper">{$snippetsSets|@count}</a>
				{/if}
			{elseif $snippetsCurrentPage>=5 && $snippetsCurrentPage < $snippetsSets|@count-2}
				<a href="snippetsActions.php?snippetsAction=page&page=1" class="ajaxHref filterSnippetsSet filterPage_cssOnly"  target="snippetsWrapper">1</a>  <span class="pageHellip">&hellip;</span>
				{math equation=x-1 x=$snippetsCurrentPage assign=min}
				{math equation=x+1 x=$snippetsCurrentPage assign=max}

				{foreach from=$snippetsSets item=set key=key name=loop1}
					{if $smarty.foreach.loop1.iteration >= $min && $smarty.foreach.loop1.iteration <= $max}
					<a href="snippetsActions.php?snippetsAction=page&page={$set}" class="ajaxHref filterSnippetsSet filterPage_cssOnly{if $snippetsCurrentPage==$set} currentFilterPage_cssOnly{/if}" target="snippetsWrapper">{$set}</a>
					{/if}
				{/foreach}
				<span class="pageHellip">&hellip;</span> <a href="snippetsActions.php?snippetsAction=page&page={$snippetsSets|@count}" class="ajaxHref filterSnippetsSet filterPage_cssOnly" target="snippetsWrapper">{$snippetsSets|@count}</a>

			{else}
				{if $snippetsSets|@count>=5}
				<a href="snippetsActions.php?snippetsAction=page&page=1" class="ajaxHref filterSnippetsSet filterPage_cssOnly" target="snippetsWrapper">1</a>  {if $snippetsSets|@count!=5}<span class="pageHellip">&hellip;</span> {/if}
				{/if}
				{math equation=x-3 x=$snippetsSets|@count assign=min}

				{foreach from=$snippetsSets item=set key=key name=loop1}
					{if $smarty.foreach.loop1.iteration >= $min && $smarty.foreach.loop1.iteration <= $snippetsSets|@count}
					<a href="snippetsActions.php?snippetsAction=page&page={$set}" class="ajaxHref filterSnippetsSet filterPage_cssOnly{if $snippetsCurrentPage==$set} currentFilterPage_cssOnly{/if}" target="snippetsWrapper">{$set}</a>
					{/if}
				{/foreach}

			{/if}
		{else}
		{foreach from=$snippetsSets item=set key=key name=loop1}
			<a href="snippetsActions.php?snippetsAction=page&page={$set}" class="ajaxHref filterSnippetsSet filterPage_cssOnly{if $snippetsCurrentPage==$set} currentFilterPage_cssOnly{/if}" target="snippetsWrapper">{$set}</a>
		{/foreach}
		{/if}
	{/if}
	<div class="clear"><!-- --></div>
*}
</div>
{/if}
{/if}
{if !$ajax || $searching}
<div class="dropzone"><div></div></div>
{/if}
{if !$ajax || $searching}
<div class="noPages" {if $snippets}style="display:none"{/if}>{$SetSeedLangs.No_Snippets}</div>
{/if}
{foreach from=$snippets item=item key=key name=loop1}
	<div class="snippetItem responsiveListItem dropship_component_item" id="{$item.draftId}" alt="{$item.id}" title="{$item.name|htmlspecialchars}" data-snippet-categories="{$item.snippetCatsCSV}" snippet-id="{$item.id}">
		{*{$item.name|substr:0:15|htmlspecialchars}{if $item.name|substr:0:15|@strlen < $item.name|@strlen}&hellip;{/if}*}
		<span class="overflowEllipsis" title="{$item.name|@htmlspecialchars}">{$item.name|@htmlspecialchars}</span>
		{foreach from=$item.snippetCats item=cat}
			<input type="hidden" id="snipcat{$cat}" value="{$cat}"/>
		{/foreach}
	</div>
<div class="dropzone"><div></div></div>
{/foreach}
{if !$ajax || $searching}
<div class="clear insertNewItemsBefore"></div>
<a href="50" class="showMoreItems">Show more images</a>
{/if}
{if $snippets}{*<div class="listTipUp">{$SetSeedLangs.Tip_List_No_Sort}</div>*}{/if}
{if !$ajax}
<div id="snippetCatsMenuList" style="display:none">
	{*<div class="fakeAddFormItem iconbarAddProductCategory">{$SetSeedLangs.New_Product_Category|htmlspecialchars}</div>*}
	<div class="responsiveListAddForm addSnippetCategory hideOnReset" style="display:none">
	<div class="imageContextEditFieldset">
		<div class="imageContextEditLabel">{$SetSeedLangs.Snippet_Category_Name|htmlspecialchars}</div>
		<div class="imageContextEditInputWrap"><input type="text" name="" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
	</div>

	</div>
</div>
{/if}
