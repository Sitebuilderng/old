<?php /* Smarty version 2.6.18, created on 2017-07-23 10:13:45
         compiled from modules/social_links.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'str_rot13', 'modules/social_links.tpl', 12, false),)), $this); ?>
<div class="module clearfix social-links <?php if ($this->_tpl_vars['align']): ?>align-<?php echo $this->_tpl_vars['align']; ?>
<?php endif; ?> <?php if (! $this->_tpl_vars['width']): ?><?php if ($this->_tpl_vars['valign']): ?>valign-<?php echo $this->_tpl_vars['valign']; ?>
<?php if ($this->_tpl_vars['valign']): ?> valign<?php endif; ?><?php endif; ?><?php endif; ?> <?php if ($this->_tpl_vars['clear']): ?>clear-<?php echo $this->_tpl_vars['clear']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['style']): ?>style-<?php echo $this->_tpl_vars['style']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['size']): ?>size-<?php echo $this->_tpl_vars['size']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['width']): ?>width width-<?php echo $this->_tpl_vars['width']; ?>
 width-valign-<?php echo $this->_tpl_vars['valign']; ?>
<?php endif; ?>">
	<div >
		<p>
		<?php if ($this->_tpl_vars['theme_vars_include_livechat']): ?>
		<span id="livechat" style="display:none"><a href="/livechat/convo.php?language=<?php echo $this->_tpl_vars['content']['language']; ?>
" class="social-link-livechat social-link" id="startConvo"><?php echo $this->_tpl_vars['langs']['Livechat']; ?>
</a></span>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['theme_vars_email_link']): ?>
		
		<?php ob_start(); ?><a href="mailto:<?php echo $this->_tpl_vars['theme_vars_email_link']; ?>
" title="Email: <?php echo $this->_tpl_vars['theme_vars_email_link']; ?>
" class="social-link-email social-link" target="_blank"><?php echo $this->_tpl_vars['theme_vars_email_link']; ?>
</a><?php $this->_smarty_vars['capture']['email_link'] = ob_get_contents(); ob_end_clean(); ?>

		<script type="text/javascript">document.write(
		'<?php echo ((is_array($_tmp=$this->_smarty_vars['capture']['email_link'])) ? $this->_run_mod_handler('str_rot13', true, $_tmp) : str_rot13($_tmp)); ?>
'.replace(/[a-zA-Z]/g, function(c)<?php echo '{return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));'; ?>

		</script>
		
		<?php endif; ?>
		<?php if ($this->_tpl_vars['theme_vars_facebook_link']): ?>
		<a href="<?php echo $this->_tpl_vars['theme_vars_facebook_link']; ?>
" title="Facebook (Opens new window)" class="social-link-facebook social-link" target="_blank">Facebook</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['theme_vars_gplus_link']): ?>
		<a href="<?php echo $this->_tpl_vars['theme_vars_gplus_link']; ?>
" title="Google+ (Opens new window)" class="social-link-googleplus social-link" target="_blank">Google+</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['theme_vars_linkedin_link']): ?>
		<a href="<?php echo $this->_tpl_vars['theme_vars_linkedin_link']; ?>
" title="LinkedIn (Opens new window)" class="social-link-linkedin social-link" target="_blank">LinkedIn</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['theme_vars_pinterest_link']): ?>
		<a href="<?php echo $this->_tpl_vars['theme_vars_pinterest_link']; ?>
" title="Pinterest (Opens new window)" class="social-link-pinterest social-link" target="_blank">Pinterest</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['theme_vars_twitter_link']): ?>
		<a href="<?php echo $this->_tpl_vars['theme_vars_twitter_link']; ?>
" title="Twitter (Opens new window)" class="social-link-twitter social-link" target="_blank">Twitter</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['theme_vars_youtube_link']): ?>
		<a href="<?php echo $this->_tpl_vars['theme_vars_youtube_link']; ?>
" title="YouTube (Opens new window)" class="social-link-youtube social-link" target="_blank">YouTube</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['theme_vars_instagram_link']): ?>
		<a href="<?php echo $this->_tpl_vars['theme_vars_instagram_link']; ?>
" title="Instagram (Opens new window)" class="social-link-instagram social-link" target="_blank">Instagram</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['theme_vars_vimeo_link']): ?>
		<a href="<?php echo $this->_tpl_vars['theme_vars_vimeo_link']; ?>
" title="Vimeo (Opens new window)" class="social-link-vimeo social-link" target="_blank">Vimeo</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['theme_vars_flikr_link']): ?>
		<a href="<?php echo $this->_tpl_vars['theme_vars_flikr_link']; ?>
" title="Flikr (Opens new window)" class="social-link-flikr social-link" target="_blank">Flikr</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['theme_vars_tumblr_link']): ?>
		<a href="<?php echo $this->_tpl_vars['theme_vars_tumblr_link']; ?>
" title="Tumblr (Opens new window)" class="social-link-tumblr social-link" target="_blank">Tumblr</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['theme_vars_yelp_link']): ?>
		<a href="<?php echo $this->_tpl_vars['theme_vars_yelp_link']; ?>
" title="Yelp (Opens new window)" class="social-link-yelp social-link" target="_blank">Yelp</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['theme_vars_tripadvisor_link']): ?>
		<a href="<?php echo $this->_tpl_vars['theme_vars_tripadvisor_link']; ?>
" title="Trip Advisor (Opens new window)" class="social-link-tripadvisor social-link" target="_blank">Trip Advisor</a>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['theme_vars_phone_number']): ?>
		<span title="<?php echo $this->_tpl_vars['theme_vars_phone_number']; ?>
" class="social-link-phone social-link"><?php echo $this->_tpl_vars['theme_vars_phone_number']; ?>
</span>
		<?php endif; ?>
		
		</p>
	</div>
</div>
