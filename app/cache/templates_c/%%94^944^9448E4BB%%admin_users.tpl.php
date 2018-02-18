<?php /* Smarty version 2.6.18, created on 2017-07-26 09:30:47
         compiled from views/admin/admin_users.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'views/admin/admin_users.tpl', 4, false),)), $this); ?>

<div class="dropzone"><div></div></div>
<?php $_from = $this->_tpl_vars['admin_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['adminUser']):
        $this->_foreach['loop1']['iteration']++;
?>
	<div class="responsiveListItem" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['adminUser']['username'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" staff-id="<?php echo $this->_tpl_vars['adminUser']['id']; ?>
" data-privs="<?php echo $this->_tpl_vars['adminUser']['privs']; ?>
" data-master="<?php echo $this->_tpl_vars['adminUser']['master']; ?>
" data-permission-groups="<?php echo $this->_tpl_vars['adminUser']['in_groups_csv']; ?>
">
		<?php if ($this->_tpl_vars['adminUser']['master']): ?><span class="responsiveListItemInfo"><?php echo $this->_tpl_vars['SetSeedLangs']['Master']; ?>
</span><?php endif; ?>
		<span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['adminUser']['username'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
		<?php $_from = $this->_tpl_vars['adminUser']['in_groups_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['grp']):
?> 
			<input type="hidden" id="permissiongroup<?php echo $this->_tpl_vars['grp']; ?>
" value="<?php echo $this->_tpl_vars['grp']; ?>
"/>
		<?php endforeach; endif; unset($_from); ?>
	</div>
	<div class="dropzone"><div></div></div>
<?php endforeach; endif; unset($_from); ?>

<div class="noPages" <?php if ($this->_tpl_vars['admin_users']): ?>style="display:none;"<?php endif; ?>><?php echo $this->_tpl_vars['SetSeedLangs']['No_Staff']; ?>
</div>