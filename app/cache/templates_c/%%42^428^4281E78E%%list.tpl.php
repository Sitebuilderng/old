<?php /* Smarty version 2.6.18, created on 2017-07-29 06:13:54
         compiled from admin/views/tables/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'admin/views/tables/list.tpl', 8, false),)), $this); ?>
<?php if (! $this->_tpl_vars['ajax'] || $this->_tpl_vars['searching']): ?>
<div class="dropzone"><div></div></div>
<?php endif; ?>
<?php if (! $this->_tpl_vars['ajax'] || $this->_tpl_vars['searching']): ?>
<div class="noPages" <?php if ($this->_tpl_vars['tables']): ?>style="display:none"<?php endif; ?>><?php echo $this->_tpl_vars['SetSeedLangs']['No_Tables']; ?>
</div>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['tables']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
	<div class="tableItem responsiveListItem dropship_component_item" id="<?php echo $this->_tpl_vars['item']['id']; ?>
" alt="<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-table-header="<?php echo $this->_tpl_vars['item']['headers']; ?>
" table-id="<?php echo $this->_tpl_vars['item']['id']; ?>
" data-csv="<?php echo htmlspecialchars($this->_tpl_vars['item']['csv']); ?>
">
		<span class="overflowEllipsis" title="<?php echo htmlspecialchars($this->_tpl_vars['item']['name']); ?>
"><?php echo htmlspecialchars($this->_tpl_vars['item']['name']); ?>
</span>
	</div>
<div class="dropzone"><div></div></div>
<?php endforeach; endif; unset($_from); ?>
<?php if (! $this->_tpl_vars['ajax'] || $this->_tpl_vars['searching']): ?>
<div class="clear insertNewItemsBefore"></div>
<a href="50" class="showMoreItems">Show more tables</a>
<?php endif; ?>