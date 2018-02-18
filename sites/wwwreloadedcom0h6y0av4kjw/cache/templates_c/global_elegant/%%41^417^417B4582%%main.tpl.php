<?php /* Smarty version 2.6.18, created on 2017-08-06 08:20:25
         compiled from layouts/main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'explode', 'layouts/main.tpl', 11, false),array('modifier', 'strip_tags_exclude', 'layouts/main.tpl', 11, false),array('modifier', 'str_rot13', 'layouts/main.tpl', 108, false),array('modifier', 'count', 'layouts/main.tpl', 152, false),)), $this); ?>
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
		<meta charset="utf-8">
	<?php $this->assign('h1', ((is_array($_tmp=((is_array($_tmp="<h1")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['content']['content']) : explode($_tmp, $this->_tpl_vars['content']['content'])))) ? $this->_run_mod_handler('strip_tags_exclude', true, $_tmp, "<h1>") : smarty_modifier_strip_tags_exclude($_tmp, "<h1>"))); ?>
	<?php $this->assign('h1', ((is_array($_tmp=">")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['h1'][1]) : explode($_tmp, $this->_tpl_vars['h1'][1]))); ?>
	<?php $this->assign('h1', ((is_array($_tmp="</h1")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['h1'][1]) : explode($_tmp, $this->_tpl_vars['h1'][1]))); ?>
	<?php $this->assign('h1', $this->_tpl_vars['h1'][0]); ?>
	
	<?php $this->assign('h2', ((is_array($_tmp=((is_array($_tmp="<h2")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['content']['content']) : explode($_tmp, $this->_tpl_vars['content']['content'])))) ? $this->_run_mod_handler('strip_tags_exclude', true, $_tmp, "<h2>") : smarty_modifier_strip_tags_exclude($_tmp, "<h2>"))); ?>
	<?php $this->assign('h2', ((is_array($_tmp=">")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['h2'][1]) : explode($_tmp, $this->_tpl_vars['h2'][1]))); ?>
	<?php $this->assign('h2', ((is_array($_tmp="</h2")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['h2'][1]) : explode($_tmp, $this->_tpl_vars['h2'][1]))); ?>
	<?php $this->assign('h2', $this->_tpl_vars['h2'][0]); ?>
	
	<?php $this->assign('p', ((is_array($_tmp=((is_array($_tmp="<p")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['content']['content']) : explode($_tmp, $this->_tpl_vars['content']['content'])))) ? $this->_run_mod_handler('strip_tags_exclude', true, $_tmp, "<p>") : smarty_modifier_strip_tags_exclude($_tmp, "<p>"))); ?>
	<?php $this->assign('p', ((is_array($_tmp=">")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['p'][1]) : explode($_tmp, $this->_tpl_vars['p'][1]))); ?>
	<?php $this->assign('p', ((is_array($_tmp="</p")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['p'][1]) : explode($_tmp, $this->_tpl_vars['p'][1]))); ?>
	<?php $this->assign('p', $this->_tpl_vars['p'][0]); ?>
	
	<?php $this->assign('li', ((is_array($_tmp=((is_array($_tmp="<li")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['content']['content']) : explode($_tmp, $this->_tpl_vars['content']['content'])))) ? $this->_run_mod_handler('strip_tags_exclude', true, $_tmp, "<li>") : smarty_modifier_strip_tags_exclude($_tmp, "<li>"))); ?>
	<?php $this->assign('li', ((is_array($_tmp=">")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['li'][1]) : explode($_tmp, $this->_tpl_vars['li'][1]))); ?>
	<?php $this->assign('li', ((is_array($_tmp="</li")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['li'][1]) : explode($_tmp, $this->_tpl_vars['li'][1]))); ?>
	<?php $this->assign('li', $this->_tpl_vars['li'][0]); ?>

	<title><?php if ($this->_tpl_vars['content']['longtitle'] != "" && $this->_tpl_vars['content']['longtitle'] != $this->_tpl_vars['content']['title']): ?><?php echo $this->_tpl_vars['content']['longtitle']; ?>
<?php else: ?><?php if ($this->_tpl_vars['h1'] != ""): ?><?php echo $this->_tpl_vars['h1']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['h1'] == ""): ?><?php echo $this->_tpl_vars['h2']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['h2'] == "" && $this->_tpl_vars['h1'] == ""): ?><?php echo $this->_tpl_vars['p']; ?>
<?php endif; ?> - <?php echo $this->_tpl_vars['theme_vars_meta_title_append']; ?>
<?php endif; ?></title>
	<meta name="description" content="<?php if ($this->_tpl_vars['content']['description'] != ""): ?><?php echo $this->_tpl_vars['content']['description']; ?>
<?php else: ?><?php echo $this->_tpl_vars['h1']; ?>
<?php if ($this->_tpl_vars['h2'] != ""): ?> - <?php echo $this->_tpl_vars['h2']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['h2'] == ""): ?> - <?php echo $this->_tpl_vars['p']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['p'] == ""): ?> - <?php echo $this->_tpl_vars['li']; ?>
<?php endif; ?><?php endif; ?>"/>

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
	
	<link href='http://fonts.googleapis.com/css?family=Mako|Fjord+One' rel='stylesheet' type='text/css'>
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

</head>
<body class="<?php if ($this->_tpl_vars['LIMIT_PAGES'] == 3): ?>withAd<?php endif; ?> <?php if ($this->_tpl_vars['content']['homepage']): ?>homepage<?php endif; ?> page_<?php echo $this->_tpl_vars['content']['url']; ?>
 <?php echo $this->_tpl_vars['content']['parent']; ?>
 <?php echo $this->_tpl_vars['content']['topParent']; ?>
 id_<?php echo $this->_tpl_vars['content']['id']; ?>
 <?php if ($this->_tpl_vars['theme_vars_windowbgimage']): ?>withBigBG<?php endif; ?>" <?php if ($this->_tpl_vars['theme_vars_windowbgimage']): ?>bgimage="/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_windowbgimage']; ?>
?width=1920"<?php endif; ?> data-bg-mode="<?php echo $this->_tpl_vars['theme_vars_background_mode']; ?>
">
<div id="bg">
	<div id="mainBg">
	
		<?php if ($this->_tpl_vars['loggedIn'] || $this->_tpl_vars['content']['languages_in_use'] || $this->_tpl_vars['theme_vars_contactbar']): ?>
		<div id="topbar">
			<div class="container">
				<?php if ($this->_tpl_vars['theme_vars_facebook_link'] || $this->_tpl_vars['theme_vars_gplus_link'] || $this->_tpl_vars['theme_vars_linkedin_link'] || $this->_tpl_vars['theme_vars_pinterest_link'] || $this->_tpl_vars['theme_vars_twitter_user_name'] || $this->_tpl_vars['theme_vars_youtube_link'] || $this->_tpl_vars['theme_vars_vimeo_link']): ?>
				<div class="socialIconsTiny header">
					<?php if ($this->_tpl_vars['theme_vars_facebook_link']): ?><a href="<?php echo $this->_tpl_vars['theme_vars_facebook_link']; ?>
" title="Facebook"><img src="/graphics/social-small-facebook.png" alt=""/></a><?php endif; ?>
					<?php if ($this->_tpl_vars['theme_vars_gplus_link']): ?><a href="<?php echo $this->_tpl_vars['theme_vars_gplus_link']; ?>
" title="Google+"><img src="/graphics/social-small-gplus.png" alt=""/></a><?php endif; ?>
					<?php if ($this->_tpl_vars['theme_vars_linkedin_link']): ?><a href="<?php echo $this->_tpl_vars['theme_vars_linkedin_link']; ?>
" title="LinkedIn"><img src="/graphics/social-small-linkedin.png" alt=""/></a><?php endif; ?>
					<?php if ($this->_tpl_vars['theme_vars_pinterest_link']): ?><a href="<?php echo $this->_tpl_vars['theme_vars_pinterest_link']; ?>
" title="Pinterest"><img src="/graphics/social-small-pinterest.png" alt=""/></a><?php endif; ?>
					<?php if ($this->_tpl_vars['theme_vars_twitter_user_name']): ?><a href="http://twitter.com/<?php echo $this->_tpl_vars['theme_vars_twitter_user_name']; ?>
" title="Twitter"><img src="/graphics/social-small-twitter.png" alt=""/></a><?php endif; ?>
					<?php if ($this->_tpl_vars['theme_vars_youtube_link']): ?><a href="<?php echo $this->_tpl_vars['theme_vars_youtube_link']; ?>
" title="YouTube"><img src="/graphics/social-small-youtube.png" alt=""/></a><?php endif; ?>
					<?php if ($this->_tpl_vars['theme_vars_vimeo_link']): ?><a href="<?php echo $this->_tpl_vars['theme_vars_vimeo_link']; ?>
" title="Vimeo"><img src="/graphics/social-small-vimeo.png" alt=""/></a><?php endif; ?>
				</div>
				<?php endif; ?>
				<div id="contact">	
					<ul>
					<?php if ($this->_tpl_vars['theme_vars_phone_number'] != ""): ?>
					<li class="Icon_Phone">
						<?php echo $this->_tpl_vars['theme_vars_phone_number']; ?>

					</li>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['theme_vars_email_address'] != ""): ?>
					<li class="Icon_Email">
						<?php ob_start(); ?><a href="mailto:<?php echo $this->_tpl_vars['theme_vars_email_address']; ?>
"><?php echo $this->_tpl_vars['theme_vars_email_address']; ?>
<?php $this->_smarty_vars['capture']['email_link'] = ob_get_contents(); ob_end_clean(); ?>

						<script type="text/javascript">document.write(
						'<?php echo ((is_array($_tmp=$this->_smarty_vars['capture']['email_link'])) ? $this->_run_mod_handler('str_rot13', true, $_tmp) : str_rot13($_tmp)); ?>
'.replace(/[a-zA-Z]/g, function(c)<?php echo '{return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));'; ?>

						</script>

						</a>
					</li>
					<?php endif; ?>
					<li id="livechat" class="Icon_Livechat" style="display:none"><a href="/livechat/convo.php?language=<?php echo $this->_tpl_vars['content']['language']; ?>
" id="startConvo"><?php echo $this->_tpl_vars['langs']['Livechat']; ?>
</a>
					</li>
					</ul>
				</div>
				
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
		
		<br class="clear" />
		<?php if (! $this->_tpl_vars['content']['blog']): ?>
		
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
				<?php if ($this->_tpl_vars['content']['contentSplit']['Full_Width_Banner_Content'] || $this->_tpl_vars['content']['contentSplit']['Full_Width_Banner_Background_Image']): ?>
				<div id="fullWidthBanner">
					<div id="fullWidthBannerBG"><?php echo $this->_tpl_vars['content']['contentSplit']['Full_Width_Banner_Background_Image']; ?>
</div>
					<div class="container"><?php echo $this->_tpl_vars['content']['contentSplit']['Full_Width_Banner_Content']; ?>
</div>
				</div>
				<?php endif; ?>
				<?php if (count($this->_tpl_vars['staticSubs']) > 0 && $this->_tpl_vars['theme_vars_sidebar_menu'] != 'none'): ?>

					<div class="container" id="centerBg">

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
					<?php if ($this->_tpl_vars['content']['contentSplit']['normal'] || $this->_tpl_vars['search_all']): ?>
					<div class="container" id="centerBg">
						
						<section class="fullWidth">
						
						<?php echo $this->_tpl_vars['content']['contentSplit']['normal']; ?>

						
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/search-results.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

						</section>

					</div>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
			</div> <!-- #mainBg -->
			<div id="footers" data-background="/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_footerbgimage']; ?>
" data-bg-mode="<?php echo $this->_tpl_vars['theme_vars_footer_background_mode']; ?>
">
				<?php if ($this->_tpl_vars['content']['contentSplit']['Footer'] || $this->_tpl_vars['sitewideContent']['Footer'] || $this->_tpl_vars['content']['homepage'] != 'yes'): ?>
				<footer id="mainFooter">
					<div class="container">
				
					<?php if ($this->_tpl_vars['content']['contentSplit']['Footer'] != ""): ?>
						<?php echo $this->_tpl_vars['content']['contentSplit']['Footer']; ?>

					<?php else: ?>
						<?php echo $this->_tpl_vars['sitewideContent']['Footer']; ?>

					<?php endif; ?>
					<?php if ($this->_tpl_vars['content']['homepage'] != 'yes'): ?>
						<p id="breadcrumb"><?php echo $this->_tpl_vars['breadcrumb']; ?>
</p>
					<?php endif; ?>
					</div>
				</footer>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['sitewideContent']['Closing_Footer_Right'] || $this->_tpl_vars['sitewideContent']['Closing_Footer']): ?>
				<footer id="closing">
					<div class="container">
						<div id="closingRight">
						<?php echo $this->_tpl_vars['sitewideContent']['Closing_Footer_Right']; ?>

					</div>
						<?php echo $this->_tpl_vars['sitewideContent']['Closing_Footer']; ?>

					</div>
				</footer>	
				<?php endif; ?>
			</div>
		<?php else: ?>
			</div> <!-- #mainBg -->
			
			<?php if ($this->_tpl_vars['content']['contentSplit']['Full_Width_Banner_Content'] || $this->_tpl_vars['content']['contentSplit']['Full_Width_Banner_Background_Image']): ?>
			<div id="fullWidthBanner" class="withBlog">
				<div id="fullWidthBannerBG"><?php echo $this->_tpl_vars['content']['contentSplit']['Full_Width_Banner_Background_Image']; ?>
</div>
				<div class="container"><?php echo $this->_tpl_vars['content']['contentSplit']['Full_Width_Banner_Content']; ?>
</div>
			</div>
			<?php endif; ?>
			<?php echo $this->_tpl_vars['content']['contentSplit']['normal']; ?>

	<?php endif; ?>
</div> <!-- #bg -->
<a href="#" id="backToTop"></a>
<div id="loading"></div>
<?php if ($this->_tpl_vars['LIMIT_PAGES'] == 3): ?>
<div id="ad">
	<a href="#">Get your own FREE website today.</a>
</div>
<?php endif; ?>
</body>
</html>