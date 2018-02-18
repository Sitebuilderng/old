<?php /* Smarty version 2.6.18, created on 2017-07-22 02:24:59
         compiled from modules/checkout_link.tpl */ ?>
<?php if ($this->_tpl_vars['content']['basket_link']): ?>
<div class="clearfix module checkout-link align-<?php echo $this->_tpl_vars['align']; ?>
  <?php if ($this->_tpl_vars['width']): ?>width width-<?php echo $this->_tpl_vars['width']; ?>
 width-valign-<?php echo $this->_tpl_vars['valign']; ?>
<?php endif; ?> <?php if (! $this->_tpl_vars['width']): ?>valign-<?php echo $this->_tpl_vars['valign']; ?>
<?php if ($this->_tpl_vars['valign']): ?> valign<?php endif; ?><?php endif; ?> <?php if ($this->_tpl_vars['clear']): ?>clear-<?php echo $this->_tpl_vars['clear']; ?>
<?php endif; ?>">
	<div>
		<p><a href="/<?php echo $this->_tpl_vars['content']['basket_link']; ?>
"><?php echo $this->_tpl_vars['langs']['Checkout']; ?>
</a></p>
	</div>
</div>
<?php endif; ?>