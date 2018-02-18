{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}

{if $showingMore}
	{if $type=="nonLinking"}
		{section name=nonLinker loop=$nonLinkers}
			{include file=views/pages/pageRow.tpl page=$nonLinkers[nonLinker] type=nonlinker languages=$languages iteration=$smarty.section.nonLinker.iteration}
		{/section}
	{else}		
		{assign var=dragBelow value=false}
		{section name=pages loop=$pages}
{*
{if $pages[pages].exclude=="1" && $dragBelow==false}
	{assign var=dragBelow value=true}
	<div id="dragBelowToExclude"><span>{$SetSeedLangs.Drag_Below_To_Exclude|htmlspecialchars}</span></div>
	<div class="dropzone hideInLight"><div></div></div>
{/if}*}	
			{include file=views/pages/pageRow.tpl page=$pages[pages] type=main languages=$languages iteration=$smarty.section.pages.iteration}
		{/section}
		{*
		{if $dragBelow==false}
			{if $type==""}
				<div id="dragBelowToExclude"><span>{$SetSeedLangs.Drag_Below_To_Exclude|htmlspecialchars}</span></div>
				<div class="dropzone hideInLight"><div></div></div>
			{/if}
		{/if}*}
	{/if}
{else}

		
	{if $type!="nonLinking"}
	
	
	<div id="mainMenuPagesMain" class="paneContents">
		
		
		<div class="topLevelSortable" rel="{$pages[0].order}">
			
			
			
			
			
			{if $type!="nonLinking"}
			<div class="movePageDestinaiton" id="{$type}|{$viewingSubs}">
				<div></div>
			</div>
			<div class="copyPageDestinaiton" id="{$type}|{$viewingSubs}">
				<div></div>
			</div>
			
			
			{/if}
			{include file=views/pages/pagesFilter.tpl}

			<div class="pagesScroll {*{if $languages|@count>0}withFilterBar{/if}*}">
				

				
				

				<div class="insertTarget">	
				{if $type=="subLevel"}
				<div class="fakeDropzone"></div>
				{include file=views/pages/pageRow.tpl page=$parent type=main languages=$languages iteration=1 breadcrumb=true}
				{/if}

				{if $type=="subSubLevel"}
				<div class="fakeDropzone"></div>
				{include file=views/pages/pageRow.tpl page=$top_parent type=main languages=$languages iteration=1 breadcrumb=true}

				<div class="fakeDropzone"></div>
				{include file=views/pages/pageRow.tpl page=$parent type=main languages=$languages iteration=1 breadcrumb=true}
				{/if}

				{if $type=="subSubSubLevel"}
					<div class="fakeDropzone"></div>
					{include file=views/pages/pageRow.tpl page=$top_parent type=main languages=$languages iteration=1 breadcrumb=true}
					<div class="fakeDropzone"></div>
					{include file=views/pages/pageRow.tpl page=$sub_parent type=main languages=$languages iteration=1 breadcrumb=true}
					<div class="fakeDropzone"></div>
					{include file=views/pages/pageRow.tpl page=$parent type=main languages=$languages iteration=1 breadcrumb=true}
				{/if}
				{if $pages|@count==0}
				{if $filterSearch}
					<span class='noPages type_{$type}'>{$SetSeedLangs.No_Pages_Found_Searching|htmlspecialchars}</span>
				{else}
					{if $type==""}
					<span class='noPages type_{$type}'>{$SetSeedLangs.No_Pages_Found|htmlspecialchars}</span>
					{/if}
				{/if}
				{/if}
				{if $type=="subLevel"}
				<form action="pageActions.php" method="post" id="subPage-{$viewingSubs}form"
				 class="hideInLight hideOnReset subPageForm responsiveListAddForm type_{$type}" style="display:none;margin-top:22px;" >
					<div class="hideInLight">
						<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Page_Title}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>
					<input type="hidden" name="pageAction" value="addPage"/>
					<input type="hidden" name="type" value="subLevel"/>
					<input type="hidden" name="parent" value="{$viewingSubs}"/>

					</div>
				</form>
				{/if}
				{if $type=="subSubLevel"}
				<form action="pageActions.php" method="post" id="subSubPage-{$viewingSubs}form" class="hideInLight type_{$type} subSubPageForm responsiveListAddForm hideOnReset" style="display:none;margin-top:22px;">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Page_Title}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

					<input type="hidden" name="pageAction" value="addPage"/>
					<input type="hidden" name="type" value="subSubLevel"/>
					<input type="hidden" name="parent" value="{$viewingSubs}"/>

				</form>
				{/if}
				{if $type=="subSubSubLevel"}
				
				<form action="pageActions.php" method="post" id="subSubSubPage-{$viewingSubs}form"  class="hideInLight subSubSubPageForm responsiveListAddForm type_{$type} hideOnReset" style="display:none;margin-top:22px;">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Page_Title}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

					<input type="hidden" name="pageAction" value="addPage"/>
					<input type="hidden" name="type" value="subSubSubLevel"/>
					<input type="hidden" name="parent" value="{$viewingSubs}"/>
					

				</form>
				{/if}
				{if $type==""}
				<form action="pageActions.php" method="post" id="addTopLevelForm" class="hideInLight responsiveListAddForm hideOnReset" style="display:none">
					
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Page_Title}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

					 <input type="hidden" name="pageAction" value="addPage"/>
					<input type="hidden" name="type" value="topLevel"/>
					{if $filter}
					<input type="hidden" name="language" value="{$filter}"/>
					{/if}
				</form>
				{/if}



				<div class="dropzone"><div></div></div>
				{assign var=dragBelow value=false}
				{counter assign=includedItems}
				{section name=pages loop=$pages}
				{if $pages[pages].exclude=="1" && $dragBelow==false}
					{if $includedItems==0}
					<div class="dropzone hideInLight"><div></div></div>
					{/if}
					{assign var=dragBelow value=true}
					{*<div id="dragBelowToExclude"><span>{$SetSeedLangs.Drag_Below_To_Exclude|htmlspecialchars}</span></div>
					<div class="dropzone hideInLight"><div></div></div>*}
				{/if}
				{include file=views/pages/pageRow.tpl page=$pages[pages] type=main languages=$languages iteration=$smarty.section.pages.iteration}
				{counter}
				{/section}
				{if $dragBelow==false}
				{if $type==""}
				{if $pages|@count!=0}
				{*<div id="dragBelowToExclude"><span>{$SetSeedLangs.Drag_Below_To_Exclude|htmlspecialchars}</span></div>
				<div class="dropzone hideInLight"><div></div></div>*}
				{/if}
				{/if}
				{/if}
							<div class="clear insertNewItemsBefore"></div>
							<a href="50" class="showMoreItems"></a>

					
							
					
				</div>
			</div>
			<div class="fakePagesScroll"></div>
		</div>
	
	<div class="paneTools">
		
		{include file=views/pages/paneTools.tpl}
		
		<div class="disabledMask"></div>
	</div>
	</div>
	{/if}
	
{/if}

