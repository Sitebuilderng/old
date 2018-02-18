<?php /* Smarty version 2.6.18, created on 2017-08-30 15:01:47
         compiled from admin/views/embed/embedcodeitem.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'admin/views/embed/embedcodeitem.tpl', 1, false),)), $this); ?>
<div class="responsiveListItem dropship_component_item embedCodeItem" embed-code-id="<?php echo $this->_tpl_vars['embedCode']['id']; ?>
" embed-code-name="<?php echo ((is_array($_tmp=$this->_tpl_vars['embedCode']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
">
	<span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['embedCode']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
</div>
<div class="responsiveListAddForm inline" style="display:none">
	<div class="imageContextEditFieldset">
		<div class="imageContextEditLabel">&nbsp;<?php echo $this->_tpl_vars['SetSeedLangs']['Embed_Code_Name']; ?>
</div>
		<div class="imageContextEditInputWrap linkField"><input type="text" name="" class="focus editEmbedCodeName" value="<?php echo htmlspecialchars($this->_tpl_vars['embedCode']['name']); ?>
"/></div>
	</div>
	<div class="imageContextEditFieldset">
		<div class="imageContextEditLabel">&nbsp;<?php echo $this->_tpl_vars['SetSeedLangs']['Embed_Code_Code']; ?>
</div>
		<div class="imageContextEditInputWrap"><textarea class="editEmbedCodeCode"><?php echo htmlspecialchars($this->_tpl_vars['embedCode']['code']); ?>
</textarea></div>
	</div>
</div>
<div class="dropzone"><div></div></div>