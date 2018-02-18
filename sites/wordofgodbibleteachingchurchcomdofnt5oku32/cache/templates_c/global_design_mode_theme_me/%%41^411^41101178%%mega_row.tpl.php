<?php /* Smarty version 2.6.18, created on 2017-07-20 05:15:37
         compiled from includes/mega_row.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'images_to_json', 'includes/mega_row.tpl', 22, false),array('modifier', 'htmlspecialchars', 'includes/mega_row.tpl', 22, false),array('modifier', 'explode', 'includes/mega_row.tpl', 47, false),)), $this); ?>
			<?php if ($this->_tpl_vars['theme_vars_main_logo'] && ! $this->_tpl_vars['logo_file']): ?>
			<?php $this->assign('logo_file', $this->_tpl_vars['theme_vars_main_logo']); ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['theme_vars_main_logo_fixed'] && ! $this->_tpl_vars['logo_file_fixed']): ?>
			<?php $this->assign('logo_file_fixed', $this->_tpl_vars['theme_vars_main_logo_fixed']); ?>
			<?php endif; ?>

			<style type="text/css" media="screen">
				#<?php echo $this->_tpl_vars['mr_id']; ?>
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
			<div class="container <?php if ($this->_tpl_vars['show_in_fixed'] == '0'): ?>hide-in-fixed<?php endif; ?> <?php if ($this->_tpl_vars['inverted']): ?>inverted<?php endif; ?>
				<?php if ($this->_tpl_vars['left'] == 'menu' || $this->_tpl_vars['left_2'] == 'menu' || $this->_tpl_vars['centered'] == 'menu' || $this->_tpl_vars['right'] == 'menu' || $this->_tpl_vars['right_2'] == 'menu'): ?>ontop<?php endif; ?>"
					id="<?php echo $this->_tpl_vars['mr_id']; ?>
"
					<?php if ($this->_tpl_vars['bg_mode'] != 'tile' && ( ( $this->_tpl_vars['background_video'] == "" && ! $this->_tpl_vars['background_video_sw_enabled'] ) || ( $this->_tpl_vars['background_video_sw'] == "" && $this->_tpl_vars['background_video_sw_enabled'] ) )): ?>
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
					<?php if ($this->_tpl_vars['background_video_sw_enabled'] && $this->_tpl_vars['background_video_sw'] != ""): ?>
						<?php $this->assign('videostr', ((is_array($_tmp="href=\"/media")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['background_video_sw']) : explode($_tmp, $this->_tpl_vars['background_video_sw']))); ?>
						<?php $this->assign('videostr2', ((is_array($_tmp="\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['videostr'][1]) : explode($_tmp, $this->_tpl_vars['videostr'][1]))); ?>
						<?php if (! $this->_tpl_vars['bg_enabled'] || ! $this->_tpl_vars['Backgrounds']): ?>
							<?php $this->assign('imgstr', ((is_array($_tmp="src=\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['background_video_sw']) : explode($_tmp, $this->_tpl_vars['background_video_sw']))); ?>
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
				<?php if ($this->_tpl_vars['full_top_enabled'] && $this->_tpl_vars['full_top_content'] != ""): ?>
				<div class="row clearix" id="<?php echo $this->_tpl_vars['mr_id']; ?>
_full_width_top">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['full_top_content'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
				<?php endif; ?>


				<?php if ($this->_tpl_vars['left'] != 'none' || $this->_tpl_vars['left_2'] != 'none' || $this->_tpl_vars['centered'] != 'none' || $this->_tpl_vars['right'] != 'none' || $this->_tpl_vars['right_2'] != ""): ?>
				<div class="row clearfix flexibreak-big" data-flexibreak-small="<?php echo $this->_tpl_vars['mr_id']; ?>
-small" <?php if ($this->_tpl_vars['height'] != 'auto'): ?>data-min-height="<?php echo $this->_tpl_vars['height']; ?>
"<?php endif; ?>>

					<?php if ($this->_tpl_vars['centered'] != 'none' || $this->_tpl_vars['right'] != 'sitewide'): ?>
						<?php $this->assign('cblva', $this->_tpl_vars['left_valign']); ?>
					<?php endif; ?>
					<?php if (( $this->_tpl_vars['right'] == 'logo' || $this->_tpl_vars['centered'] == 'logo' ) && $this->_tpl_vars['left_2'] != 'none' && $this->_tpl_vars['left_valign'] == 'both'): ?>
						<?php $this->assign('cblva', 'top'); ?>
					<?php endif; ?>

					<?php if ($this->_tpl_vars['left'] == 'menu'): ?>

						<?php $this->assign('align', 'left'); ?>
						<?php if ($this->_tpl_vars['nav_style'] != ""): ?>
							<?php $this->assign('align', 'justify'); ?>
						<?php endif; ?>

						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/nav.tpl", 'smarty_include_vars' => array('align' => $this->_tpl_vars['align'],'valign' => $this->_tpl_vars['cblva'],'style' => $this->_tpl_vars['nav_style'],'search' => $this->_tpl_vars['search'],'basket' => $this->_tpl_vars['basket'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

					<?php endif; ?>
					<?php if ($this->_tpl_vars['left'] == 'logo'): ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/logo.tpl", 'smarty_include_vars' => array('logo' => $this->_tpl_vars['logo_file'],'logo_fixed' => $this->_tpl_vars['logo_file_fixed'],'align' => 'left','link' => $this->_tpl_vars['logo_link'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['left'] == 'sitewide'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['Left'],'align' => 'left','valign' => $this->_tpl_vars['cblva'],'id' => ($this->_tpl_vars['mr_id'])."_left")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['left'] == 'social'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'left','style' => 'icons','valign' => $this->_tpl_vars['cblva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['left'] == 'social_large'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'left','style' => 'icons','size' => 'large','valign' => $this->_tpl_vars['cblva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['left'] == 'social_text'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'left','style' => 'text','valign' => $this->_tpl_vars['cblva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['left'] == 'social_text_icons'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'left','valign' => $this->_tpl_vars['cblva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['left'] == 'social_text_icons_large'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'left','size' => 'large','valign' => $this->_tpl_vars['cblva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['left'] == 'checkout'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/checkout_link.tpl", 'smarty_include_vars' => array('align' => 'left','valign' => $this->_tpl_vars['cblva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['left'] == 'languages'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/languages.tpl", 'smarty_include_vars' => array('align' => 'left','valign' => $this->_tpl_vars['cblva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if (( $this->_tpl_vars['right'] == 'logo' || $this->_tpl_vars['centered'] == 'logo' ) && $this->_tpl_vars['left_valign'] == 'both'): ?>
						<?php $this->assign('cblva', 'bottom'); ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['left_2'] == 'sitewide'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['Left_Secondary'],'align' => 'left','valign' => $this->_tpl_vars['cblva'],'id' => ($this->_tpl_vars['mr_id'])."_left_secondary")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['left_2'] == 'social'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'left','style' => 'icons','valign' => $this->_tpl_vars['cblva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['left_2'] == 'social_large'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'left','style' => 'icons','size' => 'large','valign' => $this->_tpl_vars['cblva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>

					<?php if ($this->_tpl_vars['left_2'] == 'menu'): ?>

						<?php $this->assign('align', 'left'); ?>
						<?php if ($this->_tpl_vars['nav_style'] != ""): ?>
							<?php $this->assign('align', 'justify'); ?>
						<?php endif; ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/nav.tpl", 'smarty_include_vars' => array('align' => $this->_tpl_vars['align'],'valign' => $this->_tpl_vars['cblva'],'style' => $this->_tpl_vars['nav_style'],'search' => $this->_tpl_vars['search'],'basket' => $this->_tpl_vars['basket'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

					<?php endif; ?>
					<?php if ($this->_tpl_vars['left_2'] == 'social_text'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'left','style' => 'text','valign' => $this->_tpl_vars['cblva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['left_2'] == 'social_text_icons'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'left','valign' => $this->_tpl_vars['cblva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['left_2'] == 'social_text_icons_large'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'left','size' => 'large','valign' => $this->_tpl_vars['cblva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['left_2'] == 'checkout'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/checkout_link.tpl", 'smarty_include_vars' => array('align' => 'left','valign' => $this->_tpl_vars['cblva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['left_2'] == 'languages'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/languages.tpl", 'smarty_include_vars' => array('align' => 'left','valign' => $this->_tpl_vars['cblva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>




					<?php if ($this->_tpl_vars['left'] != 'none' || $this->_tpl_vars['centered'] != 'none' || $this->_tpl_vars['left'] == 'sitewide'): ?>
						<?php $this->assign('cbrva', $this->_tpl_vars['right_valign']); ?>
					<?php endif; ?>
					<?php if (( $this->_tpl_vars['left'] == 'logo' || $this->_tpl_vars['centered'] == 'logo' ) && $this->_tpl_vars['right_2'] != 'none' && $this->_tpl_vars['right_valign'] == 'both'): ?>
						<?php $this->assign('cbrva', 'top'); ?>
					<?php endif; ?>

					<?php if ($this->_tpl_vars['right'] == 'menu'): ?>

						<?php $this->assign('align', 'right'); ?>
						<?php if ($this->_tpl_vars['nav_style'] != ""): ?>
							<?php $this->assign('align', 'justify'); ?>
						<?php endif; ?>

						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/nav.tpl", 'smarty_include_vars' => array('align' => $this->_tpl_vars['align'],'valign' => $this->_tpl_vars['cbrva'],'style' => $this->_tpl_vars['nav_style'],'search' => $this->_tpl_vars['search'],'basket' => $this->_tpl_vars['basket'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

					<?php endif; ?>
					<?php if ($this->_tpl_vars['right'] == 'logo'): ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/logo.tpl", 'smarty_include_vars' => array('logo' => $this->_tpl_vars['logo3'],'logo_fixed' => $this->_tpl_vars['logo3_fixed'],'align' => 'right','link' => $this->_tpl_vars['logo3_link'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right'] == 'sitewide'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['Right'],'align' => 'right','valign' => $this->_tpl_vars['cbrva'],'id' => ($this->_tpl_vars['mr_id'])."_right")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right'] == 'social'): ?>

						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'right','style' => 'icons','valign' => $this->_tpl_vars['cbrva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right'] == 'social_large'): ?>

						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'right','style' => 'icons','size' => 'large','valign' => $this->_tpl_vars['cbrva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right'] == 'social_text'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'right','style' => 'text','valign' => $this->_tpl_vars['cbrva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right'] == 'social_text_icons'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'right','valign' => $this->_tpl_vars['cbrva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right'] == 'social_text_icons_large'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'right','size' => 'large','valign' => $this->_tpl_vars['cbrva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right'] == 'checkout'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/checkout_link.tpl", 'smarty_include_vars' => array('align' => 'right','valign' => $this->_tpl_vars['cbrva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right'] == 'languages'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/languages.tpl", 'smarty_include_vars' => array('align' => 'right','valign' => $this->_tpl_vars['cbrva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>

					<?php if (( $this->_tpl_vars['left'] == 'logo' || $this->_tpl_vars['centered'] == 'logo' ) && $this->_tpl_vars['right_valign'] == 'both'): ?>
						<?php $this->assign('cbrva', 'bottom'); ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right_2'] == 'sitewide'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['Right_Secondary'],'align' => 'right','valign' => $this->_tpl_vars['cbrva'],'id' => ($this->_tpl_vars['mr_id'])."_right_secondary")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right_2'] == 'social'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'right','style' => 'icons','valign' => $this->_tpl_vars['cbrva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right_2'] == 'social_large'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'right','size' => 'large','style' => 'icons','valign' => $this->_tpl_vars['cbrva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right_2'] == 'menu'): ?>

						<?php $this->assign('align', 'right'); ?>
						<?php if ($this->_tpl_vars['nav_style'] != ""): ?>
							<?php $this->assign('align', 'justify'); ?>
						<?php endif; ?>

						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/nav.tpl", 'smarty_include_vars' => array('align' => $this->_tpl_vars['align'],'valign' => $this->_tpl_vars['cbrva'],'style' => $this->_tpl_vars['nav_style'],'search' => $this->_tpl_vars['search'],'basket' => $this->_tpl_vars['basket'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

					<?php endif; ?>
					<?php if ($this->_tpl_vars['right_2'] == 'social_text'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'right','style' => 'text','valign' => $this->_tpl_vars['cbrva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right_2'] == 'social_text_icons'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'left','valign' => $this->_tpl_vars['cbrva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right_2'] == 'social_text_icons_large'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'left','size' => 'large','valign' => $this->_tpl_vars['cbrva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right_2'] == 'checkout'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/checkout_link.tpl", 'smarty_include_vars' => array('align' => 'left','valign' => $this->_tpl_vars['cbrva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['right_2'] == 'languages'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/languages.tpl", 'smarty_include_vars' => array('align' => 'left','valign' => $this->_tpl_vars['cbrva'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>


					<?php if ($this->_tpl_vars['centered'] == 'sitewide'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['Centered'],'align' => 'center','id' => ($this->_tpl_vars['mr_id'])."_centered")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>

					<?php if ($this->_tpl_vars['centered'] == 'logo'): ?>
					    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/logo.tpl", 'smarty_include_vars' => array('align' => 'center','logo' => $this->_tpl_vars['logo2'],'logo_fixed' => $this->_tpl_vars['logo2_fixed'],'link' => $this->_tpl_vars['logo2_link'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>

					<?php if ($this->_tpl_vars['centered'] == 'social'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','style' => 'icons')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['centered'] == 'social_large'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','size' => 'large','style' => 'icons')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>

					<?php if ($this->_tpl_vars['centered'] == 'menu'): ?>

						<?php $this->assign('align', 'center'); ?>
						<?php if ($this->_tpl_vars['nav_style'] != ""): ?>
							<?php $this->assign('align', 'justify'); ?>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['left'] == 'logo' || $this->_tpl_vars['left_2'] == 'logo' || $this->_tpl_vars['right'] == 'logo' || $this->_tpl_vars['right_2'] == 'logo'): ?>
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/nav.tpl", 'smarty_include_vars' => array('align' => $this->_tpl_vars['align'],'style' => $this->_tpl_vars['nav_style'],'search' => $this->_tpl_vars['search'],'basket' => $this->_tpl_vars['basket'],'valign' => 'middle','skipclearfix' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

						<?php else: ?>
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/nav.tpl", 'smarty_include_vars' => array('align' => $this->_tpl_vars['align'],'style' => $this->_tpl_vars['nav_style'],'search' => $this->_tpl_vars['search'],'basket' => $this->_tpl_vars['basket'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

						<?php endif; ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['centered'] == 'social_text'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','style' => 'text')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['centered'] == 'social_text_icons'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['centered'] == 'social_text_icons_large'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','size' => 'large')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['centered'] == 'checkout'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/checkout_link.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['centered'] == 'languages'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/languages.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>


				</div>

				<div id="<?php echo $this->_tpl_vars['mr_id']; ?>
-small" class="flexibreak-small">
						<?php if ($this->_tpl_vars['left'] == 'logo' && ( $this->_tpl_vars['centered'] == 'menu' || $this->_tpl_vars['right'] == 'menu' || $this->_tpl_vars['right_2'] == 'menu' || $this->_tpl_vars['left_2'] == 'menu' )): ?>

							<div class="row clearfix">
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/logo.tpl", 'smarty_include_vars' => array('align' => 'left','logo' => $this->_tpl_vars['logo_file'],'logo_fixed' => $this->_tpl_vars['logo_file_fixed'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/mobile_nav.tpl", 'smarty_include_vars' => array('align' => 'right','style' => "reveal-right",'valign' => 'middle')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>

						<?php endif; ?>

						<?php if ($this->_tpl_vars['right'] == 'logo' && ( $this->_tpl_vars['left'] == 'menu' || $this->_tpl_vars['left_2'] == 'menu' || $this->_tpl_vars['right_2'] == 'menu' )): ?>

							<div class="row clearfix">
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/logo.tpl", 'smarty_include_vars' => array('align' => 'right','logo' => $this->_tpl_vars['logo3'],'logo_fixed' => $this->_tpl_vars['logo3_fixed'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/mobile_nav.tpl", 'smarty_include_vars' => array('align' => 'left','style' => "reveal-left",'valign' => 'middle')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>

						<?php endif; ?>
						<?php if (( $this->_tpl_vars['centered'] == 'menu' || $this->_tpl_vars['left'] == 'menu' || $this->_tpl_vars['left_2'] == 'menu' || $this->_tpl_vars['right_2'] == 'menu' || $this->_tpl_vars['right'] == 'menu' ) && ( $this->_tpl_vars['left'] != 'logo' && $this->_tpl_vars['right'] != 'logo' )): ?>
							<div class="row clearfix">
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/mobile_nav.tpl", 'smarty_include_vars' => array('align' => 'center','style' => "reveal-left")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['left'] == 'logo' && $this->_tpl_vars['centered'] != 'menu' && $this->_tpl_vars['right'] != 'menu' && $this->_tpl_vars['right_2'] != 'menu' && $this->_tpl_vars['left_2'] != 'menu'): ?>
							<div class="row clearfix">
						    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/logo.tpl", 'smarty_include_vars' => array('logo' => $this->_tpl_vars['logo_file'],'logo_fixed' => $this->_tpl_vars['logo_file_fixed'],'align' => 'center','link' => $this->_tpl_vars['logo_link'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>

						<?php if ($this->_tpl_vars['left'] == 'sitewide'): ?>
							<div class="row clearfix" id="<?php echo $this->_tpl_vars['mr_id']; ?>
_left_mobile">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['Left'],'align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['left'] == 'social'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','style' => 'icons')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['left'] == 'social_large'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','style' => 'icons','size' => 'large')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['left'] == 'social_text'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','style' => 'text')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['left'] == 'social_text_icons'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['left'] == 'social_text_icons_large'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','size' => 'large')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['left'] == 'checkout'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/checkout_link.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['left'] == 'languages'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/languages.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>


						<?php if ($this->_tpl_vars['left_2'] == 'sitewide'): ?>
							<div class="row clearfix" id="<?php echo $this->_tpl_vars['mr_id']; ?>
_left_secondary_mobile">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['Left_Secondary'],'align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['left_2'] == 'social'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','style' => 'icons')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['left_2'] == 'social_large'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','size' => 'large','style' => 'icons')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>



						<?php if ($this->_tpl_vars['left_2'] == 'social_text'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','style' => 'text')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['left_2'] == 'social_text_icons'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['left_2'] == 'social_text_icons_large'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','size' => 'large')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['left_2'] == 'checkout'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/checkout_link.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['left_2'] == 'languages'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/languages.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>




						<?php if ($this->_tpl_vars['right'] == 'logo' && $this->_tpl_vars['left'] != 'menu' && $this->_tpl_vars['right_2'] != 'menu' && $this->_tpl_vars['left_2'] != 'menu'): ?>
							<div class="row clearfix">
						    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/logo.tpl", 'smarty_include_vars' => array('logo' => $this->_tpl_vars['logo3'],'logo_fixed' => $this->_tpl_vars['logo3_fixed'],'align' => 'center','link' => $this->_tpl_vars['logo3_link'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>

						<?php if ($this->_tpl_vars['right'] == 'sitewide'): ?>
							<div class="row clearfix" id="<?php echo $this->_tpl_vars['mr_id']; ?>
_right_mobile">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['Right'],'align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['right'] == 'social'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','style' => 'icons')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['right'] == 'social_large'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','style' => 'icons','size' => 'large')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['right'] == 'social_text'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','style' => 'text')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['right'] == 'social_text_icons'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['right'] == 'social_text_icons_large'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','size' => 'large')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['right'] == 'checkout'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/checkout_link.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['right'] == 'languages'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/languages.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>



						<?php if ($this->_tpl_vars['right_2'] == 'sitewide'): ?>
							<div class="row clearfix" id="<?php echo $this->_tpl_vars['mr_id']; ?>
_right_secondary_mobile">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['Right_Secondary'],'align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['right_2'] == 'social'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','style' => 'icons')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['right_2'] == 'social_large'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','size' => 'large','style' => 'icons')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>

						<?php if ($this->_tpl_vars['right_2'] == 'social_text'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','style' => 'text')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['right_2'] == 'social_text_icons'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['right_2'] == 'social_text_icons_large'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','size' => 'large')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['right_2'] == 'checkout'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/checkout_link.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['right_2'] == 'languages'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/languages.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>


						<?php if ($this->_tpl_vars['centered'] == 'sitewide'): ?>
							<div class="row clearfix" id="<?php echo $this->_tpl_vars['mr_id']; ?>
_centered_mobile">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['Centered'],'align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>

						<?php if ($this->_tpl_vars['centered'] == 'logo'): ?>
							<div class="row clearfix">
						    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/logo.tpl", 'smarty_include_vars' => array('align' => 'center','logo' => $this->_tpl_vars['logo2'],'logo_fixed' => $this->_tpl_vars['logo2_fixed'],'link' => $this->_tpl_vars['logo2_link'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>

						<?php if ($this->_tpl_vars['centered'] == 'social'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','style' => 'icons')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>

						<?php if ($this->_tpl_vars['centered'] == 'social_large'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','size' => 'large','style' => 'icons')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>


						<?php if ($this->_tpl_vars['centered'] == 'social_text'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','style' => 'text')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['centered'] == 'social_text_icons'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['centered'] == 'social_text_icons_large'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/social_links.tpl", 'smarty_include_vars' => array('align' => 'center','size' => 'large')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['centered'] == 'checkout'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/checkout_link.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['centered'] == 'languages'): ?>
							<div class="row clearfix">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/languages.tpl", 'smarty_include_vars' => array('align' => 'center')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>

				</div>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['full_bottom_enabled']): ?>
				<div class="row clearix" id="<?php echo $this->_tpl_vars['mr_id']; ?>
_full_width_bottom">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/content_block.tpl", 'smarty_include_vars' => array('content' => $this->_tpl_vars['full_bottom_content'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
				<?php endif; ?>

			</div>