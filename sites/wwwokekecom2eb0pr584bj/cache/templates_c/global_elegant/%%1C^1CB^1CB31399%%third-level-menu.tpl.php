<?php /* Smarty version 2.6.18, created on 2017-07-30 23:59:13
         compiled from nav/third-level-menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'nav/third-level-menu.tpl', 2, false),)), $this); ?>
<?php if (count($this->_tpl_vars['subSubs']) > 0): ?>
	<ul>
	<?php $_from = $this->_tpl_vars['subSubs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop3'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop3']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['sub']):
        $this->_foreach['loop3']['iteration']++;
?>
		<li class="<?php if ($this->_tpl_vars['sub']['id'] == $this->_tpl_vars['content']['id']): ?>currentSubSub<?php endif; ?> <?php if ($this->_foreach['loop3']['iteration'] == '1'): ?>firstSubSub<?php endif; ?>"><a href="/<?php echo $this->_tpl_vars['sub']['topParentUrl']; ?>
/<?php echo $this->_tpl_vars['sub']['parentUrl']; ?>
/<?php echo $this->_tpl_vars['sub']['url']; ?>
/"><?php echo $this->_tpl_vars['sub']['pagetitle']; ?>
</a>
		
		<?php if ($this->_tpl_vars['content']['id'] == $this->_tpl_vars['sub']['id'] || $this->_tpl_vars['content']['parent'] == $this->_tpl_vars['sub']['id']): ?>
		<?php if ($this->_tpl_vars['theme_vars_sidebar_menu'] == '3level'): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "nav/fourth-level-menu.tpl", 'smarty_include_vars' => array('subSubSubs' => $this->_tpl_vars['sub']['subSubSubs'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		<?php endif; ?>
		</li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
<?php endif; ?> 