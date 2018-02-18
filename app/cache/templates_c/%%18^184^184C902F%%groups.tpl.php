<?php /* Smarty version 2.6.18, created on 2017-07-24 20:09:40
         compiled from admin/views/newsletter/groups.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'admin/views/newsletter/groups.tpl', 7, false),)), $this); ?>

<span class="noPages" <?php if ($this->_tpl_vars['emailGroups']): ?>style='display:none'<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['No_Mailing_Lists'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
<?php if ($this->_tpl_vars['emailGroups']): ?>
<div class="dropzone"><div></div></div>
<?php $_from = $this->_tpl_vars['emailGroups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['calCat']):
        $this->_foreach['loop1']['iteration']++;
?>
	<div class="responsiveListItem dropship_component_item mailingListItem" group-id="<?php echo $this->_tpl_vars['calCat']['id']; ?>
" title="<?php echo htmlspecialchars($this->_tpl_vars['calCat']['name']); ?>
" data-autoresponder-id="<?php echo $this->_tpl_vars['calCat']['autoresponder_id']; ?>
" data-autoresponder-title="<?php echo $this->_tpl_vars['calCat']['autoresponder_page_title']; ?>
" data-autoresponder-subject="<?php echo $this->_tpl_vars['calCat']['autoresponder_subject']; ?>
">
		<span class="responsiveListItemInfo totalRecipients"><?php echo $this->_tpl_vars['calCat']['subscribersCount']; ?>
</span>
		<span class="overflowEllipsis" id="<?php echo $this->_tpl_vars['calCat']['id']; ?>
"><?php echo htmlspecialchars($this->_tpl_vars['calCat']['name']); ?>
</span>
		<?php $_from = $this->_tpl_vars['calCat']['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cat']):
?> 
			<input type="hidden" id="groupcat" class="groupcat" data-id="<?php echo $this->_tpl_vars['cat']['id']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['cat']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"/>
		<?php endforeach; endif; unset($_from); ?>
	</div>
	<form action="newsletterActions.php" method="post" class="menu_with_options menuForm renameForm" style="display:none">
		<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['calCat']['id']; ?>
"/>
		<input type="hidden" name="newsletterAction" value="renameGroup"/>
		<input type="text" name="name" value=" Enter a title, then hit return" class="pageMenuInput greyedOut focus"/>
	</form>
	<div class="dropzone"><div></div></div>
<?php endforeach; endif; unset($_from); ?>


<?php else: ?>
<?php endif; ?>