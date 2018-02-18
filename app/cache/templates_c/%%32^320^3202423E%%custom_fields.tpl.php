<?php /* Smarty version 2.6.18, created on 2017-07-24 02:11:45
         compiled from admin/views/calendar/custom_fields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'admin/views/calendar/custom_fields.tpl', 3, false),array('modifier', 'replace', 'admin/views/calendar/custom_fields.tpl', 7, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['customFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['custom_field']):
?>
	<div class="stylesHeading">
		<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['custom_field']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</h2>
	</div>			
	<a class="paneToolTextItem paneToolTextItemUpdate autoUpdateItem" data-if-empty-val="<?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['None'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-test-value="data-custom-field-<?php echo $this->_tpl_vars['custom_field']['id']; ?>
" 
		data-update-url="calendarActions.php?calendarAction=changeCustomFieldValue&amp;id=<?php echo $this->_tpl_vars['custom_field']['id']; ?>
"
		data-dialogue-title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Event_Custom_Title'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<FIELD>", $this->_tpl_vars['custom_field']['name']) : smarty_modifier_replace($_tmp, "<FIELD>", $this->_tpl_vars['custom_field']['name'])))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
		data-dialogue-info="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Change_Event_Custom_Info'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<FIELD>", $this->_tpl_vars['custom_field']['name']) : smarty_modifier_replace($_tmp, "<FIELD>", $this->_tpl_vars['custom_field']['name'])))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"
		data-items="#calendarEventsPaneInner .eventItem"
	></a>
	
<?php endforeach; endif; unset($_from); ?>