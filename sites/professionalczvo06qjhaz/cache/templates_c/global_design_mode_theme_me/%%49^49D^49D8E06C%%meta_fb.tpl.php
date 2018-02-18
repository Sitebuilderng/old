<?php /* Smarty version 2.6.18, created on 2017-07-23 10:09:33
         compiled from includes/meta_fb.tpl */ ?>
<meta property="og:title" content="<?php if ($this->_tpl_vars['h1'] == ""): ?><?php echo $this->_tpl_vars['h2']; ?>
<?php else: ?><?php echo $this->_tpl_vars['h1']; ?>
<?php endif; ?>" />
	<meta property="og:type" content="article" />
	<?php if ($this->_tpl_vars['content']['imgUrl'] != ""): ?><meta property="og:image" content="<?php echo $this->_tpl_vars['siteurl']; ?>
<?php echo $this->_tpl_vars['content']['imgUrl']; ?>
" />
	<?php else: ?><meta property="og:image" content="<?php echo $this->_tpl_vars['img']; ?>
" /><?php endif; ?>
	<meta property="og:description" content="<?php if ($this->_tpl_vars['content']['description'] != ""): ?><?php echo $this->_tpl_vars['content']['description']; ?>
<?php else: ?><?php echo $this->_tpl_vars['h1']; ?>
<?php if ($this->_tpl_vars['h2'] != ""): ?> - <?php echo $this->_tpl_vars['h2']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['h2'] == ""): ?> - <?php echo $this->_tpl_vars['p']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['p'] == ""): ?> - <?php echo $this->_tpl_vars['li']; ?>
<?php endif; ?><?php endif; ?>" />
	<meta property="og:site_name" content="<?php echo $this->_tpl_vars['sitetitle']; ?>
"/>