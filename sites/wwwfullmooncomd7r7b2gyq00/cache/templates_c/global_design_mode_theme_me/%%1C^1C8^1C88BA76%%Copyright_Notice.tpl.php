<?php /* Smarty version 2.6.18, created on 2017-07-23 11:00:22
         compiled from widgets/Copyright_Notice.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'widgets/Copyright_Notice.tpl', 1, false),array('modifier', 'strip_tags', 'widgets/Copyright_Notice.tpl', 1, false),)), $this); ?>
<p class="copyright_notice">&copy; <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['editable']['company_name'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</p>