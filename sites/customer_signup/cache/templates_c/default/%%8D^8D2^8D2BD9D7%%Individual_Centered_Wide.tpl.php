<?php /* Smarty version 2.6.18, created on 2017-08-03 05:12:02
         compiled from columns/Individual_Centered_Wide.tpl */ ?>
<?php if ($this->_tpl_vars['content']['sentAsEmail']): ?>
<table width="100%">
	<tr>
		<td width="20%">
		&nbsp;
		</td>
		<td width="70%">
		<?php echo $this->_tpl_vars['editable']['content']; ?>
<?php if ($this->_tpl_vars['editable']['content'] == ""): ?>&nbsp;<?php endif; ?>		
		</td>
		<td width="20%">
		&nbsp;
		</td>
	</tr>
</table>
<?php else: ?>
<div class="wideCenteredColumn">
	<?php echo $this->_tpl_vars['editable']['content']; ?>
<?php if ($this->_tpl_vars['editable']['content'] == ""): ?>&nbsp;<?php endif; ?>
	</div>
<?php endif; ?>