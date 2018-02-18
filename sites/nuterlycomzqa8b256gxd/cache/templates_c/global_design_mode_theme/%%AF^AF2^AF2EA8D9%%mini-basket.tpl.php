<?php /* Smarty version 2.6.18, created on 2017-07-18 20:26:35
         compiled from includes/mini-basket.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'includes/mini-basket.tpl', 15, false),)), $this); ?>
<?php if ($this->_tpl_vars['content']['orders']): ?>
<form action="/actions/UpdateQuantities/?silent=true" method="post" id="miniBasketForm">

	<?php $_from = $this->_tpl_vars['content']['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
	<div class="miniBasketItem clearfix">
		<?php if ($this->_tpl_vars['item']['pic_url']): ?>
		<?php if ($this->_tpl_vars['item']['url_str']): ?><a href="<?php echo $this->_tpl_vars['item']['url_str']; ?>
"><?php endif; ?>
		<img src="<?php echo $this->_tpl_vars['item']['pic_url']; ?>
?width=30&height=30&shrink=false" />
		<?php if ($this->_tpl_vars['item']['url_str']): ?></a><?php endif; ?>
		<?php endif; ?>

		<p class="removeCell"><a href="/actions/removeFromBasket/?ordersId=<?php echo $this->_tpl_vars['item']['id']; ?>
&silent=true" title="<?php echo $this->_tpl_vars['langs']['Remove_From_Basket']; ?>
"></a></p>

		<p class="product_name"><?php if ($this->_tpl_vars['item']['url_str']): ?><a href="<?php echo $this->_tpl_vars['item']['url_str']; ?>
"><?php endif; ?><strong><?php echo $this->_tpl_vars['item']['name']; ?>
</strong><?php if ($this->_tpl_vars['item']['url_str']): ?></a><?php endif; ?><br/>
			<?php if ($this->_tpl_vars['item']['variant'] != ""): ?><span class="variantsBasket"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['variant'])) ? $this->_run_mod_handler('replace', true, $_tmp, "[CHECKED]", "✔") : smarty_modifier_replace($_tmp, "[CHECKED]", "✔")); ?>
</span><br/><?php endif; ?>
			<span class="price"><?php echo $this->_tpl_vars['content']['currency_sym']; ?>
<?php echo $this->_tpl_vars['item']['price']; ?>
</span> <?php if ($this->_tpl_vars['item']['allow_one'] == 'no'): ?><span class="quantityWrapper"><?php echo $this->_tpl_vars['langs']['Qty']; ?>
: <input type="text" name="<?php echo $this->_tpl_vars['item']['id']; ?>
" value="<?php echo $this->_tpl_vars['item']['quantity']; ?>
" class="quantity" /></span><?php endif; ?>
		</p>

	</div>
	<?php endforeach; endif; unset($_from); ?>

	<p class="Button_Small" id="miniUpdateQuantities"><a href="#" id="updateQuantities"><?php echo $this->_tpl_vars['langs']['Update_Quantities']; ?>
</a></p>
	<p id="miniTotals"><?php echo $this->_tpl_vars['langs']['Total']; ?>
: <strong><?php echo $this->_tpl_vars['content']['currency_sym']; ?>
<?php echo $this->_tpl_vars['content']['totals']; ?>
</strong></p>


</form>
<p class="Button_Large" id="miniCheckoutButton"><a href="/<?php echo $this->_tpl_vars['content']['basket_link']; ?>
"><?php echo $this->_tpl_vars['langs']['Checkout']; ?>
</a></p>
<div class="clear"><!-- --></div>
<?php else: ?>
<p><?php echo $this->_tpl_vars['langs']['Basket_Empty']; ?>
</p>
<?php endif; ?>