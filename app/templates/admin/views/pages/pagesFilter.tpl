<div class="topBar">
	<div class="returnToLP"></div>
	<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
	<h1>{$SetSeedLangs.Pages|htmlspecialchars}</h1>
</div>
<div class="cleverFilterBar clearfix">
	

	<div class="subHeaderLeftMenuItem hideInLight">
			<div class="target" id="pagesContextMenu">
				{$SetSeedLangs.Edit|htmlspecialchars}
			</div>
			<div class="triShadow"></div>
			<ul class="contextMenu">
				<li><a id="iconbarCutPages" class="greyedOut bpe_selection_tool"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.X|htmlspecialchars}</span>{$SetSeedLangs.Cut|htmlspecialchars}</a>		</li>
		<li><a id="iconbarCopyPages" class="greyedOut bpe_selection_tool"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.C|htmlspecialchars}</span>{$SetSeedLangs.Copy|htmlspecialchars}</a></li>
		<li><a id="iconbarPastePages" class="{if !$pagesInClipboard}greyedOut {/if}"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.V|htmlspecialchars}</span>{$SetSeedLangs.Paste|htmlspecialchars}</a></li>
		{*<li><a id="iconbarDuplicatePages" class="greyedOut bpe_selection_tool"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.D|htmlspecialchars}</span>{$SetSeedLangs.Duplicate|htmlspecialchars}</a></li>
		<li class='iconbarRule'></li>
		<li><a id="iconbarDeletePages" class="greyedOut bpe_selection_tool"><span class="key hideIfTouch">←</span>{$SetSeedLangs.Delete|htmlspecialchars}</a></li>*}
		<li class='iconbarRule'></li>
		<li><a id="iconbarSelectAllPages"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
		<li><a id="iconbarDeselectAllPages"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
			</ul> 
			<div class="mtri"></div>
		</div>	
	
	<div class="subHeaderLeftMenuItem right">
		<div class="target">
			<svg class="searchSVG {if $filterSearch}searching{/if}" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
				<path d="M618.852,511.613c17.607,22.912,13.308,55.759-9.604,73.367l0,0c-22.912,17.606-55.76,13.306-73.367-9.606L375.36,366.49
		c-17.607-22.912-13.307-55.759,9.605-73.367l0,0c22.912-17.607,55.759-13.306,73.367,9.606L618.852,511.613z"/>
				<path d="M364.907,17.917C257.967-2.391,154.813,67.838,134.505,174.777s49.921,210.094,156.86,230.401
				c106.939,20.308,210.095-49.92,230.401-156.86C542.075,141.379,471.847,38.225,364.907,17.917z M425.232,229.986
				c-10.184,53.625-61.91,88.841-115.535,78.657c-53.625-10.183-88.841-61.909-78.658-115.534
				c10.184-53.624,61.911-88.841,115.535-78.658C400.199,124.635,435.416,176.362,425.232,229.986z"/>
			</svg>
		</div>
		<div class="triShadow"></div>
		<ul>
			<form action="" method="" class="filterBox">
				
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel">{$SetSeedLangs.Search|htmlspecialchars}</div>
					<div class="imageContextEditInputWrap"><input type="text" class="okToSendWhenFilled focus pageFilterSearch" value="{if $filterSearch}{$filterSearch}{/if}" /></div>
				</div>
				<div class="sendMe"></div>
				{if $filterSearch}
				<span class="clearSearch"></span>
				{/if}
				{if $filter}<input type="hidden" name="filter" value="{$filter}" id="filter"/>{/if}
				<div class="clear"><!-- --></div>
			</form>
		</ul> 
		<div class="mtri"></div>
	</div>	

	{if $type==""}
		
		<div class="subHeaderLeftMenuItem right " id="adminPagesLangFilter" {if $languages|@count==1}style="display:none"{/if}>
			<div class="target notTooLong">
				{if !$filter}
				{$SetSeedLangs.Filter_By_Language|htmlspecialchars}
				{else}
				{foreach from=$languages item=item key=key name=loop1}
				{if $filter==$item.abr}{$item.name}{/if}
				{/foreach}
				{/if}
			</div>
			<div class="triShadow"></div>
			<ul id="pagesFilter">
				<li><a href="" class="filterLink {if !$filter}bpe_current{/if} showAll" id="" data-item-value=""><span>{$SetSeedLangs.All}</span></a></li>
				<div id="pagesFilterToUpdate">
				{foreach from=$languages item=item key=key name=loop1}
				<li><a href="" class="filterBy filterLink {if $filter==$item.abr}bpe_current{/if}" data-item-value="{$item.abr}" id="{$item.abr}"><span>{$item.name}</span></a>	</li>
				{/foreach}
				</div>
			</ul> 
			<div class="mtri"></div>
		</div>	


	{/if}
	{if $deletedPages}
	<div class="subHeaderLeftMenuItem right hideInLight">
			<div class="target">
				{$SetSeedLangs.Trash|htmlspecialchars}
			</div>
			<div class="triShadow"></div>
			
		<ul id="deletedPages">	
		{if $deletedPages}
		{foreach from=$deletedPages item=deletedPage key=key name=loop1}
			<li><a href="{$deletedPage.id}">{*<span class="key" style="width:200px">{$deletedPage.deleted|date_format:"%b %d, %Y at %H:%I"}</span>*}<span class="overflowEllipsis">{$deletedPage.pagetitle|@htmlspecialchars}</span>  </a></li>
		{/foreach}
		{else}
		<li><a class="greyedOut">{$SetSeedLangs.Not_Deleted_Pages}</a></li>
		{/if}


	
			</ul>
		
			<div class="mtri"></div>
		</div>	
{/if}

		
		<div class="subHeaderButton primaryItem hideInLight" id="iconbarAddPage">
			{$SetSeedLangs.New_Page|htmlspecialchars}
		</div>


		
	</div>