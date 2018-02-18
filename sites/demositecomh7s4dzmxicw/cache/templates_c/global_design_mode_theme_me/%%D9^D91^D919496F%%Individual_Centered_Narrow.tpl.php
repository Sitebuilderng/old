<?php /* Smarty version 2.6.18, created on 2017-07-30 08:32:54
         compiled from columns/Individual_Centered_Narrow.tpl */ ?>
<?php if ($this->_tpl_vars['content']['sentAsEmail']): ?>
<table width="100%">
	<tr>
		<td width="25%">
		&nbsp;
		</td>
		<td width="50%">
		<?php echo $this->_tpl_vars['editable']['content']; ?>
<?php if ($this->_tpl_vars['editable']['content'] == ""): ?>&nbsp;<?php endif; ?>
		</td>
		<td width="25%">
		&nbsp;
		</td>
	</tr>
</table>
<?php else: ?>
	<div class="narrowCenteredColumn">
	<?php echo $this->_tpl_vars['editable']['content']; ?>
<?php if ($this->_tpl_vars['editable']['content'] == ""): ?>&nbsp;<?php endif; ?>
	</div>
<?php endif; ?>