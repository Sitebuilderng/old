{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}
{if !$ajax}
<div id="tagsListLoad" style="display:none">
{if $tags}
{foreach from=$tags item=tag key=key name=loop1}
	<a tag-name="{$tag.name|@htmlspecialchars}"><span class="overflowEllipsis">{$tag.name|@htmlspecialchars}</span></a>
{/foreach}
<div class='iconbarRule'></div>
{/if}
</div>
{*
	<div class="bpe_menu_sub">
	 		<div class="menu_with_options menu_hidden_extras bpe_menu_sub_item2">
			Authors</div>
			<div class='bpe_menu_sub_items2 bpe_wide'>
				<div class='bpe_menu_top'>
					<div class='bpe_menu_bottom'>	
						<a href="" id="toggleAddAuthor" class="">Add new author</a>
						<div class="bpe_rule"></div>
						
						*}
						<div id="authorsMenuList" style="display:none">
							
							{* the list below gets parsed and rerendered as HTML in jQuery when list is displayed and updated in the DOM *}
							{if $authors}
							{foreach from=$authors|@array_reverse item=author key=key name=loop1}
								<li><a blog-author-id="{$author.id}" blog-author-bio="{$author.details|htmlspecialchars}" data-lang="{$author.name|@htmlspecialchars}" data-item-value="{$author.id}" class="authorItem">
								{*
									<div class="hoverButton addBioButton" id="{$author.id}"><input type="hidden" name="" class="bioText" value="{$author.details|htmlspecialchars}" id=""/><div>{if $author.details!=""}Edit{else}Add{/if} Biography</div></div>
									<span class="key hideOnHover" style="max-width:250px;text-align:right">
										{if $author.details!=""}
										{$author.details|@htmlspecialchars|truncate:40:"…":true:false}
										{else}
										No author biography added yet&hellip;
										{/if}
									</span>*}
									{$author.name|@htmlspecialchars}
								</a></li>{*
								<form action="blogActions.php" method="post" class="menu_with_options menuForm renameAuthorForm" class="menu_with_options menuForm" style="display:none">
									<input type="hidden" name="id" value="{$author.id}"/>
									<input type="hidden" name="blogAction" value="renameAuthor"/>
									<input type="text" name="name" value=" Enter a title, then hit return" class="pageMenuInput greyedOut focus"/>
								</form>*}
							{/foreach}
							<div class='iconbarRule'></div>
							{/if}
						</div>
						{*
						</div>
					</div>
				</div>
			</div>
	</div>
	<div class="bpe_menu_sub">
	 		<div class="menu_with_options menu_hidden_extras bpe_menu_sub_item2">
			Categories</div>
			<div class='bpe_menu_sub_items2 bpe_wide'>
				<div class='bpe_menu_top'>
					<div class='bpe_menu_bottom'>
						<a href="" id="toggleAddCategory" class="">Add new category</a>
						<div class="bpe_rule"></div>
						<form action="blogActions.php" method="post" id="addCategory" class="menu_with_options menuForm" style="display:none">
							<input type="hidden" name="blogAction" value="addCategory"/>
							<input type="text" name="name" value=" Enter a category, then hit return" class="pageMenuInput greyedOut focus"/>
						</form>*}
						<div id="catsMenuList" style="display:none">
							{if $cats}
							{foreach from=$cats item=cat key=key name=loop1}
								<li><a blog-category-id="{$cat.id}" data-lang="{$cat.name|@htmlspecialchars}" data-item-value="{$cat.id}" data-reverse-order="{$cat.reverse_order}">{$cat.name|@htmlspecialchars}</a></li>{*
								<form action="blogActions.php" method="post" class="menu_with_options menuForm renameCatForm" style="display:none">
									<input type="hidden" name="id" value="{$cat.id}"/>
									<input type="hidden" name="blogAction" value="renameCategory"/>
									<input type="text" name="name" value=" Enter a new name, then hit return" class="pageMenuInput greyedOut focus"/>
								</form>*}
							{/foreach}	
							<div class='iconbarRule'></div>
							{/if}
							</div>{*
					</div>
				</div>
			</div>
	</div>
	<div class="bpe_menu_sub">
	 		<div class="menu_with_options menu_hidden_extras bpe_menu_sub_item2">
			Settings</div>
			<div class='bpe_menu_sub_items2 bpe_wide'>
				<div class='bpe_menu_top'>
					<div class='bpe_menu_bottom'>	
						<a {if $manual_approve =="yes"}class="bpe_current"{/if} id="manual_approve">New comments require approval</a>
						<a id="toggleCommentNotification" class="menuFormLink"><span class="key" id="commentNotifyEmail">{if $comment_email_notification == ""}Not specified yet{else}{$comment_email_notification}{/if}</span>Comment notification email:</a>
						<form action="blogActions.php" method="post" class="menu_with_options menuForm" id="changeCommentNotificationForm" style="display:none">
							<input type="hidden" name="blogAction" value="changeConfig"/>
							<input type="hidden" name="action" value="comment_email_notification"/>
							<input type="text" name="comment_email_notification" value="" class="pageMenuInput greyedOut focus"/>
						</form>
						<a id="toggleSecretPassword" class="menuFormLink"><span class="key" id="secretPassword">{if $secret_passcode == ""}Not specified yet{else}{$secret_passcode}{/if}</span>Author reply password (for website field):</a>
						<form action="blogActions.php" method="post" class="menu_with_options menuForm" id="secretPasswordForm" style="display:none">
							<input type="hidden" name="blogAction" value="changeConfig"/>
							<input type="hidden" name="action" value="secret_passcode"/>
							<input type="text" name="secret_passcode" value="" class="pageMenuInput greyedOut focus"/>
						</form>
						<div class="bpe_rule"></div>
						<a id="toggleNumberOfArticles" class="menuFormLink" title="{$items_on_page}"><span class="key" id="numberOfItemsPerPageNumber">{$items_on_page}</span>Number of articles to show per page:</a>
						<form action="blogActions.php" method="post" class="menu_with_options menuForm" id="numberOfArticlesForm" style="display:none">
							<input type="hidden" name="blogAction" value="changeConfig"/>
							<input type="hidden" name="action" value="items_on_page"/>
							<input type="text" name="items_on_page" value="" class="pageMenuInput greyedOut focus"/>
						</form>
					</div>
				</div>
			</div>
	</div>
	<div class="bpe_rule"></div>
	{if !$limit}
	<a href="" id="showAddBlogForm">Add new article</a>
	{else}
	<div class="limit" style="margin-bottom:3px;margin-top:2px;">Demo blog article limit reached</div>
	<div class="clear"></div>
	{/if}
	<div class="bpe_rule"></div>*}
	
		
		<div class="subHeaderLeftMenuItem right blogSearchMenu">
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
						<div class="imageContextEditInputWrap"><input type="text" class="okToSendWhenFilled focus blogFilterSearch" value="{if $filterSearch}{$filterSearch}{/if}" /></div>
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
		<div class="subHeaderLeftMenuItem langFilterMenu right" {if $languages|@count==0}style="display:none;"{/if}>
			<div class="target notTooLong">
				{if !$blog_filter_lang}
				{$SetSeedLangs.Filter_By_Language|htmlspecialchars}
				{else}
				{foreach from=$languages item=item key=key name=loop1}
				{if $blog_filter_lang==$item.abr}{$item.name}{/if}
				{/foreach}
				{/if}
			</div>
			<div class="triShadow"></div>
			<ul id="blogFilter">
				<li><a href="" class="blogFilterLink filterLink {if !$blog_filter_lang}bpe_current{/if}" id="" data-item-value="">{$SetSeedLangs.All}</a></li>
				<div id="blogFilterToUpdate">
				{foreach from=$languages item=item key=key name=loop1}
				<li><a href="" class="blogFilterLink filterLink {if $blog_filter_lang==$item.abr}bpe_current{/if}" id="{$item.abr}" data-item-value="{$item.abr}">{$item.name}</a>	</li>
				{/foreach}
				</div>
			</ul> 
			<div class="mtri"></div>
		</div>
		<div class="subHeaderLeftMenuItem right" {if $cats|@count==0}style="display:none;"{/if} id="blogCategoryFilterMenu">
			<div class="target notTooLong">
				{if !$blog_filter_category}
				{$SetSeedLangs.Filter_By_Blog_Cat|htmlspecialchars}
				{else}
				{foreach from=$cats item=item key=key name=loop1}
				{if $blog_filter_category==$item.id}{$item.name}{/if}
				{/foreach}
				{/if}
			</div>
			<div class="triShadow"></div>
			<ul id="blogFilterCat">
				<li><a href="" class="{if !$blog_filter_category}bpe_current{/if}" id="" blog-category-id="" data-item-value="">{$SetSeedLangs.All}</a></li>
				<div id="blogFilterCategoriesToUpdate">
					
					{foreach from=$cats item=cat key=key name=loop1}
						<li><a blog-category-id="{$cat.id}" data-lang="{$cat.name|@htmlspecialchars}" data-item-value="{$cat.id}" data-reverse-order="{$cat.reverse_order}" class="{if $blog_filter_category==$cat.id}bpe_current{/if}">{$cat.name|@htmlspecialchars}</a></li>
					{/foreach}
					
					
				</div>
			</ul> 
			<div class="mtri"></div>
		</div>	{*}
			<div class="filterBar">	
			<p class="filterHeading">{$SetSeedLangs.Filter_By_Language|htmlspecialchars}:</p> 
			<a href="" class="blogFilterLink filterLink {if !$blog_filter_lang}currentFilter{/if}" id=""><span>{$SetSeedLangs.All}</span></a>
			{foreach from=$languages item=item key=key name=loop1}
			<a href="" class="blogFilterLink filterLink {if $blog_filter_lang==$item.abr}currentFilter{/if}" id="{$item.abr}"><span>{$item.name}</span></a>	
			{/foreach}
			</div>*}
		
			
			{*{if $languages|@count>0}			
			<p class="filterHeading">Filter by language:</p> 
			<a href="" class="blogFilterLink filterLink {if !$blog_filter_lang}currentFilter{/if}" id=""><span>All</span></a>
			{foreach from=$languages item=item key=key name=loop1}
			<a href="" class="filterLink blogFilterLink {if $blog_filter_lang==$item.abr}currentFilter{/if}" id="{$item.abr}"><span>{$item.name|@htmlspecialchars}</span></a>	
			{/foreach}
			
			{/if}*}
			{if $blog_filter_lang}<input type="hidden" name="filter" value="{$blog_filter_lang}" id="filter"/>{/if}
			{*<input type="text" id="blogFilterSearch" value="{$filterSearch}" />
			{if $filterSearch}
			<img src="/admin/graphics/bpeditor/remove_menu_item_off.png" id="clearSearchBlog"/>
			{/if}
			<label id="filterSearchLabel">Search:</label>
			{if $sets|@count>1}
				{if $sets|@count > 7}
					{if $currentPage<5 && $currentPage!=$sets|@count}
						{foreach from=$sets item=set key=key name=loop1}
							{if $smarty.foreach.loop1.iteration<=5}
							<a href="{$set}" class="filterBlogPage{if $currentPage==$set} currentFilterPage{/if}">{$set}</a>
							{/if}
						{/foreach}
						{if $sets|@count>6}
						{if $sets|@count!=7}
						<span class="pageHellip">&hellip;</span>
						{/if}
						<a href="{$sets|@count}" class="filterBlogPage">{$sets|@count}</a> 
						{/if}
					{elseif $currentPage>=5 && $currentPage < $sets|@count-2}
						<a href="1" class="filterBlogPage">1</a>  <span class="pageHellip">&hellip;</span> 
						{math equation=x-1 x=$currentPage assign=min}
						{math equation=x+1 x=$currentPage assign=max}

						{foreach from=$sets item=set key=key name=loop1}
							{if $smarty.foreach.loop1.iteration >= $min && $smarty.foreach.loop1.iteration <= $max}
							<a href="{$set}" class="filterBlogPage{if $currentPage==$set} currentFilterPage{/if}">{$set}</a>
							{/if}
						{/foreach}
						<span class="pageHellip">&hellip;</span> <a href="{$sets|@count}" class="filterBlogPage">{$sets|@count}</a> 

					{else}
						{if $sets|@count>=5}
						<a href="1" class="filterBlogPage">1</a>  {if $sets|@count!=5}<span class="pageHellip">&hellip;</span> {/if}
						{/if}
						{math equation=x-3 x=$sets|@count assign=min}

						{foreach from=$sets item=set key=key name=loop1}
							{if $smarty.foreach.loop1.iteration >= $min && $smarty.foreach.loop1.iteration <= $sets|@count}
							<a href="{$set}" class="filterBlogPage{if $currentPage==$set} currentFilterPage{/if}">{$set}</a>
							{/if}
						{/foreach}

					{/if}	
				{else}
				{foreach from=$sets item=set key=key name=loop1}
					<a href="{$set}" class="filterBlogPage{if $currentPage==$set} currentFilterPage{/if}">{$set}</a>
				{/foreach}
				{/if}
			{/if}
			<div class="clear"><!-- --></div>
		*}
		</div>
	
	<div class="dropzone"><div></div></div>
	
{/if}
{if !$entries && !$ajax}<span class='noPages'>{$SetSeedLangs.No_Blogs}</span>{/if}
{foreach from=$entries item=entry key=key name=loop1}

		<div class="responsiveListItem editBlogBar{if $entry.live!="yes"} offline{/if}{if $entry.comments} withComments{/if}" id="{$entry.draftId}" blog-categories="{$entry.in_categories}" blog-author="{$entry.author}" blog-id="{$entry.id}" blog-language="{$entry.language}" data-lang="{$entry.language}" data-blog-status="{if $entry.live=="yes"}live{else}offline{/if}" data-blog-author="{$entry.author}" data-blog-categories="{$entry.in_categories}">
	

			{if $entry.comments}
			<div class="showSubPages" id="{$entry.id}" title="{$SetSeedLangs.View_Comments}">
				
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
<path d="M537.184,177.402H256.083c-15.729,0-28.479,14.409-28.479,32.186v129.485
	c0,17.776,12.75,32.184,28.479,32.184h129.678l13.407,18.294l31.596,43.108l31.596-43.108l13.407-18.294h61.417
	c15.729,0,28.479-14.407,28.479-32.184V209.587C565.662,191.811,552.912,177.402,537.184,177.402z M503.875,313.771H287.026v-27.919
	h216.849V313.771z M503.875,251.325H287.026v-27.919h216.849V251.325z"/>
</svg>

				<span class="responsiveListItemInfo numberApproved {if $entry.number_not_approved==0}byitself{/if} {if $entry.number_approved==0}hidden{/if}">{$entry.number_approved}</span>
			
			<span class="responsiveListItemInfo numberNotApproved {if $entry.number_approved==0}byitself{/if} {if $entry.number_not_approved==0}hidden{/if}">{$entry.number_not_approved}</span>


			</div>
			
			
			{*
			<div class="buttonMenu">
			<div class="toggleComments hoverButton" id="{$entry.id}"><div title="{$entry.number_approved} approved. {$entry.number_not_approved} not approved.">Show Comments</div></div>*}
			<div class='commentsList' id="commentsList{$entry.id}" style="display:none">
						<div class="dropzone"><div></div></div>
						{foreach from=$entry.comments|@array_reverse item=comment key=key2 name=loop2}
							<div class="blogComment responsiveListItem {if $comment.approved=="no"}offline{/if}" blog-comment-id="{$comment.id}" data-blog-comment-status="{if $comment.approved=="no"}offline{else}live{/if}">
								<div class="responsiveListItemImage" {if $comment.email!=""}style="background: url('http://www.gravatar.com/avatar/{$comment.md5_email}?s=50') 50% 50%;"{/if}></div>
								{*
								<div class="blogControls">
								<div class="show_choices bpe_remove_menu_item4">
								 	<div class="choices confirmDelete" style="left:-210px;top:-3px;">
										<div class="choices_inner">
											<div class="choices_inner_inner">
												<span class='bpe_menu_group'>Delete comment. Are you sure?</span>
												<div class="bpe_rule"></div>
												<a href="" class="cancel_confirm">No</a>
												<a href="" class="deleteBlogComment" id="{$comment.id}">Yes</a>
											</div>
										</div>
									</div>
								 </div>
								<div class="menu_options4">
									<div class="option_selected">
										{if $comment.approved!="no"}
										Approved
										{else}
										Not-approv&hellip;
										{/if}
									</div>
									<div class="choices approveComment" id="{$entry.id}" style="left:auto;right:0;top:-2px">
										<div class="choices_inner">
											<div class="choices_inner_inner">
												{if $comment.approved!="no"}
												<a href="approve|{$comment.id}" class="choice_selected">Approved</a>
												<a href="unapprove|{$comment.id}">Not-approved</a>
												{else}
												<a href="approve|{$comment.id}">Approved</a>
												<a href="unapprove|{$comment.id}" class="choice_selected">Not-approved</a>
												{/if}
											</div>
										</div>
									</div>
								</div>
								</div>*}
								<strong><a href="mailto:{$comment.email|@htmlspecialchars}">{$comment.author|@htmlspecialchars}</a>:</strong> {if $comment.website!="" && $comment.website!="asdjkfhkjh212jkhhjk3478duh239s09s2k3"}(<a href="http://{$comment.website|@htmlspecialchars}" target="_blank" class="returnTrue">http://{$comment.website|@htmlspecialchars}</a>){/if} {$comment.content}
								</div>
								<div class="dropzone"><div></div></div>
						{/foreach}
						
						{if $entry.comments|@count==0}
						<div class="noPages">{$SetSeedLangs.No_Comments}</div>
						{/if}
					
			</div>
{*			</div>*}
			{/if}
			{*
				{if $languages|@count>0}
				<div class="menu_options languageMenu">
					<div class="option_selected">
						Language
					</div>
					<div class="choices toggleBlogLanguage">
						<div class="choices_inner">
							<div class="choices_inner_inner">
								{foreach from=$languages item=lang key=key name=loop1}
									<a href="{$lang.abr}" {if $entry.language==$lang.abr}class="bpe_current"{/if} id="{$entry.id}">{$lang.name|@htmlspecialchars}</a>
								{/foreach}
							</div>
						</div>
					</div>
				</div>



				{/if}*}
			{*
			{if $authors}
			<div class="menu_options">
				<div class="option_selected">
					{foreach from=$authors item=author}
					{if $author.id == $entry.author}{$author.name}{/if}
					{/foreach}
				</div>
				<div class="choices authorSelect">
					<div class="choices_inner">
						<div class="choices_inner_inner">
							{foreach from=$authors item=author}
							<a {if $author.id == $entry.author} class="choice_selected"{/if} href="{$author.id}">{$author.name|truncate:13:"…"}</a>
							{/foreach}
						</div>
					</div>
				</div>
			</div>
			{/if}*}
			{*
			<div class="menu_options">
				<div class="option_selected">
					{foreach from=$cats item=cat}
					{foreach from=$entry.in_categories item=in_cat}
							{if $in_cat == $cat.id}{$cat.name}{/if}
						{/foreach}
					{/foreach}
				</div>
				<div class="choices blogCatCheck">
					<div class="choices_inner">
						<div class="choices_inner_inner">
							{foreach from=$cats item=cat}
							<a href="{$cat.id}"{foreach from=$entry.in_categories item=in_cat}
									{if $in_cat == $cat.id} class="choice_selected"{/if}
								{/foreach}>
 								{$cat.name}</a>
							{/foreach}
						</div>
					</div>
				</div>
			</div>*}
				<span class="responsiveListItemInfo blogOffline" style="{if $entry.live=="yes"}visibility:hidden;{/if}"><span class='overflowEllipsis' title="{$SetSeedLangs.Offline|htmlspecialchars}">{$SetSeedLangs.Offline|htmlspecialchars}</span></span>
				
				<span class="overflowEllipsis" title="{$entry.title|@htmlspecialchars}">
						{$entry.title|@htmlspecialchars}
				</span>
		
		</div>
		<div class="dropzone"><div></div></div>
	{/foreach}
{if !$ajax || $searching || $initPane}
	<div class="clear insertNewItemsBefore"></div>
	<a href="50" class="showMoreItems">Show more images</a>
	{/if}
{if $entries}{*<div class="listTipUp">{$SetSeedLangs.Tip_List_No_Sort}</div>*}{/if}