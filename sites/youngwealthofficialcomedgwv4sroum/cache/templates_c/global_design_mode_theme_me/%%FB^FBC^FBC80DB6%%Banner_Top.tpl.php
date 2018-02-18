<?php /* Smarty version 2.6.18, created on 2017-07-20 06:17:59
         compiled from widgets/Banner_Top.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'images_to_json', 'widgets/Banner_Top.tpl', 4, false),array('modifier', 'htmlspecialchars', 'widgets/Banner_Top.tpl', 4, false),)), $this); ?>
<div class="banner-feature inverted" data-backgrounds="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['editable']['background_image'])) ? $this->_run_mod_handler('images_to_json', true, $_tmp, true) : smarty_modifier_images_to_json($_tmp, true)))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
">
	<div class="banner-feature-inner banner-feature-content-top">
		<div class="banner-feature-content">	
			<?php echo $this->_tpl_vars['editable']['content']; ?>

		</div>
	</div>
</div>