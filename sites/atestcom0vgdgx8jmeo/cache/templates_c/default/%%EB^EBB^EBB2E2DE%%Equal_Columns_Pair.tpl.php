<?php /* Smarty version 2.6.18, created on 2017-07-29 08:53:44
         compiled from columns/Equal_Columns_Pair.tpl */ ?>
<?php if ($this->_tpl_vars['content']['sentAsEmail']): ?>
<table width="100%" class="colblock">
	<tr>
		<td width="49%" valign="top">
		<?php echo $this->_tpl_vars['editable']['first_column']; ?>
<?php if ($this->_tpl_vars['editable']['first_column'] == ""): ?>&nbsp;<?php endif; ?>
		</td>
		<td width="2%" class="colblock-divider">
		&nbsp;
		</td>
		<td width="49%" valign="top">
		<?php echo $this->_tpl_vars['editable']['second_column']; ?>
<?php if ($this->_tpl_vars['editable']['second_column'] == ""): ?>&nbsp;<?php endif; ?>
		</td>
	</tr>
</table>
<?php else: ?>
<div class="column_row">
<div class='column twoCol first'>
	<?php echo $this->_tpl_vars['editable']['first_column']; ?>
<?php if ($this->_tpl_vars['editable']['first_column'] == ""): ?>&nbsp;<?php endif; ?>
</div>
<div class='column twoCol last'>
	<?php echo $this->_tpl_vars['editable']['second_column']; ?>
<?php if ($this->_tpl_vars['editable']['second_column'] == ""): ?>&nbsp;<?php endif; ?>
</div>
</div>
<?php endif; ?>