<?php /* Smarty version 2.6.18, created on 2017-07-20 06:18:19
         compiled from components/sitemap.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'components/sitemap.tpl', 4, false),)), $this); ?>
<ul>
<?php $_from = $this->_tpl_vars['sitemapPages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
	<li><a href="<?php if ($this->_tpl_vars['item']['homepage'] == 'yes'): ?>/<?php else: ?>/<?php echo $this->_tpl_vars['item']['url']; ?>
/<?php endif; ?>"><?php echo $this->_tpl_vars['item']['title']; ?>
</a>
		<?php if (count($this->_tpl_vars['item']['subs']) > 0): ?>
			<ul>
			<?php $_from = $this->_tpl_vars['item']['subs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['sub']):
        $this->_foreach['loop2']['iteration']++;
?>
				<li><a href="/<?php echo $this->_tpl_vars['sub']['parentUrl']; ?>
/<?php echo $this->_tpl_vars['sub']['url']; ?>
/"><?php echo $this->_tpl_vars['sub']['pagetitle']; ?>
</a>
					<?php if ($this->_tpl_vars['sub']['blog'] == 'yes'): ?>
						<ul>
						<?php $_from = $this->_tpl_vars['blogPagesSitemap']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['blogPage']):
        $this->_foreach['loop1']['iteration']++;
?>
						<li><a href="/<?php echo $this->_tpl_vars['item']['url']; ?>
/<?php echo $this->_tpl_vars['blogPage']['url']; ?>
/"><?php echo $this->_tpl_vars['blogPage']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
						</ul>
					<?php endif; ?>
					<?php if (count($this->_tpl_vars['sub']['subSubs']) > 0): ?>
						<ul>
							<?php $_from = $this->_tpl_vars['sub']['subSubs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subSub']):
?>
								<li><a href="/<?php echo $this->_tpl_vars['subSub']['topParentUrl']; ?>
/<?php echo $this->_tpl_vars['subSub']['parentUrl']; ?>
/<?php echo $this->_tpl_vars['subSub']['url']; ?>
/"><?php echo $this->_tpl_vars['subSub']['pagetitle']; ?>
</a></li>
							<?php endforeach; endif; unset($_from); ?>
						</ul>
					<?php endif; ?>
				</li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
		<?php endif; ?>	
		<?php if ($this->_tpl_vars['item']['blog'] == 'yes' && count($this->_tpl_vars['item']['subs']) <= 0): ?>
			<ul>
			<?php $_from = $this->_tpl_vars['blogPagesSitemap']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['blogPage']):
        $this->_foreach['loop1']['iteration']++;
?>
			<li><a href="/<?php echo $this->_tpl_vars['item']['url']; ?>
/<?php echo $this->_tpl_vars['blogPage']['url']; ?>
/"><?php echo $this->_tpl_vars['blogPage']['title']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
		<?php endif; ?>
	</li>
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['nonLinkers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
	<li><a href="<?php if ($this->_tpl_vars['item']['homepage'] == 'yes'): ?>/<?php else: ?>/<?php echo $this->_tpl_vars['item']['url']; ?>
/<?php endif; ?>"><?php echo $this->_tpl_vars['item']['title']; ?>
</a>
		<?php if ($this->_tpl_vars['item']['blog'] == 'yes'): ?>
			<ul>
			<?php $_from = $this->_tpl_vars['blogPagesSitemap']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['blogPage']):
        $this->_foreach['loop1']['iteration']++;
?>
			<li><a href="/<?php echo $this->_tpl_vars['item']['url']; ?>
/<?php echo $this->_tpl_vars['blogPage']['url']; ?>
/"><?php echo $this->_tpl_vars['blogPage']['title']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
		<?php endif; ?>
	</li>
<?php endforeach; endif; unset($_from); ?>
</ul>