<?php /* Smarty version 2.6.18, created on 2017-07-18 22:50:14
         compiled from includes/meta_titles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'explode', 'includes/meta_titles.tpl', 1, false),array('modifier', 'strip_tags_exclude', 'includes/meta_titles.tpl', 1, false),)), $this); ?>
<?php $this->assign('h1', ((is_array($_tmp=((is_array($_tmp="<h1")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['content']['content']) : explode($_tmp, $this->_tpl_vars['content']['content'])))) ? $this->_run_mod_handler('strip_tags_exclude', true, $_tmp, "<h1>") : smarty_modifier_strip_tags_exclude($_tmp, "<h1>"))); ?>
<?php $this->assign('h1', ((is_array($_tmp=">")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['h1'][1]) : explode($_tmp, $this->_tpl_vars['h1'][1]))); ?>
<?php $this->assign('h1', ((is_array($_tmp="</h1")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['h1'][1]) : explode($_tmp, $this->_tpl_vars['h1'][1]))); ?>
<?php $this->assign('h1', $this->_tpl_vars['h1'][0]); ?>
<?php $this->assign('h2', ((is_array($_tmp=((is_array($_tmp="<h2")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['content']['content']) : explode($_tmp, $this->_tpl_vars['content']['content'])))) ? $this->_run_mod_handler('strip_tags_exclude', true, $_tmp, "<h2>") : smarty_modifier_strip_tags_exclude($_tmp, "<h2>"))); ?>
<?php $this->assign('h2', ((is_array($_tmp=">")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['h2'][1]) : explode($_tmp, $this->_tpl_vars['h2'][1]))); ?>
<?php $this->assign('h2', ((is_array($_tmp="</h2")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['h2'][1]) : explode($_tmp, $this->_tpl_vars['h2'][1]))); ?>
<?php $this->assign('h2', $this->_tpl_vars['h2'][0]); ?>
<?php $this->assign('p', ((is_array($_tmp=((is_array($_tmp="<p")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['content']['content']) : explode($_tmp, $this->_tpl_vars['content']['content'])))) ? $this->_run_mod_handler('strip_tags_exclude', true, $_tmp, "<p>") : smarty_modifier_strip_tags_exclude($_tmp, "<p>"))); ?>
<?php $this->assign('p', ((is_array($_tmp=">")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['p'][1]) : explode($_tmp, $this->_tpl_vars['p'][1]))); ?>
<?php $this->assign('p', ((is_array($_tmp="</p")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['p'][1]) : explode($_tmp, $this->_tpl_vars['p'][1]))); ?>
<?php $this->assign('p', $this->_tpl_vars['p'][0]); ?>
<?php $this->assign('li', ((is_array($_tmp=((is_array($_tmp="<li")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['content']['content']) : explode($_tmp, $this->_tpl_vars['content']['content'])))) ? $this->_run_mod_handler('strip_tags_exclude', true, $_tmp, "<li>") : smarty_modifier_strip_tags_exclude($_tmp, "<li>"))); ?>
<?php $this->assign('li', ((is_array($_tmp=">")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['li'][1]) : explode($_tmp, $this->_tpl_vars['li'][1]))); ?>
<?php $this->assign('li', ((is_array($_tmp="</li")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['li'][1]) : explode($_tmp, $this->_tpl_vars['li'][1]))); ?>
<?php $this->assign('li', $this->_tpl_vars['li'][0]); ?>
<?php $this->assign('img', ((is_array($_tmp=((is_array($_tmp="img src=\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['content']['content']) : explode($_tmp, $this->_tpl_vars['content']['content'])))) ? $this->_run_mod_handler('strip_tags_exclude', true, $_tmp, "<img>") : smarty_modifier_strip_tags_exclude($_tmp, "<img>"))); ?>
<?php $this->assign('img', ((is_array($_tmp="\"")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['img'][1]) : explode($_tmp, $this->_tpl_vars['img'][1]))); ?>
<?php $this->assign('img', $this->_tpl_vars['img'][0]); ?>
<title><?php if ($this->_tpl_vars['content']['longtitle'] != "" && $this->_tpl_vars['content']['longtitle'] != $this->_tpl_vars['content']['title']): ?><?php echo $this->_tpl_vars['content']['longtitle']; ?>
<?php else: ?><?php if ($this->_tpl_vars['h1'] == ""): ?><?php echo $this->_tpl_vars['h2']; ?>
<?php else: ?><?php echo $this->_tpl_vars['h1']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['h1'] != "" || $this->_tpl_vars['h2'] != ""): ?> - <?php endif; ?><?php echo $this->_tpl_vars['metatitleappend']; ?>
<?php endif; ?></title>
	<meta name="description" content="<?php if ($this->_tpl_vars['content']['description'] != ""): ?><?php echo $this->_tpl_vars['content']['description']; ?>
<?php else: ?><?php echo $this->_tpl_vars['h1']; ?>
<?php if ($this->_tpl_vars['h2'] != ""): ?> - <?php echo $this->_tpl_vars['h2']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['h2'] == ""): ?> - <?php echo $this->_tpl_vars['p']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['p'] == ""): ?> - <?php echo $this->_tpl_vars['li']; ?>
<?php endif; ?><?php endif; ?>"/>