<?php /* Smarty version 2.6.18, created on 2017-07-22 02:42:41
         compiled from widgets/Recent_Blog_Articles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'explode', 'widgets/Recent_Blog_Articles.tpl', 13, false),array('modifier', 'strip_tags', 'widgets/Recent_Blog_Articles.tpl', 13, false),array('modifier', 'truncate', 'widgets/Recent_Blog_Articles.tpl', 15, false),array('modifier', 'date_format', 'widgets/Recent_Blog_Articles.tpl', 18, false),)), $this); ?>
<?php if (! $this->_tpl_vars['theme_vars_recent_blog_articles']): ?>
<?php $this->assign('theme_vars_recent_blog_articles', 3); ?>
<?php endif; ?>
<ul class="recent_blog_articles">
<?php $_from = $this->_tpl_vars['content']['recentArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
<?php if ($this->_foreach['loop1']['iteration'] <= $this->_tpl_vars['theme_vars_recent_blog_articles']): ?>
<li class="clearfix <?php if ($this->_tpl_vars['item']['picUrl']): ?>withThumb<?php endif; ?>">
	<?php if ($this->_tpl_vars['item']['picUrl']): ?>
	<div class="blog_article_thumb"><a href="/<?php echo $this->_tpl_vars['content']['blogUrl']; ?>
/<?php echo $this->_tpl_vars['item']['url']; ?>
/"><img src="<?php echo $this->_tpl_vars['item']['picUrl']; ?>
?width=100&height=80&shrink=false" /></a></div>
	<?php endif; ?>
	<p><a href="/<?php echo $this->_tpl_vars['content']['blogUrl']; ?>
/<?php echo $this->_tpl_vars['item']['url']; ?>
/"><?php echo $this->_tpl_vars['item']['title']; ?>
</a><br/>
		<?php if ($this->_tpl_vars['theme_vars_show_blog_recart_intro']): ?>
		<?php $this->assign('temp1', ((is_array($_tmp=((is_array($_tmp="<p")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['item']['content']) : explode($_tmp, $this->_tpl_vars['item']['content'])))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp))); ?>
		<?php $this->assign('temp', ((is_array($_tmp=">")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['temp1'][1]) : explode($_tmp, $this->_tpl_vars['temp1'][1]))); ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['temp'][1])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100, "&hellip;") : smarty_modifier_truncate($_tmp, 100, "&hellip;")); ?>

		<?php endif; ?>
		
		<span class="blog_date"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B %e %Y") : smarty_modifier_date_format($_tmp, "%B %e %Y")); ?>
</span></p>
	<?php endif; ?>
</li>
<?php endforeach; endif; unset($_from); ?>
</ul>