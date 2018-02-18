<?php /* Smarty version 2.6.18, created on 2017-07-23 09:05:23
         compiled from form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'css_safe', 'form.tpl', 32, false),array('modifier', 'explode', 'form.tpl', 74, false),array('modifier', 'htmlspecialchars', 'form.tpl', 77, false),)), $this); ?>
<?php $this->assign('hide_stock_threshold', 1000); ?>
<?php if ($this->_tpl_vars['formSent'] != 'true'): ?><?php else: ?>
<h2><?php echo $this->_tpl_vars['langs']['Form_Sent']; ?>
</h2>
<?php endif; ?>
<?php if ($this->_tpl_vars['formSpam'] != 'true'): ?><?php else: ?>
<h2><?php echo $this->_tpl_vars['langs']['Form_Error']; ?>
</h2>
<?php endif; ?>

<?php if ($this->_tpl_vars['formId'] == 'newsletter'): ?>
<form action="/actions/NewsletterAdd/" method="post" class="form signupForm" enctype="multipart/form-data" >
<?php else: ?>
<form action="<?php if ($this->_tpl_vars['usedInCheckout']): ?>/actions/BuyerCheckoutForm/<?php else: ?>/actions/FormSend/<?php endif; ?>" method="post" class="form <?php if ($this->_tpl_vars['basketForm']): ?>formProduct addToBasketForm<?php endif; ?> <?php if ($this->_tpl_vars['usedInCheckout']): ?>formUsedInCheckout<?php endif; ?>" enctype="multipart/form-data" >
<?php endif; ?>

<?php if ($this->_tpl_vars['basketForm']): ?>
	<div class="productInner">		
<?php endif; ?>
	
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
<div class="input-wrapper input-wrapper-width-<?php echo $this->_tpl_vars['input']['width']; ?>
 input-wrapper-type-<?php echo $this->_tpl_vars['input']['type']; ?>
 input-wrapper-label-<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
 input-wrapper-number-<?php echo $this->_tpl_vars['x']; ?>
 <?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?>input-wrapper-required<?php else: ?>input-wrapper-not-required<?php endif; ?>" >

<?php if ($this->_tpl_vars['input']['type'] != 'checkbox' && $this->_tpl_vars['input']['type'] != 'radiogroup' && $this->_tpl_vars['input']['type'] != 'heading' && $this->_tpl_vars['input']['type'] != 'text' && $this->_tpl_vars['input']['type'] != 'hidden' && $this->_tpl_vars['input']['type'] != 'hr' && $this->_tpl_vars['input']['type'] != 'clear'): ?>
<label class="label_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
 <?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?>required_label<?php endif; ?>"><?php echo $this->_tpl_vars['input']['label']; ?>
</label>
<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'hr'): ?>
		<div class='hr'></div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'clear'): ?>
		<div class='clear'></div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'heading'): ?>
		<h2 class="formHeading_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
"><?php echo $this->_tpl_vars['input']['label']; ?>
</h2>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'text'): ?>
		<p class="formText_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
"><?php echo $this->_tpl_vars['input']['label']; ?>
</p>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'short' || $this->_tpl_vars['input']['type'] == 'phone' || $this->_tpl_vars['input']['type'] == 'name'): ?>
		<input type="text" title="<?php echo $this->_tpl_vars['input']['label']; ?>
" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" class="input <?php if ($this->_tpl_vars['input']['date']): ?>default_datepicker<?php endif; ?> input_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
<?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?> required<?php endif; ?>" value="<?php echo $this->_tpl_vars['input']['value']; ?>
<?php if ($this->_foreach['loop1']['iteration'] == $this->_tpl_vars['inputpop']): ?><?php echo $this->_tpl_vars['val']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['prepops'][$this->_tpl_vars['x']]; ?>
"/>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'email'): ?>
		<input type="text" title="<?php echo $this->_tpl_vars['input']['label']; ?>
" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" class="input input_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
<?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?> required<?php endif; ?>" id="emailInput" value="<?php if ($this->_foreach['loop1']['iteration'] == $this->_tpl_vars['inputpop']): ?><?php echo $this->_tpl_vars['val']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['input']['value']; ?>
<?php echo $this->_tpl_vars['prepops'][$this->_tpl_vars['x']]; ?>
"/>
		<p id="emailIncorrect" style="display:none;">Please check your email address for errors</p>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'hidden'): ?>
		<input type="hidden" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" class="input input_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
" value="<?php echo $this->_tpl_vars['input']['value']; ?>
"/>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'long'): ?>
		<textarea rows="5" title="<?php echo $this->_tpl_vars['input']['label']; ?>
" cols="40" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" class="textarea textarea_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
<?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?> required<?php endif; ?>"><?php if ($this->_foreach['loop1']['iteration'] == $this->_tpl_vars['inputpop']): ?><?php echo $this->_tpl_vars['val']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['input']['value']; ?>
<?php echo $this->_tpl_vars['prepops'][$this->_tpl_vars['x']]; ?>
</textarea>

	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'file'): ?>
		<input type="file" title="<?php echo $this->_tpl_vars['input']['label']; ?>
" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" value="" class="inputFile inputFile_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
<?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?> required<?php endif; ?>"/>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'checkbox'): ?>
	<fieldset>	
		<label for="cb_<?php echo $this->_tpl_vars['formId']; ?>
_<?php echo $this->_tpl_vars['input']['id']; ?>
">
		<input type="checkbox" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" class="checkbox checkbox_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
<?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?> required<?php endif; ?>" value="<?php echo $this->_tpl_vars['input']['value']; ?>
<?php echo $this->_tpl_vars['prepops'][$this->_tpl_vars['x']]; ?>
" <?php if ($this->_foreach['loop1']['iteration'] == $this->_tpl_vars['inputpop']): ?>checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']]): ?><?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']] == $this->_tpl_vars['input']['value']): ?>checked="checked"<?php endif; ?>checked="checked"<?php endif; ?> id="cb_<?php echo $this->_tpl_vars['formId']; ?>
_<?php echo $this->_tpl_vars['input']['id']; ?>
"> <span><?php echo $this->_tpl_vars['input']['label']; ?>
</span>
		</label>
	</fieldset>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'select'): ?>
		<?php $this->assign('options', ((is_array($_tmp="**!!**")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['input']['options']) : explode($_tmp, $this->_tpl_vars['input']['options']))); ?>
		<select name="<?php echo $this->_tpl_vars['input']['id']; ?>
" class="select select_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
 <?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?> required<?php endif; ?>">
			<?php $_from = $this->_tpl_vars['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['optionsList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['optionsList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option']):
        $this->_foreach['optionsList']['iteration']++;
?>
			<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['option'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" <?php if ($this->_foreach['loop1']['iteration'] == $this->_tpl_vars['inputpop'] && $this->_foreach['optionsList']['iteration'] == $this->_tpl_vars['val']): ?>selected="selected"<?php endif; ?> <?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']]): ?><?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']] == $this->_tpl_vars['option']): ?>selected="selected"<?php endif; ?><?php endif; ?>><?php echo $this->_tpl_vars['option']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['input']['type'] == 'radiogroup'): ?>
		<fieldset>	
			<label for="" class="label_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
 <?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?>required_label<?php endif; ?>"><?php echo $this->_tpl_vars['input']['label']; ?>
</label>
			<?php $this->assign('options', ((is_array($_tmp="**!!**")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['input']['options']) : explode($_tmp, $this->_tpl_vars['input']['options']))); ?>
			<?php if ($this->_tpl_vars['input']['required'] == 'yes'): ?>
				<?php $_from = $this->_tpl_vars['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['optionsloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['optionsloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['loop1'] => $this->_tpl_vars['option']):
        $this->_foreach['optionsloop']['iteration']++;
?>
				<label for="radio<?php echo ((is_array($_tmp=$this->_tpl_vars['option'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
<?php echo $this->_tpl_vars['input']['id']; ?>
<?php echo $this->_foreach['option']['iteration']; ?>
">
				<input type="radio" id="radio<?php echo ((is_array($_tmp=$this->_tpl_vars['option'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
<?php echo $this->_tpl_vars['input']['id']; ?>
<?php echo $this->_foreach['option']['iteration']; ?>
" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" value="<?php echo $this->_tpl_vars['option']; ?>
" class="radio radio_<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['label'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
" <?php if ($this->_foreach['optionsloop']['iteration'] == '1'): ?> checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']]): ?><?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']] == $this->_tpl_vars['option']): ?>checked="checked"<?php endif; ?><?php endif; ?>/> <span><?php echo $this->_tpl_vars['option']; ?>
</span>
				</label>
				<?php endforeach; endif; unset($_from); ?>
			<?php else: ?>
				<?php $_from = $this->_tpl_vars['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['option'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['option']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option']):
        $this->_foreach['option']['iteration']++;
?>
				<label for="radio<?php echo ((is_array($_tmp=$this->_tpl_vars['option'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
<?php echo $this->_tpl_vars['input']['id']; ?>
<?php echo $this->_foreach['option']['iteration']; ?>
">
				<input type="radio" name="<?php echo $this->_tpl_vars['input']['id']; ?>
" id="radio<?php echo ((is_array($_tmp=$this->_tpl_vars['option'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
<?php echo $this->_tpl_vars['input']['id']; ?>
<?php echo $this->_foreach['option']['iteration']; ?>
" value="<?php echo $this->_tpl_vars['option']; ?>
" class="radio radio_<?php echo ((is_array($_tmp=$this->_tpl_vars['option'])) ? $this->_run_mod_handler('css_safe', true, $_tmp) : smarty_modifier_css_safe($_tmp)); ?>
" <?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']]): ?><?php if ($this->_tpl_vars['prepops'][$this->_tpl_vars['x']] == $this->_tpl_vars['option']): ?>checked="checked"<?php endif; ?><?php endif; ?> /> <span><?php echo $this->_tpl_vars['option']; ?>
</span>
				</label>
				<?php endforeach; endif; unset($_from); ?>

			<?php endif; ?>
		</fieldset>
	<?php endif; ?>
	
	
	</div>
	

<?php endforeach; endif; unset($_from); ?>



	<div class="clear"></div>

	
	<?php if (! $this->_tpl_vars['variants']): ?>
	<?php if ($this->_tpl_vars['price']): ?>
<p class="stockAndPrice">
	<span class="price"><?php echo $this->_tpl_vars['curSym']; ?>
<?php echo $this->_tpl_vars['price']; ?>
</span>
	<?php if ($this->_tpl_vars['in_stock'] < $this->_tpl_vars['hide_stock_threshold']): ?>
	<span class="stock <?php if ($this->_tpl_vars['in_stock'] < $this->_tpl_vars['warning_stock_threshold']): ?>warning<?php endif; ?>"><?php echo $this->_tpl_vars['langs']['In_Stock']; ?>
: <strong><?php echo $this->_tpl_vars['in_stock']; ?>
</strong></span>
	<?php endif; ?>
	</p>
	<?php endif; ?>
	<?php endif; ?>
		<?php if ($this->_tpl_vars['variants']): ?>
		<select name="variant_price">
		<?php $_from = $this->_tpl_vars['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['variant']):
        $this->_foreach['loop1']['iteration']++;
?>
			<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['variant']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo $this->_tpl_vars['variant']['name']; ?>
 (<?php echo $this->_tpl_vars['curSym']; ?>
<?php echo $this->_tpl_vars['variant']['price']; ?>
)</option>
		<?php endforeach; endif; unset($_from); ?>
		</select>
		<div class="clear"></div>
		<?php endif; ?>

		<?php if (! $this->_tpl_vars['usedInCheckout']): ?>
				<p class="Icon_Alert cf_contains_errors" style="display:none;">* Please fill out all required fields</p>
				<img src="/graphics/form-load.gif" alt="" id="loader" style="display:none;float:right;margin:10px 10px 0"/>
					<p class="button submit_form hide_if_no_js">
				<a href="#" class=''><?php if ($this->_tpl_vars['basketForm']): ?><?php echo $this->_tpl_vars['langs']['Add_To_Basket']; ?>
<?php else: ?><?php echo $this->_tpl_vars['langs']['Submit']; ?>
<?php endif; ?></a>
			</p>
		
				<noscript><input type="submit" value="<?php if ($this->_tpl_vars['basketForm']): ?><?php echo $this->_tpl_vars['langs']['Add_To_Basket']; ?>
<?php else: ?><?php echo $this->_tpl_vars['langs']['Submit']; ?>
<?php endif; ?>"/></noscript>
			<?php endif; ?>

	<p id="success" class="Icon_Tick" style="display:<?php if ($this->_tpl_vars['form_sent'] != 'true'): ?>none<?php else: ?>block<?php endif; ?>";><?php echo $this->_tpl_vars['langs']['Form_Sent']; ?>
</p>
	<?php if ($this->_tpl_vars['basketForm']): ?>
		
	</div>
	<?php endif; ?>
	</form>
