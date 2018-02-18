<?php /* Smarty version 2.6.18, created on 2017-07-24 02:16:00
         compiled from calendar-comp.tpl */ ?>
<script type="text/javascript" charset="utf-8">
<!--
<?php echo '

$(document).ready(function(){
function assignCal() {
	if (typeof moduleHeights == \'function\') {
		moduleHeights();
	}
	if (typeof setSSCalendarGroupFilter === "function") {
	setSSCalendarGroupFilter();
	}
	
	$("#cal'; ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['showCat']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['showCat']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php echo ' .next_month").click(function(){
		month = $("#cal'; ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['showCat']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['showCat']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php echo ' .next_month_val").val();
		year = $("#cal'; ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['showCat']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['showCat']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php echo ' .next_month_year").val();

		$("#cal'; ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['showCat']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['showCat']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php echo '").load("/actions/ShowCal/?'; ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['showCat']): ?><?php echo 'showCat='; ?><?php echo $this->_tpl_vars['showCat']; ?><?php echo '&'; ?><?php endif; ?><?php echo ''; ?>
<?php echo 'month="+month+"&year="+year+langAppend,function(){
			assignCal();
		});
		return false;
	});
	$("#cal'; ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['showCat']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['showCat']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php echo ' .prev_month").click(function(){
		month = $("#cal'; ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['showCat']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['showCat']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php echo ' .prev_month_val").val();
		year = $("#cal'; ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['showCat']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['showCat']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php echo ' .prev_month_year").val();

		$("#cal'; ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['showCat']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['showCat']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php echo '").load("/actions/ShowCal/?'; ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['showCat']): ?><?php echo 'showCat='; ?><?php echo $this->_tpl_vars['showCat']; ?><?php echo '&'; ?><?php endif; ?><?php echo ''; ?>
<?php echo 'month="+month+"&year="+year+langAppend,function(){
			assignCal();
		});
		return false;
	});

}
$("#cal'; ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['showCat']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['showCat']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php echo '").load("/actions/ShowCal/'; ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['showCat']): ?><?php echo '?showCat='; ?><?php echo $this->_tpl_vars['showCat']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php echo '"'; ?>
<?php if ($this->_tpl_vars['showCat']): ?>+langAppend<?php else: ?>+lang<?php endif; ?><?php echo ',function(){
	assignCal();
});
// -->
});
'; ?>


</script>
<?php if ($this->_tpl_vars['categories']): ?>
<div class="column_row">
<div class='column threeCol first'>
<div id="cal<?php if ($this->_tpl_vars['showCat']): ?><?php echo $this->_tpl_vars['showCat']; ?>
<?php endif; ?>" class="calendar"></div>
</div>
<div class='column quartCol last'>
	<p>
	<?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['category']):
        $this->_foreach['loop1']['iteration']++;
?>
		<input type="checkbox" class="ss_calendar_group_filter" <?php if (($this->_foreach['loop1']['iteration'] <= 1)): ?>checked="checked"<?php endif; ?> value="<?php echo $this->_tpl_vars['category']['id']; ?>
" name="grp<?php echo $this->_tpl_vars['category']['id']; ?>
" data-group-id="<?php echo $this->_tpl_vars['category']['id']; ?>
"/> <?php echo $this->_tpl_vars['category']['name']; ?>
<br/>
	<?php endforeach; endif; unset($_from); ?>
	</p>
</div>
</div>


<?php else: ?>
<div id="cal<?php if ($this->_tpl_vars['showCat']): ?><?php echo $this->_tpl_vars['showCat']; ?>
<?php endif; ?>" class="calendar"></div>
<?php endif; ?>