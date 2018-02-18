<?php /* Smarty version 2.6.18, created on 2017-07-18 22:50:14
         compiled from layouts/main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'layouts/main.tpl', 2, false),array('modifier', 'images_to_json', 'layouts/main.tpl', 1598, false),array('modifier', 'htmlspecialchars', 'layouts/main.tpl', 1598, false),array('modifier', 'explode', 'layouts/main.tpl', 1624, false),)), $this); ?>
<?php if ($_REQUEST['app']): ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['content']['contentSplit']['normal'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'src="/', "src=\"http://".($this->_tpl_vars['content']['http_host'])."/") : smarty_modifier_replace($_tmp, 'src="/', "src=\"http://".($this->_tpl_vars['content']['http_host'])."/")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'action="/', "action=\"http://".($this->_tpl_vars['content']['http_host'])."/") : smarty_modifier_replace($_tmp, 'action="/', "action=\"http://".($this->_tpl_vars['content']['http_host'])."/")))) ? $this->_run_mod_handler('replace', true, $_tmp, 'href="/', "href=\"http://".($this->_tpl_vars['content']['http_host'])."/") : smarty_modifier_replace($_tmp, 'href="/', "href=\"http://".($this->_tpl_vars['content']['http_host'])."/")); ?>
<?php else: ?>
<?php $this->assign('siteurl', "http://".($this->_tpl_vars['content']['http_host'])); ?>
<?php $this->assign('metatitleappend', $this->_tpl_vars['theme_vars_meta_title_append']); ?>
<?php $this->assign('sitetitle', $this->_tpl_vars['theme_vars_site_title']); ?>
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
	<link rel="stylesheet" href="/css/<?php echo $this->_tpl_vars['css']; ?>
.css" type="text/css" /> 
	<link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->

		<?php echo '

	'; ?>


	<link href='https://fonts.googleapis.com/css?family=<?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_h1_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_h2_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_h3_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_h4_font'] == "Slabo+27px" || $this->_tpl_vars['theme_vars_p_font'] == "Slabo+27px"): ?><?php echo ''; ?>
Slabo+27px%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic" || $this->_tpl_vars['theme_vars_p_font'] == "Open+Sans:400,400italic,700,300,300italic,700italic"): ?><?php echo ''; ?>
Open+Sans:400,400italic,700,300,300italic,700italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Roboto:400,400italic,700,700italic,300,300italic" || $this->_tpl_vars['theme_vars_p_font'] == "Roboto:400,400italic,700,700italic,300,300italic"): ?><?php echo ''; ?>
Roboto:400,400italic,700,700italic,300,300italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Lato:400,700,400italic" || $this->_tpl_vars['theme_vars_p_font'] == "Lato:400,700,400italic"): ?><?php echo ''; ?>
Lato:400,700,400italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_h1_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_h2_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_h3_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_h4_font'] == "Oswald:400,700" || $this->_tpl_vars['theme_vars_p_font'] == "Oswald:400,700"): ?><?php echo ''; ?>
Oswald:400,700%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic" || $this->_tpl_vars['theme_vars_p_font'] == "Roboto+Condensed:400,700,400italic,700italic,300,300italic"): ?><?php echo ''; ?>
Roboto+Condensed:400,700,400italic,700italic,300,300italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic" || $this->_tpl_vars['theme_vars_p_font'] == "Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic"): ?><?php echo ''; ?>
Source+Sans+Pro:400,300,300italic,400italic,600,700,700italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_h1_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_h2_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_h3_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_h4_font'] == "Montserrat:400,700" || $this->_tpl_vars['theme_vars_p_font'] == "Montserrat:400,700"): ?><?php echo ''; ?>
Montserrat:400,700%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Raleway:400,200,200italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_p_font'] == "Raleway:400,200,200italic,400italic,700,700italic"): ?><?php echo ''; ?>
Raleway:400,200,200italic,400italic,700,700italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h1_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h2_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h3_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h4_font'] == "PT+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_p_font'] == "PT+Sans:400,400italic,700,700italic"): ?><?php echo ''; ?>
PT+Sans:400,400italic,700,700italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Lora:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_p_font'] == "Lora:400,400italic,700,700italic"): ?><?php echo ''; ?>
Lora:400,400italic,700,700italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_h1_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_h2_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_h3_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_h4_font'] == "Roboto+Slab:400,300,700" || $this->_tpl_vars['theme_vars_p_font'] == "Roboto+Slab:400,300,700"): ?><?php echo ''; ?>
Roboto+Slab:400,300,700%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_h1_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_h2_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_h3_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_h4_font'] == "Open+Sans+Condensed:300,300italic,700" || $this->_tpl_vars['theme_vars_p_font'] == "Open+Sans+Condensed:300,300italic,700"): ?><?php echo ''; ?>
Open+Sans+Condensed:300,300italic,700%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_h1_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_h2_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_h3_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_h4_font'] == "Droid+Sans:400,700" || $this->_tpl_vars['theme_vars_p_font'] == "Droid+Sans:400,700"): ?><?php echo ''; ?>
Droid+Sans:400,700%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Ubuntu:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_p_font'] == "Ubuntu:400,400italic,700,700italic"): ?><?php echo ''; ?>
Ubuntu:400,400italic,700,700italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Droid+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_p_font'] == "Droid+Serif:400,400italic,700,700italic"): ?><?php echo ''; ?>
Droid+Serif:400,400italic,700,700italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Merriweather:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_p_font'] == "Merriweather:400,400italic,700,700italic"): ?><?php echo ''; ?>
Merriweather:400,400italic,700,700italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Arimo:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_p_font'] == "Arimo:400,400italic,700,700italic"): ?><?php echo ''; ?>
Arimo:400,400italic,700,700italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Noto+Sans:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_p_font'] == "Noto+Sans:400,400italic,700,700italic"): ?><?php echo ''; ?>
Noto+Sans:400,400italic,700,700italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_h1_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_h2_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_h3_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_h4_font'] == "PT+Sans+Narrow:400,700" || $this->_tpl_vars['theme_vars_p_font'] == "PT+Sans+Narrow:400,700"): ?><?php echo ''; ?>
PT+Sans+Narrow:400,700%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_h1_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_h2_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_h3_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_h4_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700" || $this->_tpl_vars['theme_vars_p_font'] == "Titillium+Web:400,300,300italic,400italic,700italic,700"): ?><?php echo ''; ?>
Titillium+Web:400,300,300italic,400italic,700italic,700%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h1_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h2_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h3_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h4_font'] == "PT+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_p_font'] == "PT+Serif:400,400italic,700,700italic"): ?><?php echo ''; ?>
PT+Serif:400,400italic,700,700italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_h1_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_h2_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_h3_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_h4_font'] == "Indie+Flower" || $this->_tpl_vars['theme_vars_p_font'] == "Indie+Flower"): ?><?php echo ''; ?>
Indie+Flower%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Muli:400,300italic,300,400italic" || $this->_tpl_vars['theme_vars_p_font'] == "Muli:400,300italic,300,400italic"): ?><?php echo ''; ?>
Muli:400,300italic,300,400italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_h1_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_h2_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_h3_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_h4_font'] == "Inconsolata:400,700" || $this->_tpl_vars['theme_vars_p_font'] == "Inconsolata:400,700"): ?><?php echo ''; ?>
Inconsolata:400,700%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_h1_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_h2_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_h3_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_h4_font'] == "Dosis:400,300,500,700" || $this->_tpl_vars['theme_vars_p_font'] == "Dosis:400,300,500,700"): ?><?php echo ''; ?>
Dosis:400,300,500,700%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Cabin:400,500,700,700italic,500italic" || $this->_tpl_vars['theme_vars_p_font'] == "Cabin:400,500,700,700italic,500italic"): ?><?php echo ''; ?>
Cabin:400,500,700,700italic,500italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Noto+Serif:400,400italic,700,700italic" || $this->_tpl_vars['theme_vars_p_font'] == "Noto+Serif:400,400italic,700,700italic"): ?><?php echo ''; ?>
Noto+Serif:400,400italic,700,700italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_h1_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_h2_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_h3_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_h4_font'] == 'Lobster' || $this->_tpl_vars['theme_vars_p_font'] == 'Lobster'): ?><?php echo ''; ?>
Lobster%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_h1_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_h2_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_h3_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_h4_font'] == "Passion+One:400,700" || $this->_tpl_vars['theme_vars_p_font'] == "Passion+One:400,700"): ?><?php echo ''; ?>
Passion+One:400,700%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_h1_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_h2_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_h3_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_h4_font'] == "Poiret+One" || $this->_tpl_vars['theme_vars_p_font'] == "Poiret+One"): ?><?php echo ''; ?>
Poiret+One%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic" || $this->_tpl_vars['theme_vars_p_font'] == "Merriweather+Sans:400,300,700,700italic,400italic,300italic"): ?><?php echo ''; ?>
Merriweather+Sans:400,300,700,700italic,400italic,300italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == 'Abel' || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == 'Abel' || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == 'Abel' || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == 'Abel' || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == 'Abel' || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == 'Abel' || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == 'Abel' || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == 'Abel' || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == 'Abel' || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == 'Abel' || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == 'Abel' || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == 'Abel' || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == 'Abel' || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == 'Abel' || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == 'Abel' || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == 'Abel' || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == 'Abel' || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == 'Abel' || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == 'Abel' || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == 'Abel' || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == 'Abel' || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == 'Abel' || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == 'Abel' || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == 'Abel' || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == 'Abel' || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == 'Abel' || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == 'Abel' || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == 'Abel' || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == 'Abel' || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == 'Abel' || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == 'Abel' || $this->_tpl_vars['theme_vars_h1_font'] == 'Abel' || $this->_tpl_vars['theme_vars_h2_font'] == 'Abel' || $this->_tpl_vars['theme_vars_h3_font'] == 'Abel' || $this->_tpl_vars['theme_vars_h4_font'] == 'Abel' || $this->_tpl_vars['theme_vars_p_font'] == 'Abel'): ?><?php echo ''; ?>
Abel%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_h1_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_h2_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_h3_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_h4_font'] == 'Pacifico' || $this->_tpl_vars['theme_vars_p_font'] == 'Pacifico'): ?><?php echo ''; ?>
Pacifico%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_h1_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_h2_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_h3_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_h4_font'] == "Shadows+Into+Light" || $this->_tpl_vars['theme_vars_p_font'] == "Shadows+Into+Light"): ?><?php echo ''; ?>
Shadows+Into+Light%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_h1_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_h2_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_h3_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_h4_font'] == "Orbitron:400,500,700" || $this->_tpl_vars['theme_vars_p_font'] == "Orbitron:400,500,700"): ?><?php echo ''; ?>
Orbitron:400,500,700%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Exo:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_p_font'] == "Exo:400,300,300italic,400italic,700,700italic"): ?><?php echo ''; ?>
Exo:400,300,300italic,400italic,700,700italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_h1_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_h2_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_h3_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_h4_font'] == "Dancing+Script:400,700" || $this->_tpl_vars['theme_vars_p_font'] == "Dancing+Script:400,700"): ?><?php echo ''; ?>
Dancing+Script:400,700%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_h1_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_h2_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_h3_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_h4_font'] == "Amatic+SC:400,700" || $this->_tpl_vars['theme_vars_p_font'] == "Amatic+SC:400,700"): ?><?php echo ''; ?>
Amatic+SC:400,700%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_h1_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_h2_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_h3_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_h4_font'] == "Gloria+Hallelujah" || $this->_tpl_vars['theme_vars_p_font'] == "Gloria+Hallelujah"): ?><?php echo ''; ?>
Gloria+Hallelujah%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic" || $this->_tpl_vars['theme_vars_p_font'] == "Josefin+Slab:400,300,300italic,400italic,700,700italic"): ?><?php echo ''; ?>
Josefin+Slab:400,300,300italic,400italic,700,700italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_h1_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_h2_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_h3_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_h4_font'] == "Architects+Daughter" || $this->_tpl_vars['theme_vars_p_font'] == "Architects+Daughter"): ?><?php echo ''; ?>
Architects+Daughter%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_h1_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_h2_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_h3_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_h4_font'] == "Sanchez:400,400italic" || $this->_tpl_vars['theme_vars_p_font'] == "Sanchez:400,400italic"): ?><?php echo ''; ?>
Sanchez:400,400italic%7C<?php endif; ?><?php echo ''; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h1_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h1_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h1_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h1_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h1_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h1_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h1_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h1_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h1_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h1_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h1_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_h2_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h2_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h2_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h2_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h2_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h2_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h2_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h2_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h2_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h2_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h2_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h2_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_h3_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h3_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h3_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h3_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h3_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h3_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h3_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h3_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h3_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h3_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h3_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h3_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_h4_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_h4_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_h4_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_h4_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_h4_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_h4_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_h4_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_h4_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_h4_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_h4_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_h4_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_h4_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_1_p_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_2_p_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_header_bar_3_p_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_1_p_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_2_p_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_3_p_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_4_p_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_5_p_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_6_p_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_content_bar_7_p_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_1_p_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_2_1_p_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_footer_bar_3_1_p_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_h1_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_h2_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_h3_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_h4_font'] == "ABeeZee:400,400italic" || $this->_tpl_vars['theme_vars_p_font'] == "ABeeZee:400,400italic"): ?><?php echo ''; ?>
ABeeZee:400,400italic<?php endif; ?>' rel='stylesheet' type='text/css'>
<style type="text/css" >
.hr <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_hr_color'] && $this->_tpl_vars['theme_vars_hr_color'] != "" && $this->_tpl_vars['theme_vars_hr_thickness'] && $this->_tpl_vars['theme_vars_hr_thickness'] != ""): ?>
	border-bottom: <?php echo $this->_tpl_vars['theme_vars_hr_thickness']; ?>
 solid <?php echo $this->_tpl_vars['theme_vars_hr_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

.inverted .hr <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_hr_color_inverted'] && $this->_tpl_vars['theme_vars_hr_color'] != "" && $this->_tpl_vars['theme_vars_hr_thickness'] && $this->_tpl_vars['theme_vars_hr_thickness'] != ""): ?>
	border-bottom: <?php echo $this->_tpl_vars['theme_vars_hr_thickness']; ?>
 solid <?php echo $this->_tpl_vars['theme_vars_hr_color_inverted']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

h1 <?php echo '{'; ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_h1_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	font-size:<?php echo $this->_tpl_vars['theme_vars_h1_size']; ?>
;
	font-weight:<?php echo $this->_tpl_vars['theme_vars_h1_weight']; ?>
;
	color:<?php echo $this->_tpl_vars['theme_vars_h1_color']; ?>

<?php echo '}'; ?>

#header_bar_1 h1 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_header_bar_1_h1_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_h1_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_h1_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h1_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_1_h1_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_h1_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_2 h1 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h1_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_header_bar_2_h1_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h1_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_h1_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h1_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_h1_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h1_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_2_h1_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_h1_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_3 h1 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h1_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_header_bar_3_h1_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h1_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_h1_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h1_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_h1_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h1_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_3_h1_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_h1_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_1 h1 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h1_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_1_h1_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h1_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_h1_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h1_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_h1_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h1_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_1_h1_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_h1_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_2 h1 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h1_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_2_h1_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h1_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_h1_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h1_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_h1_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h1_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_2_h1_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_h1_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_3 h1 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h1_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_3_h1_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h1_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_h1_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h1_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_h1_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h1_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_3_h1_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_h1_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_4 h1 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h1_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_4_h1_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h1_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_h1_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h1_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_h1_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h1_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_4_h1_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_h1_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_5 h1 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h1_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_5_h1_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h1_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_h1_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h1_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_h1_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h1_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_5_h1_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_h1_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_6 h1 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h1_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_6_h1_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h1_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_h1_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h1_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_h1_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h1_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_6_h1_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_h1_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_7 h1 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h1_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_7_h1_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h1_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_h1_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h1_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_h1_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h1_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_7_h1_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_h1_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_1 h1 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h1_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_footer_bar_1_h1_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h1_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_footer_bar_4_h1_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h1_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_h1_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h1_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_1_h1_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_h1_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_2 h1 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h1_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_footer_bar_2_h1_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h1_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_h1_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h1_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_h1_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h1_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_2_h1_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_h1_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_3 h1 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h1_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_footer_bar_3_h1_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h1_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_h1_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h1_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_h1_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h1_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_3_h1_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_h1_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>



h2 <?php echo '{'; ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_h2_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	font-size:<?php echo $this->_tpl_vars['theme_vars_h2_size']; ?>
;
	font-weight:<?php echo $this->_tpl_vars['theme_vars_h2_weight']; ?>
;
	color:<?php echo $this->_tpl_vars['theme_vars_h2_color']; ?>

<?php echo '}'; ?>

#header_bar_1 h2 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h2_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_header_bar_1_h2_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h2_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_h2_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h2_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_h2_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h2_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_1_h2_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_h2_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_2 h2 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h2_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_header_bar_2_h2_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h2_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_h2_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h2_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_h2_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h2_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_2_h2_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_h2_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_3 h2 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h2_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_header_bar_3_h2_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h2_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_h2_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h2_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_h2_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h2_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_3_h2_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_h2_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_1 h2 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h2_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_1_h2_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h2_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_h2_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h2_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_h2_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h2_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_1_h2_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_h2_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_2 h2 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h2_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_2_h2_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h2_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_h2_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h2_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_h2_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h2_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_2_h2_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_h2_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_3 h2 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h2_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_3_h2_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h2_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_h2_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h2_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_h2_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h2_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_3_h2_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_h2_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_4 h2 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h2_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_4_h2_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h2_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_h2_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h2_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_h2_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h2_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_4_h2_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_h2_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_5 h2 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h2_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_5_h2_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h2_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_h2_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h2_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_h2_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h2_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_5_h2_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_h2_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_6 h2 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h2_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_6_h2_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h2_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_h2_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h2_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_h2_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h2_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_6_h2_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_h2_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_7 h2 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h2_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_7_h2_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h2_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_h2_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h2_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_h2_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h2_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_7_h2_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_h2_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_1 h2 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h2_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_footer_bar_1_h2_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h2_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_h2_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h2_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_h2_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h2_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_1_h2_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_h2_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_2 h2 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h2_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_footer_bar_2_h2_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h2_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_h2_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h2_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_h2_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h2_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_2_h2_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_h2_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_3 h2 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h2_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_footer_bar_3_h2_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h2_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_h2_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h2_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_h2_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h2_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_3_h2_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_h2_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>


h3 <?php echo '{'; ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_h3_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	font-size:<?php echo $this->_tpl_vars['theme_vars_h3_size']; ?>
;
	font-weight:<?php echo $this->_tpl_vars['theme_vars_h3_weight']; ?>
;
	color:<?php echo $this->_tpl_vars['theme_vars_h3_color']; ?>

<?php echo '}'; ?>

#header_bar_1 h3 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h3_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_header_bar_1_h3_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h3_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_h3_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h3_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_h3_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h3_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_1_h3_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_h3_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_2 h3 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h3_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_header_bar_2_h3_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h3_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_h3_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h3_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_h3_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h3_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_2_h3_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_h3_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_3 h3 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h3_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_header_bar_3_h3_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h3_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_h3_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h3_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_h3_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h3_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_3_h3_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_h3_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_1 h3 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h3_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_1_h3_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h3_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_h3_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h3_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_h3_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h3_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_1_h3_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_h3_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_2 h3 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h3_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_2_h3_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h3_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_h3_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h3_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_h3_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h3_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_2_h3_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_h3_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_3 h3 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h3_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_3_h3_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h3_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_h3_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h3_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_h3_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h3_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_3_h3_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_h3_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_4 h3 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h3_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_4_h3_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h3_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_h3_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h3_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_h3_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h3_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_4_h3_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_h3_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_5 h3 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h3_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_5_h3_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h3_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_h3_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h3_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_h3_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h3_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_5_h3_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_h3_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_6 h3 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h3_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_6_h3_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h3_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_h3_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h3_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_h3_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h3_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_6_h3_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_h3_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_7 h3 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h3_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_7_h3_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h3_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_h3_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h3_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_h3_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h3_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_7_h3_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_h3_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_1 h3 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h3_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_footer_bar_1_h3_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h3_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_h3_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h3_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_h3_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h3_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_1_h3_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_h3_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_2 h3 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h3_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_footer_bar_2_h3_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h3_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_h3_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h3_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_h3_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h3_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_2_h3_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_h3_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_3 h3 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h3_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_footer_bar_3_h3_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h3_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_h3_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h3_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_h3_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h3_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_3_h3_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_h3_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>



h4 <?php echo '{'; ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_h4_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	font-size:<?php echo $this->_tpl_vars['theme_vars_h4_size']; ?>
;
	font-weight:<?php echo $this->_tpl_vars['theme_vars_h4_weight']; ?>
;
	color:<?php echo $this->_tpl_vars['theme_vars_h4_color']; ?>

<?php echo '}'; ?>

#header_bar_1 h4 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h4_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_header_bar_1_h4_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h4_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_h4_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h4_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_h4_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_h4_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_1_h4_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_h4_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_2 h4 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h4_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_header_bar_2_h4_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h4_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_h4_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h4_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_h4_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_h4_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_2_h4_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_h4_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_3 h4 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h4_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_header_bar_3_h4_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h4_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_h4_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h4_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_h4_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h4_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_3_h4_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_h4_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_1 h4 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h4_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_1_h4_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h4_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_h4_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h4_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_h4_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_h4_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_1_h4_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_h4_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_2 h4 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h4_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_2_h4_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h4_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_h4_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h4_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_h4_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_h4_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_2_h4_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_h4_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_3 h4 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h4_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_3_h4_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h4_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_h4_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h4_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_h4_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_h4_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_3_h4_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_h4_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_4 h4 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h4_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_4_h4_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h4_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_h4_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h4_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_h4_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_h4_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_4_h4_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_h4_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_5 h4 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h4_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_5_h4_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h4_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_h4_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h4_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_h4_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_h4_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_5_h4_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_h4_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_6 h4 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h4_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_6_h4_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h4_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_h4_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h4_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_h4_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_h4_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_6_h4_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_h4_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_7 h4 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h4_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_7_h4_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h4_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_h4_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h4_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_h4_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_h4_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_7_h4_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_h4_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_1 h4 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h4_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_footer_bar_1_h4_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h4_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_h4_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h4_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_h4_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_h4_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_1_h4_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_h4_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_2 h4 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h4_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_footer_bar_2_h4_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h4_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_h4_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h4_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_h4_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_h4_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_2_h4_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_h4_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_3 h4 <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h4_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_footer_bar_3_h4_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h4_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_h4_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h4_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_h4_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_h4_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_3_h4_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_h4_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>



p,td,div,th,label,li,p a,li a <?php echo '{'; ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_p_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	font-size:<?php echo $this->_tpl_vars['theme_vars_p_size']; ?>
;
	font-weight:<?php echo $this->_tpl_vars['theme_vars_p_weight']; ?>
;
	color:<?php echo $this->_tpl_vars['theme_vars_p_color']; ?>

<?php echo '}'; ?>

#header_bar_1 p,#header_bar_1 td,#header_bar_1 div,#header_bar_1 th,#header_bar_1 label,#header_bar_1 li,#header_bar_1 p a,#header_bar_1 li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_p_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_header_bar_1_p_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_p_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_p_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_p_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_p_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_1_p_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_p_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_2 p,#header_bar_2 td,#header_bar_2 div,#header_bar_2 th,#header_bar_2 label,#header_bar_2 li,#header_bar_2 p a,#header_bar_2 li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_p_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_header_bar_2_p_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_p_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_p_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_p_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_p_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_2_p_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_p_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_3 p,#header_bar_3 td,#header_bar_3 div,#header_bar_3 th,#header_bar_3 label,#header_bar_3 li,#header_bar_3 p a,#header_bar_3 li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_h4_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_header_bar_3_p_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_p_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_p_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_p_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_p_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_3_p_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_p_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_1 p,#content_bar_1 td,#content_bar_1 div,#content_bar_1 th,#content_bar_1 label,#content_bar_1 li,#content_bar_1 p a,#content_bar_1 li a<?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_p_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_1_p_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_p_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_p_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_p_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_p_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_1_p_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_p_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_2 p,#content_bar_2 td,#content_bar_2 div,#content_bar_2 th,#content_bar_2 label,#content_bar_2 li,#content_bar_2 p a,#content_bar_2 li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_p_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_2_p_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_p_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_p_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_p_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_p_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_2_p_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_p_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_3 p,#content_bar_3 td,#content_bar_3 div,#content_bar_3 th,#content_bar_3 label,#content_bar_3 li,#content_bar_3 p a,#content_bar_3 li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_p_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_3_p_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_p_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_p_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_p_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_p_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_3_p_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_p_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_4 p,#content_bar_4 td,#content_bar_4 div,#content_bar_4 th,#content_bar_4 label,#content_bar_4 li,#content_bar_4 p a,#content_bar_4 li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_p_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_4_p_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_p_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_p_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_p_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_p_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_4_p_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_p_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_5 p,#content_bar_5 td,#content_bar_5 div,#content_bar_5 th,#content_bar_5 label,#content_bar_5 li,#content_bar_5 p a,#content_bar_5 li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_p_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_5_p_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_p_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_p_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_p_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_p_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_5_p_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_p_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_6 p,#content_bar_6 td,#content_bar_6 div,#content_bar_6 th,#content_bar_6 label,#content_bar_6 li,#content_bar_6 p a,#content_bar_6 li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_p_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_6_p_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_p_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_p_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_p_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_p_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_6_p_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_p_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_7 p,#content_bar_7 td,#content_bar_7 div,#content_bar_7 th,#content_bar_7 label,#content_bar_7 li,#content_bar_7 p a,#content_bar_7 li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_p_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_content_bar_7_p_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_p_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_p_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_p_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_p_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_7_p_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_p_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_1 p,#footer_bar_1 td,#footer_bar_1 div,#footer_bar_1 th,#footer_bar_1 label,#footer_bar_1 li,#footer_bar_1 p a,#footer_bar_1 li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_p_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_footer_bar_1_p_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_p_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_p_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_p_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_p_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_1_p_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_p_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_2 p,#footer_bar_2 td,#footer_bar_2 div,#footer_bar_2 th,#footer_bar_2 label,#footer_bar_2 li,#footer_bar_2 p a,#footer_bar_2 li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_p_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_footer_bar_2_p_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_p_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_p_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_p_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_p_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_2_p_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_p_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_3 p,#footer_bar_3 td,#footer_bar_3 div,#footer_bar_3 th,#footer_bar_3 label,#footer_bar_3 li,#footer_bar_3 p a,#footer_bar_3 li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_p_font']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/font-family.tpl", 'smarty_include_vars' => array('font' => $this->_tpl_vars['theme_vars_footer_bar_3_p_font'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_p_size']): ?>
		font-size:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_p_size']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_p_weight']): ?>
		font-weight:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_p_weight']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_3_p_color'] != ""): ?>
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_p_color']; ?>

	<?php endif; ?>
<?php echo '}'; ?>


.nav li ul,.nav > ul > li:hover > a,.nav > ul > li.hover-preview > a <?php echo '{'; ?>

	background-color:<?php echo $this->_tpl_vars['theme_vars_p_color_inverted']; ?>
;
	color:<?php echo $this->_tpl_vars['theme_vars_p_color']; ?>
;
<?php echo '}'; ?>


#header_bar_1 .nav li ul,#header_bar_1 .nav > ul > li.hover-preview > a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_p_color_inverted'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_1_p_color_inverted'] != ""): ?>
		background-color:<?php echo $this->_tpl_vars['theme_vars_p_color_inverted']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_1_p_color'] != ""): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_2 .nav > ul > li:hover > a,#header_bar_2 .nav > ul > li.hover-preview > a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_p_color_inverted'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_2_p_color_inverted'] != ""): ?>
		background-color:<?php echo $this->_tpl_vars['theme_vars_p_color_inverted']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_2_p_color'] != ""): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_3 .nav > ul > li:hover > a,#header_bar_3 .nav > ul > li.hover-preview > a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_p_color_inverted'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_3_p_color_inverted'] != ""): ?>
		background-color:<?php echo $this->_tpl_vars['theme_vars_p_color_inverted']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_header_bar_3_p_color'] != ""): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_1 .nav > ul > li:hover > a,#content_bar_1 .nav > ul > li:hover > a<?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_p_color_inverted'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_1_p_color_inverted'] != ""): ?>
		background-color:<?php echo $this->_tpl_vars['theme_vars_p_color_inverted']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_1_p_color'] != ""): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_2 .nav > ul > li:hover > a,#content_bar_2 .nav > ul > li:hover > a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_p_color_inverted'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_2_p_color_inverted'] != ""): ?>
		background-color:<?php echo $this->_tpl_vars['theme_vars_p_color_inverted']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_2_p_color'] != ""): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_3 .nav > ul > li:hover > a,#content_bar_3 .nav > ul > li:hover > a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_p_color_inverted'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_3_p_color_inverted'] != ""): ?>
		background-color:<?php echo $this->_tpl_vars['theme_vars_p_color_inverted']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_3_p_color'] != ""): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_4 .nav > ul > li:hover > a,#content_bar_4 .nav > ul > li:hover > a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_p_color_inverted'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_4_p_color_inverted'] != ""): ?>
		background-color:<?php echo $this->_tpl_vars['theme_vars_p_color_inverted']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_4_p_color'] != ""): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_5 .nav > ul > li:hover > a,#content_bar_5 .nav > ul > li:hover > a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_p_color_inverted'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_5_p_color_inverted'] != ""): ?>
		background-color:<?php echo $this->_tpl_vars['theme_vars_p_color_inverted']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_content_bar_5_p_color'] != ""): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_1 .nav > ul > li:hover > a,#footer_bar_1 .nav > ul > li:hover > a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_p_color_inverted'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_1_p_color_inverted'] != ""): ?>
		background-color:<?php echo $this->_tpl_vars['theme_vars_p_color_inverted']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_1_p_color'] != ""): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_2 .nav > ul > li:hover > a,#footer_bar_2 .nav > ul > li:hover > a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_p_color_inverted'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_2_p_color_inverted'] != ""): ?>
		background-color:<?php echo $this->_tpl_vars['theme_vars_p_color_inverted']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_2_p_color'] != ""): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_3 .nav > ul > li:hover > a,#footer_bar_3 .nav > ul > li:hover > a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_p_color_inverted'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_3_p_color_inverted'] != ""): ?>
		background-color:<?php echo $this->_tpl_vars['theme_vars_p_color_inverted']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_p_color'] != 'Inherit' && $this->_tpl_vars['theme_vars_footer_bar_3_p_color'] != ""): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>



.nav li ul li a  <?php echo '{'; ?>

	color:<?php echo $this->_tpl_vars['theme_vars_p_color']; ?>
;
<?php echo '}'; ?>


#header_bar_1 .nav li ul li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_p_color'] != "" && $this->_tpl_vars['theme_vars_header_bar_1_p_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_2 .nav li ul li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_p_color'] != "" && $this->_tpl_vars['theme_vars_header_bar_2_p_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_3 .nav li ul li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_p_color'] != "" && $this->_tpl_vars['theme_vars_header_bar_3_p_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_1 .nav li ul li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_p_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_1_p_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_2 .nav li ul li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_p_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_2_p_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_3 .nav li ul li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_p_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_3_p_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_4 .nav li ul li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_p_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_4_p_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_5 .nav li ul li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_p_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_5_p_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_6 .nav li ul li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_p_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_6_p_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_7 .nav li ul li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_p_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_6_p_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_1 .nav li ul li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_p_color'] != "" && $this->_tpl_vars['theme_vars_footer_bar_1_p_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_2 .nav li ul li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_p_color'] != "" && $this->_tpl_vars['theme_vars_footer_bar_2_p_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_3 .nav li ul li a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_p_color'] != "" && $this->_tpl_vars['theme_vars_footer_bar_3_p_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_p_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>


p.button a,p.Button_Small a,p.Button_Medium a,p.Button_Large a,button,input[type="submit"],input[type="reset"],input[type="button"]  <?php echo '{'; ?>

	color:<?php echo $this->_tpl_vars['theme_vars_button_color']; ?>
;
	background:<?php echo $this->_tpl_vars['theme_vars_button_bg_color']; ?>
;
<?php echo '}'; ?>

.expand-box-title:before <?php echo '{'; ?>

	color:<?php echo $this->_tpl_vars['theme_vars_button_bg_color']; ?>
;
<?php echo '}'; ?>

#header_bar_1 p.button a,#header_bar_1 p.Button_Small a,#header_bar_1 p.Button_Medium a,#header_bar_1 p.Button_Large a,#header_bar_1 button,#header_bar_1 input[type="submit"],#header_bar_1 input[type="reset"],#header_bar_1 input[type="button"] <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_button_color'] != "" && $this->_tpl_vars['theme_vars_header_bar_1_button_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_button_color']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_header_bar_1_button_bg_color'] != 'Inherit'): ?>		
		background:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_button_bg_color']; ?>
;
	<?php endif; ?>
		
<?php echo '}'; ?>

#header_bar_1 .expand-box-title:before <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_1_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_header_bar_1_button_bg_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_2 p.button a,#header_bar_2 p.Button_Small a,#header_bar_2 p.Button_Medium a,#header_bar_2 p.Button_Large a,#header_bar_2 button,#header_bar_2 input[type="submit"],#header_bar_2 input[type="reset"],#header_bar_2 input[type="button"] <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_button_color'] != "" && $this->_tpl_vars['theme_vars_header_bar_2_button_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_button_color']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_header_bar_2_button_bg_color'] != 'Inherit'): ?>		
		background:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_button_bg_color']; ?>
;
	<?php endif; ?>
	
<?php echo '}'; ?>

#header_bar_2 .expand-box-title:before <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_2_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_header_bar_2_button_bg_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#header_bar_3 p.button a,#header_bar_3 p.Button_Small a,#header_bar_3 p.Button_Medium a,#header_bar_3 p.Button_Large a,#header_bar_3 button,#header_bar_3 input[type="submit"],#header_bar_3 input[type="reset"],#header_bar_3 input[type="button"] <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_button_color'] != "" && $this->_tpl_vars['theme_vars_header_bar_3_button_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_button_color']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_header_bar_3_button_bg_color'] != 'Inherit'): ?>		
		background:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_button_bg_color']; ?>
;
	<?php endif; ?>
	
<?php echo '}'; ?>

#header_bar_3 .expand-box-title:before <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_header_bar_3_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_header_bar_3_button_bg_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_1 p.button a,#content_bar_1 p.Button_Small a,#content_bar_1 p.Button_Medium a,#content_bar_1 p.Button_Large a,#content_bar_1 button,#content_bar_1 input[type="submit"],#content_bar_1 input[type="reset"],#content_bar_1 input[type="button"] <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_button_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_1_button_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_button_color']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_1_button_bg_color'] != 'Inherit'): ?>		
		background:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_1 .expand-box-title:before <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_1_button_bg_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_2 p.button a,#content_bar_2 p.Button_Small a,#content_bar_2 p.Button_Medium a,#content_bar_2 p.Button_Large a,#content_bar_2 button,#content_bar_2 input[type="submit"],#content_bar_2 input[type="reset"],#content_bar_2 input[type="button"] <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_button_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_2_button_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_button_color']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_2_button_bg_color'] != 'Inherit'): ?>		
		background:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_2 .expand-box-title:before <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_2_button_bg_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_3 p.button a,#content_bar_3 p.Button_Small a,#content_bar_3 p.Button_Medium a,#content_bar_3 p.Button_Large a,#content_bar_3 button,#content_bar_3 input[type="submit"],#content_bar_3 input[type="reset"],#content_bar_3 input[type="button"] <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_button_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_3_button_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_button_color']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_3_button_bg_color'] != 'Inherit'): ?>		
		background:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_3 .expand-box-title:before <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_3_button_bg_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_4 p.button a,#content_bar_4 p.Button_Small a,#content_bar_4 p.Button_Medium a,#content_bar_4 p.Button_Large a,#content_bar_4 button,#content_bar_4 input[type="submit"],#content_bar_4 input[type="reset"],#content_bar_4 input[type="button"] <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_button_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_4_button_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_button_color']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_4_button_bg_color'] != 'Inherit'): ?>		
		background:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_4 .expand-box-title:before <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_4_button_bg_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_5 p.button a,#content_bar_5 p.Button_Small a,#content_bar_5 p.Button_Medium a,#content_bar_5 p.Button_Large a,#content_bar_5 button,#content_bar_5 input[type="submit"],#content_bar_5 input[type="reset"],#content_bar_5 input[type="button"] <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_button_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_5_button_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_button_color']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_5_button_bg_color'] != 'Inherit'): ?>		
		background:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_5 .expand-box-title:before <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_5_button_bg_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_6 p.button a,#content_bar_6 p.Button_Small a,#content_bar_6 p.Button_Medium a,#content_bar_6 p.Button_Large a,#content_bar_6 button,#content_bar_6 input[type="submit"],#content_bar_6 input[type="reset"],#content_bar_6 input[type="button"] <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_button_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_6_button_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_button_color']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_6_button_bg_color'] != 'Inherit'): ?>		
		background:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_6 .expand-box-title:before <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_6_button_bg_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_7 p.button a,#content_bar_7 p.Button_Small a,#content_bar_7 p.Button_Medium a,#content_bar_7 p.Button_Large a,#content_bar_7 button,#content_bar_7 input[type="submit"],#content_bar_7 input[type="reset"],#content_bar_7 input[type="button"] <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_button_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_7_button_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_button_color']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_7_button_bg_color'] != 'Inherit'): ?>		
		background:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#content_bar_7 .expand-box-title:before <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_content_bar_7_button_bg_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_1 p.button a,#footer_bar_1 p.Button_Small a,#footer_bar_1 p.Button_Medium a,#footer_bar_1 p.Button_Large a,#footer_bar_1 button,#footer_bar_1 input[type="submit"],#footer_bar_1 input[type="reset"],#footer_bar_1 input[type="button"] <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_button_color'] != "" && $this->_tpl_vars['theme_vars_footer_bar_1_button_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_button_color']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_footer_bar_1_button_bg_color'] != 'Inherit'): ?>		
		background:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_1 .expand-box-title:before <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_footer_bar_1_button_bg_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_2 p.button a,#footer_bar_2 p.Button_Small a,#footer_bar_2 p.Button_Medium a,#footer_bar_2 p.Button_Large a,#footer_bar_2 button,#footer_bar_2 input[type="submit"],#footer_bar_2 input[type="reset"],#footer_bar_2 input[type="button"] <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_button_color'] != "" && $this->_tpl_vars['theme_vars_footer_bar_2_button_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_button_color']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_footer_bar_2_button_bg_color'] != 'Inherit'): ?>		
		background:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_2 .expand-box-title:before <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_footer_bar_2_button_bg_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_3 p.button a,#footer_bar_3 p.Button_Small a,#footer_bar_3 p.Button_Medium a,#footer_bar_3 p.Button_Large a,#footer_bar_3 button,#footer_bar_3 input[type="submit"],#footer_bar_3 input[type="reset"],#footer_bar_3 input[type="button"] <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_button_color'] != "" && $this->_tpl_vars['theme_vars_footer_bar_3_button_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_button_color']; ?>
;
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_footer_bar_3_button_bg_color'] != 'Inherit'): ?>		
		background:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_3 .expand-box-title:before <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_footer_bar_3_button_bg_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_button_bg_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>



.inverted h1 <?php echo '{'; ?>

	color:<?php echo $this->_tpl_vars['theme_vars_h1_color_inverted']; ?>

<?php echo '}'; ?>


.inverted h2 <?php echo '{'; ?>

	color:<?php echo $this->_tpl_vars['theme_vars_h2_color_inverted']; ?>

<?php echo '}'; ?>



.inverted h3 <?php echo '{'; ?>

	color:<?php echo $this->_tpl_vars['theme_vars_h3_color_inverted']; ?>

<?php echo '}'; ?>



.inverted h4 <?php echo '{'; ?>

	color:<?php echo $this->_tpl_vars['theme_vars_h4_color_inverted']; ?>

<?php echo '}'; ?>



.inverted p,.inverted td,.inverted div,.inverted th,.inverted label,.inverted.content li,.inverted li,.inverted p a,.inverted.content li a,.inverted li a <?php echo '{'; ?>

	color:<?php echo $this->_tpl_vars['theme_vars_p_color_inverted']; ?>

<?php echo '}'; ?>

#header_bar_1.inverted p,#header_bar_1.inverted td,#header_bar_1.inverted div,#header_bar_1.inverted th,#header_bar_1.inverted label,#header_bar_1.inverted.content li,#header_bar_1.inverted li,#header_bar_1.inverted p a,#header_bar_1.inverted.content li a,#header_bar_1.inverted li a <?php echo '{'; ?>

<?php if ($this->_tpl_vars['theme_vars_header_bar_1_p_color_inverted'] != "" && $this->_tpl_vars['theme_vars_header_bar_1_p_color_inverted'] != 'Inherit'): ?>		
	color:<?php echo $this->_tpl_vars['theme_vars_header_bar_1_p_color_inverted']; ?>
;
<?php endif; ?>
<?php echo '}'; ?>

#header_bar_2.inverted p,#header_bar_2.inverted td,#header_bar_2.inverted div,#header_bar_2.inverted th,#header_bar_2.inverted label,#header_bar_2.inverted.content li,#header_bar_2.inverted li,#header_bar_2.inverted p a,#header_bar_2.inverted.content li a,#header_bar_2.inverted li a <?php echo '{'; ?>

<?php if ($this->_tpl_vars['theme_vars_header_bar_2_p_color_inverted'] != "" && $this->_tpl_vars['theme_vars_header_bar_2_p_color_inverted'] != 'Inherit'): ?>		
	color:<?php echo $this->_tpl_vars['theme_vars_header_bar_2_p_color_inverted']; ?>
;
<?php endif; ?>
<?php echo '}'; ?>

#header_bar_3.inverted p,#header_bar_3.inverted td,#header_bar_3.inverted div,#header_bar_3.inverted th,#header_bar_3.inverted label,#header_bar_3.inverted.content li,#header_bar_3.inverted li,#header_bar_3.inverted p a,#header_bar_3.inverted.content li a,#header_bar_3.inverted li a <?php echo '{'; ?>

<?php if ($this->_tpl_vars['theme_vars_header_bar_3_p_color_inverted'] != "" && $this->_tpl_vars['theme_vars_header_bar_3_p_color_inverted'] != 'Inherit'): ?>		
	color:<?php echo $this->_tpl_vars['theme_vars_header_bar_3_p_color_inverted']; ?>
;
<?php endif; ?>
<?php echo '}'; ?>

#content_bar_1.inverted p,#content_bar_1.inverted td,#content_bar_1.inverted div,#content_bar_1.inverted th,#content_bar_1.inverted label,#content_bar_1.inverted.content li,#content_bar_1.inverted li,#content_bar_1.inverted p a,#content_bar_1.inverted.content li a,#content_bar_1.inverted li a <?php echo '{'; ?>

<?php if ($this->_tpl_vars['theme_vars_content_bar_1_p_color_inverted'] != "" && $this->_tpl_vars['theme_vars_content_bar_1_p_color_inverted'] != 'Inherit'): ?>		
	color:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_p_color_inverted']; ?>
;
<?php endif; ?>
<?php echo '}'; ?>

#content_bar_2.inverted p,#content_bar_2.inverted td,#content_bar_2.inverted div,#content_bar_2.inverted th,#content_bar_2.inverted label,#content_bar_2.inverted.content li,#content_bar_2.inverted li,#content_bar_2.inverted p a,#content_bar_2.inverted.content li a,#content_bar_2.inverted li a <?php echo '{'; ?>

<?php if ($this->_tpl_vars['theme_vars_content_bar_2_p_color_inverted'] != "" && $this->_tpl_vars['theme_vars_content_bar_2_p_color_inverted'] != 'Inherit'): ?>		
	color:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_p_color_inverted']; ?>
;
<?php endif; ?>
<?php echo '}'; ?>

#content_bar_3.inverted p,#content_bar_3.inverted td,#content_bar_3.inverted div,#content_bar_3.inverted th,#content_bar_3.inverted label,#content_bar_3.inverted.content li,#content_bar_3.inverted li,#content_bar_3.inverted p a,#content_bar_3.inverted.content li a,#content_bar_3.inverted li a <?php echo '{'; ?>

<?php if ($this->_tpl_vars['theme_vars_content_bar_3_p_color_inverted'] != "" && $this->_tpl_vars['theme_vars_content_bar_3_p_color_inverted'] != 'Inherit'): ?>		
	color:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_p_color_inverted']; ?>
;
<?php endif; ?>
<?php echo '}'; ?>

#content_bar_4.inverted p,#content_bar_4.inverted td,#content_bar_4.inverted div,#content_bar_4.inverted th,#content_bar_4.inverted label,#content_bar_4.inverted.content li,#content_bar_4.inverted li,#content_bar_4.inverted p a,#content_bar_4.inverted.content li a,#content_bar_4.inverted li a <?php echo '{'; ?>

<?php if ($this->_tpl_vars['theme_vars_content_bar_4_p_color_inverted'] != "" && $this->_tpl_vars['theme_vars_content_bar_4_p_color_inverted'] != 'Inherit'): ?>		
	color:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_p_color_inverted']; ?>
;
<?php endif; ?>
<?php echo '}'; ?>

#content_bar_5.inverted p,#content_bar_5.inverted td,#content_bar_5.inverted div,#content_bar_5.inverted th,#content_bar_5.inverted label,#content_bar_5.inverted.content li,#content_bar_5.inverted li,#content_bar_5.inverted p a,#content_bar_5.inverted.content li a,#content_bar_5.inverted li a <?php echo '{'; ?>

<?php if ($this->_tpl_vars['theme_vars_content_bar_5_p_color_inverted'] != "" && $this->_tpl_vars['theme_vars_content_bar_5_p_color_inverted'] != 'Inherit'): ?>		
	color:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_p_color_inverted']; ?>
;
<?php endif; ?>
<?php echo '}'; ?>

#content_bar_6.inverted p,#content_bar_6.inverted td,#content_bar_6.inverted div,#content_bar_6.inverted th,#content_bar_6.inverted label,#content_bar_6.inverted.content li,#content_bar_6.inverted li,#content_bar_6.inverted p a,#content_bar_6.inverted.content li a,#content_bar_6.inverted li a <?php echo '{'; ?>

<?php if ($this->_tpl_vars['theme_vars_content_bar_6_p_color_inverted'] != "" && $this->_tpl_vars['theme_vars_content_bar_6_p_color_inverted'] != 'Inherit'): ?>		
	color:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_p_color_inverted']; ?>
;
<?php endif; ?>
<?php echo '}'; ?>

#content_bar_7.inverted p,#content_bar_7.inverted td,#content_bar_7.inverted div,#content_bar_7.inverted th,#content_bar_7.inverted label,#content_bar_7.inverted.content li,#content_bar_7.inverted li,#content_bar_7.inverted p a,#content_bar_7.inverted.content li a,#content_bar_7.inverted li a <?php echo '{'; ?>

<?php if ($this->_tpl_vars['theme_vars_content_bar_7_p_color_inverted'] != "" && $this->_tpl_vars['theme_vars_content_bar_7_p_color_inverted'] != 'Inherit'): ?>		
	color:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_p_color_inverted']; ?>
;
<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_1.inverted p,#footer_bar_1.inverted td,#footer_bar_1.inverted div,#footer_bar_1.inverted th,#footer_bar_1.inverted label,#footer_bar_1.inverted.content li,#footer_bar_1.inverted li,#footer_bar_1.inverted p a,#footer_bar_1.inverted.content li a,#footer_bar_1.inverted li a <?php echo '{'; ?>

<?php if ($this->_tpl_vars['theme_vars_footer_bar_1_p_color_inverted'] != "" && $this->_tpl_vars['theme_vars_footer_bar_1_p_color_inverted'] != 'Inherit'): ?>		
	color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_1_p_color_inverted']; ?>
;
<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_2.inverted p,#footer_bar_2.inverted td,#footer_bar_2.inverted div,#footer_bar_2.inverted th,#footer_bar_2.inverted label,#footer_bar_2.inverted.content li,#footer_bar_2.inverted li,#footer_bar_2.inverted p a,#footer_bar_2.inverted.content li a,#footer_bar_2.inverted li a <?php echo '{'; ?>

<?php if ($this->_tpl_vars['theme_vars_footer_bar_2_p_color_inverted'] != "" && $this->_tpl_vars['theme_vars_footer_bar_2_p_color_inverted'] != 'Inherit'): ?>		
	color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_2_p_color_inverted']; ?>
;
<?php endif; ?>
<?php echo '}'; ?>

#footer_bar_3.inverted p,#footer_bar_3.inverted td,#footer_bar_3.inverted div,#footer_bar_3.inverted th,#footer_bar_3.inverted label,#footer_bar_3.inverted.content li,#footer_bar_3.inverted li,#footer_bar_3.inverted p a,#footer_bar_3.inverted.content li a,#footer_bar_3.inverted li a <?php echo '{'; ?>

<?php if ($this->_tpl_vars['theme_vars_footer_bar_3_p_color_inverted'] != "" && $this->_tpl_vars['theme_vars_footer_bar_3_p_color_inverted'] != 'Inherit'): ?>		
	color:<?php echo $this->_tpl_vars['theme_vars_footer_bar_3_p_color_inverted']; ?>
;
<?php endif; ?>
<?php echo '}'; ?>



.inverted p.button a,.inverted p.Button_Small a,.inverted p.Button_Medium a,.inverted p.Button_Large a <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_button_color'] != "" && $this->_tpl_vars['theme_vars_button_color'] != 'Inherit'): ?>		
		background:<?php echo $this->_tpl_vars['theme_vars_button_color']; ?>
;	
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_button_bg_color'] != "" && $this->_tpl_vars['theme_vars_button_bg_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_button_bg_color']; ?>
;		

	<?php endif; ?>
<?php echo '}'; ?>

.inverted .expand-box-title:before <?php echo '{'; ?>

	<?php if ($this->_tpl_vars['theme_vars_button_color'] != "" && $this->_tpl_vars['theme_vars_button_color'] != 'Inherit'): ?>		
		color:<?php echo $this->_tpl_vars['theme_vars_button_color']; ?>
;
	<?php endif; ?>
<?php echo '}'; ?>

.inverted .expand-box  <?php echo '{'; ?>

	border-top:1px solid rgba(255,255,255,0.2);
	border-bottom:1px solid rgba(255,255,255,0.2);
<?php echo '}'; ?>




#content_bar_1 .disclosure-reveal <?php echo '{'; ?>

	background-color:<?php echo $this->_tpl_vars['theme_vars_content_bar_1_disclosure_color']; ?>
;
<?php echo '}'; ?>

#content_bar_2 .disclosure-reveal <?php echo '{'; ?>

	background-color:<?php echo $this->_tpl_vars['theme_vars_content_bar_2_disclosure_color']; ?>
;
<?php echo '}'; ?>

#content_bar_3 .disclosure-reveal <?php echo '{'; ?>

	background-color:<?php echo $this->_tpl_vars['theme_vars_content_bar_3_disclosure_color']; ?>
;
<?php echo '}'; ?>

#content_bar_4 .disclosure-reveal <?php echo '{'; ?>

	background-color:<?php echo $this->_tpl_vars['theme_vars_content_bar_4_disclosure_color']; ?>
;
<?php echo '}'; ?>

#content_bar_5 .disclosure-reveal <?php echo '{'; ?>

	background-color:<?php echo $this->_tpl_vars['theme_vars_content_bar_5_disclosure_color']; ?>
;
<?php echo '}'; ?>

#content_bar_6 .disclosure-reveal <?php echo '{'; ?>

	background-color:<?php echo $this->_tpl_vars['theme_vars_content_bar_6_disclosure_color']; ?>
;
<?php echo '}'; ?>

#content_bar_7 .disclosure-reveal <?php echo '{'; ?>

	background-color:<?php echo $this->_tpl_vars['theme_vars_content_bar_7_disclosure_color']; ?>
;
<?php echo '}'; ?>

<?php echo $this->_tpl_vars['theme_vars_custom_styles']; ?>

</style>
<?php echo $this->_tpl_vars['theme_vars_head_code']; ?>

</head>
<?php if ($this->_tpl_vars['theme_vars_header_bar_1']): ?><?php $this->assign('bodybg', $this->_tpl_vars['theme_vars_header_bar_1_bg_color']); ?><?php endif; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_2']): ?><?php $this->assign('bodybg', $this->_tpl_vars['theme_vars_header_bar_2_bg_color']); ?><?php endif; ?>
<?php if ($this->_tpl_vars['theme_vars_header_bar_3']): ?><?php $this->assign('bodybg', $this->_tpl_vars['theme_vars_header_bar_3_bg_color']); ?><?php endif; ?>
<?php if ($this->_tpl_vars['theme_vars_content_bar_1']): ?><?php $this->assign('bodybg', $this->_tpl_vars['theme_vars_content_bar_1_bg_color']); ?><?php endif; ?>
<?php if ($this->_tpl_vars['templateSections']['normal']): ?><?php $this->assign('bodybg', $this->_tpl_vars['theme_vars_content_bar_2_bg_color']); ?><?php endif; ?>
<?php if ($this->_tpl_vars['theme_vars_content_bar_3']): ?><?php $this->assign('bodybg', $this->_tpl_vars['theme_vars_content_bar_3_bg_color']); ?><?php endif; ?>
<?php if ($this->_tpl_vars['theme_vars_content_bar_4']): ?><?php $this->assign('bodybg', $this->_tpl_vars['theme_vars_content_bar_4_bg_color']); ?><?php endif; ?>
<?php if ($this->_tpl_vars['theme_vars_content_bar_5']): ?><?php $this->assign('bodybg', $this->_tpl_vars['theme_vars_content_bar_5_bg_color']); ?><?php endif; ?>
<?php if ($this->_tpl_vars['theme_vars_footer_bar_1']): ?><?php $this->assign('bodybg', $this->_tpl_vars['theme_vars_footer_bar_1_bg_color']); ?><?php endif; ?>
<?php if ($this->_tpl_vars['theme_vars_footer_bar_2']): ?><?php $this->assign('bodybg', $this->_tpl_vars['theme_vars_footer_bar_2_bg_color']); ?><?php endif; ?>
<?php if ($this->_tpl_vars['theme_vars_footer_bar_3']): ?><?php $this->assign('bodybg', $this->_tpl_vars['theme_vars_footer_bar_3_bg_color']); ?><?php endif; ?>
<?php if ($this->_tpl_vars['theme_vars_all_footers_bg_enabled']): ?><?php $this->assign('bodybg', $this->_tpl_vars['theme_vars_all_footers_bg_color']); ?><?php endif; ?>

<body class="<?php if ($this->_tpl_vars['theme_vars_month_at_a_time']): ?>booking-month-at-time<?php endif; ?><?php if ($this->_tpl_vars['theme_vars_fixed_header'] == '1' || $this->_tpl_vars['theme_vars_fixed_header'] == 'skippadding'): ?><?php if ($this->_tpl_vars['theme_vars_fixed_header'] == 'skippadding'): ?>skip-padding<?php endif; ?> with-fixed-header<?php endif; ?> <?php if ($this->_tpl_vars['theme_vars_fixed_header'] == 'noheight'): ?>header-no-height<?php endif; ?>  <?php if ($this->_tpl_vars['content']['homepage']): ?>homepage<?php endif; ?> page_<?php echo $this->_tpl_vars['content']['url']; ?>
 parent_<?php echo $this->_tpl_vars['content']['parent']; ?>
 top_parent_<?php echo $this->_tpl_vars['content']['topParent']; ?>
 page_id_<?php echo $this->_tpl_vars['content']['id']; ?>
 <?php if ($this->_tpl_vars['theme_vars_fixed_header_skip_padding']): ?>skip-padding<?php endif; ?>">
<script type="text/javascript">
	document.body.className += " jsLoading";
</script>
	<?php if ($this->_tpl_vars['theme_vars_all_headers_bg_enabled']): ?>
		<div class="all_bg" id="all_headers_bg"
				<?php if ($this->_tpl_vars['theme_vars_all_headers_bg_mode'] != 'tile' && ( ( $this->_tpl_vars['theme_vars_all_headers_background_video'] == "" && ! $this->_tpl_vars['theme_vars_all_headers_bg_video_sitewide'] ) || ( $this->_tpl_vars['sitewideContent']['All_Headers_Background_Video'] == "" && $this->_tpl_vars['theme_vars_all_headers_bg_video_sitewide'] ) )): ?>
					<?php if ($this->_tpl_vars['theme_vars_all_headers_bg_sitewide'] && $this->_tpl_vars['sitewideContent']['All_Headers_Backgrounds']): ?>
						data-backgrounds="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['sitewideContent']['All_Headers_Backgrounds'])) ? $this->_run_mod_handler('images_to_json', true, $_tmp, true) : smarty_modifier_images_to_json($_tmp, true)))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					<?php else: ?>
						<?php if ($this->_tpl_vars['theme_vars_all_headers_background1']): ?>
							data-backgrounds="[&quot;/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_all_headers_background1']; ?>
&quot;<?php if ($this->_tpl_vars['theme_vars_all_headers_background2']): ?>,&quot;/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_all_headers_background2']; ?>
&quot;<?php endif; ?><?php if ($this->_tpl_vars['theme_vars_all_headers_background3']): ?>,&quot;/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_all_headers_background3']; ?>
&quot;<?php endif; ?><?php if ($this->_tpl_vars['theme_vars_all_headers_background4']): ?>,&quot;/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_all_headers_background4']; ?>
&quot;<?php endif; ?><?php if ($this->_tpl_vars['theme_vars_all_headers_background5']): ?>,&quot;/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_all_headers_background5']; ?>
&quot;<?php endif; ?>]"
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
				data-background-fade="1000"
				data-background-panzoom="<?php echo $this->_tpl_vars['theme_vars_all_headers_panzoom']; ?>
"
				data-background-duration="5000"
				data-background-color="<?php echo $this->_tpl_vars['theme_vars_all_headers_bg_color']; ?>
"
				data-background-opacity="<?php echo $this->_tpl_vars['theme_vars_all_headers_bg_opacity']; ?>
"
				<?php if ($this->_tpl_vars['theme_vars_all_headers_bg_mode'] == 'parallax_slow'): ?>
				data-scroll-decay="0.1"
				<?php endif; ?>
				<?php if ($this->_tpl_vars['theme_vars_all_headers_bg_mode'] == 'parallax_norm'): ?>
				data-scroll-decay="0.5"
				<?php endif; ?>
				<?php if ($this->_tpl_vars['theme_vars_all_headers_bg_mode'] == 'parallax_fast'): ?>
				data-scroll-decay="0.9"
				<?php endif; ?>
				<?php if ($this->_tpl_vars['theme_vars_all_headers_bg_mode'] == 'parallax_infini'): ?>
				data-scroll-decay="1"
				<?php endif; ?>
				style="background-color:<?php echo $this->_tpl_vars['theme_vars_all_headers_bg_color']; ?>
;<?php if ($this->_tpl_vars['theme_vars_all_headers_bg_mode'] == 'tile'): ?>background-image:url(/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_all_headers_background1']; ?>
);background-repeat:repeat;<?php endif; ?>"
				<?php if ($this->_tpl_vars['theme_vars_all_headers_background_video'] && $this->_tpl_vars['sitewideContent']['All_Headers_Background_Video'] != ""): ?>
					<?php $this->assign('videostr', ((is_array($_tmp="href=\"/media")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['sitewideContent']['All_Headers_Background_Video']) : explode($_tmp, $this->_tpl_vars['sitewideContent']['All_Headers_Background_Video']))); ?>
					<?php $this->assign('videostr2', ((is_array($_tmp="\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['videostr'][1]) : explode($_tmp, $this->_tpl_vars['videostr'][1]))); ?>
					<?php if (! $this->_tpl_vars['theme_vars_all_headers_bg_sitewide'] || ! $this->_tpl_vars['sitewideContent']['All_Headers_Backgrounds']): ?>
						<?php $this->assign('imgstr', ((is_array($_tmp="src=\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['sitewideContent']['All_Headers_Background_Video']) : explode($_tmp, $this->_tpl_vars['sitewideContent']['All_Headers_Background_Video']))); ?>
						<?php $this->assign('imgstr2', ((is_array($_tmp="\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['imgstr'][1]) : explode($_tmp, $this->_tpl_vars['imgstr'][1]))); ?>
						<?php $this->assign('imgstr3', $this->_tpl_vars['imgstr2'][0]); ?>
					<?php else: ?>
						<?php $this->assign('imgstr', ((is_array($_tmp="src=\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['sitewideContent']['All_Headers_Backgrounds']) : explode($_tmp, $this->_tpl_vars['sitewideContent']['All_Headers_Backgrounds']))); ?>
						<?php $this->assign('imgstr2', ((is_array($_tmp="\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['imgstr'][1]) : explode($_tmp, $this->_tpl_vars['imgstr'][1]))); ?>
						<?php $this->assign('imgstr3t', ((is_array($_tmp="?")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['imgstr2'][0]) : explode($_tmp, $this->_tpl_vars['imgstr2'][0]))); ?>
						<?php $this->assign('imgstr3', $this->_tpl_vars['imgstr3t'][0]); ?>
					<?php endif; ?>
					data-vide-bg="mp4: /media<?php echo $this->_tpl_vars['videostr2'][0]; ?>
, poster: <?php echo $this->_tpl_vars['imgstr3']; ?>
"
					data-vide-options="loop: true, muted: <?php if ($this->_tpl_vars['theme_vars_mute_bg_video']): ?>true<?php else: ?>false<?php endif; ?>, position: 50% 50%, opacity: <?php echo $this->_tpl_vars['theme_vars_all_headers_bg_opacity']; ?>
"
				<?php elseif ($this->_tpl_vars['theme_vars_all_headers_background_video']): ?>
					data-vide-bg="mp4: /media/<?php echo $this->_tpl_vars['theme_vars_all_headers_background_video']; ?>
, poster: /images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_all_headers_background1']; ?>
"
					data-vide-options="loop: true, muted: <?php if ($this->_tpl_vars['theme_vars_mute_bg_video']): ?>true<?php else: ?>false<?php endif; ?>, position: 50% 50%, opacity: <?php echo $this->_tpl_vars['theme_vars_all_headers_bg_opacity']; ?>
"
				<?php endif; ?>
			>
	<?php endif; ?>
	<div id="header">

	<?php if ($this->_tpl_vars['theme_vars_header_bar_1']): ?>
		
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row.tpl", 'smarty_include_vars' => array('mr_id' => 'header_bar_1','bg_enabled' => $this->_tpl_vars['theme_vars_header_bar_1_bg_sitewide'],'show_in_fixed' => $this->_tpl_vars['theme_vars_header_bar_1_show_in_fixed'],'Backgrounds' => $this->_tpl_vars['sitewideContent']['Header_Bar_1_Backgrounds'],'background1' => $this->_tpl_vars['theme_vars_header_bar_1_background1'],'background2' => $this->_tpl_vars['theme_vars_header_bar_1_background2'],'background3' => $this->_tpl_vars['theme_vars_header_bar_1_background3'],'background4' => $this->_tpl_vars['theme_vars_header_bar_1_background4'],'background5' => $this->_tpl_vars['theme_vars_header_bar_1_background5'],'panzoom' => $this->_tpl_vars['theme_vars_header_bar_1_panzoom'],'background_video' => $this->_tpl_vars['theme_vars_header_bar_1_background_video'],'background_video_sw_enabled' => $this->_tpl_vars['theme_vars_header_bar_1_bg_video_sitewide'],'background_video_sw' => $this->_tpl_vars['sitewideContent']['Header_Bar_1_Background_Video'],'bg_color' => $this->_tpl_vars['theme_vars_header_bar_1_bg_color'],'bg_opacity' => $this->_tpl_vars['theme_vars_header_bar_1_bg_opacity'],'bg_mode' => $this->_tpl_vars['theme_vars_header_bar_1_bg_mode'],'height' => $this->_tpl_vars['theme_vars_header_bar_1_height'],'centered' => $this->_tpl_vars['theme_vars_header_bar_1_centered'],'right' => $this->_tpl_vars['theme_vars_header_bar_1_right'],'left' => $this->_tpl_vars['theme_vars_header_bar_1_left'],'nav_style' => $this->_tpl_vars['theme_vars_header_bar_1_nav_style'],'search' => $this->_tpl_vars['theme_vars_header_bar_1_search'],'basket' => $this->_tpl_vars['theme_vars_header_bar_1_basket'],'logo_file' => $this->_tpl_vars['theme_vars_header_bar_1_logo'],'logo_file_fixed' => $this->_tpl_vars['theme_vars_header_bar_1_logo_fixed'],'logo_link' => $this->_tpl_vars['theme_vars_header_bar_1_logo_link'],'logo2' => $this->_tpl_vars['theme_vars_header_bar_1_logo2'],'logo2_fixed' => $this->_tpl_vars['theme_vars_header_bar_1_logo2_fixed'],'logo2_link' => $this->_tpl_vars['theme_vars_header_bar_1_logo2_link'],'logo3' => $this->_tpl_vars['theme_vars_header_bar_1_logo3'],'logo3_fixed' => $this->_tpl_vars['theme_vars_header_bar_1_logo3_fixed'],'logo3_link' => $this->_tpl_vars['theme_vars_header_bar_1_logo3_link'],'Left' => $this->_tpl_vars['sitewideContent']['Header_Bar_1_Left'],'Left_Secondary' => $this->_tpl_vars['sitewideContent']['Header_Bar_1_Left_Secondary'],'left_2' => $this->_tpl_vars['theme_vars_header_bar_1_left_2'],'Right' => $this->_tpl_vars['sitewideContent']['Header_Bar_1_Right'],'Right_Secondary' => $this->_tpl_vars['sitewideContent']['Header_Bar_1_Right_Secondary'],'right_2' => $this->_tpl_vars['theme_vars_header_bar_1_right_2'],'Centered' => $this->_tpl_vars['sitewideContent']['Header_Bar_1_Centered'],'left_valign' => $this->_tpl_vars['theme_vars_header_bar_1_left_valign'],'right_valign' => $this->_tpl_vars['theme_vars_header_bar_1_right_valign'],'inverted' => $this->_tpl_vars['theme_vars_header_bar_1_inverted'],'full_top_enabled' => $this->_tpl_vars['theme_vars_header_bar_1_fullwidth_top'],'full_top_content' => $this->_tpl_vars['sitewideContent']['Header_Bar_1_Full_Width_Top'],'full_bottom_enabled' => $this->_tpl_vars['theme_vars_header_bar_1_fullwidth_bottom'],'full_bottom_content' => $this->_tpl_vars['sitewideContent']['Header_Bar_1_Full_Width_Bottom'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
	<?php endif; ?>


	<?php if ($this->_tpl_vars['theme_vars_header_bar_2']): ?>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row.tpl", 'smarty_include_vars' => array('mr_id' => 'header_bar_2','bg_enabled' => $this->_tpl_vars['theme_vars_header_bar_2_bg_sitewide'],'show_in_fixed' => $this->_tpl_vars['theme_vars_header_bar_2_show_in_fixed'],'Backgrounds' => $this->_tpl_vars['sitewideContent']['Header_Bar_2_Backgrounds'],'background1' => $this->_tpl_vars['theme_vars_header_bar_2_background1'],'background2' => $this->_tpl_vars['theme_vars_header_bar_2_background2'],'background3' => $this->_tpl_vars['theme_vars_header_bar_2_background3'],'background4' => $this->_tpl_vars['theme_vars_header_bar_2_background4'],'background5' => $this->_tpl_vars['theme_vars_header_bar_2_background5'],'panzoom' => $this->_tpl_vars['theme_vars_header_bar_2_panzoom'],'background_video' => $this->_tpl_vars['theme_vars_header_bar_2_background_video'],'background_video_sw_enabled' => $this->_tpl_vars['theme_vars_header_bar_2_bg_video_sitewide'],'background_video_sw' => $this->_tpl_vars['sitewideContent']['Header_Bar_2_Background_Video'],'bg_color' => $this->_tpl_vars['theme_vars_header_bar_2_bg_color'],'bg_opacity' => $this->_tpl_vars['theme_vars_header_bar_2_bg_opacity'],'bg_mode' => $this->_tpl_vars['theme_vars_header_bar_2_bg_mode'],'height' => $this->_tpl_vars['theme_vars_header_bar_2_height'],'centered' => $this->_tpl_vars['theme_vars_header_bar_2_centered'],'right' => $this->_tpl_vars['theme_vars_header_bar_2_right'],'left' => $this->_tpl_vars['theme_vars_header_bar_2_left'],'nav_style' => $this->_tpl_vars['theme_vars_header_bar_2_nav_style'],'search' => $this->_tpl_vars['theme_vars_header_bar_2_search'],'basket' => $this->_tpl_vars['theme_vars_header_bar_2_basket'],'logo_file' => $this->_tpl_vars['theme_vars_header_bar_2_logo'],'logo_file_fixed' => $this->_tpl_vars['theme_vars_header_bar_2_logo_fixed'],'logo_link' => $this->_tpl_vars['theme_vars_header_bar_2_logo_link'],'logo2' => $this->_tpl_vars['theme_vars_header_bar_2_logo2'],'logo2_fixed' => $this->_tpl_vars['theme_vars_header_bar_2_logo2_fixed'],'logo2_link' => $this->_tpl_vars['theme_vars_header_bar_2_logo2_link'],'logo3' => $this->_tpl_vars['theme_vars_header_bar_2_logo3'],'logo3_fixed' => $this->_tpl_vars['theme_vars_header_bar_2_logo3_fixed'],'logo3_link' => $this->_tpl_vars['theme_vars_header_bar_2_logo3_link'],'Left' => $this->_tpl_vars['sitewideContent']['Header_Bar_2_Left'],'Left_Secondary' => $this->_tpl_vars['sitewideContent']['Header_Bar_2_Left_Secondary'],'left_2' => $this->_tpl_vars['theme_vars_header_bar_2_left_2'],'Right' => $this->_tpl_vars['sitewideContent']['Header_Bar_2_Right'],'Right_Secondary' => $this->_tpl_vars['sitewideContent']['Header_Bar_2_Right_Secondary'],'right_2' => $this->_tpl_vars['theme_vars_header_bar_2_right_2'],'Centered' => $this->_tpl_vars['sitewideContent']['Header_Bar_2_Centered'],'left_valign' => $this->_tpl_vars['theme_vars_header_bar_2_left_valign'],'right_valign' => $this->_tpl_vars['theme_vars_header_bar_2_right_valign'],'inverted' => $this->_tpl_vars['theme_vars_header_bar_2_inverted'],'full_top_enabled' => $this->_tpl_vars['theme_vars_header_bar_2_fullwidth_top'],'full_top_content' => $this->_tpl_vars['sitewideContent']['Header_Bar_2_Full_Width_Top'],'full_bottom_enabled' => $this->_tpl_vars['theme_vars_header_bar_2_fullwidth_bottom'],'full_bottom_content' => $this->_tpl_vars['sitewideContent']['Header_Bar_2_Full_Width_Bottom'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
	<?php endif; ?>



	<?php if ($this->_tpl_vars['theme_vars_header_bar_3']): ?>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row.tpl", 'smarty_include_vars' => array('mr_id' => 'header_bar_3','bg_enabled' => $this->_tpl_vars['theme_vars_header_bar_3_bg_sitewide'],'show_in_fixed' => $this->_tpl_vars['theme_vars_header_bar_3_show_in_fixed'],'Backgrounds' => $this->_tpl_vars['sitewideContent']['Header_Bar_3_Backgrounds'],'background1' => $this->_tpl_vars['theme_vars_header_bar_3_background1'],'background2' => $this->_tpl_vars['theme_vars_header_bar_3_background2'],'background3' => $this->_tpl_vars['theme_vars_header_bar_3_background3'],'background4' => $this->_tpl_vars['theme_vars_header_bar_3_background4'],'background5' => $this->_tpl_vars['theme_vars_header_bar_3_background5'],'panzoom' => $this->_tpl_vars['theme_vars_header_bar_3_panzoom'],'background_video' => $this->_tpl_vars['theme_vars_header_bar_3_background_video'],'background_video_sw_enabled' => $this->_tpl_vars['theme_vars_header_bar_3_bg_video_sitewide'],'background_video_sw' => $this->_tpl_vars['sitewideContent']['Header_Bar_3_Background_Video'],'bg_color' => $this->_tpl_vars['theme_vars_header_bar_3_bg_color'],'bg_opacity' => $this->_tpl_vars['theme_vars_header_bar_3_bg_opacity'],'bg_mode' => $this->_tpl_vars['theme_vars_header_bar_3_bg_mode'],'height' => $this->_tpl_vars['theme_vars_header_bar_3_height'],'centered' => $this->_tpl_vars['theme_vars_header_bar_3_centered'],'right' => $this->_tpl_vars['theme_vars_header_bar_3_right'],'left' => $this->_tpl_vars['theme_vars_header_bar_3_left'],'nav_style' => $this->_tpl_vars['theme_vars_header_bar_3_nav_style'],'search' => $this->_tpl_vars['theme_vars_header_bar_3_search'],'basket' => $this->_tpl_vars['theme_vars_header_bar_3_basket'],'logo_file' => $this->_tpl_vars['theme_vars_header_bar_3_logo'],'logo_file_fixed' => $this->_tpl_vars['theme_vars_header_bar_3_logo_fixed'],'logo_link' => $this->_tpl_vars['theme_vars_header_bar_3_logo_link'],'logo2' => $this->_tpl_vars['theme_vars_header_bar_3_logo2'],'logo2_fixed' => $this->_tpl_vars['theme_vars_header_bar_3_logo2_fixed'],'logo2_link' => $this->_tpl_vars['theme_vars_header_bar_3_logo2_link'],'logo3' => $this->_tpl_vars['theme_vars_header_bar_3_logo3'],'logo3_fixed' => $this->_tpl_vars['theme_vars_header_bar_3_logo3_fixed'],'logo3_link' => $this->_tpl_vars['theme_vars_header_bar_3_logo3_link'],'Left' => $this->_tpl_vars['sitewideContent']['Header_Bar_3_Left'],'Left_Secondary' => $this->_tpl_vars['sitewideContent']['Header_Bar_3_Left_Secondary'],'left_2' => $this->_tpl_vars['theme_vars_header_bar_3_left_2'],'Right' => $this->_tpl_vars['sitewideContent']['Header_Bar_3_Right'],'Right_Secondary' => $this->_tpl_vars['sitewideContent']['Header_Bar_3_Right_Secondary'],'right_2' => $this->_tpl_vars['theme_vars_header_bar_3_right_2'],'Centered' => $this->_tpl_vars['sitewideContent']['Header_Bar_3_Centered'],'left_valign' => $this->_tpl_vars['theme_vars_header_bar_3_left_valign'],'right_valign' => $this->_tpl_vars['theme_vars_header_bar_3_right_valign'],'inverted' => $this->_tpl_vars['theme_vars_header_bar_3_inverted'],'full_top_enabled' => $this->_tpl_vars['theme_vars_header_bar_3_fullwidth_top'],'full_top_content' => $this->_tpl_vars['sitewideContent']['Header_Bar_3_Full_Width_Top'],'full_bottom_enabled' => $this->_tpl_vars['theme_vars_header_bar_3_fullwidth_bottom'],'full_bottom_content' => $this->_tpl_vars['sitewideContent']['Header_Bar_3_Full_Width_Bottom'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
	<?php endif; ?>
	
	</div>
	

	<?php if ($this->_tpl_vars['theme_vars_all_headers_bg_enabled']): ?>
	</div>
	<?php endif; ?>

	<main id="main" tabindex="-1">

	<?php if ($this->_tpl_vars['theme_vars_content_bar_1_banner_enabled'] && ! $this->_tpl_vars['security'] && $this->_tpl_vars['templateSections']['Content_Bar_1_Banner']): ?>
		<?php if ($this->_tpl_vars['theme_vars_content_bar_1_banner_type'] == 'slideshow' || $this->_tpl_vars['theme_vars_content_bar_1_banner_type'] == 'bannerwidgets'): ?>
			<?php if ($this->_tpl_vars['theme_vars_content_bar_1_banner_type'] == 'bannerwidgets'): ?>
				<?php $this->assign('bannerheight', $this->_tpl_vars['theme_vars_content_bar_1_banner_height']); ?>
				<?php $this->assign('bannerwidgetsbool', true); ?>
			<?php else: ?>
				<?php $this->assign('bannerheight', 'auto'); ?>
				<?php $this->assign('bannerwidgetsbool', false); ?>
			<?php endif; ?>
			
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_1_banner_slideshow','content' => $this->_tpl_vars['templateSections']['Content_Bar_1_Banner'],'slideshow_speed' => $this->_tpl_vars['theme_vars_content_bar_1_banner_slideshow_speed'],'slideshow_style' => $this->_tpl_vars['theme_vars_content_bar_1_banner_slideshow_style'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_1_banner_bg_color'],'height' => $this->_tpl_vars['bannerheight'],'fill' => 1,'widgets' => $this->_tpl_vars['bannerwidgetsbool'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
			<?php $this->assign('tcontent', ""); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_1_banner','bg_mode' => $this->_tpl_vars['theme_vars_content_bar_1_banner_type'],'bg_enabled' => '1','Backgrounds' => $this->_tpl_vars['templateSections']['Content_Bar_1_Banner'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_1_banner_bg_color'],'bg_opacity' => 1,'height' => $this->_tpl_vars['theme_vars_content_bar_1_banner_height'],'content' => $this->_tpl_vars['tcontent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		
		
	<?php endif; ?>
	
					
	<?php if ($this->_tpl_vars['theme_vars_content_bar_1'] && ! $this->_tpl_vars['security'] && ( $this->_tpl_vars['templateSections']['Content_Bar_1'] || ( $this->_tpl_vars['theme_vars_content_bar_1_backgrounds_enabled'] && ( $this->_tpl_vars['theme_vars_content_bar_1_background1'] || $this->_tpl_vars['templateSections']['Content_Bar_1_Backgrounds'] ) ) )): ?>
		<?php $this->assign('tcontent', $this->_tpl_vars['templateSections']['Content_Bar_1']); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_1','bgmode' => $this->_tpl_vars['theme_vars_content_bar_1_bg_mode'],'bg_enabled' => $this->_tpl_vars['theme_vars_content_bar_1_backgrounds_enabled'],'Backgrounds' => $this->_tpl_vars['templateSections']['Content_Bar_1_Backgrounds'],'disclosure' => $this->_tpl_vars['theme_vars_content_bar_1_disclosure'],'background1' => $this->_tpl_vars['theme_vars_content_bar_1_background1'],'background2' => $this->_tpl_vars['theme_vars_content_bar_1_background2'],'background3' => $this->_tpl_vars['theme_vars_content_bar_1_background3'],'background4' => $this->_tpl_vars['theme_vars_content_bar_1_background4'],'background5' => $this->_tpl_vars['theme_vars_content_bar_1_background5'],'panzoom' => $this->_tpl_vars['theme_vars_content_bar_1_panzoom'],'background_video' => $this->_tpl_vars['theme_vars_content_bar_1_background_video'],'background_video_ts_enabled' => $this->_tpl_vars['theme_vars_content_bar_1_background_video_enabled'],'background_video_ts' => $this->_tpl_vars['templateSections']['Content_Bar_1_Background_Video'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_1_bg_color'],'bg_opacity' => $this->_tpl_vars['theme_vars_content_bar_1_bg_opacity'],'bg_mode' => $this->_tpl_vars['theme_vars_content_bar_1_bg_mode'],'height' => $this->_tpl_vars['theme_vars_content_bar_1_height'],'content' => $this->_tpl_vars['tcontent'],'inverted' => $this->_tpl_vars['theme_vars_content_bar_1_inverted'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>	

	
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2_banner_enabled'] && ! $this->_tpl_vars['security'] && $this->_tpl_vars['templateSections']['Content_Bar_2_Banner']): ?>
		<?php if ($this->_tpl_vars['theme_vars_content_bar_2_banner_type'] == 'slideshow' || $this->_tpl_vars['theme_vars_content_bar_2_banner_type'] == 'bannerwidgets'): ?>
			<?php if ($this->_tpl_vars['theme_vars_content_bar_2_banner_type'] == 'bannerwidgets'): ?>
				<?php $this->assign('bannerheight', $this->_tpl_vars['theme_vars_content_bar_2_banner_height']); ?>
				<?php $this->assign('bannerwidgetsbool', true); ?>
			<?php else: ?>
				<?php $this->assign('bannerheight', 'auto'); ?>
				<?php $this->assign('bannerwidgetsbool', false); ?>
			<?php endif; ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_2_banner_slideshow','content' => $this->_tpl_vars['templateSections']['Content_Bar_2_Banner'],'slideshow_speed' => $this->_tpl_vars['theme_vars_content_bar_2_banner_slideshow_speed'],'slideshow_style' => $this->_tpl_vars['theme_vars_content_bar_2_banner_slideshow_style'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_2_banner_bg_color'],'height' => $this->_tpl_vars['bannerheight'],'fill' => 1,'widgets' => $this->_tpl_vars['bannerwidgetsbool'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
			<?php $this->assign('tcontent', ""); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_2_banner','bg_mode' => $this->_tpl_vars['theme_vars_content_bar_2_banner_type'],'bg_enabled' => '1','Backgrounds' => $this->_tpl_vars['templateSections']['Content_Bar_2_Banner'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_2_banner_bg_color'],'bg_opacity' => 1,'height' => $this->_tpl_vars['theme_vars_content_bar_2_banner_height'],'content' => $this->_tpl_vars['tcontent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		
		
	<?php endif; ?>
	
	<?php if ($this->_tpl_vars['theme_vars_content_bar_2'] && ! $this->_tpl_vars['security'] && ( $this->_tpl_vars['templateSections']['Content_Bar_2'] || ( $this->_tpl_vars['theme_vars_content_bar_2_backgrounds_enabled'] && ( $this->_tpl_vars['theme_vars_content_bar_2_background1'] || $this->_tpl_vars['templateSections']['Content_Bar_2_Backgrounds'] ) ) )): ?>
		<?php $this->assign('tcontent', $this->_tpl_vars['templateSections']['Content_Bar_2']); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_2','bgmode' => $this->_tpl_vars['theme_vars_content_bar_2_bg_mode'],'bg_enabled' => $this->_tpl_vars['theme_vars_content_bar_2_backgrounds_enabled'],'Backgrounds' => $this->_tpl_vars['templateSections']['Content_Bar_2_Backgrounds'],'disclosure' => $this->_tpl_vars['theme_vars_content_bar_2_disclosure'],'background1' => $this->_tpl_vars['theme_vars_content_bar_2_background1'],'background2' => $this->_tpl_vars['theme_vars_content_bar_2_background2'],'background3' => $this->_tpl_vars['theme_vars_content_bar_2_background3'],'background4' => $this->_tpl_vars['theme_vars_content_bar_2_background4'],'background5' => $this->_tpl_vars['theme_vars_content_bar_2_background5'],'panzoom' => $this->_tpl_vars['theme_vars_content_bar_2_panzoom'],'background_video' => $this->_tpl_vars['theme_vars_content_bar_2_background_video'],'background_video_ts_enabled' => $this->_tpl_vars['theme_vars_content_bar_2_background_video_enabled'],'background_video_ts' => $this->_tpl_vars['templateSections']['Content_Bar_2_Background_Video'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_2_bg_color'],'bg_opacity' => $this->_tpl_vars['theme_vars_content_bar_2_bg_opacity'],'bg_mode' => $this->_tpl_vars['theme_vars_content_bar_2_bg_mode'],'height' => $this->_tpl_vars['theme_vars_content_bar_2_height'],'content' => $this->_tpl_vars['tcontent'],'inverted' => $this->_tpl_vars['theme_vars_content_bar_2_inverted'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

	
	

	<?php if ($this->_tpl_vars['theme_vars_content_bar_3_banner_enabled'] && ! $this->_tpl_vars['security'] && $this->_tpl_vars['templateSections']['Main_Content_Banner']): ?>
		<?php if ($this->_tpl_vars['theme_vars_content_bar_3_banner_type'] == 'slideshow' || $this->_tpl_vars['theme_vars_content_bar_3_banner_type'] == 'bannerwidgets'): ?>
			<?php if ($this->_tpl_vars['theme_vars_content_bar_3_banner_type'] == 'bannerwidgets'): ?>
				<?php $this->assign('bannerheight', $this->_tpl_vars['theme_vars_content_bar_3_banner_height']); ?>
				<?php $this->assign('bannerwidgetsbool', true); ?>
			<?php else: ?>
				<?php $this->assign('bannerheight', 'auto'); ?>
				<?php $this->assign('bannerwidgetsbool', false); ?>
			<?php endif; ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_3_banner_slideshow','content' => $this->_tpl_vars['templateSections']['Main_Content_Banner'],'slideshow_speed' => $this->_tpl_vars['theme_vars_content_bar_3_banner_slideshow_speed'],'slideshow_style' => $this->_tpl_vars['theme_vars_content_bar_3_banner_slideshow_style'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_3_banner_bg_color'],'height' => $this->_tpl_vars['bannerheight'],'fill' => 1,'widgets' => $this->_tpl_vars['bannerwidgetsbool'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
			<?php $this->assign('tcontent', ""); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('id' => 'content_bar_3_banner','bg_mode' => $this->_tpl_vars['theme_vars_content_bar_3_banner_type'],'bg_enabled' => '1','Backgrounds' => $this->_tpl_vars['templateSections']['Main_Content_Banner'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_3_banner_bg_color'],'bg_opacity' => 1,'height' => $this->_tpl_vars['theme_vars_content_bar_3_banner_height'],'content' => $this->_tpl_vars['tcontent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		
		
	<?php endif; ?>
	<?php if ($this->_tpl_vars['templateSections']['normal'] || $this->_tpl_vars['search_all']): ?>
		<?php if (! $this->_tpl_vars['security']): ?>
			<?php if ($this->_tpl_vars['templateSections']['Content_Bar_3'] || $this->_tpl_vars['templateSections']['normal'] || $this->_tpl_vars['search_all']): ?>
				<?php ob_start(); ?>
					<?php if ($this->_tpl_vars['search_all']): ?>
						<h1><?php echo $this->_tpl_vars['langs']['Search_Results']; ?>
</h1>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/search_results.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php echo $this->_tpl_vars['templateSections']['normal']; ?>

					<?php echo $this->_tpl_vars['templateSections']['Content_Bar_3']; ?>

				<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('tempcontent', ob_get_contents());ob_end_clean(); ?>
			<?php endif; ?>
		<?php else: ?>
			<?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/login.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('tempcontent', ob_get_contents()); ob_end_clean();
 ?>
		<?php endif; ?>
		
		
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_3','bgmode' => $this->_tpl_vars['theme_vars_content_bar_3_bg_mode'],'bg_enabled' => $this->_tpl_vars['theme_vars_content_bar_3_backgrounds_enabled'],'Backgrounds' => $this->_tpl_vars['templateSections']['Main_Content_Backgrounds'],'disclosure' => $this->_tpl_vars['theme_vars_content_bar_3_disclosure'],'background1' => $this->_tpl_vars['theme_vars_content_bar_3_background1'],'background2' => $this->_tpl_vars['theme_vars_content_bar_3_background2'],'background3' => $this->_tpl_vars['theme_vars_content_bar_3_background3'],'background4' => $this->_tpl_vars['theme_vars_content_bar_3_background4'],'background5' => $this->_tpl_vars['theme_vars_content_bar_3_background5'],'panzoom' => $this->_tpl_vars['theme_vars_content_bar_3_panzoom'],'background_video' => $this->_tpl_vars['theme_vars_content_bar_3_background_video'],'background_video_ts_enabled' => $this->_tpl_vars['theme_vars_content_bar_3_background_video_enabled'],'background_video_ts' => $this->_tpl_vars['templateSections']['Content_Bar_3_Background_Video'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_3_bg_color'],'bg_opacity' => $this->_tpl_vars['theme_vars_content_bar_3_bg_opacity'],'bg_mode' => $this->_tpl_vars['theme_vars_content_bar_3_bg_mode'],'height' => $this->_tpl_vars['theme_vars_content_bar_3_height'],'content' => $this->_tpl_vars['tempcontent'],'inverted' => $this->_tpl_vars['theme_vars_content_bar_3_inverted'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4_banner_enabled'] && ! $this->_tpl_vars['security'] && $this->_tpl_vars['templateSections']['Content_Bar_4_Banner']): ?>
		<?php if ($this->_tpl_vars['theme_vars_content_bar_4_banner_type'] == 'slideshow' || $this->_tpl_vars['theme_vars_content_bar_4_banner_type'] == 'bannerwidgets'): ?>
			<?php if ($this->_tpl_vars['theme_vars_content_bar_4_banner_type'] == 'bannerwidgets'): ?>
				<?php $this->assign('bannerheight', $this->_tpl_vars['theme_vars_content_bar_4_banner_height']); ?>
				<?php $this->assign('bannerwidgetsbool', true); ?>
			<?php else: ?>
				<?php $this->assign('bannerheight', 'auto'); ?>
				<?php $this->assign('bannerwidgetsbool', false); ?>
			<?php endif; ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_4_banner_slideshow','content' => $this->_tpl_vars['templateSections']['Content_Bar_4_Banner'],'slideshow_speed' => $this->_tpl_vars['theme_vars_content_bar_4_banner_slideshow_speed'],'slideshow_style' => $this->_tpl_vars['theme_vars_content_bar_4_banner_slideshow_style'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_4_banner_bg_color'],'height' => $this->_tpl_vars['bannerheight'],'fill' => 1,'widgets' => $this->_tpl_vars['bannerwidgetsbool'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
			<?php $this->assign('tcontent', ""); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_4_banner','bg_mode' => $this->_tpl_vars['theme_vars_content_bar_4_banner_type'],'bg_enabled' => '1','Backgrounds' => $this->_tpl_vars['templateSections']['Content_Bar_4_Banner'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_4_banner_bg_color'],'bg_opacity' => 1,'height' => $this->_tpl_vars['theme_vars_content_bar_4_banner_height'],'content' => $this->_tpl_vars['tcontent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		
		
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_4'] && ! $this->_tpl_vars['security'] && ( $this->_tpl_vars['templateSections']['Content_Bar_4'] || ( $this->_tpl_vars['theme_vars_content_bar_4_backgrounds_enabled'] && ( $this->_tpl_vars['theme_vars_content_bar_4_background1'] || $this->_tpl_vars['templateSections']['Content_Bar_4_Backgrounds'] ) ) )): ?>
		<?php $this->assign('tcontent', $this->_tpl_vars['templateSections']['Content_Bar_4']); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_4','bgmode' => $this->_tpl_vars['theme_vars_content_bar_4_bg_mode'],'bg_enabled' => $this->_tpl_vars['theme_vars_content_bar_4_backgrounds_enabled'],'Backgrounds' => $this->_tpl_vars['templateSections']['Content_Bar_4_Backgrounds'],'disclosure' => $this->_tpl_vars['theme_vars_content_bar_4_disclosure'],'background1' => $this->_tpl_vars['theme_vars_content_bar_4_background1'],'background2' => $this->_tpl_vars['theme_vars_content_bar_4_background2'],'background3' => $this->_tpl_vars['theme_vars_content_bar_4_background3'],'background4' => $this->_tpl_vars['theme_vars_content_bar_4_background4'],'background5' => $this->_tpl_vars['theme_vars_content_bar_4_background5'],'panzoom' => $this->_tpl_vars['theme_vars_content_bar_4_panzoom'],'background_video' => $this->_tpl_vars['theme_vars_content_bar_4_background_video'],'background_video_ts_enabled' => $this->_tpl_vars['theme_vars_content_bar_4_background_video_enabled'],'background_video_ts' => $this->_tpl_vars['templateSections']['Content_Bar_4_Background_Video'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_4_bg_color'],'bg_opacity' => $this->_tpl_vars['theme_vars_content_bar_4_bg_opacity'],'bg_mode' => $this->_tpl_vars['theme_vars_content_bar_4_bg_mode'],'height' => $this->_tpl_vars['theme_vars_content_bar_4_height'],'content' => $this->_tpl_vars['tcontent'],'inverted' => $this->_tpl_vars['theme_vars_content_bar_4_inverted'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['theme_vars_content_bar_5_banner_enabled'] && ! $this->_tpl_vars['security'] && $this->_tpl_vars['templateSections']['Content_Bar_5_Banner']): ?>
		<?php if ($this->_tpl_vars['theme_vars_content_bar_5_banner_type'] == 'slideshow' || $this->_tpl_vars['theme_vars_content_bar_5_banner_type'] == 'bannerwidgets'): ?>
			<?php if ($this->_tpl_vars['theme_vars_content_bar_5_banner_type'] == 'bannerwidgets'): ?>
				<?php $this->assign('bannerheight', $this->_tpl_vars['theme_vars_content_bar_5_banner_height']); ?>
				<?php $this->assign('bannerwidgetsbool', true); ?>
			<?php else: ?>
				<?php $this->assign('bannerheight', 'auto'); ?>
				<?php $this->assign('bannerwidgetsbool', false); ?>
			<?php endif; ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_5_banner_slideshow','content' => $this->_tpl_vars['templateSections']['Content_Bar_5_Banner'],'slideshow_speed' => $this->_tpl_vars['theme_vars_content_bar_5_banner_slideshow_speed'],'slideshow_style' => $this->_tpl_vars['theme_vars_content_bar_5_banner_slideshow_style'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_5_banner_bg_color'],'height' => $this->_tpl_vars['bannerheight'],'fill' => 1,'widgets' => $this->_tpl_vars['bannerwidgetsbool'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
			<?php $this->assign('tcontent', ""); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_5_banner','bg_mode' => $this->_tpl_vars['theme_vars_content_bar_5_banner_type'],'bg_enabled' => '1','Backgrounds' => $this->_tpl_vars['templateSections']['Content_Bar_5_Banner'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_5_banner_bg_color'],'bg_opacity' => 1,'height' => $this->_tpl_vars['theme_vars_content_bar_5_banner_height'],'content' => $this->_tpl_vars['tcontent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		
		
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_5'] && ! $this->_tpl_vars['security'] && ( $this->_tpl_vars['templateSections']['Content_Bar_5'] || ( $this->_tpl_vars['theme_vars_content_bar_5_backgrounds_enabled'] && ( $this->_tpl_vars['theme_vars_content_bar_5_background1'] || $this->_tpl_vars['templateSections']['Content_Bar_5_Backgrounds'] ) ) )): ?>
		<?php $this->assign('tcontent', $this->_tpl_vars['templateSections']['Content_Bar_5']); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_5','bgmode' => $this->_tpl_vars['theme_vars_content_bar_5_bg_mode'],'bg_enabled' => $this->_tpl_vars['theme_vars_content_bar_5_backgrounds_enabled'],'Backgrounds' => $this->_tpl_vars['templateSections']['Content_Bar_5_Backgrounds'],'disclosure' => $this->_tpl_vars['theme_vars_content_bar_5_disclosure'],'background1' => $this->_tpl_vars['theme_vars_content_bar_5_background1'],'background2' => $this->_tpl_vars['theme_vars_content_bar_5_background2'],'background3' => $this->_tpl_vars['theme_vars_content_bar_5_background3'],'background4' => $this->_tpl_vars['theme_vars_content_bar_5_background4'],'background5' => $this->_tpl_vars['theme_vars_content_bar_5_background5'],'panzoom' => $this->_tpl_vars['theme_vars_content_bar_5_panzoom'],'background_video' => $this->_tpl_vars['theme_vars_content_bar_5_background_video'],'background_video_ts_enabled' => $this->_tpl_vars['theme_vars_content_bar_5_background_video_enabled'],'background_video_ts' => $this->_tpl_vars['templateSections']['Content_Bar_5_Background_Video'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_5_bg_color'],'bg_opacity' => $this->_tpl_vars['theme_vars_content_bar_5_bg_opacity'],'bg_mode' => $this->_tpl_vars['theme_vars_content_bar_5_bg_mode'],'height' => $this->_tpl_vars['theme_vars_content_bar_5_height'],'content' => $this->_tpl_vars['tcontent'],'inverted' => $this->_tpl_vars['theme_vars_content_bar_5_inverted'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	
	
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6_banner_enabled'] && ! $this->_tpl_vars['security'] && $this->_tpl_vars['templateSections']['Content_Bar_6_Banner']): ?>
		<?php if ($this->_tpl_vars['theme_vars_content_bar_6_banner_type'] == 'slideshow' || $this->_tpl_vars['theme_vars_content_bar_6_banner_type'] == 'bannerwidgets'): ?>
			<?php if ($this->_tpl_vars['theme_vars_content_bar_6_banner_type'] == 'bannerwidgets'): ?>
				<?php $this->assign('bannerheight', $this->_tpl_vars['theme_vars_content_bar_6_banner_height']); ?>
				<?php $this->assign('bannerwidgetsbool', true); ?>
			<?php else: ?>
				<?php $this->assign('bannerheight', 'auto'); ?>
				<?php $this->assign('bannerwidgetsbool', false); ?>
			<?php endif; ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_6_banner_slideshow','content' => $this->_tpl_vars['templateSections']['Content_Bar_6_Banner'],'slideshow_speed' => $this->_tpl_vars['theme_vars_content_bar_6_banner_slideshow_speed'],'slideshow_style' => $this->_tpl_vars['theme_vars_content_bar_6_banner_slideshow_style'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_6_banner_bg_color'],'height' => $this->_tpl_vars['bannerheight'],'fill' => 1,'widgets' => $this->_tpl_vars['bannerwidgetsbool'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
			<?php $this->assign('tcontent', ""); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_6_banner','bg_mode' => $this->_tpl_vars['theme_vars_content_bar_6_banner_type'],'bg_enabled' => '1','Backgrounds' => $this->_tpl_vars['templateSections']['Content_Bar_6_Banner'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_6_banner_bg_color'],'bg_opacity' => 1,'height' => $this->_tpl_vars['theme_vars_content_bar_6_banner_height'],'content' => $this->_tpl_vars['tcontent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		
		
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_6'] && ! $this->_tpl_vars['security'] && ( $this->_tpl_vars['templateSections']['Content_Bar_6'] || ( $this->_tpl_vars['theme_vars_content_bar_6_backgrounds_enabled'] && ( $this->_tpl_vars['theme_vars_content_bar_6_background1'] || $this->_tpl_vars['templateSections']['Content_Bar_6_Backgrounds'] ) ) )): ?>
		<?php $this->assign('tcontent', $this->_tpl_vars['templateSections']['Content_Bar_6']); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_6','bgmode' => $this->_tpl_vars['theme_vars_content_bar_6_bg_mode'],'bg_enabled' => $this->_tpl_vars['theme_vars_content_bar_6_backgrounds_enabled'],'Backgrounds' => $this->_tpl_vars['templateSections']['Content_Bar_6_Backgrounds'],'disclosure' => $this->_tpl_vars['theme_vars_content_bar_6_disclosure'],'background1' => $this->_tpl_vars['theme_vars_content_bar_6_background1'],'background2' => $this->_tpl_vars['theme_vars_content_bar_6_background2'],'background3' => $this->_tpl_vars['theme_vars_content_bar_6_background3'],'background4' => $this->_tpl_vars['theme_vars_content_bar_6_background4'],'background5' => $this->_tpl_vars['theme_vars_content_bar_6_background5'],'panzoom' => $this->_tpl_vars['theme_vars_content_bar_6_panzoom'],'background_video' => $this->_tpl_vars['theme_vars_content_bar_6_background_video'],'background_video_ts_enabled' => $this->_tpl_vars['theme_vars_content_bar_6_background_video_enabled'],'background_video_ts' => $this->_tpl_vars['templateSections']['Content_Bar_6_Background_Video'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_6_bg_color'],'bg_opacity' => $this->_tpl_vars['theme_vars_content_bar_6_bg_opacity'],'bg_mode' => $this->_tpl_vars['theme_vars_content_bar_6_bg_mode'],'height' => $this->_tpl_vars['theme_vars_content_bar_6_height'],'content' => $this->_tpl_vars['tcontent'],'inverted' => $this->_tpl_vars['theme_vars_content_bar_6_inverted'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	
	
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7_banner_enabled'] && ! $this->_tpl_vars['security'] && $this->_tpl_vars['templateSections']['Content_Bar_7_Banner']): ?>
		<?php if ($this->_tpl_vars['theme_vars_content_bar_7_banner_type'] == 'slideshow' || $this->_tpl_vars['theme_vars_content_bar_7_banner_type'] == 'bannerwidgets'): ?>
			<?php if ($this->_tpl_vars['theme_vars_content_bar_7_banner_type'] == 'bannerwidgets'): ?>
				<?php $this->assign('bannerheight', $this->_tpl_vars['theme_vars_content_bar_7_banner_height']); ?>
				<?php $this->assign('bannerwidgetsbool', true); ?>
			<?php else: ?>
				<?php $this->assign('bannerheight', 'auto'); ?>
				<?php $this->assign('bannerwidgetsbool', false); ?>
			<?php endif; ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_7_banner_slideshow','content' => $this->_tpl_vars['templateSections']['Content_Bar_7_Banner'],'slideshow_speed' => $this->_tpl_vars['theme_vars_content_bar_7_banner_slideshow_speed'],'slideshow_style' => $this->_tpl_vars['theme_vars_content_bar_7_banner_slideshow_style'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_7_banner_bg_color'],'height' => $this->_tpl_vars['bannerheight'],'fill' => 1,'widgets' => $this->_tpl_vars['bannerwidgetsbool'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
			<?php $this->assign('tcontent', ""); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_7_banner','bg_mode' => $this->_tpl_vars['theme_vars_content_bar_7_banner_type'],'bg_enabled' => '1','Backgrounds' => $this->_tpl_vars['templateSections']['Content_Bar_7_Banner'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_7_banner_bg_color'],'bg_opacity' => 1,'height' => $this->_tpl_vars['theme_vars_content_bar_7_banner_height'],'content' => $this->_tpl_vars['tcontent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		
		
	<?php endif; ?>
	<?php if ($this->_tpl_vars['theme_vars_content_bar_7'] && ! $this->_tpl_vars['security'] && ( $this->_tpl_vars['templateSections']['Content_Bar_7'] || ( $this->_tpl_vars['theme_vars_content_bar_7_backgrounds_enabled'] && ( $this->_tpl_vars['theme_vars_content_bar_7_background1'] || $this->_tpl_vars['templateSections']['Content_Bar_7_Backgrounds'] ) ) )): ?>
		<?php $this->assign('content', $this->_tpl_vars['templateSections']['Content_Bar_7']); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row_content.tpl", 'smarty_include_vars' => array('mrc_id' => 'content_bar_7','bgmode' => $this->_tpl_vars['theme_vars_content_bar_7_bg_mode'],'bg_enabled' => $this->_tpl_vars['theme_vars_content_bar_7_backgrounds_enabled'],'Backgrounds' => $this->_tpl_vars['templateSections']['Content_Bar_7_Backgrounds'],'disclosure' => $this->_tpl_vars['theme_vars_content_bar_7_disclosure'],'background1' => $this->_tpl_vars['theme_vars_content_bar_7_background1'],'background2' => $this->_tpl_vars['theme_vars_content_bar_7_background2'],'background3' => $this->_tpl_vars['theme_vars_content_bar_7_background3'],'background4' => $this->_tpl_vars['theme_vars_content_bar_7_background4'],'background5' => $this->_tpl_vars['theme_vars_content_bar_7_background5'],'panzoom' => $this->_tpl_vars['theme_vars_content_bar_7_panzoom'],'background_video' => $this->_tpl_vars['theme_vars_content_bar_7_background_video'],'background_video_ts_enabled' => $this->_tpl_vars['theme_vars_content_bar_7_background_video_enabled'],'background_video_ts' => $this->_tpl_vars['templateSections']['Content_Bar_7_Background_Video'],'bg_color' => $this->_tpl_vars['theme_vars_content_bar_7_bg_color'],'bg_opacity' => $this->_tpl_vars['theme_vars_content_bar_7_bg_opacity'],'bg_mode' => $this->_tpl_vars['theme_vars_content_bar_7_bg_mode'],'height' => $this->_tpl_vars['theme_vars_content_bar_7_height'],'content' => $this->_tpl_vars['content'],'inverted' => $this->_tpl_vars['theme_vars_content_bar_7_inverted'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

	
	</main>

	<?php if ($this->_tpl_vars['theme_vars_all_footers_bg_enabled']): ?>
		<div class="all_bg" id="all_footers_bg"
				<?php if ($this->_tpl_vars['theme_vars_all_footers_bg_mode'] != 'tile' && ( ( $this->_tpl_vars['theme_vars_all_footers_background_video'] == "" && ! $this->_tpl_vars['theme_vars_all_footers_bg_video_sitewide'] ) || ( $this->_tpl_vars['sitewideContent']['All_Footers_Background_Video'] == "" && $this->_tpl_vars['theme_vars_all_footers_bg_video_sitewide'] ) )): ?>
					<?php if ($this->_tpl_vars['theme_vars_all_footers_bg_sitewide'] && $this->_tpl_vars['sitewideContent']['All_Footers_Backgrounds']): ?>
						data-backgrounds="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['sitewideContent']['All_Footers_Backgrounds'])) ? $this->_run_mod_handler('images_to_json', true, $_tmp, true) : smarty_modifier_images_to_json($_tmp, true)))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
					<?php else: ?>
						<?php if ($this->_tpl_vars['theme_vars_all_footers_background1']): ?>
							data-backgrounds="[&quot;/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_all_footers_background1']; ?>
&quot;<?php if ($this->_tpl_vars['theme_vars_all_footers_background2']): ?>,&quot;/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_all_footers_background2']; ?>
&quot;<?php endif; ?><?php if ($this->_tpl_vars['theme_vars_all_footers_background3']): ?>,&quot;/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_all_footers_background3']; ?>
&quot;<?php endif; ?><?php if ($this->_tpl_vars['theme_vars_all_footers_background4']): ?>,&quot;/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_all_footers_background4']; ?>
&quot;<?php endif; ?><?php if ($this->_tpl_vars['theme_vars_all_footers_background5']): ?>,&quot;/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_all_footers_background5']; ?>
&quot;<?php endif; ?>]"
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
				data-background-fade="1000"
				data-background-panzoom="<?php echo $this->_tpl_vars['theme_vars_all_footers_panzoom']; ?>
"
				data-background-duration="5000"
				data-background-color="<?php echo $this->_tpl_vars['theme_vars_all_footers_bg_color']; ?>
"
				data-background-opacity="<?php echo $this->_tpl_vars['theme_vars_all_footers_bg_opacity']; ?>
"
				<?php if ($this->_tpl_vars['theme_vars_all_footers_bg_mode'] == 'parallax_slow'): ?>
				data-scroll-decay="0.1"
				<?php endif; ?>
				<?php if ($this->_tpl_vars['theme_vars_all_footers_bg_mode'] == 'parallax_norm'): ?>
				data-scroll-decay="0.5"
				<?php endif; ?>
				<?php if ($this->_tpl_vars['theme_vars_all_footers_bg_mode'] == 'parallax_fast'): ?>
				data-scroll-decay="0.9"
				<?php endif; ?>
				<?php if ($this->_tpl_vars['theme_vars_all_footers_bg_mode'] == 'parallax_infini'): ?>
				data-scroll-decay="1"
				<?php endif; ?>
				style="background-color:<?php echo $this->_tpl_vars['theme_vars_all_footers_bg_color']; ?>
;<?php if ($this->_tpl_vars['theme_vars_all_footers_bg_mode'] == 'tile'): ?>background-image:url(/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_all_footers_background1']; ?>
);background-repeat:repeat;<?php endif; ?>"
				<?php if ($this->_tpl_vars['theme_vars_all_footers_background_video'] && $this->_tpl_vars['sitewideContent']['All_Footers_Background_Video'] != ""): ?>
					<?php $this->assign('videostr', ((is_array($_tmp="href=\"/media")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['sitewideContent']['All_Footers_Background_Video']) : explode($_tmp, $this->_tpl_vars['sitewideContent']['All_Footers_Background_Video']))); ?>
					<?php $this->assign('videostr2', ((is_array($_tmp="\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['videostr'][1]) : explode($_tmp, $this->_tpl_vars['videostr'][1]))); ?>
					<?php if (! $this->_tpl_vars['theme_vars_all_footers_bg_sitewide'] || ! $this->_tpl_vars['sitewideContent']['All_Footers_Backgrounds']): ?>
						<?php $this->assign('imgstr', ((is_array($_tmp="src=\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['sitewideContent']['All_Footers_Background_Video']) : explode($_tmp, $this->_tpl_vars['sitewideContent']['All_Footers_Background_Video']))); ?>
						<?php $this->assign('imgstr2', ((is_array($_tmp="\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['imgstr'][1]) : explode($_tmp, $this->_tpl_vars['imgstr'][1]))); ?>
						<?php $this->assign('imgstr3', $this->_tpl_vars['imgstr2'][0]); ?>
					<?php else: ?>
						<?php $this->assign('imgstr', ((is_array($_tmp="src=\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['sitewideContent']['All_Footers_Backgrounds']) : explode($_tmp, $this->_tpl_vars['sitewideContent']['All_Footers_Backgrounds']))); ?>
						<?php $this->assign('imgstr2', ((is_array($_tmp="\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['imgstr'][1]) : explode($_tmp, $this->_tpl_vars['imgstr'][1]))); ?>
						<?php $this->assign('imgstr3t', ((is_array($_tmp="?")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['imgstr2'][0]) : explode($_tmp, $this->_tpl_vars['imgstr2'][0]))); ?>
						<?php $this->assign('imgstr3', $this->_tpl_vars['imgstr3t'][0]); ?>
					<?php endif; ?>
					data-vide-bg="mp4: /media<?php echo $this->_tpl_vars['videostr2'][0]; ?>
, poster: <?php echo $this->_tpl_vars['imgstr3']; ?>
"
					data-vide-options="loop: true, muted: <?php if ($this->_tpl_vars['theme_vars_mute_bg_video']): ?>true<?php else: ?>false<?php endif; ?>, position: 50% 50%, opacity: <?php echo $this->_tpl_vars['theme_vars_all_footers_bg_opacity']; ?>
"
				<?php elseif ($this->_tpl_vars['theme_vars_all_footers_background_video']): ?>
					data-vide-bg="mp4: /media/<?php echo $this->_tpl_vars['theme_vars_all_footers_background_video']; ?>
, poster: /images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_all_footers_background1']; ?>
"
					data-vide-options="loop: true, muted: <?php if ($this->_tpl_vars['theme_vars_mute_bg_video']): ?>true<?php else: ?>false<?php endif; ?>, position: 50% 50%, opacity: <?php echo $this->_tpl_vars['theme_vars_all_footers_bg_opacity']; ?>
"
				<?php endif; ?>
			>
	<?php endif; ?>

	
	<div id="footer">
	<?php if ($this->_tpl_vars['theme_vars_footer_bar_1']): ?>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row.tpl", 'smarty_include_vars' => array('mr_id' => 'footer_bar_1','bg_enabled' => $this->_tpl_vars['theme_vars_footer_bar_1_bg_sitewide'],'Backgrounds' => $this->_tpl_vars['sitewideContent']['Footer_Bar_1_Backgrounds'],'background1' => $this->_tpl_vars['theme_vars_footer_bar_1_background1'],'background2' => $this->_tpl_vars['theme_vars_footer_bar_1_background2'],'background3' => $this->_tpl_vars['theme_vars_footer_bar_1_background3'],'background4' => $this->_tpl_vars['theme_vars_footer_bar_1_background4'],'background5' => $this->_tpl_vars['theme_vars_footer_bar_1_background5'],'panzoom' => $this->_tpl_vars['theme_vars_footer_bar_1_panzoom'],'background_video' => $this->_tpl_vars['theme_vars_footer_bar_1_background_video'],'background_video_sw_enabled' => $this->_tpl_vars['theme_vars_footer_bar_1_bg_video_sitewide'],'background_video_sw' => $this->_tpl_vars['sitewideContent']['Footer_Bar_1_Background_Video'],'bg_color' => $this->_tpl_vars['theme_vars_footer_bar_1_bg_color'],'bg_opacity' => $this->_tpl_vars['theme_vars_footer_bar_1_bg_opacity'],'bg_mode' => $this->_tpl_vars['theme_vars_footer_bar_1_bg_mode'],'height' => $this->_tpl_vars['theme_vars_footer_bar_1_height'],'centered' => $this->_tpl_vars['theme_vars_footer_bar_1_centered'],'right' => $this->_tpl_vars['theme_vars_footer_bar_1_right'],'left' => $this->_tpl_vars['theme_vars_footer_bar_1_left'],'nav_style' => $this->_tpl_vars['theme_vars_footer_bar_1_nav_style'],'search' => $this->_tpl_vars['theme_vars_footer_bar_1_search'],'basket' => $this->_tpl_vars['theme_vars_footer_bar_1_basket'],'logo_file' => $this->_tpl_vars['theme_vars_footer_bar_1_logo'],'logo_link' => $this->_tpl_vars['theme_vars_footer_bar_1_logo_link'],'logo2' => $this->_tpl_vars['theme_vars_footer_bar_1_logo2'],'logo2_link' => $this->_tpl_vars['theme_vars_footer_bar_1_logo2_link'],'logo3' => $this->_tpl_vars['theme_vars_footer_bar_1_logo3'],'logo3_link' => $this->_tpl_vars['theme_vars_footer_bar_1_logo3_link'],'Left' => $this->_tpl_vars['sitewideContent']['Footer_Bar_1_Left'],'Left_Secondary' => $this->_tpl_vars['sitewideContent']['Footer_Bar_1_Left_Secondary'],'left_2' => $this->_tpl_vars['theme_vars_footer_bar_1_left_2'],'Right' => $this->_tpl_vars['sitewideContent']['Footer_Bar_1_Right'],'Right_Secondary' => $this->_tpl_vars['sitewideContent']['Footer_Bar_Right_1_Secondary'],'right_2' => $this->_tpl_vars['theme_vars_footer_bar_1_right_2'],'Centered' => $this->_tpl_vars['sitewideContent']['Footer_Bar_1_Centered'],'left_valign' => $this->_tpl_vars['theme_vars_footer_bar_1_left_valign'],'right_valign' => $this->_tpl_vars['theme_vars_footer_bar_1_right_valign'],'inverted' => $this->_tpl_vars['theme_vars_footer_bar_1_inverted'],'full_top_enabled' => $this->_tpl_vars['theme_vars_footer_bar_1_fullwidth_top'],'full_top_content' => $this->_tpl_vars['sitewideContent']['Footer_Bar_1_Full_Width_Top'],'full_bottom_enabled' => $this->_tpl_vars['theme_vars_footer_bar_1_fullwidth_bottom'],'full_bottom_content' => $this->_tpl_vars['sitewideContent']['Footer_Bar_1_Full_Width_Bottom'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
	<?php endif; ?>


	<?php if ($this->_tpl_vars['theme_vars_footer_bar_2']): ?>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row.tpl", 'smarty_include_vars' => array('mr_id' => 'footer_bar_2','bg_enabled' => $this->_tpl_vars['theme_vars_footer_bar_2_bg_sitewide'],'Backgrounds' => $this->_tpl_vars['sitewideContent']['Footer_Bar_2_Backgrounds'],'background1' => $this->_tpl_vars['theme_vars_footer_bar_2_background1'],'background2' => $this->_tpl_vars['theme_vars_footer_bar_2_background2'],'background3' => $this->_tpl_vars['theme_vars_footer_bar_2_background3'],'background4' => $this->_tpl_vars['theme_vars_footer_bar_2_background4'],'background5' => $this->_tpl_vars['theme_vars_footer_bar_2_background5'],'panzoom' => $this->_tpl_vars['theme_vars_footer_bar_2_panzoom'],'background_video' => $this->_tpl_vars['theme_vars_footer_bar_2_background_video'],'background_video_sw_enabled' => $this->_tpl_vars['theme_vars_footer_bar_2_bg_video_sitewide'],'background_video_sw' => $this->_tpl_vars['sitewideContent']['Footer_Bar_2_Background_Video'],'bg_color' => $this->_tpl_vars['theme_vars_footer_bar_2_bg_color'],'bg_opacity' => $this->_tpl_vars['theme_vars_footer_bar_2_bg_opacity'],'bg_mode' => $this->_tpl_vars['theme_vars_footer_bar_2_bg_mode'],'height' => $this->_tpl_vars['theme_vars_footer_bar_2_height'],'centered' => $this->_tpl_vars['theme_vars_footer_bar_2_centered'],'right' => $this->_tpl_vars['theme_vars_footer_bar_2_right'],'left' => $this->_tpl_vars['theme_vars_footer_bar_2_left'],'nav_style' => $this->_tpl_vars['theme_vars_footer_bar_2_nav_style'],'search' => $this->_tpl_vars['theme_vars_footer_bar_2_search'],'basket' => $this->_tpl_vars['theme_vars_footer_bar_2_basket'],'logo_file' => $this->_tpl_vars['theme_vars_footer_bar_2_logo'],'logo_link' => $this->_tpl_vars['theme_vars_footer_bar_2_logo_link'],'logo2' => $this->_tpl_vars['theme_vars_footer_bar_2_logo2'],'logo2_link' => $this->_tpl_vars['theme_vars_footer_bar_2_logo2_link'],'logo3' => $this->_tpl_vars['theme_vars_footer_bar_2_logo3'],'logo3_link' => $this->_tpl_vars['theme_vars_footer_bar_2_logo3_link'],'Left' => $this->_tpl_vars['sitewideContent']['Footer_Bar_2_Left'],'Left_Secondary' => $this->_tpl_vars['sitewideContent']['Footer_Bar_2_Left_Secondary'],'left_2' => $this->_tpl_vars['theme_vars_footer_bar_2_left_2'],'Right' => $this->_tpl_vars['sitewideContent']['Footer_Bar_2_Right'],'Right_Secondary' => $this->_tpl_vars['sitewideContent']['Footer_Bar_2_Right_Secondary'],'right_2' => $this->_tpl_vars['theme_vars_footer_bar_2_right_2'],'Centered' => $this->_tpl_vars['sitewideContent']['Footer_Bar_2_Centered'],'left_valign' => $this->_tpl_vars['theme_vars_footer_bar_2_left_valign'],'right_valign' => $this->_tpl_vars['theme_vars_footer_bar_2_right_valign'],'inverted' => $this->_tpl_vars['theme_vars_footer_bar_2_inverted'],'full_top_enabled' => $this->_tpl_vars['theme_vars_footer_bar_2_fullwidth_top'],'full_top_content' => $this->_tpl_vars['sitewideContent']['Footer_Bar_2_Full_Width_Top'],'full_bottom_enabled' => $this->_tpl_vars['theme_vars_footer_bar_2_fullwidth_bottom'],'full_bottom_content' => $this->_tpl_vars['sitewideContent']['Footer_Bar_2_Full_Width_Bottom'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
	<?php endif; ?>



	<?php if ($this->_tpl_vars['theme_vars_footer_bar_3']): ?>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/mega_row.tpl", 'smarty_include_vars' => array('mr_id' => 'footer_bar_3','bg_enabled' => $this->_tpl_vars['theme_vars_footer_bar_3_bg_sitewide'],'Backgrounds' => $this->_tpl_vars['sitewideContent']['Footer_Bar_3_Backgrounds'],'background1' => $this->_tpl_vars['theme_vars_footer_bar_3_background1'],'background2' => $this->_tpl_vars['theme_vars_footer_bar_3_background2'],'background3' => $this->_tpl_vars['theme_vars_footer_bar_3_background3'],'background4' => $this->_tpl_vars['theme_vars_footer_bar_3_background4'],'background5' => $this->_tpl_vars['theme_vars_footer_bar_3_background5'],'panzoom' => $this->_tpl_vars['theme_vars_footer_bar_3_panzoom'],'background_video' => $this->_tpl_vars['theme_vars_footer_bar_3_background_video'],'background_video_sw_enabled' => $this->_tpl_vars['theme_vars_footer_bar_3_bg_video_sitewide'],'background_video_sw' => $this->_tpl_vars['sitewideContent']['Footer_Bar_3_Background_Video'],'bg_color' => $this->_tpl_vars['theme_vars_footer_bar_3_bg_color'],'bg_opacity' => $this->_tpl_vars['theme_vars_footer_bar_3_bg_opacity'],'bg_mode' => $this->_tpl_vars['theme_vars_footer_bar_3_bg_mode'],'height' => $this->_tpl_vars['theme_vars_footer_bar_3_height'],'centered' => $this->_tpl_vars['theme_vars_footer_bar_3_centered'],'right' => $this->_tpl_vars['theme_vars_footer_bar_3_right'],'left' => $this->_tpl_vars['theme_vars_footer_bar_3_left'],'nav_style' => $this->_tpl_vars['theme_vars_footer_bar_3_nav_style'],'search' => $this->_tpl_vars['theme_vars_footer_bar_3_search'],'basket' => $this->_tpl_vars['theme_vars_footer_bar_3_basket'],'logo_file' => $this->_tpl_vars['theme_vars_footer_bar_3_logo'],'logo_link' => $this->_tpl_vars['theme_vars_footer_bar_3_logo_link'],'logo2' => $this->_tpl_vars['theme_vars_footer_bar_3_logo2'],'logo2_link' => $this->_tpl_vars['theme_vars_footer_bar_3_logo2_link'],'logo3' => $this->_tpl_vars['theme_vars_footer_bar_3_logo3'],'logo3_link' => $this->_tpl_vars['theme_vars_footer_bar_3_logo3_link'],'Left' => $this->_tpl_vars['sitewideContent']['Footer_Bar_3_Left'],'Left_Secondary' => $this->_tpl_vars['sitewideContent']['Footer_Bar_3_Left_Secondary'],'left_2' => $this->_tpl_vars['theme_vars_footer_bar_3_left_2'],'Right' => $this->_tpl_vars['sitewideContent']['Footer_Bar_3_Right'],'Right_Secondary' => $this->_tpl_vars['sitewideContent']['Footer_Bar_3_Right_Secondary'],'right_2' => $this->_tpl_vars['theme_vars_footer_bar_3_right_2'],'Centered' => $this->_tpl_vars['sitewideContent']['Footer_Bar_3_Centered'],'left_valign' => $this->_tpl_vars['theme_vars_footer_bar_3_left_valign'],'right_valign' => $this->_tpl_vars['theme_vars_footer_bar_3_right_valign'],'inverted' => $this->_tpl_vars['theme_vars_footer_bar_3_inverted'],'full_top_enabled' => $this->_tpl_vars['theme_vars_footer_bar_3_fullwidth_top'],'full_top_content' => $this->_tpl_vars['sitewideContent']['Footer_Bar_3_Full_Width_Top'],'full_bottom_enabled' => $this->_tpl_vars['theme_vars_footer_bar_3_fullwidth_bottom'],'full_bottom_content' => $this->_tpl_vars['sitewideContent']['Footer_Bar_3_Full_Width_Bottom'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
	<?php endif; ?>
	</div>
	<?php if ($this->_tpl_vars['theme_vars_all_footers_bg_enabled']): ?>
	</div>
	<?php endif; ?>
	<div id="search-form-popdown">
		<div class="tri"></div>
		<form action="/actions/SearchForward/" method="post" id="searchFormSmall">
			<input type="hidden" name="language" value="<?php echo $this->_tpl_vars['content']['language']; ?>
"/>
			<input id="navSearch" type="text" maxlength="60" title="<?php echo $this->_tpl_vars['langs']['Search']; ?>
" name="string" value="" required="true" placeholder="<?php echo $this->_tpl_vars['langs']['Search']; ?>
" />
			<input type="submit" value="<?php echo $this->_tpl_vars['langs']['Search']; ?>
" class="search-form-hide-with-js"/>
			<p id="search-form-popdown-button" class="submit_form"><a href="#"><?php echo $this->_tpl_vars['langs']['Search']; ?>
</a></p>
		</form>
	</div>
	

	<script src="/javascripts/jquery.vide.js"></script>

	<script src="/javascripts/owl.carousel.min.js"></script>
	<script src="/javascripts/backstretch.js"></script>
	<script src="/javascripts/doubletaptogo.js"></script>
	<script src="/javascripts/overlaps.js"></script>
	<script src="/javascripts/countdown.js"></script>
	<div id="mp_lightbox_outer">
		<div id="mp_lightbox_outer_outer">
			<div id="mp_lightbox_inner">
				<div id="mp_lighbox_content"></div>
				<div id="closeMP"><a href="#">Close</a></div>
			</div>			
		</div>
	</div>
	<style type="text/css">body <?php echo '{'; ?>
 background-color:<?php echo $this->_tpl_vars['bodybg']; ?>
; <?php echo '}'; ?>
</style>
	<?php echo $this->_tpl_vars['theme_vars_body_code']; ?>

</body>
</html>
<?php endif; ?>