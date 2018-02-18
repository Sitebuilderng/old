<div id="blogContent">

	{if $show_blog=="yes"} {* if we are showing a single article, show the article template *}

		{include file=components/blog-article.tpl}

	{else} {* otherwise, show the blog listings *}

		{if $viewing_cat_name!="" && $viewing_date=="month"}
			<p id="status" class="Icon_Info">{$langs.Browsing_Cat_Month_Year|replace:"<CATEGORY>":$viewing_cat_name|replace:"<MONTH>":$month|replace:"<YEAR>":$year} (<a href="/{$contentUrl}/">{$langs.Show_All}</a>)</p>
		{elseif $viewing_cat_name!="" && $viewing_date=="day"}
			<p id="status"  class="Icon_Info">{$langs.Browsing_Cat_Month_Day_Year|replace:"<CATEGORY>":$viewing_cat_name|replace:"<MONTH>":$month|replace:"<YEAR>":$year|replace:"<DAY>":$day}
				 (<a href="/{$contentUrl}/">{$langs.Show_All}</a>)</p>
		{elseif $viewing_cat_name!=""}
			<p id="status" class="Icon_Info">{$langs.Browsing_Cat|replace:"<CATEGORY>":$viewing_cat_name}
				 (<a href="/{$contentUrl}/">{$langs.Show_All}</a>)</p>
		{/if}
		{if $viewing_date=="month" && $viewing_cat_name==""}
			<p id="status" class="Icon_Info">{$langs.Browsing_Month_Year|replace:"<MONTH>":$month|replace:"<YEAR>":$year}
				 (<a href="/{$contentUrl}/">{$langs.Show_All}</a>)</p>
		{/if}
		{if $viewing_date=="day" && $viewing_cat_name==""}
			<p id="status" class="Icon_Info">{$langs.Browsing_Month_Year_Day|replace:"<MONTH>":$month|replace:"<YEAR>":$year|replace:"<DAY>":$day}
				(<a href="/{$contentUrl}/">{$langs.Show_All}</a>)</p>
		{/if}
		{if $searching_by!=""}
			<p id="status" class="Icon_Info">
				{$langs.Searching_By|replace:"<SEARCH_TERM>":$searching_by}
				(<a href="/{$contentUrl}/">{$langs.Show_All}</a>)</p>
		{/if}
		{if $viewingtag}
			<p id="status" class="Icon_Info">{$langs.Viewing_Tag|replace:"<TAG>":$viewingtag}</p>
		{/if}
		{if $blogs}
			{foreach from=$blogs item=blog key=key name=loop}
			<div class="blogItemLoop">
					<p class="blogDate clearfix"><a href="/{$contentUrl}/{$blog.url}/">{$blog.timestamp|date_format_locale:"<strong>%A</strong>, %B %e, %Y":$language}</a></p>
				
					{if $blog.picUrl}{assign var=img value="?"|explode:$blog.picUrl}
					<a href="/{$contentUrl}/{$blog.url}/" style="display:block;line-height:0;"><img src="{$img[0]}?width=1600&height=300&shrink=false" class="blogBanner" alt="{$blog.title}"/></a>{/if}
					<h2 class='blogTitle'><a href="/{$contentUrl}/{$blog.url}/">{$blog.title}</a></h2>
				
					{assign var=temp1 value="<p"|explode:$blog.content|strip_tags}
					{assign var=temp value=">"|explode:$temp1[1]}
				
					<p><a href="/{$contentUrl}/{$blog.url}/">{$temp[1]|truncate:100:"&hellip;"}</a></p>
				
					<p class="blogReadMore"><a href="/{$contentUrl}/{$blog.url}/">Read more</a></p>


			</div>
			<!-- END LOOP -->
			{/foreach}
		
			{if $totalPages != 1}
				<div class="blogPagination">
				{if $viewing_date}
					{if $viewing_date=="day"}
					<h5 id="paginate">
						{if $currentPage == 1}
						<span class="prevLink hidden">{$langs.Previous_Page}</span>

						{else}
						<span class="prevLink"><a href="/{$contentUrl}/date/{$day}/{$month}/{$year}/{if $viewing_cat_name!=""}category/{$cat_url}/{/if}page/{math equation="x - y" x=$currentPage y=1}/"><span>{$langs.Previous_Page}</span></a></span>
						{/if}
						{if $currentPage == $totalPages}
						<span class="nextLink hidden">{$langs.Next_Page}</span>

						{else}
						<span class="nextLink"><a href="/{$contentUrl}/date/{$day}/{$month}/{$year}/{if $viewing_cat_name!=""}category/{$cat_url}/{/if}page/{math equation="x + y" x=$currentPage y=1}/"><span>{$langs.Next_Page}</span></a></span>

						{/if}
						<span class="viewing">{$langs.Viewing_Page} <strong>{$currentPage} of {$totalPages}</strong></span>

						</h5>
					{else}
						<h5 id="paginate">
						{if $currentPage == 1}
							<span class="prevLink hidden">{$langs.Previous_Page}</span>
						{else}
						<span class="prevLink"><a href="/{$contentUrl}/date/{$month}/{$year}/{if $viewing_cat_name!=""}category/{$cat_url}/{/if}page/{math equation="x - y" x=$currentPage y=1}/"><span>{$langs.Previous_Page}</span></a></span>
						{/if}
						{if $currentPage == $totalPages}
						<span class="nextLink hidden">{$langs.Next_Page}</span>
						{else}
						<span class="nextLink"><a href="/{$contentUrl}/date/{$month}/{$year}/{if $viewing_cat_name!=""}category/{$cat_url}/{/if}page/{math equation="x + y" x=$currentPage y=1}/"><span>{$langs.Next_Page}</span></a></span>

						{/if}
						<span class="viewing">{$langs.Viewing_Page} <strong>{$currentPage} of {$totalPages}</strong></span>

						</h5>
					{/if}
				{else}
					<h5 id="paginate">
					{if $currentPage == 1}
						<span class="prevLink hidden">{$langs.Previous_Page}</span>

					{else}
						<span class="prevLink"><a href="/{$contentUrl}/{if $searching_by!=""}search/{$searching_by}/{/if}{if $viewingtag}tag/{$viewingtag}/{/if}{if $viewing_cat_name!=""}category/{$cat_url}/{/if}page/{math equation="x - y" x=$currentPage y=1}/"><span>{$langs.Previous_Page}</span></a></span>
					{/if}
					{if $currentPage == $totalPages}
						<span class="nextLink hidden">{$langs.Next_Page}</span>
					{else}
					<span class="nextLink"><a href="/{$contentUrl}/{if $searching_by!=""}search/{$searching_by}/{/if}{if $viewingtag}tag/{$viewingtag}/{/if}{if $viewing_cat_name!=""}category/{$cat_url}/{/if}page/{math equation="x + y" x=$currentPage y=1}/"><span>{$langs.Next_Page}</span></a></span>

					{/if}
						<span class="viewing">{$langs.Viewing_Page} <strong>{$currentPage} of {$totalPages}</strong></span>

					</h5>
				{/if}
				</div>
			{/if}
			
		{else}
			<div class="container">
				{if $searching_by!=""}
				<h1>{$langs.No_Entries_Search}</h1>

				{else}
				<h1>{$langs.No_Entries}</h1>
				{/if}
			</div>
		{/if}

	{/if}
</div>
<div id="sidebar">
	<aside>

				<h4>{$langs.View_By_Date}</h4>
				<div id="blogCal"></div>

				{if $cats}

					<h4>{$langs.Categories}</h4>
					<ul id="blogCats">
						<li{if $viewing_cat_name=="" && $show_blog!="yes" && $viewing_date=="" && $searching_by==""} class="current"{/if}><a href="{if $content.homepage=="yes"}/{else}/{$contentUrl}/{/if}">{$langs.Show_All}</a></li>
					{foreach from=$cats item=cat key=key name=loop1}
						<li{if $viewing_cat_name==$cat.name} class="current"{/if}><a href="/{$contentUrl}/category/{$cat.url}/">{$cat.name}</a></li>
					{/foreach}</ul>

				{/if}
			
				{if $recentArticles}

					<h4>{$langs.Recent_Articles}</h4>
					<ul id="recArts">{foreach from=$recentArticles item=recArt key=key name=loop1}
						<li{if $title==$recArt.name} class="current"{/if}><a href="/{$contentUrl}/{$recArt.url}/">{$recArt.name}</a></li>
					{/foreach}</ul>

				{/if}

				{if $tagCloud}

				<h4>{$langs.Tag_Cloud}</h4>
				<ul id="tagCloud" class="clearfix">
				{foreach from=$tagCloud item=item}
					<li class="tag-{$item.ratio}"><a href="/{$contentUrl}/tag/{$item.url}/">{$item.name}</a></li>
				{/foreach}
				</ul>

				{/if}
		</aside>

</div>