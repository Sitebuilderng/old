<div id="bookingsLeft">
	<div id="bookingAvailabilityTitleBar">
	<div id="bookingsClose">
		{$SetSeedLangs.Done}
	</div>
	<div id="bookingAvailabilityNext" class="bookingAvailabilityYears">{$nextYear}</div>
	<div id="bookingAvailabilityCurrent" class="bookingAvailabilityYears">{$year}</div>
	{if $prevYear}<div id="bookingAvailabilityPrev" class="bookingAvailabilityYears">{$prevYear}</div>{/if}
	<div id="productList"
	data-item-type="{$type}"
	data-places-available="{$modules}"
	data-spaces-available="{$spaces}"
	>
	<select>

		{foreach from=$products|@array_reverse item=product}
			<option value="{$product.id}" {if $product.id==$id}selected="selected"{/if}>{$product.name}</option>
		{/foreach}
		<option value="all" {if $id=="all"}selected="selected"{/if}>{$SetSeedLangs.All_Products}</option>
	</select>
	</div>
	
	</div>
	{foreach from=$months item=month name=months}
	<div class="availabilityMonth" id="availabilityMonth{$smarty.foreach.months.iteration}">
	<h2>{$month[0]|date_format_locale:"%B":$language}</h2>
	
	<table class="">
		<tr>
			<th>{"Monday"|date_format_locale:"%a":$language|truncate:"2":""}</th>
			<th>{"Tuesday"|date_format_locale:"%a":$language|truncate:"2":""}</th>
			<th>{"Wednesday"|date_format_locale:"%a":$language|truncate:"2":""}</th>
			<th>{"Thursday"|date_format_locale:"%a":$language|truncate:"2":""}</th>
			<th>{"Friday"|date_format_locale:"%a":$language|truncate:"2":""}</th>
			<th>{"Saturday"|date_format_locale:"%a":$language|truncate:"2":""}</th>
			<th>{"Sunday"|date_format_locale:"%a":$language|truncate:"2":""}</th>
		</tr>
		<tr>
		{foreach from=$month[1] item=item key=key name=loop1}
			{if $type==2}
				{math equation="y / x * 100" x=$modules y=$item[4].booked_modules assign=percent_full}
			{else}
				{math equation="y / x * 100" x=$spaces y=$item[4].booked_individuals assign=percent_full}
			{/if}
			{assign var=colourclass value=""}	
			
			{if $percent_full==100}
			{assign var=colourclass value="colour4"}
			{/if}
			{if $percent_full>66 && $percent_full<100}
			{assign var=colourclass value="colour3"}
			{/if}
			{if $percent_full>33 && $percent_full<=66}
			{assign var=colourclass value="colour2"}
			{/if}
			{if $percent_full>0 && $percent_full<33}
			{assign var=colourclass value="colour1"}
			{/if}
			{if $percent_full==0}
			{assign var=colourclass value="colour0"}
			{/if}

			{if $id=="all"} 
			{assign var=colourclass value="colourblue"}	
			{/if}

			{assign var=notavailable value=false}
			
			
			<td 
			{if $type==2}
				{math equation="x - y" x=$modules y=$item[4].booked_modules assign=available_modules}
				{if $available_modules>0}
					data-available="{$spaces}"
				{else}
					data-available="0"
					{assign var=notavailable value=true}
				{/if}
			{else}
				{math equation="x - y" x=$spaces y=$item[4].booked_individuals assign=available}
				data-available="{$available}"
				{if $available<=0}
				{assign var=notavailable value=true}
				{/if}

			{/if}
			
			{if $item[4].rate!=0 || $item[4].bookings!="[]"}{else}
			{assign var=colourclass value=""}			
			{/if}
			

			class="
			
			{if $item[4].price_normal!=0 && !$notavailable}cms-booking-product-available{/if} 
			{$colourclass} {if $item[4].block_start==1}block_start{/if} {if $item[4].block_middle==1}block_middle{/if} {if $item[4].block_end==1}block_end{/if} {if $item[3]=="prevMonth"||$item[3]=="nextMonth"}greyDay{/if} {if $smarty.now|date_format:"%Y-%m-%d"==$item[1]} current{/if}" data-rate="{$item[4].rate}" data-bookings="{$item[4].bookings|htmlspecialchars}" data-local-date="{$item[1]|date_format_locale:"%b %e, %Y":$language}"
			data-minimum-price-per-place="{$item[4].minimum_price_per_place}" 
			data-price-normal="{$item[4].price_normal}"
			data-price-special="{$item[4].price_special}"
			data-price-children="{$item[4].price_children}"
			data-date="{$item[1]}"
			>
			
				{$item[0]}
			</td>
		{if $smarty.foreach.loop1.iteration is div by 7}
		</tr>
		<tr>
		{/if}
		{/foreach}
		</tr>
	</table>
	</div>
	{/foreach}
</div>
<div id="bookingsRight" {if $id=="all"}class="showingall"{/if}>
	<div id="closeBookingsRight"></div>
	<div id="bookingsTabs">
		<a href="#bookingsRightInner" class="currenttab">{$SetSeedLangs.View_Bookings}</a>
		<a class="last" href="#bookingsRightAddBooking" id="addBooking" {if $id=="all"}class="disabled"{/if}>{$SetSeedLangs.Add_New_Booking}</a>
		<a class="last" href="#" id="editBooking">{$SetSeedLangs.Edit_Booking}</a>
	</div>
	<h1 id="printTitle">{if $title!=""}{$title}{else}{$SetSeedLangs.All_Products}{/if}</h1>
	<div id="bookingsRightInner"></div>
	<div id="bookingsRightAddBooking">
		<div class="cms-booking-product" data-use-minimum-price="{if $type==2}{$use_minimum_charge_per_place}{else}0{/if}" data-adult-required="{$adult_required}" data-product-type="{$type}">
		<div class="cms-boooking-product-quantities clearfix">

				<input type="hidden" name="booking_productsid[]" value="{$id}">
				<input type="hidden" name="days" value="" class="cms-booking-product-days-input" id="daysInput">
			<div class="cms-booking-product-qty cms-booking-product-normal-qty">
				<div class="cms-booking-product-input-button">
					<input name="number[]" type="text" value="1" id="normalQty">
					<span class="cms-booking-qty-button cms-booking-qty-plus">+</span>
					<span class="cms-booking-qty-button cms-booking-qty-minus">-</span>
				</div>
				{if $different_price_special||$different_price_children}
				Adults
				{else}
				{if $type==0}
				Quantity
				{else}
				Quantity
				{/if}
				{/if}
		
			</div>
			{if $different_price_special}
			<div class="cms-booking-product-qty cms-booking-product-special-qty">
			
			<div class="cms-booking-product-input-button"><input name="special[]" type="text" value="0" id="specialQty">
			<span class="cms-booking-qty-button cms-booking-qty-plus">+</span>
			<span class="cms-booking-qty-button cms-booking-qty-minus">-</span>
			</div>
			Concessions
			</div>
			{/if}
			{if $different_price_children}
			<div class="cms-booking-product-qty cms-booking-product-children-qty {if $different_price_special}cms-booking-qty-last-of-three{/if}">
			
			<div class="cms-booking-product-input-button"><input name="children[]" type="text" value="0" id="childrenQty">
			<span class="cms-booking-qty-button cms-booking-qty-plus">+</span>
			<span class="cms-booking-qty-button cms-booking-qty-minus">-</span>
			</div>
			Children
			</div>
			{/if}
		</div>
		</div>
		<label class="addBookingTextLabel clearfix">First Name<br/>
		<input type="text" id="addBookingFirstName"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">Last Name<br/>
		<input type="text" id="addBookingLastName"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">Street<br/>
		<input type="text" id="addBookingAddress1"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">City<br/>
		<input type="text" id="addBookingAddressCity"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">State<br/>
		<input type="text" id="addBookingAddressState"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">Country<br/>
		<input type="text" id="addBookingAddressCountry"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">Zip/Postal Code<br/>
		<input type="text" id="addBookingAddressZip"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">Email address<br/>
		<input type="text" id="addBookingAddressEmail"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">Phone<br/>
		<input type="text" id="addBookingAddressPhone"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">Amount paid now<br/>
		<input type="text" id="addBookingAddressPayment"/>
		
		</label>

		<input type="hidden" id="editBookingID"/>
		<input type="hidden" id="editOrderID"/>
				
		<div class="cms-booking-product-total">
			<p class="cms-booking-product-total-price">{$curSym}<span>0.00</span></p>
			<p class="cms-booking-product-total-surcharge">Including {$curSym}<span>0.00</span> under-capacity surcharge</p>
			<p id="createBooking"><a href="" class="cms-booking-product-add-to-basket">Create booking</a></p>
			<p id="saveBooking"><a href="" class="cms-booking-product-add-to-basket">Save booking</a></p>
		</div>
		
		
		
	</div>
</div>