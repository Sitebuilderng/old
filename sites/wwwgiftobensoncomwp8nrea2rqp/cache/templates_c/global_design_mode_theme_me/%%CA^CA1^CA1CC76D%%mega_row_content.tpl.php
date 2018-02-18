<?php /* Smarty version 2.6.18, created on 2017-07-20 05:16:58
         compiled from includes/mega_row_content.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'images_to_json', 'includes/mega_row_content.tpl', 23, false),array('modifier', 'htmlspecialchars', 'includes/mega_row_content.tpl', 23, false),array('modifier', 'explode', 'includes/mega_row_content.tpl', 54, false),)), $this); ?>
<style type="text/css" media="screen">
<?php if ($this->_tpl_vars['fill'] && $this->_tpl_vars['height'] != 'auto'): ?> 
<?php if ($this->_tpl_vars['height'] != 'window'): ?>
#<?php echo $this->_tpl_vars['mrc_id']; ?>
 .banner-feature <?php echo '{'; ?>

	min-height:<?php echo $this->_tpl_vars['height']; ?>
px;
<?php echo '}'; ?>

<?php endif; ?>
<?php endif; ?>
#<?php echo $this->_tpl_vars['mrc_id']; ?>
 <?php echo '{'; ?>

	background-color:<?php echo $this->_tpl_vars['bg_color']; ?>
;
	<?php if ($this->_tpl_vars['bg_mode'] == 'tile'): ?>
	background-image:url(/images/themegraphics/<?php echo $this->_tpl_vars['background1']; ?>
);
	background-repeat:repeat;
	<?php endif; ?>
<?php echo '}'; ?>

</style>

<div class="container content <?php if ($this->_tpl_vars['disclosure']): ?>disclose<?php endif; ?> <?php if ($this->_tpl_vars['inverted']): ?>inverted<?php endif; ?> <?php if ($this->_tpl_vars['fill']): ?>nopadding<?php endif; ?> <?php if ($this->_tpl_vars['fill'] && $this->_tpl_vars['height'] == 'window' && $this->_tpl_vars['widgets']): ?>widget-banner-window-height<?php endif; ?>"
	
	id="<?php echo $this->_tpl_vars['mrc_id']; ?>
"
	<?php if ($this->_tpl_vars['bg_mode'] != 'tile' && ( ( $this->_tpl_vars['background_video'] == "" && ! $this->_tpl_vars['background_video_ts_enabled'] ) || ( $this->_tpl_vars['background_video_ts'] == "" && $this->_tpl_vars['background_video_ts_enabled'] ) )): ?>
		<?php if ($this->_tpl_vars['bg_enabled'] && $this->_tpl_vars['Backgrounds']): ?>
			data-backgrounds="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['Backgrounds'])) ? $this->_run_mod_handler('images_to_json', true, $_tmp, true) : smarty_modifier_images_to_json($_tmp, true)))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
		<?php else: ?>
			<?php if ($this->_tpl_vars['background1']): ?>
				data-backgrounds="[&quot;/images/themegraphics/<?php echo $this->_tpl_vars['background1']; ?>
&quot;<?php if ($this->_tpl_vars['background2']): ?>,&quot;/images/themegraphics/<?php echo $this->_tpl_vars['background2']; ?>
&quot;<?php endif; ?><?php if ($this->_tpl_vars['background3']): ?>,&quot;/images/themegraphics/<?php echo $this->_tpl_vars['background3']; ?>
&quot;<?php endif; ?><?php if ($this->_tpl_vars['background4']): ?>,&quot;/images/themegraphics/<?php echo $this->_tpl_vars['background4']; ?>
&quot;<?php endif; ?><?php if ($this->_tpl_vars['background5']): ?>,&quot;/images/themegraphics/<?php echo $this->_tpl_vars['background5']; ?>
&quot;<?php endif; ?>]"
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
	data-background-fade="1000"
	data-background-panzoom="<?php echo $this->_tpl_vars['panzoom']; ?>
"	
	data-background-duration="5000"
	data-background-color="<?php echo $this->_tpl_vars['bg_color']; ?>
"
	data-background-opacity="<?php echo $this->_tpl_vars['bg_opacity']; ?>
"
	<?php if ($this->_tpl_vars['bg_mode'] == 'parallax_slow'): ?>
	data-scroll-decay="0.1"
	<?php endif; ?>
	<?php if ($this->_tpl_vars['bg_mode'] == 'parallax_norm'): ?>
	data-scroll-decay="0.5"
	<?php endif; ?>
	<?php if ($this->_tpl_vars['bg_mode'] == 'parallax_fast'): ?>
	data-scroll-decay="0.9"
	<?php endif; ?>
	<?php if ($this->_tpl_vars['bg_mode'] == 'parallax_infini'): ?>
	data-scroll-decay="1"
	<?php endif; ?>
	<?php if ($this->_tpl_vars['slideshow_speed']): ?>
	data-slideshow-speed="<?php echo $this->_tpl_vars['slideshow_speed']; ?>
"
	<?php endif; ?>
	<?php if ($this->_tpl_vars['slideshow_style']): ?>
	data-slideshow-style="<?php echo $this->_tpl_vars['slideshow_style']; ?>
"
	<?php endif; ?>
	<?php if ($this->_tpl_vars['background_video_ts_enabled'] && $this->_tpl_vars['background_video_ts'] != ""): ?>
		<?php $this->assign('videostr', ((is_array($_tmp="href=\"/media")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['background_video_ts']) : explode($_tmp, $this->_tpl_vars['background_video_ts']))); ?>
		<?php $this->assign('videostr2', ((is_array($_tmp="\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['videostr'][1]) : explode($_tmp, $this->_tpl_vars['videostr'][1]))); ?>
		<?php if (! $this->_tpl_vars['bg_enabled'] || ! $this->_tpl_vars['Backgrounds']): ?>
			<?php $this->assign('imgstr', ((is_array($_tmp="src=\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['background_video_ts']) : explode($_tmp, $this->_tpl_vars['background_video_ts']))); ?>
			<?php $this->assign('imgstr2', ((is_array($_tmp="\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['imgstr'][1]) : explode($_tmp, $this->_tpl_vars['imgstr'][1]))); ?>
			<?php $this->assign('imgstr3', $this->_tpl_vars['imgstr2'][0]); ?>
		<?php else: ?>
			<?php $this->assign('imgstr', ((is_array($_tmp="src=\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['Backgrounds']) : explode($_tmp, $this->_tpl_vars['Backgrounds']))); ?>
			<?php $this->assign('imgstr2', ((is_array($_tmp="\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['imgstr'][1]) : explode($_tmp, $this->_tpl_vars['imgstr'][1]))); ?>
			<?php $this->assign('imgstr3t', ((is_array($_tmp="?")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['imgstr2'][0]) : explode($_tmp, $this->_tpl_vars['imgstr2'][0]))); ?>
			<?php $this->assign('imgstr3', $this->_tpl_vars['imgstr3t'][0]); ?>
		<?php endif; ?>
		data-vide-bg="mp4: /media<?php echo $this->_tpl_vars['videostr2'][0]; ?>
, poster: <?php echo $this->_tpl_vars['imgstr3']; ?>
"
		data-vide-options="loop: true, muted: <?php if ($this->_tpl_vars['theme_vars_mute_bg_video']): ?>true<?php else: ?>false<?php endif; ?>, position: 50% 50%, opacity: <?php echo $this->_tpl_vars['bg_opacity']; ?>
"
	<?php elseif ($this->_tpl_vars['background_video']): ?>
		data-vide-bg="mp4: /media/<?php echo $this->_tpl_vars['background_video']; ?>
, poster: /images/themegraphics/<?php echo $this->_tpl_vars['background1']; ?>
"
		data-vide-options="loop: true, muted: <?php if ($this->_tpl_vars['theme_vars_mute_bg_video']): ?>true<?php else: ?>false<?php endif; ?>, position: 50% 50%, opacity: <?php echo $this->_tpl_vars['bg_opacity']; ?>
"
	<?php endif; ?>
>
<?php if (! $this->_tpl_vars['fill']): ?>
<section class="row clearfix" <?php if ($this->_tpl_vars['height'] != 'auto'): ?>data-min-height="<?php echo $this->_tpl_vars['height']; ?>
"<?php endif; ?>>
<?php endif; ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['content'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if (! $this->_tpl_vars['fill']): ?>
</section>
<?php endif; ?>
</div>