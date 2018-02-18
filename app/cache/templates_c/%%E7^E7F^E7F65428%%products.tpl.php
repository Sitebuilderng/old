<?php /* Smarty version 2.6.18, created on 2017-07-19 18:37:39
         compiled from admin/views/shop/products.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'admin/views/shop/products.tpl', 21, false),)), $this); ?>
<input type="hidden" name="" value="<?php echo $this->_tpl_vars['currency_sym']; ?>
" id="curSym"/>
<?php if (! $this->_tpl_vars['ajax'] || $this->_tpl_vars['init']): ?>

<div class="filterBox clearfix dropshipToolbar">
	<div class="toolbarFilter clearfix">
	<input type="text" class="productsFilterSearch" value="<?php if (! $this->_tpl_vars['productsFilterSearch']): ?>Search<?php else: ?><?php echo $this->_tpl_vars['productsFilterSearch']; ?>
<?php endif; ?>" />	
	<?php if ($this->_tpl_vars['productsFilterSearch']): ?>
	<img src="/admin/graphics/bpeditor/remove_menu_item_off.png" class="clearSearch" id='clearSearch'/>
	<?php endif; ?>
	</div>
	
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['initPane']): ?>
<div class="dropzone"><div></div></div>
<?php endif; ?>
<?php if (! $this->_tpl_vars['pagination']): ?>
<span class="noPages" <?php if ($this->_tpl_vars['products']): ?>style="display:none"<?php endif; ?>><?php echo $this->_tpl_vars['SetSeedLangs']['No_Products']; ?>
</span>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
	<div class="bpe_menu_sub responsiveListItem productItemMain" id="prod<?php echo $this->_tpl_vars['item']['id']; ?>
" rel="<?php echo htmlspecialchars($this->_tpl_vars['item']['name']); ?>
" data-discount-1-price="<?php echo $this->_tpl_vars['item']['vol_dis_1_price']; ?>
" data-discount-1-threshold="<?php echo $this->_tpl_vars['item']['vol_dis_1_thr']; ?>
" data-discount-2-price="<?php echo $this->_tpl_vars['item']['vol_dis_2_price']; ?>
" data-discount-2-threshold="<?php echo $this->_tpl_vars['item']['vol_dis_2_thr']; ?>
" product-id="<?php echo $this->_tpl_vars['item']['id']; ?>
" data-product-type="<?php echo $this->_tpl_vars['item']['type']; ?>
" only-one="<?php echo $this->_tpl_vars['item']['only_one']; ?>
" product-price="<?php echo $this->_tpl_vars['item']['price']; ?>
" product-sell-only-if-stock="<?php echo $this->_tpl_vars['item']['sellOnlyIfStock']; ?>
" product-stock="<?php echo $this->_tpl_vars['item']['inStock']; ?>
" product-weight="<?php echo $this->_tpl_vars['item']['weight']; ?>
" name="<?php echo htmlspecialchars($this->_tpl_vars['item']['name']); ?>
" data-product-cats="<?php echo $this->_tpl_vars['item']['inCatsCSV']; ?>
" data-form-id="<?php echo $this->_tpl_vars['item']['formId']; ?>
" data-gal-id="<?php echo $this->_tpl_vars['item']['galId']; ?>
" options-separate-stock="<?php if ($this->_tpl_vars['item']['speparateStockForOptions'] == 1): ?>yes<?php else: ?>no<?php endif; ?>">
	<div class="insertProduct menu_with_options menu_hidden_extras productItem type_<?php echo $this->_tpl_vars['item']['type']; ?>
 <?php if ($this->_tpl_vars['item']['speparateStockForOptions'] == 1): ?>optionsSeparateStock<?php endif; ?>" id="<?php echo $this->_tpl_vars['item']['id']; ?>
" rel="<?php echo htmlspecialchars($this->_tpl_vars['item']['name']); ?>
">
		
		<div class="productOptions">
			
			<div class="dropzone"><div></div></div>
			<span class='noPages' <?php if ($this->_tpl_vars['item']['variants']): ?>style="display:none"<?php endif; ?>><?php echo $this->_tpl_vars['SetSeedLangs']['No_Product_Options']; ?>
</span>
			<?php $_from = $this->_tpl_vars['item']['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['variants']):
        $this->_foreach['loop1']['iteration']++;
?>
		
				<div class="responsiveListItem productOption <?php if ($this->_tpl_vars['item']['speparateStockForOptions'] == 1): ?>optionsSeparateStock<?php endif; ?>" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['variants']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-option-price="<?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo $this->_tpl_vars['variants']['price']; ?>
" data-discount-1-price="<?php echo $this->_tpl_vars['variants']['vol_dis_1_price']; ?>
" data-discount-1-threshold="<?php echo $this->_tpl_vars['variants']['vol_dis_1_thr']; ?>
" data-discount-2-price="<?php echo $this->_tpl_vars['variants']['vol_dis_2_price']; ?>
" data-discount-2-threshold="<?php echo $this->_tpl_vars['variants']['vol_dis_2_thr']; ?>
" data-option-has-stock="<?php if ($this->_tpl_vars['item']['speparateStockForOptions'] == 1): ?>yes<?php else: ?>no<?php endif; ?>" product-option-stock="<?php echo $this->_tpl_vars['variants']['stock']; ?>
">
					<span class="responsiveListItemInfo productOptionPrice"><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo $this->_tpl_vars['variants']['price']; ?>
</span>
					<span class="responsiveListItemInfo productOptionStock"><?php echo $this->_tpl_vars['variants']['stock']; ?>
</span>
					<span class="overflowEllipsis" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['variants']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['variants']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
				</div>
		
				<div class="dropzone"><div></div></div>	
	
			<?php endforeach; endif; unset($_from); ?>
			<div class="showAtBottom addProductOptionForm responsiveListAddForm hideOnReset" action="" method="post" id="<?php echo $this->_tpl_vars['item']['id']; ?>
" style="display:none">
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Option_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
					<div class="imageContextEditInputWrap"><input type="text" name="" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
				</div>

			</div>
			
		</div>
		<span class="responsiveListItemInfo productPrice"><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo $this->_tpl_vars['item']['price']; ?>
</span>
		<span class="responsiveListItemInfo productStock"><?php echo $this->_tpl_vars['item']['inStock']; ?>
</span>

		<span class="overflowEllipsis"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</span>
		<?php $_from = $this->_tpl_vars['item']['inCats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cat']):
?> 
				<input type="hidden" id="cat<?php echo $this->_tpl_vars['cat']; ?>
" value="<?php echo $this->_tpl_vars['cat']; ?>
"/>
		<?php endforeach; endif; unset($_from); ?>
	</div>
		</div>
	<div class="dropzone"><div></div></div>
<?php endforeach; endif; unset($_from); ?>
<?php if (! $this->_tpl_vars['ajax'] || $this->_tpl_vars['searching'] || $this->_tpl_vars['initPane']): ?>
<div class="clear insertNewItemsBefore"></div>
<a href="50" class="showMoreItems"></a>
<?php endif; ?>
<?php if ($this->_tpl_vars['products']): ?>
<?php endif; ?>
<div id="productCatsMenuList" style="display:none">
		<div class="responsiveListAddForm addProductCategory hideOnReset" style="display:none">
	<div class="imageContextEditFieldset">
		<div class="imageContextEditLabel"><?php echo ((is_array($_tmp=$this->_tpl_vars['SetSeedLangs']['Product_Category_Name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</div>
		<div class="imageContextEditInputWrap"><input type="text" name="" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
	</div>

	</div>
	</div>