<?php /* Smarty version 2.6.18, created on 2017-07-20 05:27:39
         compiled from modules/nav.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'modules/nav.tpl', 18, false),array('modifier', 'replace', 'modules/nav.tpl', 27, false),)), $this); ?>
<div class="module <?php if (! $this->_tpl_vars['skipclearfix']): ?>clearfix<?php endif; ?> nav <?php if ($this->_tpl_vars['logo']): ?>logo-<?php echo $this->_tpl_vars['logo']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['search']): ?>search-<?php echo $this->_tpl_vars['search']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['basket']): ?>basket-<?php echo $this->_tpl_vars['basket']; ?>
<?php endif; ?>  <?php if ($this->_tpl_vars['align']): ?>align-<?php echo $this->_tpl_vars['align']; ?>
<?php endif; ?> <?php if (! $this->_tpl_vars['width']): ?><?php if ($this->_tpl_vars['valign']): ?>valign-<?php echo $this->_tpl_vars['valign']; ?>
<?php if ($this->_tpl_vars['valign']): ?> valign<?php endif; ?><?php endif; ?><?php endif; ?> <?php if ($this->_tpl_vars['clear']): ?>clear-<?php echo $this->_tpl_vars['clear']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['style']): ?>style-<?php echo $this->_tpl_vars['style']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['width']): ?>width width-<?php echo $this->_tpl_vars['width']; ?>
 width-valign-<?php echo $this->_tpl_vars['valign']; ?>
<?php endif; ?>">
	<ul class="flexibreak-container contains-text <?php if (! $this->_tpl_vars['skipclearfix']): ?>clearfix<?php endif; ?>">
		<?php if ($this->_tpl_vars['logo'] == 'first'): ?>
		<li id="nav-logo"><a href=""><img src="/graphics/logo.png"></a></li>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['search'] == 'first'): ?>
		<li id="nav-search" class="nav-search nav-search-first nav-search-style-<?php echo $this->_tpl_vars['search_style']; ?>
">
			<a href="#"><?php if ($this->_tpl_vars['search_style'] != 'icon'): ?><?php echo $this->_tpl_vars['langs']['Search']; ?>
<?php endif; ?></a>
		</li>
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['basket'] == 'first'): ?>
		<li id="nav-basket"><a href="/<?php echo $this->_tpl_vars['content']['basket_link']; ?>
"><?php echo $this->_tpl_vars['langs']['Checkout']; ?>
</a></li>
		<?php endif; ?>
		
		
		<?php $this->assign('half', count($this->_tpl_vars['mainNav'])); ?>
		<?php $this->assign('half', $this->_tpl_vars['half']/2); ?>
		<?php $_from = $this->_tpl_vars['mainNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>

		<?php if (( $this->_tpl_vars['split'] == 'left' && $this->_foreach['loop1']['iteration'] <= $this->_tpl_vars['half'] ) || ( $this->_tpl_vars['split'] == 'right' && $this->_foreach['loop1']['iteration'] > $this->_tpl_vars['half'] ) || ( ! $this->_tpl_vars['split'] || $this->_tpl_vars['split'] == "" )): ?>
		
		<li class="<?php if ($this->_tpl_vars['item']['url'] == $this->_tpl_vars['content']['url'] || $this->_tpl_vars['item']['id'] == $this->_tpl_vars['content']['parent'] || $this->_tpl_vars['item']['id'] == $this->_tpl_vars['content']['topParent']): ?>current<?php $this->assign('current', 'true'); ?><?php endif; ?> <?php if ($this->_tpl_vars['item']['subs']): ?>has-subs<?php endif; ?> <?php if ($this->_foreach['loop1']['iteration'] > $this->_tpl_vars['half']): ?>second-half<?php endif; ?> <?php if ($this->_tpl_vars['theme_vars_enabled_page_preview_dropdown'] && $this->_tpl_vars['item']['page_preview'] != ""): ?>show-preview<?php endif; ?>" data-page-id="<?php echo $this->_tpl_vars['item']['id']; ?>
"><a href="<?php if ($this->_tpl_vars['item']['homepage'] == 'yes'): ?>/<?php else: ?>/<?php echo $this->_tpl_vars['item']['url']; ?>
/<?php endif; ?>" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'Media Page', 'Media') : smarty_modifier_replace($_tmp, 'Media Page', 'Media')); ?>
" <?php if ($this->_tpl_vars['item']['newWindow']): ?>target="_blank"<?php endif; ?>><?php if ($this->_tpl_vars['item']['subs']): ?><span><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'Media Page', 'Media') : smarty_modifier_replace($_tmp, 'Media Page', 'Media')); ?>
<?php if ($this->_tpl_vars['item']['subs']): ?></span><?php endif; ?></a>
			<?php if (! $this->_tpl_vars['theme_vars_enabled_page_preview_dropdown']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "nav/drop-down-menu.tpl", 'smarty_include_vars' => array('subs' => $this->_tpl_vars['item']['subs'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></li>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>

		<?php if ($this->_tpl_vars['basket'] == 'last'): ?>
		<li id="nav-basket"><a href="/<?php echo $this->_tpl_vars['content']['basket_link']; ?>
"><?php echo $this->_tpl_vars['langs']['Checkout']; ?>
</a></li>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['search'] == 'last'): ?>
		<li id="nav-search" class="nav-search nav-search-last nav-search-style-<?php echo $this->_tpl_vars['search_style']; ?>
 display-popdown-widget">
			<a data-target="search-form-popdown" href="#navSearch"><?php if ($this->_tpl_vars['search_style'] != 'icon'): ?><?php echo $this->_tpl_vars['langs']['Search']; ?>
<?php endif; ?></a>
		</li>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['logo'] == 'last'): ?>
		<li id="nav-logo"><a href=""><img src="/graphics/logo.png"></a></li>
		<?php endif; ?>
		
	</ul>
</div>

		
		<?php if ($this->_tpl_vars['theme_vars_enabled_page_preview_dropdown']): ?>
			<?php $_from = $this->_tpl_vars['mainNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>

			<?php if (( $this->_tpl_vars['split'] == 'left' && $this->_foreach['loop1']['iteration'] <= $this->_tpl_vars['half'] ) || ( $this->_tpl_vars['split'] == 'right' && $this->_foreach['loop1']['iteration'] > $this->_tpl_vars['half'] ) || ( ! $this->_tpl_vars['split'] || $this->_tpl_vars['split'] == "" )): ?>
		
				
				<?php if ($this->_tpl_vars['item']['page_preview']): ?>		
					<div class="page-preview" id="page-preview-id-<?php echo $this->_tpl_vars['item']['id']; ?>
">
						<div class="page-preview-inner">
							<?php echo $this->_tpl_vars['item']['page_preview']; ?>

						</div>
					</div>
				<?php endif; ?>
			

			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
