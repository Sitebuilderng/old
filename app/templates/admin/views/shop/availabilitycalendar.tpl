<div id="bookingAvailabilityTitleBar">
<div id="bookingAvailabilityClose">
	{$SetSeedLangs.Close}
</div>
<div id="bookingAvailabilityNext" class="bookingAvailabilityYears">{$nextYear}</div>
<div id="bookingAvailabilityCurrent" class="bookingAvailabilityYears">{$year}</div>
{if $prevYear}<div id="bookingAvailabilityPrev" class="bookingAvailabilityYears">{$prevYear}</div>{/if}
<h1>{$title}</h1>
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
		<td class="{if $item[4].block_start==1}block_start{/if} {if $item[4].block_middle==1}block_middle{/if} {if $item[4].block_end==1}block_end{/if} {if $item[3]=="prevMonth"||$item[3]=="nextMonth"}greyDay{/if} {if $smarty.now|date_format:"%Y"==$year and $smarty.now|date_format:"%B"==$month and $smarty.now|date_format:"%d"==$item[0]} current{/if}" data-date={$item[1]} data-rate="{$item[4].rate}">
			
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