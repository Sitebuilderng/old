<?php /* Smarty version 2.6.18, created on 2017-07-24 02:16:01
         compiled from calendar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format_locale', 'calendar.tpl', 9, false),array('modifier', 'truncate', 'calendar.tpl', 15, false),array('modifier', 'date_format', 'calendar.tpl', 50, false),array('modifier', 'count', 'calendar.tpl', 50, false),)), $this); ?>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['prev_month_year']; ?>
" id="prev_month_year" class="prev_month_year"/>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['prev_month']; ?>
" id="prev_month_val" class="prev_month_val"/>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['next_month']; ?>
" id="next_month_val" class="next_month_val"/>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['next_month_year']; ?>
" id="next_month_year" class="next_month_year"/>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['month']; ?>
" id="current_month" class="current_month"/>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['year']; ?>
" id="current_year" class="current_year"/>
<?php $this->assign('monthyear', ($this->_tpl_vars['month'])." ".($this->_tpl_vars['year'])); ?>

<h1 class="calMonth"><a href="" id="prev_month" class="prev_month"></a>  <a href="" id="next_month" class="next_month"></a><?php echo ((is_array($_tmp=$this->_tpl_vars['month'])) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%B", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%B", $this->_tpl_vars['language'])); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['monthyear'])) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%Y", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%Y", $this->_tpl_vars['language'])); ?>
</h1>
<table class="calTable">
	<tr>
		<th>
			<span class="cal_th_desktop"><?php echo ((is_array($_tmp='Monday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%A", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%A", $this->_tpl_vars['language'])); ?>
</span>
			<span class="cal_th_tablet"><?php echo ((is_array($_tmp='Monday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])); ?>
</span>
			<span class="cal_th_mobile"><?php echo ((is_array($_tmp=((is_array($_tmp='Monday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, '1', "", true) : smarty_modifier_truncate($_tmp, '1', "", true)); ?>
</span>
		</th>
		<th>
			<span class="cal_th_desktop"><?php echo ((is_array($_tmp='Tuesday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%A", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%A", $this->_tpl_vars['language'])); ?>
</span>
			<span class="cal_th_tablet"><?php echo ((is_array($_tmp='Tuesday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])); ?>
</span>
			<span class="cal_th_mobile"><?php echo ((is_array($_tmp=((is_array($_tmp='Tuesday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, '1', "", true) : smarty_modifier_truncate($_tmp, '1', "", true)); ?>
</span>
		</th>
		<th>
			<span class="cal_th_desktop"><?php echo ((is_array($_tmp='Wednesday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%A", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%A", $this->_tpl_vars['language'])); ?>
</span>
			<span class="cal_th_tablet"><?php echo ((is_array($_tmp='Wednesday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])); ?>
</span>
			<span class="cal_th_mobile"><?php echo ((is_array($_tmp=((is_array($_tmp='Wednesday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, '1', "", true) : smarty_modifier_truncate($_tmp, '1', "", true)); ?>
</span>
		</th>
		<th>
			<span class="cal_th_desktop"><?php echo ((is_array($_tmp='Thursday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%A", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%A", $this->_tpl_vars['language'])); ?>
</span>
			<span class="cal_th_tablet"><?php echo ((is_array($_tmp='Thursday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])); ?>
</span>
			<span class="cal_th_mobile"><?php echo ((is_array($_tmp=((is_array($_tmp='Thursday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, '1', "", true) : smarty_modifier_truncate($_tmp, '1', "", true)); ?>
</span>
		</th>
		<th>
			<span class="cal_th_desktop"><?php echo ((is_array($_tmp='Friday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%A", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%A", $this->_tpl_vars['language'])); ?>
</span>
			<span class="cal_th_tablet"><?php echo ((is_array($_tmp='Friday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])); ?>
</span>
			<span class="cal_th_mobile"><?php echo ((is_array($_tmp=((is_array($_tmp='Friday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, '1', "", true) : smarty_modifier_truncate($_tmp, '1', "", true)); ?>
</span>
		</th>
		<th class="weekend">
			<span class="cal_th_desktop"><?php echo ((is_array($_tmp='Saturday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%A", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%A", $this->_tpl_vars['language'])); ?>
</span>
			<span class="cal_th_tablet"><?php echo ((is_array($_tmp='Saturday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])); ?>
</span>
			<span class="cal_th_mobile"><?php echo ((is_array($_tmp=((is_array($_tmp='Saturday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, '1', "", true) : smarty_modifier_truncate($_tmp, '1', "", true)); ?>
</span>
		</th>
		<th class="weekend">
			<span class="cal_th_desktop"><?php echo ((is_array($_tmp='Sunday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%A", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%A", $this->_tpl_vars['language'])); ?>
</span>
			<span class="cal_th_tablet"><?php echo ((is_array($_tmp='Sunday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])); ?>
</span>
			<span class="cal_th_mobile"><?php echo ((is_array($_tmp=((is_array($_tmp='Sunday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, '1', "", true) : smarty_modifier_truncate($_tmp, '1', "", true)); ?>
</span>
		</th>
	</tr>
	<tr>
	<?php $_from = $this->_tpl_vars['dates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
		<td class="<?php if (((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")) == $this->_tpl_vars['year'] && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B") : smarty_modifier_date_format($_tmp, "%B")) == $this->_tpl_vars['month'] && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) == $this->_tpl_vars['item'][0]): ?> current<?php endif; ?> <?php if ($this->_foreach['loop1']['iteration'] % 7 == 6 || $this->_foreach['loop1']['iteration'] % 7 == 0): ?>weekend<?php endif; ?> <?php echo $this->_tpl_vars['item'][4]; ?>
 <?php if (count($this->_tpl_vars['item'][1]) > 0): ?>hasEvents<?php endif; ?>" data-full-date="<?php if ($this->_tpl_vars['item'][4] == 'prevMonth'): ?><?php $this->assign('str', ($this->_tpl_vars['item'][0])." ".($this->_tpl_vars['prev_month'])." ".($this->_tpl_vars['prev_month_year'])); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['str'])) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%d %B %Y", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%d %B %Y", $this->_tpl_vars['language'])); ?>
<?php endif; ?><?php if ($this->_tpl_vars['item'][4] == 'currentMonth'): ?><?php $this->assign('str', ($this->_tpl_vars['item'][0])." ".($this->_tpl_vars['month'])." ".($this->_tpl_vars['year'])); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['str'])) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%d %B %Y", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%d %B %Y", $this->_tpl_vars['language'])); ?>
<?php endif; ?><?php if ($this->_tpl_vars['item'][4] == 'nextMonth'): ?><?php $this->assign('str', ($this->_tpl_vars['item'][0])." ".($this->_tpl_vars['next_month'])." ".($this->_tpl_vars['next_month_year'])); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['str'])) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%d %B %Y", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%d %B %Y", $this->_tpl_vars['language'])); ?>
<?php endif; ?>">
			<?php echo $this->_tpl_vars['item'][0]; ?>

			<?php if (count($this->_tpl_vars['item'][1]) > 0): ?>
			<?php $_from = $this->_tpl_vars['item'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['item1']):
        $this->_foreach['loop2']['iteration']++;
?>
				<div class="event" id="<?php echo $this->_tpl_vars['item1'][1]; ?>
"><?php if ($this->_tpl_vars['item1'][2] != ""): ?><a href="<?php if ($this->_tpl_vars['item1'][3] != 'External Website'): ?><?php endif; ?><?php echo $this->_tpl_vars['item1'][2]; ?>
<?php if ($this->_tpl_vars['item1'][3] != 'External Website'): ?><?php endif; ?>"><?php endif; ?><?php echo $this->_tpl_vars['item1'][0]; ?>
<?php if ($this->_tpl_vars['item1'][2] != ""): ?></a><?php endif; ?></div>
			<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
		</td>
	<?php if (!($this->_foreach['loop1']['iteration'] % 7)): ?>
	</tr>
	<tr>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</tr>
</table>