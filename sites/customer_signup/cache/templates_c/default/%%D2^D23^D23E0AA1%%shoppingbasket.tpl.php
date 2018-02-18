<?php /* Smarty version 2.6.18, created on 2017-08-04 19:40:19
         compiled from components/shoppingbasket.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'paystack_process_payment', 'components/shoppingbasket.tpl', 24, false),array('function', 'math', 'components/shoppingbasket.tpl', 81, false),array('function', 'generate_payment_trxref', 'components/shoppingbasket.tpl', 145, false),array('modifier', 'htmlspecialchars', 'components/shoppingbasket.tpl', 177, false),)), $this); ?>
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

<?php if ($this->_tpl_vars['orders']): ?>

<?php if (isset ( $_POST['trx_ref'] )): ?>
	<?php echo smarty_function_paystack_process_payment(array('trxref' => $_POST['trx_ref'],'buyerId' => $_POST['buyer_id'],'secret_key' => $this->_tpl_vars['paystack_sk'],'customer_fname' => $_POST['first_name'],'customer_lname' => $_POST['last_name'],'customer_email' => $_POST['customer_email'],'customer_phone' => $_POST['phone'],'street_address' => $_POST['street_address'],'city' => $_POST['city'],'state' => $_POST['state'],'site' => 'www.sitebuilder.com.ng','api_key' => 'HQkot1YbqVkjzuVpMkW3Wt9NHHy8S5jAVDZpFXA6SVpspkRbFNfBhopY6Y7Z4qz04ypJwZQpVfRkAIwgvLRMahLggSfkjPknoK7UKXjFda0OTw4oiWbsdWIuOYO7O9vc'), $this);?>
 
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
			<tr><td colspan="100"><h2>Order Complete</h2><?php echo $this->_tpl_vars['order_message']; ?>
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
<h2>Your Cart</h2>
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
		<div class="basketName checkoutTableCell empty">
			&nbsp;
		</div>
		<div class="basketQuantity checkoutTableCell">
			<p class="Button_Small" id="updateQuantitiesP"><a href="#" id="updateQuantities"><?php echo $this->_tpl_vars['langs']['Update_Quantities']; ?>
</a></p>
		</div>
		<div class="basketPrice checkoutTableCell">
			<p><strong><?php echo $this->_tpl_vars['langs']['Total']; ?>
:</strong> <?php echo $this->_tpl_vars['currency_sym']; ?>
<?php echo $this->_tpl_vars['totals']; ?>
</p>	
		</div>
	</div>
</div>

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
		
		<button class="Button_Large submit_form" style="padding:5px;  border-radius: 5px;" type="button" onclick="return payWithPaystack()">
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
	<div class="column twoCol">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
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
			<?php $_from = $this->_tpl_vars['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ordersLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ordersLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order']):
        $this->_foreach['ordersLoop']['iteration']++;
?>
			<input type="hidden" name="item_name_<?php echo $this->_foreach['ordersLoop']['iteration']; ?>
" value="<?php echo htmlspecialchars($this->_tpl_vars['order']['name']); ?>
 - <?php echo htmlspecialchars($this->_tpl_vars['order']['variant']); ?>
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
		</div>
		</div>
	<?php endif; ?>
<?php endif; ?>
