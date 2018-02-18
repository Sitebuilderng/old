<?php /* Smarty version 2.6.18, created on 2017-07-20 05:10:28
         compiled from includes/meta_twitter.tpl */ ?>
<meta name="twitter:title" content="<?php if ($this->_tpl_vars['h1'] == ""): ?><?php echo $this->_tpl_vars['h2']; ?>
<?php else: ?><?php echo $this->_tpl_vars['h1']; ?>
<?php endif; ?>" />
	<meta name="twitter:description" content="<?php if ($this->_tpl_vars['content']['description'] != ""): ?><?php echo $this->_tpl_vars['content']['description']; ?>
<?php else: ?><?php echo $this->_tpl_vars['h1']; ?>
<?php if ($this->_tpl_vars['h2'] != ""): ?> - <?php echo $this->_tpl_vars['h2']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['h2'] == ""): ?> - <?php echo $this->_tpl_vars['p']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['p'] == ""): ?> - <?php echo $this->_tpl_vars['li']; ?>
<?php endif; ?><?php endif; ?>" />
	<?php if ($this->_tpl_vars['content']['imgUrl'] != ""): ?><meta name="twitter:image" content="<?php echo $this->_tpl_vars['siteurl']; ?>
<?php echo $this->_tpl_vars['content']['imgUrl']; ?>
" />
	<?php else: ?><meta name="twitter:image" content="<?php echo $this->_tpl_vars['img']; ?>
" /><?php endif; ?>