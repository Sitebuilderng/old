<?php /* Smarty version 2.6.18, created on 2017-08-03 05:19:12
         compiled from columns/Equal_Columns_Quarters.tpl */ ?>
<?php if ($this->_tpl_vars['content']['sentAsEmail']): ?>
<table width="100%">
	<tr>
		<td width="23%" valign="top">
		<?php echo $this->_tpl_vars['editable']['first_column']; ?>
<?php if ($this->_tpl_vars['editable']['first_column'] == ""): ?>&nbsp;<?php endif; ?>			
		</td>
		<td width="2.6%">
		&nbsp;
		</td>
		<td width="23%" valign="top">
		<?php echo $this->_tpl_vars['editable']['second_column']; ?>
<?php if ($this->_tpl_vars['editable']['second_column'] == ""): ?>&nbsp;<?php endif; ?>			
		</td>
		<td width="2.6%">
		&nbsp;
		</td>
		<td width="23%" valign="top">
		<?php echo $this->_tpl_vars['editable']['third_column']; ?>
<?php if ($this->_tpl_vars['editable']['third_column'] == ""): ?>&nbsp;<?php endif; ?>			
		</td>
		<td width="2.6%">
		&nbsp;
		</td>
		<td width="23%" valign="top">
		<?php echo $this->_tpl_vars['editable']['fourth_column']; ?>
<?php if ($this->_tpl_vars['editable']['fourth_column'] == ""): ?>&nbsp;<?php endif; ?>
		</td>
	</tr>
</table>
<?php else: ?>
<div class="row">
	<div class='column oneCol first'>
		<?php echo $this->_tpl_vars['editable']['first_column']; ?>
<?php if ($this->_tpl_vars['editable']['first_column'] == ""): ?>&nbsp;<?php endif; ?>
	</div>
	<div class="hr singlecol"></div>
	<div class='column oneCol lastiftwo'>
		<?php echo $this->_tpl_vars['editable']['second_column']; ?>
<?php if ($this->_tpl_vars['editable']['second_column'] == ""): ?>&nbsp;<?php endif; ?>
	</div>
	<div class="hr singlecol"></div>
	<div class="cleariftwo"></div>
	<div class='column oneCol firstiftwo'>
		<?php echo $this->_tpl_vars['editable']['third_column']; ?>
<?php if ($this->_tpl_vars['editable']['third_column'] == ""): ?>&nbsp;<?php endif; ?>
	</div>
	<div class="hr singlecol"></div>
	<div class='column oneCol last'>
		<?php echo $this->_tpl_vars['editable']['fourth_column']; ?>
<?php if ($this->_tpl_vars['editable']['fourth_column'] == ""): ?>&nbsp;<?php endif; ?>
	</div>
</div>
<?php endif; ?>