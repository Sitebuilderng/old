<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="{$content.language}"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="{$content.language}"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="{$content.language}"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="{$content.language}"> <!--<![endif]-->
<head>
{literal}
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NGWSW7F');</script>
<!-- End Google Tag Manager -->
{/literal}

	<meta charset="utf-8">
	<title>{$content.longtitle}</title>
	<meta name="description" content="{$content.description}"/>

	{if $content.blog=="yes" && $content.showBlog!="yes"}
	<link rel="alternate" type="application/rss+xml" title="RSS" href="{$server_name}/rss/"/>
	{/if}
	{if $content.showBlog=="yes"}
	<link rel="alternate" type="application/rss+xml" title="RSS" href="{$server_name}/rss/{$url}/"/>
	{/if}

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<script src="/javascripts/{$js}.js"></script>	
	
	{* 
	IMPORTANT:
	Do not delete the above javascript reference. It is necesary for many core CMS feature, form submission, loading caledars, loading blog comments, handling video and galleries, etc. The 'custom.js' file in a theme's 'javascripts' folder is automatically added to the above javascript file. 
	*}
	<script src="/javascripts/owl.carousel.min.js"></script>
	<script src="/javascripts/backstretch.js"></script>
	<script src="/javascripts/doubletaptogo.js"></script>
	
	
	<link rel="stylesheet" href="/css/{$css}.css" type="text/css" charset="utf-8"/>
	{*
	IMPORTANT:
	The above css file is dynamically generated from the files in the theme's css folder, in the order specified in the theme's css/files.csv file. You can also references files individually if you want, just use the path: /css/yourfile.css - obviously keep the files in your site's theme's css folder though - don't put it in the actual /css/ folder in your document root! 
	*}
	<link rel="stylesheet" href="/css/print.css" type="text/css" media="print" charset="utf-8"/>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	{if $theme_vars_favicon!=""}
	<link rel="shortcut icon" href="/images/themegraphics/{$theme_vars_favicon}">
	{/if}
	{if $theme_vars_apple_touch!=""}
	<link rel="apple-touch-icon" href="/images/themegraphics/{$theme_vars_apple_touch}">
	{/if}

	<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->
	
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	
</head>
<body class="page_{$content.url} {$content.parent} {$content.topParent} id_{$content.id} {if $theme_vars_windowbgimage}withBigBG{/if}" {if $theme_vars_windowbgimage}bgimage="/images/themegraphics/{$theme_vars_windowbgimage}?width=1920"{/if}>
{literal}
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NGWSW7F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
{/literal}
{if $content.contentSplit.Hidden_Sidebar}
	<div id="hiddenSidebar">
		<div class="close"></div>
		{$content.contentSplit.Hidden_Sidebar}
	</div>
{/if}
<div id="bg">
	<div id="header">
		{if $loggedIn||$content.languages_in_use||$theme_vars_contactbar}
		<div id="topbar">
			<div class="container">
				{if $theme_vars_facebook_link||$theme_vars_gplus_link||$theme_vars_linkedin_link||$theme_vars_pinterest_link||$theme_vars_twitter_user_name||$theme_vars_youtube_link||$theme_vars_vimeo_link}
				<div class="socialIconsTiny header">
					{if $theme_vars_facebook_link}<a href="{$theme_vars_facebook_link}" title="Facebook"><img src="/graphics/social-small-facebook.gif" alt=""/></a>{/if}
					{if $theme_vars_gplus_link}<a href="{$theme_vars_gplus_link}" title="Google+"><img src="/graphics/social-small-gplus.png" alt=""/></a>{/if}
					{if $theme_vars_linkedin_link}<a href="{$theme_vars_linkedin_link}" title="LinkedIn"><img src="/graphics/social-small-linkedin.jpeg" alt=""/></a>{/if}
					{if $theme_vars_pinterest_link}<a href="{$theme_vars_pinterest_link}" title="Pinterest"><img src="/graphics/social-small-pinterest.png" alt=""/></a>{/if}
					{if $theme_vars_twitter_user_name}<a href="http://twitter.com/{$theme_vars_twitter_user_name}" title="Twitter"><img src="/graphics/social-small-twitter.gif" alt=""/></a>{/if}
					{if $theme_vars_youtube_link}<a href="{$theme_vars_youtube_link}" title="YouTube"><img src="/graphics/social-small-youtube.png" alt=""/></a>{/if}
					{if $theme_vars_vimeo_link}<a href="{$theme_vars_vimeo_link}" title="Vimeo"><img src="/graphics/social-small-vimeo.png" alt=""/></a>{/if}
				</div>
				{/if}
				{if $sitewideContent.Header_Line}
					<div id="contact">
					{$sitewideContent.Header_Line}
					</div>
				{/if}
				{if $loggedIn}<p id="loggedIn" class="Button_Small"><a href="/actions/Logout/">{$langs.Logout}</a></p>{/if}

				{if $content.languages_in_use}
					<ul id="languages">
						{foreach from=$content.languages_in_use item=lang}
						<li><a href="{$lang.1}" class="">{$lang.3}</a></li>
						{/foreach}
					</ul>
				{/if}
			</div>
			{include file=nav/nav.tpl}
		</div>
		{else}
			{include file=nav/nav.tpl}
		{/if}
		{if $content.contentSplit.Header}
			<div class="container" id="headerContent">
			{$content.contentSplit.Header}
			</div>
		{/if}
	</div>
	{if $security}
		<div class="container">
			<section class="fullWidth">
			{include file=includes/login.tpl}
			</section>
		</div>

	{else}
		
		{if $staticSubs|@count>0 && $theme_vars_sidebar_menu!="none" && $content.url!="support"}

			<div class="container">

				<section id="main" class="withSidebarNav">
				{$content.contentSplit.normal}
				
				{if $content.contentSplit.normal==""}&nbsp;{/if}
				{* The above line is just to keep the floated layout in place if now content is added yet *}

				</section>

				{include file=nav/side-bar-sub-menu.tpl} 

			</div>

		{else}
		<div class="mainWrap">
			<div class="container">
				
				<section class="fullWidth">
				
				{$content.contentSplit.normal}
				{if $content.url == "support"}
				{include file=nav/kb.tpl}
				{/if}
				{include file=includes/search-results.tpl}

				</section>
			</div>
		</div>
		{/if}
		{if $content.contentSplit.Background_Section_Content}
		<div id="fullWidthBanner">
			<div id="fullWidthBannerBG">{$content.contentSplit.Background_Section_Image}</div>
			<div class="container">{$content.contentSplit.Background_Section_Content}</div>
		</div>
		{/if}
		{if $content.contentSplit.Below_Background_Section}
		<div id="belowFullWidthBanner">
			<div class="container">{$content.contentSplit.Below_Background_Section}</div>
		</div>
		{/if}
		{if $content.contentSplit.Above_Footer}
		<div id="aboveFooter">
			<div class="container">{$content.contentSplit.Above_Footer}</div>
		</div>
		{/if}
		
	{/if}
	<div id="footerWrap">
		<footer>
			<div class="container">
			{if $content.contentSplit.Footer!=""}
				{$content.contentSplit.Footer}
			{else}
				{$sitewideContent.Footer}
			{/if}
			</div>
		</footer>
		<footer id="closing">
			<div class="container">
				<div id="closingRight">
				{$sitewideContent.Closing_Footer_Right}
				</div>
				{$sitewideContent.Closing_Footer}
			</div>
		</footer>
	</div>
</div>
<a href="#" id="backToTop"></a>
<div id="loading"></div>
</body>
</html>