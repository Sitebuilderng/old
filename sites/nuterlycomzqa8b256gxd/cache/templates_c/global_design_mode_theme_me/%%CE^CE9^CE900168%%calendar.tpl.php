<?php /* Smarty version 2.6.18, created on 2017-07-24 02:11:46
         compiled from admin/views/calendar/calendar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/views/calendar/calendar.tpl', 37, false),array('modifier', 'count', 'admin/views/calendar/calendar.tpl', 55, false),array('modifier', 'array_reverse', 'admin/views/calendar/calendar.tpl', 75, false),array('modifier', 'htmlspecialchars', 'admin/views/calendar/calendar.tpl', 76, false),)), $this); ?>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['prev_month_year']; ?>
" id="prev_month_year"/>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['prev_month']; ?>
" id="prev_month_val"/>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['next_month']; ?>
" id="next_month_val"/>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['prev_month']]; ?>
" id="prev_month_text"/>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['next_month']]; ?>
" id="next_month_text"/>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['next_month_year']; ?>
" id="next_month_year"/>
<input type="hidden" name="" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")); ?>
" id="current_day"/>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['month']; ?>
" id="current_month"/>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['month']]; ?>
" id="current_month_text"/>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['year']; ?>
" id="current_year"/>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['showCat']; ?>
" id="showing_cat"/>
<h2 class="calMonth"><a href="" id="prev_month"></a>  <a href="" id="next_month"></a><?php echo $this->_tpl_vars['SetSeedLangs'][$this->_tpl_vars['month']]; ?>
 <?php echo $this->_tpl_vars['year']; ?>
</h2>
<table class="calTable">
	<tr>
		<th><?php echo $this->_tpl_vars['SetSeedLangs']['Mon']; ?>
</th>
		<th><?php echo $this->_tpl_vars['SetSeedLangs']['Tue']; ?>
</th>
		<th><?php echo $this->_tpl_vars['SetSeedLangs']['Wed']; ?>
</th>
		<th><?php echo $this->_tpl_vars['SetSeedLangs']['Thu']; ?>
</th>
		<th><?php echo $this->_tpl_vars['SetSeedLangs']['Fri']; ?>
</th>
		<th class="weekend"><?php echo $this->_tpl_vars['SetSeedLangs']['Sat']; ?>
</th>
		<th class="weekend"><?php echo $this->_tpl_vars['SetSeedLangs']['Sun']; ?>
</th>
	</tr>
	<tr>
	<?php $_from = $this->_tpl_vars['dates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
		<td class="<?php if (((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")) == $this->_tpl_vars['year'] && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B") : smarty_modifier_date_format($_tmp, "%B")) == $this->_tpl_vars['month'] && ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")) == $this->_tpl_vars['item'][0] && $this->_tpl_vars['item'][4] != 'prevMonth' && $this->_tpl_vars['item'][4] != 'nextMonth'): ?>current<?php endif; ?> <?php if (($this->_foreach['loop1']['iteration']-1) % 7 == 5): ?>weekend<?php endif; ?>  <?php if (($this->_foreach['loop1']['iteration']-1) % 7 == 6): ?>weekend<?php endif; ?> <?php if (count($this->_tpl_vars['item'][1]) > 0): ?>events<?php endif; ?> <?php if ($this->_tpl_vars['item'][3] == 'true'): ?>selectedDay<?php endif; ?> <?php echo $this->_tpl_vars['item'][4]; ?>
" day=<?php echo $this->_tpl_vars['item'][0]; ?>
>
			<span id="day"><?php echo $this->_tpl_vars['item'][0]; ?>
</span>
			

			<div class="eventList">
				
				<form class="eventForm responsiveListAddForm hideOnReset" action="" method="post" style="display:none">
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Event_Title']; ?>
</div>
					<div class="imageContextEditInputWrap linkField"><input type="text" name="event" class="focus" value=""/></div>
				</div>
								<input type="hidden" name="date" value="<?php echo $this->_tpl_vars['item'][2]; ?>
" class="dateInput"/>
			</form>
				<div class="dropzone"><div></div></div>
			<?php $_from = array_reverse($this->_tpl_vars['item'][1]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['item1']):
        $this->_foreach['loop2']['iteration']++;
?>
			<div class="responsiveListItem eventItem" id="event-<?php echo $this->_tpl_vars['item1'][1]; ?>
" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['item1'][0])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" event-id="<?php echo $this->_tpl_vars['item1'][1]; ?>
" 
			data-id="<?php echo $this->_tpl_vars['item1'][1]; ?>
"
			data-event-link="<?php echo ((is_array($_tmp=$this->_tpl_vars['item1'][3])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
			event-summary="<?php echo ((is_array($_tmp=$this->_tpl_vars['item1'][5])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
			event-time="<?php echo ((is_array($_tmp=$this->_tpl_vars['item1'][6])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
			event-location="<?php echo ((is_array($_tmp=$this->_tpl_vars['item1'][7])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
			event-image="<?php echo ((is_array($_tmp=$this->_tpl_vars['item1'][8])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
			data-events-groups="<?php echo ((is_array($_tmp=$this->_tpl_vars['item1'][9])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
			event-duration="<?php echo ((is_array($_tmp=$this->_tpl_vars['item1'][11])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
			<?php $_from = $this->_tpl_vars['item1'][13]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cf_loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cf_loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['custom_field_id'] => $this->_tpl_vars['custom_field']):
        $this->_foreach['cf_loop']['iteration']++;
?>
				data-custom-field-<?php echo $this->_tpl_vars['custom_field_id']; ?>
="<?php echo ((is_array($_tmp=$this->_tpl_vars['custom_field']['value'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
			<?php endforeach; endif; unset($_from); ?>
			>
			
				<span class="overflowEllipsis">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['item1'][0])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>

				</span>
				
				<?php $_from = $this->_tpl_vars['item1'][10]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['grp']):
?> 
					<input type="hidden" id="eventgroup<?php echo $this->_tpl_vars['grp']; ?>
" value="<?php echo $this->_tpl_vars['grp']; ?>
"/>
				<?php endforeach; endif; unset($_from); ?>
			</div>
			
			<div class="responsiveListAddForm inline clearfix editEventForm" id="renameForm<?php echo $this->_tpl_vars['item1'][1]; ?>
" style="display:none;">
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel"><?php echo $this->_tpl_vars['SetSeedLangs']['Event_Title']; ?>
</div>
					<div class="imageContextEditInputWrap linkField"><input type="text" name="rename" class="focus" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item1'][0])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"/></div>
				</div>
								<input type="hidden" name="" value="<?php echo $this->_tpl_vars['item1'][1]; ?>
" class="eventId"/>

			</div>
			<div class="dropzone"><div></div></div>
			<?php endforeach; endif; unset($_from); ?>
			</div>

			
			
		</td>
	<?php if (!($this->_foreach['loop1']['iteration'] % 7)): ?>
	</tr>
	<tr>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</tr>
</table>