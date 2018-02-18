<p class="social-links size-large style-icons align-right clearfix">
		{if $theme_vars_include_livechat}
		<span id="livechat" style="display:none"><a href="/livechat/convo.php?language={$content.language}" class="social-link-livechat social-link" id="startConvo">{$langs.Livechat}</a></span>
		{/if}
		{if $theme_vars_email_link}
	
		{capture name=email_link}<a href="mailto:{$theme_vars_email_link}" title="Email: {$theme_vars_email_link}" class="social-link-email social-link" target="_blank">{$theme_vars_email_link}</a>{/capture}

		<script type="text/javascript">document.write(
		'{$smarty.capture.email_link|str_rot13}'.replace(/[a-zA-Z]/g, function(c){literal}{return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));{/literal}
		</script>
	
		{/if}
		{if $theme_vars_facebook_link}
		<a href="{$theme_vars_facebook_link}" title="Facebook (Opens new window)" class="social-link-facebook social-link" target="_blank">Facebook</a>
		{/if}
		{if $theme_vars_gplus_link}
		<a href="{$theme_vars_gplus_link}" title="Google+ (Opens new window)" class="social-link-googleplus social-link" target="_blank">Google+</a>
		{/if}
		{if $theme_vars_linkedin_link}
		<a href="{$theme_vars_linkedin_link}" title="LinkedIn (Opens new window)" class="social-link-linkedin social-link" target="_blank">LinkedIn</a>
		{/if}
		{if $theme_vars_pinterest_link}
		<a href="{$theme_vars_pinterest_link}" title="Pinterest (Opens new window)" class="social-link-pinterest social-link" target="_blank">Pinterest</a>
		{/if}
		{if $theme_vars_twitter_link}
		<a href="{$theme_vars_twitter_link}" title="Twitter (Opens new window)" class="social-link-twitter social-link" target="_blank">Twitter</a>
		{/if}
		{if $theme_vars_youtube_link}
		<a href="{$theme_vars_youtube_link}" title="YouTube (Opens new window)" class="social-link-youtube social-link" target="_blank">YouTube</a>
		{/if}
		{if $theme_vars_instagram_link}
		<a href="{$theme_vars_instagram_link}" title="Instagram (Opens new window)" class="social-link-instagram social-link" target="_blank">Instagram</a>
		{/if}
		{if $theme_vars_vimeo_link}
		<a href="{$theme_vars_vimeo_link}" title="Vimeo (Opens new window)" class="social-link-vimeo social-link" target="_blank">Vimeo</a>
		{/if}
		{if $theme_vars_flikr_link}
		<a href="{$theme_vars_flikr_link}" title="Flikr (Opens new window)" class="social-link-flikr social-link" target="_blank">Flikr</a>
		{/if}
		{if $theme_vars_tumblr_link}
		<a href="{$theme_vars_tumblr_link}" title="Tumblr (Opens new window)" class="social-link-tumblr social-link" target="_blank">Tumblr</a>
		{/if}
		{if $theme_vars_yelp_link}
		<a href="{$theme_vars_yelp_link}" title="Yelp (Opens new window)" class="social-link-yelp social-link" target="_blank">Yelp</a>
		{/if}
		{if $theme_vars_tripadvisor_link}
		<a href="{$theme_vars_tripadvisor_link}" title="Trip Advisor (Opens new window)" class="social-link-tripadvisor social-link" target="_blank">Trip Advisor</a>
		{/if}
		{if $theme_vars_phone_number}
		<span title="{$theme_vars_phone_number}" class="social-link-phone social-link">{$theme_vars_phone_number}</span>
		{/if}
</p>
<div class="clear"></div>