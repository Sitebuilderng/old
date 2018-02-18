<?php /* Smarty version 2.6.18, created on 2017-08-03 05:12:02
         compiled from layouts/main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'layouts/main.tpl', 131, false),)), $this); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="<?php echo $this->_tpl_vars['content']['language']; ?>
"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="<?php echo $this->_tpl_vars['content']['language']; ?>
"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="<?php echo $this->_tpl_vars['content']['language']; ?>
"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="<?php echo $this->_tpl_vars['content']['language']; ?>
"> <!--<![endif]-->
<head>
<?php echo '
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
\'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,\'script\',\'dataLayer\',\'GTM-NGWSW7F\');</script>
<!-- End Google Tag Manager -->
'; ?>


	<meta charset="utf-8">
	<title><?php echo $this->_tpl_vars['content']['longtitle']; ?>
</title>
	<meta name="description" content="<?php echo $this->_tpl_vars['content']['description']; ?>
"/>

	<?php if ($this->_tpl_vars['content']['blog'] == 'yes' && $this->_tpl_vars['content']['showBlog'] != 'yes'): ?>
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo $this->_tpl_vars['server_name']; ?>
/rss/"/>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['content']['showBlog'] == 'yes'): ?>
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo $this->_tpl_vars['server_name']; ?>
/rss/<?php echo $this->_tpl_vars['url']; ?>
/"/>
	<?php endif; ?>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<script src="/javascripts/<?php echo $this->_tpl_vars['js']; ?>
.js"></script>	
	
		<script src="/javascripts/owl.carousel.min.js"></script>
	<script src="/javascripts/backstretch.js"></script>
	<script src="/javascripts/doubletaptogo.js"></script>
	
	
	<link rel="stylesheet" href="/css/<?php echo $this->_tpl_vars['css']; ?>
.css" type="text/css" charset="utf-8"/>
		<link rel="stylesheet" href="/css/print.css" type="text/css" media="print" charset="utf-8"/>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php if ($this->_tpl_vars['theme_vars_favicon'] != ""): ?>
	<link rel="shortcut icon" href="/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_favicon']; ?>
">
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_apple_touch'] != ""): ?>
	<link rel="apple-touch-icon" href="/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_apple_touch']; ?>
">
	<?php endif; ?>

	<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->
	
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	
</head>
<body class="page_<?php echo $this->_tpl_vars['content']['url']; ?>
 <?php echo $this->_tpl_vars['content']['parent']; ?>
 <?php echo $this->_tpl_vars['content']['topParent']; ?>
 id_<?php echo $this->_tpl_vars['content']['id']; ?>
 <?php if ($this->_tpl_vars['theme_vars_windowbgimage']): ?>withBigBG<?php endif; ?>" <?php if ($this->_tpl_vars['theme_vars_windowbgimage']): ?>bgimage="/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_windowbgimage']; ?>
?width=1920"<?php endif; ?>>
<?php echo '
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NGWSW7F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
'; ?>

<?php if ($this->_tpl_vars['content']['contentSplit']['Hidden_Sidebar']): ?>
	<div id="hiddenSidebar">
		<div class="close"></div>
		<?php echo $this->_tpl_vars['content']['contentSplit']['Hidden_Sidebar']; ?>

	</div>
<?php endif; ?>
<div id="bg">
	<div id="header">
		<?php if ($this->_tpl_vars['loggedIn'] || $this->_tpl_vars['content']['languages_in_use'] || $this->_tpl_vars['theme_vars_contactbar']): ?>
		<div id="topbar">
			<div class="container">
				<?php if ($this->_tpl_vars['theme_vars_facebook_link'] || $this->_tpl_vars['theme_vars_gplus_link'] || $this->_tpl_vars['theme_vars_linkedin_link'] || $this->_tpl_vars['theme_vars_pinterest_link'] || $this->_tpl_vars['theme_vars_twitter_user_name'] || $this->_tpl_vars['theme_vars_youtube_link'] || $this->_tpl_vars['theme_vars_vimeo_link']): ?>
				<div class="socialIconsTiny header">
					<?php if ($this->_tpl_vars['theme_vars_facebook_link']): ?><a href="<?php echo $this->_tpl_vars['theme_vars_facebook_link']; ?>
" title="Facebook"><img src="/graphics/social-small-facebook.gif" alt=""/></a><?php endif; ?>
					<?php if ($this->_tpl_vars['theme_vars_gplus_link']): ?><a href="<?php echo $this->_tpl_vars['theme_vars_gplus_link']; ?>
" title="Google+"><img src="/graphics/social-small-gplus.png" alt=""/></a><?php endif; ?>
					<?php if ($this->_tpl_vars['theme_vars_linkedin_link']): ?><a href="<?php echo $this->_tpl_vars['theme_vars_linkedin_link']; ?>
" title="LinkedIn"><img src="/graphics/social-small-linkedin.jpeg" alt=""/></a><?php endif; ?>
					<?php if ($this->_tpl_vars['theme_vars_pinterest_link']): ?><a href="<?php echo $this->_tpl_vars['theme_vars_pinterest_link']; ?>
" title="Pinterest"><img src="/graphics/social-small-pinterest.png" alt=""/></a><?php endif; ?>
					<?php if ($this->_tpl_vars['theme_vars_twitter_user_name']): ?><a href="http://twitter.com/<?php echo $this->_tpl_vars['theme_vars_twitter_user_name']; ?>
" title="Twitter"><img src="/graphics/social-small-twitter.gif" alt=""/></a><?php endif; ?>
					<?php if ($this->_tpl_vars['theme_vars_youtube_link']): ?><a href="<?php echo $this->_tpl_vars['theme_vars_youtube_link']; ?>
" title="YouTube"><img src="/graphics/social-small-youtube.png" alt=""/></a><?php endif; ?>
					<?php if ($this->_tpl_vars['theme_vars_vimeo_link']): ?><a href="<?php echo $this->_tpl_vars['theme_vars_vimeo_link']; ?>
" title="Vimeo"><img src="/graphics/social-small-vimeo.png" alt=""/></a><?php endif; ?>
				</div>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['sitewideContent']['Header_Line']): ?>
					<div id="contact">
					<?php echo $this->_tpl_vars['sitewideContent']['Header_Line']; ?>

					</div>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['loggedIn']): ?><p id="loggedIn" class="Button_Small"><a href="/actions/Logout/"><?php echo $this->_tpl_vars['langs']['Logout']; ?>
</a></p><?php endif; ?>

				<?php if ($this->_tpl_vars['content']['languages_in_use']): ?>
					<ul id="languages">
						<?php $_from = $this->_tpl_vars['content']['languages_in_use']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang']):
?>
						<li><a href="<?php echo $this->_tpl_vars['lang']['1']; ?>
" class=""><?php echo $this->_tpl_vars['lang']['3']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				<?php endif; ?>
			</div>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "nav/nav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
		<?php else: ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "nav/nav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['content']['contentSplit']['Header']): ?>
			<div class="container" id="headerContent">
			<?php echo $this->_tpl_vars['content']['contentSplit']['Header']; ?>

			</div>
		<?php endif; ?>
	</div>
	<?php if ($this->_tpl_vars['security']): ?>
		<div class="container">
			<section class="fullWidth">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/login.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</section>
		</div>

	<?php else: ?>
		
		<?php if (count($this->_tpl_vars['staticSubs']) > 0 && $this->_tpl_vars['theme_vars_sidebar_menu'] != 'none' && $this->_tpl_vars['content']['url'] != 'support'): ?>

			<div class="container">

				<section id="main" class="withSidebarNav">
				<?php echo $this->_tpl_vars['content']['contentSplit']['normal']; ?>

				
				<?php if ($this->_tpl_vars['content']['contentSplit']['normal'] == ""): ?>&nbsp;<?php endif; ?>
				
				</section>

				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "nav/side-bar-sub-menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 

			</div>

		<?php else: ?>
		<div class="mainWrap">
			<div class="container">
				
				<section class="fullWidth">
				
				<?php echo $this->_tpl_vars['content']['contentSplit']['normal']; ?>

				<?php if ($this->_tpl_vars['content']['url'] == 'support'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "nav/kb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/search-results.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

				</section>
			</div>
		</div>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['content']['contentSplit']['Background_Section_Content']): ?>
		<div id="fullWidthBanner">
			<div id="fullWidthBannerBG"><?php echo $this->_tpl_vars['content']['contentSplit']['Background_Section_Image']; ?>
</div>
			<div class="container"><?php echo $this->_tpl_vars['content']['contentSplit']['Background_Section_Content']; ?>
</div>
		</div>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['content']['contentSplit']['Below_Background_Section']): ?>
		<div id="belowFullWidthBanner">
			<div class="container"><?php echo $this->_tpl_vars['content']['contentSplit']['Below_Background_Section']; ?>
</div>
		</div>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['content']['contentSplit']['Above_Footer']): ?>
		<div id="aboveFooter">
			<div class="container"><?php echo $this->_tpl_vars['content']['contentSplit']['Above_Footer']; ?>
</div>
		</div>
		<?php endif; ?>
		
	<?php endif; ?>
	<div id="footerWrap">
		<footer>
			<div class="container">
			<?php if ($this->_tpl_vars['content']['contentSplit']['Footer'] != ""): ?>
				<?php echo $this->_tpl_vars['content']['contentSplit']['Footer']; ?>

			<?php else: ?>
				<?php echo $this->_tpl_vars['sitewideContent']['Footer']; ?>

			<?php endif; ?>
			</div>
		</footer>
		<footer id="closing">
			<div class="container">
				<div id="closingRight">
				<?php echo $this->_tpl_vars['sitewideContent']['Closing_Footer_Right']; ?>

				</div>
				<?php echo $this->_tpl_vars['sitewideContent']['Closing_Footer']; ?>

			</div>
		</footer>
	</div>
</div>
<a href="#" id="backToTop"></a>
<div id="loading"></div>
</body>
</html>