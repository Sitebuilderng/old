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
{if $smarty.get.ngan_luong_pay}
{checkout_ngan_luong action="checkout" url="https://www.nganluong.vn/checkout.php" merchant_pass=$theme_vars_merchant_pass merchant_id=$merchant_id receiver=$paypal_email order_code=$buyerId cancel_url=$return_fail return_url="`$basket_link`/?ngan_luong_success=1" total=$smarty.post.total discount=$smarty.post.discount shipping=$smarty.post.shipping name=$smarty.post.name email=$smarty.post.email phone=$smarty.post.phone}
{/if}
{if $smarty.get.ngan_luong_success}
	{checkout_ngan_luong action="success" merchant_pass=$theme_vars_merchant_pass merchant_id=$merchant_id }
	{if $ngan_luong_success}
		{internal_api 
			path="/api/ordernotify/"
			api_key=$localhost_api_key
			name="result"
			method="PUT"
			domain="127.0.0.1"
			body="buyerId=`$smarty.get.order_code`&item_name=&item_number=&payment_status=&mc_gross=`$smarty.get.price`&mc_currency=vnd&txn_id=`$smarty.get.payment_id`&parent_txn_id=-&receiver_email=`$paypal_email`&first_name=&last_name=&address_city=&address_country=&address_state=&address_street=&address_zip=&payer_business_name=&payer_email=&payer_id="
		}
	{else}
	<h1>An error has occurred</h1>
	{/if}
{/if}
{if $orders}
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
				{if $item.dates}
				{foreach from=$item.dates item=date key=key name=loop1}
					<div class="checkoutBookingProductDate" style="padding:2px 5px;border:2px solid #ccc;float:left;margin:0 5px 5px 0;background:#fff;border-radius:4px;">{$date|date_format}</div>
				{/foreach}
				{/if}
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
		<div class="basketName checkoutTableCell">
			{if $theme_vars_enabled_coupons}
			
			{assign var=discount value=0}
			{if $smarty.post.coupon}
				{assign var=ototals value=$totals}
				{assign var=found value=false}
				{assign var=discounttotals value=$totals}
				
				{* Code 1 *}
				{assign var=codes value=","|explode:$theme_vars_discount_1_codes}
				{foreach from=$codes item=code name=codes}
					{if $code==$smarty.post.coupon}
						{math assign="discount" equation="p * d / 100" p=$theme_vars_percentage_1_discount d=$discounttotals}
						{assign var="pc" value=$theme_vars_percentage_1_discount}
						{assign var=totals value=$totals-$discount}
						{assign var=found value=true}
					{/if}
				{/foreach}
				
				{* Code 2 *}		
				{assign var=codes value=","|explode:$theme_vars_discount_2_codes}
				{foreach from=$codes item=code name=codes}
					{if $code==$smarty.post.coupon}
						{math assign="discount" equation="p * d / 100" p=$theme_vars_percentage_2_discount d=$discounttotals}
						{assign var="pc" value=$theme_vars_percentage_2_discount}
						{assign var=totals value=$totals-$discount}
						{assign var=found value=true}
					{/if}
				{/foreach}
				
				{* Code 3 *}		
				{assign var=codes value=","|explode:$theme_vars_discount_3_codes}
				{foreach from=$codes item=code name=codes}
					{if $code==$smarty.post.coupon}
						{math assign="discount" equation="p * d / 100" p=$theme_vars_percentage_3_discount d=$discounttotals}
						{assign var="pc" value=$theme_vars_percentage_3_discount}
						{assign var=totals value=$totals-$discount}
						{assign var=found value=true}
					{/if}
				{/foreach}
				
				{* Code 4 *}		
				{assign var=codes value=","|explode:$theme_vars_discount_4_codes}
				{foreach from=$codes item=code name=codes}
					{if $code==$smarty.post.coupon}
						{math assign="discount" equation="p * d / 100" p=$theme_vars_percentage_4_discount d=$discounttotals}
						{assign var="pc" value=$theme_vars_percentage_4_discount}
						{assign var=totals value=$totals-$discount}
						{assign var=found value=true}
					{/if}
				{/foreach}
				
				{* Code 5 *}		
				{assign var=codes value=","|explode:$theme_vars_discount_5_codes}
				{foreach from=$codes item=code name=codes}
					{if $code==$smarty.post.coupon}
						{assign var="pc" value=$theme_vars_percentage_5_discount}
						{math assign="discount" equation="p * d / 100" p=$theme_vars_percentage_5_discount d=$discounttotals}
						{assign var=totals value=$totals-$discount}
						{assign var=found value=true}
					{/if}
				{/foreach}
				
				

			{/if}
			
			<div id="discountCode" class="clearfix">
				

			{if $smarty.post.coupon}
			
				{if $theme_vars_enable_shipping=="1"}
					{assign var=freeteir1option1 value=false}
					{assign var=freeteir1option2 value=false}
					{assign var=freeteir1option3 value=false}
					{assign var=freeteir2option1 value=false}
					{assign var=freeteir2option2 value=false}
					{assign var=freeteir2option3 value=false}
					{assign var=foundfreeshipping value=false}				
					{if $smarty.post.coupon==$theme_vars_shipping_tier_1_option_1_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freeteir1option1 value=true}
					{/if}
					{if $smarty.post.coupon==$theme_vars_shipping_tier_1_option_2_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freeteir1option2 value=true}
					{/if}
					{if $smarty.post.coupon==$theme_vars_shipping_tier_1_option_3_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freeteir1option3 value=true}
					{/if}
					{if $smarty.post.coupon==$theme_vars_shipping_tier_2_option_1_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freeteir2option1 value=true}
					{/if}
					{if $smarty.post.coupon==$theme_vars_shipping_tier_2_option_2_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freeteir2option2 value=true}
					{/if}
					{if $smarty.post.coupon==$theme_vars_shipping_tier_2_option_3_free_code}
						{assign var=foundfreeshipping value=true}
						{assign var=freeteir2option3 value=true}
					{/if}
				{/if}
				
				{if !$found && !$foundfreeshipping}
					<p class="Icon_Cross">Your coupon code is invalid.</p>
				{else}
					{if $foundfreeshipping}
					<p class="Icon_Tick">Success. You have enabled a free shipping coupon.</p>
					{assign var=ototals value=false}
					{else}
					<p class="Icon_Tick">Success. A {$pc}% discount has been applied to eligible items in your order.</p>
					{/if}
				{/if}
			{else}
			<p><a href="#" id="showCouponCode">Have a coupon code?</a></p>
			{/if}

			</div>

			<form action="" method="post" id="couponForm" style="display:none;">
				<input type='hidden' name='chb_sh' value="{$smarty.post.chb_sh}"/>
				<input type="hidden" name="region" value="{$smarty.post.region}"/>
				<div class="formSection" style="float:left;">
				<label class="label">Coupon code:</label>
				<input type="text" name="coupon" class="input" style="width:120px;margin-bottom:0" value="{$smarty.post.coupon}"/>
				</div>
				<div class="formSection formSectionType_submit" style="margin:0px 0 0 0px;">
					<p class="Button_Medium submit_form hide_if_no_js" style="margin:0;clear:both;">
						<a href="#" class='' style="font-size:14px;padding:3px 6px;">Apply code</a>
					</p>
					<noscript><input type="submit" value="Apply code"/></noscript>
				</div>
			</form>
			{else}
			&nbsp;
			{/if}
		</div>
		<div class="basketQuantity checkoutTableCell">
			<p class="Button_Small" id="updateQuantitiesP"><a href="#" id="updateQuantities">{$langs.Update_Quantities}</a></p>
		</div>
		<div class="basketPrice checkoutTableCell">
			{assign var=shipping value=false}
			{if $theme_vars_enable_shipping=="1"}
				
				<p><strong>{$langs.Sub_Total}:</strong> {if $ototals}<strike>{$currency_sym}{$ototals}</strike>{/if} {$currency_sym}{"%i"|money_format:$totals}</p>
				
				
				<p><strong>{$theme_vars_shipping_name}:</strong></p>


				{if $theme_vars_enable_shipping_tier_2 && $totals>=$theme_vars_shipping_tier_2_threshold}
					
					{if $freeteir2option1}
						{assign var=shipping value=0.00}
					{else}
						{assign var=shipping value="%i"|money_format:$theme_vars_shipping_tier_2_option_1_price}
					{/if}
					{if $smarty.post.chb_sh=="2_2"}
						{if $freeteir2option2}
							{assign var=shipping value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$theme_vars_shipping_tier_2_option_2_price}
						{/if}
					
					{/if}
					{if $smarty.post.chb_sh=="2_3"}
						{if $freeteir2option3}
							{assign var=shipping value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$theme_vars_shipping_tier_2_option_3_price}
						{/if}
					
					{/if}
					
					{if $theme_vars_shipping_tier_2_option_2_name!=""}
						<form action="" method="post">
						<input type="hidden" name="coupon" value="{$smarty.post.coupon}">
						<select name="chb_sh">

							<option value="2_1">{$theme_vars_shipping_tier_2_option_1_name} ({if $theme_vars_shipping_tier_2_option_1_price=="0" || $freeteir2option1}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$theme_vars_shipping_tier_2_option_1_price}{/if})</option>
							<option value="2_2" {if $smarty.post.chb_sh=="2_2"}selected="selected"{/if}>{$theme_vars_shipping_tier_2_option_2_name} ({if $theme_vars_shipping_tier_2_option_2_price=="0" || $freeteir2option2}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$theme_vars_shipping_tier_2_option_2_price}{/if})</option>
							{if $theme_vars_shipping_tier_2_option_3_name!=""}
							<option value="2_3" {if $smarty.post.chb_sh=="2_3"}selected="selected"{/if}>{$theme_vars_shipping_tier_2_option_3_name} ({if $theme_vars_shipping_tier_2_option_3_price=="0" || $freeteir2option3}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$theme_vars_shipping_tier_2_option_3_price}{/if})</option>
							{/if}
						</select>
						<noscript><input type='submit' value="Update shipping"></noscript>
						</form>
					{else}
						<p>{if $theme_vars_shipping_tier_2_option_1_price=="0" || $freeteir2option1}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$theme_vars_shipping_tier_2_option_1_price}{/if}</p>
					{/if}
				{else}
					{if $freeteir1option1}
						{assign var=shipping value=0.00}
					{else}
						{assign var=shipping value="%i"|money_format:$theme_vars_shipping_tier_1_option_1_price}
					{/if}
					
					{if $smarty.post.chb_sh=="1_2"}
						{if $freeteir1option2}
							{assign var=shipping value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$theme_vars_shipping_tier_1_option_2_price}
						{/if}					
					{/if}
					{if $smarty.post.chb_sh=="1_3"}
						{if $freeteir1option3}
							{assign var=shipping value=0.00}
						{else}
							{assign var=shipping value="%i"|money_format:$theme_vars_shipping_tier_1_option_3_price}
						{/if}
					{/if}
					{if $theme_vars_shipping_tier_1_option_2_name!=""}
						<form action="" method="post">
						<input type="hidden" name="coupon" value="{$smarty.post.coupon}">
						<select name="chb_sh">
							<option value="1_1">{$theme_vars_shipping_tier_1_option_1_name} ({if $theme_vars_shipping_tier_1_option_1_price=="0" || $freeteir1option1}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$theme_vars_shipping_tier_1_option_1_price}{/if})</option>
							<option value="1_2" {if $smarty.post.chb_sh=="1_2"}selected="selected"{/if}>{$theme_vars_shipping_tier_1_option_2_name} ({if $theme_vars_shipping_tier_1_option_2_price=="0" || $freeteir1option2}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$theme_vars_shipping_tier_1_option_2_price}{/if})</option>
							{if $theme_vars_shipping_tier_1_option_3_name!=""}
							<option value="1_3" {if $smarty.post.chb_sh=="1_3"}selected="selected"{/if}>{$theme_vars_shipping_tier_1_option_3_name} ({if $theme_vars_shipping_tier_1_option_3_price=="0" || $freeteir1option3}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$theme_vars_shipping_tier_1_option_3_price}{/if})</option>
							{/if}
						</select>
						<noscript><input type='submit' value="Update shipping"></noscript>
						</form>
					{else}
						<p>{if $theme_vars_shipping_tier_1_option_1_price=="0" || $freeteir1option1}{$langs.Free}{else}{$currency_sym}{"%i"|money_format:$theme_vars_shipping_tier_1_option_1_price}{/if}</p>
					{/if}
				{/if}
				
				{assign var=totals value=$totals+$shipping}
				<p><strong>{$langs.Total}:</strong>{$currency_sym}{"%i"|money_format:$totals}</p>
			{else}	
			<p><strong>{$langs.Total}:</strong> {if $ototals}<strike>{$currency_sym}{$ototals}</strike>{/if} {$currency_sym}{"%i"|money_format:$totals}</p>
			{/if}
			
			
			
		</div>
	</div>
</div>
{$formOnCheckout}
<!-- If you are integrating a custom gateway please ensure the form that goes to the gateway has the id of paymentGatewayForm to ensure contact forms added to the checkout are submitted before the gateway form -->

{* PAYPAL *}
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="float:right;" id="paymentGatewayForm">
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
	<input type="hidden" name="bn" value="SSCMS_SP" />
	{if $found}
	{assign var=dc value=$ototals-$totals}
	<input type="hidden" name="discount_amount_cart" value="{"%i"|money_format:$dc}" />
	{/if}
	{if $shipping}
		<input type="hidden" name="handling_cart" value="{$shipping}" />		
	{/if}
	{foreach from=$orders item=order name=ordersLoop}
	<input type="hidden" name="item_name_{$smarty.foreach.ordersLoop.iteration}" value="{$order.name|@htmlspecialchars} - {$order.variant|strip_tags|@htmlspecialchars}" />
	<input type="hidden" name="amount_{$smarty.foreach.ordersLoop.iteration}" value="{$order.price}" />
	<input type="hidden" name="quantity_{$smarty.foreach.ordersLoop.iteration}" value="{$order.quantity}" />
	<input type="hidden" name="weight_{$smarty.foreach.ordersLoop.iteration}" value="{$order.weight}" />
	{/foreach}
	<input type="image" src="https://www.paypal.com/en_GB/i/btn/btn_xpressCheckout.gif" name="" value="{$langs.Checkout_Through_PayPal}"/>
</form>

{* Ngan Luong *}
	{*
	{if $found}
	{assign var=dc value=$ototals-$totals}
	{assign var=discount value="%i"|money_format:$dc}
	{else}
	{assign var=discount value=0}
	{/if}
	{if $shipping}
		{assign var=shipping value=$shipping}	
	{else}
		{assign var=shipping value=0}	
	{/if}
<form method='post' action="?ngan_luong_pay=1" id="paymentGatewayForm">
	<input type="hidden" name="total" value="{$totals}">	
	<input type="hidden" name="discount" value="{$discount}">
	<input type="hidden" name="shipping" value="{$shipping}">
	<label for="your_name">Your Name</label><input type="text" name="name" value="" id="your_name">
	<label for="your_email">Your email</label><input type="text" name="email" value="" id="your_email">
	<label for="your_phone">Your phone</label><input type="text" name="phone" value="" id="your_phone">
	<input type="submit" value="Checkout">
	
</form>
*}
<div class="clear"><!-- --></div>
{/if}
