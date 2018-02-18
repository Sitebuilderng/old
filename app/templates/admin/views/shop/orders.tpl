{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}
{if $openOrders}
<div class="dropzone"><div></div></div>
	{foreach from=$openOrders item=item key=key name=loop1}
	<div class="responsiveListItem" buyer-id="{$item.id}" data-invoice-address="{$invoicepage}?key={$item.key}&buyerid={$item.id}">
		<span class="responsiveListItemInfo productPrice">{$currency_sym}{$item.mc_gross}</span>
		<strong>{$item.first_name} {$item.last_name}</strong>, {$item.address_city}
		<div class="darkSubMenuOuter">
			<div class="darkSubMenu">
				<div class="darkSubMenuInner orderDetails">
					<div>
					{*
					<a href="{$item.id}" class="sendDispatch">Send dispatch notification email</a>
					<a href="{$item.id}" class="archive">Archive/cancel order (no email will be sent)</a>*}
					{if $item.timestamp}
					
					<span class="darkMenuMessage">{$SetSeedLangs.Order_Date}</span>
					<div class="order">
						<div class="title">{$item.timestamp|date_format:"%A, %B %e, %Y %I:%M %p"}</div>
					</div>
					{/if}
					<div class="darkRule"></div>
					<span class="darkMenuMessage">{$SetSeedLangs.Order_Details}</span>
					
					<div class="order">

						{foreach from=$item.orders item=item2 key=key name=loop1}
						
						<div class="orderProductItem clearfix">
						{if $item2.img!=""}
						<img src="{$item2.img}" class="orderPic"/>
						{/if}
						<div class="orderProductTitle">{$item2.name} </div>
						<div class="variants">{$item2.variant}</div>
						<div class="pricesItem pricesItemRight">{$SetSeedLangs.Items_Total}: <span class="pricesPrice">{$currency_sym}{$item2.sumPrice}</span></div>
						
						{if $item2.dates}
						<div class="booking_dates clearfix">
							{foreach from=$item2.dates item=date key=key name=loop1}
								<div class="checkoutBookingProductDate">{$date|date_format}</div>
							{/foreach}
						</div>						
						{/if}
						{if !$item2.dates}
						<div class="pricesItem">{$SetSeedLangs.Unit_Price}: <span class="pricesPrice">{$currency_sym}{$item2.price}</span></div>
						<div class="pricesItem">{$SetSeedLangs.Quantity}: <span class="pricesPrice">{$item2.quantity}</span></div>
						{/if}

						</div>
						{/foreach}
						
					</div>
					
					<div class="darkRule"></div>
					<span class="orderInfo"><span class="orderInfoLeft">{$SetSeedLangs.Order_Total}</span> <strong>{$currency_sym}{$item.order_total}</strong></span>
					<span class="orderInfo"><span class="orderInfoLeft">{$SetSeedLangs.Amount_From_PayPal}</span> {$currency_sym}{$item.mc_gross}</span>
					<span class="orderInfo"><span class="orderInfoLeft">{$SetSeedLangs.PayPal_Status}</span> {$item.status}</span>
					{if $item.form_in_checkout!=""}
					<div class="darkRule"></div>
					<span class="darkMenuMessage">{$SetSeedLangs.Form_Results}</span>
					<div class="checkoutFormResults">
						{$item.form_in_checkout}
					</div>
					{/if}
					<div class="darkRule"></div>
					<span class="darkMenuMessage">{$SetSeedLangs.Shipping_Address} {if $item.address_status}({$item.address_status}){/if}</span>
					<p class="order">{$item.first_name} {$item.last_name}<br/>
{$item.address_street}<br/>
{$item.address_city}<br/>
{$item.address_state}<br/>
{$item.address_zip}<br/>
{$item.address_country}</p>
					{if $item.alt_billing_address1}
					<span class="darkMenuMessage">{$SetSeedLangs.Billing_Address}</span>
					<p class="order">{$item.alt_billing_first_name} {$item.alt_billing_last_name}<br/>
{$item.alt_billing_address1}<br/>
{$item.alt_billing_address2}<br/>
{$item.alt_billing_address_city}<br/>
{$item.alt_billing_address_state}<br/>
{$item.alt_billing_address_zip}<br/>
{$item.alt_billing_address_country}</p>
					{/if}
					<div class="darkRule"></div>
					
					<span class="darkMenuMessage">{$SetSeedLangs.PayPal_Email}</span>
					<div class="order">
						<div class="title">
					<a href="mailto:{$item.payer_email}" class="orderEmail">{$item.payer_email}</a>
						</div>
					</div>
					<div class="darkRule"></div>
					
					<span class="darkMenuMessage">{$SetSeedLangs.Field_Type_Phone}</span>
					<div class="order">
						<div class="title">
							{$item.phone}
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="dropzone"><div></div></div>
	{/foreach}
	{*<div class="listTipUp">{$SetSeedLangs.Tip_List_No_Sort_View}</div>*}

{else}
<span class="noPages">{$SetSeedLangs.No_Orders}</span>
{/if}