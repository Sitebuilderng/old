
<div id="blogContent">
	
	{if $show_blog=="yes"} {* if we are showing a single article, show the article template *}

		{include file=components/blog-article.tpl}

	{else} {* otherwise, show the blog listings *}
		
		{if $viewing_cat_name!="" && $viewing_date=="month"}
			<p id="status">{$langs.Browsing_Cat_Month_Year|replace:"<CATEGORY>":$viewing_cat_name|replace:"<MONTH>":$month|replace:"<YEAR>":$year} (<a href="/{$contentUrl}/">{$langs.Show_All}</a>)</p>
		{elseif $viewing_cat_name!="" && $viewing_date=="day"}
			<p id="status">{$langs.Browsing_Cat_Month_Day_Year|replace:"<CATEGORY>":$viewing_cat_name|replace:"<MONTH>":$month|replace:"<YEAR>":$year|replace:"<DAY>":$day}
				 (<a href="/{$contentUrl}/">{$langs.Show_All}</a>)</p>
		{elseif $viewing_cat_name!=""}
			<p id="status">{$langs.Browsing_Cat|replace:"<CATEGORY>":$viewing_cat_name}
				 (<a href="/{$contentUrl}/">{$langs.Show_All}</a>)</p>
		{/if}
		{if $viewing_date=="month" && $viewing_cat_name==""}
			<p id="status">{$langs.Browsing_Month_Year|replace:"<MONTH>":$month|replace:"<YEAR>":$year}
				 (<a href="/{$contentUrl}/">{$langs.Show_All}</a>)</p>
		{/if}
		{if $viewing_date=="day" && $viewing_cat_name==""}
			<p id="status">{$langs.Browsing_Month_Year_Day|replace:"<MONTH>":$month|replace:"<YEAR>":$year|replace:"<DAY>":$day}
				(<a href="/{$contentUrl}/">{$langs.Show_All}</a>)</p>
		{/if}
		{if $searching_by!=""}
			<p id="status">
				{$langs.Searching_By|replace:"<SEARCH_TERM>":$searching_by}
				(<a href="/{$contentUrl}/">{$langs.Show_All}</a>)</p>
		{/if}
		{if $viewingtag}
			{$langs.Viewing_Tag|replace:"<TAG>":$viewingtag}
		{/if}
		{if $blogs}
		{foreach from=$blogs item=blog key=key name=loop}
			<h1 class='blogTitle'><a href="/{$contentUrl}/{$blog.url}/">{$blog.title}</a></h1>
			<p class="blogDate clearfix">{$blog.timestamp|date_format_locale:"%A, %B %e, %Y":$language}<br/>
				{if $blog.tags}<span style='float:left;margin-right:10px'>{$langs.Tags}</span> 
					{foreach from=$blog.tags item=tag key=key name=loop1}
						<a href="/{$contentUrl}/tag/{$tag.url}/" class="tag"><span>{$tag.name}{if !$smarty.foreach.loop1.last}{/if}</span></a>
					{/foreach}
					<span class="clear"><!-- --></span>
				{/if}
				
				{if $blog.in_categories|@count>1}Filed in: {foreach from=$cats item=cat}
						{foreach from=$blog.in_categories item=in_cat name=catsloop}
							{if $in_cat == $cat.id}<a href="/{$contentUrl}/category/{$cat.url}/">{$cat.name}</a>{if !$smarty.foreach.catsloop.last}, {/if}{/if}
						{/foreach}
					{/foreach}<br/> {/if}
				<a href="/{$contentUrl}/{$blog.url}/#comments">{$langs.Read_Comments} ({$blog.comments|@count})</a> </p>
			
			{$blog.content|strip_tags|truncate:300:"...":true}
			
			<div class="clear"></div>
				
			<p class="Button_Small" style="margin-top:10px; margin-bottom: 30px;"><a href="/{$contentUrl}/{$blog.url}/">View full article</a></p>
			
		<div class="clear"><!-- --></div>
		{/foreach}
		{if $totalPages != 1}
			{if $viewing_date}
				{if $viewing_date=="day"}
				<h5 id="paginate">{if $currentPage == 1}
					<span class="prevLink hidden">{$langs.Previous_Page}</span>

					{else}
					<span class="prevLink"><a href="/{$contentUrl}/date/{$day}/{$month}/{$year}/{if $viewing_cat_name!=""}category/{$cat_url}/{/if}page/{math equation="x - y" x=$currentPage y=1}/"><span>{$langs.Previous_Page}</span></a></span>
					{/if} 
					{if $currentPage == $totalPages}
					<span class="nextLink hidden">{$langs.Next_Page}</span>

					{else}
					<span class="nextLink"><a href="/{$contentUrl}/date/{$day}/{$month}/{$year}/{if $viewing_cat_name!=""}category/{$cat_url}/{/if}page/{math equation="x + y" x=$currentPage y=1}/"><span>{$langs.Next_Page}</span></a></span> 

					{/if}
					{$langs.Viewing_Page} <strong>{$currentPage} of {$totalPages}</strong>
					
					</h5>
				{else}
					<h5 id="paginate">{if $currentPage == 1}
						<span class="prevLink hidden">{$langs.Previous_Page}</span>
					{else}
					<span class="prevLink"><a href="/{$contentUrl}/date/{$month}/{$year}/{if $viewing_cat_name!=""}category/{$cat_url}/{/if}page/{math equation="x - y" x=$currentPage y=1}/"><span>{$langs.Previous_Page}</span></a></span>
					{/if} 
					{if $currentPage == $totalPages}
					<span class="nextLink hidden">{$langs.Next_Page}</span>
					{else}
					<span class="nextLink"><a href="/{$contentUrl}/date/{$month}/{$year}/{if $viewing_cat_name!=""}category/{$cat_url}/{/if}page/{math equation="x + y" x=$currentPage y=1}/"><span>{$langs.Next_Page}</span></a></span> 

					{/if}
					{$langs.Viewing_Page} <strong>{$currentPage} of {$totalPages}</strong>
					
					</h5>
				{/if}
			{else}
				<h5 id="paginate">{if $currentPage == 1}
					<span class="prevLink hidden">{$langs.Previous_Page}</span>

				{else}
				<span class="prevLink"><a href="/{$contentUrl}/{if $searching_by!=""}search/{$searching_by}/{/if}{if $viewingtag}tag/{$viewingtag}/{/if}{if $viewing_cat_name!=""}category/{$cat_url}/{/if}page/{math equation="x - y" x=$currentPage y=1}/"><span>{$langs.Previous_Page}</span></a></span>
				{/if} 
				{if $currentPage == $totalPages}
				<span class="nextLink hidden">{$langs.Next_Page}</span>
				{else}
				<span class="nextLink"><a href="/{$contentUrl}/{if $searching_by!=""}search/{$searching_by}/{/if}{if $viewingtag}tag/{$viewingtag}/{/if}{if $viewing_cat_name!=""}category/{$cat_url}/{/if}page/{math equation="x + y" x=$currentPage y=1}/"><span>{$langs.Next_Page}</span></a></span> 

				{/if}
				{$langs.Viewing_Page} <strong>{$currentPage} of {$totalPages}</strong>
				
				</h5>
			{/if}
		{/if}
		{else}
		{if $searching_by!=""}
		<h1>{$langs.No_Entries_Search}</h1>
		
		{else}
		<h1>{$langs.No_Entries}</h1>
		{/if}
		{/if} 
		
	{/if}
</div>
<div id="sidebar">
	
	<div id="sidebarInner">
	<div class="blogFilterCol">
		<div class="blogFilterColInner">
			<h4>{$langs.View_By_Date}</h4>
			<div id="blogCal"></div>
		</div>
	</div>
	{if $cats}
	<div class="blogFilterCol last">
		<div class="blogFilterColInner">
			<h4>{$langs.Categories}</h4>
			<ul id="blogCats">
				<li{if $viewing_cat_name=="" && $show_blog!="yes" && $viewing_date=="" && $searching_by==""} class="current"{/if}><a href="{if $content.homepage=="yes"}/{else}/{$contentUrl}/{/if}">{$langs.Show_All}</a></li>
			{foreach from=$cats item=cat key=key name=loop1}
				<li{if $viewing_cat_name==$cat.name} class="current"{/if}><a href="/{$contentUrl}/category/{$cat.url}/">{$cat.name}</a></li>
			{/foreach}</ul>
		</div>
	</div>
	<div class="clear"><!-- --></div>
	{/if}

	{if $recentArticles}
	<div class="blogFilterCol {if !$cats}last{/if}">
		<div class="blogFilterColInner">

			<h4>{$langs.Recent_Articles}</h4>
			<ul id="recArts">{foreach from=$recentArticles item=recArt key=key name=loop1}
				<li{if $title==$recArt.name} class="current"{/if}><a href="/{$contentUrl}/{$recArt.url}/">{$recArt.name}</a></li>
			{/foreach}</ul>
		</div>
	</div>
	{/if}
	{if $tagCloud}
	<div class="blogFilterCol {if $cats && $recentArticles}last{/if}{if !$cats && !$recentArticles}last{/if}">
			<div class="blogFilterColInner">

				<h4>{$langs.Tag_Cloud}</h4>
				<ul id="tagCloud" class="clearfix">
				{foreach from=$tagCloud item=item}
					<li class="tag-{$item.ratio}"><a href="/{$contentUrl}/tag/{$item.url}/">{$item.name}</a></li>
				{/foreach}
				</ul>
			</div>
	</div>
	{/if}
	</div>
</div>
