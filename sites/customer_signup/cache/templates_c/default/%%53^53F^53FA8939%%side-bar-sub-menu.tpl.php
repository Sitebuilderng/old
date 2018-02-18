<?php /* Smarty version 2.6.18, created on 2017-08-03 05:12:09
         compiled from nav/side-bar-sub-menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'nav/side-bar-sub-menu.tpl', 3, false),)), $this); ?>
<nav id="sidebarNav">
<?php if (count($this->_tpl_vars['staticSubs']) > 0): ?>

	
	<?php $_from = $this->_tpl_vars['mainNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
	<?php if ($this->_tpl_vars['item']['url'] == $this->_tpl_vars['content']['url'] && $this->_tpl_vars['item']['url'] == 'support'): ?>
	<div id="supportBannerLeft"><a href="/<?php echo $this->_tpl_vars['item']['url']; ?>
/">Back to <?php echo $this->_tpl_vars['item']['title']; ?>
 home</a></div>
	<?php elseif (( $this->_tpl_vars['item']['id'] == $this->_tpl_vars['content']['parent'] || $this->_tpl_vars['item']['id'] == $this->_tpl_vars['content']['topParent'] ) && $this->_tpl_vars['item']['url'] == 'support'): ?>
	<div id="supportBannerLeft"><a href="/<?php echo $this->_tpl_vars['item']['url']; ?>
/">Back to <?php echo $this->_tpl_vars['item']['title']; ?>
 home</a></div>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	

	<div class="kbItem kbItemLeft">
	<?php $_from = $this->_tpl_vars['staticSubs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['sub']):
        $this->_foreach['loop2']['iteration']++;
?>
	<?php if (( $this->_tpl_vars['content']['parent'] == $this->_tpl_vars['sub']['subSubs'][0]['parent'] && $this->_tpl_vars['content']['type'] != 'topLevel' ) || $this->_tpl_vars['sub']['url'] == $this->_tpl_vars['content']['url'] || ( $this->_tpl_vars['content']['id'] == $this->_tpl_vars['sub']['subSubs'][0]['parent'] || $this->_tpl_vars['content']['parent'] == $this->_tpl_vars['sub']['subSubs'][0]['parent'] || $this->_tpl_vars['content']['subParent'] == $this->_tpl_vars['sub']['subSubs'][0]['parent'] )): ?>
	<?php echo '<h3>'; ?><?php echo $this->_tpl_vars['sub']['pagetitle']; ?><?php echo '</h3>'; ?><?php if ($this->_tpl_vars['content']['id'] == $this->_tpl_vars['sub']['subSubs'][0]['parent'] || $this->_tpl_vars['content']['parent'] == $this->_tpl_vars['sub']['subSubs'][0]['parent'] || $this->_tpl_vars['content']['subParent'] == $this->_tpl_vars['sub']['subSubs'][0]['parent']): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "nav/third-level-menu.tpl", 'smarty_include_vars' => array('subSubs' => $this->_tpl_vars['sub']['subSubs'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo '</li>'; ?>

	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</div>

<?php endif; ?> 
</nav>