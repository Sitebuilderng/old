<input type="hidden" name="" value="{$currency_sym}" id="curSym"/>

{if $initPane}
<div class="dropzone"><div></div></div>
{/if}
{if !$pagination}
<span class="noPages" {if $products}style="display:none"{/if}>{$SetSeedLangs.No_Products}</span>
{/if}
{foreach from=$products item=item key=key name=loop1}
	<div class="bpe_menu_sub responsiveListItem bookingProductItemMain" id="bookingprod{$item.id}" 
	booking-product-id="{$item.id}"
	data-id="{$item.id}"
	name="{$item.name|@htmlspecialchars}" 
	data-item-type="{$item.type}"
	data-place-name="{$item.place_name}"
	data-allow-deposit="{$item.allow_deposit}"
	data-places-available="{$item.places_available}"
	data-spaces-available="{$item.spaces_available}"
	data-checkout-with="{$item.checkout_with}"
	data-children-separate="{$item.children_separate}"
	data-special-separate="{$item.special_separate}"
	data-min-charge-per-space="{$item.min_charge_per_space}"
	data-adult-required="{$item.adult_required}"
	data-rates="{$item.rates|htmlentities}"
	>
	<div class="insertBookingProduct menu_with_options menu_hidden_extras bookingProductItem" rel="{$item.name|@htmlspecialchars}">
		
		<span class="overflowEllipsis">{$item.name|htmlspecialchars}</span>
		
	</div>
</div>
<div class="dropzone"><div></div></div>
{/foreach}
{if !$ajax || $searching || $initPane}
<div class="clear insertNewItemsBefore"></div>
<a href="50" class="showMoreItems"></a>
{/if}
