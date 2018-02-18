{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}
<div class="responsiveListItem clearfix {if !$page.okperms}notokperms{/if} {if $breadcrumb}notDraggable breadcrumbPage{/if} menu_with_options editPageBar menu_hidden_extras{if $page.live!="yes"} offline{/if} {if !$master && $priv_pages=="0" && $page.live=="yes"}notEditable{/if} {if $page.subs!=""}hasSubs{else}noSubs{/if} {if $page.security!=""}hasSecurity{/if} type_{$page.type} {if $page.exclude=="1"}excluded{/if}" data-redirect-first="{$page.redirect_first}" data-excluded="{$page.exclude}" id="{$page.draftId}" data-static-pages-versions-id="{$page.static_pages_versions_id}" rel="{$page.id}" title="{$page.pagetitle|@htmlspecialchars}" alt="{$page.fullURL}" data-security="{if $page.security==""}public{else}{$page.security}{/if}" data-pane-status="{if $page.live=="yes"}live{else}offline{/if}" data-lang="{$page.language}" data-view-sub-data="{if $page.type=="topLevel"}{$page.id}|subLevel{/if}{if $page.type=="subLevel"}{$page.id}|subSubLevel{/if}{if $page.type=="subSubLevel"}{$page.id}|subSubSubLevel{/if}" data-redirect-url="{$page.redirect_url}" data-page-redirect-to="{if $page.redirect_url!=''}yes{/if}" data-new-window="{$page.new_window}" data-permissions="{$page.permissions_csv}" data-ok-perms="{$page.okperms}">
	
	<span class="responsiveListItemPadlock" style="{if $page.security!=""}display:block;{else}display:none;{/if}"></span>
	{assign var="svgDown" value="<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
	 viewBox=\"0 0 800 600\" enable-background=\"new 0 0 800 600\" xml:space=\"preserve\">
<circle cx=\"292.079\" cy=\"201.479\" r=\"36.612\"/>
<circle cx=\"292.079\" cy=\"287.479\" r=\"36.612\"/>
<circle cx=\"292.079\" cy=\"373.288\" r=\"36.612\"/>
<circle cx=\"381.079\" cy=\"373.288\" r=\"36.612\"/>
<polygon points=\"544.538,373.094 438.229,434.73 438.006,311.845 \"/>
</svg>
"}
	
	{assign var="svgUp" value="<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 800 600\" enable-background=\"new 0 0 800 600\" xml:space=\"preserve\">
<circle cx=\"507.926\" cy=\"398.118\" r=\"36.612\"/>
<circle cx=\"507.926\" cy=\"312.118\" r=\"36.612\"/>
<circle cx=\"507.926\" cy=\"226.309\" r=\"36.612\"/>
<circle cx=\"418.926\" cy=\"226.309\" r=\"36.612\"/>
<polygon points=\"255.467,226.503 361.777,164.866 362,287.752 \"/>
</svg>
"}
		

	{*<div class="topLevelHandle pageDrag"></div>*}
	{if $breadcrumb}
		{if $page.type=="topLevel"}
		<div class="showSubPages backToMainPages upLevel" id="{$page.id}|" title="{$SetSeedLangs.Back}">{$svgUp}</div>
		{/if}
		{if $page.type=="subLevel"}
		<div class="showSubPages upLevel" id="{$page.parent}|subLevel" title="{$SetSeedLangs.Back}">{$svgUp}</div>
		{/if}
		{if $page.type=="subSubLevel"}
		<div class="showSubPages upLevel" id="{$page.parent}|subSubLevel" title="{$SetSeedLangs.Back}">{$svgUp}</div>
		{/if}
		{if $page.type=="subSubSubLevel"}
		<div class="showSubPages upLevel" id="{$page.parent}|subSubSubLevel" title="{$SetSeedLangs.Back}">{$svgUp}</div>
		{/if}
	{else}

		{if $page.type=="topLevel" && $page.subs!=0}
		<div class="showSubPages{if $page.subs==""} hideInLight{/if}" id="{$page.id}|subLevel" title="{$SetSeedLangs.View_Add_Subpages}">{$svgDown}{if $page.subs!=""}
	<span class="responsiveListItemInfo">{$page.subs}</span>
	{/if}</div>
		{/if}
		{if $page.type=="subLevel" && $page.subs!=0}
		<div class="showSubPages{if $page.subs==""} hideInLight{/if}" id="{$page.id}|subSubLevel" title="{$SetSeedLangs.View_Add_Subpages}">{$svgDown}{if $page.subs!=""}
	<span class="responsiveListItemInfo">{$page.subs}</span>
	{/if}</div>
		{/if}
		{if $page.type=="subSubLevel" && $page.subs!=0}
		<div class="showSubPages{if $page.subs==""} hideInLight{/if}" id="{$page.id}|subSubSubLevel" title="{$SetSeedLangs.View_Add_Subpages}">{$svgDown}{if $page.subs!=""}
	<span class="responsiveListItemInfo">{$page.subs}</span>
	{/if}</div>
		{/if}
	{/if}
		{if $page.homepage=="yes"}
		<div class="homepage"></div>
		{/if}
		{if $page.live!="yes"}<span class='responsiveListItemInfo offlineLabel'>{$SetSeedLangs.Offline}</span>{/if}
{*		<div class="tickWrapper"><a href="#" class="tick"></a></div>*}
		{*
		 {if $page.locked==""}<div class="show_choices bpe_remove_menu_item {if $master || $priv_pages=="1" || $page.live!="yes"}{else} faded{/if}" {if $master || $priv_pages=="1" || $page.live!="yes"}{else}title="You do not have sufficient privileges to remove an online page"{/if}>{if $master || $priv_pages=="1" || $page.live!="yes"}
		 	<div class="choices confirmDelete">
				<div class="choices_inner">
					<div class="choices_inner_inner">
						<span class='bpe_menu_group'>Delete page. Are you sure?</span>
						<div class="bpe_rule"></div>
						<a href="" class="cancel_confirm">No</a>
						<a href="" class="confirmDeletePage" id="{$page.id}">Yes</a>
					</div>
				</div>
			</div>{/if}
		 </div>{else}<span style="width:16px;float:right;height:5px;"></span>
	
		{/if}*}

		{*
		{if $type=="main"}<div class="toggleSubPage hoverButton" id="subPage-{$page.id}" title="Add a subpage to: {$page.pagetitle|@htmlspecialchars}"><div>Add Subpage <img src="graphics/add.png" alt=""/></div></div>{/if}
		{if $type=="sub"}<div class="toggleSubSubPage hoverButton" id="subSubPage-{$page.id}" title="Add a subpage to: {$page.pagetitle|@htmlspecialchars}"><div>Add Subpage <img src="graphics/add.png" alt=""/></div></div>{/if}*}
		{*
		<div class="menu_options {if $master || $priv_pages=="1"}{else}faded{/if}" {if $master || $priv_pages=="1"}{else}title="You do not have sufficient privileges to change page status"{/if}>
			<div class="option_selected">
				{if $page.live!="yes"}
				Offline
				{else}
				Online
				{/if}
			</div>{if $master || $priv_pages=="1"}
			<div class="choices toggleLive">
				<div class="choices_inner">
					<div class="choices_inner_inner">
						{if $page.live=="yes"}
						<a href="yes|{$page.id}" class="choice_selected">Online</a>
						<a href="|{$page.id}">Offline</a>
						{else}
						<a href="yes|{$page.id}">Online</a>
						<a href="|{$page.id}" class="choice_selected">Offline</a>
						{/if}
					</div>
				</div>
			</div> {/if}
		</div>
		{if $security=="true"}
		<div class="menu_options">
			<div class="option_selected">
				{if $page.security!=""}
				<img src="graphics/locked.png" alt=""/>
				{else}
				<img src="graphics/unlocked.png" alt=""/>
				{/if}
			</div>
			<div class="choices toggleProtection">
				<div class="choices_inner">
					<div class="choices_inner_inner">
						<a href="|{$page.id}"{if $page.security==""}class="choice_selected"{/if} >Public</a>
						<div class="bpe_rule"></div>
						{foreach from=$accessGroupsMenu item=group key=key name=loop1}
							<a href="{$group[1]}|{$page.id}" {foreach from=","|explode:$page.security item=assignedGroup}
								{if $assignedGroup == $group[1]}class="choice_selected"{/if}
							{/foreach}>{$group[0]}</a>
						{/foreach}
					</div>
				</div>
			</div>
		</div>
		{/if}
		{if $languages|@count>0}
		{if $type=="sub"|| $type=="subSubLevel"}{else}
			<div class="menu_options">
				<div class="option_selected">
					Language
				</div>
				<div class="choices toggleLanguage">
					<div class="choices_inner">
						<div class="choices_inner_inner">
							{foreach from=$languages item=lang key=key name=loop1}
								<a href="{$lang.abr}" {if $page.language==$lang.abr}class="bpe_current"{/if} id="{$page.id}">{$lang.name|@htmlspecialchars}</a>
							{/foreach}
						</div>
					</div>
				</div>
			</div>
			{/if}
		{/if}
		*}
		{*}
		{if $page.homepage=="yes"}
		<div class="makeHomepage visible" id="{$page.id}"></div>
		{/if}*}
		{*
		{if $page.homepage!="yes"}
		<div class="makeHomepage" id="{$page.id}">
			<div class="choices confirmDelete">
				<div class="choices_inner">
					<div class="choices_inner_inner">
						<span class='bpe_menu_group'>Change Homepage. Are you sure?</span>
						<div class="bpe_rule"></div>
						<a href="" class="cancel_confirm">No</a>
						<a href="" class="makeHomepageGo" id="{$page.id}" title="Make this page your homepage">Yes</a>
					</div>
				</div>
			</div>
		</div>
		
		{/if}*}{*
		{if $security=="true"}
			{if $page.security=="true"}
			<img src="graphics/locked_icon.png" alt="" class="locked_icon"/>
			{/if}
		{/if}*}
		{if $page.picUrl!=""}
		<div class="responsiveListItemImage" {if $page.picUrl!=""}style="background: url('{$page.picUrl}?width=100&amp;height=100&amp;shrink=false') 50% 50% no-repeat;background-size:50px 50px;"{/if}>
			{if $page.picUrl==""}
			{if $type=="main"}<span class="pagesIcon"></span>{/if}
			{if $type=="sub"}<span class="pagesIcon"></span>{/if}
			{if $type=="subSubLevel"}<span class="pagesIcon"></span>{/if}
			{if $type=="nonlinker"}<span class="separatePagesIcon"></span>{/if}
			{/if}
			</div>
		{/if}
			{*
			{if $type=="subSubLevel"}
				{if $security=="true"}
				<span class="overflowEllipsis" title="{$page.pagetitle|@htmlspecialchars}{if !$master && $priv_pages=="0" && $page.live=="yes"} - You do not have sufficient privileges to edit this page{/if}">{$page.pagetitle@htmlspecialchars}</span>
				{else}
				<span class="overflowEllipsis" title="{$page.pagetitle|@htmlspecialchars}{if !$master && $priv_pages=="0" && $page.live=="yes"} - You do not have sufficient privileges to edit this page{/if}">{$page.pagetitle|substr:0:45|@htmlspecialchars}{if $page.pagetitle|substr:0:45|@strlen < $page.pagetitle|@strlen}&hellip;{/if}</span>
				{/if}
			{elseif $type=="sub"}
				{if $security=="true"}
				<span class="overflowEllipsis" title="{$page.pagetitle|@htmlspecialchars}{if !$master && $priv_pages=="0" && $page.live=="yes"} - You do not have sufficient privileges to edit this page{/if}">{$page.pagetitle|substr:0:33|@htmlspecialchars}{if $page.pagetitle|substr:0:33|@strlen < $page.pagetitle|@strlen}&hellip;{/if}</span>		
				{else}
				<span class="overflowEllipsis" title="{$page.pagetitle|@htmlspecialchars}{if !$master && $priv_pages=="0" && $page.live=="yes"} - You do not have sufficient privileges to edit this page{/if}">{$page.pagetitle|substr:0:38|@htmlspecialchars}{if $page.pagetitle|substr:0:38|@strlen < $page.pagetitle|@strlen}&hellip;{/if}</span>
				{/if}
			{else}
				{if $languages|@count>0}
					{if $security=="true"}
					<span class="titleHover" title="{$page.pagetitle|@htmlspecialchars}{if !$master && $priv_pages=="0" && $page.live=="yes"} - You do not have sufficient privileges to edit this page{/if}">{$page.pagetitle|substr:0:20|@htmlspecialchars}{if $page.pagetitle|substr:0:25|@strlen < $page.pagetitle|@strlen}&hellip;{/if}</span>
					{else}
					<span class="titleHover" title="{$page.pagetitle|@htmlspecialchars}{if !$master && $priv_pages=="0" && $page.live=="yes"} - You do not have sufficient privileges to edit this page{/if}">{$page.pagetitle|substr:0:25|@htmlspecialchars}{if $page.pagetitle|substr:0:25|@strlen < $page.pagetitle|@strlen}&hellip;{/if}</span>
					{/if}
				{else}
					{if $security=="true"}
					<span class="titleHover" title="{$page.pagetitle|@htmlspecialchars}{if !$master && $priv_pages=="0" && $page.live=="yes"} - You do not have sufficient privileges to edit this page{/if}">{$page.pagetitle|substr:0:30|@htmlspecialchars}{if $page.pagetitle|substr:0:30|@strlen < $page.pagetitle|@strlen}&hellip;{/if}</span>
					{else}
					<span class="titleHover" title="{$page.pagetitle|@htmlspecialchars}{if !$master && $priv_pages=="0" && $page.live=="yes"} - You do not have sufficient privileges to edit this page{/if}">{$page.pagetitle|substr:0:35|@htmlspecialchars}{if $page.pagetitle|substr:0:35|@strlen < $page.pagetitle|@strlen}&hellip;{/if}</span>
					{/if}
				{/if}
			{/if}
			*}
			{*}
			{if $page.blog!=""}
			<div class="responsiveListItemBlog"></div>
			{/if} {if $page.shop!=""}<div class="responsiveListItemShop"></div>{/if}*}
			<span class="overflowEllipsis">{$page.pagetitle|@htmlspecialchars}</span>
			{foreach from=$page.permissions_array item=grp} 
				<input type="hidden" id="pagepermissiongroup{$grp}" value="{$grp}"/>
			{/foreach}
		
{*
		{if $type=="sub"}</div>{/if}
		{if $type=="subSubLevel"}</div>{/if}*}

</div>
{*
{if $type=="main"}
<form action="pageActions.php" method="post" id="subPage-{$page.id}form" style="padding-left:38px;display:none" class="subPageForm menu_with_options">
	<input type="hidden" name="pageAction" value="addPage"/>
	<input type="hidden" name="type" value="subLevel"/>
	<input type="hidden" name="parent" value="{$page.id}"/>
	
	<img src="graphics/subPageIcon.png" alt=""/> <input type="text" name="title" value=" Type new page name and hit enter" class="pageMenuInput greyedOut focus"/></span>

</form>{/if}
{if $type=="sub"}
<form action="pageActions.php" method="post" id="subSubPage-{$page.id}form" style="padding-left:58px;display:none" class="subSubPageForm menu_with_options">
	<input type="hidden" name="pageAction" value="addPage"/>
	<input type="hidden" name="type" value="subSubLevel"/>
	<input type="hidden" name="parent" value="{$page.id}"/>
	
	<img src="graphics/subPageIcon.png" alt=""/> <input type="text" name="title" value=" Type new page name and hit enter" class="pageMenuInput greyedOut focus"/>

</form>{/if}*}
{if !$breadcrumb}
<div class="dropzone"><div></div></div>
{/if}