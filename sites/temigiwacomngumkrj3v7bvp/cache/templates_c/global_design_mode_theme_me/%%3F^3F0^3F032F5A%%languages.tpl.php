<?php /* Smarty version 2.6.18, created on 2017-07-23 10:14:11
         compiled from modules/languages.tpl */ ?>
<?php if ($this->_tpl_vars['content']['languages_in_use']): ?>
<div class="clearfix module languages align-<?php echo $this->_tpl_vars['align']; ?>
  <?php if ($this->_tpl_vars['width']): ?>width width-<?php echo $this->_tpl_vars['width']; ?>
 width-valign-<?php echo $this->_tpl_vars['valign']; ?>
<?php endif; ?> <?php if (! $this->_tpl_vars['width']): ?>valign-<?php echo $this->_tpl_vars['valign']; ?>
<?php if ($this->_tpl_vars['valign']): ?> valign<?php endif; ?><?php endif; ?> <?php if ($this->_tpl_vars['clear']): ?>clear-<?php echo $this->_tpl_vars['clear']; ?>
<?php endif; ?>">
	<div>
		<ul id="languages">
			<?php $_from = $this->_tpl_vars['content']['languages_in_use']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang']):
?>
			<li><a href="<?php echo $this->_tpl_vars['lang']['1']; ?>
" class=""><?php echo $this->_tpl_vars['lang']['3']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	</div>
</div>
	
<?php endif; ?>