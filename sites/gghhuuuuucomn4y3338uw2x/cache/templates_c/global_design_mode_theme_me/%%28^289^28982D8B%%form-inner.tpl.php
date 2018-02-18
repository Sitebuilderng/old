<?php /* Smarty version 2.6.18, created on 2017-07-22 02:47:03
         compiled from form-inner.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'form-inner.tpl', 12, false),array('modifier', 'explode', 'form-inner.tpl', 45, false),)), $this); ?>
<?php if ($this->_tpl_vars['basketForm']): ?>
<input type="hidden" name="addToBasketId" value="<?php echo $this->_tpl_vars['basketForm']; ?>
" id="addToBasketId"/>
<?php endif; ?>
<input type="hidden" name="formId" value="<?php echo $this->_tpl_vars['formId']; ?>
"/>
<label for="email1" class="fakeemail"><?php echo $this->_tpl_vars['langs']['Are_You_Human']; ?>
<br/>
 	<?php echo $this->_tpl_vars['langs']['Are_You_Human_Instructions']; ?>

</label>
<input type="text" name="email1" value="" class="email1 input"/>

<?php $_from = $this->_tpl_vars['inputs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['input']):
        $this->_foreach['loop1']['iteration']++;
?>
	<?php $this->assign('x', $this->_foreach['loop1']['iteration']); ?>
<div class="formSection_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
 formSectionId_<?php echo $this->_tpl_vars['input']['id']; ?>
 formSectionType_<?php echo $this->_tpl_vars['input']['type']; ?>
 formSection clearfix">
<?php if ($this->_tpl_vars['input']['type'] == 'checkbox' || $this->_tpl_vars['input']['type'] == 'heading' || $this->_tpl_vars['input']['type'] == 'text' || $this->_tpl_vars['input']['type'] == 'hidden'): ?>
<?php else: ?>
	<label class="label label_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
"><?php echo $this->_tpl_vars['input']['label']; ?>
<?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?><span style="color:#f00">*</span><?php endif; ?></label>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'heading'): ?>
		<h2 class="formHeading_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
"><?php echo $this->_tpl_vars['input']['label']; ?>
</h2>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'text'): ?>
		<p class="formText_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
"><?php echo $this->_tpl_vars['input']['label']; ?>
</p>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'short' || $this->_tpl_vars['input']['type'] == 'phone' || $this->_tpl_vars['input']['type'] == 'name'): ?>
		<input type="text" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" class="input <?php if ($this->_tpl_vars['input']['date']): ?>default_datepicker<?php endif; ?> input_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
<?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?> required<?php endif; ?>" value="<?php echo $this->_tpl_vars['input']['value']; ?>
<?php if ($this->_foreach['loop1']['iteration'] == $this->_tpl_vars['inputpop']): ?><?php echo $this->_tpl_vars['val']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['prepops'][$this->_tpl_vars['x']]; ?>
"/>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'email'): ?>
		<input type="text" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" class="input input_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
<?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?> required<?php endif; ?>" id="emailInput" value="<?php if ($this->_foreach['loop1']['iteration'] == $this->_tpl_vars['inputpop']): ?><?php echo $this->_tpl_vars['val']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['input']['value']; ?>
<?php echo $this->_tpl_vars['prepops'][$this->_tpl_vars['x']]; ?>
"/>
		<p id="emailIncorrect" style="display:none;">Please check your email address for errors</p>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'hidden'): ?>
		<input type="hidden" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" class="input input_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
" value="<?php echo $this->_tpl_vars['input']['value']; ?>
"/>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'long'): ?>
		<textarea rows="5" cols="40" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" class="textarea textarea_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
<?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?> required<?php endif; ?>"><?php if ($this->_foreach['loop1']['iteration'] == $this->_tpl_vars['inputpop']): ?><?php echo $this->_tpl_vars['val']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['input']['value']; ?>
<?php echo $this->_tpl_vars['prepops'][$this->_tpl_vars['x']]; ?>
</textarea>

	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'file'): ?>
		<input type="file" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" value="" class="inputFile inputFile_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
<?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?> required<?php endif; ?>"/>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'checkbox'): ?>
		<input type="checkbox" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" class="checkbox checkbox_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
<?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?> required<?php endif; ?>" value="<?php echo $this->_tpl_vars['input']['value']; ?>
<?php echo $this->_tpl_vars['prepops'][$this->_tpl_vars['x']]; ?>
" <?php if ($this->_foreach['loop1']['iteration'] == $this->_tpl_vars['inputpop']): ?>checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']]): ?><?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']] == $this->_tpl_vars['input']['value']): ?>checked="checked"<?php endif; ?>checked="checked"<?php endif; ?> id="cb_<?php echo $this->_tpl_vars['formId']; ?>
_<?php echo $this->_tpl_vars['input']['id']; ?>
"> <label class="label" for="cb_<?php echo $this->_tpl_vars['formId']; ?>
_<?php echo $this->_tpl_vars['input']['id']; ?>
"><?php echo $this->_tpl_vars['input']['label']; ?>
</label>

	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'select'): ?>
		<?php $this->assign('options', ((is_array($_tmp="**!!**")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['input']['options']) : explode($_tmp, $this->_tpl_vars['input']['options']))); ?>
		<select name="<?php echo $this->_tpl_vars['input']['id']; ?>
" class="select select_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
 <?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?> required<?php endif; ?>">
			<?php $_from = $this->_tpl_vars['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['optionsList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['optionsList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option']):
        $this->_foreach['optionsList']['iteration']++;
?>
			<option value="<?php echo $this->_tpl_vars['option']; ?>
" <?php if ($this->_foreach['loop1']['iteration'] == $this->_tpl_vars['inputpop'] && $this->_foreach['optionsList']['iteration'] == $this->_tpl_vars['val']): ?>selected="selected"<?php endif; ?> <?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']]): ?><?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']] == $this->_tpl_vars['option']): ?>selected="selected"<?php endif; ?><?php endif; ?>><?php echo $this->_tpl_vars['option']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'radiogroup'): ?>
		<div class="radioGroup">	
		<?php $this->assign('options', ((is_array($_tmp="**!!**")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['input']['options']) : explode($_tmp, $this->_tpl_vars['input']['options']))); ?>
		<?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?>
			<?php $_from = $this->_tpl_vars['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['optionsloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['optionsloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['loop1'] => $this->_tpl_vars['option']):
        $this->_foreach['optionsloop']['iteration']++;
?>
			<input type="radio" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" value="<?php echo $this->_tpl_vars['option']; ?>
" class="radio radio_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
" <?php if ($this->_foreach['optionsloop']['iteration'] == '1'): ?> checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']]): ?><?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']] == $this->_tpl_vars['option']): ?>checked="checked"<?php endif; ?><?php endif; ?>/> <?php echo $this->_tpl_vars['option']; ?>
<br/>
			<?php endforeach; endif; unset($_from); ?>
			<div class="clear"><!-- --></div>
		<?php else: ?>
			<?php $_from = $this->_tpl_vars['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['option'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['option']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option']):
        $this->_foreach['option']['iteration']++;
?>
			<input type="radio" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" id="radio<?php echo ((is_array($_tmp=$this->_tpl_vars['option'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
<?php echo $this->_tpl_vars['input']['id']; ?>
<?php echo $this->_foreach['option']['iteration']; ?>
" value="<?php echo $this->_tpl_vars['option']; ?>
" class="radio radio_<?php echo ((is_array($_tmp=$this->_tpl_vars['option'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
" <?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']]): ?><?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']] == $this->_tpl_vars['option']): ?>checked="checked"<?php endif; ?><?php endif; ?> /> <label for="radio<?php echo ((is_array($_tmp=$this->_tpl_vars['option'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
<?php echo $this->_tpl_vars['input']['id']; ?>
<?php echo $this->_foreach['option']['iteration']; ?>
" class="radioLabel"><?php echo $this->_tpl_vars['option']; ?>
</label><br/>
			<?php endforeach; endif; unset($_from); ?>
			<div class="clear"><!-- --></div>

		<?php endif; ?>
		</div>
	<?php endif; ?>
</div>
<?php endforeach; endif; unset($_from); ?>