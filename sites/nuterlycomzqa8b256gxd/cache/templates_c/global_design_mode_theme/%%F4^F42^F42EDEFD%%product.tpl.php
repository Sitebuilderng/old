<?php /* Smarty version 2.6.18, created on 2017-07-19 04:21:35
         compiled from product.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'product.tpl', 26, false),)), $this); ?>
<?php $this->assign('hide_stock_threshold', 1000); ?>
<?php $this->assign('warning_stock_threshold', 10); ?>
<?php if ($this->_tpl_vars['type'] == 'simple'): ?>
<div class="simpleProduct clearfix">
	<div class="productInner">
	<p class="stockAndPrice">
	<span class="price"><?php echo $this->_tpl_vars['curSym']; ?>
<?php echo $this->_tpl_vars['price']; ?>
</span>
	<?php if (! $this->_tpl_vars['digital']): ?>
	<?php if ($this->_tpl_vars['in_stock'] < $this->_tpl_vars['hide_stock_threshold']): ?>
	<span class="stock <?php if ($this->_tpl_vars['in_stock'] < $this->_tpl_vars['warning_stock_threshold']): ?>warning<?php endif; ?>"><?php echo $this->_tpl_vars['langs']['In_Stock']; ?>
: <strong><?php echo $this->_tpl_vars['in_stock']; ?>
</strong></span>
	<?php endif; ?>
	<?php endif; ?>
	</p>
	<p class="button">
		<a href="/actions/AddToBasket/?id=<?php echo $this->_tpl_vars['code']; ?>
<?php if ($this->_tpl_vars['pic_url'] != ""): ?>&amp;pic_url=<?php echo $this->_tpl_vars['pic_url']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['url_str'] != ""): ?>&amp;url_str=<?php echo $this->_tpl_vars['url_str']; ?>
<?php endif; ?>" class='addToBasketLink'><?php echo $this->_tpl_vars['langs']['Add_To_Basket']; ?>
</a>
	</p>
	</div>
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['type'] == 'simple_multi'): ?>
<form action="/actions/AddToBasket/" method="post" class="addToBasketForm clearfix multi">
	<div class="productInner">

	<select name="variant_price" <?php if ($this->_tpl_vars['separate_stock_for_options']): ?>class="separateOptionStock" data-product-code="<?php echo $this->_tpl_vars['code']; ?>
"<?php endif; ?>>
	<?php $_from = $this->_tpl_vars['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['variant']):
        $this->_foreach['loop1']['iteration']++;
?>
		<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['variant']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" <?php if ($this->_tpl_vars['separate_stock_for_options']): ?>data-stock="<?php echo $this->_tpl_vars['variant']['stock']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['variant']['name']; ?>
 (<?php echo $this->_tpl_vars['curSym']; ?>
<?php echo $this->_tpl_vars['variant']['price']; ?>
)</option>
	<?php endforeach; endif; unset($_from); ?>
	</select>
	
	<?php if (( ! $this->_tpl_vars['separate_stock_for_options'] && $this->_tpl_vars['in_stock'] < $this->_tpl_vars['hide_stock_threshold'] ) || ( $this->_tpl_vars['separate_stock_for_options'] && $this->_tpl_vars['variants'][0]['stock'] < $this->_tpl_vars['hide_stock_threshold'] )): ?>
	<p class="stockAndPrice" data-warning-threshold="<?php echo $this->_tpl_vars['warning_stock_threshold']; ?>
"><span class="stock <?php if ($this->_tpl_vars['separate_stock_for_options']): ?><?php if ($this->_tpl_vars['variants'][0]['stock'] < $this->_tpl_vars['warning_stock_threshold']): ?>warning<?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['in_stock'] < $this->_tpl_vars['warning_stock_threshold']): ?>warning<?php endif; ?><?php endif; ?>"><?php echo $this->_tpl_vars['langs']['In_Stock']; ?>
: <strong class="updateWithOptionStock" id="updateWithOptionStock<?php echo $this->_tpl_vars['code']; ?>
"><?php if ($this->_tpl_vars['separate_stock_for_options']): ?><?php echo $this->_tpl_vars['variants'][0]['stock']; ?>
<?php else: ?><?php echo $this->_tpl_vars['in_stock']; ?>
<?php endif; ?></strong></span></p>
	<?php endif; ?>

	<p class="button submit_form hide_if_no_js">
		<a href="#" class=''><?php echo $this->_tpl_vars['langs']['Add_To_Basket']; ?>
</a>
	</p>

	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['code']; ?>
"/> 
	<?php if ($this->_tpl_vars['pic_url'] != ""): ?><input type="hidden" name="pic_url" value="<?php echo $this->_tpl_vars['pic_url']; ?>
"/><?php endif; ?>
	<?php if ($this->_tpl_vars['url_str'] != ""): ?><input type="hidden" name="url_str" value="<?php echo $this->_tpl_vars['url_str']; ?>
"/><?php endif; ?>

	<noscript><input type="submit" value="<?php echo $this->_tpl_vars['langs']['Add_To_Basket']; ?>
" /></noscript>

	</div>
</form>
<?php endif; ?>
<?php if ($this->_tpl_vars['type'] == 'donation'): ?>
<form action="/actions/AddToBasket/" method="post" class="addToBasketForm clearfix donation">
	<?php if ($this->_tpl_vars['pic_url'] != ""): ?>
	<input type="hidden" name="pic_url" value="<?php echo $this->_tpl_vars['pic_url']; ?>
" />
	<?php endif; ?>
	<?php if ($this->_tpl_vars['url_str'] != ""): ?>
	<input type="hidden" name="url_str" value="<?php echo $this->_tpl_vars['url_str']; ?>
" />	
	<?php endif; ?>
	<div class="productInner">	
		<input type='text' name='donation_price' class='donationInput' value='<?php echo $this->_tpl_vars['curSym']; ?>
<?php echo $this->_tpl_vars['price']; ?>
'/>
	
	<p class="button submit_form"><a href="#" class='addToBasketLink'><?php echo $this->_tpl_vars['langs']['Add_To_Basket']; ?>
</a></p>
	</div>

	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['code']; ?>
"/></form>
<?php endif; ?>
<?php if ($this->_tpl_vars['type'] == 'gallery'): ?>
<form action="/actions/AddToBasket/" method="post" class="clearfix shopGalleryVariant addToBasketForm" name="galId<?php echo $this->_tpl_vars['gal_id']; ?>
"><span class="galId<?php echo $this->_tpl_vars['gal_id']; ?>
title" style="display:none;"></span><?php if ($this->_tpl_vars['url_str'] != ""): ?><input type="hidden" name="url_str" value="<?php echo $this->_tpl_vars['url_str']; ?>
"/><?php endif; ?><input type="hidden" class="galId<?php echo $this->_tpl_vars['gal_id']; ?>
input" name="variant"/><input type="hidden" name="id" value="<?php echo $this->_tpl_vars['code']; ?>
"/>
<div class="productInner">
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
	<p class="button submit_form"><a href="#" class='addToBasketLink'><?php echo $this->_tpl_vars['langs']['Add_To_Basket']; ?>
</a></p>
</div>
<noscript><?php echo $this->_tpl_vars['langs']['Javascript_Warning']; ?>
</noscript></form>
<?php endif; ?>
<?php if ($this->_tpl_vars['type'] == 'gallery_multi'): ?>
<form action="/actions/AddToBasket/" method="post" class="clearfix shopGalleryVariant addToBasketForm" name="galId<?php echo $this->_tpl_vars['gal_id']; ?>
">
	<span class="galId<?php echo $this->_tpl_vars['gal_id']; ?>
title" style="display:none;"></span>
	<?php if ($this->_tpl_vars['url_str'] != ""): ?><input type="hidden" name="url_str" value="<?php echo $this->_tpl_vars['url_str']; ?>
"/><?php endif; ?>
	<input type="hidden" class="galId<?php echo $this->_tpl_vars['gal_id']; ?>
input" name="variant"/>
	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['code']; ?>
"/>
	<select name="variant_price" <?php if ($this->_tpl_vars['separate_stock_for_options']): ?>class="separateOptionStock" data-product-code="<?php echo $this->_tpl_vars['code']; ?>
"<?php endif; ?>>
	<?php $_from = $this->_tpl_vars['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['variant']):
        $this->_foreach['loop1']['iteration']++;
?>
		<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['variant']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" <?php if ($this->_tpl_vars['separate_stock_for_options']): ?>data-stock="<?php echo $this->_tpl_vars['variant']['stock']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['variant']['name']; ?>
 (<?php echo $this->_tpl_vars['curSym']; ?>
<?php echo $this->_tpl_vars['variant']['price']; ?>
)</option>
	<?php endforeach; endif; unset($_from); ?>
	</select>
	
	<?php if (( ! $this->_tpl_vars['separate_stock_for_options'] && $this->_tpl_vars['in_stock'] < $this->_tpl_vars['hide_stock_threshold'] ) || ( $this->_tpl_vars['separate_stock_for_options'] && $this->_tpl_vars['variants'][0]['stock'] < $this->_tpl_vars['hide_stock_threshold'] )): ?>
	<p class="stockAndPrice" data-warning-threshold="<?php echo $this->_tpl_vars['warning_stock_threshold']; ?>
"><span class="stock <?php if ($this->_tpl_vars['separate_stock_for_options']): ?><?php if ($this->_tpl_vars['variants'][0]['stock'] < $this->_tpl_vars['warning_stock_threshold']): ?>warning<?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['in_stock'] < $this->_tpl_vars['warning_stock_threshold']): ?>warning<?php endif; ?><?php endif; ?>"><?php echo $this->_tpl_vars['langs']['In_Stock']; ?>
: <strong class="updateWithOptionStock" id="updateWithOptionStock<?php echo $this->_tpl_vars['code']; ?>
"><?php if ($this->_tpl_vars['separate_stock_for_options']): ?><?php echo $this->_tpl_vars['variants'][0]['stock']; ?>
<?php else: ?><?php echo $this->_tpl_vars['in_stock']; ?>
<?php endif; ?></strong></span></p>
	<?php endif; ?>

	<p class="button submit_form"><a href="#" class='addToBasketLink'><?php echo $this->_tpl_vars['langs']['Add_To_Basket']; ?>
</a>
</p><noscript><?php echo $this->_tpl_vars['langs']['Javascript_Warning']; ?>
</noscript></form>
<?php endif; ?>