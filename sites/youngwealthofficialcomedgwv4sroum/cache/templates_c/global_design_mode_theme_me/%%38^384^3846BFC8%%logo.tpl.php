<?php /* Smarty version 2.6.18, created on 2017-07-20 05:26:02
         compiled from modules/logo.tpl */ ?>
<div id="branding" <?php if ($this->_tpl_vars['logo_fixed']): ?>data-logo-fixed-img="/images/themegraphics/<?php echo $this->_tpl_vars['logo_fixed']; ?>
" data-logo-normal-img="<?php if ($this->_tpl_vars['logo']): ?>/images/themegraphics/<?php echo $this->_tpl_vars['logo']; ?>
<?php else: ?>/graphics/logo.png<?php endif; ?>"<?php endif; ?> class="module clearfix align-<?php echo $this->_tpl_vars['align']; ?>
 clear-<?php echo $this->_tpl_vars['clear']; ?>
 <?php if ($this->_tpl_vars['width']): ?>width width-<?php echo $this->_tpl_vars['width']; ?>
 width-valign-<?php echo $this->_tpl_vars['valign']; ?>
<?php endif; ?> <?php if (! $this->_tpl_vars['width']): ?>valign-<?php echo $this->_tpl_vars['valign']; ?>
<?php if ($this->_tpl_vars['valign']): ?> valign<?php endif; ?><?php endif; ?> logo-module <?php if ($this->_tpl_vars['logo_fixed']): ?>with-fixed-logo-version<?php endif; ?>">
	<a href="<?php if ($this->_tpl_vars['link'] != ""): ?><?php echo $this->_tpl_vars['link']; ?>
<?php else: ?>/<?php endif; ?>" <?php if ($this->_tpl_vars['link'] != ""): ?>target="_blank"<?php endif; ?>><img src="<?php if ($this->_tpl_vars['logo']): ?>/images/themegraphics/<?php echo $this->_tpl_vars['logo']; ?>
<?php else: ?>/graphics/logo.png<?php endif; ?>" alt="<?php echo $this->_tpl_vars['sitetitle']; ?>
"/></a>
</div>
