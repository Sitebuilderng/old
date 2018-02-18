<?php /* Smarty version 2.6.18, created on 2017-08-03 05:12:02
         compiled from includes/search-results.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'includes/search-results.tpl', 3, false),array('modifier', 'replace', 'includes/search-results.tpl', 4, false),array('modifier', 'truncate', 'includes/search-results.tpl', 16, false),array('function', 'math', 'includes/search-results.tpl', 25, false),)), $this); ?>
<?php if ($this->_tpl_vars['search_all']): ?>
<?php if (count($this->_tpl_vars['search_results']) == 0): ?>
<p class="status"><?php echo ((is_array($_tmp=$this->_tpl_vars['langs']['Search_No_Results'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<SEARCH_TERM>", $this->_tpl_vars['searching_by']) : smarty_modifier_replace($_tmp, "<SEARCH_TERM>", $this->_tpl_vars['searching_by'])); ?>
</p>
<?php endif; ?>
<?php if (count($this->_tpl_vars['search_results']) != 0): ?>
<p class="status"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['langs']['Search_Total_Results'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<SEARCH_TERM>", $this->_tpl_vars['searching_by']) : smarty_modifier_replace($_tmp, "<SEARCH_TERM>", $this->_tpl_vars['searching_by'])))) ? $this->_run_mod_handler('replace', true, $_tmp, "<TOTAL_RESULTS>", $this->_tpl_vars['totalResults']) : smarty_modifier_replace($_tmp, "<TOTAL_RESULTS>", $this->_tpl_vars['totalResults'])); ?>
</p>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['search_results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['search_result']):
        $this->_foreach['loop']['iteration']++;
?>
	<?php if ($this->_tpl_vars['search_result']['homepage'] == 'yes'): ?>
	<h2 style="font-weight:normal;"><a href="/"><?php echo $this->_tpl_vars['search_result']['title']; ?>
</a></h2>
	<?php else: ?>
	<h2 style="font-weight:normal;"><a href="/<?php echo $this->_tpl_vars['search_result']['url']; ?>
"><?php echo $this->_tpl_vars['search_result']['title']; ?>
</a></h2>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['search_result']['content'] != ""): ?>
	<p class="nest"><?php echo ((is_array($_tmp=$this->_tpl_vars['search_result']['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 300) : smarty_modifier_truncate($_tmp, 300)); ?>
</p>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
	<?php if ($this->_tpl_vars['totalPages'] > 1): ?>
		
			<h5 id="paginate"><?php if ($this->_tpl_vars['currentPage'] == 1): ?>
				<span class="prevLink hidden"><?php echo $this->_tpl_vars['langs']['Previous_Page']; ?>
</span>

			<?php else: ?>
			<span class="prevLink"><a href="/search/<?php echo $this->_tpl_vars['searching_by']; ?>
/page/<?php echo smarty_function_math(array('equation' => "x - y",'x' => $this->_tpl_vars['currentPage'],'y' => 1), $this);?>
/"><span><?php echo $this->_tpl_vars['langs']['Previous_Page']; ?>
</span></a></span>
			<?php endif; ?> 
			<?php if ($this->_tpl_vars['currentPage'] == $this->_tpl_vars['totalPages']): ?>
			<span class="nextLink hidden"><?php echo $this->_tpl_vars['langs']['Next_Page']; ?>
</span>
			<?php else: ?>
			<span class="nextLink"><a href="/search/<?php echo $this->_tpl_vars['searching_by']; ?>
/page/<?php echo smarty_function_math(array('equation' => "x + y",'x' => $this->_tpl_vars['currentPage'],'y' => 1), $this);?>
/"><span><?php echo $this->_tpl_vars['langs']['Next_Page']; ?>
</span></a></span> 

			<?php endif; ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['langs']['Viewing_Page_X_of_X'])) ? $this->_run_mod_handler('replace', true, $_tmp, "<CURRENT_PAGE>", $this->_tpl_vars['currentPage']) : smarty_modifier_replace($_tmp, "<CURRENT_PAGE>", $this->_tpl_vars['currentPage'])))) ? $this->_run_mod_handler('replace', true, $_tmp, "<TOTAL_PAGES>", $this->_tpl_vars['totalPages']) : smarty_modifier_replace($_tmp, "<TOTAL_PAGES>", $this->_tpl_vars['totalPages'])); ?>

			
		
			</h5>
	<?php endif; ?>
<?php endif; ?>