<?php /* Smarty version 2.6.18, created on 2017-07-30 23:59:13
         compiled from nav/side-bar-sub-menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'nav/side-bar-sub-menu.tpl', 2, false),)), $this); ?>
<?php if (count($this->_tpl_vars['staticSubs']) > 0): ?>
	<nav id="sidebarNav">
		<div id="sidebarInner">
				<?php $_from = $this->_tpl_vars['mainNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
		<?php if ($this->_tpl_vars['item']['url'] == $this->_tpl_vars['content']['url']): ?>
		<h4 class="current"><a href="/<?php echo $this->_tpl_vars['item']['url']; ?>
/"><strong><?php echo $this->_tpl_vars['item']['title']; ?>
</strong></a></h4>
		<?php elseif ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['content']['parent'] || $this->_tpl_vars['item']['id'] == $this->_tpl_vars['content']['topParent']): ?>
		<h4><a href="/<?php echo $this->_tpl_vars['item']['url']; ?>
/"><strong><?php echo $this->_tpl_vars['item']['title']; ?>
</strong></a></h4>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		

		<ul>
		<?php $_from = $this->_tpl_vars['staticSubs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['sub']):
        $this->_foreach['loop2']['iteration']++;
?>
		<?php echo '<li class="'; ?><?php if ($this->_tpl_vars['content']['parent'] == $this->_tpl_vars['sub']['subSubs'][0]['parent'] && $this->_tpl_vars['content']['type'] != 'topLevel'): ?><?php echo 'currentParent'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['sub']['url'] == $this->_tpl_vars['content']['url']): ?><?php echo ' current'; ?><?php endif; ?><?php echo ''; ?><?php if (($this->_foreach['loop2']['iteration'] == $this->_foreach['loop2']['total'])): ?><?php echo ' last'; ?><?php endif; ?><?php echo '"><a href="/'; ?><?php echo $this->_tpl_vars['sub']['parentUrl']; ?><?php echo '/'; ?><?php echo $this->_tpl_vars['sub']['url']; ?><?php echo '/">'; ?><?php echo $this->_tpl_vars['sub']['pagetitle']; ?><?php echo '</a>'; ?><?php if ($this->_tpl_vars['content']['id'] == $this->_tpl_vars['sub']['subSubs'][0]['parent'] || $this->_tpl_vars['content']['parent'] == $this->_tpl_vars['sub']['subSubs'][0]['parent'] || $this->_tpl_vars['content']['subParent'] == $this->_tpl_vars['sub']['subSubs'][0]['parent']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['theme_vars_sidebar_menu'] == '2level' || $this->_tpl_vars['theme_vars_sidebar_menu'] == '3level'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "nav/third-level-menu.tpl", 'smarty_include_vars' => array('subSubs' => $this->_tpl_vars['sub']['subSubs'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</li>'; ?>

		<?php endforeach; endif; unset($_from); ?>
		</ul>
		</div>
</nav>
<?php endif; ?> 