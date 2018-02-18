{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}
{*{html_table loop=$dates cols=7 table_attr='class="calTable"'}*}
{*{if $calCats|@count>0} 
<div class="filterBox belowRule clearfix" style="margin-right:-2px">
	<p class="filterHeading">Category:</p>
	<div class="menu_options">
		<div class="option_selected">
			{if !$showCat=="all"}All{else}
			{foreach from=$calCats item=calCat key=key name=loop1}
			{if $calCat.id==$showCat}{$calCat.name|truncate:30:"…":false:false|@htmlspecialchars}{/if}
			{/foreach}{/if}
		</div>
		<div class="choices">
			<div class="choices_inner">
				<div class="choices_inner_inner">
					<a href="/actions/ShowCal/?month={$month}&year={$year}" class="{if !$showCat}bpe_current{/if} changeCalCatFilter">All</a>
					<div class="bpe_rule"></div>
					{foreach from=$calCats item=calCat}
						<a href="/actions/ShowCal/?showCat={$calCat.id}&month={$month}&year={$year}" class="{if $showCat==$calCat.id} bpe_current{/if} changeCalCatFilter">{$calCat.name}</a>
					{/foreach}
				</div>
			</div>
		</div>
	</div>
</div>
{/if}*}
<input type="hidden" name="" value="{$prev_month_year}" id="prev_month_year"/>
<input type="hidden" name="" value="{$prev_month}" id="prev_month_val"/>
<input type="hidden" name="" value="{$next_month}" id="next_month_val"/>
<input type="hidden" name="" value="{$SetSeedLangs.$prev_month}" id="prev_month_text"/>
<input type="hidden" name="" value="{$SetSeedLangs.$next_month}" id="next_month_text"/>
<input type="hidden" name="" value="{$next_month_year}" id="next_month_year"/>
<input type="hidden" name="" value="{$smarty.now|date_format:"%d"}" id="current_day"/>
<input type="hidden" name="" value="{$month}" id="current_month"/>
<input type="hidden" name="" value="{$SetSeedLangs.$month}" id="current_month_text"/>
<input type="hidden" name="" value="{$year}" id="current_year"/>
<input type="hidden" name="" value="{$showCat}" id="showing_cat"/>
<h2 class="calMonth"><a href="" id="prev_month"></a>  <a href="" id="next_month"></a>{$SetSeedLangs.$month} {$year}</h2>
<table class="calTable">
	<tr>
		<th>{$SetSeedLangs.Mon}</th>
		<th>{$SetSeedLangs.Tue}</th>
		<th>{$SetSeedLangs.Wed}</th>
		<th>{$SetSeedLangs.Thu}</th>
		<th>{$SetSeedLangs.Fri}</th>
		<th class="weekend">{$SetSeedLangs.Sat}</th>
		<th class="weekend">{$SetSeedLangs.Sun}</th>
	</tr>
	<tr>
	{foreach from=$dates item=item key=key name=loop1}
		<td class="{if $smarty.now|date_format:"%Y"==$year and $smarty.now|date_format:"%B"==$month and $smarty.now|date_format:"%d"==$item[0] and $item[4] != "prevMonth" and $item[4] != "nextMonth"}current{/if} {if $smarty.foreach.loop1.index % 7 == 5}weekend{/if}  {if $smarty.foreach.loop1.index % 7 == 6}weekend{/if} {if $item[1]|@count>0}events{/if} {if $item[3]=="true"}selectedDay{/if} {$item[4]}" day={$item[0]}>
			<span id="day">{$item[0]}</span>
			

			<div class="eventList">
				{*<div class="addEventFake fakeAddFormItem">{$SetSeedLangs.New_Event|htmlspecialchars} {$item[0]|htmlspecialchars} {if $item[4] == "prevMonth"}{$SetSeedLangs.$prev_month} {$prev_month_year}{/if} {if $item[4] == "nextMonth"}{$SetSeedLangs.$next_month} {$next_month_year}{/if} {if $item[4] != "prevMonth" && $item[4] != "nextMonth"}{$SetSeedLangs.$month} {$year}{/if}</div>*}

				<form class="eventForm responsiveListAddForm hideOnReset" action="" method="post" style="display:none">
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel">{$SetSeedLangs.Event_Title}</div>
					<div class="imageContextEditInputWrap linkField"><input type="text" name="event" class="focus" value=""/></div>
				</div>
				{*
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel">{$SetSeedLangs.Link}</div>
					<div class="imageContextEditInputWrap linkField"><input type="text" name="" class="eventLink" value=""/></div>
				</div>*}
				<input type="hidden" name="date" value="{$item[2]}" class="dateInput"/>
			</form>
				<div class="dropzone"><div></div></div>
			{foreach from=$item[1]|@array_reverse item=item1 key=key2 name=loop2}
			<div class="responsiveListItem eventItem" id="event-{$item1[1]}" name="{$item1[0]|htmlspecialchars}" event-id="{$item1[1]}" 
			data-id="{$item1[1]}"
			data-event-link="{$item1[3]|htmlspecialchars}"
			event-summary="{$item1[5]|htmlspecialchars}"
			event-time="{$item1[6]|htmlspecialchars}"
			event-location="{$item1[7]|htmlspecialchars}"
			event-image="{$item1[8]|htmlspecialchars}"
			data-events-groups="{$item1[9]|htmlspecialchars}"
			event-duration="{$item1[11]|htmlspecialchars}"
			{foreach from=$item1[13] item=custom_field key=custom_field_id name=cf_loop}
				data-custom-field-{$custom_field_id}="{$custom_field.value|htmlspecialchars}"
			{/foreach}
			>
			
				<span class="overflowEllipsis">
					{$item1[0]|htmlspecialchars}
				</span>
				
				{foreach from=$item1[10] item=grp} 
					<input type="hidden" id="eventgroup{$grp}" value="{$grp}"/>
				{/foreach}
			</div>
			
			<div class="responsiveListAddForm inline clearfix editEventForm" id="renameForm{$item1[1]}" style="display:none;">
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel">{$SetSeedLangs.Event_Title}</div>
					<div class="imageContextEditInputWrap linkField"><input type="text" name="rename" class="focus" value="{$item1[0]|htmlspecialchars}"/></div>
				</div>
				{*
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel">{$SetSeedLangs.Link}</div>
					<div class="imageContextEditInputWrap linkField"><input type="text" name="" class="eventLink" value="{$item1[3]|htmlspecialchars}"/></div>
				</div>*}
				<input type="hidden" name="" value="{$item1[1]}" class="eventId"/>

			</div>
			<div class="dropzone"><div></div></div>
			{/foreach}
			</div>

			
			
		</td>
	{if $smarty.foreach.loop1.iteration is div by 7}
	</tr>
	<tr>
	{/if}
	{/foreach}
	</tr>
</table>