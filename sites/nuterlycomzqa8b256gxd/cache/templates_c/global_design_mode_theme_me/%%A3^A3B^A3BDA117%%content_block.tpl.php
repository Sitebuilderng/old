<?php /* Smarty version 2.6.18, created on 2017-07-18 22:50:14
         compiled from modules/content_block.tpl */ ?>
<div class="clearfix module content-block align-<?php echo $this->_tpl_vars['align']; ?>
  <?php if ($this->_tpl_vars['width']): ?>width width-<?php echo $this->_tpl_vars['width']; ?>
 width-valign-<?php echo $this->_tpl_vars['valign']; ?>
<?php endif; ?> <?php if (! $this->_tpl_vars['width']): ?>valign-<?php echo $this->_tpl_vars['valign']; ?>
<?php if ($this->_tpl_vars['valign']): ?> valign<?php endif; ?><?php endif; ?> <?php if ($this->_tpl_vars['clear']): ?>clear-<?php echo $this->_tpl_vars['clear']; ?>
<?php endif; ?>  <?php if ($this->_tpl_vars['style']): ?>style-<?php echo $this->_tpl_vars['style']; ?>
<?php endif; ?>" <?php if ($this->_tpl_vars['id']): ?>id="<?php echo $this->_tpl_vars['id']; ?>
"<?php endif; ?>>
	<div>
	<?php echo $this->_tpl_vars['content']; ?>

	</div>
</div>