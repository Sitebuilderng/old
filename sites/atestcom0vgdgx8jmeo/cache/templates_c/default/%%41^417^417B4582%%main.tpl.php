<?php /* Smarty version 2.6.18, created on 2017-07-29 08:41:39
         compiled from layouts/main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'images_to_json', 'layouts/main.tpl', 100, false),array('modifier', 'htmlspecialchars', 'layouts/main.tpl', 100, false),)), $this); ?>
<?php $this->assign('siteurl', "http://www.example.com"); ?>
<?php $this->assign('metatitleappend', "EXAMPLE COMPANY, AND SLOGAN"); ?>
<?php $this->assign('sitetitle', 'EXAMPLE COMPANY'); ?>
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

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/meta_titles.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/meta_fb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/meta_twitter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/meta_icons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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
	<script src="/javascripts/overlaps.js"></script>

	<link rel="stylesheet" href="/css/<?php echo $this->_tpl_vars['css']; ?>
.css" type="text/css" charset="utf-8"/> 
	<link rel="stylesheet" href="/css/print.css" type="text/css" media="print" charset="utf-8"/>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->

		<?php echo '

	'; ?>

</head>
<body class="<?php if ($this->_tpl_vars['content']['homepage']): ?>homepage<?php endif; ?> page_<?php echo $this->_tpl_vars['content']['url']; ?>
 parent_<?php echo $this->_tpl_vars['content']['parent']; ?>
 top_parent_<?php echo $this->_tpl_vars['content']['topParent']; ?>
 page_id_<?php echo $this->_tpl_vars['content']['id']; ?>
">

	

	<div class="container ontop">

		<section class="row flexibreak-big" data-flexibreak-small="navsmall">

			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/logo.tpl", 'smarty_include_vars' => array('align' => 'left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('valign' => 'top','align' => 'right','style' => 'icons')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/livechat_link.tpl", 'smarty_include_vars' => array('valign' => 'top','align' => 'right')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/nav.tpl", 'smarty_include_vars' => array('align' => 'right','valign' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		</section>
		<section
		    class="row flexibreak-small"
		    id="navsmall">
		    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/mobile_nav.tpl", 'smarty_include_vars' => array('align' => 'left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</section>
	</div>


	<?php if ($this->_tpl_vars['security']): ?>
		<div class="container content">
			<section class="row" >
			<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/login.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('login', ob_get_contents()); ob_end_clean();
 ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['login'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</section>
		</div>
	<?php else: ?>
	<?php if ($this->_tpl_vars['templateSections']['Banner'] || $this->_tpl_vars['templateSections']['Banner_Background']): ?>
	<div class="container" id="banner"
			data-backgrounds="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['templateSections']['Banner_Background'])) ? $this->_run_mod_handler('images_to_json', true, $_tmp, false) : smarty_modifier_images_to_json($_tmp, false)))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
			data-background-fade="3000"
			data-background-duration="5000"
			data-background-color="#fff"
			data-background-opacity="1"
			data-scroll-decay="0.5">
		<section class="row clearfix" data-min-height="400">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['templateSections']['Banner'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</section>
	</div>
	<?php endif; ?>
		<div class="container content">
			<?php if ($this->_tpl_vars['templateSections']['normal'] || $this->_tpl_vars['search_all']): ?>
			<section class="row clearfix">
				<?php ob_start(); ?>
					<?php if ($this->_tpl_vars['search_all']): ?>
						<h1>Search</h1>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/search_results.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>

					<?php echo $this->_tpl_vars['content']['contentSplit']['normal']; ?>

				<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('normal', ob_get_contents());ob_end_clean(); ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['normal'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</section>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<div id="search-form-popdown">
		<div class="tri"></div>
		<form action="/actions/SearchForward/" method="post" id="searchFormSmall">
			<input type="hidden" name="language" value="<?php echo $this->_tpl_vars['content']['language']; ?>
"/>
			<input id="navSearch" type="text" name="string" value="" />
			<p id="search-form-popdown-button" class="submit_form"><a href="#"><?php echo $this->_tpl_vars['langs']['Search']; ?>
</a></p>
		</form>
	</div>
</body>
</html>