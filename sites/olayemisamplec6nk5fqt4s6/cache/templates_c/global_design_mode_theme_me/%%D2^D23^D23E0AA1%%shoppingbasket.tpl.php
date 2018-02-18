<?php /* Smarty version 2.6.18, created on 2017-07-23 09:12:09
         compiled from components/shoppingbasket.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'paystack_process_payment', 'components/shoppingbasket.tpl', 22, false),array('function', 'math', 'components/shoppingbasket.tpl', 82, false),array('function', 'generate_payment_trxref', 'components/shoppingbasket.tpl', 386, false),array('modifier', 'date_format', 'components/shoppingbasket.tpl', 122, false),array('modifier', 'explode', 'components/shoppingbasket.tpl', 150, false),array('modifier', 'money_format', 'components/shoppingbasket.tpl', 288, false),array('modifier', 'htmlspecialchars', 'components/shoppingbasket.tpl', 418, false),array('modifier', 'strip_tags', 'components/shoppingbasket.tpl', 489, false),)), $this); ?>
<?php if ($this->_tpl_vars['nocookie'] == 'true'): ?>
<p id="status">
	<?php echo $this->_tpl_vars['langs']['Cookie_Error']; ?>

</p>
<?php endif; ?>
<?php if ($this->_tpl_vars['empty']): ?>
<p id="status">
	<?php echo $this->_tpl_vars['langs']['Basket_Empty']; ?>

</p>
<?php endif; ?>

<?php if ($this->_tpl_vars['theme_vars_paystack_mode'] == 'live'): ?>
	<?php $this->assign('paystack_pk', $this->_tpl_vars['theme_vars_paystack_live_pk']); ?>
	<?php $this->assign('paystack_sk', $this->_tpl_vars['theme_vars_paystack_live_sk']); ?>
<?php else: ?>
	<?php $this->assign('paystack_pk', $this->_tpl_vars['theme_vars_paystack_test_pk']); ?>
	<?php $this->assign('paystack_sk', $this->_tpl_vars['theme_vars_paystack_test_sk']); ?>
	<?php $this->assign('paystack_mode', 'Paystack is in Test Mode'); ?>
<?php endif; ?>

<?php if (isset ( $_POST['trx_ref'] )): ?>
	<?php echo smarty_function_paystack_process_payment(array('trxref' => $_POST['trx_ref'],'buyerId' => $_POST['buyer_id'],'secret_key' => $this->_tpl_vars['paystack_sk'],'customer_fname' => $_POST['first_name'],'customer_lname' => $_POST['last_name'],'customer_email' => $_POST['customer_email'],'customer_phone' => $_POST['phone'],'street_address' => $_POST['street_address'],'city' => $_POST['city'],'state' => $_POST['state'],'site' => $_SERVER['SERVER_NAME'],'api_key' => $this->_tpl_vars['localhost_api_key']), $this);?>
 
	
	<?php echo '
<style type="text/css">
	table.payment {
		text-align: center; vertical-align: middle; margin: auto;
	}
	table.payment td,table.payment tr{
		border: solid 1px grey;
		padding: 5px;
		vertical-align: middle;
	}
</style>
'; ?>


		
	<table border="1" class="payment">
		<thead>
			<tr><td colspan="100"><h2>Order Complete</h2> <?php echo $this->_tpl_vars['order_message']; ?>
</td></tr>
			<tr>
				<td colspan="2" width="50%" style="text-align: left;">
					<h3>Customer Information</h3>
					<b>Name:</b> <?php echo $_POST['first_name']; ?>
 <?php echo $_POST['last_name']; ?>
<br/>
					<b>Phone:</b> <?php echo $_POST['phone']; ?>
<br/>
					<b>Shipping Address:</b> <br /><?php echo $_POST['street_address']; ?>
, <?php echo $_POST['city']; ?>
, <?php echo $_POST['state']; ?>
<br />
				</td>
				<td colspan="2" style="text-align: left;"">
					<h3>Order Information</h3>
					<b>Order Number:</b> <?php echo $_POST['buyer_id']; ?>
<br />
					<b>Payment Reference:</b> <?php echo $_POST['trx_ref']; ?>

				</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="100"><h3>Order Details</h3></td>
			</tr>
			<tr style="font-weight: bold">
				<td>Item</td>
				<td>Quantity</td>
				<td>Unit Cost</td>
				<td>Total</td>
			</tr>
			<?php $_from = $_POST['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['productLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['productLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['product']):
        $this->_foreach['productLoop']['iteration']++;
?>
			<tr>
				<td><?php echo $this->_tpl_vars['product']['name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['product']['quantity']; ?>
</td>
				<td><?php echo $this->_tpl_vars['currency_sym']; ?>
 <?php echo $this->_tpl_vars['product']['amount']; ?>
</td>
				<td><?php echo $this->_tpl_vars['currency_sym']; ?>
 <?php echo smarty_function_math(array('equation' => "x * y",'x' => $this->_tpl_vars['product']['quantity'],'y' => $this->_tpl_vars['product']['amount']), $this);?>
</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
			
			<tr>
				<td colspan="3" style="text-align: right; font-weight:bold;"><h3>Total</h3></td>
				<td><h3><?php echo $this->_tpl_vars['currency_sym']; ?>
 <?php echo $_POST['order_total']; ?>
</h3></td>
				
			</tr>
		</tbody>
	</table>

<?php else: ?>

<?php if ($this->_tpl_vars['orders']): ?>
<div id="basketWrapper">
	<form action="/actions/UpdateQuantities/" method="post" id="quantityForm">
		<div class="checkoutPsudoTable header">
			<div class="basketName checkoutTableCell">
				<?php echo $this->_tpl_vars['langs']['Product_Name']; ?>

			</div>
			<div class="basketQuantity checkoutTableCell">
				<?php echo $this->_tpl_vars['langs']['Quantity']; ?>

			</div>
			<div class="basketPrice checkoutTableCell">
				<?php echo $this->_tpl_vars['langs']['Price']; ?>

			</div>
		</div>
		<?php $_from = $this->_tpl_vars['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
		<div class="checkoutPsudoTable">
			<div class="basketName checkoutTableCell">
				<?php if ($this->_tpl_vars['item']['pic_url']): ?>
				<?php if ($this->_tpl_vars['item']['url_str']): ?><a href="<?php echo $this->_tpl_vars['item']['url_str']; ?>
"><?php endif; ?>
				<img src="<?php echo $this->_tpl_vars['item']['pic_url']; ?>
?width=60&height=60&shrink=false" class="basketThumb" />
				<?php if ($this->_tpl_vars['item']['url_str']): ?></a><?php endif; ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['item']['url_str']): ?><a href="<?php echo $this->_tpl_vars['item']['url_str']; ?>
"><?php endif; ?><strong><?php echo $this->_tpl_vars['item']['name']; ?>
</strong><?php if ($this->_tpl_vars['item']['url_str']): ?></a><?php endif; ?><br/>
				<?php if ($this->_tpl_vars['item']['variant'] != ""): ?><?php echo $this->_tpl_vars['item']['variant']; ?>
<br/><?php endif; ?>
				<?php if ($this->_tpl_vars['item']['dates']): ?>
				<?php $_from = $this->_tpl_vars['item']['dates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['date']):
        $this->_foreach['loop1']['iteration']++;
?>
					<div class="checkoutBookingProductDate" style="padding:2px 5px;border:2px solid #ccc;float:left;margin:0 5px 5px 0;background:#fff;border-radius:4px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</div>
				<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
			</div>
			<div class="basketQuantity checkoutTableCell">
				<?php if ($this->_tpl_vars['item']['allow_one'] == 'no'): ?><span class="narrowQty"><?php echo $this->_tpl_vars['langs']['Quantity']; ?>
:</span><span class="quantityWrapper"><input type="text" name="<?php echo $this->_tpl_vars['item']['id']; ?>
" value="<?php echo $this->_tpl_vars['item']['quantity']; ?>
" class="quantity" /></span><?php endif; ?>
			</div>
			<div class="basketPrice checkoutTableCell">
				<span class="narrowPrice"><?php echo $this->_tpl_vars['langs']['Price']; ?>
:</span><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo $this->_tpl_vars['item']['price']; ?>

			</div>
			<div class="basketRemove checkoutTableCell">
				<a href="/actions/removeFromBasket/?ordersId=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="<?php echo $this->_tpl_vars['langs']['Remove_From_Basket']; ?>
"></a>
			</div>
		</div>
		<?php endforeach; endif; unset($_from); ?>
		<noscript><input type="submit" value="<?php echo $this->_tpl_vars['langs']['Update_Quantities']; ?>
"/></noscript>
	</form>
	<div class="checkoutPsudoTable">
		<div class="basketName checkoutTableCell">
			<?php if ($this->_tpl_vars['theme_vars_enabled_coupons']): ?>
			
			<?php $this->assign('discount', 0); ?>
			<?php if ($_POST['coupon']): ?>
				<?php $this->assign('ototals', $this->_tpl_vars['totals']); ?>
				<?php $this->assign('found', false); ?>
				<?php $this->assign('discounttotals', $this->_tpl_vars['totals']); ?>
				
								<?php $this->assign('codes', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['theme_vars_discount_1_codes']) : explode($_tmp, $this->_tpl_vars['theme_vars_discount_1_codes']))); ?>
				<?php $_from = $this->_tpl_vars['codes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['codes'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['codes']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['code']):
        $this->_foreach['codes']['iteration']++;
?>
					<?php if ($this->_tpl_vars['code'] == $_POST['coupon']): ?>
						<?php echo smarty_function_math(array('assign' => 'discount','equation' => "p * d / 100",'p' => $this->_tpl_vars['theme_vars_percentage_1_discount'],'d' => $this->_tpl_vars['discounttotals']), $this);?>

						<?php $this->assign('pc', $this->_tpl_vars['theme_vars_percentage_1_discount']); ?>
						<?php $this->assign('totals', $this->_tpl_vars['totals']-$this->_tpl_vars['discount']); ?>
						<?php $this->assign('found', true); ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				
						
				<?php $this->assign('codes', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['theme_vars_discount_2_codes']) : explode($_tmp, $this->_tpl_vars['theme_vars_discount_2_codes']))); ?>
				<?php $_from = $this->_tpl_vars['codes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['codes'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['codes']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['code']):
        $this->_foreach['codes']['iteration']++;
?>
					<?php if ($this->_tpl_vars['code'] == $_POST['coupon']): ?>
						<?php echo smarty_function_math(array('assign' => 'discount','equation' => "p * d / 100",'p' => $this->_tpl_vars['theme_vars_percentage_2_discount'],'d' => $this->_tpl_vars['discounttotals']), $this);?>

						<?php $this->assign('pc', $this->_tpl_vars['theme_vars_percentage_2_discount']); ?>
						<?php $this->assign('totals', $this->_tpl_vars['totals']-$this->_tpl_vars['discount']); ?>
						<?php $this->assign('found', true); ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				
						
				<?php $this->assign('codes', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['theme_vars_discount_3_codes']) : explode($_tmp, $this->_tpl_vars['theme_vars_discount_3_codes']))); ?>
				<?php $_from = $this->_tpl_vars['codes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['codes'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['codes']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['code']):
        $this->_foreach['codes']['iteration']++;
?>
					<?php if ($this->_tpl_vars['code'] == $_POST['coupon']): ?>
						<?php echo smarty_function_math(array('assign' => 'discount','equation' => "p * d / 100",'p' => $this->_tpl_vars['theme_vars_percentage_3_discount'],'d' => $this->_tpl_vars['discounttotals']), $this);?>

						<?php $this->assign('pc', $this->_tpl_vars['theme_vars_percentage_3_discount']); ?>
						<?php $this->assign('totals', $this->_tpl_vars['totals']-$this->_tpl_vars['discount']); ?>
						<?php $this->assign('found', true); ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				
						
				<?php $this->assign('codes', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['theme_vars_discount_4_codes']) : explode($_tmp, $this->_tpl_vars['theme_vars_discount_4_codes']))); ?>
				<?php $_from = $this->_tpl_vars['codes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['codes'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['codes']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['code']):
        $this->_foreach['codes']['iteration']++;
?>
					<?php if ($this->_tpl_vars['code'] == $_POST['coupon']): ?>
						<?php echo smarty_function_math(array('assign' => 'discount','equation' => "p * d / 100",'p' => $this->_tpl_vars['theme_vars_percentage_4_discount'],'d' => $this->_tpl_vars['discounttotals']), $this);?>

						<?php $this->assign('pc', $this->_tpl_vars['theme_vars_percentage_4_discount']); ?>
						<?php $this->assign('totals', $this->_tpl_vars['totals']-$this->_tpl_vars['discount']); ?>
						<?php $this->assign('found', true); ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				
						
				<?php $this->assign('codes', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['theme_vars_discount_5_codes']) : explode($_tmp, $this->_tpl_vars['theme_vars_discount_5_codes']))); ?>
				<?php $_from = $this->_tpl_vars['codes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['codes'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['codes']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['code']):
        $this->_foreach['codes']['iteration']++;
?>
					<?php if ($this->_tpl_vars['code'] == $_POST['coupon']): ?>
						<?php $this->assign('pc', $this->_tpl_vars['theme_vars_percentage_5_discount']); ?>
						<?php echo smarty_function_math(array('assign' => 'discount','equation' => "p * d / 100",'p' => $this->_tpl_vars['theme_vars_percentage_5_discount'],'d' => $this->_tpl_vars['discounttotals']), $this);?>

						<?php $this->assign('totals', $this->_tpl_vars['totals']-$this->_tpl_vars['discount']); ?>
						<?php $this->assign('found', true); ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				
				

			<?php endif; ?>
			
			<div id="discountCode" class="clearfix">
				

			<?php if ($_POST['coupon']): ?>
			
				<?php if ($this->_tpl_vars['theme_vars_enable_shipping'] == '1'): ?>
					<?php $this->assign('freeteir1option1', false); ?>
					<?php $this->assign('freeteir1option2', false); ?>
					<?php $this->assign('freeteir1option3', false); ?>
					<?php $this->assign('freeteir2option1', false); ?>
					<?php $this->assign('freeteir2option2', false); ?>
					<?php $this->assign('freeteir2option3', false); ?>
					<?php $this->assign('foundfreeshipping', false); ?>				
					<?php if ($_POST['coupon'] == $this->_tpl_vars['theme_vars_shipping_tier_1_option_1_free_code']): ?>
						<?php $this->assign('foundfreeshipping', true); ?>
						<?php $this->assign('freeteir1option1', true); ?>
					<?php endif; ?>
					<?php if ($_POST['coupon'] == $this->_tpl_vars['theme_vars_shipping_tier_1_option_2_free_code']): ?>
						<?php $this->assign('foundfreeshipping', true); ?>
						<?php $this->assign('freeteir1option2', true); ?>
					<?php endif; ?>
					<?php if ($_POST['coupon'] == $this->_tpl_vars['theme_vars_shipping_tier_1_option_3_free_code']): ?>
						<?php $this->assign('foundfreeshipping', true); ?>
						<?php $this->assign('freeteir1option3', true); ?>
					<?php endif; ?>
					<?php if ($_POST['coupon'] == $this->_tpl_vars['theme_vars_shipping_tier_2_option_1_free_code']): ?>
						<?php $this->assign('foundfreeshipping', true); ?>
						<?php $this->assign('freeteir2option1', true); ?>
					<?php endif; ?>
					<?php if ($_POST['coupon'] == $this->_tpl_vars['theme_vars_shipping_tier_2_option_2_free_code']): ?>
						<?php $this->assign('foundfreeshipping', true); ?>
						<?php $this->assign('freeteir2option2', true); ?>
					<?php endif; ?>
					<?php if ($_POST['coupon'] == $this->_tpl_vars['theme_vars_shipping_tier_2_option_3_free_code']): ?>
						<?php $this->assign('foundfreeshipping', true); ?>
						<?php $this->assign('freeteir2option3', true); ?>
					<?php endif; ?>
				<?php endif; ?>
				
				<?php if (! $this->_tpl_vars['found'] && ! $this->_tpl_vars['foundfreeshipping']): ?>
					<p class="Icon_Cross">Your coupon code is invalid.</p>
				<?php else: ?>
					<?php if ($this->_tpl_vars['foundfreeshipping']): ?>
					<p class="Icon_Tick">Success. You have enabled a free shipping coupon.</p>
					<?php $this->assign('ototals', false); ?>
					<?php else: ?>
					<p class="Icon_Tick">Success. A <?php echo $this->_tpl_vars['pc']; ?>
% discount has been applied to eligible items in your order.</p>
					<?php endif; ?>
				<?php endif; ?>
			<?php else: ?>
			<p><a href="#" id="showCouponCode">Have a coupon code?</a></p>
			<?php endif; ?>

			</div>

			<form action="" method="post" id="couponForm" style="display:none;">
				<input type='hidden' name='chb_sh' value="<?php echo $_POST['chb_sh']; ?>
"/>
				<input type="hidden" name="region" value="<?php echo $_POST['region']; ?>
"/>
				<div class="formSection" style="float:left;">
				<label class="label">Coupon code:</label>
				<input type="text" name="coupon" class="input" style="width:120px;margin-bottom:0" value="<?php echo $_POST['coupon']; ?>
"/>
				</div>
				<div class="formSection formSectionType_submit" style="margin:0px 0 0 0px;">
					<p class="Button_Medium submit_form hide_if_no_js" style="margin:0;clear:both;">
						<a href="#" class='' style="font-size:14px;padding:3px 6px;">Apply code</a>
					</p>
					<noscript><input type="submit" value="Apply code"/></noscript>
				</div>
			</form>
			<?php else: ?>
			&nbsp;
			<?php endif; ?>
		</div>
		<div class="basketQuantity checkoutTableCell">
			<p class="Button_Small" id="updateQuantitiesP"><a href="#" id="updateQuantities"><?php echo $this->_tpl_vars['langs']['Update_Quantities']; ?>
</a></p>
		</div>
		<div class="basketPrice checkoutTableCell">
			<?php $this->assign('shipping', false); ?>
			<?php if ($this->_tpl_vars['theme_vars_enable_shipping'] == '1'): ?>
				
				<p><strong><?php echo $this->_tpl_vars['langs']['Sub_Total']; ?>
:</strong> <?php if ($this->_tpl_vars['ototals']): ?><strike><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo $this->_tpl_vars['ototals']; ?>
</strike><?php endif; ?> <?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['totals']) : money_format($_tmp, $this->_tpl_vars['totals'])); ?>
</p>
				
				
				<p><strong><?php echo $this->_tpl_vars['theme_vars_shipping_name']; ?>
:</strong></p>


				<?php if ($this->_tpl_vars['theme_vars_enable_shipping_tier_2'] && $this->_tpl_vars['totals'] >= $this->_tpl_vars['theme_vars_shipping_tier_2_threshold']): ?>
					
					<?php if ($this->_tpl_vars['freeteir2option1']): ?>
						<?php $this->assign('shipping', 0.00); ?>
					<?php else: ?>
						<?php $this->assign('shipping', ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['theme_vars_shipping_tier_2_option_1_price']) : money_format($_tmp, $this->_tpl_vars['theme_vars_shipping_tier_2_option_1_price']))); ?>
					<?php endif; ?>
					<?php if ($_POST['chb_sh'] == '2_2'): ?>
						<?php if ($this->_tpl_vars['freeteir2option2']): ?>
							<?php $this->assign('shipping', 0.00); ?>
						<?php else: ?>
							<?php $this->assign('shipping', ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['theme_vars_shipping_tier_2_option_2_price']) : money_format($_tmp, $this->_tpl_vars['theme_vars_shipping_tier_2_option_2_price']))); ?>
						<?php endif; ?>
					
					<?php endif; ?>
					<?php if ($_POST['chb_sh'] == '2_3'): ?>
						<?php if ($this->_tpl_vars['freeteir2option3']): ?>
							<?php $this->assign('shipping', 0.00); ?>
						<?php else: ?>
							<?php $this->assign('shipping', ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['theme_vars_shipping_tier_2_option_3_price']) : money_format($_tmp, $this->_tpl_vars['theme_vars_shipping_tier_2_option_3_price']))); ?>
						<?php endif; ?>
					
					<?php endif; ?>
					
					<?php if ($this->_tpl_vars['theme_vars_shipping_tier_2_option_2_name'] != ""): ?>
						<form action="" method="post">
						<input type="hidden" name="coupon" value="<?php echo $_POST['coupon']; ?>
">
						<select name="chb_sh">

							<option value="2_1"><?php echo $this->_tpl_vars['theme_vars_shipping_tier_2_option_1_name']; ?>
 (<?php if ($this->_tpl_vars['theme_vars_shipping_tier_2_option_1_price'] == '0' || $this->_tpl_vars['freeteir2option1']): ?><?php echo $this->_tpl_vars['langs']['Free']; ?>
<?php else: ?><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['theme_vars_shipping_tier_2_option_1_price']) : money_format($_tmp, $this->_tpl_vars['theme_vars_shipping_tier_2_option_1_price'])); ?>
<?php endif; ?>)</option>
							<option value="2_2" <?php if ($_POST['chb_sh'] == '2_2'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['theme_vars_shipping_tier_2_option_2_name']; ?>
 (<?php if ($this->_tpl_vars['theme_vars_shipping_tier_2_option_2_price'] == '0' || $this->_tpl_vars['freeteir2option2']): ?><?php echo $this->_tpl_vars['langs']['Free']; ?>
<?php else: ?><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['theme_vars_shipping_tier_2_option_2_price']) : money_format($_tmp, $this->_tpl_vars['theme_vars_shipping_tier_2_option_2_price'])); ?>
<?php endif; ?>)</option>
							<?php if ($this->_tpl_vars['theme_vars_shipping_tier_2_option_3_name'] != ""): ?>
							<option value="2_3" <?php if ($_POST['chb_sh'] == '2_3'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['theme_vars_shipping_tier_2_option_3_name']; ?>
 (<?php if ($this->_tpl_vars['theme_vars_shipping_tier_2_option_3_price'] == '0' || $this->_tpl_vars['freeteir2option3']): ?><?php echo $this->_tpl_vars['langs']['Free']; ?>
<?php else: ?><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['theme_vars_shipping_tier_2_option_3_price']) : money_format($_tmp, $this->_tpl_vars['theme_vars_shipping_tier_2_option_3_price'])); ?>
<?php endif; ?>)</option>
							<?php endif; ?>
						</select>
						<noscript><input type='submit' value="Update shipping"></noscript>
						</form>
					<?php else: ?>
						<p><?php if ($this->_tpl_vars['theme_vars_shipping_tier_2_option_1_price'] == '0' || $this->_tpl_vars['freeteir2option1']): ?><?php echo $this->_tpl_vars['langs']['Free']; ?>
<?php else: ?><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['theme_vars_shipping_tier_2_option_1_price']) : money_format($_tmp, $this->_tpl_vars['theme_vars_shipping_tier_2_option_1_price'])); ?>
<?php endif; ?></p>
					<?php endif; ?>
				<?php else: ?>
					<?php if ($this->_tpl_vars['freeteir1option1']): ?>
						<?php $this->assign('shipping', 0.00); ?>
					<?php else: ?>
						<?php $this->assign('shipping', ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['theme_vars_shipping_tier_1_option_1_price']) : money_format($_tmp, $this->_tpl_vars['theme_vars_shipping_tier_1_option_1_price']))); ?>
					<?php endif; ?>
					
					<?php if ($_POST['chb_sh'] == '1_2'): ?>
						<?php if ($this->_tpl_vars['freeteir1option2']): ?>
							<?php $this->assign('shipping', 0.00); ?>
						<?php else: ?>
							<?php $this->assign('shipping', ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['theme_vars_shipping_tier_1_option_2_price']) : money_format($_tmp, $this->_tpl_vars['theme_vars_shipping_tier_1_option_2_price']))); ?>
						<?php endif; ?>					
					<?php endif; ?>
					<?php if ($_POST['chb_sh'] == '1_3'): ?>
						<?php if ($this->_tpl_vars['freeteir1option3']): ?>
							<?php $this->assign('shipping', 0.00); ?>
						<?php else: ?>
							<?php $this->assign('shipping', ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['theme_vars_shipping_tier_1_option_3_price']) : money_format($_tmp, $this->_tpl_vars['theme_vars_shipping_tier_1_option_3_price']))); ?>
						<?php endif; ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['theme_vars_shipping_tier_1_option_2_name'] != ""): ?>
						<form action="" method="post">
						<input type="hidden" name="coupon" value="<?php echo $_POST['coupon']; ?>
">
						<select name="chb_sh">
							<option value="1_1"><?php echo $this->_tpl_vars['theme_vars_shipping_tier_1_option_1_name']; ?>
 (<?php if ($this->_tpl_vars['theme_vars_shipping_tier_1_option_1_price'] == '0' || $this->_tpl_vars['freeteir1option1']): ?><?php echo $this->_tpl_vars['langs']['Free']; ?>
<?php else: ?><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['theme_vars_shipping_tier_1_option_1_price']) : money_format($_tmp, $this->_tpl_vars['theme_vars_shipping_tier_1_option_1_price'])); ?>
<?php endif; ?>)</option>
							<option value="1_2" <?php if ($_POST['chb_sh'] == '1_2'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['theme_vars_shipping_tier_1_option_2_name']; ?>
 (<?php if ($this->_tpl_vars['theme_vars_shipping_tier_1_option_2_price'] == '0' || $this->_tpl_vars['freeteir1option2']): ?><?php echo $this->_tpl_vars['langs']['Free']; ?>
<?php else: ?><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['theme_vars_shipping_tier_1_option_2_price']) : money_format($_tmp, $this->_tpl_vars['theme_vars_shipping_tier_1_option_2_price'])); ?>
<?php endif; ?>)</option>
							<?php if ($this->_tpl_vars['theme_vars_shipping_tier_1_option_3_name'] != ""): ?>
							<option value="1_3" <?php if ($_POST['chb_sh'] == '1_3'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['theme_vars_shipping_tier_1_option_3_name']; ?>
 (<?php if ($this->_tpl_vars['theme_vars_shipping_tier_1_option_3_price'] == '0' || $this->_tpl_vars['freeteir1option3']): ?><?php echo $this->_tpl_vars['langs']['Free']; ?>
<?php else: ?><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['theme_vars_shipping_tier_1_option_3_price']) : money_format($_tmp, $this->_tpl_vars['theme_vars_shipping_tier_1_option_3_price'])); ?>
<?php endif; ?>)</option>
							<?php endif; ?>
						</select>
						<noscript><input type='submit' value="Update shipping"></noscript>
						</form>
					<?php else: ?>
						<p><?php if ($this->_tpl_vars['theme_vars_shipping_tier_1_option_1_price'] == '0' || $this->_tpl_vars['freeteir1option1']): ?><?php echo $this->_tpl_vars['langs']['Free']; ?>
<?php else: ?><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['theme_vars_shipping_tier_1_option_1_price']) : money_format($_tmp, $this->_tpl_vars['theme_vars_shipping_tier_1_option_1_price'])); ?>
<?php endif; ?></p>
					<?php endif; ?>
				<?php endif; ?>
				
				<?php $this->assign('totals', $this->_tpl_vars['totals']+$this->_tpl_vars['shipping']); ?>
				<p><strong><?php echo $this->_tpl_vars['langs']['Total']; ?>
:</strong><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['totals']) : money_format($_tmp, $this->_tpl_vars['totals'])); ?>
</p>
			<?php else: ?>	
			<p><strong><?php echo $this->_tpl_vars['langs']['Total']; ?>
:</strong> <?php if ($this->_tpl_vars['ototals']): ?><strike><?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo $this->_tpl_vars['ototals']; ?>
</strike><?php endif; ?> <?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['totals']) : money_format($_tmp, $this->_tpl_vars['totals'])); ?>
</p>
			<?php endif; ?>
			
			
			
		</div>
	</div>
</div>
<?php echo $this->_tpl_vars['formOnCheckout']; ?>



<?php echo smarty_function_generate_payment_trxref(array('buyerId' => $this->_tpl_vars['buyerId'],'total' => $this->_tpl_vars['totals']), $this);?>

		<h3>Checkout</h3>
		<div id="paystack_errors" style="padding: 10px; border: solid 1px grey; border-radius: 5px; background: #ffffcc; display:none;"></div>
		<!--Display Paystack Payment Form-->
		<form method="POST" id="paystack_form">
			<script src="https://js.paystack.co/v1/inline.js"></script>
		<div class="row">
		<h4>Personal Information</h4>
			<div class="column twoCol first">
				<label for="first_name">First Name</label><input required type="text" name="first_name" placeholder="Your First Name"/>
			</div>
			<div class="column twoCol first">
				<label for="last_name">Last Name</label><input required  type="text" name="last_name" placeholder="Your Last Name"/>
			</div>
		</div>
		<label for="customer_email">Email</label><input required  id="customer_email" type="text" name="customer_email" placeholder="Your Email Address" style="max-width:500px;"/>
		<label for="phone">Phone Number</label><input id="phone" type="text" name="phone" placeholder="Your Phone Number" style="max-width:250px;"/>
		<h4>Shipping Information</h4>
		<label for="street_address">Street Address</label><input id="street_address" type="text" name="street_address" placeholder="Street Address"/>
		<div class="row">
			<div class="column twoCol first">
				<label for="city">City</label><input type="text" name="city" placeholder="City"/>
			</div>
			<div class="column twoCol first">
				<label for="State">State</label><input type="text" name="state" placeholder="State"/>
			</div>
		</div>
		<input type="hidden" name="trx_ref" id="trx_ref" value="<?php echo $this->_tpl_vars['trxref']; ?>
" />
		<input type="hidden" name="buyer_id" value="<?php echo $this->_tpl_vars['buyerId']; ?>
" />
		<?php $_from = $this->_tpl_vars['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ordersLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ordersLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order']):
        $this->_foreach['ordersLoop']['iteration']++;
?>
			
			
			<input type="hidden" name="item[<?php echo $this->_foreach['ordersLoop']['iteration']; ?>
][name]" value="<?php echo htmlspecialchars($this->_tpl_vars['order']['name']); ?>
 - <?php echo htmlspecialchars($this->_tpl_vars['order']['variant']); ?>
" />
			<input type="hidden" name="item[<?php echo $this->_foreach['ordersLoop']['iteration']; ?>
][amount]" value="<?php echo $this->_tpl_vars['order']['price']; ?>
" />
			<input type="hidden" name="item[<?php echo $this->_foreach['ordersLoop']['iteration']; ?>
][quantity]" value="<?php echo $this->_tpl_vars['order']['quantity']; ?>
" />
			<?php if (($this->_foreach['ordersLoop']['iteration'] == $this->_foreach['ordersLoop']['total'])): ?>
				<input type="hidden" name="item_count" value="<?php echo $this->_foreach['ordersLoop']['total']; ?>
" />
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		<input type="hidden" name="paystack_pk" id="paystack_pk" value="<?php echo $this->_tpl_vars['paystack_pk']; ?>
" />
		<input type="hidden" name="paystack_total" id="paystack_total" value="<?php echo $this->_tpl_vars['paystack_total']; ?>
" />
		<input type="hidden" name="order_total" id="order_total" value="<?php echo $this->_tpl_vars['totals']; ?>
" />
		<div id="paystack_mode" style="max-width: 200px;color:red;"><?php echo $this->_tpl_vars['paystack_mode']; ?>
</div>
		
		<button class="Button_Large submit_form" style="padding:5px;  border-radius: 5px; box-shadow: 3px 3px 3px #888888;" type="button" onclick="return payWithPaystack()">
			<span style="display: block;">Pay with Securely PayStack</span>
			<img src="https://paystack.com/assets/payment/img/paystack-cards-trans.png" style="height: 30px; border-radius: 10px; margin: 5px;  background: white; padding: 5px">
		</button>
		</form>
		
		<?php echo '
		<script>
			function payWithPaystack(){
				$("#paystack_errors").hide();
				var handler = PaystackPop.setup({
					key: $("#paystack_pk").val(),
					email: $("#customer_email").val(),
					amount: $("#paystack_total").val(),
					ref: $("#trx_ref").val(),
					callback: function(response){
							//alert(\'Success. transaction ref is \' + response.reference);
							$("#paystack_errors").text(\'Success. transaction ref is \' + response.reference);
							$("#paystack_form").submit();
					},
					onClose: function(){
							$("#paystack_errors").text(\'An error occurred please try again\');
							$("#paystack_errors").show();
					}
				});
				handler.openIframe();
			}
		</script>
		'; ?>

		
		
	</div>

<!--End Paystack-->



<!--
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="float:right;" id="paymentGatewayForm">
	<input type="hidden" name="cmd" value="_cart" />
	<input type="hidden" name="upload" value="1" />
	<input type="hidden" name="business" value="<?php echo $this->_tpl_vars['paypal_email']; ?>
" />
	<input type="hidden" name="notify_url" value="<?php echo $this->_tpl_vars['ipn']; ?>
" />
	<input type="hidden" name="custom" value="<?php echo $this->_tpl_vars['buyerId']; ?>
" />
	<input type="hidden" name="rm" value="2" />
	<input type="hidden" name="return" value="<?php echo $this->_tpl_vars['return']; ?>
" />
	<input type="hidden" name="cancel_return" value="<?php echo $this->_tpl_vars['return_fail']; ?>
" />
	<input type="hidden" name="no_note" value="<?php echo $this->_tpl_vars['no_note']; ?>
" />
	<input type="hidden" name="currency_code" value="<?php echo $this->_tpl_vars['currency_code']; ?>
" />
	<input type="hidden" name="weight_unit" value="kgs" />
	<input type="hidden" name="bn" value="SSCMS_SP" />
	<?php if ($this->_tpl_vars['found']): ?>
	<?php $this->assign('dc', $this->_tpl_vars['ototals']-$this->_tpl_vars['totals']); ?>
	<input type="hidden" name="discount_amount_cart" value="<?php echo ((is_array($_tmp="%i")) ? $this->_run_mod_handler('money_format', true, $_tmp, $this->_tpl_vars['dc']) : money_format($_tmp, $this->_tpl_vars['dc'])); ?>
" />
	<?php endif; ?>
	<?php if ($this->_tpl_vars['shipping']): ?>
		<input type="hidden" name="handling_cart" value="<?php echo $this->_tpl_vars['shipping']; ?>
" />		
	<?php endif; ?>
	<?php $_from = $this->_tpl_vars['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ordersLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ordersLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order']):
        $this->_foreach['ordersLoop']['iteration']++;
?>
	<input type="hidden" name="item_name_<?php echo $this->_foreach['ordersLoop']['iteration']; ?>
" value="<?php echo htmlspecialchars($this->_tpl_vars['order']['name']); ?>
 - <?php echo htmlspecialchars(((is_array($_tmp=$this->_tpl_vars['order']['variant'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp))); ?>
" />
	<input type="hidden" name="amount_<?php echo $this->_foreach['ordersLoop']['iteration']; ?>
" value="<?php echo $this->_tpl_vars['order']['price']; ?>
" />
	<input type="hidden" name="quantity_<?php echo $this->_foreach['ordersLoop']['iteration']; ?>
" value="<?php echo $this->_tpl_vars['order']['quantity']; ?>
" />
	<input type="hidden" name="weight_<?php echo $this->_foreach['ordersLoop']['iteration']; ?>
" value="<?php echo $this->_tpl_vars['order']['weight']; ?>
" />
	<?php endforeach; endif; unset($_from); ?>
	<input type="image" src="https://www.paypal.com/en_GB/i/btn/btn_xpressCheckout.gif" name="" value="<?php echo $this->_tpl_vars['langs']['Checkout_Through_PayPal']; ?>
"/>
</form>
-->
<div class="clear"><!-- --></div>
<?php endif; ?>
<?php endif; ?>