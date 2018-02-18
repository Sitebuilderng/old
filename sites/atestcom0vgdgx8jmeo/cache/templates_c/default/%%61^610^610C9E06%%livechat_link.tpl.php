<?php /* Smarty version 2.6.18, created on 2017-07-29 08:41:40
         compiled from modules/livechat_link.tpl */ ?>
<div class="clearfix module livechat-link align-<?php echo $this->_tpl_vars['align']; ?>
  <?php if ($this->_tpl_vars['width']): ?>width width-<?php echo $this->_tpl_vars['width']; ?>
 width-valign-<?php echo $this->_tpl_vars['valign']; ?>
<?php endif; ?> <?php if (! $this->_tpl_vars['width']): ?>valign-<?php echo $this->_tpl_vars['valign']; ?>
<?php if ($this->_tpl_vars['valign']): ?> valign<?php endif; ?><?php endif; ?> <?php if ($this->_tpl_vars['clear']): ?>clear-<?php echo $this->_tpl_vars['clear']; ?>
<?php endif; ?>">
	<div>
		<p id="livechat" style="display:none"><a href="/livechat/convo.php?language=<?php echo $this->_tpl_vars['content']['language']; ?>
" id="startConvo"><?php echo $this->_tpl_vars['langs']['Livechat']; ?>
</a>
		</p>
	</div>
</div>
					