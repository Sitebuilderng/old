<?php /* Smarty version 2.6.18, created on 2017-07-23 10:14:28
         compiled from nav/drop-down-menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'nav/drop-down-menu.tpl', 2, false),)), $this); ?>
<?php if (count($this->_tpl_vars['subs']) > 0): ?>
	<ul>
	<?php $_from = $this->_tpl_vars['subs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['sub']):
        $this->_foreach['loop2']['iteration']++;
?>
		<li><a href="/<?php echo $this->_tpl_vars['sub']['parentUrl']; ?>
/<?php echo $this->_tpl_vars['sub']['url']; ?>
/" <?php if ($this->_tpl_vars['sub']['newWindow']): ?>target="_blank"<?php endif; ?>><?php echo $this->_tpl_vars['sub']['pagetitle']; ?>
</a>
			<?php if (count($this->_tpl_vars['sub']['subSubs']) > 0): ?>
				<ul>
				<?php $_from = $this->_tpl_vars['sub']['subSubs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop3'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop3']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['subSub']):
        $this->_foreach['loop3']['iteration']++;
?>
					<li class="<?php if ($this->_tpl_vars['subSub']['id'] == $this->_tpl_vars['content']['id']): ?>currentSubSub<?php endif; ?> <?php if ($this->_foreach['loop3']['iteration'] == '1'): ?>firstSubSub<?php endif; ?>"><a href="/<?php echo $this->_tpl_vars['subSub']['topParentUrl']; ?>
/<?php echo $this->_tpl_vars['subSub']['parentUrl']; ?>
/<?php echo $this->_tpl_vars['subSub']['url']; ?>
/" <?php if ($this->_tpl_vars['subSub']['newWindow']): ?>target="_blank"<?php endif; ?>><?php echo $this->_tpl_vars['subSub']['pagetitle']; ?>
</a>
					</li>
				<?php endforeach; endif; unset($_from); ?>
				</ul>
			<?php endif; ?>
		</li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
<?php endif; ?> 