{if $nocookie=="true"}
<p id="status">
	{$langs.Cookie_Error}
</p>
{/if}
{if $empty}
<p id="status">
	{$langs.Basket_Empty}
</p>
{/if}

{if $theme_vars_paystack_mode == "live"}
	{assign var="paystack_pk" value=$theme_vars_paystack_live_pk}
	{assign var="paystack_sk" value=$theme_vars_paystack_live_sk}
{else}
	{assign var="paystack_pk" value=$theme_vars_paystack_test_pk}
	{assign var="paystack_sk" value=$theme_vars_paystack_test_sk}
	{assign var="paystack_mode" value="Paystack is in Test Mode"}
{/if}

{if $orders}

{if isset($smarty.post.trx_ref)}
	{paystack_process_payment 
		trxref=$smarty.post.trx_ref 
		buyerId=$smarty.post.buyer_id 
		secret_key=$paystack_sk 
		customer_fname=$smarty.post.first_name 
		customer_lname=$smarty.post.last_name 
		customer_email=$smarty.post.customer_email 
		customer_phone=$smarty.post.phone 
		street_address=$smarty.post.street_address 
		city=$smarty.post.city 
		state=$smarty.post.state
		
	} 
	{literal}
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
{/literal}
	<table border="1" class="payment">
		<thead>
			<tr><td colspan="100"><h2>Order Complete</h2>{$order_message}</td></tr>
			<tr>
				<td colspan="2" width="50%" style="text-align: left;">
					<h3>Customer Information</h3>
					<b>Name:</b> {$smarty.post.first_name} {$smarty.post.last_name}<br/>
					<b>Phone:</b> {$smarty.post.phone}<br/>
					<b>Shipping Address:</b> <br />{$smarty.post.street_address}, {$smarty.post.city}, {$smarty.post.state}<br />
				</td>
				<td colspan="2" style="text-align: left;"">
					<h3>Order Information</h3>
					<b>Order Number:</b> {$smarty.post.buyer_id}<br />
					<b>Payment Reference:</b> {$smarty.post.trx_ref}
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
			{foreach from=$smarty.post.item item=product name=productLoop}
			<tr>
				<td>{$product.name}</td>
				<td>{$product.quantity}</td>
				<td>{$currency_sym} {$product.amount}</td>
				<td>{$currency_sym} {math equation="x * y" x=$product.quantity y=$product.amount}</td>
			</tr>
		{/foreach}
			
			<tr>
				<td colspan="3" style="text-align: right; font-weight:bold;"><h3>Total</h3></td>
				<td><h3>{$currency_sym} {$smarty.post.order_total}</h3></td>
				
			</tr>
		</tbody>
	</table>

{else}
<h2>Your Cart</h2>
<div id="basketWrapper"> 
	<form action="/actions/UpdateQuantities/" method="post" id="quantityForm">
		<div class="checkoutPsudoTable header">
			<div class="basketName checkoutTableCell">
				{$langs.Product_Name}
			</div>
			<div class="basketQuantity checkoutTableCell">
				{$langs.Quantity}
			</div>
			<div class="basketPrice checkoutTableCell">
				{$langs.Price}
			</div>
		</div>
		{foreach from=$orders item=item key=key name=loop1}
		<div class="checkoutPsudoTable">
			<div class="basketName checkoutTableCell">
				{if $item.pic_url}
				{if $item.url_str}<a href="{$item.url_str}">{/if}
				<img src="{$item.pic_url}?width=60&height=60&shrink=false" class="basketThumb" />
				{if $item.url_str}</a>{/if}		
				{/if}
				{if $item.url_str}<a href="{$item.url_str}">{/if}<strong>{$item.name}</strong>{if $item.url_str}</a>{/if}<br/>
				{if $item.variant!=""}{$item.variant}<br/>{/if}
			</div>
			<div class="basketQuantity checkoutTableCell">
				{if $item.allow_one=="no"}<span class="narrowQty">{$langs.Quantity}:</span><span class="quantityWrapper"><input type="text" name="{$item.id}" value="{$item.quantity}" class="quantity" /></span>{/if}
			</div>
			<div class="basketPrice checkoutTableCell">
				<span class="narrowPrice">{$langs.Price}:</span>{$currency_sym}{$item.price}
			</div>
			<div class="basketRemove checkoutTableCell">
				<a href="/actions/removeFromBasket/?ordersId={$item.id}" title="{$langs.Remove_From_Basket}"></a>
			</div>
		</div>
		{/foreach}
		<noscript><input type="submit" value="{$langs.Update_Quantities}"/></noscript>
	</form>
	<div class="checkoutPsudoTable">
		<div class="basketName checkoutTableCell empty">
			&nbsp;
		</div>
		<div class="basketQuantity checkoutTableCell">
			<p class="Button_Small" id="updateQuantitiesP"><a href="#" id="updateQuantities">{$langs.Update_Quantities}</a></p>
		</div>
		<div class="basketPrice checkoutTableCell">
			<p><strong>{$langs.Total}:</strong> {$currency_sym}{$totals}</p>	
		</div>
	</div>
</div>

{generate_payment_trxref buyerId=$buyerId total=$totals}
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
		<input type="hidden" name="trx_ref" id="trx_ref" value="{$trxref}" />
		<input type="hidden" name="buyer_id" value="{$buyerId}" />
		{foreach from=$orders item=order name=ordersLoop}
			
			
			<input type="hidden" name="item[{$smarty.foreach.ordersLoop.iteration}][name]" value="{$order.name|@htmlspecialchars} - {$order.variant|@htmlspecialchars}" />
			<input type="hidden" name="item[{$smarty.foreach.ordersLoop.iteration}][amount]" value="{$order.price}" />
			<input type="hidden" name="item[{$smarty.foreach.ordersLoop.iteration}][quantity]" value="{$order.quantity}" />
			{if $smarty.foreach.ordersLoop.last}
				<input type="hidden" name="item_count" value="{$smarty.foreach.ordersLoop.total}" />
			{/if}
		{/foreach}
		<input type="hidden" name="paystack_pk" id="paystack_pk" value="{$paystack_pk}" />
		<input type="hidden" name="paystack_total" id="paystack_total" value="{$paystack_total}" />
		<input type="hidden" name="order_total" id="order_total" value="{$totals}" />
		<div id="paystack_mode" style="max-width: 200px;color:red;">{$paystack_mode}</div>
		
		<button class="Button_Large submit_form" style="padding:5px;  border-radius: 5px;" type="button" onclick="return payWithPaystack()">
			<span style="display: block;">Pay with Securely PayStack</span>
			<img src="https://paystack.com/assets/payment/img/paystack-cards-trans.png" style="height: 30px; border-radius: 10px; margin: 5px;  background: white; padding: 5px">
		</button>
		</form>
		
		{literal}
		<script>
			function payWithPaystack(){
				$("#paystack_errors").hide();
				var handler = PaystackPop.setup({
					key: $("#paystack_pk").val(),
					email: $("#customer_email").val(),
					amount: $("#paystack_total").val(),
					ref: $("#trx_ref").val(),
					callback: function(response){
							//alert('Success. transaction ref is ' + response.reference);
							$("#paystack_errors").text('Success. transaction ref is ' + response.reference);
							$("#paystack_form").submit();
					},
					onClose: function(){
							$("#paystack_errors").text('An error occurred please try again');
							$("#paystack_errors").show();
					}
				});
				handler.openIframe();
			}
		</script>
		{/literal}
		
		
	</div>

<!--End Paystack-->



<!--
	<div class="column twoCol">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_cart" />
			<input type="hidden" name="upload" value="1" />
			<input type="hidden" name="business" value="{$paypal_email}" />
			<input type="hidden" name="notify_url" value="{$ipn}" />
			<input type="hidden" name="custom" value="{$buyerId}" />
			<input type="hidden" name="rm" value="2" />
			<input type="hidden" name="return" value="{$return}" />
			<input type="hidden" name="cancel_return" value="{$return_fail}" />
			<input type="hidden" name="no_note" value="{$no_note}" />
			<input type="hidden" name="currency_code" value="{$currency_code}" />
			<input type="hidden" name="weight_unit" value="kgs" />
			{foreach from=$orders item=order name=ordersLoop}
			<input type="hidden" name="item_name_{$smarty.foreach.ordersLoop.iteration}" value="{$order.name|@htmlspecialchars} - {$order.variant|@htmlspecialchars}" />
			<input type="hidden" name="amount_{$smarty.foreach.ordersLoop.iteration}" value="{$order.price}" />
			<input type="hidden" name="quantity_{$smarty.foreach.ordersLoop.iteration}" value="{$order.quantity}" />
			<input type="hidden" name="weight_{$smarty.foreach.ordersLoop.iteration}" value="{$order.weight}" />
			{/foreach}
			<input type="image" src="https://www.paypal.com/en_GB/i/btn/btn_xpressCheckout.gif" name="" value="{$langs.Checkout_Through_PayPal}"/>
		</form>
-->
		<div class="clear"><!-- --></div>
		</div>
		</div>
	{/if}
{/if}

