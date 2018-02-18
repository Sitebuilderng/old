{if !$ajax}
{*}
<div class="topBar">
	<a href='' class="topBarButtonAdd" id="uploadFile">{$SetSeedLangs.Upload_New_File|htmlspecialchars}</a>
	{if !$showingMore}
	<div class="filterBox clearfix belowRule">	
	{if $searchDownloads}
	<img src="/admin/graphics/bpeditor/remove_menu_item_off.png" href="pageActions.php?pageAction=showMoreFiles&search=&start=0" class="ajaxHref clearSearch clearSearchCSS" target="downloads"/>
	{/if}

	<input type="text" class="searchList" value="{if $searchDownloads}{$searchDownloads}{else}{$SetSeedLangs.Search|htmlspecialchars}{/if}" target="downloads" alt="pageActions.php?pageAction=showMoreFiles&start=0&search="/>

	</div>
	{/if}
	<span class="topBarTitle withSearch withBackButton">{$SetSeedLangs.Files|htmlspecialchars}</span>
</div>*}
<div class="cleverFilterBar">
		
		<div class="subHeaderLeftMenuItem hideInLight">
			<div class="target filesContextMenu">
				{$SetSeedLangs.Edit|htmlspecialchars}
			</div>
			<div class="triShadow"></div>
			<ul class="contextMenu">
				{*<li><a class="iconbarDeleteFiles greyedOut bpe_selection_tool"><span class="key hideIfTouch">←</span>{$SetSeedLangs.Delete|htmlspecialchars}</a></li>
				<li class='iconbarRule'></li>*}
				<li><a class="iconbarSelectAllFiles"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
				<li><a class="iconbarDeselectAllFiles"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
			</ul> 
			<div class="mtri"></div>
		</div>


		<div class="subHeaderLeftMenuItem right ">
			<div class="target">
				<svg class="searchSVG {if $searchDownloads}searching{/if}" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
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
						<div class="imageContextEditInputWrap"><input type="text" class="okToSendWhenFilled focus searchList" value="{if $searchDownloads}{$searchDownloads}{/if}" alt="pageActions.php?pageAction=showMoreFiles&start=0&search=" target="downloads"/></div>
					</div>
					<div class="sendMe"></div>
					
					<span class="clearSearch" href="pageActions.php?pageAction=showMoreFiles&search=&start=0" style="{if !$searchDownloads}display:none{/if}"></span>
					
					<div class="clear"><!-- --></div>
				</form>
			</ul> 
			<div class="mtri"></div>
		</div>	
		<div class="uploadFile subHeaderButton primaryItem">{$SetSeedLangs.Upload_New_File|htmlspecialchars}</div>
		
	
</div>
<div class="pagesScroll">
	<div class="insertTarget">
	<div class="dropzone"><div></div></div>
{/if}
{if $firstSearch}
<div class="dropzone"><div></div></div>
{/if}
{section loop=$fileList name=loop1}
	<div alt="/downloads/{$fileList[loop1][0]|htmlspecialchars|rawurlencode}" class="responsiveListItem menu_hidden_extras menu_with_options downloadableFile" id="{$fileList[loop1][0]|htmlspecialchars}" data-url="{$fileList[loop1][0]|htmlspecialchars|rawurlencode}">
		{*<div class="responsiveListItemImage">
			<img src="graphics/files-icon.png" alt="" style="margin:5px 10px 0;"/>
		</div>*}
		<span class="overflowEllipsis">{$fileList[loop1][0]|htmlspecialchars}</span></div>
	<div class="dropzone"><div></div></div>
	
{/section}
{if $fileList|@count==0}
{if !$ajax}
<div class="noPages">{$SetSeedLangs.No_Files_Added}</div>
{/if}
{/if}
{if !$ajax||$searchDownloads}
<div class="clear insertNewItemsBefore"></div>

<a alt="pageActions.php?pageAction=showMoreFiles&search={$searchDownloads}&start=" id="50" class="showMoreItems" href="50"></a>

</div>
{/if}
{if !$ajax}
</div>
{/if}