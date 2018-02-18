<?php /* Smarty version 2.6.18, created on 2017-07-26 09:23:59
         compiled from nav/nav.tpl */ ?>
<nav id="nav" role="navigation" class="clearfix">
	<div class="container">
		<a href="#nav" title="Show navigation" class="navToggle show">+</a>
    	<a href="#" title="Hide navigation" class="navToggle hide">-</a>
    	<?php if ($this->_tpl_vars['loggedIn'] || $this->_tpl_vars['content']['languages_in_use'] || $this->_tpl_vars['theme_vars_contactbar']): ?>
    	<a href="#topbar" title="Show Contact Bar" class="contactBarToggle show">+</a>
    	<a href="#" title="Hide Contact Bar" class="contactBarToggle hide">-</a>
    	<?php endif; ?>
		<?php if ($this->_tpl_vars['theme_vars_logo']): ?>
		<div id="logo" class="size_<?php echo $this->_tpl_vars['theme_vars_logo_size']; ?>
"><a href="/"><img src="/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_logo']; ?>
" /></a></div>
		<?php else: ?>
		<div id="textLogo" class="text_logo_size_<?php echo $this->_tpl_vars['theme_vars_logo_size']; ?>
">	
			<p><a href="/"><?php echo $this->_tpl_vars['theme_vars_logo_text']; ?>
</a></p>
		</div>
		<?php endif; ?>
	    <div id="expandNav" class="size_<?php echo $this->_tpl_vars['theme_vars_main_menu_size']; ?>
 with_logo_size_<?php echo $this->_tpl_vars['theme_vars_logo_size']; ?>
">
			<ul>
				<?php $_from = $this->_tpl_vars['mainNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
				<?php if ($this->_tpl_vars['item']['url'] == $this->_tpl_vars['content']['url'] || $this->_tpl_vars['item']['id'] == $this->_tpl_vars['content']['parent'] || $this->_tpl_vars['item']['id'] == $this->_tpl_vars['content']['topParent']): ?>
				<li class="current"><a href="<?php if ($this->_tpl_vars['item']['homepage'] == 'yes'): ?>/<?php else: ?>/<?php echo $this->_tpl_vars['item']['url']; ?>
/<?php endif; ?>" title="<?php echo $this->_tpl_vars['item']['title']; ?>
"><?php if ($this->_tpl_vars['item']['subs']): ?><span><?php endif; ?><?php echo $this->_tpl_vars['item']['title']; ?>
<?php if ($this->_tpl_vars['item']['subs']): ?></span><?php endif; ?></a><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "nav/drop-down-menu.tpl", 'smarty_include_vars' => array('subs' => $this->_tpl_vars['item']['subs'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></li>
				<?php $this->assign('current', 'true'); ?>
				<?php else: ?>
				<li><a href="<?php if ($this->_tpl_vars['item']['homepage'] == 'yes'): ?>/<?php else: ?>/<?php echo $this->_tpl_vars['item']['url']; ?>
/<?php endif; ?>" title="<?php echo $this->_tpl_vars['item']['title']; ?>
"><?php if ($this->_tpl_vars['item']['subs']): ?><span><?php endif; ?><?php echo $this->_tpl_vars['item']['title']; ?>
<?php if ($this->_tpl_vars['item']['subs']): ?></span><?php endif; ?></a><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "nav/drop-down-menu.tpl", 'smarty_include_vars' => array('subs' => $this->_tpl_vars['item']['subs'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></li>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?> 
				<li>
					<form action="/actions/SearchForward/" method="post" id="searchFormSmall">
						<fieldset class="focusSwapWrap">
						<input type="hidden" name="language" value="<?php echo $this->_tpl_vars['content']['language']; ?>
"/>
						<label for="navSearch" class="focusSwapLabel"><?php echo $this->_tpl_vars['langs']['Search']; ?>
</label>
						<input id="navSearch" type="text" name="string" value="" />
						</fieldset>
					</form>
				</li>
			</ul>
		</div>
	</div>
</nav>