{* Define main URL and Title *}
{assign var=siteurl value="http://www.example.com"}
{assign var=metatitleappend value="EXAMPLE COMPANY, AND SLOGAN"}
{assign var=sitetitle value="EXAMPLE COMPANY"}
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="{$content.language}"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="{$content.language}"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="{$content.language}"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="{$content.language}"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	{include file=includes/meta_titles.tpl}

	{include file=includes/meta_fb.tpl}

	{include file=includes/meta_twitter.tpl}

	{include file=includes/meta_icons.tpl}

	{if $content.blog=="yes" && $content.showBlog!="yes"}
	<link rel="alternate" type="application/rss+xml" title="RSS" href="{$server_name}/rss/"/>
	{/if}
	{if $content.showBlog=="yes"}
	<link rel="alternate" type="application/rss+xml" title="RSS" href="{$server_name}/rss/{$url}/"/>
	{/if}

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<script src="/javascripts/{$js}.js"></script> {* Includes core functions. Do not delete. Add custom jquery in ~/javascripts/custom.js and it will be included via this reference. *}

	<script src="/javascripts/owl.carousel.min.js"></script>
	<script src="/javascripts/backstretch.js"></script>
	<script src="/javascripts/doubletaptogo.js"></script>
	<script src="/javascripts/overlaps.js"></script>

	<link rel="stylesheet" href="/css/{$css}.css" type="text/css" charset="utf-8"/> {* Automically combined and generated from files listed ~/css/files.json *}

	<link rel="stylesheet" href="/css/print.css" type="text/css" media="print" charset="utf-8"/>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->

	{* 	Add custom inline javascript like Analytics tracking code inside the 'literal' tags below. Any raw javascript needs to be wrapped in these tags when used in Smarty templates. *}
	{literal}

	{/literal}
</head>
<body class="{if $content.homepage}homepage{/if} page_{$content.url} parent_{$content.parent} top_parent_{$content.topParent} page_id_{$content.id}">

	{*

		Create the template using containers, sections and modules. A basic example is added below. See this page for help:
		http://setseed.com/support/using-the-super-skeleton-theme/
	*}


	<div class="container ontop">

		<section class="row flexibreak-big" data-flexibreak-small="navsmall">

			{include file=modules/logo.tpl
				align=left
			}

			{include file=modules/social_links.tpl
				valign=top
				align=right
				style=icons
			}
			{include file=modules/livechat_link.tpl
				valign=top
				align=right
			}

			{include file=modules/nav.tpl
				align=right
				valign=bottom
			}

		</section>
		<section
		    class="row flexibreak-small"
		    id="navsmall">
		    {include file=modules/mobile_nav.tpl
		        align=left
		    }
		</section>
	</div>


	{if $security}
		<div class="container content">
			<section class="row" >
			{include file=includes/login.tpl assign=login}
			{include file=modules/content_block.tpl
				content=$login
			}
			</section>
		</div>
	{else}
	{if $templateSections.Banner||$templateSections.Banner_Background}
	<div class="container" id="banner"
			data-backgrounds="{$templateSections.Banner_Background|images_to_json:false|htmlspecialchars}"
			data-background-fade="3000"
			data-background-duration="5000"
			data-background-color="#fff"
			data-background-opacity="1"
			data-scroll-decay="0.5">
		<section class="row clearfix" data-min-height="400">
			{include file=modules/content_block.tpl
				content=$templateSections.Banner
			}
		</section>
	</div>
	{/if}
		<div class="container content">
			{if $templateSections.normal||$search_all}
			<section class="row clearfix">
				{capture assign=normal}
					{if $search_all}
						<h1>Search</h1>
						{include file=includes/search_results.tpl}
					{/if}

					{$content.contentSplit.normal}
				{/capture}
				{include file=modules/content_block.tpl
					content=$normal
				}
			</section>
			{/if}
		</div>
	{/if}

	<div id="search-form-popdown">
		<div class="tri"></div>
		<form action="/actions/SearchForward/" method="post" id="searchFormSmall">
			<input type="hidden" name="language" value="{$content.language}"/>
			<input id="navSearch" type="text" name="string" value="" />
			<p id="search-form-popdown-button" class="submit_form"><a href="#">{$langs.Search}</a></p>
		</form>
	</div>
</body>
</html>
