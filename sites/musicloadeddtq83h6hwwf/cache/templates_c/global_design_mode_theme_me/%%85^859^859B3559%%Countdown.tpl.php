<?php /* Smarty version 2.6.18, created on 2017-07-23 11:10:26
         compiled from widgets/Countdown.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'widgets/Countdown.tpl', 4, false),)), $this); ?>
<ul class="countdownclock" data-time="<?php echo ((is_array($_tmp=$this->_tpl_vars['editable']['time'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
">
	<li><span class="days">00</span><p class="days_text">Days</p></li>
	<li class="seperator">:</li>
	<li><span class="hours">00</span><p class="hours_text">Hours</p></li>
	<li class="seperator">:</li>
	<li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
	<li class="seperator">:</li>
	<li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
</ul>