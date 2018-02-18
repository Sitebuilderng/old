{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}

			{if $redirectOnExpire}
			<input type="hidden" id="redirectOnExpire" value="{$redirectOnExpire}" />
			{/if}
			<input type="hidden" name="LangsVarsJson" value="{$SetSeedLangsJson|htmlspecialchars}" id="LangVarsJson"/>
			<input type="hidden" name="" value="{$hidden_tips}" id="hiddenTips"/>
			{if $hide_tips}
			<input type="hidden" name="" value="1" id="hide_tips"/>
			{/if}
			<div style="display:none">
			<div id="galleriesAdmin"></div>
			<div id="calCatsList">{include file=admin/views/calendar/categories.tpl}</div>
			<div id="blogEntries"></div>
			<div id="formsWrapper"></div>
			</div>
	<div id="bothPanes">
			<div id="livepreviewResize"><div id="resizeHandle">
			<div class="handle1"></div>
			<div class="handle2"></div>
			<div class="handle3"></div>
			</div></div>
			{if $index}
			<div id="splash">
				<div id="splashInner">
							<div id="logo" {if $svgLogo==1}class="svgLogo"{/if}><img src="graphics/branding.php?i=l&amp;v=2" /></div>
					<div class="spinner2"></div>
				</div>
			</div>
			{/if}
			<div id="livepreviewmask"></div>
			<div id="livepreview">
				<div id="livePreviewHeader" class="draft">
					{if !$editingSitewideContent&&!$editingSnippet}
					<div class="subHeaderLeftMenuItem" id="shareMenuPopup">
						<div class="target">
							{$SetSeedLangs.Share}
						</div>
						<div class="triShadow"></div>
						<ul>
							<li><a href="http://{$http_host}{if $page=="blog_edit"}/{$indexUrl}{/if}/{$url}/" target="_blank">{$SetSeedLangs.Open_Page|htmlspecialchars}</a></li>

							<li><a href="#" onclick="window.prompt('{$SetSeedLangs.Show_Address_Text|htmlspecialchars}','http://{$http_host}{if $page=="blog_edit"}/{$indexUrl}{/if}/{$url}/'); return false;">{$SetSeedLangs.Show_Address|htmlspecialchars}</a></li>
							<div class="bpe_rule"></div>
							<li><a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F{$http_host}{if $page=="blog_edit"}%2F{$indexUrl}{/if}%2F{$url}%2F', 'share', 'width=626,height=436'); return false;">{$SetSeedLangs.Share_Facebook|htmlspecialchars}</a></li>
							<li><a href="#" onclick="window.open('https://twitter.com/share?url=http%3A%2F%2F{$http_host}{if $page=="blog_edit"}%2F{$indexUrl}{/if}%2F{$url}%2F', 'share', 'width=626,height=436'); return false;">{$SetSeedLangs.Share_Twitter|htmlspecialchars}</a></li>
							<li><a href="#" onclick="window.open('https://plus.google.com/share?url=http%3A%2F%2F{$http_host}{if $page=="blog_edit"}%2F{$indexUrl}{/if}%2F{$url}%2F', 'share', 'width=626,height=436'); return false;">{$SetSeedLangs.Share_Google|htmlspecialchars}</a></li>
							<div class="bpe_rule"></div>
							<li><a href="mailto:?subject={if $page=="blog_edit"}{$title|@htmlspecialchars}{else}{$pagetitle|@htmlspecialchars}{/if}&amp;body=http://{$http_host}{if $page=="blog_edit"}/{$indexUrl}{/if}/{$url}/">{$SetSeedLangs.Email_Page|htmlspecialchars}</a></li>
						</ul>
						<div class="mtri"></div>
					</div>
					{/if}
					<div class="subHeaderButton right" id="closeLivePreview">
						{$SetSeedLangs.Close|htmlspecialchars}
					</div>

					<div class="subHeaderButton updateButton {if $showingLive=="yes"} unavailable{/if}{if  $master || $priv_pages=="1"}{else} faded{/if}" id="saveEditPage" title="{if  $master || $priv_pages=="1"}{if $showingLive=="yes"}{$SetSeedLangs.Publish_No_Changes|htmlspecialchars}{else}{$SetSeedLangs.Publish_Editing_Draft|htmlspecialchars}{/if}{else}{$SetSeedLangs.Publish_No_Privileges|htmlspecialchars}{/if}">

							{$SetSeedLangs.Publish_Changes}

					</div>
					<div id="previewLive" class="previewHeader">
						{if !$editingSnippet && !$editingSitewideContent}
							{$SetSeedLangs.Your_Updated_Page_Live}
						{else}
							{$SetSeedLangs.Your_Website}
						{/if}
					</div>
					<div id="previewUpdatedOffline" class="previewHeader">{$SetSeedLangs.Your_Updated_Page_Offline}</div>
					<div id="previewDraft" class="previewHeader">{$SetSeedLangs.Your_Draft}</div>
					<div id="previewSite" class="previewHeader">{$SetSeedLangs.Your_Website}</div>
				</div>
				<div id="iframeWrapper">
					<iframe src="{if $page=="blog_edit" && $indexUrl==""}{else}{if $page=="blog_edit"}/{$indexUrl}{/if}/{$url}?{if $page=="blog_edit"}previewblog{else}preview{/if}={$viewVersion}&{/if}{if $preview_as_email&$page!="blog_edit"}preview_as_email=1{/if}" id="iframe1"></iframe>
					<iframe src="{if $page=="blog_edit" && $indexUrl==""}{else}{if $page=="blog_edit"}/{$indexUrl}{/if}/{$url}?{if $page=="blog_edit"}previewblog{else}preview{/if}={$viewVersion}&{/if}{if $preview_as_email&$page!="blog_edit"}preview_as_email=1{/if}" id="iframe2" style="left:-100%"></iframe>
					<div id="blogPreviewUnavailable">
						<h2>{$SetSeedLangs.Blog_Preview_Unavailable|htmlspecialchars}</h2>
						<p>{$SetSeedLangs.Blog_Preview_Unavailable_More|htmlspecialchars}</p>
					</div>
				</div>
			</div>
			<div id="launchPad" class="hidden">
				<div id="lpHeader" class="clearfix">
					<ul id="lpSysMenu">
						<li id="systemMenuLogout"><a >{$SetSeedLangs.Logout|htmlspecialchars}</a></li>
						{if $master && $DISABLE_STAFF==0}
						<li id="systemMenuStaff"><a id="">{$SetSeedLangs.Staff|htmlspecialchars}</a></li>
						{/if}
						{if !$ssoAccount}
						<li id="systemMenuYou"><a id="">{$SetSeedLangs.You|htmlspecialchars}</a></li>
						{*}<li id="systemMenuResetTips" class="clear-item"><a id="">{$SetSeedLangs.Reset_Tips|htmlspecialchars}</a></li>*}
						{/if}
						{if $CUSTOM_LINK_1_TEXT}
							<li class="customAdminLink customAdminLink-1"><a href="{$CUSTOM_LINK_1_LINK|htmlspecialchars}" target="_blank">{$CUSTOM_LINK_1_TEXT|htmlspecialchars}</a></li>
						{/if}
						{if $CUSTOM_LINK_2_TEXT}
							<li class="customAdminLink"><a href="{$CUSTOM_LINK_2_LINK|htmlspecialchars}" target="_blank">{$CUSTOM_LINK_2_TEXT|htmlspecialchars}</a></li>
						{/if}
					</ul>
					{*<div id="logo" {if $svgLogo==1}class="svgLogo"{/if}><img src="graphics/branding.php?i=l&amp;v=2" /></div>*}
					<div class="previewSiteArrowButton" id="showSitePreview">
						<span>{$SetSeedLangs.View_Website|htmlspecialchars}</span>
					</div>
					<div class="previewSiteArrow">
						<span>{$SetSeedLangs.Your_Website|htmlspecialchars}</span>
					</div>


				</div>
				<div id="lpContent">
					<h1>{$SetSeedLangs.What_Do_You_Want}</h1>
					<div id="lpWebpages" class="lpBoxBig {cycle name=lpBig values="left,right"}">
						<div class="lpBoxBigInner">
							<div id="lpPagesIcon" class="lbBoxIcon"></div>
							{$SetSeedLangs.Pages|htmlspecialchars}
						</div>
					</div>

					{if $allprivs|@count>3}
						{if $allprivs.8==1}
							{if $DISABLE_BLOG==0}{assign var=blogOk value=true}{/if}
						{/if}
					{else}
						{if $DISABLE_BLOG==0}{assign var=blogOk value=true}{/if}
					{/if}

					{if $blogOk}
					<div id="lpBlog" class="lpBoxBig {cycle name=lpBig values="left,right"}">
						<div class="lpBoxBigInner">
							<div id="lpBlogIcon" class="lbBoxIcon"></div>
							{$SetSeedLangs.Blog|htmlspecialchars}
						</div>
					</div>
					{/if}

					{if $pinnedSnippetCats}
						{foreach from=$pinnedSnippetCats item=pinnedSnippetCat}
							<div class="lpBoxBig {cycle name=lpBig values="left,right"} pinnedSnippetCat" data-snippet-cat="{$pinnedSnippetCat.id}">
								<div class="lpBoxBigInner">
									<div id="lpSnippetCatIcon" class="lbBoxIcon"></div>
									{$pinnedSnippetCat.name}
								</div>
							</div>
						{/foreach}
					{/if}
					{if $allprivs|@count>3}
						{if $allprivs.9==1}
							{if $DISABLE_PRODUCTS==0}{assign var=checkoutOk value=true}{/if}
						{/if}
					{else}
						{if $DISABLE_PRODUCTS==0}{assign var=checkoutOk value=true}{/if}
					{/if}
					{if $checkoutOk}
					<div id="lpCheckout" class="lpBoxBig {cycle name=lpBig values="left,right"}">
						<div class="lpBoxBigInner">
							<div id="lpCheckoutIcon" class="lbBoxIcon"></div>
							<span id="ordersCounter"></span>
							{$SetSeedLangs.Checkout|htmlspecialchars}
						</div>
					</div>
					{/if}

					{if $allprivs|@count>3}
						{if $allprivs.13==1}
							{if $DISABLE_BOOKINGS==0}{assign var=bookingOk value=true}{/if}
						{/if}
					{else}
						{if $DISABLE_BOOKINGS==0}{assign var=bookingOk value=true}{/if}
					{/if}

					{if $bookingOk}
					<div id="lpBookings" class="lpBoxBig {cycle name=lpBig values="left,right"}">
						<div class="lpBoxBigInner">
							<div id="lpBookingsIcon" class="lbBoxIcon"></div>
							{$SetSeedLangs.Bookings|htmlspecialchars}
						</div>
					</div>
					{/if}

					{if $allprivs|@count>3}
						{if $allprivs.11==1}
							{assign var=settingsOk value=true}
						{/if}
					{else}
						{assign var=settingsOk value=true}
					{/if}
					{if $settingsOk}
					<div id="lpSettings" class="lpBoxBig {cycle name=lpBig values="left,right"}">
						<div class="lpBoxBigInner">
							<div id="lpSettingsIcon" class="lbBoxIcon"></div>
							{$SetSeedLangs.Website_Settings|htmlspecialchars}
						</div>
					</div>
					{/if}
					{if $DISABLE_DESIGN==0}
					<div id="lpDesign" class="lpBoxBig {cycle name=lpBig values="left,right"}">
						<div class="lpBoxBigInner">
							<div id="lpDesignIcon" class="lbBoxIcon"></div>
							{$SetSeedLangs.Design|htmlspecialchars}
						</div>
					</div>
					{/if}
					{if $allprivs|@count>3} {* If new privs *}
						{if $DISABLE_LIVECHAT==0}{if $allprivs.10==1}{assign var=livechatOk value=true}{/if}{/if}
					{else}
						{if $DISABLE_LIVECHAT==0}{assign var=livechatOk value=true}{/if}
					{/if}
					{if $livechatOk}
					<div id="lpLivechat" class="lpBoxBig {cycle name=lpBig values="left,right"}">
						<div class="lpBoxBigInner">
							<div id="lpLivechatIcon" class="lbBoxIcon"></div>
							<span id="livechatCounter"></span>
							{$SetSeedLangs.Livechat|htmlspecialchars}
						</div>
					</div>
					{/if}

					<div id="lpStats" class="lpBoxBig {cycle name=lpBig values="left,right"}">
						<div class="lpBoxBigInner">
							<div id="lpStatisticsIcon" class="lbBoxIcon"></div>
							{$SetSeedLangs.Statistics|htmlspecialchars}
						</div>
					</div>
				
					<div class="clear"></div>
					<h2>{$SetSeedLangs.Storage_Items}</h2>
					<div id="tab2Images" class="lpBoxSmall"><a href="#">{$SetSeedLangs.Images|htmlspecialchars}</a></div>

					{if $allprivs|@count>3}
						{if $DISABLE_GALLERIES==0}{if $allprivs.1==1}<div class="lpBoxSmall" id="tab2Galleries"><a href="">{$SetSeedLangs.Galleries|htmlspecialchars}</a></div>{/if}{/if}
						<div id="tab2Tables" class="lpBoxSmall"><a href="#">{$SetSeedLangs.Tables|htmlspecialchars}</a></div>
						
						{if $DISABLE_VIDEOS==0}<div class="lpBoxSmall" id="tab2Videos"><a href="">{$SetSeedLangs.Videos|htmlspecialchars}</a></div>{/if}

						{if $DISABLE_MAILING_LIST==0}{if $allprivs.6==1 || $allprivs.7==1}<div class="lpBoxSmall" id="tab2Newsletter"><a href="#">{$SetSeedLangs.Mailing_Lists|htmlspecialchars}</a></div>{/if}{/if}

						{if $DISABLE_FORMS==0}{if $allprivs.2==1}<div class="lpBoxSmall" id="tab2Forms"><a href="">{$SetSeedLangs.Contact_forms|htmlspecialchars}</a></div>{/if}{/if}
						{if $DISABLE_PRODUCTS==0}{if $allprivs.3==1}<div class="lpBoxSmall" id="tab2Products"><a href="">{$SetSeedLangs.Products|htmlspecialchars}</a></div>{/if}{/if}
						{if $DISABLE_BOOKINGS==0}{if $allprivs.13==1}<div class="lpBoxSmall" id="tab2Booking"><a href="">{$SetSeedLangs.Booking_Products|htmlspecialchars}</a></div>{/if}{/if}
						{if $DISABLE_CALENDARS==0}{if $allprivs.4==1}<div class="lpBoxSmall" id="tab2Calendars"><a href="">{$SetSeedLangs.Calendars|htmlspecialchars}</a></div>{/if}{/if}
						{if $allprivs.5==1}<div class="lpBoxSmall" id="tab2Snippets" {if $editingSnippet}class="selected"{/if}><a href="">{$SetSeedLangs.Snippets|htmlspecialchars}</a></div>{/if}
						{if $DISABLE_EMBED_CODES==0}{if $allprivs.12==1}<div class="lpBoxSmall" id="tab2EmbedCodes" {if $editingSnippet}class="selected"{/if}><a href="">{$SetSeedLangs.Embed_Codes|htmlspecialchars}</a></div>{/if}{/if}
					{else}

						{if $allprivs.1==1 || $master}
						{if $DISABLE_GALLERIES==0}<div class="lpBoxSmall" id="tab2Galleries"><a href="">{$SetSeedLangs.Galleries|htmlspecialchars}</a></div>{/if}
						{/if}
						{if $allprivs.1==1 || $master}

						{if $DISABLE_VIDEOS==0}<div class="lpBoxSmall" id="tab2Videos"><a href="">{$SetSeedLangs.Videos|htmlspecialchars}</a></div>{/if}
						<div id="tab2Tables" class="lpBoxSmall"><a href="#">{$SetSeedLangs.Tables|htmlspecialchars}</a></div>
						
						{if $DISABLE_MAILING_LIST==0}<div class="lpBoxSmall" id="tab2Newsletter"><a href="#">{$SetSeedLangs.Mailing_Lists|htmlspecialchars}</a></div>{/if}
						{if $DISABLE_FORMS==0}<div class="lpBoxSmall" id="tab2Forms"><a href="">{$SetSeedLangs.Contact_forms|htmlspecialchars}</a></div>{/if}
						{if $DISABLE_PRODUCTS==0}<div class="lpBoxSmall" id="tab2Products"><a href="">{$SetSeedLangs.Products|htmlspecialchars}</a></div>{/if}
						{if $DISABLE_BOOKINGS==0}<div class="lpBoxSmall" id="tab2Booking"><a href="">{$SetSeedLangs.Booking_Products|htmlspecialchars}</a></div>{/if}

						{if $DISABLE_CALENDARS==0}<div class="lpBoxSmall" id="tab2Calendars"><a href="">{$SetSeedLangs.Calendars|htmlspecialchars}</a></div>{/if}
						{if $DISABLE_SNIPPETS==0}
						<div class="lpBoxSmall" id="tab2Snippets" {if $editingSnippet}class="selected"{/if}><a href="">{$SetSeedLangs.Snippets|htmlspecialchars}</a></div>
						{/if}
						{if $DISABLE_EMBED_CODES==0}<div class="lpBoxSmall" id="tab2EmbedCodes"><a href="">{$SetSeedLangs.Embed_Codes|htmlspecialchars}</a></div>{/if}
						{/if}
					{/if}

					<div id="tab2Files" class="lpBoxSmall"><a href="">{$SetSeedLangs.Files|htmlspecialchars}</a></div>
				</div>
			</div>
			<span id="primaryNotify"></span>
			<div id="dragBoundry">

				{if $page=="edit" || $page=="blog_edit"}

				<input id="pageStatus" value="{if !$editingSitewideContent && !$editingSnippet}{$live}{else}yes{/if}" type="hidden" name=""/>
				<div id="rightPane" class="rightPane withTitleBar {if $page=="blog_edit"}editingBlog{/if} {if $editingSnippet}editingSnippet{/if} {if $editingSitewideContent}editingSitewideContent{/if}" >
					<div class="cleverFilterBar">
						<div id="previewArrow">
							{if !$editingSitewideContent&&!$editingSnippet}

							<div class="subHeaderLeftMenuItem" id="shareMenu">
								<div class="target">
									{$SetSeedLangs.Share}
								</div>
								<div class="triShadow"></div>
								<ul>
									<li><a href="http://{$http_host}{if $page=="blog_edit"}/{$indexUrl}{/if}/{$url}/" target="_blank">{$SetSeedLangs.Open_Page|htmlspecialchars}</a></li>
									<li><span class="fakea" onclick="window.prompt('{$SetSeedLangs.Show_Address_Text|htmlspecialchars}','http://{$http_host}{if $page=="blog_edit"}/{$indexUrl}{/if}/{$url}/'); return false;">{$SetSeedLangs.Show_Address|htmlspecialchars}</span></li>
									<div class="bpe_rule"></div>
									<li><span class="fakea" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F{$http_host}{if $page=="blog_edit"}%2F{$indexUrl}{/if}%2F{$url}%2F', 'share', 'width=626,height=436'); return false;">{$SetSeedLangs.Share_Facebook|htmlspecialchars}</span></li>
									<li><span class="fakea" onclick="window.open('https://twitter.com/share?url=http%3A%2F%2F{$http_host}{if $page=="blog_edit"}%2F{$indexUrl}{/if}%2F{$url}%2F', 'share', 'width=626,height=436'); return false;">{$SetSeedLangs.Share_Twitter|htmlspecialchars}</span></li>
									<li><span class="fakea" onclick="window.open('https://plus.google.com/share?url=http%3A%2F%2F{$http_host}{if $page=="blog_edit"}%2F{$indexUrl}{/if}%2F{$url}%2F', 'share', 'width=626,height=436'); return false;">{$SetSeedLangs.Share_Google|htmlspecialchars}</span></li>
									<div class="bpe_rule"></div>
									<li><a href="mailto:?subject={if $page=="blog_edit"}{$title|@htmlspecialchars}{else}{$pagetitle|@htmlspecialchars}{/if}&amp;body=http://{$http_host}{if $page=="blog_edit"}/{$indexUrl}{/if}/{$url}/">{$SetSeedLangs.Email_Page|htmlspecialchars}</a></li>
								</ul>
								<div class="mtri"></div>
							</div>
							{/if}

							<a id="publishInPreview" class="{if $showingLive=="yes"} unavailable{/if}{if  $master || $priv_pages=="1"}{else} faded{/if}">{$SetSeedLangs.Publish_Changes|htmlspecialchars}</a>
							<span id="previewLiveDouble">
							{if !$editingSnippet && !$editingSitewideContent}
								{$SetSeedLangs.Your_Updated_Page_Live}
							{else}
								{$SetSeedLangs.Your_Website}
							{/if}
							</span>
							<span id="previewUpdatedOfflineDouble">{$SetSeedLangs.Your_Updated_Page_Offline}</span>
							<span id="previewDraftDouble">{$SetSeedLangs.Your_Draft}</span>
							<span id="previewSiteDouble">{$SetSeedLangs.Your_Website}</span>
						</div>
						<div class="subHeaderLeftMenuItem">
							<div class="target" id="editPageContextMenu">
								{$SetSeedLangs.Edit}
							</div>
							<div class="triShadow"></div>
							<ul class="contextMenu">

								<li><a id="bpe_cut" class="greyedOut bpe_selection_tool"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.X|htmlspecialchars}</span>{$SetSeedLangs.Cut|htmlspecialchars}</a>
								<li><a id="bpe_copy" class="greyedOut bpe_selection_tool"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.C|htmlspecialchars}</span>{$SetSeedLangs.Copy|htmlspecialchars}</a></li>
								<li><a id="bpe_paste" class="greyedOut"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.V|htmlspecialchars}</span>{$SetSeedLangs.Paste|htmlspecialchars}</a></li>

								<li class='iconbarRule'></li>
								<li><a id="bpe_select_all"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a>
								<li><a id="bpe_deselect_all"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
							</ul>
							<div class="mtri"></div>
						</div>




						<div class="hideWhenTiny subHeaderLeftMenuItem" style="display:none">
							<div class="target">
								{$SetSeedLangs.Settings}
							</div>
							<div class="triShadow"></div>
							<ul>
								<li><a id="editMetaTitle{if $page=="blog_edit"}Blog{/if}" meta-title="{$longtitle}">{$SetSeedLangs.Meta_Title|htmlspecialchars}</a></li>
								<li><a id="editMetaDescription{if $page=="blog_edit"}Blog{/if}" meta-description="{$summary}">{$SetSeedLangs.Meta_Description|htmlspecialchars}</a></li>
								<li><a id="editMetaKeywords{if $page=="blog_edit"}Blog{/if}" meta-keywords="{$keywords}">{$SetSeedLangs.Meta_Keywords|htmlspecialchars}</a></li>

								{if $page=="edit"}
								<li class="iconbarRule"></li>
								<li><a href='' id="enableCaching" {if $disable_caching=="0"}class="bpe_current"{/if}>{$SetSeedLangs.Settings_Enable_Caching|htmlspecialchars}</a></li>
								<li class="iconbarRule"></li>
								{/if}
								{if $templates|@count>1}
								<li><a href='' class="showSubMenu">{$SetSeedLangs.Settings_Template|htmlspecialchars}&hellip;</a>
									<ul id="changeTemplate">
										{if $templates}

										{if $templates!=""}
										{foreach from=$templates item=item key=key name=loop1}
										<li><a href="{$item}" class="{if $template==$item} bpe_current{/if}">
											{$item}
										</a></li>
										{/foreach}
										{/if}

										{/if}
									</ul>
								</li>
								{/if}
								{if $page=="edit"}
								<li><a href='' id="cloneSource">{$SetSeedLangs.Clone_Content_From_Page|htmlspecialchars}&hellip;</a></li>
								{/if}
							</ul>
							<div class="mtri"></div>
						</div>

						<a id="showDragInsert" class="subHeaderButton primaryItem">

								{$SetSeedLangs.Insert|htmlspecialchars}

						</a>
						<a id="bpe_undo" class="subHeaderButton greyedOut"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.Z|htmlspecialchars}</span>{$SetSeedLangs.Undo|htmlspecialchars}</a>
						<a id="bpe_redo" class="subHeaderButton greyedOut"><span class="key hideIfTouch"><span class="mod"></span><span class="shift"></span>{$SetSeedLangs.Z|htmlspecialchars}</span>{$SetSeedLangs.Redo|htmlspecialchars}</a>
						<ul id="versions" style="display:none;">
									{if !$editingSnippet && !$editingSitewideContent}
										{if $versions!=""}
										{foreach from=$versions item=item key=key name=loop1}
										<li><a href="{if $page=="blog_edit"}/admin/blogActions.php?blogAction=viewVersion&id{else}/admin/pagesEditPage.php?viewVersion{/if}={$item.id}" class="returnTrue{if $viewVersion==$item.id} bpe_current{/if}">
											{if $item.draft=="1"}
											<span class="key">{$item.date}</span>
											{$SetSeedLangs.Draft}
											{else}
											<span class="key">
											{$item.date}
											</span>
											{$SetSeedLangs.Published}
											{/if}

										</a></li>
										{/foreach}
										{/if}
									{else}
										{if $editingSnippet}
											{if $versions!=""}
												{foreach from=$versions item=item key=key name=loop1}
												<li><a href="/admin/editSnippet.php?id={$item.id}" class="returnTrue{if $draftid==$item.id} bpe_current{/if}">
													{if $item.draft=="1"}
													<span class="key">{$item.date}</span>
													{$SetSeedLangs.Draft}
													{else}
													<span class="key">
													{$item.date}
													</span>
													{$SetSeedLangs.Published}
													{/if}

												</a></li>
												{/foreach}
											{/if}
										{/if}
										{if $editingSitewideContent}
											{if $versions!=""}
												{foreach from=$versions item=item key=key name=loop1}
												<li><a href="/admin/editSitewideContent.php?viewVersion={$item.id}" class="returnTrue{if $draftid==$item.id} bpe_current{/if}">
													{if $item.draft=="1"}
													<span class="key">{$item.date}</span>
													{$SetSeedLangs.Draft}
													{else}
													<span class="key">
													{$item.date}
													</span>
													{$SetSeedLangs.Published}
													{/if}

												</a></li>
												{/foreach}
											{/if}
										{/if}
									{/if}
							</ul>
						<div class="subHeaderLeftMenuItem">
							<div class="target">
								{if !$editingSnippet && !$editingSitewideContent}
								{$SetSeedLangs.Page|htmlspecialchars}
								{else}
								{$SetSeedLangs.Versions|htmlspecialchars}
								{/if}
							</div>
							<div class="triShadow"></div>
							<ul>

								{if !$editingSnippet && !$editingSitewideContent}
									<li class="subHeaderMenuGroup">{$SetSeedLangs.Settings|htmlspecialchars}</li>
									<li><a id="editMetaTitle{if $page=="blog_edit"}Blog{/if}Tiny" meta-title="{$longtitle}">{$SetSeedLangs.Meta_Title|htmlspecialchars}</a></li>
									<li><a id="editMetaDescription{if $page=="blog_edit"}Blog{/if}Tiny" meta-description="{$summary}">{$SetSeedLangs.Meta_Description|htmlspecialchars}</a></li>
									<li><a id="editMetaKeywords{if $page=="blog_edit"}Blog{/if}Tiny" meta-keywords="{$keywords}">{$SetSeedLangs.Meta_Keywords|htmlspecialchars}</a></li>
									{if $page=="blog_edit"}
									<li class="iconbarRule"></li>
									<li><a id="editBlogTags" meta-tags="{$tags}">{$SetSeedLangs.Tags}</a></li>
									<li><a id="editBlogDate" meta-date="{$timestamp|date_format:"%Y-%m-%d %H:%M"}">{$SetSeedLangs.Published_Date|htmlspecialchars}</a>									</li>
									{/if}
									{if $page=="edit"}
									<li class="iconbarRule"></li>
									<li><a href='' id="enableCachingTiny" {if $disable_caching=="0"}class="bpe_current"{/if}>{$SetSeedLangs.Settings_Enable_Caching|htmlspecialchars}</a></li>

									<li><a href='' id="enablePreviewAsEmail" {if $preview_as_email=="1"}class="bpe_current"{/if}>{$SetSeedLangs.Preview_as_email|htmlspecialchars}</a></li>

									{/if}
									{if $templates|@count>1}
									<li><a href='' class="showSubMenu">{$SetSeedLangs.Settings_Template|htmlspecialchars}&hellip;</a>
										<ul id="changeTemplateTiny">
											{if $templates}

											{if $templates!=""}
											{foreach from=$templates item=item key=key name=loop1}
											<li><a href="{$item}" class="{if $template==$item} bpe_current{/if}">
												{$item}
											</a></li>
											{/foreach}
											{/if}

											{/if}
										</ul>
									</li>
									{/if}
									{if $page=="edit"}
																		<li class="iconbarRule"></li>
									<li><a href='' id="cloneSource">{$SetSeedLangs.Clone_Content_From_Page|htmlspecialchars}&hellip;</a></li>
									{/if}
								{/if}
								<div id="versionsToHide" {if $cloneSourceId}style="display:none"{/if}>
									{if !$editingSnippet && !$editingSitewideContent}
									<li class="subHeaderMenuGroup">{$SetSeedLangs.Versions|htmlspecialchars}</li>
									{/if}
									<div id="versionsTiny">
									</div>
								</div>

							</ul>
							<div class="mtri"></div>
						</div>


						<a href="{if !$editingSnippet && !$editingSitewideContent}{if $page=="blog_edit" && $indexUrl==""}noblogset{else}{if $page=="blog_edit"}/{$indexUrl}{/if}/{$url}?{if $page=="blog_edit"}previewblog{else}preview{/if}={$viewVersion}{if $preview_as_email && $page!="blogEdit"}&preview_as_email=1{/if}{/if}{else}refresh{/if}" target="_blank" class="right hideWhenTiny- subHeaderButton previewButton  {if $page=="blog_edit" && $indexUrl==""}greyedOut{/if}" title="{if $page=="blog_edit" && $indexUrl==""}{$SetSeedLangs.No_Blog_Page_Created_Yet}{else}{$SetSeedLangs.Preview_Long|htmlspecialchars}{/if}" id="previewPage">
								{if !$editingSnippet && !$editingSitewideContent}
								<span class="previewPageText">{$SetSeedLangs.Preview_Page}</span>
								{else}
								<span class="previewPageText">{$SetSeedLangs.Preview_Site}</span>
								{/if}
								<span class="previewChangesText"><span class="hideWhenTiny">{$SetSeedLangs.Preview_Changes}</span><span class="showWhenTiny">{$SetSeedLangs.Preview}</span></span>


						</a>




					</div>

					<div id="editPageTop" class="topBar {if $editingSitewideContent}nonEditable{/if}">
						<div class="returnToLP"></div>

						<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
						{if $page=="edit"}
						{if !$editingSnippet && !$editingSitewideContent}
							<div class="topBarButtonBack" id="backToPages">

							</div>
							{/if}
						{/if}
						{if $page=="blog_edit"}
							<div class="topBarButtonBack" id="backToBlog">

							</div>
						{/if}


						{if !$editingSitewideContent && !$editingSnippet}

						{if $page=="blog_edit"}
							<div class="topBarTitle renameBlog " id="renameEntry"><div><span>{$title|@htmlspecialchars}</span></div></div>
						{else}
							<div class="topBarTitle renamePage " id="renamePage"><div><span>{$pagetitle|@htmlspecialchars}</span></div></div>
						{/if}

						<form action="pageActions.php" method="post" id="renameEditPageform" class="renamePageForm menuForm menu_with_options" style="display:none">
							<input type="hidden" name="pageAction" value="renamePage"/>
							<input type="hidden" name="id" value="{$static_pagesId}"/>
							<input type="text" name="title" value="" class="pageMenuInput  greyedOut focus"/></span>
						</form>
						{elseif $editingSnippet}

							<div class="topBarButtonBack" id="backToSnippets">

							</div>


							<div class="topBarTitle renameSnippet" id="renameSnippet"><div><span>{$sitewideTitle|@htmlspecialchars}</span></div></div>
							<form action="snippetsActions.php" method="post" class="menuForm menu_with_options" style="display:none" id="renameSnippetForm">
								<input type="hidden" name="snippetsAction" value="rename"/>
								<input type="hidden" name="id" value="{$staticid}"/>
								<input type="text" name="name" value="" class="pageMenuInput  greyedOut focus"/></span>
							</form>
						{else}
							<div style="display:none" id="editMenu"></div>

							<div class="topBarButtonBack" id="backToSettings">

							</div>
							<h1>{$sitewideTitleDisplay|@htmlspecialchars}</h1>

						{/if}
					<div class="clear"></div>
					</div>
						<div id="dragInsertMask"></div>
						<div id="dragInsert" {if $cloneSourceId}style="display:none;"{/if}>
							<div id="dragInsertInner">

								<div id="dragInsertIndex"  class="dragInsertTabContents">
									<div class="dragInsertTabHeader">

										<div class="closeDragInsert"></div>
										<h1>{$SetSeedLangs.What_Do_You_Want_To_Add|htmlspecialchars}</h1>
									</div>
									<div class="dragInsertTabContentsMain clearfix">
										{*}<div class="dragInsertTabText dragInsertTab">{$SetSeedLangs.Text|htmlspecialchars}</div>*}
										<div class="dragInsertTabWidgets dragInsertTab">{$SetSeedLangs.Extra|htmlspecialchars}</div>
										{if $columnsList}
										<div class="dragInsertTabLayout dragInsertTab">{$SetSeedLangs.Columns|htmlspecialchars}</div>
										{/if}
										<div class="clear"></div>
										<h3>{$SetSeedLangs.Storage|htmlspecialchars}</h3>
										<div id="tab2Images" class="lpBoxSmall"><a href="#">{$SetSeedLangs.Images|htmlspecialchars}</a></div>



										{if $allprivs|@count>3}
											{if $DISABLE_GALLERIES==0}{if $allprivs.1==1}<div class="lpBoxSmall" id="tab2Galleries"><a href="">{$SetSeedLangs.Galleries|htmlspecialchars}</a></div>{/if}{/if}
											{if $DISABLE_VIDEOS==0}<div class="lpBoxSmall" id="tab2Videos"><a href="">{$SetSeedLangs.Videos|htmlspecialchars}</a></div>{/if}
																					<div id="tab2Tables" class="lpBoxSmall"><a href="#">{$SetSeedLangs.Tables|htmlspecialchars}</a></div>
											{if $DISABLE_MAILING_LIST==0}{if $allprivs.6==1 || $allprivs.7==1}<div class="lpBoxSmall" id="tab2Newsletter"><a href="#">{$SetSeedLangs.Mailing_Lists|htmlspecialchars}</a></div>{/if}{/if}

											{if $DISABLE_FORMS==0}{if $allprivs.2==1}<div class="lpBoxSmall" id="tab2Forms"><a href="">{$SetSeedLangs.Contact_forms|htmlspecialchars}</a></div>{/if}{/if}
											{if $DISABLE_PRODUCTS==0}{if $allprivs.3==1}<div class="lpBoxSmall" id="tab2Products"><a href="">{$SetSeedLangs.Products|htmlspecialchars}</a></div>{/if}{/if}

											{if $DISABLE_BOOKINGS==0}{if $allprivs.13==1}<div class="lpBoxSmall" id="tab2Booking"><a href="">{$SetSeedLangs.Booking_Products|htmlspecialchars}</a></div>{/if}{/if}
											{if $DISABLE_CALENDARS==0}{if $allprivs.4==1}<div class="lpBoxSmall" id="tab2Calendars"><a href="">{$SetSeedLangs.Calendars|htmlspecialchars}</a></div>{/if}{/if}
											{if $allprivs.5==1}<div class="lpBoxSmall" id="tab2Snippets" {if $editingSnippet}class="selected"{/if}><a href="">{$SetSeedLangs.Snippets|htmlspecialchars}</a></div>{/if}
											{if $DISABLE_EMBED_CODES==0}{if $allprivs.12==1}<div class="lpBoxSmall" id="tab2EmbedCodes" {if $editingSnippet}class="selected"{/if}><a href="">{$SetSeedLangs.Embed_Codes|htmlspecialchars}</a></div>{/if}{/if}
										{else}

											{if $allprivs.1==1 || $master}
											{if $DISABLE_GALLERIES==0}<div class="lpBoxSmall" id="tab2Galleries"><a href="">{$SetSeedLangs.Galleries|htmlspecialchars}</a></div>{/if}
											{/if}
											{if $allprivs.1==1 || $master}

											{if $DISABLE_VIDEOS==0}<div class="lpBoxSmall" id="tab2Videos"><a href="">{$SetSeedLangs.Videos|htmlspecialchars}</a></div>{/if}
											<div id="tab2Tables" class="lpBoxSmall"><a href="#">{$SetSeedLangs.Tables|htmlspecialchars}</a></div>
											{if $DISABLE_MAILING_LIST==0}<div class="lpBoxSmall" id="tab2Newsletter"><a href="#">{$SetSeedLangs.Mailing_Lists|htmlspecialchars}</a></div>{/if}
											{if $DISABLE_FORMS==0}<div class="lpBoxSmall" id="tab2Forms"><a href="">{$SetSeedLangs.Contact_forms|htmlspecialchars}</a></div>{/if}
											{if $DISABLE_PRODUCTS==0}<div class="lpBoxSmall" id="tab2Products"><a href="">{$SetSeedLangs.Products|htmlspecialchars}</a></div>{/if}
											{if $DISABLE_BOOKINGS==0}<div class="lpBoxSmall" id="tab2Booking"><a href="">{$SetSeedLangs.Booking_Products|htmlspecialchars}</a></div>{/if}
											{if $DISABLE_CALENDARS==0}<div class="lpBoxSmall" id="tab2Calendars"><a href="">{$SetSeedLangs.Calendars|htmlspecialchars}</a></div>{/if}
											{if $DISABLE_SNIPPETS==0}
											<div class="lpBoxSmall" id="tab2Snippets" {if $editingSnippet}class="selected"{/if}><a href="">{$SetSeedLangs.Snippets|htmlspecialchars}</a></div>
											{/if}
											{if $DISABLE_EMBED_CODES==0}<div class="lpBoxSmall" id="tab2EmbedCodes"><a href="">{$SetSeedLangs.Embed_Codes|htmlspecialchars}</a></div>{/if}
											{/if}
										{/if}
										<div id="tab2Files" class="lpBoxSmall"><a href="">{$SetSeedLangs.Files|htmlspecialchars}</a></div>
									</div>
								</div>
								<div id="dragInsertTabText" class="dragInsertTabContents">
									<div class="dragInsertTabHeader">
										<div class="backToDragInsertIndex"><span>{$SetSeedLangs.Insert|htmlspecialchars}</span></div>
										<div class="closeDragInsert"></div>
										<h1>{$SetSeedLangs.Text|htmlspecialchars}</h1>
									</div>
									<div class="dragInsertTabContentsMain clearfix">
										<ul class="clearfix">

												<li id="dragInsertP" class="dragInsertItem">{$SetSeedLangs.Paragraph|htmlspecialchars}</li>
												<li class='iconbarRule'></li>
												<li id="dragInsertH1" class="dragInsertItem">{$SetSeedLangs.Main_Heading|htmlspecialchars}</li>
												<li id="dragInsertH2" class="dragInsertItem">{$SetSeedLangs.Sub_Heading|htmlspecialchars}</li>
												<li id="dragInsertH3" class="dragInsertItem">{$SetSeedLangs.Section_Heading|htmlspecialchars}</li>
												<li id="dragInsertH4" class="dragInsertItem">{$SetSeedLangs.Minor_Heading|htmlspecialchars}</li>
												<li class='iconbarRule'></li>
												<li id="dragInsertUL" class="dragInsertItem">{$SetSeedLangs.Bulleted_List|htmlspecialchars}</li>
												<li id="dragInsertOL" class="dragInsertItem">{$SetSeedLangs.Numbered_List|htmlspecialchars}</li>
												<li class='iconbarRule'></li>
												<li id="dragInsertPre" class="dragInsertItem">{$SetSeedLangs.Code|htmlspecialchars}</li>
												<li id="dragInsertTable" class="dragInsertItem dragInsertTable">{$SetSeedLangs.Table|htmlspecialchars}</li>
										</ul>
									</div>
								</div>

						<div id="dragInsertTabWidgets" class="dragInsertTabContents">
							<div class="dragInsertTabHeader">
								<div class="backToDragInsertIndex"><span>{$SetSeedLangs.Insert|htmlspecialchars}</span></div>
								<div class="closeDragInsert"></div>
								<h1>{$SetSeedLangs.Extra|htmlspecialchars}</h1>
							</div>
							<div class="dragInsertTabContentsMain clearfix">
								<ul>
									<li id="dragInsertSitemap" class="dragInsertItem dragInsertSitemap">{$SetSeedLangs.Sitemap|htmlspecialchars}</li>
									{if !$editingSitewideContent && !$editingSnippet && $page!="blog_edit"}
									{if $type=="topLevel"||$type=="nonLinking"}
									{if $DISABLE_BLOG==0}<li id="dragInsertBlog" class="dragInsertItem dragInsertBlog">{$SetSeedLangs.Widget_Blog|htmlspecialchars}</li>{/if}
									{/if}
									{if $DISABLE_PRODUCTS==0}<li id="dragInsertCheckout" class="dragInsertItem dragInsertCheckout">{$SetSeedLangs.Widget_Checkout|htmlspecialchars}</li>
									<li id="dragInsertInvoice" class="dragInsertItem dragInsertInvoice">{$SetSeedLangs.Invoice_Widget|htmlspecialchars}</li>{/if}
									{/if}

									{foreach from=$customList item=item}
										{assign var=fn value=Custom_$item.name|replace:".tpl":""}
										{if $SetSeedLangs.$fn}
										{assign var=friendlyname value=$SetSeedLangs.$fn}
										{else}
										{assign var=friendlyname value=$item.name|replace:"_":" "|replace:".tpl":""|htmlspecialchars}
										{/if}
										<li class="dragInsertCustom dragInsertItem" data-tpl="{$item.name|htmlspecialchars}" zones="{foreach from=$item.zones item=zone}{$zone},{/foreach}" data-prod-cat-id="{$item.prod_cat_id}">{$friendlyname}</li>
									{/foreach}
								</ul>
							</div>
						</div>


						<div id="dragInsertTabLayout" class="dragInsertTabContents">
							<div class="dragInsertTabHeader">
								<div class="backToDragInsertIndex"><span>{$SetSeedLangs.Insert|htmlspecialchars}</span></div>
								<div class="closeDragInsert"></div>
								<h1>{$SetSeedLangs.Columns|htmlspecialchars}</h1>
							</div>
							<div class="dragInsertTabContentsMain clearfix">
								{if $columnsList}
								{*}<h3>{$SetSeedLangs.Columns|htmlspecialchars}</h3>*}
								<ul>
									{foreach from=$columnsList item=item}
									{assign var=fn value=Custom_$item.name|replace:".tpl":""}
									{if $SetSeedLangs.$fn}
									{assign var=friendlyname value=$SetSeedLangs.$fn}
									{else}
									{assign var=friendlyname value=$item.name|replace:"_":" "|replace:".tpl":""|htmlspecialchars}
									{/if}

									<li class="dragInsertItem dragInsertColumns" data-tpl="{$item.name|htmlspecialchars}" zones="{foreach from=$item.zones item=zone}{$zone},{/foreach}">{$friendlyname}</li>
								{/foreach}
								</ul>
								{/if}
								{if $splitClasses}
								{*
								<h3>{$SetSeedLangs.Section}</h3>*}
								<ul id="dragSectionItems" style="display:none">
								{if !$editingSitewideContent && !$editingSnippet && $page!="blog_edit"}
									{foreach from=$splitClasses item=item}
									{if $item!=""}
										{assign var=fn value=Custom_$item}
										{if $SetSeedLangs.$fn}
										{assign var=friendlyname value=$SetSeedLangs.$fn}
										{else}
										{assign var=friendlyname value=$item[1]|htmlspecialchars}
										{/if}

									<li class="dragInsertItem dragInsertSection" data-tpl="{$item[0]|htmlspecialchars}" data-default="{$item[2]}">{$friendlyname}</li>
									{/if}
									{/foreach}
								{/if}
								</ul>
								{/if}
							</div>
						</div>

					</div>
				</div>
					<div id="dr">

					<div id="contentWrapper">

						<div id="undoStack" style="display:none;"></div>
						<input type="hidden" name="" value="" id="finalRedo"/>

						{if $viewVersionDate!="" && $draft!="1"}
						<div id="showingOnly" style="display:none">Viewing a backup: Showing the version of this page saved on: {$viewVersionDate}</div>
						{/if}
						<div id="imageClasses" style="display:none">{$imageClasses}</div>
						<div id="blockClasses" style="display:none">{$blockClasses}</div>
						<div id="splitClasses" style="display:none">
							{foreach from=$splitClasses item=item}
							{if $item!=""}
							<div class="bpe_menu_sub" title="{$item|htmlspecialchars}"><div class="menu_with_options"><span class="overflowEllipsis">{$item|replace:"_":" "|replace:".tpl":""|htmlspecialchars}</span></div></div>
							{/if}
							{/foreach}
						</div>
						<div id="customList" style="display:none">
						{foreach from=$customList item=item}
							<div class="bpe_menu_sub" title="{$item.name|htmlspecialchars}" zones="{foreach from=$item.zones item=zone}{$zone},{/foreach}"><div class="menu_with_options"><span class="overflowEllipsis">{$item.name|replace:"_":" "|replace:".tpl":""|htmlspecialchars}</span></div></div>
						{/foreach}
						</div>
						<div id="columnsList" style="display:none">
						{foreach from=$columnsList item=item}
							<div class="bpe_menu_sub" title="{$item.name|htmlspecialchars}" zones="{foreach from=$item.zones item=zone}{$zone},{/foreach}"><div class="menu_with_options"><span class="overflowEllipsis">{$item.name|replace:"_":" "|replace:".tpl":""|htmlspecialchars}</span></div></div>
						{/foreach}
						</div>
						<select id="bpe_forms" style="display:none">
						{if $module_forms=="true" && $forms|@count>0}
						{foreach from=$forms item=formx key=key name=galsloop}
							<option value="{$formx.id}">{$formx.title|@htmlspecialchars}</option>
						{/foreach}
						{/if}
						</select>




						{if $editingSitewideContent=="yes"}
						<form action="/admin/editSitewideContent.php" id="addEntryForm" class="editingSitewide" ethod="post">
							<input type="hidden" name="editing" value="{$sitewideTitle}" id="editing"/>
							<input type="hidden" name="draftid" value="{$draftid}"/>
							<input type="hidden" name="pageid" value="{$pageid}"/>
							<input type="hidden" name="language" value="{$sitewideContentLanguage}"/>
							{if $viewVersionDate!="" && $draft!="1"}
							<input type="hidden" name="editingBackup" value="{$viewVersion}"/>
							{/if}

							<div class="textEditingArea">
								<div class="textEditingTopEmpty"></div>
								<div class="textEditingAreaInner">
									<div style="margin-top:0" class="clearfix">
										<div id="entryWrapper">
											<input type="hidden" name="entry_editor" value="" id="entryTextAreaValEditor">
											<input type="hidden" name="entry" value="" id="entryTextAreaVal"/><div id="entryTextArea" style="display:none">{$sitewideContentContent}</div><div id="entry">{$sitewideContentContent}</div>
											</div>
									</div>
								</div>

								{*<div class="listTipEditor"><div><div class="innerCanvasNote">{$SetSeedLangs.Tip_List_Editor_Empty}</div></div></div>*}

							</div>
							{*<div class="textEditingAreaFake bpe_area">
							</div>*}
						</form>
						{elseif $editingSnippet=="yes"}
						<form action="/admin/editSnippet.php" id="addEntryForm" class="editingSnippet" method="post">
							<input type="hidden" name="editing" value="{$draftid}"/>
							<input type="hidden" name="staticid" value="{$staticid}" id="editing"/>

							{if $viewVersionDate!="" && $draft!="1"}
							<input type="hidden" name="editingBackup" value="{$viewVersion}"/>
							{/if}

							<div class="textEditingArea">
								<div class="textEditingTopEmpty"></div>
								<div class="textEditingAreaInner">
									<div style="margin-top:0" class="clearfix">
										<div id="entryWrapper">
											<input type="hidden" name="entry_editor" value="" id="entryTextAreaValEditor">
											<input type="hidden" name="entry" value="" id="entryTextAreaVal"/><div id="entryTextArea" style="display:none">{$sitewideContentContent}</div><div id="entry">{$sitewideContentContent}</div>
											</div>
									</div>
								</div>

								{*<div class="listTipEditor"><div><div class="innerCanvasNote">{$SetSeedLangs.Tip_List_Editor_Empty}</div></div></div>*}

							</div>
							{*<div class="textEditingAreaFake bpe_area">
							</div>*}
						</form>
						{else}
							{if $page=="edit"}
								<form action="/admin/pagesEditPage.php" id="addEntryForm" method="post">
									<input type="hidden" name="kbid" value="{$static_pagesId}" id="kbid"/>
									{if $viewVersionDate!="" && $draft!="1"}
									<input type="hidden" name="editingBackup" value="{$viewVersion}"/>
									{/if}
									{if $draft=="1"}
									<input type="hidden" name="draftId" value="{$viewVersion}"/>
									{/if}
									<div class="textEditingArea">
										<div class="textEditingTopEmpty"></div>
										<div class="textEditingAreaInner">
											<div style="margin-top:0" class="clearfix">
												<div id="entryWrapper" {if $cloneSourceId}style="visibility:hidden;"{/if}>
													<input type="hidden" name="entry_editor" value="" id="entryTextAreaValEditor">
													<input type="hidden" name="entry" value="" id="entryTextAreaVal"/><div id="entryTextArea" style="display:none">{$entrytext}</div><div id="entry">{$entrytext}</div></div>
												<div id="cloning" style="{if !$cloneSourceId}display:none;{/if}"><p title="{$SetSeedLangs.Clone_Source_URL}: {$cloneSourceUrl}"><span>{$SetSeedLangs.Clone_Source|htmlspecialchars}: <strong id="cloningPageName">{$cloneSourceName}</strong></span></p><a id="cloneDelete" title="{$SetSeedLangs.Remove_Clone_Source|htmlspecialchars}"></a></div>

											</div>
										</div>

								{*<div class="listTipEditor"><div><div class="innerCanvasNote">{$SetSeedLangs.Tip_List_Editor_Empty}</div></div></div>*}

									</div>
								{*<div class="textEditingAreaFake bpe_area">
								</div>*}
								<br/>

								<input type="hidden" name="url" value="{$url}" id="urlValue"/>
								<input type="hidden" name="longtitle" value="{$longtitle}" id="longTitleValue"/>
								<input type="hidden" name="keywords" id="metaKeywords" value="{$keywords}"/>
								<input type="hidden" name="summary" id="metaSummary" value="{$summary}"/>
								</form>
							{else}

								<form action="/admin/blogActions.php" id="addEntryForm" class="editingBlog" method="post">
									<input type="hidden" name="blogAction" value="saveEntry"/>
									<input type="hidden" name="kbid" value="{$blog_entriesId}" id="kbid"/>
									{if $viewVersionDate!="" && $draft!="1"}
									<input type="hidden" name="editingBackup" value="{$viewVersion}"/>
									{/if}
									{if $draft=="1"}
									<input type="hidden" name="draftId" value="{$viewVersion}"/>
									{/if}
									<div class="textEditingArea">
										<div class="textEditingTopEmpty"></div>
										<div class="textEditingAreaInner">
											<div style="margin-top:0" class="clearfix">
											<div id="entryWrapper">
												<input type="hidden" name="entry_editor" value="" id="entryTextAreaValEditor">
												<input type="hidden" name="entry" value="" id="entryTextAreaVal"/><div id="entryTextArea" style="display:none">{$content}</div><div id="entry">{$content}</div></div>
										</div>
										</div>

								{*<div class="listTipEditor"><div><div class="innerCanvasNote">{$SetSeedLangs.Tip_List_Editor_Empty}</div></div></div>*}


									</div>
									{*<div class="textEditingAreaFake bpe_area">
									</div>*}
									<input type="hidden" name="timestamp" value="{$timestamp|date_format:"%Y-%m-%d %H:%M"}" maxlength="255"  id="blogMetaTime"/>
									<input type="hidden" name="longtitle" value="{$longtitle}" id="blogMetaLongTitle"/>
									<input type="hidden" name="keywords" value="{$keywords}" id="blogMetaKeywords"/>
									<input type="hidden" name="keywords" value="{$tags}" id="blogMetaTags"/>

									<input type="hidden" name="summary" value="{$summary}" id="blogMetaSummary"/>

								</form>
							{/if}
						{/if}


				</div>

				</div>
					<div class="paneTools">
					<div class="disabledMask"></div>
							<div id="nonComponent">
							{*}
								<div class="paneToolsPrimary" id="editTextImage">
									<span id="editText">
									{$SetSeedLangs.Edit_Text|htmlspecialchars}
									</span>
									<span id="editImage">
									{$SetSeedLangs.Edit_Image|htmlspecialchars}
									</span>
								</div>*}
								<div class="paneToolsButtonRow">
									<div class="paneToolsBottomHalf paneToolsDuplicate bpe_duplicate">
										{$SetSeedLangs.Duplicate|htmlspecialchars}
									</div>
									<div class="paneToolsBottomHalf paneToolsDelete bpe_delete">
										{$SetSeedLangs.Delete|htmlspecialchars}
									</div>
								</div>
								<div id="stylesMenuText">

									<div class="stylesHeading">
										<h2>{$SetSeedLangs.Text_styles|htmlspecialchars}</h2>
									</div>
									<div class="subHeaderLeftMenuItem">
										<div class="target" id="selectedTextFormat">

										</div>
										<div class="triShadow"></div>
										<ul>
											<li><a id="changeStyleP" data-lang="{$SetSeedLangs.Paragraph|htmlspecialchars}"><span class="key hideIfTouch">P</span>{$SetSeedLangs.Paragraph|htmlspecialchars}</a></li>
											<li class='iconbarRule'></li>
											<li><a id="changeStyleH1" data-lang="{$SetSeedLangs.Main_Heading|htmlspecialchars}"><span class="key hideIfTouch">{$SetSeedLangs.H|htmlspecialchars}</span><span id="hspanKeyh1">{$SetSeedLangs.Main_Heading|htmlspecialchars}</span></a></li>
											<li><a id="changeStyleH2" data-lang="{$SetSeedLangs.Sub_Heading|htmlspecialchars}"><span class="key hideIfTouch">{$SetSeedLangs.H|htmlspecialchars}</span><span id="hspanKeyh2">{$SetSeedLangs.Sub_Heading|htmlspecialchars}</span></a></li>
											<li><a id="changeStyleH3" data-lang="{$SetSeedLangs.Section_Heading|htmlspecialchars}"><span class="key hideIfTouch">{$SetSeedLangs.H|htmlspecialchars}</span><span id="hspanKeyh3">{$SetSeedLangs.Section_Heading|htmlspecialchars}</span></a></li>
											<li><a id="changeStyleH4" data-lang="{$SetSeedLangs.Minor_Heading|htmlspecialchars}"><span class="key hideIfTouch">{$SetSeedLangs.H|htmlspecialchars}</span><span id="hspanKeyh4">{$SetSeedLangs.Minor_Heading|htmlspecialchars}</span></a></li>
											<li class='iconbarRule'></li>
											<li><a id="changeStyleUL" data-lang="{$SetSeedLangs.Bulleted_List|htmlspecialchars}"><span class="key hideIfTouch">{$SetSeedLangs.B|htmlspecialchars}</span>{$SetSeedLangs.Bulleted_List|htmlspecialchars}</a></li>
											<li><a id="changeStyleOL" data-lang="{$SetSeedLangs.Numbered_List|htmlspecialchars}"><span class="key hideIfTouch">{$SetSeedLangs.N|htmlspecialchars}</span>{$SetSeedLangs.Numbered_List|htmlspecialchars}</a></li>
											<li class='iconbarRule'></li>
											<li><a id="changeStylePre" data-lang="{$SetSeedLangs.Code|htmlspecialchars}"><span class="key hideIfTouch">{$SetSeedLangs.C|htmlspecialchars}</span>{$SetSeedLangs.Code|htmlspecialchars}</a></li>
											{*<li class='iconbarRule'></li>*}
											<li style="display:none"><a id="changeStyleTable" data-lang="{$SetSeedLangs.Table|htmlspecialchars}">{$SetSeedLangs.Table|htmlspecialchars}</a></li>
										</ul>
										<div class="mtri"></div>
									</div>
									<div class="hiddenTools" id="indentTools">
										<div class="paneToolsPrimary secondaryAction noIcon" id="indentListItem">
											{$SetSeedLangs.Indent_List_Item|htmlspecialchars}
										</div>
										<div class="paneToolsPrimary secondaryAction noIcon" id="removeIndentListItem">
											{$SetSeedLangs.Remove_Indent|htmlspecialchars}
										</div>
									</div>
									<div class="stylesHeading">
										<h2>{$SetSeedLangs.Advanced|htmlspecialchars}</h2>
									</div>
									<div class="subHeaderLeftMenuItem">
										<div class="target" id="selectedTextClass">

										</div>
										<div class="triShadow"></div>
										<ul id="iconbarBlockClasses">
											<li><a rel="" data-lang="{$SetSeedLangs.Default|htmlspecialchars}"><span class="key hideIfTouch">{$SetSeedLangs.S|htmlspecialchars}</span><span class="friendlyname">{$SetSeedLangs.Default|htmlspecialchars}</span></a></li>
											<li class='iconbarRule'></li>

											{foreach from=$blockClassesArray item=item key=key name=loop1}
												{assign var=fn value=Custom_$item}
												{if $SetSeedLangs.$fn}
												{assign var=friendlyname value=$SetSeedLangs.$fn}
												{else}
												{assign var=friendlyname value=$item|replace:"_":" "|htmlspecialchars}
												{/if}
												<li><a rel="{$item}"><span class="key hideIfTouch">{$SetSeedLangs.S|htmlspecialchars}</span><span class="friendlyname">{$friendlyname}</span></a></li>
											{/foreach}
										</ul>
										<div class="mtri"></div>
									</div>
									<div class="stylesHeading">
										<h2>{$SetSeedLangs.Text_Alignment|htmlspecialchars}</h2>
									</div>
									<div class="subHeaderLeftMenuItem">
										<div class="target" id="selectedTextAlignment">

										</div>
										<div class="triShadow"></div>
										<ul id="changeTextAlign">
											<li><a rel="left" data-lang="{$SetSeedLangs.Align_Left|htmlspecialchars}" id="changeStyleLeft"><span class="key hideIfTouch">{$SetSeedLangs.Q|htmlspecialchars}</span>{$SetSeedLangs.Align_Left|htmlspecialchars}</a>
											</li>
											<li><a rel="center" data-lang="{$SetSeedLangs.Align_Center|htmlspecialchars}" id="changeStyleCenter"><span class="key hideIfTouch">{$SetSeedLangs.W|htmlspecialchars}</span>{$SetSeedLangs.Align_Center|htmlspecialchars}</a></li>
											<li><a rel="right" data-lang="{$SetSeedLangs.Align_Right|htmlspecialchars}" id="changeStyleRight"><span class="key hideIfTouch">{$SetSeedLangs.E|htmlspecialchars}</span>{$SetSeedLangs.Align_Right|htmlspecialchars}</a></li>
											<li><a rel="justify" data-lang="{$SetSeedLangs.Align_Justify|htmlspecialchars}" id="changeStyleDefault">{$SetSeedLangs.Align_Justify|htmlspecialchars}</a></li>

										</ul>
										<div class="mtri"></div>
									</div>
								</div>
								<div id="stylesMenuImage">
									<div class="stylesHeading">
										<h2>{$SetSeedLangs.Image_styles|htmlspecialchars}</h2>
									</div>
									<div class="subHeaderLeftMenuItem">
										<div class="target" id="selectedImageAlignment">

										</div>
										<div class="triShadow"></div>
										<ul id="iconbarImagePrimary">
											<li><a rel="Image_Default" data-lang="{$SetSeedLangs.Align_Default|htmlspecialchars}" id="changeStyleDefault">{$SetSeedLangs.Align_Default|htmlspecialchars}</a></li>
											<li><a rel="Left_Image" data-lang="{$SetSeedLangs.Align_Left|htmlspecialchars}" id="changeStyleLeft"><span class="key hideIfTouch">{$SetSeedLangs.Q|htmlspecialchars}</span>{$SetSeedLangs.Align_Left|htmlspecialchars}</a>						</li>
											<li><a rel="Centered" data-lang="{$SetSeedLangs.Align_Center|htmlspecialchars}" id="changeStyleCenter"><span class="key hideIfTouch">{$SetSeedLangs.W|htmlspecialchars}</span>{$SetSeedLangs.Align_Center|htmlspecialchars}</a></li>
											<li><a rel="Right_Image" data-lang="{$SetSeedLangs.Align_Right|htmlspecialchars}" id="changeStyleRight"><span class="key hideIfTouch">{$SetSeedLangs.E|htmlspecialchars}</span>{$SetSeedLangs.Align_Right|htmlspecialchars}</a></li>
										</ul>
										<div class="mtri"></div>
									</div>
									<div class="stylesHeading">
										<h2>{$SetSeedLangs.Image_Size|htmlspecialchars}</h2>
									</div>
									<div class="subHeaderLeftMenuItem">
										<div class="target" id="selectedImageSize">

										</div>
										<div class="triShadow"></div>
										<ul id="changeImageSize">
											{foreach from=$image_sizes item=image_size key=key name=loop1}
											<li><a class="changeImageSize {if $image_size.default=="true"}defaultImageSize{/if}" string="width={$image_size.width|htmlspecialchars}&amp;height={$image_size.height|htmlspecialchars}&amp;shrink={$image_size.shrink|htmlspecialchars}" data-lang="{$image_size.name|htmlspecialchars}">{$image_size.name|htmlspecialchars}</a></li>
											{/foreach}
											<li><a class="changeImageSize" string="" data-lang="{$SetSeedLangs.Original|htmlspecialchars}">{$SetSeedLangs.Original|htmlspecialchars}</a></li>
										</ul>
										<div class="mtri"></div>
									</div>
									<div class="stylesHeading">
										<h2>{$SetSeedLangs.Advanced_Image_Styles|htmlspecialchars}</h2>
									</div>
									<div class="subHeaderLeftMenuItem">
										<div class="target" id="selectedImageClass">

										</div>
										<div class="triShadow"></div>
										<ul id="iconbarImageClasses">
											<li><a rel="" data-lang="{$SetSeedLangs.Default|htmlspecialchars}"><span class="key hideIfTouch">{$SetSeedLangs.S|htmlspecialchars}</span><span class="friendlyname">{$SetSeedLangs.Default|htmlspecialchars}</span></a></li>
											<li class='iconbarRule'></li>
											{foreach from=$imageClassesArray item=item key=key name=loop1}
											{assign var=fn value=Custom_$item}
											{if $SetSeedLangs.$fn}
											{assign var=friendlyname value=$SetSeedLangs.$fn}
											{else}
											{assign var=friendlyname value=$item|replace:"_":" "|htmlspecialchars}
											{/if}
											<li><a rel="{$item}"><span class="key hideIfTouch">{$SetSeedLangs.S|htmlspecialchars}</span><span class="friendlyname">{$friendlyname}</span></a></li>
										{/foreach}
										</ul>
										<div class="mtri"></div>
									</div>
								</div>
								
								{if !$DISABLE_HELP}
								<div class="paneToolsHelp" data-play-video="/admin/help-videos-en/editor.mp4">{$SetSeedLangs.QuickTour_Editor}</div>
								{/if}								
							</div>
							<div id="components">
								<div class="paneToolsButtonRow">
									<div class="paneToolsBottomHalf paneToolsDuplicate bpe_duplicate">
										{$SetSeedLangs.Duplicate|htmlspecialchars}
									</div>
									<div class="paneToolsBottomHalf paneToolsDelete bpe_delete">
										{$SetSeedLangs.Delete|htmlspecialchars}
									</div>
								</div>
								<h2>{$SetSeedLangs.Storage_Item_Info|htmlspecialchars}</h2>
							</div>
							<div id="cores">
								<div class="paneToolsButtonRow">
									<div class="paneToolsBottomHalf paneToolsDuplicate bpe_duplicate">
										{$SetSeedLangs.Duplicate|htmlspecialchars}
									</div>
									<div class="paneToolsBottomHalf paneToolsDelete bpe_delete">
										{$SetSeedLangs.Delete|htmlspecialchars}
									</div>
								</div>
								<h2>{$SetSeedLangs.Cores_Info|htmlspecialchars}</h2>
							</div>

					</div>

				</div>
				{/if}


				<div id="statfake"></div>
				<div id="statsWrapper" class="rightPane showOnLoadRightPane">
					<div class="paneContents withTitleBar withoutCleverFilterBar">
					<div class="topBar">
						<div class="returnToLP"></div>
						<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
						<h1>{$SetSeedLangs.Statistics|htmlspecialchars}</h1>
					</div>

					<div class="pagesScroll">
						<div class="clearfix">

					{if !$stats}

					{assign var="month" value='F'|date}
					{assign var="day" value='j'|date}
					{assign var="dayending" value='S'|date}


						<p class="noPages">{$SetSeedLangs.Stats_Generating|htmlspecialchars}</p>


					{/if}
					{$stats}
							<p id="statsNote">{$statsNote|htmlspecialchars}</p>
						</div>
						</div>
					</div>

				</div>



			<div id="downloads" style="display:none">
				{include file="admin/views/pages/downloads.tpl"}
			</div>



<div id="overlay"></div>
<div id="saved"></div>


<div id="savedLog"></div>
<div id="message2"></div>
<div id="messageSound"></div>

{if $otherUsers}
<div id="fade"></div>
<div id="otherUsers">
	<div>
	<h1><strong>{$SetSeedLangs.Warning}:</strong> {$SetSeedLangs.Other_Users_Logged_In}</h1>
	<p>
		{$SetSeedLangs.Other_Users_Logged_In_More}
	</p>
	<ul>
	{foreach from=$otherUsers item=item key=key name=loop1}
		<li>{$item}</li>{/foreach}
	</ul>
	<p>{$SetSeedLangs.Other_Users_Logged_In_More2}</p>


	</p>
	<p style="text-align:right">
		<a href="#" id="dismisOtherUsers">OK</a>
	</p>
	</div>
</div>
<script type="text/javascript" charset="utf-8">
	{literal}
	$(document).keypress(function (e) {
      if (e.keyCode == 13) {
		$("#fade,#otherUsers").fadeOut();
      }
    });
	$(document).ready(function(){
		$("#dismisOtherUsers").click(function(){
			$("#fade,#otherUsers").fadeOut();
			return false;
		});
	});
	{/literal}
</script>
{/if}

<div id="videoList" style="display:none">{include file=admin/views/media/playlists.tpl}</div>
<div id="bpe_images" style="display:none">

	<div class="dropzone"></div>
	{section loop=$imageList name=loop1}
			<div class="responsiveListItem contentImage" data-filename="{$imageList[loop1][0]}" data-images-categories="{$imageList[loop1][4]}" data-thumb="/images/{$imageList[loop1][0]}?width=220&amp;height=auto" id="{$imageList[loop1][3]}" title="{$imageList[loop1][2]}" data-path="/images/{$imageList[loop1][0]}">
				 <div class="responsiveListItemImage" style="background: url('/images/{$imageList[loop1][0]}?width=100&amp;height=100&amp;shrink=false&i={$smarty.now}') 50% 50% no-repeat;background-size:50px 50px;"></div>
 				{*<div class="dragListItem"></div>*}
			 	<span class="overflowEllipsis">{$imageList[loop1][2]}</span>
				{foreach from=$imageList[loop1][5] item=grp} 
					<input type="hidden" id="imagescategory{$grp}" value="{$grp}"/>
				{/foreach}
			</div>
			<div class="dropzone"><div></div></div>
	{/section}
	{if $imageList|@count==0}
		<div class="noPages">{$SetSeedLangs.No_Images_Added|htmlspecialchars}</div>
	{/if}
	{if $totalImages>50}
	<div class="clear insertNewImagesBefore"></div>
	<a href="50" class="showMoreImages">Show more images</a>
	{/if}
</div>
<div id="rightPanePages" class="rightPane">

	<div id="adminPages" class="notTicking withTitleBar"></div>


</div> <!-- end #rightPanePages -->

<div id="rightPaneImages" class="rightPane assetPane autoRename"
	data-assign-keys="assignImagesKeys"
	data-url="pageActions.php"
	data-data="pageAction=renameImage"
	data-attr-to-update="title"
>
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span>{$SetSeedLangs.Insert|htmlspecialchars}</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart">{$SetSeedLangs.Storage|htmlspecialchars}:</span> <strong>{$SetSeedLangs.Images|htmlspecialchars}</strong> </h1>
	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab">{$SetSeedLangs.Text|htmlspecialchars}</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span>{$SetSeedLangs.Images}</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab">{$SetSeedLangs.Extra|htmlspecialchars}</div>
		<div class="dragInsertTabLayout dragInsertTab">{$SetSeedLangs.Insert_Structure|htmlspecialchars}</div>
	</div>
	<div id="imagesPane">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="imagesContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllImages"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllImages"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a>	</li>
					</ul>
					<div class="mtri"></div>
				</div>
			
				
				<div class="subHeaderLeftMenuItem right" id="imageSearch">
					<div class="target {if $searchingImages}searching{/if}">
						<svg class="searchSVG" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
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
								<div class="imageContextEditInputWrap"><input type="text" class="okToSendWhenFilled focus searchList" value="{$searchingImagesTerm}" /></div>
							</div>
							<div class="sendMe"></div>

							<span {if !$searchingImages}style="display:none"{/if} class="clearSearch"></span>

							<div class="clear"><!-- --></div>
						</form>
					</ul>
					<div class="mtri"></div>
				</div>
				
				<div class="subHeaderLeftMenuItem right" {if !$imagesCategories}style="display:none;"{/if} id="filterByImagesCategory">
					<div class="target notTooLong">
						{if $filterImagesCategoryId==""}{$SetSeedLangs.Filter_By_Images_Cat|htmlspecialchars}{elseif $filterImagesCategoryId=="none"}{$SetSeedLangs.No_Cats}{else}
						{foreach from=$imagesCategories item=imagesCat name=imagesCatLoop}
							{if $filterImagesCategoryId==$imagesCat.id}{$imagesCat.name|htmlspecialchars}{/if}
						{/foreach}
						{/if}
					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a href="" class="filterLink {if $filterImagesCategoryId==""}bpe_current{/if}" id="showAllImages" category-id="" data-lang="{$SetSeedLangs.Filter_By_Images_Cat|htmlspecialchars}"><span>{$SetSeedLangs.All}</span></a></li>
						<li><a href="" class="filterLink {if $filterImagesCategoryId=="none"}bpe_current{/if}" id="showImagesWithoutCat" category-id="none" data-lang="{$SetSeedLangs.No_Cats|htmlspecialchars}"><span>{$SetSeedLangs.No_Cats}</span></a></li>
						<li class='iconbarRule'></li>
						<div id="imagesFilterCategories" style="display:inline;">
						{foreach from=$imagesCategories item=imagesCat name=imagesCatLoop}
						<li><a href="#" class="filterBy filterLink {if $filterImagesCategoryId==$imagesCat.id}bpe_current{/if}" category-id="{$imagesCat.id}" data-lang="{$imagesCat.name|htmlspecialchars}"><span>{$imagesCat.name|htmlspecialchars}</span></a></li>
						{/foreach}
						</div>
					</ul>
					<div class="mtri"></div>
				</div>
				
				<div id="iconbarAddImage" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Image|htmlspecialchars}</div>


			</div>
			<div id="imagesPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsRotate" id="iconbarRotateImages">
						{$SetSeedLangs.Rotate|htmlspecialchars}
					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteImages">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				
				<div class="paneToolsPrimary renameAction">
					{$SetSeedLangs.Rename_Image|htmlspecialchars}
				</div>
				
				<div id="imagesCategoryPaneTools">
					<div class="stylesHeading">
						<h2>{$SetSeedLangs.Categories|htmlspecialchars}</h2>
					</div>
					<div class="subHeaderLeftMenuItem" data-test-value="data-images-categories" data-test-type="csv">
						<div class="target">

						</div>
						<div class="triShadow"></div>
						<ul>
							<div id="imagesCategoriesList"  {if !$imagesCategories}style="display:none"{/if}>
								{include file=admin/views/pages/imageGroups.tpl categories=$imagesCategories}
							</div>
							<li class='iconbarRule' {if !$imagesCategories}style="display:none"{/if}></li>
							<li><a id='quickAddImagesCategories'>{$SetSeedLangs.Quick_Add}&hellip;</a></li>
							<li class='iconbarRule'></li>
							<li><a id='manageImagesCategories'>{$SetSeedLangs.Manage_Categories}&hellip;</a></li>
							<a href="" data-lang="{$SetSeedLangs.None|htmlspecialchars}" data-item-value="" class="empty" style="display:none"></a>
						</ul>
						<div class="mtri"></div>
					</div>
				</div>
				
				{*
				<div class="paneToolsPrimary secondaryAction createGalleryButtonIcon" id="createGalleryFromSelection">
					{$SetSeedLangs.Create_Gallery_From_Selection|htmlspecialchars}
				</div>
				*}
				
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneImages -->


<div id="rightPaneImagesCategories" class="rightPane assetPane autoRename"
	data-assign-keys="assignImagesCategoriesKeys"
	data-url="pageActions.php"
	data-data="pageAction=renameImagesCategories"
	data-attr-to-update="title"
	data-post-call="renameImagesCategoryCallback"
>

	<div id="imagesCategoriesPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="imagesCategoriesContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllImagesCategories"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllImagesCategories"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddImagesCategory" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Image_Category|htmlspecialchars}</div>

			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToImagesFromCategories">

				</div>
				<h1>{$SetSeedLangs.Categories|htmlspecialchars}</h1>
			</div>
			<div id="imagesCategoriesPaneInner" class="pagesScroll">
				<div class="responsiveListAddForm addImagesCategory hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Images_Category_Name|htmlspecialchars}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
				<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteImagesCategory">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					{$SetSeedLangs.Rename_Image_Category|htmlspecialchars}
				</div>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneImageCategories -->

<div id="rightPaneVideos" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span>{$SetSeedLangs.Insert|htmlspecialchars}</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart">{$SetSeedLangs.Storage|htmlspecialchars}:</span> <strong>{$SetSeedLangs.Videos}</strong></h1>
	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab">{$SetSeedLangs.Text|htmlspecialchars}</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span>{$SetSeedLangs.Videos}</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab">{$SetSeedLangs.Extra|htmlspecialchars}</div>
		<div class="dragInsertTabLayout dragInsertTab">{$SetSeedLangs.Insert_Structure|htmlspecialchars}</div>
	</div>
	<div id="videosPane">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="videoContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">
						<li><a id="iconbarSelectAllVideos"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllVideos"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a>	</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddVideo" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Video|htmlspecialchars}</div>
			</div>
			<div id="videosPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
			<div class="paneToolsButtonRow">
				<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteVideos">
					{$SetSeedLangs.Delete|htmlspecialchars}
				</div>
			</div>
				<div class="paneToolsPrimary changePreview" id="changeVidThumb">
					{$SetSeedLangs.Change_Click_To_Play|htmlspecialchars}
				</div>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneVideos -->
<div id="rightPaneTables" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span>{$SetSeedLangs.Insert|htmlspecialchars}</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart">{$SetSeedLangs.Storage|htmlspecialchars}:</span> <strong>{$SetSeedLangs.Tables}</strong></h1>
	</div>
	{*<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab">{$SetSeedLangs.Text|htmlspecialchars}</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span>{$SetSeedLangs.Videos}</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab">{$SetSeedLangs.Extra|htmlspecialchars}</div>
		<div class="dragInsertTabLayout dragInsertTab">{$SetSeedLangs.Insert_Structure|htmlspecialchars}</div>
	</div>*}
	<div id="tablesPane">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="videoContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">
						<li><a id="iconbarSelectAllVideos"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllVideos"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a>	</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddTable" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Table|htmlspecialchars}</div>
			</div>
			<div id="tablesPaneInner" class="pagesScroll">
				<div class="addTableForm responsiveListAddForm hideOnReset" style="display:none">

					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Table_Name|htmlspecialchars}</div>
						<div class="imageContextEditInputWrap"><input type="text" id="tableTitle" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

				</div>	
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteTables">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					{$SetSeedLangs.Add_Table_Data|htmlspecialchars}
				</div>
			
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Headers|htmlspecialchars}</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-table-header">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<div id="tableHeadersJS">
						<li><a data-lang="{$SetSeedLangs.None}" data-item-value="0">{$SetSeedLangs.None|htmlspecialchars}</a></li>
						<li><a data-lang="{$SetSeedLangs.Top}" data-item-value="1">{$SetSeedLangs.Top|htmlspecialchars}</a></li>					
						<li><a data-lang="{$SetSeedLangs.Left}" data-item-value="2">{$SetSeedLangs.Left|htmlspecialchars}</a></li>
						<li><a data-lang="{$SetSeedLangs.Both}" data-item-value="3">{$SetSeedLangs.Both|htmlspecialchars}</a></li>					
						</div>
					</ul>
					<div class="mtri"></div>
				</div>
				{if !$DISABLE_HELP}
				<div class="paneToolsHelp" data-play-video="/admin/help-videos-en/tables.mp4">{$SetSeedLangs.QuickTour_Tables}</div>
				{/if}
			
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneTables -->
<div id="rightPaneGalleries" class="rightPane assetPane autoRename"
	data-assign-keys="assignGalleriesKeys"
	data-url="galleriesActions.php"
	data-data="galleriesAction=renameGallery"
	data-attr-to-update="data-name"
>
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span>{$SetSeedLangs.Insert|htmlspecialchars}</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart">{$SetSeedLangs.Storage|htmlspecialchars}:</span> <strong>{$SetSeedLangs.Galleries}</strong></h1>
	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab">{$SetSeedLangs.Text|htmlspecialchars}</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span>{$SetSeedLangs.Galleries}</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab">{$SetSeedLangs.Extra|htmlspecialchars}</div>
		<div class="dragInsertTabLayout dragInsertTab">{$SetSeedLangs.Insert_Structure|htmlspecialchars}</div>
	</div>
	<div id="galleriesPane">

		<div class="paneContents">
			<div class="cleverFilterBar">


				<div class="subHeaderLeftMenuItem">
					<div class="target" id="galleriesContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllGalleries"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllGalleries"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddGallery" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Gallery|htmlspecialchars}</div>

			</div>
			<div id="galleriesPaneInner" class="pagesScroll">

				<form action="/admin/galleriesActions.php" method="post" id="addGalleryForm" class="hideOnReset responsiveListAddForm" style="display:none">

					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Gallery_Name|htmlspecialchars}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

					<input type="hidden" name="galleriesAction" value="addGallery"/>
				</form>
				<div class="clearfix insertTarget"></div>
			</div>

			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteGalleries">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					{$SetSeedLangs.Rename_Gallery|htmlspecialchars}
				</div>
				<div class="paneToolsPrimary secondaryAction" id="editGalleryImagesButton">
					{$SetSeedLangs.Edit_Gallery_Images|htmlspecialchars}
				</div>
				
				<div id="galleryShowFromTagPaneTools">
					<div class="stylesHeading">
						<h2>{$SetSeedLangs.Show_Images_From_Galleries|htmlspecialchars}</h2>
					</div>
					<div class="subHeaderLeftMenuItem" data-test-value="data-images-from-categories" data-test-type="csv">
						<div class="target">

						</div>
						<div class="triShadow"></div>
						<ul>
							<div id="imagesCategoriesListForGals">
								{include file=admin/views/pages/imageGroups.tpl categories=$imagesCategories}
							</div>
							<a href="" data-lang="{$SetSeedLangs.None|htmlspecialchars}" data-item-value="" class="empty" style="display:none"></a>
						</ul>
						<div class="mtri"></div>
					</div>
				</div>
				
				{if $gallery_sizes}
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Styles|htmlspecialchars}</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-gallery-style">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<div id="stylesMenuGalleriesJS">
						<li><a gal-style="" data-lang="{$SetSeedLangs.Default}" data-item-value="">{$SetSeedLangs.Default|htmlspecialchars}</a></li>
						<div class="iconbarRule"></div>
						{foreach from=$gallery_sizes item=item key=key name=loop1}
							<li><a gal-style="{$item.style_variable_value|htmlspecialchars}" data-lang="{$item.display_name|htmlspecialchars}" data-item-value="{$item.style_variable_value|htmlspecialchars}">{$item.display_name|htmlspecialchars}</a></li>
						{/foreach}
						</div>
					</ul>
					<div class="mtri"></div>
				</div>
				{/if}
				{if !$DISABLE_HELP}
				<div class="paneToolsHelp" data-play-video="/admin/help-videos-en/galleries.mp4">{$SetSeedLangs.QuickTour_Galleries}</div>
				{/if}
			</div>

		</div>
	</div>

</div> <!-- end #rightPaneGalleries -->
<div id="rightPaneGalleryImages" class="rightPane assetPane">

	<div id="galleryImagesPane" class="withTitleBar">


		<div class="paneContents">


			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="galleryImagesContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllGalleryImages"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllGalleryImages"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddGalleryImage" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Gallery_Image|htmlspecialchars}</div>
			</div>
			<div class="topBar">

				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToGallery"></div>

				<span class="topBarTitle" id="editGalleryName"></span>
			</div>
			<div id="galleryImagesPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="fakePagesScroll"></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsRotate" id="iconbarRotateGalleryImages">
						{$SetSeedLangs.Rotate|htmlspecialchars}
					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteGalleryImages">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					{$SetSeedLangs.Rename_Gallery_Image|htmlspecialchars}
				</div>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneGalleryImages -->
<div id="rightPaneForms" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span>{$SetSeedLangs.Insert|htmlspecialchars}</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart">{$SetSeedLangs.Storage|htmlspecialchars}:</span> <strong>{$SetSeedLangs.Contact_forms}</strong></h1>


	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab">{$SetSeedLangs.Text|htmlspecialchars}</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span>{$SetSeedLangs.Contact_forms}</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab">{$SetSeedLangs.Extra|htmlspecialchars}</div>
		<div class="dragInsertTabLayout dragInsertTab">{$SetSeedLangs.Insert_Structure|htmlspecialchars}</div>
	</div>
	<div id="formsPane">

		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="formsContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllForms"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllForms"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddForm" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Form|htmlspecialchars}</div>

			</div>
			<div id="formsPaneInner" class="pagesScroll">


				<form action="/admin/formsActions.php" method="post" id="addFormForm" class="hideOnReset responsiveListAddForm" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Form_Name|htmlspecialchars}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="name" id="formTitle" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

					<input type="hidden" name="formsAction" value="addForm"/>
				</form>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsDuplicate" id="iconbarDuplicateForms">
						{$SetSeedLangs.Duplicate|htmlspecialchars}
					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteForms">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary">
					{$SetSeedLangs.Edit_Form_Fields|htmlspecialchars}
				</div>
				<div class="paneToolsPrimary secondaryAction renameAction">
					{$SetSeedLangs.Rename_Form|htmlspecialchars}
				</div>
				<div class="paneToolsPrimary secondaryAction exportFormSubmissions" id="exportFormSubmissions">
					{$SetSeedLangs.Form_Export|htmlspecialchars}
				</div>


				<div class="stylesHeading" id="recipientTooltip">
					<h2>{$SetSeedLangs.Recipient|htmlspecialchars}</h2>
				</div>
				<a id="iconbarFormDestination" title="" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="{$SetSeedLangs.None|htmlspecialchars}" data-test-value="data-destination"></a>

				<div class="stylesHeading">
					<h2>{$SetSeedLangs.AutoResponder|htmlspecialchars}</h2>
				</div>
				<a id="iconbarFormAutoresponder" title="" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="{$SetSeedLangs.None|htmlspecialchars}" data-test-value="data-autoresponder-title"></a>

				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Redirect_On_Send|htmlspecialchars}</h2>
				</div>
				<a id="iconbarFormRedirectOnSend" title="" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="{$SetSeedLangs.None|htmlspecialchars}" data-test-value="data-redirect-on-send"></a>
				{if $allprivs|@count>3} {* If new privs *}
					{if $DISABLE_MAILING_LIST==0}{if $allprivs.6==1 || $allprivs.7==1}{assign var=mailingListOk value=true}{/if}{/if}
				{else}
					{if $allprivs.1==1 || $master}
					{if $DISABLE_MAILING_LIST==0}{assign var=mailingListOk value=true}{/if}
					{/if}
				{/if}
				{if $mailingListOk}
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Add_To_Newsletter|htmlspecialchars}</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-newsletter-id">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul id="changeFormNewsletterGroup">
						<li><a href="#" data-item-value="0" data-lang="{$SetSeedLangs.None}" data-id="0">{$SetSeedLangs.None}</a></li>
						<li class='iconbarRule'></li>
						
						{foreach from=$emailGroups item=group}
							<li><a href="#" data-item-value="{$group.id}" data-lang="{$group.name}" data-id="{$group.id}">{$group.name}</a></li>
						{/foreach}
					</ul>
					<div class="mtri"></div>
				</div>
				{/if}


			</div>
		</div>
	</div>

</div> <!-- end #rightPaneForms -->

<div id="rightPaneFormInputs" class="rightPane assetPane">

	<div id="formInputsPane" class="withTitleBar">
		<div class="paneContents ">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="formInputContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllFormInputs"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllFormInputs"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddFormInput" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Form_Input|htmlspecialchars}</div>
			</div>
			<div class="topBar">
					<div class="returnToLP"></div>
					<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>

				<div class="topBarButtonBack" id="backToForm">

				</div>

				<span class="topBarTitle" id="editFormName"></span>
			</div>
			<div id="formInputsPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="fakePagesScroll"></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsDuplicate" id="iconbarDuplicateFormInputs">
						{$SetSeedLangs.Duplicate|htmlspecialchars}
					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteFormInputs">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary onlyWithOptions">
					{$SetSeedLangs.Edit_Field_Options|htmlspecialchars}
				</div>
				<div class="paneToolsPrimary secondaryAction renameAction">
					{$SetSeedLangs.Rename_Field|htmlspecialchars}
				</div>

				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Kind|htmlspecialchars}</h2>
				</div>

				<div class="subHeaderLeftMenuItem" data-test-value="data-input-type">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul id="listOfInputTypes">
						<li><a id="changeFieldTypeName" data-lang="{$SetSeedLangs.Field_Type_Name|htmlspecialchars}" data-item-value="name"><span class='key hideIfTouch'></span>{$SetSeedLangs.Field_Type_Name|htmlspecialchars}</a></li>
						<li><a id="changeFieldTypeEmail" data-lang="{$SetSeedLangs.Field_Type_Email|htmlspecialchars}" data-item-value="email"><span class='key hideIfTouch'></span>{$SetSeedLangs.Field_Type_Email|htmlspecialchars}</a></li>
						<li><a id="changeFieldTypePhone" data-lang="{$SetSeedLangs.Field_Type_Phone|htmlspecialchars}" data-item-value="phone"><span class='key hideIfTouch'></span>{$SetSeedLangs.Field_Type_Phone|htmlspecialchars}</a></li>
						<li><a id="changeFieldTypeDate" data-lang="{$SetSeedLangs.Field_Type_Date|htmlspecialchars}" data-item-value="date"><span class='key hideIfTouch'></span>{$SetSeedLangs.Field_Type_Date|htmlspecialchars}</a></li>

						<li class='iconbarRule'></li>
						<li><a id="changeFieldTypeShort" data-lang="{$SetSeedLangs.Field_Type_Short|htmlspecialchars}" data-item-value="short"><span class='key hideIfTouch'></span>{$SetSeedLangs.Field_Type_Short|htmlspecialchars}</a></li>

						<li><a id="changeFieldTypeLong" data-lang="{$SetSeedLangs.Field_Type_Long|htmlspecialchars}" data-item-value="long"><span class='key hideIfTouch'></span>{$SetSeedLangs.Field_Type_Long|htmlspecialchars}</a></li>
						<li class='iconbarRule'></li>
						<li><a id="changeFieldTypeCheckbox" data-lang="{$SetSeedLangs.Field_Type_Checkbox|htmlspecialchars}" data-item-value="checkbox"><span class='key hideIfTouch'></span>{$SetSeedLangs.Field_Type_Checkbox|htmlspecialchars}</a></li>
						<li><a id="changeFieldTypeRadiogroup" data-lang="{$SetSeedLangs.Field_Type_Radio|htmlspecialchars}" data-item-value="radiogroup"><span class='key hideIfTouch'></span>{$SetSeedLangs.Field_Type_Radio|htmlspecialchars}</a></li>
						<li><a id="changeFieldTypeSelect" data-lang="{$SetSeedLangs.Field_Type_Dropdown|htmlspecialchars}" data-item-value="select"><span class='key hideIfTouch'></span>{$SetSeedLangs.Field_Type_Dropdown|htmlspecialchars}</a></li>
						<li class='iconbarRule'></li>

						<li><a id="changeFieldTypeHeading" data-lang="{$SetSeedLangs.Field_Type_Heading|htmlspecialchars}" data-item-value="heading"><span class='key hideIfTouch'></span>{$SetSeedLangs.Field_Type_Heading|htmlspecialchars}</a></li>
						<li><a id="changeFieldTypeText" data-lang="{$SetSeedLangs.Field_Type_Text|htmlspecialchars}" data-item-value="text"><span class='key hideIfTouch'></span>{$SetSeedLangs.Field_Type_Text|htmlspecialchars}</a></li>
						{if $inputWidthSupport}
						<li><a id="changeFieldTypeNewRow" data-lang="{$SetSeedLangs.Field_Type_New_Row|htmlspecialchars}" data-item-value="clear"><span class='key hideIfTouch'></span>{$SetSeedLangs.Field_Type_New_Row|htmlspecialchars}</a></li>
						{/if}
						<li><a id="changeFieldTypeHR" data-lang="{$SetSeedLangs.Field_Type_HR|htmlspecialchars}" data-item-value="hr"><span class='key hideIfTouch'></span>{$SetSeedLangs.Field_Type_HR|htmlspecialchars}</a></li>												


						<li class='iconbarRule'></li>

						<li><a id="changeFieldTypeFile" data-lang="{$SetSeedLangs.Field_Type_File|htmlspecialchars}" data-item-value="file"><span class='key hideIfTouch'></span>{$SetSeedLangs.Field_Type_File|htmlspecialchars}</a>	</li>
					</ul>
					<div class="mtri"></div>
				</div>
				
				{if $inputWidthSupport}
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Input_Width|htmlspecialchars}</h2>
				</div>

				<div class="subHeaderLeftMenuItem" data-test-value="data-input-width">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul id='changeInputWidth'>
						<li><a data-lang="{$SetSeedLangs.Default|htmlspecialchars}" data-item-value="0"><span class='key hideIfTouch'></span>{$SetSeedLangs.Default|htmlspecialchars}</a></li>
						
						<li class='iconbarRule'></li>
						
						<li><a data-lang="{$SetSeedLangs.twentyfivepc|htmlspecialchars}" data-item-value="25"><span class='key hideIfTouch'></span>{$SetSeedLangs.twentyfivepc|htmlspecialchars}</a></li>
						<li><a data-lang="{$SetSeedLangs.fiftypc|htmlspecialchars}" data-item-value="50"><span class='key hideIfTouch'></span>{$SetSeedLangs.fiftypc|htmlspecialchars}</a></li>
						<li><a data-lang="{$SetSeedLangs.seventyfivepc|htmlspecialchars}" data-item-value="75"><span class='key hideIfTouch'></span>{$SetSeedLangs.seventyfivepc|htmlspecialchars}</a></li>
						<li><a data-lang="{$SetSeedLangs.onehundredpc|htmlspecialchars}" data-item-value="100"><span class='key hideIfTouch'></span>{$SetSeedLangs.onehundredpc|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				
				{/if}
				<a id="changeInputRequired" class="paneToolToggleItem" data-test-value="data-input-required" data-test-value-checked="yes">{$SetSeedLangs.Required|htmlspecialchars}</a>
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneFormInputs -->

<div id="rightPaneFormInputOptions" class="rightPane assetPane">

	<div id="formInputOptionsPane" class="withTitleBar">
		<div class="paneContents ">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="formInputOptionsContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllFormInputOptions"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllFormInputOptions"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddFormInputOption" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Form_Input_Option|htmlspecialchars}</div>
			</div>
			<div class="topBar">
						<div class="returnToLP"></div>
						<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>

				<div class="topBarButtonBack" id="backToInputs">

				</div>

				<div class="topBarTitle" id="editInputName"></div>
			</div>
			<div id="formInputOptionsPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="fakePagesScroll"></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteFormInputOptions">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					{$SetSeedLangs.Rename_Field_Option|htmlspecialchars}
				</div>

			</div>
		</div>

	</div>

</div> <!-- end #rightPaneFormInputOptions -->

<div id="rightPaneProducts" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span>{$SetSeedLangs.Insert|htmlspecialchars}</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart">{$SetSeedLangs.Storage|htmlspecialchars}:</span> <strong>{$SetSeedLangs.Products|htmlspecialchars}</strong></h1>


	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab">{$SetSeedLangs.Text|htmlspecialchars}</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span>{$SetSeedLangs.Products}</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab">{$SetSeedLangs.Extra|htmlspecialchars}</div>
		<div class="dragInsertTabLayout dragInsertTab">{$SetSeedLangs.Insert_Structure|htmlspecialchars}</div>
	</div>
	<div id="productsPane">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="productsContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllProducts"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllProducts"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="subHeaderLeftMenuItem right">
					<div class="target">
						<svg class="searchSVG" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
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
								<div class="imageContextEditInputWrap"><input type="text" class="okToSendWhenFilled focus searchList" value="" /></div>
							</div>
							<div class="sendMe"></div>

							<span style="display:none" class="clearSearch"></span>

							<div class="clear"><!-- --></div>
						</form>
					</ul>
					<div class="mtri"></div>
				</div>

				<div class="subHeaderLeftMenuItem right" {if !$productCategories}style="display:none;"{/if} id="filterByProdCat">
					<div class="target notTooLong">
						{$SetSeedLangs.Filter_By_Prod_Cat|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a href="" class="filterLink bpe_current" id="showAllProducts" category-id="" data-lang="{$SetSeedLangs.Filter_By_Prod_Cat|htmlspecialchars}"><span>{$SetSeedLangs.All}</span></a></li>
						<div id="productFilterCategories" style="display:inline;">
						{foreach from=$productCategories item=prodCat name=prodCatLoop}
						<li><a href="#" class="filterBy filterLink" category-id="{$prodCat.id}" data-lang="{$prodCat.name|htmlspecialchars}"><span>{$prodCat.name|htmlspecialchars}</span></a></li>
						{/foreach}
						</div>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="subHeaderLeftMenuItem right">
					<div class="target">
						{$SetSeedLangs.Sort|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a href="#" id="sortProductsByCreated" class="{if $productSortBy=="productsid" || $productSortBy==""}bpe_current{/if} productSortOption">{$SetSeedLangs.Sort_Date_Created|htmlspecialchars}</a></li>
						<li><a href="#" id="sortProductsByName" class="{if $productSortBy=="name"}bpe_current{/if} productSortOption">{$SetSeedLangs.Sort_Name|htmlspecialchars}</a></li>
						<li><a href="#" id="sortProductsByPrice" class="{if $productSortBy=="price"}bpe_current{/if} productSortOption">{$SetSeedLangs.Sort_Price|htmlspecialchars}</a></li>
						<li><a href="#" id="sortProductsByStock" class="{if $productSortBy=="in_stock"}bpe_current{/if} productSortOption">{$SetSeedLangs.Sort_Stock|htmlspecialchars}</a></li>
						<div class="bpe_rule"></div>
						<li><a href="#" id="sortProductsReverse" class="{if $productSortReverse}bpe_current{/if}">{$SetSeedLangs.Sort_Reverse|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>

				<div id="iconbarAddProduct" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Product|htmlspecialchars}</div>
			</div>

			<div id="productsPaneInner" class="pagesScroll">


				<form action="/admin/shopActions.php" method="post" id="addProductForm" class="hideOnReset responsiveListAddForm" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Product_Name|htmlspecialchars}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="product_name" id="formTitle" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>


				</form>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
				<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsDuplicate" id="iconbarDuplicateProducts">
						{$SetSeedLangs.Duplicate|htmlspecialchars}
					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteProducts">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary onlyWithOptions">
					{$SetSeedLangs.Edit_Product_Choices|htmlspecialchars}
				</div>
				<div class="paneToolsPrimary secondaryAction renameAction">
					{$SetSeedLangs.Rename_Product|htmlspecialchars}
				</div>

				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Product_Type|htmlspecialchars}</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-product-type">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a id="changeProductTypeSimple" data-lang="{$SetSeedLangs.Product_Simple|htmlspecialchars}" data-item-value="simple" data-item-value-2="simple_multi">{$SetSeedLangs.Product_Simple|htmlspecialchars}</a></li>
						<li><a id="changeProductTypeGallery" data-lang="{$SetSeedLangs.Product_Gallery|htmlspecialchars}" data-item-value="gallery" data-item-value-2="gallery_multi" class="showSubMenu">{$SetSeedLangs.Product_Gallery|htmlspecialchars}&hellip;</a>
							<ul id="chooseGalleriesList" data-test-value="data-gal-id">

							</ul>
						</li>
						<li><a id="changeProductTypeForm" data-lang="{$SetSeedLangs.Product_Form|htmlspecialchars}" data-item-value="form" data-item-value-2="form_multi" class="showSubMenu">{$SetSeedLangs.Product_Form|htmlspecialchars}&hellip;</a>
						<ul id="chooseFormsList"  data-test-value="data-form-id"></ul>
						</li>
						<li><a id="changeProductTypeDonation" data-lang="{$SetSeedLangs.Donation|htmlspecialchars}" data-item-value="donation">{$SetSeedLangs.Donation|htmlspecialchars}</a></li>
						<li><a id="changeProductTypeDigital" data-lang="{$SetSeedLangs.Digital_Delivery|htmlspecialchars}" data-item-value="digital">{$SetSeedLangs.Digital_Delivery|htmlspecialchars}</a></li>
						<li class='iconbarRule'></li>
						<li><a id="changeProductTypeMulti" data-lang="{$SetSeedLangs.Product_Choices|htmlspecialchars}" data-item-value="simple_multi" data-item-value-2="gallery_multi" data-item-value-3="form_multi">{$SetSeedLangs.Product_Choices|htmlspecialchars}</a></li>


					</ul>
					<div class="mtri"></div>
				</div>
				<div class="paneToolsPrimary buttonToolToUpdate secondaryAction noIcon onlyWithoutOptions" id="iconbarProductSerialNumbers" data-valid-attr-test="data-product-type" data-valid-test-values="digital">
					{$SetSeedLangs.Serial_Numbers|htmlspecialchars}
				</div>
				<div class="paneToolsPrimary buttonToolToUpdate secondaryAction noIcon onlyWithoutOptions" id="iconbarProductUploadFile" data-valid-attr-test="data-product-type" data-valid-test-values="digital">
					{$SetSeedLangs.Upload_File|htmlspecialchars}
				</div>
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Categories|htmlspecialchars}</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-product-cats" data-test-type="csv">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<div id="productCategoriesList" {if !$productCategories}style="display:none"{/if}>
							{foreach from=$productCategories item=prodCat name=prodCatLoop}
							<li><a href="#" product-cat-id="{$prodCat.id}" data-lang="{$prodCat.name|htmlspecialchars}" data-item-value="{$prodCat.id}" product-parent-id="{$prodCat.parent_id}" class="indent{$prodCat.level} bpe_selection_tool greyedOut"><span class="overflowEllipsis">{$prodCat.name|htmlspecialchars}</span></a></li>
							{/foreach}
						</div>
						<li class='iconbarRule' {if !$productCategories}style="display:none"{/if}></li>
						<li><a id="manageProductCategories">{$SetSeedLangs.Manage_Categories|htmlspecialchars}&hellip;</a></li>
						<a href="" data-lang="{$SetSeedLangs.None|htmlspecialchars}" data-item-value="" class="empty" style="display:none"></a>

					</ul>
					<div class="mtri"></div>
				</div>

				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Product_Price|htmlspecialchars} <strong id="hasVolumeDiscounts">(1+)</strong></h2>
				</div>
				<a id="iconbarProductPrice" title="{$SetSeedLangs.Keyboard_Shortcut}: {$SetSeedLangs.P}" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="product-price" data-if-disabled="-" data-valid-attr-test="data-product-type" data-valid-test-values="simple,gallery,form,donation,digital"></a>
				<div class="" id="productVolumeDiscount1Wrap">
					<div class="stylesHeading">
						<h2>{$SetSeedLangs.Product_Price|htmlspecialchars} <strong>(<span id="productVolumeDiscount1ThresholdVal"></span>+)</strong></h2>
					</div>
					<a id="productVolumeDiscount1" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="data-discount-1-price" data-if-disabled="-" data-valid-attr-test="data-product-type" data-valid-test-values="simple,gallery,form,donation"></a>

				</div>
				<div class="" id="productVolumeDiscount2Wrap">
					<div class="stylesHeading">
						<h2>{$SetSeedLangs.Product_Price|htmlspecialchars} <strong>(<span id="productVolumeDiscount2ThresholdVal"></span>+)</strong></h2>
					</div>
					<a id="productVolumeDiscount2" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="data-discount-2-price" data-if-disabled="-" data-valid-attr-test="data-product-type" data-valid-test-values="simple,gallery,form,donation"></a>

				</div>
				<div class="paneToolsPrimary secondaryAction noIcon onlyWithoutOptions" id="addVolumeDiscount">
					{$SetSeedLangs.Add_Quantity_Discount|htmlspecialchars}
				</div>
				<div class="paneToolsPrimary secondaryAction noIcon onlyWithoutOptions" id="addVolumeDiscount2">
					{$SetSeedLangs.Add_Quantity_Discount|htmlspecialchars}
				</div>





				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Product_Weight|htmlspecialchars}</h2>
				</div>
				<a id="productChangeWeight" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="product-weight" data-valid-attr-test="data-product-type" data-valid-test-values="simple,gallery,form"></a>

				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Product_Number_Stock|htmlspecialchars}</h2>
				</div>
				<a id="productChangeStock" title="{$SetSeedLangs.Keyboard_Shortcut}: {$SetSeedLangs.S}" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="product-stock" data-if-disabled="-" data-valid-attr-test="options-separate-stock" data-valid-test-values="no"></a>
				<a id="productChangeSeparateOptionsStock" class="paneToolToggleItem" data-test-value="options-separate-stock" data-test-value-checked="yes" data-valid-attr-test="data-product-type" data-valid-test-values="simple_multi,gallery_multi,form_multi">{$SetSeedLangs.Separate_Stock_For_Options|htmlspecialchars}</a>
				<a id="productChangeOnlyOne" class="paneToolToggleItem" data-test-value="only-one" data-test-value-checked="yes">{$SetSeedLangs.Product_Only_One|htmlspecialchars}</a>
				<a id="productChangeSellIfInStock" class="paneToolToggleItem" data-test-value="product-sell-only-if-stock" data-test-value-checked="1">{$SetSeedLangs.Sell_If_In_Stock|htmlspecialchars}</a>



			</div>
		</div>
	</div>

</div> <!-- end #rightPaneProducts -->

<div id="rightPaneProductOptions" class="rightPane assetPane">

	<div id="productOptionsPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="productOptionsContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllProductOptions"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllProductOptions"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a>	</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddProductOption" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Product_Option|htmlspecialchars}</div>
			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToProducts">

				</div>
				<span class="topBarTitle" id="editProductName"></span>
			</div>
			<div id="productOptionsPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="fakePagesScroll"></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteProductOptions">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					{$SetSeedLangs.Rename_Product_Choice|htmlspecialchars}
				</div>

				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Product_Price|htmlspecialchars} <strong id="hasVolumeDiscountsOptions">(1+)</strong></h2>
				</div>
				<a id="iconbarProductOptionPrice" title="{$SetSeedLangs.Keyboard_Shortcut}: {$SetSeedLangs.P}" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="data-option-price" data-if-disabled="-"></a>
				<div class="" id="productOptionsVolumeDiscount1Wrap">
					<div class="stylesHeading">
						<h2>{$SetSeedLangs.Product_Price|htmlspecialchars} <strong>(<span id="productOptionsVolumeDiscount1ThresholdVal"></span>+)</strong></h2>
					</div>
					<a id="productOptionsVolumeDiscount1" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="data-discount-1-price" data-if-disabled="-"></a>

				</div>
				<div class="" id="productOptionsVolumeDiscount2Wrap">
					<div class="stylesHeading">
						<h2>{$SetSeedLangs.Product_Price|htmlspecialchars} <strong>(<span id="productVolumeDiscount2ThresholdVal"></span>+)</strong></h2>
					</div>
					<a id="productOptionsVolumeDiscount2" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="data-discount-2-price" data-if-disabled="-"></a>

				</div>
				<div class="paneToolsPrimary secondaryAction noIcon" id="addVolumeDiscountOptions">
					{$SetSeedLangs.Add_Quantity_Discount|htmlspecialchars}
				</div>
				<div class="paneToolsPrimary secondaryAction noIcon" id="addVolumeDiscount2Options">
					{$SetSeedLangs.Add_Quantity_Discount|htmlspecialchars}
				</div>

				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Product_Number_Stock|htmlspecialchars}</h2>
				</div>
				<a id="productOptionChangeStock" title="{$SetSeedLangs.Keyboard_Shortcut}: {$SetSeedLangs.S}" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="0" data-test-value="product-option-stock" data-if-disabled="-" data-valid-attr-test="data-option-has-stock" data-valid-test-values="yes"></a>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneProductOptions -->


<div id="rightPaneProductCategories" class="rightPane assetPane">

	<div id="productCategoriesPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="productCategoriesContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllProductCategories"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllProductCategories"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddProductCategory" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Product_Category|htmlspecialchars}</div>

			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToProductsFromCategories">

				</div>
				<h1>{$SetSeedLangs.Categories|htmlspecialchars}</h1>
			</div>
			<div id="productCategoriesPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
			<div class="paneToolsButtonRow">
				<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteProductCategories">
					{$SetSeedLangs.Delete|htmlspecialchars}
				</div>
			</div>
				<div class="paneToolsPrimary renameAction">
					{$SetSeedLangs.Rename_Product_Category|htmlspecialchars}
				</div>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneProductCategories -->



<div id="rightPaneBookingProducts" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span>{$SetSeedLangs.Insert|htmlspecialchars}</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart">{$SetSeedLangs.Storage|htmlspecialchars}:</span> <strong>{$SetSeedLangs.Booking_Products|htmlspecialchars}</strong></h1>


	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab">{$SetSeedLangs.Text|htmlspecialchars}</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span>{$SetSeedLangs.Booking_Products}</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab">{$SetSeedLangs.Extra|htmlspecialchars}</div>
		<div class="dragInsertTabLayout dragInsertTab">{$SetSeedLangs.Insert_Structure|htmlspecialchars}</div>
	</div>
	<div id="bookingProductsPane" data-ajax-update-path="/admin/shopActions.php?shopAction=updateBookingProduct">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="productsContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllProducts"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllProducts"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				{*
				<div class="subHeaderLeftMenuItem right">
					<div class="target">
						<svg class="searchSVG" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
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
								<div class="imageContextEditInputWrap"><input type="text" class="okToSendWhenFilled focus searchList" value="" /></div>
							</div>
							<div class="sendMe"></div>

							<span style="display:none" class="clearSearch"></span>

							<div class="clear"><!-- --></div>
						</form>
					</ul>
					<div class="mtri"></div>
				</div>
				*}
				<div id="iconbarAddBookingProduct" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Booking_Product|htmlspecialchars}</div>
			</div>

			<div id="bookingProductsPaneInner" class="pagesScroll">


				<form action="/admin/shopActions.php" method="post" id="addBookingProductForm" class="hideOnReset responsiveListAddForm" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Booking_Product_Name|htmlspecialchars}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="booking_product_name" id="formTitle" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

				</form>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools" id="pane-tools-booking-products">
				<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsDuplicate" id="iconbarDuplicateBookingProducts">
						{$SetSeedLangs.Duplicate|htmlspecialchars}
					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteBookingProducts">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary">
					{$SetSeedLangs.Edit_Availability|htmlspecialchars}
				</div>
				<div class="paneToolsPrimary secondaryAction renameAction">
					{$SetSeedLangs.Rename_Product|htmlspecialchars}
				</div>

				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Product_Type|htmlspecialchars}</h2>
				</div>
				<div class="subHeaderLeftMenuItem item-tool-properties item-tool-properties-menu" data-test-data="item-type">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a id="" data-lang="{$SetSeedLangs.Booking_Type_Object|htmlspecialchars}" data-test-data-value="0"  data-dependents="booking-prod-type-1">{$SetSeedLangs.Booking_Type_Object|htmlspecialchars}</a></li>
						<li><a id="" data-lang="{$SetSeedLangs.Booking_Type_Seats|htmlspecialchars}" data-test-data-value="1" data-dependents="booking-prod-type-2" >{$SetSeedLangs.Booking_Type_Seats|htmlspecialchars}</a></li>
						<li><a id="" data-lang="{$SetSeedLangs.Booking_Type_Places|htmlspecialchars}" data-test-data-value="2" data-dependents="booking-prod-type-3" >{$SetSeedLangs.Booking_Type_Places|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<p class="multiple-types-selected">
					{$SetSeedLangs.Multi_Types_Selected}
				</p>
				<div class="toolset-with-dependency booking-prod-type-1">
					<div class="stylesHeading">
						<h2>{$SetSeedLangs.Booking_Prod_Available|htmlspecialchars}</h2>
					</div>
					<a id="" class="paneToolTextItem item-tool-properties item-tool-properties-text" data-test-data="spaces-available" data-text-edit-info="{$SetSeedLangs.Booking_Prod_Available_Objects_Info|htmlspecialchars}"></a>
				</div>
				<div class="toolset-with-dependency booking-prod-type-2">
					<div class="stylesHeading">
						<h2>{$SetSeedLangs.Booking_Prod_Available|htmlspecialchars}</h2>
					</div>
					<a id="" class="paneToolTextItem item-tool-properties item-tool-properties-text" data-test-data="spaces-available" data-text-edit-title="{$SetSeedLangs.Booking_Prod_Available|htmlspecialchars}" data-text-edit-info="{$SetSeedLangs.Booking_Prod_Available_Seats_Info|htmlspecialchars}"></a>
				</div>
				<div class="toolset-with-dependency booking-prod-type-3">
					<div class="stylesHeading">
						<h2>{$SetSeedLangs.Place_Name|htmlspecialchars}</h2>
					</div>
					<div class="subHeaderLeftMenuItem item-tool-properties item-tool-properties-menu" data-replace-label-string-plural="booking-prod-places-custom-string" data-replace-label-string="booking-prod-min-charge-custom-string,booking-prod-spaces-per-place-custom-string,booking-prod-adult-required-custom-string"  data-test-data="place-name">
						<div class="target">

						</div>
						<div class="triShadow"></div>
						<ul>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Area|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Areas|htmlspecialchars}" data-test-data-value="1">{$SetSeedLangs.Booking_Prod_Name_Area|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Building|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Buildings|htmlspecialchars}" data-test-data-value="2">{$SetSeedLangs.Booking_Prod_Name_Building|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Caravan|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Caravans|htmlspecialchars}" data-test-data-value="3">{$SetSeedLangs.Booking_Prod_Name_Caravan|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Chalet|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Chalets|htmlspecialchars}" data-test-data-value="4">{$SetSeedLangs.Booking_Prod_Name_Chalet|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Cottage|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Cottages|htmlspecialchars}" data-test-data-value="5">{$SetSeedLangs.Booking_Prod_Name_Cottage|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Double_Bed|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Double_Beds|htmlspecialchars}" data-test-data-value="6">{$SetSeedLangs.Booking_Prod_Name_Double_Bed|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Flat|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Flats|htmlspecialchars}" data-test-data-value="7">{$SetSeedLangs.Booking_Prod_Name_Flat|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Floor|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Floors|htmlspecialchars}" data-test-data-value="8">{$SetSeedLangs.Booking_Prod_Name_Floor|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Group|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Groups|htmlspecialchars}" data-test-data-value="9">{$SetSeedLangs.Booking_Prod_Name_Group|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_House|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Houses|htmlspecialchars}" data-test-data-value="10">{$SetSeedLangs.Booking_Prod_Name_House|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Hut|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Huts|htmlspecialchars}"
								 data-test-data-value="11">{$SetSeedLangs.Booking_Prod_Name_Hut|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Office|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Offices|htmlspecialchars}" data-test-data-value="12">{$SetSeedLangs.Booking_Prod_Name_Office|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Party|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Parties|htmlspecialchars}" data-test-data-value="13">{$SetSeedLangs.Booking_Prod_Name_Party|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Pitch|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Pitches|htmlspecialchars}" data-test-data-value="14">{$SetSeedLangs.Booking_Prod_Name_Pitch|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Place|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Places|htmlspecialchars}" data-test-data-value="0" class="default-lang-item">{$SetSeedLangs.Booking_Prod_Name_Place|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Tent|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Tents|htmlspecialchars}" data-test-data-value="15">{$SetSeedLangs.Booking_Prod_Name_Tent|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Unit|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Units|htmlspecialchars}" data-test-data-value="16">{$SetSeedLangs.Booking_Prod_Name_Unit|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Vehicle|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Vehicles|htmlspecialchars}" data-test-data-value="17">{$SetSeedLangs.Booking_Prod_Name_Vehicle|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Yurt|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Yurts|htmlspecialchars}" data-test-data-value="18">{$SetSeedLangs.Booking_Prod_Name_Yurt|htmlspecialchars}</a></li>
							<li><a id="" data-lang="{$SetSeedLangs.Booking_Prod_Name_Room|htmlspecialchars}" data-lang-plural="{$SetSeedLangs.Booking_Prod_Name_Rooms|htmlspecialchars}" data-test-data-value="19">{$SetSeedLangs.Booking_Prod_Name_Room|htmlspecialchars}</a></li>

						</ul>
						<div class="mtri"></div>
					</div>

					<div class="stylesHeading">
						<h2 class="booking-prod-places-custom-string" data-original-string="{$SetSeedLangs.Booking_Prod_Places_Available|htmlspecialchars}">{$SetSeedLangs.Booking_Prod_Places_Available|htmlspecialchars}</h2>
					</div>
					<a id="" class="paneToolTextItem item-tool-properties item-tool-properties-text" data-test-data="places-available"></a>

					<div class="stylesHeading">
						<h2 class="booking-prod-spaces-per-place-custom-string" data-original-string="{$SetSeedLangs.Booking_Prod_Spaces_Per_Place_Available|htmlspecialchars}">{$SetSeedLangs.Booking_Prod_Spaces_Per_Place_Available|htmlspecialchars}</h2>
					</div>
					<a id="" class="paneToolTextItem item-tool-properties item-tool-properties-text" data-test-data="spaces-available"></a>
				</div>
				<div class="toolset-with-dependency booking-prod-type-3 booking-prod-type-2">
					<a id="" class="paneToolToggleItem item-tool-properties item-tool-properties-checkbox" data-test-data="special-separate">{$SetSeedLangs.Concessions_Separate|htmlspecialchars}</a>

					<a id="" class="paneToolToggleItem item-tool-properties item-tool-properties-checkbox" data-test-data="children-separate" data-dependents="booking-prod-adult-required" >{$SetSeedLangs.Children_Separate|htmlspecialchars}</a>

				</div>
				<div class="toolset-with-dependency booking-prod-adult-required">
					<div class="toolset-with-dependency booking-prod-type-3">
						<a id="" class="paneToolToggleItem item-tool-properties item-tool-properties-checkbox booking-prod-adult-required-custom-string" data-original-string="{$SetSeedLangs.Adult_Required_Per_Place|htmlspecialchars}" data-test-data="adult-required">{$SetSeedLangs.Adult_Required_Per_Place|htmlspecialchars}</a>
					</div>
					<div class="toolset-with-dependency booking-prod-type-2">
						<a id="" class="paneToolToggleItem item-tool-properties item-tool-properties-checkbox" data-test-data="adult-required">{$SetSeedLangs.Adult_Required|htmlspecialchars}</a>

					</div>
				</div>

				<div class="toolset-with-dependency booking-prod-type-3">

				<a id="" class="paneToolToggleItem item-tool-properties item-tool-properties-checkbox booking-prod-min-charge-custom-string" data-original-string="{$SetSeedLangs.Min_Charge_Per_Place|htmlspecialchars}" data-test-data="min-charge-per-space" >{$SetSeedLangs.Min_Charge_Per_Place|htmlspecialchars}</a>
				</div>
				{*
				<a id="" class="paneToolToggleItem item-tool-properties item-tool-properties-checkbox" data-test-data="allow-deposit" data-dependents="checkout-with-deposit" >{$SetSeedLangs.Bookings_Allow_Deposit|htmlspecialchars}</a>

				<div class="checkout-with-deposit toolset-with-dependency">
					<div class="stylesHeading">
						<h2>{$SetSeedLangs.Checkout_With|htmlspecialchars}</h2>
					</div>
					<a id="" class="paneToolTextItem item-tool-properties item-tool-properties-text" data-test-data="checkout-with"></a>
				</div>
				*}

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneBooking -->

<div id="rightPaneCalendars" class="rightPane assetPane">

	<div id="calendarsPane">
		<div class="assetPaneHeader">
			<div class="closeDragInsert"></div>
			<div class="backToDragInsertIndex"><span>{$SetSeedLangs.Insert|htmlspecialchars}</span></div>
			<div class="returnToLP"></div>
			<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart">{$SetSeedLangs.Storage|htmlspecialchars}:</span> <strong>{$SetSeedLangs.Calendars|htmlspecialchars}</strong></h1>



		</div>
		<div class="dragInsertTabs clearfix">
			<div class="dragInsertTabText dragInsertTab">{$SetSeedLangs.Text|htmlspecialchars}</div>
			<div class="dragInsertTabStorage dragInsertTab current">
				<span class="level2Switcher"><span class="overflowEllipsis"><span>{$SetSeedLangs.Calendars}</span></span></span>
			</div>
			<div class="dragInsertTabWidgets dragInsertTab">{$SetSeedLangs.Extra|htmlspecialchars}</div>
			<div class="dragInsertTabLayout dragInsertTab">{$SetSeedLangs.Insert_Structure|htmlspecialchars}</div>
		</div>
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="calendarsContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllCalendars"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllCalendars"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a>	</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddCalendar" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Calendar|htmlspecialchars}</div>
			</div>
			<div id="calendarsPaneInner" class="pagesScroll">


					<form action="" method="post" id="addCalendarForm" class="responsiveListAddForm withFakeFormItem" style="display:none">

						<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Calendar_Name|htmlspecialchars}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="calendar_name" id="calendarTitle" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>
					</form>
				<div class="clearfix insertTarget">{include file=admin/views/calendar/categories.tpl}</div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
			<div class="paneToolsButtonRow">

				<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteCalendars">
					{$SetSeedLangs.Delete|htmlspecialchars}
				</div>
			</div>
				<div class="paneToolsPrimary">
					{$SetSeedLangs.Edit_Calendar_Events|htmlspecialchars}
				</div>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneCalendars -->

<div id="rightPaneCalendarEvents" class="rightPane assetPane">

	<div id="calendarEventsPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="calendarEventsContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">
						<li><a id="eventsCut" class="greyedOut bpe_selection_tool"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.X|htmlspecialchars}</span>{$SetSeedLangs.Cut|htmlspecialchars}</a>
						<li><a id="eventsCopy" class="greyedOut bpe_selection_tool"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.C|htmlspecialchars}</span>{$SetSeedLangs.Copy|htmlspecialchars}</a></li>
						<li><a id="eventsPaste" class="greyedOut"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.V|htmlspecialchars}</span>{$SetSeedLangs.Paste|htmlspecialchars}</a></li>

						<li class='iconbarRule'></li>

						<li><a id="iconbarSelectAllCalendarEvents"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllCalendarEvents"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddCalendarEvent" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Event|htmlspecialchars}</div>
				<div class="subHeaderLeftMenuItem">
					<div class="target" id="calendarEventsDateFilterButton"></div>
					<div class="triShadow"></div>
					<ul class="dateFilterCalendar" id="calendarEventsDateFilter">
					</ul>
					<div class="mtri"></div>
				</div>
				
				<div class="subHeaderButton" id="iconbarImportEvents">
					{$SetSeedLangs.Import|htmlspecialchars}
				</div>
				<div class="subHeaderButton" id="iconbarExportEvents">
					{$SetSeedLangs.Export|htmlspecialchars}
				</div>
				
				
			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToCalendars"></div>
				<span class="topBarTitle" id="editCalendarName"></span>
			</div>
			<div id="calendarEventsPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="fakePagesScroll"></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
			<div class="paneToolsButtonRow">
				<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteCalendarEvents">
					{$SetSeedLangs.Delete|htmlspecialchars}
				</div>
			</div>
				<div class="paneToolsPrimary">
					{$SetSeedLangs.Edit_Event|htmlspecialchars}
				</div>

				<div id="eventsGroupsPaneTools">
					<div class="stylesHeading">
						<h2>{$SetSeedLangs.Categories|htmlspecialchars}</h2>
					</div>
					<div class="subHeaderLeftMenuItem" data-test-value="data-events-groups" data-test-type="csv">
						<div class="target">

						</div>
						<div class="triShadow"></div>
						<ul>
							<div id="eventsGroupsList" style="display:none">
							</div>
							<li class='iconbarRule' {if !$eventsGroups}style="display:none"{/if}></li>
							<li><a id='manageEventsGroups'>{$SetSeedLangs.Manage_Categories}&hellip;</a></li>
							<a href="" data-lang="{$SetSeedLangs.None|htmlspecialchars}" data-item-value="" class="empty" style="display:none"></a>
						</ul>
						<div class="mtri"></div>
					</div>
				</div>
				
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Link|htmlspecialchars}</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" data-if-empty-val="{$SetSeedLangs.None|htmlspecialchars}" data-test-value="data-event-link" data-if-disabled="-"
					data-update-url="calendarActions.php?calendarAction=editEvent&amp;update=link"
					data-dialogue-title="{$SetSeedLangs.Change_Event_Link_Title|htmlspecialchars}"
					data-dialogue-info="{$SetSeedLangs.Change_Event_Link_Info|htmlspecialchars}"
					data-items="#calendarEventsPaneInner .eventItem"
					data-link-builder="true"
				></a>
				
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Summary|htmlspecialchars}</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" data-if-empty-val="{$SetSeedLangs.None|htmlspecialchars}" data-test-value="event-summary" data-if-disabled="-"
				data-update-url="calendarActions.php?calendarAction=editEvent&amp;update=summary"
				data-dialogue-title="{$SetSeedLangs.Change_Event_Summary_Title|htmlspecialchars}"
				data-dialogue-info="{$SetSeedLangs.Change_Event_Summary_Info|htmlspecialchars}"
				data-items="#calendarEventsPaneInner .eventItem"
				></a>
				
				
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Location|htmlspecialchars}</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" data-if-empty-val="{$SetSeedLangs.None|htmlspecialchars}" data-test-value="event-location" data-if-disabled="-"
					data-update-url="calendarActions.php?calendarAction=editEvent&amp;update=location"
					data-dialogue-title="{$SetSeedLangs.Change_Event_Location_Title|htmlspecialchars}"
					data-dialogue-info="{$SetSeedLangs.Change_Event_Location_Info|htmlspecialchars}"
					data-items="#calendarEventsPaneInner .eventItem"
				></a>
				
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Time|htmlspecialchars}</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" data-if-empty-val="{$SetSeedLangs.None|htmlspecialchars}" data-test-value="event-time" data-if-disabled="-"
				data-update-url="calendarActions.php?calendarAction=editEvent&amp;update=time"
				data-dialogue-title="{$SetSeedLangs.Change_Event_Time_Title|htmlspecialchars}"
				data-dialogue-info="{$SetSeedLangs.Change_Event_Time_Info|htmlspecialchars}"
				data-items="#calendarEventsPaneInner .eventItem"
				></a>
				
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Duration|htmlspecialchars}</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" data-if-empty-val="{$SetSeedLangs.None|htmlspecialchars}" data-test-value="event-duration" data-if-disabled="-"
				data-update-url="calendarActions.php?calendarAction=editEvent&amp;update=duration"
				data-dialogue-title="{$SetSeedLangs.Change_Event_Duration_Title|htmlspecialchars}"
				data-dialogue-info="{$SetSeedLangs.Change_Event_Duration_Info|htmlspecialchars}"
				data-items="#calendarEventsPaneInner .eventItem"
				></a>
				
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Upload_Image|htmlspecialchars}</h2>
				</div>
				<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateImage" data-if-empty-val="{$SetSeedLangs.None|htmlspecialchars}" data-test-value="event-image" data-if-disabled="-"
				data-update-url="calendarActions.php?calendarAction=editEvent&amp;update=image"
				data-items="#calendarEventsPaneInner .eventItem"
				></a>
				
				<div id="eventsCustomFields">
				</div>
				<div class="paneToolsPrimary noIcon secondaryAction" id="addEventCustomField">
					{$SetSeedLangs.Add_Custom_Field|htmlspecialchars}
				</div>
				
			</div>
		</div>
	</div>


</div> <!-- end #rightPaneCalendarEvents -->


<div id="rightPaneEventsGroups" class="rightPane assetPane">

	<div id="eventsGroupsPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="eventsGroupsContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllEventsGroups"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllEventsGroups"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddEventsGroup" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Events_Group|htmlspecialchars}</div>

			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>

				<div class="topBarButtonBack" id="backToEventsFromCategories">

				</div>
				<h1>{$SetSeedLangs.Categories|htmlspecialchars}</h1>
			</div>
			<div id="eventsGroupsPaneInner" class="pagesScroll">
				<div class="responsiveListAddForm addEventGroup hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Event_Group_Name|htmlspecialchars}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="fakePagesScroll"></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteEventsGroups">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					{$SetSeedLangs.Rename_Events_Group|htmlspecialchars}
				</div>
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneEventsGroups -->


<div id="rightPaneSnippets" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span>{$SetSeedLangs.Insert|htmlspecialchars}</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="normalSnippetText"><span class="storagePart">{$SetSeedLangs.Storage|htmlspecialchars}:</span> <strong>{$SetSeedLangs.Snippets}</strong></span><span class="pinnedSnippetText"><strong id="pinnedSnippetCatTitle"></strong></span></h1>

	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab">{$SetSeedLangs.Text|htmlspecialchars}</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span>{$SetSeedLangs.Snippets}</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab">{$SetSeedLangs.Extra|htmlspecialchars}</div>
		<div class="dragInsertTabLayout dragInsertTab">{$SetSeedLangs.Insert_Structure|htmlspecialchars}</div>
	</div>
	<div id="snippetsPane">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="snippetsContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllSnippets"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllSnippets"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="subHeaderLeftMenuItem right">
					<div class="target">
						<svg class="searchSVG" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
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
								<div class="imageContextEditInputWrap"><input type="text" class="okToSendWhenFilled focus searchList" value="" /></div>
							</div>
							<div class="sendMe"></div>

							<span style="display:none" class="clearSearch"></span>

							{if $filter}<input type="hidden" name="filter" value="{$filter}" id="filter"/>{/if}
							<div class="clear"><!-- --></div>
						</form>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="subHeaderLeftMenuItem right" {if !$snippetCategories}style="display:none;"{/if} id="filterBySnippetCat">
					<div class="target notTooLong">
						{$SetSeedLangs.Filter_By_Snippet_Category|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a href="" class="filterLink bpe_current" id="showAllSnippets" category-id="" data-lang="{$SetSeedLangs.Filter_By_Snippet_Category|htmlspecialchars}"><span>{$SetSeedLangs.All}</span></a></li>
						<div id="snippetFilterCategories" style="display:inline;">
						{foreach from=$snippetCategories item=snippetCat name=prodCatLoop}
						<li><a href="#" class="filterBy filterLink" category-id="{$snippetCat.id}" data-lang="{$snippetCat.name|htmlspecialchars}"><span>{$snippetCat.name|htmlspecialchars}</span></a></li>
						{/foreach}
						</div>
					</ul>
					<div class="mtri"></div>
				</div>

				<div id="iconbarAddSnippet" class="subHeaderButton primaryItem"><span class="normalSnippetText">{$SetSeedLangs.New_Snippet|htmlspecialchars}</span><span class="pinnedSnippetText">{$SetSeedLangs.Add_New|htmlspecialchars}</span></div>

			</div>
			<div id="snippetsPaneInner" class="pagesScroll">

				<div class="addSnippetForm responsiveListAddForm hideOnReset" style="display:none">

					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Snippet_Name|htmlspecialchars}</div>
						<div class="imageContextEditInputWrap"><input type="text" id="snippetTitle" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsDuplicate" id="iconbarDuplicateSnippets">
						{$SetSeedLangs.Duplicate|htmlspecialchars}
					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteSnippets">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary">
					<span class="normalSnippetText">{$SetSeedLangs.Edit_Snippet_Content|htmlspecialchars}</span>
					<span class="pinnedSnippetText">{$SetSeedLangs.Edit_Content_Generic|htmlspecialchars}</span>
				</div>

				<div id="snippetCategoryPaneTools">
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Categories|htmlspecialchars}</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-snippet-categories" data-test-type="csv">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<div id="snippetCategoriesList" {if !$snippetCategories}style="display:none"{/if}>
							{foreach from=$snippetCategories item=snipCat name=snipCatLoop}
							<li><a href="#" snippet-cat-id="{$snipCat.id}" data-lang="{$snipCat.name|htmlspecialchars}" data-item-value="{$snipCat.id}" class="bpe_selection_tool greyedOut" data-pinned="{$snipCat.pinned}"><span class="overflowEllipsis">{$snipCat.name|htmlspecialchars}</span></a></li>
							{/foreach}
						</div>
						<li class='iconbarRule' {if !$snippetCategories}style="display:none"{/if}></li>
						<li><a id='manageSnippetCategories'>{$SetSeedLangs.Manage_Categories}&hellip;</a></li>
						<a href="" data-lang="{$SetSeedLangs.None|htmlspecialchars}" data-item-value="" class="empty" style="display:none"></a>
					</ul>
					<div class="mtri"></div>
				</div>
				</div>
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneSnippets -->
<div id="rightPaneSnippetCategories" class="rightPane assetPane">

	<div id="snippetCategoriesPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="snippetCategoriesContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllSnippetCategories"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllSnippetCategories"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddSnippetCategory" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Snippet_Category|htmlspecialchars}</div>

			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>

				<div class="topBarButtonBack" id="backToSnippetsFromCategories">

				</div>
				<h1>{$SetSeedLangs.Categories|htmlspecialchars}</h1>
			</div>
			<div id="snippetCategoriesPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteSnippetCategories">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					{$SetSeedLangs.Rename_Snippet_Category|htmlspecialchars}
				</div>


				<a id="pinSnippetCat" class="paneToolToggleItem" data-test-value="data-pinned" data-test-value-checked="1">{$SetSeedLangs.Welcome_Screen_Shortcut|htmlspecialchars}</a>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneSnippetCategories -->



<div id="rightPaneFiles" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span>{$SetSeedLangs.Insert|htmlspecialchars}</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart">{$SetSeedLangs.Storage|htmlspecialchars}:</span> <strong>{$SetSeedLangs.Files}</strong></h1>


	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab">{$SetSeedLangs.Files|htmlspecialchars}</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span>{$SetSeedLangs.Galleries}</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab">{$SetSeedLangs.Extra|htmlspecialchars}</div>
		<div class="dragInsertTabLayout dragInsertTab">{$SetSeedLangs.Insert_Structure|htmlspecialchars}</div>
	</div>
	<div id="filesPane">
		<div class="paneContents">
			<div id="filesPaneInner">

			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteFiles">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneFiles -->



<div id="rightPaneNewsletter" class="rightPane assetPane {if $allprivs|@count>3}{if $allprivs.6==0||$master}noEditPrivs{/if}{/if}">
	<div id="newsletterPane">

		<div class="assetPaneHeader">
			<div class="closeDragInsert"></div>
			<div class="backToDragInsertIndex"><span>{$SetSeedLangs.Insert|htmlspecialchars}</span></div>
			<div class="returnToLP"></div>
			<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
			<h1><span class="storagePart">{$SetSeedLangs.Storage|htmlspecialchars}:</span> <strong>{$SetSeedLangs.Mailing_Lists}</strong></h1>

		</div>
		<div class="dragInsertTabs clearfix">
			<div class="dragInsertTabText dragInsertTab">{$SetSeedLangs.Text|htmlspecialchars}</div>
			<div class="dragInsertTabStorage dragInsertTab current">
				<span class="level2Switcher"><span class="overflowEllipsis"><span>{$SetSeedLangs.Mailing_Lists}</span></span></span>
			</div>
			<div class="dragInsertTabWidgets dragInsertTab">{$SetSeedLangs.Extra|htmlspecialchars}</div>
			<div class="dragInsertTabLayout dragInsertTab">{$SetSeedLangs.Insert_Structure|htmlspecialchars}</div>
		</div>
		<div class="paneContents">
			<div class="cleverFilterBar">
				<div class="subHeaderButton right" id="showCampaigns">
					{$SetSeedLangs.Campaigns|htmlspecialchars}
				</div>
				<div class="subHeaderLeftMenuItem">
					<div class="target" id="newsletterContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllNewsletter"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllNewsletter"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="subHeaderButton primaryItem" id="iconbarAddMailingList">
				{$SetSeedLangs.New_Mailing_List|htmlspecialchars}
				</div>
			</div>
			<div id="newsletterPaneInner" class="pagesScroll">
				<form id="addMailingList" class="responsiveListAddForm hideOnReset" action="" method="post" style="display:none">
					<div class="imageContextEditFieldset">
							<div class="imageContextEditLabel">{$SetSeedLangs.Mailing_List_Title}</div>
							<div class="imageContextEditInputWrap"><input type="text" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
						</div>
				</form>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					{if $allprivs|@count<=3}
						{assign var=sendOk value=true}
					{else}
						{if $allprivs.7==1 || $master}
						{assign var=sendOk value=true}
						{/if}
					{/if}
					{if $sendOk}

					<div class="paneToolsBottomHalf paneToolsSend" id="sendListPopup">
						{$SetSeedLangs.Mailing_List_Send_Single|htmlspecialchars}
					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteNewsletter">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
					{else}
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteNewsletter">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
					{/if}

				</div>
				<div class="paneToolsPrimary">
					{$SetSeedLangs.Manage_Subscribers|htmlspecialchars}
				</div>

				<div class="stylesHeading">
					<h2>{$SetSeedLangs.AutoResponder|htmlspecialchars}</h2>
				</div>
				<a id="iconbarMailingListAutoresponder" title="" class="paneToolTextItem paneToolTextItemUpdate" data-if-empty-val="{$SetSeedLangs.None|htmlspecialchars}" data-test-value="data-autoresponder-title"></a>
				{if !$DISABLE_HELP}
				<div class="paneToolsHelp" data-play-video="/admin/help-videos-en/mailing-lists.mp4">{$SetSeedLangs.QuickTour_Newsletter}</div>
				{/if}


			</div>
		</div>
	</div>

</div> <!-- end #rightPaneNewsletter -->

<div id="campaigns">
		<div id="closeCampaigns"></div>
		<h1>{$SetSeedLangs.Campaigns}</h2>
		<div id="campaignsInner"></div>
</div>

<div id="rightPaneNewsletterSubscribers" class="rightPane">
	<div id="newsletterSubscribersPane">

		<div class="paneContents withTitleBar">
			<div class="topBar">
				<div class="showLeftPane"></div>
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToMailingLists">

				</div>

				<span class="topBarTitle" id="editNewsletterSubscribersTitle"></span>
			</div>
			<div class="cleverFilterBar clearfix">

				<div id="iconbarAddSubscriber" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Subscriber|htmlspecialchars}</div>
				<div class="subHeaderButton" id="iconbarImportSubscribers">
					{$SetSeedLangs.Import|htmlspecialchars}
				</div>
				<div class="subHeaderButton" id="iconbarExportSubscribers">
					{$SetSeedLangs.Export|htmlspecialchars}
				</div>
				<div class="subHeaderLeftMenuItem">
					<div class="target" id="newsletterSubscribersContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllNewsletterSubscribers"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllNewsletterSubscribers"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>

				<div class="subHeaderLeftMenuItem right">
					<div class="target">
						<svg class="searchSVG" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
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
								<div class="imageContextEditInputWrap"><input type="text" class="okToSendWhenFilled focus searchList" value="" /></div>
							</div>
							<div class="sendMe"></div>

							<span style="display:none" class="clearSearch"></span>

							{if $filter}<input type="hidden" name="filter" value="{$filter}" id="filter"/>{/if}
							<div class="clear"><!-- --></div>
						</form>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="subHeaderLeftMenuItem right">
					<div class="target notTooLong">
						{$SetSeedLangs.Filter_By_Subscriber_Category|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul>
						<div {if !$subscriberCategories}style="display:none"{/if} id="filterBySubscriberCat">
						<li class="subHeaderMenuGroup">{$SetSeedLangs.Categories|htmlspecialchars}</li>
						<li><a href="" class="filterLink bpe_current" id="showAllSubscribers" category-id="" data-lang="{$SetSeedLangs.Filter_By_Subscriber_Category|htmlspecialchars}"><span>{$SetSeedLangs.All}</span></a></li>
						<div id="subscriberFilterCategories" style="display:inline;">
						{foreach from=$subscriberCategories item=subscriberCat name=subCatLoop}
						<li><a href="#" class="filterBy filterLink" category-id="{$subscriberCat.id}" data-lang="{$subscriberCat.name|htmlspecialchars}"><span>{$subscriberCat.name|htmlspecialchars}</span></a></li>
						{/foreach}
						</div>
						<div class="bpe_rule"></div>
						<li><a href="" id="subscriberFilterCategoriesMatchAll">{$SetSeedLangs.Match_All_Selected}</a></li>
						<li class="subHeaderMenuGroup">{$SetSeedLangs.Status|htmlspecialchars}</li>
						</div>
						<li><a href="" class="filterLink bpe_current" id="statusShowAnySubscribers" data-lang="{$SetSeedLangs.Filter_By_Subscriber_Category|htmlspecialchars}"><span>{$SetSeedLangs.Any}</span></a></li>
						<li><a href="" class="filterLink" id="statusShowActiveSubscribers" data-lang="{$SetSeedLangs.Active|htmlspecialchars}"><span>{$SetSeedLangs.Active}</span></a></li>
						<li><a href="" class="filterLink" id="statusShowInactiveSubscribers" data-lang="{$SetSeedLangs.Inactive|htmlspecialchars}"><span>{$SetSeedLangs.Inactive}</span></a></li>


					</ul>
					<div class="mtri"></div>
				</div>
			</div>
			<div id="newsletterSubscribersPaneInner" class="pagesScroll">

				<div id="addSubscriber" class="responsiveListAddForm hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Subscriber_Name|htmlspecialchars}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus newSubscriberName clearAfterSend" value=""/></div>
					</div>
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Subscriber_Email|htmlspecialchars}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="newSubscriberEmail clearAfterSend" value=""/></div>
					</div>

					<input type="hidden" name="" value="{$groupFilter}" id="currentMailingList"/>
				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteNewsletterSubscribers">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary">
					{$SetSeedLangs.Edit_Subscriber|htmlspecialchars}
				</div>
				<div id="subscriberCategoryPaneTools">
					<div class="stylesHeading">
						<h2>{$SetSeedLangs.Categories|htmlspecialchars}</h2>
					</div>
					<div class="subHeaderLeftMenuItem" data-test-value="data-subscriber-categories" data-test-type="csv">
						<div class="target">

						</div>
						<div class="triShadow"></div>
						<ul>
							<div id="subscriberCategoriesList" style="display:none">
							</div>
							<li class='iconbarRule' {if !$subscriberCategories}style="display:none"{/if}></li>
							<li><a id='manageSubscriberCategories'>{$SetSeedLangs.Manage_Categories}&hellip;</a></li>
							<a href="" data-lang="{$SetSeedLangs.None|htmlspecialchars}" data-item-value="" class="empty" style="display:none"></a>
						</ul>
						<div class="mtri"></div>
					</div>
				</div>
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Status|htmlspecialchars}</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-subscriber-status">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a id="subActive" data-item-value="active" data-lang="{$SetSeedLangs.Active|htmlspecialchars}"><span class="key hideIfTouch">{$SetSeedLangs.L|htmlspecialchars}</span>{$SetSeedLangs.Active|htmlspecialchars}</a></li>
				<li><a id="subInactive" data-item-value="inactive" data-lang="{$SetSeedLangs.Inactive|htmlspecialchars}"><span class="key hideIfTouch">{$SetSeedLangs.O|htmlspecialchars}</span>{$SetSeedLangs.Inactive|htmlspecialchars}</a>	</li>
					</ul>
					<div class="mtri"></div>
				</div>

				<div id="subscriberCustomFields">
				</div>
				<div class="paneToolsPrimary noIcon secondaryAction" id="addNewsletterCustomField">
					{$SetSeedLangs.Add_Custom_Field|htmlspecialchars}
				</div>
			</div>
		</div>


	</div>

</div> <!-- end #rightPaneNewsletterSubscribers -->

<div id="rightPaneSubscriberCategories" class="rightPane assetPane">

	<div id="subscriberCategoriesPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="subscriberCategoriesContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllSubscriberCategories"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllSubscriberCategories"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddSubscriberCategory" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Subscriber_Category|htmlspecialchars}</div>

			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>

				<div class="topBarButtonBack" id="backToSubscribersFromCategories">

				</div>
				<h1>{$SetSeedLangs.Categories|htmlspecialchars}</h1>
			</div>
			<div id="subscriberCategoriesPaneInner" class="pagesScroll"><div class="clearfix insertTarget"></div></div>
			<div class="paneTools">
				<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteSubscriberCategories">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					{$SetSeedLangs.Rename_Subscriber_Category|htmlspecialchars}
				</div>
				
				<a class="paneToolToggleItem autoPaneToolToggleItem" data-test-value="data-show-on-signup" data-test-value-checked="1"
				data-update-url="newsletterActions.php?newsletterAction=changeCatInSignup"
				data-items="#subscriberCategoriesPaneInner .subscriberCategoryItem"
				>{$SetSeedLangs.Show_In_Signup_Form|htmlspecialchars}</a>
				
				
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneSubscriberCategories -->


<div id="rightPaneBlog" class="rightPane">
	<div id="blogPane" class="withTitleBar">

		<div class="paneContents">
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<h1>{$SetSeedLangs.Blog|htmlspecialchars}</h1>
			</div>
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">

					<div class="target" id="blogContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllBlog"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllBlog"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>

				<div class="subHeaderButton primaryItem" id="iconbarAddBlog">
					{$SetSeedLangs.New_Blog|htmlspecialchars}
				</div>


			</div>
			<div id="blogPaneInner" class="pagesScroll">

				<div id="addBlogEntry" class="responsiveListAddForm hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Blog_Title}</div>
						<div class="imageContextEditInputWrap"><input id="addBlogTitle" type="text" name="title" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>
				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteBlog">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary">
					{$SetSeedLangs.Edit_Blog|htmlspecialchars}
				</div>

				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Status|htmlspecialchars}</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-blog-status">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a id="blogLive" data-lang="{$SetSeedLangs.Live|htmlspecialchars}" data-item-value="live"><span class="key hideIfTouch">{$SetSeedLangs.L|htmlspecialchars}</span>{$SetSeedLangs.Live|htmlspecialchars}</a></li>
						<li><a id="blogOffline" data-lang="{$SetSeedLangs.Offline|htmlspecialchars}" data-item-value="offline"><span class="key hideIfTouch">{$SetSeedLangs.O|htmlspecialchars}</span>{$SetSeedLangs.Offline|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Author|htmlspecialchars}</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-blog-author">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<div id="blogAuthorsList"></div>
						<li class="iconbarRule"></li>
						<li><a id='manageAuthors'>{$SetSeedLangs.Manage_Authors|htmlspecialchars}&hellip;</a></li>
						<a href="" data-lang="{$SetSeedLangs.None|htmlspecialchars}" data-item-value="" class="empty" style="display:none"></a>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Categories|htmlspecialchars}</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-blog-categories" data-test-type="csv">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<div id="blogCategoriesList">{$SetSeedLangs.No_Categories|htmlspecialchars}</div>
						<li class="iconbarRule"></li>
						<li><a id='manageCategories'>{$SetSeedLangs.Manage_Categories}&hellip;</a></li>
						<a href="" data-lang="{$SetSeedLangs.None|htmlspecialchars}" data-item-value="" class="empty" style="display:none"></a>
					</ul>
					<div class="mtri"></div>
				</div>

				{if $includedFrontEndLangs}
				<div class="stylesHeading">
					<h2>{$SetSeedLangs.Language|htmlspecialchars}</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-lang">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul id="addLanguageBlogNew">
						<div id="languagesWrapperBlog">
							{if $languages|@count > 0}
								{section name=x loop=$languages}
								<li><a data-lang="{$languages[x].name}" data-item-value="{$languages[x].abr}" fakehref="{$languages[x].abr}" class="changeLanguage dontIncludeInPreview">{$languages[x].name}</a></li>
								{/section}
							{/if}
						</div>

						<li class="iconbarRule"></li>
						{if "ab"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Abkhazian" fakehref="Abkhazian|ab" data-item-value="ab">Abkhazian</a></li>
						{/if}
						{if "aa"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Afar" fakehref="Afar|aa" data-item-value="aa">Afar</a></li>
						{/if}
						{if "af"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Afrikaans" fakehref="Afrikaans|af" data-item-value="af">Afrikaans</a></li>
						{/if}
						{if "ak"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Akan" fakehref="Akan|ak" data-item-value="ak">Akan</a></li>
						{/if}
						{if "sq"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Albanian" fakehref="Albanian|sq" data-item-value="sq">Albanian</a></li>
						{/if}
						{if "am"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Amharic" fakehref="Amharic|am" data-item-value="am">Amharic</a></li>
						{/if}
						{if "ar"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Arabic" fakehref="Arabic|ar" data-item-value="ar">Arabic</a></li>
						{/if}
						{if "an"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Aragonese" fakehref="Aragonese|an" data-item-value="an">Aragonese</a></li>
						{/if}
						{if "hy"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Armenian" fakehref="Armenian|hy" data-item-value="hy">Armenian</a></li>
						{/if}
						{if "as"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Assamese" fakehref="Assamese|as" data-item-value="as">Assamese</a></li>
						{/if}
						{if "av"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Avaric" fakehref="Avaric|av" data-item-value="av">Avaric</a></li>
						{/if}
						{if "ae"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Avestan" fakehref="Avestan|ae" data-item-value="ae">Avestan</a></li>
						{/if}
						{if "ay"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Aymara" fakehref="Aymara|ay" data-item-value="ay">Aymara</a></li>
						{/if}
						{if "az"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Azerbaijani" fakehref="Azerbaijani|az" data-item-value="az">Azerbaijani</a></li>
						{/if}
						{if "bm"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Bambara" fakehref="Bambara|bm" data-item-value="bm">Bambara</a></li>
						{/if}
						{if "ba"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Bashkir" fakehref="Bashkir|ba" data-item-value="ba">Bashkir</a></li>
						{/if}
						{if "eu"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Basque" fakehref="Basque|eu" data-item-value="eu">Basque</a></li>
						{/if}
						{if "be"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Belarusian" fakehref="Belarusian|be" data-item-value="be">Belarusian</a></li>
						{/if}
						{if ""|in_array:$includedFrontEndLangs}
						<li><a data-lang="Bengali" fakehref="Bengali|bn" data-item-value="bn">Bengali</a></li>
						{/if}
						{if "bh"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Bihari" fakehref="Bihari|bh" data-item-value="bh">Bihari</a></li>
						{/if}
						{if "bi"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Bislama" fakehref="Bislama|bi" data-item-value="bi">Bislama</a></li>
						{/if}
						{if "nb"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Bokmål, Norwegian; Norwegian Bokmål" fakehref="Bokmål, Norwegian; Norwegian Bokmål|nb" data-item-value="nb">Bokmål, Norwegian; Norwegian Bokmål</a></li>
						{/if}
						{if "bs"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Bosnian" fakehref="Bosnian|bs" data-item-value="bs">Bosnian</a></li>
						{/if}
						{if "br"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Breton" fakehref="Breton|br" data-item-value="br">Breton</a></li>
						{/if}
						{if "bg"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Bulgarian" fakehref="Bulgarian|bg" data-item-value="bg">Bulgarian</a></li>
						{/if}
						{if "my"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Burmese" fakehref="Burmese|my" data-item-value="my">Burmese</a></li>
						{/if}
						{if "ca"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Catalan; Valencian" fakehref="Catalan; Valencian|ca" data-item-value="ca">Catalan; Valencian</a></li>
						{/if}
						{if "km"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Central Khmer" fakehref="Central Khmer|km" data-item-value="km">Central Khmer</a></li>
						{/if}
						{if "ch"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Chamorro" fakehref="Chamorro|ch" data-item-value="ch">Chamorro</a></li>
						{/if}
						{if "ce"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Chechen" fakehref="Chechen|ce" data-item-value="ce">Chechen</a></li>
						{/if}
						{if "ny"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Chichewa; Chewa; Nyanja" fakehref="Chichewa; Chewa; Nyanja|ny" data-item-value="ny">Chichewa; Chewa; Nyanja</a></li>
						{/if}
						{if "zh"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Chinese" fakehref="Chinese|zh" data-item-value="zh">Chinese</a></li>
						{/if}
						{if "cu"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic" fakehref="Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic|cu" data-item-value="cu">Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic</a></li>
						{/if}
						{if "cv"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Chuvash" fakehref="Chuvash|cv" data-item-value="cv">Chuvash</a></li>
						{/if}
						{if "kw"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Cornish" fakehref="Cornish|kw" data-item-value="kw">Cornish</a></li>
						{/if}
						{if "co"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Corsican" fakehref="Corsican|co" data-item-value="co">Corsican</a></li>
						{/if}
						{if "cr"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Cree" fakehref="Cree|cr" data-item-value="cr">Cree</a></li>
						{/if}
						{if "hr"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Croatian" fakehref="Croatian|hr" data-item-value="hr">Croatian</a></li>
						{/if}
						{if "cs"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Czech" fakehref="Czech|cs" data-item-value="cs">Czech</a></li>
						{/if}
						{if "da"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Danish" fakehref="Danish|da" data-item-value="da">Danish</a></li>
						{/if}
						{if "dv"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Divehi; Dhivehi; Maldivian" fakehref="Divehi; Dhivehi; Maldivian|dv" data-item-value="dv">Divehi; Dhivehi; Maldivian</a></li>
						{/if}
						{if "nl"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Dutch; Flemish" fakehref="Dutch; Flemish|nl" data-item-value="nl">Dutch; Flemish</a></li>
						{/if}
						{if "dz"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Dzongkha" fakehref="Dzongkha|dz" data-item-value="dz">Dzongkha</a></li>
						{/if}
						{if "en"|in_array:$includedFrontEndLangs}
						<li><a data-lang="English" fakehref="English|en" data-item-value="en">English</a></li>
						{/if}
						{if "eo"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Esperanto" fakehref="Esperanto|eo" data-item-value="eo">Esperanto</a></li>
						{/if}
						{if "et"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Estonian" fakehref="Estonian|et" data-item-value="et">Estonian</a></li>
						{/if}
						{if "ee"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Ewe" fakehref="Ewe|ee" data-item-value="ee">Ewe</a></li>
						{/if}
						{if "fo"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Faroese" fakehref="Faroese|fo" data-item-value="fo">Faroese</a></li>
						{/if}
						{if "fj"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Fijian" fakehref="Fijian|fj" data-item-value="fj">Fijian</a></li>
						{/if}
						{if "fi"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Finnish" fakehref="Finnish|fi" data-item-value="fi">Finnish</a></li>
						{/if}
						{if "fr"|in_array:$includedFrontEndLangs}
						<li><a data-lang="French" fakehref="French|fr" data-item-value="fr">French</a></li>
						{/if}
						{if "ff"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Fulah" fakehref="Fulah|ff" data-item-value="ff">Fulah</a></li>
						{/if}
						{if "gd"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Gaelic; Scottish Gaelic" fakehref="Gaelic; Scottish Gaelic|gd" data-item-value="gd">Gaelic; Scottish Gaelic</a></li>
						{/if}
						{if "gl"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Galician" fakehref="Galician|gl" data-item-value="gl">Galician</a></li>
						{/if}
						{if "lg"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Ganda" fakehref="Ganda|lg" data-item-value="lg">Ganda</a></li>
						{/if}
						{if "ka"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Georgian" fakehref="Georgian|ka" data-item-value="ka">Georgian</a></li>
						{/if}
						{if "de"|in_array:$includedFrontEndLangs}
						<li><a data-lang="German" fakehref="German|de" data-item-value="de">German</a></li>
						{/if}
						{if "el"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Greek, Modern (1453-)" fakehref="Greek, Modern (1453-)|el" data-item-value="el">Greek, Modern (1453-)</a></li>
						{/if}
						{if "gn"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Guarani" fakehref="Guarani|gn" data-item-value="gn">Guarani</a></li>
						{/if}
						{if "gu"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Gujarati" fakehref="Gujarati|gu" data-item-value="gu">Gujarati</a></li>
						{/if}
						{if "ht"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Haitian; Haitian Creole" fakehref="Haitian; Haitian Creole|ht" data-item-value="ht">Haitian; Haitian Creole</a></li>
						{/if}
						{if "ha"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Hausa" fakehref="Hausa|ha" data-item-value="ha">Hausa</a></li>
						{/if}
						{if "he"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Hebrew" fakehref="Hebrew|he" data-item-value="he">Hebrew</a></li>
						{/if}
						{if "hz"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Herero" fakehref="Herero|hz" data-item-value="hz">Herero</a></li>
						{/if}
						{if "hi"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Hindi" fakehref="Hindi|hi" data-item-value="hi">Hindi</a></li>
						{/if}
						{if "ho"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Hiri Motu" fakehref="Hiri Motu|ho" data-item-value="ho">Hiri Motu</a></li>
						{/if}
						{if "hu"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Hungarian" fakehref="Hungarian|hu" data-item-value="hu">Hungarian</a></li>
						{/if}
						{if "is"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Icelandic" fakehref="Icelandic|is" data-item-value="is">Icelandic</a></li>
						{/if}
						{if "io"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Ido" fakehref="Ido|io" data-item-value="io">Ido</a></li>
						{/if}
						{if "ig"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Igbo" fakehref="Igbo|ig" data-item-value="ig">Igbo</a></li>
						{/if}
						{if "id"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Indonesian" fakehref="Indonesian|id" data-item-value="id">Indonesian</a></li>
						{/if}
						{if "ia"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Interlingua (International Auxiliary Language Association)" fakehref="Interlingua (International Auxiliary Language Association)|ia" data-item-value="ia">Interlingua (International Auxiliary Language Association)</a></li>
						{/if}
						{if "ie"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Interlingue" fakehref="Interlingue|ie" data-item-value="ie">Interlingue</a></li>
						{/if}
						{if "iu"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Inuktitut" fakehref="Inuktitut|iu" data-item-value="iu">Inuktitut</a></li>
						{/if}
						{if "ik"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Inupiaq" fakehref="Inupiaq|ik" data-item-value="ik">Inupiaq</a></li>
						{/if}
						{if "ga"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Irish" fakehref="Irish|ga" data-item-value="ga">Irish</a></li>
						{/if}
						{if "it"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Italian" fakehref="Italian|it" data-item-value="it">Italian</a></li>
						{/if}
						{if "ja"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Japanese" fakehref="Japanese|ja" data-item-value="ja">Japanese</a></li>
						{/if}
						{if "jv"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Javanese" fakehref="Javanese|jv" data-item-value="jv">Javanese</a></li>
						{/if}
						{if "kl"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Kalaallisut; Greenlandic" fakehref="Kalaallisut; Greenlandic|kl" data-item-value="kl">Kalaallisut; Greenlandic</a></li>
						{/if}
						{if "kn"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Kannada" fakehref="Kannada|kn" data-item-value="kn">Kannada</a></li>
						{/if}
						{if "kr"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Kanuri" fakehref="Kanuri|kr" data-item-value="kr">Kanuri</a></li>
						{/if}
						{if "ks"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Kashmiri" fakehref="Kashmiri|ks" data-item-value="ks">Kashmiri</a></li>
						{/if}
						{if "kk"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Kazakh" fakehref="Kazakh|kk" data-item-value="kk">Kazakh</a></li>
						{/if}
						{if "ki"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Kikuyu; Gikuyu" fakehref="Kikuyu; Gikuyu|ki" data-item-value="ki">Kikuyu; Gikuyu</a></li>
						{/if}
						{if "rw"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Kinyarwanda" fakehref="Kinyarwanda|rw" data-item-value="rw">Kinyarwanda</a></li>
						{/if}
						{if "ky"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Kirghiz; Kyrgyz" fakehref="Kirghiz; Kyrgyz|ky" data-item-value="ky">Kirghiz; Kyrgyz</a></li>
						{/if}
						{if "kv"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Komi" fakehref="Komi|kv" data-item-value="kv">Komi</a></li>
						{/if}
						{if "kg"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Kongo" fakehref="Kongo|kg" data-item-value="kg">Kongo</a></li>
						{/if}
						{if "ko"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Korean" fakehref="Korean|ko" data-item-value="ko">Korean</a></li>
						{/if}
						{if "kj"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Kuanyama; Kwanyama" fakehref="Kuanyama; Kwanyama|kj" data-item-value="kj">Kuanyama; Kwanyama</a></li>
						{/if}
						{if "ku"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Kurdish" fakehref="Kurdish|ku" data-item-value="ku">Kurdish</a></li>
						{/if}
						{if "lo"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Lao" fakehref="Lao|lo" data-item-value="lo">Lao</a></li>
						{/if}
						{if "la"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Latin" fakehref="Latin|la" data-item-value="la">Latin</a></li>
						{/if}
						{if "lv"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Latvian" fakehref="Latvian|lv" data-item-value="lv">Latvian</a></li>
						{/if}
						{if "li"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Limburgan; Limburger; Limburgish" fakehref="Limburgan; Limburger; Limburgish|li" data-item-value="li">Limburgan; Limburger; Limburgish</a></li>
						{/if}
						{if "ln"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Lingala" fakehref="Lingala|ln" data-item-value="ln">Lingala</a></li>
						{/if}
						{if "lt"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Lithuanian" fakehref="Lithuanian|lt" data-item-value="lt">Lithuanian</a></li>
						{/if}
						{if "lu"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Luba-Katanga" fakehref="Luba-Katanga|lu" data-item-value="lu">Luba-Katanga</a></li>
						{/if}
						{if "lb"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Luxembourgish; Letzeburgesch" fakehref="Luxembourgish; Letzeburgesch|lb" data-item-value="lb">Luxembourgish; Letzeburgesch</a></li>
						{/if}
						{if "mk"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Macedonian" fakehref="Macedonian|mk" data-item-value="mk">Macedonian</a></li>
						{/if}
						{if "mg"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Malagasy" fakehref="Malagasy|mg" data-item-value="mg">Malagasy</a></li>
						{/if}
						{if "ml"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Malayalam" fakehref="Malayalam|ml" data-item-value="ml">Malayalam</a></li>
						{/if}
						{if "ms"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Malay" fakehref="Malay|ms" data-item-value="ms">Malay</a></li>
						{/if}
						{if "mt"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Maltese" fakehref="Maltese|mt" data-item-value="mt">Maltese</a></li>
						{/if}
						{if "gv"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Manx" fakehref="Manx|gv" data-item-value="gv">Manx</a></li>
						{/if}
						{if "mi"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Maori" fakehref="Maori|mi" data-item-value="mi">Maori</a></li>
						{/if}
						{if "mr"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Marathi" fakehref="Marathi|mr" data-item-value="mr">Marathi</a></li>
						{/if}
						{if "mh"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Marshallese" fakehref="Marshallese|mh" data-item-value="mh">Marshallese</a></li>
						{/if}
						{if "mo"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Moldavian" fakehref="Moldavian|mo" data-item-value="mo">Moldavian</a></li>
						{/if}
						{if "mn"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Mongolian" fakehref="Mongolian|mn" data-item-value="mn">Mongolian</a></li>
						{/if}
						{if "na"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Nauru" fakehref="Nauru|na" data-item-value="na">Nauru</a></li>
						{/if}
						{if "nv"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Navajo; Navaho" fakehref="Navajo; Navaho|nv" data-item-value="nv">Navajo; Navaho</a></li>
						{/if}
						{if "nd"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Ndebele, North; North Ndebele" fakehref="Ndebele, North; North Ndebele|nd" data-item-value="nd">Ndebele, North; North Ndebele</a></li>
						{/if}
						{if "nr"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Ndebele, South; South Ndebele" fakehref="Ndebele, South; South Ndebele|nr" data-item-value="nr">Ndebele, South; South Ndebele</a></li>
						{/if}
						{if "ng"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Ndonga" fakehref="Ndonga|ng" data-item-value="ng">Ndonga</a></li>
						{/if}
						{if "ne"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Nepali" fakehref="Nepali|ne" data-item-value="ne">Nepali</a></li>
						{/if}
						{if "se"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Northern Sami" fakehref="Northern Sami|se" data-item-value="se">Northern Sami</a></li>
						{/if}
						{if "nn"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Norwegian Nynorsk; Nynorsk, Norwegian" fakehref="Norwegian Nynorsk; Nynorsk, Norwegian|nn" data-item-value="nn">Norwegian Nynorsk; Nynorsk, Norwegian</a></li>
						{/if}
						{if "no"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Norwegian" fakehref="Norwegian|no" data-item-value="no">Norwegian</a></li>
						{/if}
						{if "oc"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Occitan (post 1500); Provençal" fakehref="Occitan (post 1500); Provençal|oc" data-item-value="oc">Occitan (post 1500); Provençal</a></li>
						{/if}
						{if "oj"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Ojibwa" fakehref="Ojibwa|oj" data-item-value="oj">Ojibwa</a></li>
						{/if}
						{if "or"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Oriya" fakehref="Oriya|or" data-item-value="or">Oriya</a></li>
						{/if}
						{if "om"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Oromo" fakehref="Oromo|om" data-item-value="om">Oromo</a></li>
						{/if}
						{if "os"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Ossetian; Ossetic" fakehref="Ossetian; Ossetic|os" data-item-value="os">Ossetian; Ossetic</a></li>
						{/if}
						{if "pi"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Pali" fakehref="Pali|pi" data-item-value="pi">Pali</a></li>
						{/if}
						{if "pa"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Panjabi; Punjabi" fakehref="Panjabi; Punjabi|pa" data-item-value="pa">Panjabi; Punjabi</a></li>
						{/if}
						{if "fa"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Persian" fakehref="Persian|fa" data-item-value="fa">Persian</a></li>
						{/if}
						{if "pl"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Polish" fakehref="Polish|pl" data-item-value="pl">Polish</a></li>
						{/if}
						{if "pt"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Portuguese" fakehref="Portuguese|pt" data-item-value="pt">Portuguese</a></li>
						{/if}
						{if "ps"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Pushto" fakehref="Pushto|ps" data-item-value="ps">Pushto</a></li>
						{/if}
						{if "qu"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Quechua" fakehref="Quechua|qu" data-item-value="qu">Quechua</a></li>
						{/if}
						{if "ro"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Romanian" fakehref="Romanian|ro" data-item-value="ro">Romanian</a></li>
						{/if}
						{if "rm"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Romansh" fakehref="Romansh|rm" data-item-value="rm">Romansh</a></li>
						{/if}
						{if "rn"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Rundi" fakehref="Rundi|rn" data-item-value="rn">Rundi</a></li>
						{/if}
						{if "ru"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Russian" fakehref="Russian|ru" data-item-value="ru">Russian</a></li>
						{/if}
						{if "sm"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Samoan" fakehref="Samoan|sm" data-item-value="sm">Samoan</a></li>
						{/if}
						{if "sg"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Sango" fakehref="Sango|sg" data-item-value="sg">Sango</a></li>
						{/if}
						{if "sa"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Sanskrit" fakehref="Sanskrit|sa" data-item-value="sa">Sanskrit</a></li>
						{/if}
						{if "sc"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Sardinian" fakehref="Sardinian|sc" data-item-value="sc">Sardinian</a></li>
						{/if}
						{if "sr"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Serbian" fakehref="Serbian|sr" data-item-value="sr">Serbian</a></li>
						{/if}
						{if "sn"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Shona" fakehref="Shona|sn" data-item-value="sn">Shona</a></li>
						{/if}
						{if "ii"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Sichuan Yi" fakehref="Sichuan Yi|ii" data-item-value="ii">Sichuan Yi</a></li>
						{/if}
						{if "sd"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Sindhi" fakehref="Sindhi|sd" data-item-value="sd">Sindhi</a></li>
						{/if}
						{if "si"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Sinhala; Sinhalese" fakehref="Sinhala; Sinhalese|si" data-item-value="si">Sinhala; Sinhalese</a></li>
						{/if}
						{if "sk"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Slovak" fakehref="Slovak|sk" data-item-value="sk">Slovak</a></li>
						{/if}
						{if "sl"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Slovenian" fakehref="Slovenian|sl" data-item-value="sl">Slovenian</a></li>
						{/if}
						{if "so"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Somali" fakehref="Somali|so" data-item-value="so">Somali</a></li>
						{/if}
						{if "st"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Sotho, Southern" fakehref="Sotho, Southern|st" data-item-value="st">Sotho, Southern</a></li>
						{/if}
						{if "es"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Spanish; Castilian" fakehref="Spanish; Castilian|es" data-item-value="es">Spanish; Castilian</a></li>
						{/if}
						{if "su"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Sundanese" fakehref="Sundanese|su" data-item-value="su">Sundanese</a></li>
						{/if}
						{if "sw"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Swahili" fakehref="Swahili|sw" data-item-value="sw">Swahili</a></li>
						{/if}
						{if "ss"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Swati" fakehref="Swati|ss" data-item-value="ss">Swati</a></li>
						{/if}
						{if "sv"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Swedish" fakehref="Swedish|sv" data-item-value="sv">Swedish</a></li>
						{/if}
						{if "tl"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Tagalog" fakehref="Tagalog|tl" data-item-value="tl">Tagalog</a></li>
						{/if}
						{if "ty"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Tahitian" fakehref="Tahitian|ty" data-item-value="ty">Tahitian</a></li>
						{/if}
						{if "tg"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Tajik" fakehref="Tajik|tg" data-item-value="tg">Tajik</a></li>
						{/if}
						{if "ta"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Tamil" fakehref="Tamil|ta" data-item-value="ta">Tamil</a></li>
						{/if}
						{if "tt"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Tatar" fakehref="Tatar|tt" data-item-value="tt">Tatar</a></li>
						{/if}
						{if "te"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Telugu" fakehref="Telugu|te" data-item-value="te">Telugu</a></li>
						{/if}
						{if "th"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Thai" fakehref="Thai|th" data-item-value="th">Thai</a></li>
						{/if}
						{if "bo"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Tibetan" fakehref="Tibetan|bo" data-item-value="bo">Tibetan</a></li>
						{/if}
						{if "ti"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Tigrinya" fakehref="Tigrinya|ti" data-item-value="ti">Tigrinya</a></li>
						{/if}
						{if "to"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Tonga (Tonga Islands)" fakehref="Tonga (Tonga Islands)|to" data-item-value="to">Tonga (Tonga Islands)</a></li>
						{/if}
						{if "ts"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Tsonga" fakehref="Tsonga|ts" data-item-value="ts">Tsonga</a></li>
						{/if}
						{if "tn"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Tswana" fakehref="Tswana|tn" data-item-value="tn">Tswana</a></li>
						{/if}
						{if "tr"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Turkish" fakehref="Turkish|tr" data-item-value="tr">Turkish</a></li>
						{/if}
						{if "tk"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Turkmen" fakehref="Turkmen|tk" data-item-value="tk">Turkmen</a></li>
						{/if}
						{if "tw"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Twi" fakehref="Twi|tw" data-item-value="tw">Twi</a></li>
						{/if}
						{if "ug"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Uighur; Uyghur" fakehref="Uighur; Uyghur|ug" data-item-value="ug">Uighur; Uyghur</a></li>
						{/if}
						{if "uk"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Ukrainian" fakehref="Ukrainian|uk" data-item-value="uk">Ukrainian</a></li>
						{/if}
						{if "ur"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Urdu" fakehref="Urdu|ur" data-item-value="ur">Urdu</a></li>
						{/if}
						{if "uz"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Uzbek" fakehref="Uzbek|uz" data-item-value="uz">Uzbek</a></li>
						{/if}
						{if "ve"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Venda" fakehref="Venda|ve" data-item-value="ve">Venda</a></li>
						{/if}
						{if "vi"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Vietnamese" fakehref="Vietnamese|vi" data-item-value="vi">Vietnamese</a></li>
						{/if}
						{if "vo"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Volapük" fakehref="Volapük|vo" data-item-value="vo">Volapük</a></li>
						{/if}
						{if "wa"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Walloon" fakehref="Walloon|wa" data-item-value="wa">Walloon</a></li>
						{/if}
						{if "cy"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Welsh" fakehref="Welsh|cy" data-item-value="cy">Welsh</a></li>
						{/if}
						{if "fy"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Western Frisian" fakehref="Western Frisian|fy" data-item-value="fy">Western Frisian</a></li>
						{/if}
						{if "wo"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Wolof" fakehref="Wolof|wo" data-item-value="wo">Wolof</a></li>
						{/if}
						{if "xh"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Xhosa" fakehref="Xhosa|xh" data-item-value="xh">Xhosa</a></li>
						{/if}
						{if "yi"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Yiddish" fakehref="Yiddish|yi" data-item-value="yi">Yiddish</a></li>
						{/if}
						{if "yo"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Yoruba" fakehref="Yoruba|yo" data-item-value="yo">Yoruba</a></li>
						{/if}
						{if "za"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Zhuang; Chuang" fakehref="Zhuang; Chuang|za" data-item-value="za">Zhuang; Chuang</a></li>
						{/if}
						{if "zu"|in_array:$includedFrontEndLangs}
						<li><a data-lang="Zulu" fakehref="Zulu|zu" data-item-value="zu">Zulu</a></li>
						{/if}
					</ul>
					<div class="mtri"></div>
				</div>
				{/if}
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneBlog -->


<div id="rightPaneBlogAuthors" class="rightPane">
	<div id="blogAuthorsPane">

		<div class="paneContents withTitleBar">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="blogAuthorsContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllBlogAuthors"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllBlogAuthors"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddBlogAuthor" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Blog_Author|htmlspecialchars}</div>
			</div>
			<div class="topBar ">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToBlogFromAuthors"></div>

				<h1>{$SetSeedLangs.Authors}</h1>
			</div>
			<div id="blogAuthorsPaneInner" class="pagesScroll">

				<div class="responsiveListAddForm addBlogAuthor hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Blog_Author_Name}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus newBlogAuthorName" value=""/></div>
					</div>
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Blog_Author_Bio}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="newBlogAuthorBio" value=""/></div>
					</div>
				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteBlogAuthors">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					{$SetSeedLangs.Rename_Blog_Author|htmlspecialchars}
				</div>


			</div>
		</div>
	</div>

</div> <!-- end #rightPaneBlogAuthors -->

<div id="rightPaneBlogCategories" class="rightPane">
	<div id="blogCategoriesPane">

		<div class="paneContents withTitleBar">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="blogCategoriesContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllBlogCategories"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllBlogCategories"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddBlogCategory" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Blog_Category|htmlspecialchars}</div>
			</div>
			<div class="topBar ">
				<div class="showLeftPane"></div>
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToBlogFromCategories"></div>

				<h1>{$SetSeedLangs.Categories}</h1>
			</div>
			<div id="blogCategoriesPaneInner" class="pagesScroll">

				<div class="responsiveListAddForm addBlogCategory hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Category_Name}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus" value=""/></div>
					</div>
				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteBlogCategories">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					{$SetSeedLangs.Rename_Blog_Category|htmlspecialchars}
				</div>

				<a id="reverseBlogsToggle"  class="paneToolToggleItem" data-test-value="data-reverse-order" data-test-value-checked="1">{$SetSeedLangs.Reverse_Blog_Entries|htmlspecialchars}</a>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneBlogCategories -->



<div id="rightPaneBlogComments" class="rightPane ">
	<div id="blogCommentsPane">
		<div class="paneContents withTitleBar">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="blogCommentsContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllBlogComments"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllBlogComments"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>


				<div id="iconbarAddBlogComment" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Blog_Comment|htmlspecialchars}</div>
			</div>
		<div class="topBar " id="viewingBlogComments">
			<div class="returnToLP"></div>
			<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
			<div class="topBarButtonBack" id="backToBlogFromComments">
					</svg>
				</div>
			<h1>{$SetSeedLangs.Comments}</h1>
		</div>
		<div id="blogCommentsPaneInner" class="pagesScroll">

			<div class="responsiveListAddForm addBlogComment hideOnReset" style="display:none">
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel">{$SetSeedLangs.Reply_Comment}</div>
					<div class="imageContextEditInputWrap"><textarea rows="1" cols="30" class="focus replyComment clearAfterSend" ></textarea></div>
				</div>
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel">{$SetSeedLangs.Reply_Name}</div>
					<div class="imageContextEditInputWrap"><input type="text" name="" class="replyName clearAfterSend" value=""/></div>
				</div>
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel">{$SetSeedLangs.Reply_Email}</div>
					<div class="imageContextEditInputWrap"><input type="text" name="" class="replyEmail clearAfterSend" value=""/></div>
				</div>


			</div>
			<div class="clearfix insertTarget"></div>
		</div>
		<div class="paneTools">
		<div class="disabledMask"></div>
			<div class="paneToolsButtonRow">
				<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteBlogComments">
					{$SetSeedLangs.Delete|htmlspecialchars}
				</div>
			</div>
			<div class="stylesHeading">
					<h2>{$SetSeedLangs.Status|htmlspecialchars}</h2>
				</div>
				<div class="subHeaderLeftMenuItem" data-test-value="data-blog-comment-status">
					<div class="target">

					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a id="commentApprove" data-item-value="live" data-lang="{$SetSeedLangs.Approval_Live|htmlspecialchars}"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.L|htmlspecialchars}</span>{$SetSeedLangs.Approval_Live|htmlspecialchars}</a></li>
						<li><a id="commentUnapprove" data-item-value="offline" data-lang="{$SetSeedLangs.Approval_Offline|htmlspecialchars}"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.O|htmlspecialchars}</span>{$SetSeedLangs.Approval_Offline|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>

		</div>
		</div>
	</div>

</div> <!-- end #rightPaneBlogComments -->


<div id="rightPaneCheckout" class="rightPane">
	<div id="checkoutPane" class="withTitleBar">
		<div class="paneContents">
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<h1>{$SetSeedLangs.Checkout|htmlspecialchars}</h1>
			</div>
			<div class="cleverFilterBar">
				<div class="subHeaderLeftMenuItem">
					<div class="target" id="ordersContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllCheckout"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllCheckout"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div class="subHeaderLeftMenuItem">
					<div class="target">
						{$SetSeedLangs.Checkout_CSV_Download|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul>
						<li><a id="downloadCSV" href="shopActions.php?shopAction=downloadCSV&orderType=dispatched">{$SetSeedLangs.Export_Dispatched_Orders|htmlspecialchars}</a>
</li>
						<li><a id="downloadCSVOpen" href="shopActions.php?shopAction=downloadCSV&orderType=open">{$SetSeedLangs.Export_Open_Orders|htmlspecialchars}</a>
</li>
					</ul>
					<div class="mtri"></div>
				</div>


			</div>
			<div id="checkoutPaneInner" class="pagesScroll"><div class="clearfix insertTarget" id="openOrders"></div></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomHalf paneToolsDispatch" id="iconbarCheckoutDispatch">
						{$SetSeedLangs.Dispatched|htmlspecialchars}
					</div>
					<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeleteCheckout">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary">
					{$SetSeedLangs.Show_Order_Details|htmlspecialchars}
				</div>
				
				{if $invoice_page_id!=0}
				
				
				<div class="paneToolsPrimary secondaryAction noIcon" id="showInvoice">
					{$SetSeedLangs.Show_Invoice|htmlspecialchars}
				</div>
				{/if}

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneCheckout -->


<div id="rightPaneLivechat" class="rightPane">
	<div id="livechatPane" class="withTitleBar withEmptyFilterBar">
		<div class="paneContents">
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<h1>{$SetSeedLangs.Livechat|htmlspecialchars}</h1>
			</div>
			<div class="cleverFilterBar empty">

				<div class="showLeftPane"></div>
				<div class="subHeaderLeftMenuItem">
					<div class="target" id="livechatContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllLivechat"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllLivechat"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>

			</div>
			<div id="livechatPaneInner" class="pagesScroll"><div class="clearfix" id="convos"></div></div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteLivechat">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary">
					{$SetSeedLangs.Accept_Chat|htmlspecialchars}
				</div>

			</div>
		</div>
		<div id="hiddenConvos" style="display:none"></div>
	</div>

</div> <!-- end #rightPaneLivechat -->


<div id="rightPaneStaff" class="rightPane">
	<div id="staffPane">
		<div class="paneContents withTitleBar">
			<div class="topBar">
				<div class="returnToLP"></div>
				<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<h1>{$SetSeedLangs.Staff|htmlspecialchars}</h1>
			</div>
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="staffContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllStaff"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllStaff"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarNewStaff" class="subHeaderButton primaryItem">{$SetSeedLangs.Staff_New|htmlspecialchars}</div>

			</div>

			<div id="staffPaneInner" class="pagesScroll">

				<div id="addStaff" class="responsiveListAddForm hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Staff_Email}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus newStaffEmail clearAfterSend" value=""/></div>
					</div>
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Staff_Password}</div>
						<div class="imageContextEditInputWrap"><input type="password" name="" class="newStaffPassword clearAfterSend" value=""/></div>
					</div>
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Staff_Password_Again}</div>
						<div class="imageContextEditInputWrap"><input type="password" name="" class="newStaffPassword2 clearAfterSend" value=""/></div>
					</div>
				</div>
				<div class="clearfix insertTarget" id="adminList"></div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteStaff">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary renameAction">
					{$SetSeedLangs.Rename_Staff|htmlspecialchars}
				</div>
				<div class="paneToolsPrimary secondaryAction noIcon" id="resetStaffPassword">
					{$SetSeedLangs.Reset_Password|htmlspecialchars}
				</div>
				<div id="privsMenu">
					<div class="stylesHeading">
						<h2>{$SetSeedLangs.Privileges|htmlspecialchars}</h2>
					</div>
					<div class="subHeaderLeftMenuItem" data-test-value="data-privs" data-test-type="csv">
						<div class="target">

						</div>
						<div class="triShadow"></div>
						<ul>
							<li><a id="" class="privilegeItem" data-lang="{$SetSeedLangs.Require_Specific_Permissions|htmlspecialchars}" data-item-value="14">{$SetSeedLangs.Require_Specific_Permissions|htmlspecialchars}</a></li>
							
							<li><a id="allPrivs" data=lang="{$SetSeedLangs.All_Privileges|htmlspecialchars}" data-item-value="allTicked">{$SetSeedLangs.All_Privileges|htmlspecialchars}</a></li>
							
							<li class="iconbarRule"></li>
							<li><a id="" class="privilegeItem allTickCandidate" data-lang="{$SetSeedLangs.Publish_Pages|htmlspecialchars}" data-item-value="0">{$SetSeedLangs.Publish_Pages|htmlspecialchars}</a></li>
							{if $DISABLE_GALLERIES==0}<li><a id="" class="privilegeItem allTickCandidate" data-lang="{$SetSeedLangs.Work_With_Galleries|htmlspecialchars}" data-item-value="1">{$SetSeedLangs.Work_With_Galleries|htmlspecialchars}</a></li>{/if}
							{if $DISABLE_FORMS==0}<li><a id="" class="privilegeItem allTickCandidate" data-lang="{$SetSeedLangs.Work_With_Contact_Forms|htmlspecialchars}" data-item-value="2">{$SetSeedLangs.Work_With_Contact_Forms|htmlspecialchars}</a>		</li>{/if}
							{if $DISABLE_PRODUCTS==0}<li><a id="" class="privilegeItem allTickCandidate" data-lang="{$SetSeedLangs.Work_With_Products|htmlspecialchars}" data-item-value="3">{$SetSeedLangs.Work_With_Products|htmlspecialchars}</a></li>{/if}
							{if $DISABLE_BOOKINGS==0}<li><a id="" class="privilegeItem allTickCandidate" data-lang="{$SetSeedLangs.Work_With_Bookings|htmlspecialchars}" data-item-value="13">{$SetSeedLangs.Work_With_Bookings|htmlspecialchars}</a></li>{/if}

							{if $DISABLE_CALENDARS==0}<li><a id="" class="privilegeItem allTickCandidate" data-lang="{$SetSeedLangs.Work_With_Calendars|htmlspecialchars}" data-item-value="4">{$SetSeedLangs.Work_With_Calendars|htmlspecialchars}</a></li>{/if}
							{if $DISABLE_SNIPPETS==0}<li><a id="" class="privilegeItem allTickCandidate " data-lang="{$SetSeedLangs.Work_With_Snippets|htmlspecialchars}" data-item-value="5">{$SetSeedLangs.Work_With_Snippets|htmlspecialchars}</a></li>{/if}
							{if $DISABLE_MAILING_LIST==0}<li><a id="" class="privilegeItem allTickCandidate" data-lang="{$SetSeedLangs.Edit_Mailing_List_Subscribers|htmlspecialchars}" data-item-value="6">{$SetSeedLangs.Edit_Mailing_List_Subscribers|htmlspecialchars}</a></li>
							<li><a id="" class="privilegeItem allTickCandidate" data-lang="{$SetSeedLangs.Send_Mailing_List_Messages|htmlspecialchars}" data-item-value="7">{$SetSeedLangs.Send_Mailing_List_Messages|htmlspecialchars}</a></li>{/if}
							{if $DISABLE_BLOG==0}<li><a id="" class="privilegeItem allTickCandidate" data-lang="{$SetSeedLangs.Work_With_The_Blog|htmlspecialchars}" data-item-value="8">{$SetSeedLangs.Work_With_The_Blog|htmlspecialchars}</a></li>{/if}
							{if $DISABLE_PRODUCTS==0}<li><a id="" class="privilegeItem allTickCandidate" data-lang="{$SetSeedLangs.Manage_Checkout|htmlspecialchars}" data-item-value="9">{$SetSeedLangs.Manage_Checkout|htmlspecialchars}</a></li>{/if}
							{if $DISABLE_LIVECHAT==0}<li><a id="" class="privilegeItem allTickCandidate" data-lang="{$SetSeedLangs.Respond_To_Livechat|htmlspecialchars}" data-item-value="10">{$SetSeedLangs.Respond_To_Livechat|htmlspecialchars}</a></li>{/if}
							<li><a id="" class="privilegeItem allTickCandidate" data-lang="{$SetSeedLangs.Change_Settings|htmlspecialchars}" data-item-value="11">{$SetSeedLangs.Change_Settings|htmlspecialchars}</a></li>
							{if $DISABLE_EMBED_CODES==0}<li><a id="" class="privilegeItem allTickCandidate" data-lang="{$SetSeedLangs.Work_With_Embed_Codes|htmlspecialchars}" data-item-value="12">{$SetSeedLangs.Work_With_Embed_Codes|htmlspecialchars}</a></li>{/if}
							<li><a id="" class="privilegeItem allTickCandidate" data-lang="{$SetSeedLangs.Add_Items_To_Permission_Groups|htmlspecialchars}" data-item-value="15">{$SetSeedLangs.Add_Items_To_Permission_Groups|htmlspecialchars}</a></li>
							
							
							<a data-lang="{$SetSeedLangs.None|htmlspecialchars}" data-item-value="" class="empty" style="display:none"></a>
						</ul>
						<div class="mtri"></div>
					</div>
					
					<div id="staffGroupsPaneTools">
						<div class="stylesHeading">
							<h2>{$SetSeedLangs.Permission_Groups|htmlspecialchars}</h2>
						</div>
						<div class="subHeaderLeftMenuItem" data-test-value="data-permission-groups" data-test-type="csv">
							<div class="target">

							</div>
							<div class="triShadow"></div>
							<ul>
								<div id="permissionGroupsList"  {if !$permissionGroups}style="display:none"{/if}>
									{include file=admin/views/admin/permissiongroups.tpl groups=$permissionGroups}
								</div>
								<li class='iconbarRule' {if !$permissionGroups}style="display:none"{/if}></li>
								{*<li><a id='quickAddImagesCategories'>{$SetSeedLangs.Quick_Add}&hellip;</a></li>
								<li class='iconbarRule'></li>*}
								<li><a id='managePermissionGroups'>{$SetSeedLangs.Manage_Permission_Groups}&hellip;</a></li>
								<a href="" data-lang="{$SetSeedLangs.None|htmlspecialchars}" data-item-value="" class="empty" style="display:none"></a>
							</ul>
							<div class="mtri"></div>
						</div>
					</div>
				
					
					
					
				</div>
				{if !$DISABLE_HELP}
				<div class="paneToolsHelp" data-play-video="/admin/help-videos-en/permissions.mp4">{$SetSeedLangs.QuickTour_Perms}</div>
				{/if}
				
			</div>
		</div>
	</div>

</div> <!-- end #rightPaneStaff -->



<div id="rightPanePermissionGroups" class="rightPane autoRename"
	data-assign-keys="assignPermissionGroupsKeys"
	data-url="adminUsersActions.php"
	data-data="adminUsersAction=renamePermissionGroup"
	data-attr-to-update="title"
	data-post-call="renamePermissionGroupsCallback"
>

	<div id="permissionGroupsPane" class="withTitleBar">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="permissionGroupsContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllPermissionGroups"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllPermissionGroups"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a>		</li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarAddPermissionGroup" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Permission_Group|htmlspecialchars}</div>

			</div>
			<div class="topBar">
				<div class="returnToLP"></div>
<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
				<div class="topBarButtonBack" id="backToStaffFromGroups">

				</div>
				<h1>{$SetSeedLangs.Permission_Groups|htmlspecialchars}</h1>
			</div>
			<div id="permissionGroupsPaneInner" class="pagesScroll">
				<div class="responsiveListAddForm addPermissionGroup hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Permission_Group_Name|htmlspecialchars}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
					</div>

				</div>
				<div class="clearfix insertTarget"></div>
			</div>
			<div class="paneTools">
				<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeletePermissionGroups">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				
				<div class="paneToolsPrimary renameAction">
					{$SetSeedLangs.Rename_Permission_Group|htmlspecialchars}
				</div>

			</div>
		</div>
	</div>

</div> <!-- end #rightPanePermissionGroups -->



<input type="hidden" name="" value="{$adminUserSalt}" id="adminUserSalt"/>


<div id="rightPaneEmbedCodes" class="rightPane assetPane">
	<div class="assetPaneHeader">
		<div class="closeDragInsert"></div>
		<div class="backToDragInsertIndex"><span>{$SetSeedLangs.Insert|htmlspecialchars}</span></div>
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<h1><span class="storagePart">{$SetSeedLangs.Storage|htmlspecialchars}:</span> <strong>{$SetSeedLangs.Embed_Codes}</strong></h1>


	</div>
	<div class="dragInsertTabs clearfix">
		<div class="dragInsertTabText dragInsertTab">{$SetSeedLangs.Text|htmlspecialchars}</div>
		<div class="dragInsertTabStorage dragInsertTab current">
			<span class="level2Switcher"><span class="overflowEllipsis"><span>{$SetSeedLangs.Embed_Codes}</span></span></span>
		</div>
		<div class="dragInsertTabWidgets dragInsertTab">{$SetSeedLangs.Extra|htmlspecialchars}</div>
		<div class="dragInsertTabLayout dragInsertTab">{$SetSeedLangs.Insert_Structure|htmlspecialchars}</div>
	</div>
	<div id="embedCodesPane">
		<div class="paneContents">
			<div class="cleverFilterBar">

				<div class="subHeaderLeftMenuItem">
					<div class="target" id="embedCodesContextMenu">
						{$SetSeedLangs.Edit|htmlspecialchars}
					</div>
					<div class="triShadow"></div>
					<ul class="contextMenu">

						<li><a id="iconbarSelectAllEmbedCodes"><span class="key hideIfTouch"><span class="mod"></span>{$SetSeedLangs.A|htmlspecialchars}</span>{$SetSeedLangs.Select_All|htmlspecialchars}</a></li>
						<li><a id="iconbarDeselectAllEmbedCodes"><span class='key hideIfTouch'>{$SetSeedLangs.Esc|htmlspecialchars}</span>{$SetSeedLangs.Deselect_All|htmlspecialchars}</a></li>
					</ul>
					<div class="mtri"></div>
				</div>
				<div id="iconbarNewEmbedCodes" class="subHeaderButton primaryItem">{$SetSeedLangs.New_Embed_Code|htmlspecialchars}</div>
			</div>
			<div id="embedCodesPaneInner" class="pagesScroll">
				<div id="addEmbedCode" class="responsiveListAddForm hideOnReset" style="display:none">
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Embed_Code_Name}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="focus resetAfterSend newEmbedCodeName" value=""/></div>
					</div>
					<div class="imageContextEditFieldset">
						<div class="imageContextEditLabel">{$SetSeedLangs.Embed_Code_Code}</div>
						<div class="imageContextEditInputWrap"><input type="text" name="" class="resetAfterSend newEmbedCodeCode" value=""/></div>
					</div>

					<input type="hidden" name="" value="{$groupFilter}" id="currentMailingList"/>
				</div>
				<div class="clearfix insertTarget" id="embedCodesList">{include file="admin/views/embed/embedcodes.tpl"}</div>
			</div>
			<div class="paneTools">
			<div class="disabledMask"></div>
				<div class="paneToolsButtonRow">
					<div class="paneToolsBottomFull paneToolsDelete" id="iconbarDeleteEmbedCodes">
						{$SetSeedLangs.Delete|htmlspecialchars}
					</div>
				</div>
				<div class="paneToolsPrimary">
					{$SetSeedLangs.Edit_Embed_Code|htmlspecialchars}
				</div>

			</div>
		</div>
	</div>

</div> <!-- end #rightPaneEmbedCodes -->




<input type="hidden" name="" value="{$maxUploadSize}" id="maxUploadSize"/>
<div id="bpe_toggler" class="bpe_toggler"></div>

<div id="settingsFlyinMask"></div>
<div id="settingsFlyin">
	<div id="settingsFlyinHeader">
		<div class="returnToLP"></div>
		<div class="toggleLivepreview"><div class="toggleLivepreviewIcon"><div></div></div></div>
		<div id="backSettingsFlyin" class="topBarButtonBack">

		</div>
		<div id="backSettingsFlyinMain" class="topBarButtonBack">

		</div>
		<h1 id="settingsFlyinHeaderText" original="{$SetSeedLangs.Website_Settings|htmlspecialchars}">{$SetSeedLangs.Website_Settings|htmlspecialchars}</h1>
		<h1 id="designFlyinHeaderText" original="{$SetSeedLangs.Design|htmlspecialchars}">{$SetSeedLangs.Design|htmlspecialchars}</h1>
	</div>
	<div id="settingsFlyinInner">
		<div class="settingsFlyinPadding">
			<div id="settingsTwoPaneLeft">

			</div>
			<div id="settingsTwoPaneRight">
				<p class="settingsGroupHeading">{$SetSeedLangs.General|htmlspecialchars}</p>

				<div class="settingsLinkToChoices settingsItem first last">
				<a id="changeHomepage">{$SetSeedLangs.Website_Homepage|htmlspecialchars}&hellip;</a>
				</div>

				{if $allprivs|@count>3} {* new privs *}
					{if $sitewideContent|@count>0}

					<p class="settingsGroupHeading" id="sitewideSettingsHeading">{$SetSeedLangs.Sitewide_Content|htmlspecialchars}</p>
					<div id="primaryLangSitewide">
					{foreach from=$sitewideContent item=sitewideContentVar name=loop1}
						<div class="settingsItem settingsLinkToChoices {if $smarty.foreach.loop1.first}first{/if} {if $smarty.foreach.loop1.last}last{/if}">
						<a href="editSitewideContent.php?name={$sitewideContentVar[0]|@urlencode}" class="returnTrue">{$sitewideContentVar[1]|htmlspecialchars|replace:"_":" "}</a>
						</div>
					{/foreach}
					</div>
					<div id="otherLangsSitewide">

					</div>


					{/if}
				{else}
					{if $allprivs.2==1 || $master}
						{if $sitewideContent|@count>0}

						<p class="settingsGroupHeading" id="sitewideSettingsHeading">{$SetSeedLangs.Sitewide_Content|htmlspecialchars}</p>
							<div id="primaryLangSitewide">
							{foreach from=$sitewideContent item=sitewideContentVar name=loop1}
								<div class="settingsItem settingsLinkToChoices {if $smarty.foreach.loop1.first}first{/if} {if $smarty.foreach.loop1.last}last{/if}">
								<a href="editSitewideContent.php?name={$sitewideContentVar[0]|@urlencode}" class="returnTrue">{$sitewideContentVar[1]|htmlspecialchars|replace:"_":" "}</a>
								</div>
							{/foreach}
							</div>
							<div id="otherLangsSitewide">

							</div>


						{/if}
					{/if}
				{/if}

				{if $allprivs|@count>3} {* If new privs *}
					{if $DISABLE_MAILING_LIST==0}{if $allprivs.6==1 || $allprivs.7==1}{assign var=mailingListOk value=true}{/if}{/if}
					{if $DISABLE_BLOG==0}{if $allprivs.8==1}{assign var=blogOk value=true}{/if}{/if}
					{if $DISABLE_PRODUCTS==0}{if $allprivs.9==1}{assign var=productsOk value=true}{/if}{/if}
				{else}
					{if $allprivs.1==1 || $master}
					{if $DISABLE_MAILING_LIST==0}{assign var=mailingListOk value=true}{/if}
					{if $DISABLE_BLOG=="0"}{assign var=blogOk value=true}{/if}
					{if $DISABLE_PRODUCTS=="0"}{assign var=productsOk value=true}{/if}
					{/if}
				{/if}
				{if $mailingListOk}
				<p class="settingsGroupHeading">{$SetSeedLangs.Mailing_Lists|htmlspecialchars}</p>
				<div class="settingsItem settingsText first">

				<a id="newsletterFromSetting" mailing-list-from-name="{$newsletter_from_name|htmlspecialchars}" mailing-list-from-email="{$newsletter_from_email|htmlspecialchars}" class="">
					<span class="smallSettings"><span class="overflowEllipsis" title="{$SetSeedLangs.From|htmlspecialchars}">{$SetSeedLangs.From|htmlspecialchars}</span></span>
					<span class="value" title="{$newsletter_from_name|htmlspecialchars} ({$newsletter_from_email|htmlspecialchars})"><span class="overflowEllipsis">{$newsletter_from_name|htmlspecialchars} ({$newsletter_from_email|htmlspecialchars})</span></span>
					<span class="overflowEllipsis largeSettings" title="{$SetSeedLangs.From|htmlspecialchars}">{$SetSeedLangs.From|htmlspecialchars}</span>


				</a>
				</div>
				<div class="settingsItem settingsText last">
				<a id="newsletterSMTPSetting" mailing-list-server="{$newsletter_server|htmlspecialchars}" mailing-list-username="{$newsletter_username|htmlspecialchars}" mailing-list-password="{$newsletter_password|htmlspecialchars}">

						<span class="smallSettings"><span class="overflowEllipsis" title="{$SetSeedLangs.SMTP_Settings|htmlspecialchars}">{$SetSeedLangs.SMTP_Settings|htmlspecialchars}</span></span>
						<span class="value" title="{$newsletter_server|htmlspecialchars}"><span class="overflowEllipsis">{$newsletter_server|htmlspecialchars}</span></span>
						<span class="overflowEllipsis largeSettings" title="{$SetSeedLangs.SMTP_Settings|htmlspecialchars}">{$SetSeedLangs.SMTP_Settings|htmlspecialchars}</span>
							</a>
				</div>
				<div class="settingsItem settingsToggle last first">
				<a id="notifyMeChange" class="{if $notifyMe}bpe_current{/if}">{$SetSeedLangs.Notify_Me|htmlspecialchars}</a>
				</div>
				{/if}
				{if $blogOk}
				<p class="settingsGroupHeading">{$SetSeedLangs.Blog|htmlspecialchars}</p>
				<div class="settingsItem settingsToggle first">
				<a id="newCommentApprovalToggle" {if $manual_approve=="yes"}class="bpe_current"{/if}>{$SetSeedLangs.New_Comments_Approval|htmlspecialchars}</a>
				</div>
				<div class="settingsItem settingsText">
				<a id="changeCommentNotificationEmail" value="{$comment_email_notification|htmlspecialchars}">

					<span class="smallSettings"><span class="overflowEllipsis" title="{$SetSeedLangs.Comment_Notification_Email|htmlspecialchars}&hellip;">{$SetSeedLangs.Comment_Notification_Email|htmlspecialchars}&hellip;</span></span>
					<span class="value" title="{$comment_email_notification|htmlspecialchars}"><span class="overflowEllipsis">{$comment_email_notification|htmlspecialchars}</span></span>
					<span class="overflowEllipsis largeSettings" title="{$SetSeedLangs.Comment_Notification_Email|htmlspecialchars}&hellip;">{$SetSeedLangs.Comment_Notification_Email|htmlspecialchars}&hellip;</span>
							</a>
				</a>
				</div>
				<div class="settingsItem settingsText">
				<a id="changeSecretPass" value="{$secret_passcode|htmlspecialchars}">

					<span class="smallSettings"><span class="overflowEllipsis" title="{$SetSeedLangs.Author_Reply_Password|htmlspecialchars}&hellip;">{$SetSeedLangs.Author_Reply_Password|htmlspecialchars}&hellip;</span></span>
					<span class="value" title="{$secret_passcode|htmlspecialchars}"><span class="overflowEllipsis">{$secret_passcode|htmlspecialchars}</span></span>
					<span class="overflowEllipsis largeSettings" title="{$SetSeedLangs.Author_Reply_Password|htmlspecialchars}&hellip;">{$SetSeedLangs.Author_Reply_Password|htmlspecialchars}&hellip;</span>
				</a>
				</div>
				<div class="settingsItem settingsText">
				<a id="changeArticlePerPage">
					<span class="smallSettings"><span class="overflowEllipsis" title="{$SetSeedLangs.Articles_Per_Page|htmlspecialchars}&hellip;">{$SetSeedLangs.Articles_Per_Page|htmlspecialchars}&hellip;</span></span>
					<span class="value" title="{$items_on_page|htmlspecialchars}"><span class="overflowEllipsis">{$items_on_page|htmlspecialchars}</span></span>
					<span class="overflowEllipsis largeSettings" title="{$SetSeedLangs.Articles_Per_Page|htmlspecialchars}&hellip;">{$SetSeedLangs.Articles_Per_Page|htmlspecialchars}&hellip;</span>
				</a>
				</div>

				{/if}

				{if $productsOk}
				<p class="settingsGroupHeading">{$SetSeedLangs.Checkout|htmlspecialchars}</p>
				<div class="settingsItem settingsText first">
					<a id="changePayPalEmail">
						<span class="smallSettings"><span class="overflowEllipsis" title="{$SetSeedLangs.PayPal_Email|htmlspecialchars}">{$SetSeedLangs.PayPal_Email|htmlspecialchars}</span></span>
						<span class="value" title="{$paypal_email|htmlspecialchars}"><span class="overflowEllipsis">{$paypal_email|htmlspecialchars}</span></span>
						<span class="overflowEllipsis largeSettings" title="{$SetSeedLangs.PayPal_Email|htmlspecialchars}">{$SetSeedLangs.PayPal_Email|htmlspecialchars}</span>
					</a>
				</div>
				<div class="settingsItem settingsText last">
					<a id="changeMerchantID">
						<span class="smallSettings"><span class="overflowEllipsis" title="{$SetSeedLangs.Merchant_ID|htmlspecialchars}">{$SetSeedLangs.Merchant_ID|htmlspecialchars}</span></span>
						<span class="value" title="{$merchant_id|htmlspecialchars}"><span class="overflowEllipsis">{$merchant_id|htmlspecialchars}</span></span>
						<span class="overflowEllipsis largeSettings" title="{$SetSeedLangs.Merchant_ID|htmlspecialchars}">{$SetSeedLangs.Merchant_ID|htmlspecialchars}</span>
					</a>
				</div>
				<div class="settingsItem settingsToggle">
					<a id="enableCheckoutMessage" {if $no_note==1}class="bpe_current"{/if}>{$SetSeedLangs.Checkout_Message|htmlspecialchars}</a>
				</div>
				<div class="settingsItem settingsDropdown last">
					<div class="smallSettings"><span class="overflowEllipsis">{$SetSeedLangs.Currency|htmlspecialchars}</span></div>
					<select name="" id="changeCurrency">
						<option value="AUD" {if $currencyConfig == "AUD"}selected="selected"{/if}>AUD (Australian Dollar)</option>
						<option value="CAD" {if $currencyConfig == "CAD"}selected="selected"{/if}>CAD (Canadian Dollar)</option>
						<option value="EUR" {if $currencyConfig == "EUR"}selected="selected"{/if}>EUR (Euro)</option>
						<option value="GBP" {if $currencyConfig == "GBP"}selected="selected"{/if}>GBP (British Pound)</option>
						<option value="JPY" {if $currencyConfig == "JPY"}selected="selected"{/if}>JPY (Japanese Yen)</option>
						<option value="USD" {if $currencyConfig == "USD"}selected="selected"{/if}>USD (U.S. Dollar)</option>
						<option value="NZD" {if $currencyConfig == "NZD"}selected="selected"{/if}>NZD (New Zealand Dollar)</option>
						<option value="CHF" {if $currencyConfig == "CHF"}selected="selected"{/if}>CHF (Swiss Franc)</option>
						<option value="HKD" {if $currencyConfig == "HKD"}selected="selected"{/if}>HKD (Hong Kong Dollar)</option>
						<option value="SGD" {if $currencyConfig == "SGD"}selected="selected"{/if}>SGD (Singapore Dollar)</option>
						<option value="SEK" {if $currencyConfig == "SEK"}selected="selected"{/if}>SEK (Swedish Krona)</option>
						<option value="DKK" {if $currencyConfig == "DKK"}selected="selected"{/if}>DKK (Danish Krone)</option>
						<option value="PLN" {if $currencyConfig == "PLN"}selected="selected"{/if}>PLN (Polish Zloty)</option>
						<option value="NOK" {if $currencyConfig == "NOK"}selected="selected"{/if}>NOK (Norwegian Krone)</option>
						<option value="HUF" {if $currencyConfig == "HUF"}selected="selected"{/if}>HUF (Hungarian Forint)</option>
						<option value="CZK" {if $currencyConfig == "CZK"}selected="selected"{/if}>CZK (Czech Koruna)</option>
						<option value="ILS" {if $currencyConfig == "ILS"}selected="selected"{/if}>ILS (Israeli New Shekel)</option>
						<option value="MXN" {if $currencyConfig == "MXN"}selected="selected"{/if}>MXN (Mexican Peso)</option>
						<option value="BRL" {if $currencyConfig == "BRL"}selected="selected"{/if}>BRL (Brazilian Real)</option>
						<option value="MYR" {if $currencyConfig == "MYR"}selected="selected"{/if}>MYR (Malaysian Ringgit)</option>
						<option value="PHP" {if $currencyConfig == "PHP"}selected="selected"{/if}>PHP (Philippine Peso)</option>
						<option value="TWD" {if $currencyConfig == "TWD"}selected="selected"{/if}>TWD (New Taiwan Dollar)</option>
						<option value="THB" {if $currencyConfig == "THB"}selected="selected"{/if}>THB (Thai Baht)</option>
						<option value="TRY" {if $currencyConfig == "TRY"}selected="selected"{/if}>TRY (Turkish Lira)</option>
						{foreach from=$additionalCurrencies item=ac key=key name=loop1}
							<option value="{$ac.code}" {if $currencyConfig == "TRY"}selected="selected"{/if}>{$ac.full}</option>
							
						{/foreach}
					</select>
					<div class="largeSettings"><span class="overflowEllipsis">{$SetSeedLangs.Currency|htmlspecialchars}</span></div>

				</div>
				<div class="settingsItem settingsToggle first">
					<a id="enableTaxCheckout" {if $checkout_tax==1}class="bpe_current"{/if}>{$SetSeedLangs.Enable_Checkout_Tax|htmlspecialchars}</a>
				</div>
				<div class="settingsItem settingsToggle">
					<a id="taxIncludedOrExcluded" {if $add_tax==0}class="bpe_current"{/if}>{$SetSeedLangs.Tax_Add_Or_Subtract|htmlspecialchars}</a>
				</div>
				<div class="settingsItem settingsText">
					<a id="changeSalesTax">
						<span class="smallSettings"><span class="overflowEllipsis" title="{$SetSeedLangs.Sales_Tax|htmlspecialchars}">{$SetSeedLangs.Sales_Tax|htmlspecialchars}</span></span>
						<span class="value" title="{$sales_tax}"><span class="overflowEllipsis">{$sales_tax}</span></span>
						<span class="overflowEllipsis largeSettings" title="{$SetSeedLangs.Sales_Tax|htmlspecialchars}">{$SetSeedLangs.Sales_Tax|htmlspecialchars}</span>
					</a>
				</div>
				<div class="settingsItem settingsText last">
					<a id="changeSalesTaxName">
						<span class="smallSettings"><span class="overflowEllipsis" title="{$SetSeedLangs.Sales_Tax_Name|htmlspecialchars}">{$SetSeedLangs.Sales_Tax_Name|htmlspecialchars}</span></span>
						<span class="value" title="{$sales_tax_name}"><span class="overflowEllipsis">{$sales_tax_name}</span></span>
						<span class="overflowEllipsis largeSettings" title="{$SetSeedLangs.Sales_Tax_Name|htmlspecialchars}">{$SetSeedLangs.Sales_Tax_Name|htmlspecialchars}</span>
					</a>
				</div>
				<div class="settingsItem settingsText first">
					<a id="checkoutSuccessPage">
						<span class="smallSettings"><span class="overflowEllipsis" title="{$SetSeedLangs.Success_Page|htmlspecialchars}">{$SetSeedLangs.Success_Page|htmlspecialchars}</span></span>
						<span class="value" title="{$return_success_text}"><span class="overflowEllipsis">{$return_success_text}</span></span>
						<span class="overflowEllipsis largeSettings" title="{$SetSeedLangs.Success_Page|htmlspecialchars}">{$SetSeedLangs.Success_Page|htmlspecialchars}</span>
					</a>
				</div>

				<div class="settingsItem settingsText last">
					<a id="checkoutFailPage">
						<span class="smallSettings"><span class="overflowEllipsis" title="{$SetSeedLangs.Fail_Page|htmlspecialchars}">{$SetSeedLangs.Fail_Page|htmlspecialchars}</span></span>
						<span class="value" title="{$return_fail_text}"><span class="overflowEllipsis">{$return_fail_text}</span></span>
						<span class="overflowEllipsis largeSettings" title="{$SetSeedLangs.Fail_Page|htmlspecialchars}">{$SetSeedLangs.Fail_Page|htmlspecialchars}</span>
					</a>
				</div>
				{if $formOnCheckoutSupport}
				<div class="settingsItem settingsDropdown first last">
					<div class="smallSettings"><span class="overflowEllipsis">{$SetSeedLangs.Show_Form_On_Checkout|htmlspecialchars}</span></div>
					<select name="" id="formsListSettings" data-current-form-checkout="{$form_on_checkout}">

					</select>
					<div class="largeSettings"><span class="overflowEllipsis">{$SetSeedLangs.Show_Form_On_Checkout|htmlspecialchars}</span></div>

				</div>
				{/if}
				<div class="settingsItem settingsLinkToChoices first">
					<a id="orderReceivedTemplate">{$SetSeedLangs.Order_Received_Template|htmlspecialchars}</a>
				</div>
				<div class="settingsItem settingsLinkToChoices last">
					<a id="orderDispatchedTemplate">{$SetSeedLangs.Order_Dispatched_Template|htmlspecialchars}</a>
				</div>
				<div class="settingsItem settingsText first">
					<a id="checkoutFromSetting" checkout-from-name="{$from_name|htmlspecialchars}" checkout-from-email="{$from_email|htmlspecialchars}">
						<span class="smallSettings"><span class="overflowEllipsis" title="{$SetSeedLangs.From|htmlspecialchars}">{$SetSeedLangs.From|htmlspecialchars}</span></span>
						<span class="value" title="{$from_name|htmlspecialchars} ({$from_email|htmlspecialchars})"><span class="overflowEllipsis">{$from_name|htmlspecialchars} ({$from_email|htmlspecialchars})</span></span>
						<span class="overflowEllipsis largeSettings" title="{$SetSeedLangs.From|htmlspecialchars}">{$SetSeedLangs.From|htmlspecialchars}</span>
					</a>
				</div>
				<div class="settingsItem settingsText last">
					<a id="checkoutSMTPSetting" checkout-server="{$smtp_server|htmlspecialchars}" checkout-username="{$username|htmlspecialchars}" checkout-password="{$password|htmlspecialchars}">
						<span class="smallSettings"><span class="overflowEllipsis" title="{$SetSeedLangs.SMTP_Settings|htmlspecialchars}">{$SetSeedLangs.SMTP_Settings|htmlspecialchars}</span></span>
						<span class="value" title="{$smtp_server|htmlspecialchars}"><span class="overflowEllipsis">{$smtp_server|htmlspecialchars}</span></span>
						<span class="overflowEllipsis largeSettings" title="{$SetSeedLangs.SMTP_Settings|htmlspecialchars}">{$SetSeedLangs.SMTP_Settings|htmlspecialchars}</span>
					</a>
				</div>

				{/if}
				{if $allprivs|@count>3} {* If new privs *}
					{if $DISABLE_LIVECHAT==0}{if $allprivs.10==1}{assign var=livechatOk value=true}{/if}{/if}
				{else}
				{if $DISABLE_LIVECHAT==0}{assign var=livechatOk value=true}{/if}
				{/if}
				{if $livechatOk}

				<p class="settingsGroupHeading">{$SetSeedLangs.Livechat|htmlspecialchars}</p>

				<div class="settingsItem settingsToggle first">

					<a {if $livechat_status=="on"}class="bpe_current"{/if} id="livechatStatus">{$SetSeedLangs.Livechat_Online}
	</a>
				</div>
				<div class="settingsItem settingsText">
					<a id="livechatMessage">
						<span class="smallSettings"><span class="overflowEllipsis" title="{$SetSeedLangs.Livechat_Welcome_Message|htmlspecialchars}">{$SetSeedLangs.Livechat_Welcome_Message|htmlspecialchars}</span></span>
						<span class="value" title="{$livechat_message|htmlspecialchars}"><span class="overflowEllipsis">{$livechat_message|htmlspecialchars}</span></span>
						<span class="overflowEllipsis largeSettings" title="{$SetSeedLangs.Livechat_Welcome_Message|htmlspecialchars}">{$SetSeedLangs.Livechat_Welcome_Message|htmlspecialchars}</span>
					</a>
				</div>
				<div class="settingsItem settingsText last">
					<a id="livechatName">

						<span class="smallSettings"><span class="overflowEllipsis" title="{$SetSeedLangs.Livechat_Display_Name|htmlspecialchars}">{$SetSeedLangs.Livechat_Display_Name|htmlspecialchars}</span></span>
						<span class="value" title="{$livechat_name|htmlspecialchars}"><span class="overflowEllipsis">{$livechat_name|htmlspecialchars}</span></span>
						<span class="overflowEllipsis largeSettings" title="{$SetSeedLangs.Livechat_Display_Name|htmlspecialchars}">{$SetSeedLangs.Livechat_Display_Name|htmlspecialchars}</span>
					</a>
				</div>
				{/if}
				{if $theme_options}
				<div id="themeOptions" class="stopAtTheme">
				{foreach from=$theme_options item=option key=i name=options}
					{if $i==0}
					{if $option.type!="title"}
						{* If there are no theme vars and this is the first design var - this will always be a title value so this will never apply in a design var loop *}
						<p class="settingsGroupHeading">{$SetSeedLangs.Theme_Settings}</p>
					{/if}
					{/if}
					{assign var=next value=$i+1}
					{assign var=prev value=$i-1}
						{if $option.type=="string"}
						<div class="settingsItem settingsDropdown {if $theme_options[$next].type=='rule'||$theme_options[$next].type=='title'}last{/if} {if $theme_options[$prev].type=='rule' || $theme_options[$prev].type=='title'}first{/if} {if $smarty.foreach.options.last}last{/if} {if $smarty.foreach.options.first}first{/if}">
							<div class="smallSettings"><span class="overflowEllipsis">
								{assign var=fn value="Custom_`$option.variable_name`"}
								{if $SetSeedLangs.$fn}
								{assign var=friendlyname value=$SetSeedLangs.$fn}
								{$friendlyname}
								{else}
								{$option.display_name|@htmlspecialchars}
								{/if}
							</span></div>
							<select name="{$option.variable_name|@htmlspecialchars}">

									{foreach from=$option.options item=option_item}
										<option value="{$option_item.value|@htmlspecialchars}" {if $option_item.selected=="true"}selected="selected"{/if}>
											{assign var=fn value="Custom_`$option_item.value`"}
											{if $SetSeedLangs.$fn}
											{assign var=friendlyname value=$SetSeedLangs.$fn}
											{$friendlyname}
											{else}
												{$option_item.display_value|@htmlspecialchars}
											{/if}
										</option>
									{/foreach}

							</select>
							<div class="largeSettings"><span class="overflowEllipsis">
								{assign var=fn value="Custom_`$option.variable_name`"}
								{if $SetSeedLangs.$fn}
								{assign var=friendlyname value=$SetSeedLangs.$fn}
								{$friendlyname}
								{else}
								{$option.display_name|@htmlspecialchars}
								{/if}
							</span></div>



						</div>
						{/if}
						{if $option.type=="string_with_image_previews"}
						<div class="settingsItem settingsDropdownImagePreviews {if $theme_options[$next].type=='rule'||$theme_options[$next].type=='title'}last{/if} {if $theme_options[$prev].type=='rule' || $theme_options[$prev].type=='title'}first{/if} {if $smarty.foreach.options.last}last{/if} {if $smarty.foreach.options.first}first{/if}" var-name="{$option.variable_name|htmlspecialchars}" display-name="{assign var=fn value="Custom_`$option.variable_name`"}{if $SetSeedLangs.$fn}{assign var=friendlyname value=$SetSeedLangs.$fn}{$friendlyname}{else}{$option.display_name|@htmlspecialchars}{/if}" var-value="{$option.value|@htmlspecialchars}">

								{foreach from=$option.options item=option_item}
									{if $option_item.selected=="true"}
										<img src="{$option_item.preview_image|@htmlspecialchars}" class="settingsFlyinThumb"/>
									{/if}
								{/foreach}


							<span class="value" style="margin-right:30px" title="{foreach from=$option.options item=option_item name=op}{if $option_item.value==$option.value}{assign var=fn value="Custom_`$option_item.value`"}{if $SetSeedLangs.$fn}{assign var=friendlyname value=$SetSeedLangs.$fn}{$friendlyname}{else}{$option_item.display_value|@htmlspecialchars}{/if}{/if}{/foreach}"><span class="overflowEllipsis">
								{foreach from=$option.options item=option_item name=op}
								{if $option_item.value==$option.value}
								{assign var=fn value="Custom_`$option_item.value`"}
								{if $SetSeedLangs.$fn}
								{assign var=friendlyname value=$SetSeedLangs.$fn}
								{$friendlyname}
								{else}
									{$option_item.display_value|@htmlspecialchars}
								{/if}
								{/if}
								{/foreach}
							</span></span>

							<span class="overflowEllipsis">
								{assign var=fn value="Custom_`$option.variable_name`"}
								{if $SetSeedLangs.$fn}
								{assign var=friendlyname value=$SetSeedLangs.$fn}
								{$friendlyname}
								{else}
								{$option.display_name|@htmlspecialchars}
								{/if}
							</span>
							<div class="imageOptions" style="display:none">
								{foreach from=$option.options item=option_item name=op}
									<div option-value="{$option_item.value|@htmlspecialchars}" option-display-value="{assign var=fn value="Custom_`$option_item.value`"}{if $SetSeedLangs.$fn}{assign var=friendlyname value=$SetSeedLangs.$fn}{$friendlyname}{else}{$option_item.display_value|@htmlspecialchars}{/if}" class="settingsImagePreview {if $option_item.selected=="true"}current_image_option{/if}">
										<div class="settingsImagePreviewWrap"><img src="{$option_item.preview_image|@htmlspecialchars}" /></div>
										<p>
											{assign var=fn value="Custom_`$option_item.value`"}
											{if $SetSeedLangs.$fn}
											{assign var=friendlyname value=$SetSeedLangs.$fn}
											{$friendlyname}
											{else}
												{$option_item.display_value|@htmlspecialchars}
											{/if}
										</p>
									</div>
									{if $smarty.foreach.op.iteration%3==0}<div class="clear"></div>{/if}
								{/foreach}
							</div>


						</div>
						{/if}
						{if $option.type=="text"}
							<div class="settingsItem settingsText  {if $theme_options[$next].type=='rule'||$theme_options[$next].type=='title'}last{/if} {if $theme_options[$prev].type=='rule' || $theme_options[$prev].type=='title'}first{/if} {if $smarty.foreach.options.last}last{/if} {if $smarty.foreach.options.first}first{/if}">

							<a href="" class="themeOptionText" id="theme_text_{$option.variable_name|@htmlspecialchars}" theme-var-value="{$option.value|@htmlspecialchars}" theme-var-name="{$option.variable_name|@htmlspecialchars}" theme-var-info="{$option.info|@htmlspecialchars}" theme-var-display-name="{$option.display_name|@htmlspecialchars}">
								<span class="smallSettings"><span class="overflowEllipsis" title="{assign var=fn value="Custom_`$option.display_name`"}{if $SetSeedLangs.$fn}{assign var=friendlyname value=$SetSeedLangs.$fn}{$friendlyname}{else}{$option.display_name|@htmlspecialchars}{/if}">{assign var=fn value="Custom_`$option.variable_name`"}{if $SetSeedLangs.$fn}{assign var=friendlyname value=$SetSeedLangs.$fn}{$friendlyname}{else}{$option.display_name|@htmlspecialchars}{/if}</span></span>

								<span class="value" title="{$option.value|@htmlspecialchars}"><span class="overflowEllipsis">{$option.value|@htmlspecialchars}</span></span>

								<span class="overflowEllipsis largeSettings" title="{assign var=fn value="Custom_`$option.display_name`"}{if $SetSeedLangs.$fn}{assign var=friendlyname value=$SetSeedLangs.$fn}{$friendlyname}{else}{$option.display_name|@htmlspecialchars}{/if}">{assign var=fn value="Custom_`$option.variable_name`"}{if $SetSeedLangs.$fn}{assign var=friendlyname value=$SetSeedLangs.$fn}{$friendlyname}{else}{$option.display_name|@htmlspecialchars}{/if}</span>
							</a>
							</div>

						{/if}
						{if $option.type=="tick"}
							<div class="settingsItem settingsToggle {if $theme_options[$next].type=='rule'||$theme_options[$next].type=='title'}last{/if} {if $theme_options[$prev].type=='rule' || $theme_options[$prev].type=='title'}first{/if} {if $smarty.foreach.options.last}last{/if} {if $smarty.foreach.options.first}first{/if}">

							<a href="" class="themeOptionToggle {if $option.value=="1"}bpe_current{/if}" rel="{$option.variable_name}" id="theme_text_{$option.variable_name|@htmlspecialchars}"><span class="overflowEllipsis">{assign var=fn value="Custom_`$option.variable_name`"}{if $SetSeedLangs.$fn}{assign var=friendlyname value=$SetSeedLangs.$fn}{$friendlyname}{else}{$option.display_name|@htmlspecialchars}{/if}</span></a>
							</div>

						{/if}
						{if $option.type=="image"||$option.type=="video"}
							<div class="settingsItem settingsImage {if $theme_options[$next].type=='rule'||$theme_options[$next].type=='title'}last{/if} {if $theme_options[$prev].type=='rule' || $theme_options[$prev].type=='title'}first{/if} {if $smarty.foreach.options.last}last{/if} {if $smarty.foreach.options.first}first{/if}">

						<a class="themeOptionImage {if $option.type=="video"}video{/if}" rel="{$option.variable_name|@htmlspecialchars}" id="theme_text_{$option.variable_name|@htmlspecialchars}" value="{$option.value|@htmlspecialchars}"><span class="removeThemeImage" {if $option.value==""}style="display:none;"{/if}></span>


							<span class="overflowEllipsis">
								{assign var=fn value="Custom_`$option.variable_name`"}
								{if $SetSeedLangs.$fn}
								{assign var=friendlyname value=$SetSeedLangs.$fn}
								{$friendlyname}
								{else}
								{$option.display_name|@htmlspecialchars}
								{/if}
							</span>
						</a>
						</div>
						{/if}
						{if $option.type=="title"}
							<p class="settingsGroupHeading {if $option.design_mode}design-mode{/if}">
								{assign var=fn value="Custom_`$option.lang_value`"}
								{if $SetSeedLangs.$fn}
								{assign var=friendlyname value=$SetSeedLangs.$fn}
								{$friendlyname}
								{else}
								{$option.value|@htmlspecialchars}
								{/if}
							</p>
						{/if}
				{/foreach}
				</div>
				{/if}
			</div>
		</div>
	</div>
	<div id="settingsFlyinInner2">
		<div class="settingsFlyinPadding">
		</div>
	</div>
</div>


<div id="loadingPercent">
	<div id="loadingPercentTrack">
		<div id="loadingPercentBar"></div>
	</div>
</div>
<div id="newlivechatplayer"></div>
<div id="null"></div>
<div id="assetPaneMask"></div>
</div>

<div class="subHeaderLeftMenuItem level2SwitcherMenu">
<div class="triShadow"></div>
<div class="mtri"></div>
</div>
<div id="bookingAvailabilityOuter">
	<div id="bookingAvailability">
		<div id="bookingAvailabilityToolbar" class="greyedOut">
			<div id="bookingAvailabilityToolbarInner">
				<div id="manageRates">Manage Rates</div>

				{*<div id="rates">

					<div class="bookingAvailabilityPriceLabel priceA" data-value="price-a">
									Normal rate
								</div>
								<div class="bookingAvailabilityPriceLabel priceB" data-value="price-b">
									Peak rate
								</div>
								<div class="bookingAvailabilityPriceLabel priceC" data-value="price-c">
									Off-peak rate
								</div>
								<div class="bookingAvailabilityPriceLabel priceCustom" data-value="price-custom">
									Custom <input type="text" />
								</div>

				</div>*}
				{*<div class="bookingAvailabilityPriceLabel priceA" data-value="price-a">
					Normal rate
				</div>
				<div class="bookingAvailabilityPriceLabel priceB" data-value="price-b">
					Peak rate
				</div>
				<div class="bookingAvailabilityPriceLabel priceC" data-value="price-c">
					Off-peak rate
				</div>
				<div class="bookingAvailabilityPriceLabel priceCustom" data-value="price-custom">
					Custom <input type="text" />
				</div>*}
				<div class="bookingAvailabilityTool" id="bookAsCompleteBlock">Only bookable as complete block</div>
			</div>
		</div>
		<div id="bookingAvailabilityInner">

		</div>
		<div id="manageBookingAvailabilityRates">
			<div id="addEditRate" class="clearfix">
				<p id="noRatesMessage">
					Before you can set availability you need to create at least one daily rate.
				</p>
				<h3 id="addRate">
					Add rate
				</h3>
				<h3 id="editRate">
					Manage rates
				</h3>

				<div id="chooseRates">
					<h4 id="addOrEdit">Add new or edit existing rate:</h4>
					<h4 id="editOnly">Edit existing rate:</h4>
					<div id="chooseRatesSelect"></div>
					<div class="hr"></div>
				</div>

				<div class="ratesField clearfix">
				<label>Name</label>
				<input type="text" id="availabilityRateName"/>
				<p class="info">Enter a name for this rate (eg. Normal, Off-Peak, Peak etc), this
				will not be shown to your visitors.</p>

				</div>
				<div class="ratesField clearfix">
				<label id="bookingProdTypeSeatOrSpace">Rate per person per day</label>
				<label id="bookingProdTypeObject">Rate per object per day</label>
				<input type="text" id="availabilityRateNormal" />
				</div>
				<div class="ratesField clearfix">
				<label>Rate per person per day (Children)</label>
				<input type="text" id="availabilityRateNormalChildren" />
				</div>
				<div class="ratesField clearfix">
				<label>Rate per person per day (Concessions)</label>
				<input type="text" id="availabilityRateNormalConcessions" />
				</div>
				<div class="ratesField clearfix">
				<label class="replace-with-space-name" data-original-string="Minimum daily price per  {literal}{*}{/literal}"></label>
				<input type="text" id="availabilityRateNormalMinPerSpace" />
				</div>
				<a href="" id="deleteRate">{$SetSeedLangs.Delete_Rate}</a>
				<div class="hr"></div>
				<div id="saveEditRate">Done</div>
				<div id="cancelEditRate">Cancel</div>
			</div>
		</div>
	</div>
</div>

<div id="bookingsOuter">
	<div id="bookings">
		<div id="bookingsToolbar" class="greyedOut">

		</div>
		<div id="bookingsInner">

		</div>
	</div>
</div>

<div id="toolTipEnlarge">
	<img src="/admin/graphics/enlarge.svg">
</div>
<div class="toolTip top_left" id="toolTip">
	<div class="toolTipInner">
		<p id="toolTipText"></p>
		<div class="toolTipRule"></div>
		<div class="toolTipDismiss" id="dismissToolTip">{$SetSeedLangs.OK|htmlspecialchars}</div>
	</div>
</div>
<div id="error"></div>
<div id="message"></div>
<div id="popupDialogue">
	<div id="popupDialogueMask"></div>
	<div id="popupDialogueWrap">
		<div id="popupDialogueInner" class="clearfix">
			<div id="popupDialogueContent"></div>
			<div id="insertInteralLinks">
				<div id='popupInsertLinkToPage'>{$SetSeedLangs.Insert_Link_To_Page|htmlspecialchars}</div>
				<div id='popupInsertLinkToFile'>{$SetSeedLangs.Insert_Link_To_File|htmlspecialchars}</div>
				<div class="mtri"></div>
			</div>
			<div class="clear"></div>
			<div id="popupDialogueField"><textarea rows="1" cols="50"></textarea></div>
			<div id="linkOpensInNewWindow">
				{$SetSeedLangs.Link_Opens_In_New_Window|htmlspecialchars}
			</div>
			
			<div id="popupDialogueFieldQuickAddImageCategory">
				<div class="dialogueCheckboxes">
					<label><input type="checkbox" id="quickAddImageGallery"/>{$SetSeedLangs.Create_Gallery_From_Cat}</label>
				</div>
			</div>
			
			<div id="popupDialogueFieldMailingListSend">
				<p id="listSize">{$SetSeedLangs.Mailing_List_Status_Recipients}: <span></span></p>
				<div id="mailingListSentToCategories">
					<p><strong>{$SetSeedLangs.Only_Send_To_Cats}</strong></p>
					<label><input type="checkbox" checked="checked" id="onlySendToCatsAll"/>{$SetSeedLangs.All}</label>
					<div class="bpe_rule"></div>
					<div id="sendToCategories"></div>
					<div class="bpe_rule"></div>
					<label><input type="checkbox" id="onlySendMatchAll"/>{$SetSeedLangs.Match_All_Selected}</label>
				</div>
				<div id="sendingToMultipleListsMessage">
				{$SetSeedLangs.Sending_To_Multiple_Lists}
				</div>
				<div class="imageContextualEdit">
					<div class='imageContextEditFieldset showingLabel' id="sendMailingListSubject">
						<div class='imageContextEditLabel'><span>{$SetSeedLangs.Mailing_List_Subject|@htmlspecialchars}</span></div>
						<div class='imageContextEditInputWrap'>
							<textarea title='{$SetSeedLangs.Mailing_List_Subject|htmlspecialchars}' class='toggleLabelValue imageContextInput' name='subject' id="sendMailingListSubjectInput"></textarea>
						</div>
					</div>
				</div>

				<p>{$SetSeedLangs.Send_To_Mailing_List_Info_Content|htmlspecialchars}</p>


				<a id="changeMailingListPageContent" class="popupDialogueChooser empty"><span id="selectedMailingListPage" page-id="">{$SetSeedLangs.Choose_page|htmlspecialchars}</span></a>
			</div>
			<div id="popupDialogueChangeFormAutoresponder">

				<div class="imageContextualEdit">
					<div class='imageContextEditFieldset showingLabel' id="sendFormAutoresponderSubject">
						<div class='imageContextEditLabel'><span>{$SetSeedLangs.Mailing_List_Subject|@htmlspecialchars}</span></div>
						<div class='imageContextEditInputWrap'>
							<textarea title='{$SetSeedLangs.Mailing_List_Subject|htmlspecialchars}' class='toggleLabelValue imageContextInput' name='subject' id="formAutoresponderSubjectInput"></textarea>
						</div>
					</div>
				</div>

				<p>{$SetSeedLangs.Autoresponder_Info_Content|htmlspecialchars}</p>


				<a id="changeFormAutoresponderContent" class="popupDialogueChooser empty"><span id="selectedFormAutoresponderPage" page-id="">{$SetSeedLangs.Choose_page|htmlspecialchars}</span></a>
			</div>
			<div id="popupDialogueChangeMailingListAutoresponder">

				<div class="imageContextualEdit">
					<div class='imageContextEditFieldset showingLabel' id="sendMailingListAutoresponderSubject">
						<div class='imageContextEditLabel'><span>{$SetSeedLangs.Mailing_List_Subject|@htmlspecialchars}</span></div>
						<div class='imageContextEditInputWrap'>
							<textarea title='{$SetSeedLangs.Mailing_List_Subject|htmlspecialchars}' class='toggleLabelValue imageContextInput' name='subject' id="mailingListAutoresponderSubjectInput"></textarea>
						</div>
					</div>
				</div>

				<p>{$SetSeedLangs.Autoresponder_Info_Content|htmlspecialchars}</p>


				<a id="changeMailingListAutoresponderContent" class="popupDialogueChooser empty"><span id="selectedMailingListAutoresponderPage" page-id="">{$SetSeedLangs.Choose_page|htmlspecialchars}</span></a>
			</div>
			<div id="popupDialogueFieldPassword">
				<p>{$SetSeedLangs.Change_Email_Text|htmlspecialchars}</p>
				<div class='imageContextualEdit'>
					<div class='imageContextEditFieldset showingLabel'>
						<div class='imageContextEditLabel'><span id="accountEmail">{$account_email|@htmlspecialchars}</span></div>
						<div class='imageContextEditInputWrap'>
							<input type='text' title='{$SetSeedLangs.Email|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='email' />
						</div>
					</div>
				</div>
				<p>{$SetSeedLangs.Change_Password_Text|htmlspecialchars}</p>
				<div class='imageContextualEdit'>
					<div class='imageContextEditFieldset showingLabel'>
						<div class='imageContextEditLabel'>{$SetSeedLangs.Current_Password|htmlspecialchars}</div>
						<div class='imageContextEditInputWrap'>
							<input type='password' title='{$SetSeedLangs.Current_Password|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='old_password' />
						</div>
					</div>
				</div>
				<div class='imageContextualEdit'>
					<div class='imageContextEditFieldset showingLabel'>
						<div class='imageContextEditLabel'>{$SetSeedLangs.New_Password|htmlspecialchars}</div>
						<div class='imageContextEditInputWrap'>
							<input type='password' title='{$SetSeedLangs.New_Password|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='password' />
						</div>
					</div>
					<div class='imageContextEditFieldset showingLabel'>
						<div class='imageContextEditLabel'>{$SetSeedLangs.New_Password_Again|htmlspecialchars}</div>
						<div class='imageContextEditInputWrap'>
							<input type='password' title='{$SetSeedLangs.New_Password_Again|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='password2' />
						</div>
					</div>
				</div>
			</div>
			<div id="popupDialogueFieldPasswordStaff">


				<div class='imageContextualEdit'>
					<div class='imageContextEditFieldset showingLabel'>
						<div class='imageContextEditLabel'>{$SetSeedLangs.New_Password|htmlspecialchars}</div>
						<div class='imageContextEditInputWrap'>
							<input type='password' title='{$SetSeedLangs.New_Password|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='password' />
						</div>
					</div>
					<div class='imageContextEditFieldset showingLabel'>
						<div class='imageContextEditLabel'>{$SetSeedLangs.New_Password_Again|htmlspecialchars}</div>
						<div class='imageContextEditInputWrap'>
							<input type='password' title='{$SetSeedLangs.New_Password_Again|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='password2' />
						</div>
					</div>
				</div>
			</div>
				<div id="popupDialogueFrom">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupFromName">
							<div class='imageContextEditLabel'>{$SetSeedLangs.From_Name|htmlspecialchars}</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='{$SetSeedLangs.From_Name|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='from_name' />
							</div>
						</div>
						<div class='imageContextEditFieldset showingLabel' id="popupFromEmail">
							<div class='imageContextEditLabel'>{$SetSeedLangs.From_Email|htmlspecialchars}</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='{$SetSeedLangs.From_Email|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='from_email' />
							</div>
						</div>
					</div>
				</div>
				<div id="popupDialogueSMTP">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupSMTPServer">
							<div class='imageContextEditLabel'>{$SetSeedLangs.SMTP_Server|htmlspecialchars}</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='{$SetSeedLangs.SMTP_Server|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='smtp_server' />
							</div>
						</div>
					</div>
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupSMTPUsername">
							<div class='imageContextEditLabel'>{$SetSeedLangs.SMTP_Username|htmlspecialchars}</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='{$SetSeedLangs.SMTP_Username|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='smtp_username' />
							</div>
						</div>
						<div class='imageContextEditFieldset showingLabel' id="popupSMTPPassword">
							<div class='imageContextEditLabel'>{$SetSeedLangs.SMTP_Password|htmlspecialchars}</div>
							<div class='imageContextEditInputWrap'>
								<input type='password' title='{$SetSeedLangs.SMTP_Password|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='smtp_password' />
							</div>
						</div>
					</div>
				</div>
				<div id="popupDialogueSecurity">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupSecurityUsername">
							<div class='imageContextEditLabel'>{$SetSeedLangs.Username|htmlspecialchars}</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='{$SetSeedLangs.Username|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='username' />
							</div>
						</div>
					</div>
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupSecurityPass1">
							<div class='imageContextEditLabel'>{$SetSeedLangs.Password|htmlspecialchars}</div>
							<div class='imageContextEditInputWrap'>
								<input type='password' title='{$SetSeedLangs.Password|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='password' />
							</div>
						</div>
						<div class='imageContextEditFieldset showingLabel' id="popupSecurityPass2">
							<div class='imageContextEditLabel'>{$SetSeedLangs.Password_Again|htmlspecialchars}</div>
							<div class='imageContextEditInputWrap'>
								<input type='password' title='{$SetSeedLangs.Password_Again|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='password2' />
							</div>
						</div>
					</div>
				</div>
				<div id="popupDialogueMailTemplate">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupMailTemplateSubject">
							<div class='imageContextEditLabel'>{$SetSeedLangs.Subject|htmlspecialchars}</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='{$SetSeedLangs.Subject|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='subject' />
							</div>
						</div>
						<div class='imageContextEditFieldset showingLabel' id="popupMailTemplateMessage">
							<div class='imageContextEditLabel'>{$SetSeedLangs.Message|htmlspecialchars}</div>
							<div class='imageContextEditInputWrap'>
								<textarea title='{$SetSeedLangs.Message|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='message' ></textarea>
							</div>
						</div>
					</div>
				</div>
				<div id="popupDialogueImportSubscribers">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupImportSubscribersCSV">
							<div class='imageContextEditLabel'>{$SetSeedLangs.Subscribers_CSV|htmlspecialchars}</div>
							<div class='imageContextEditInputWrap'>
								<textarea title='' class='toggleLabelValue imageContextInput' value='' name='message' ></textarea>
							</div>
						</div>
					</div>
				</div>
				<div id="popupDialogueImportEvents">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupImportEventsCSV">
							<div class='imageContextEditLabel'>{$SetSeedLangs.Events_CSV|htmlspecialchars}</div>
							<div class='imageContextEditInputWrap'>
								<textarea title='' class='toggleLabelValue imageContextInput' value='' name='message' ></textarea>
							</div>
						</div>
					</div>
				</div>
				<div id="popupDialogueProductVolumeDiscount">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupVolumeDiscountPrice">
							<div class='imageContextEditLabel'>{$SetSeedLangs.Product_Price|htmlspecialchars}</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='{$SetSeedLangs.Product_Price|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='' />
							</div>
						</div>
						<div class='imageContextEditFieldset showingLabel' id="popupVolumeDiscountThreshold">
							<div class='imageContextEditLabel'>{$SetSeedLangs.Quantity_Discount_Threshold|htmlspecialchars}</div>
							<div class='imageContextEditInputWrap'>
								<input type='text' title='{$SetSeedLangs.Quantity_Discount_Threshold|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='' />
							</div>
						</div>
					</div>
				</div>
				<div id="popupDialogueTableData">
					<div class='imageContextualEdit'>
						<div class='imageContextEditFieldset showingLabel' id="popupDialogueTableDataCSV">
							<div class='imageContextEditLabel'>{$SetSeedLangs.Table_CSV|htmlspecialchars}</div>
							<div class='imageContextEditInputWrap'>
								<textarea title='' class='toggleLabelValue imageContextInput' value='' name='message' ></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="popupDialogueContentPrimary"><div></div></div>
			<div id="popupDialogueContentSecondary"><div></div></div>
		</div>
	</div>
</div>
<input type="hidden" name="order_sent_email_subject" value="{$order_sent_email_subject}" id="order_sent_email_subject"/>
<input type="hidden" name="order_sent_email" value="{$order_sent_email}" id="order_sent_email"/>
<input type="hidden" name="order_received_email_subject" value="{$order_received_email_subject}" id="order_received_email_subject" />
<input type="hidden" name="order_received_email" id="order_received_email" value="{$order_received_email}" />
<textarea id="cutCopyPasteCapture"> </textarea>
<div id="livechatFloater">
	<div id="livechatFloaterHeader">
		<div id="closeLivechatFloater"></div>
	</div>
	<div id="livechatiframewrap">
	<iframe id="livechatiframe"></iframe>
	</div>
</div>
<div id="loadingPNGWrap">
<div class="spinner">
  <div class="dot1"></div>
  <div class="dot2"></div>
</div>
</div> <!-- end #loadingPNGWrap -->
</div>
<div id="videoPlayer">
	<div id="videoPlayerInner">
		<div id="helpVideoPlayer"></div>
	</div>
</div>
<input type="hidden" id="session" value="{$token}" />
</body>
</html>
