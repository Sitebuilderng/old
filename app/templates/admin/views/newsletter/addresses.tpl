{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}

{*
	<div class="filterBox belowRule">
		<div style="float:left">
		{if $sets|@count>1}
			{if $sets|@count > 7}
				{if $currentPage<5 && $currentPage!=$sets|@count}
					{foreach from=$sets item=set key=key name=loop1}
						{if $smarty.foreach.loop1.iteration<=5}
						<a href="{$set}" class="filterPage{if $currentPage==$set} currentFilterPage{/if}">{$set}</a>
						{/if}
					{/foreach}
					{if $sets|@count>6}
					{if $sets|@count!=7}
					<span class="pageHellip">&hellip;</span>
					{/if}
					<a href="{$sets|@count}" class="filterPage">{$sets|@count}</a> 
					{/if}
				{elseif $currentPage>=5 && $currentPage < $sets|@count-2}
					<a href="1" class="filterPage">1</a>  <span class="pageHellip">&hellip;</span> 
					{math equation=x-1 x=$currentPage assign=min}
					{math equation=x+1 x=$currentPage assign=max}

					{foreach from=$sets item=set key=key name=loop1}
						{if $smarty.foreach.loop1.iteration >= $min && $smarty.foreach.loop1.iteration <= $max}
						<a href="{$set}" class="filterPage{if $currentPage==$set} currentFilterPage{/if}">{$set}</a>
						{/if}
					{/foreach}
					<span class="pageHellip">&hellip;</span> <a href="{$sets|@count}" class="filterPage">{$sets|@count}</a> 

				{else}
					{if $sets|@count>=5}
					<a href="1" class="filterPage">1</a>  {if $sets|@count!=5}<span class="pageHellip">&hellip;</span> {/if}
					{/if}
					{math equation=x-3 x=$sets|@count assign=min}

					{foreach from=$sets item=set key=key name=loop1}
						{if $smarty.foreach.loop1.iteration >= $min && $smarty.foreach.loop1.iteration <= $sets|@count}
						<a href="{$set}" class="filterPage{if $currentPage==$set} currentFilterPage{/if}">{$set}</a>
						{/if}
					{/foreach}

				{/if}	
			{else}
			{foreach from=$sets item=set key=key name=loop1}
				<a href="{$set}" class="filterPage{if $currentPage==$set} currentFilterPage{/if}">{$set}</a>
			{/foreach}
			{/if}
		{/if}
		</div>
		<div style="float:right">
		<input type="text" class="pageFilterSearch" value="{if $filterSearch}{$filterSearch}{else}Search{/if}" />
		{if $filterSearch}
		<img src="/admin/graphics/bpeditor/remove_menu_item_off.png" class="clearSearch"/>
		{/if}
		</div>

		{if $emailGroups}
		<div class="clear visible"><!-- --></div>
		<p class="filterHeading">Group:</p>
		<div class="menu_options">
			<div class="option_selected">
				{if $groupFilter=="all"}All{elseif $groupFilter ==""}Default{else}
				{foreach from=$emailGroups item=calCat key=key name=loop1}
				{if $calCat.id==$groupFilter}{$calCat.name|truncate:30:"…":false:false|@htmlspecialchars}{/if}
				{/foreach}{/if}
			</div>
			<div class="choices">
				<div class="choices_inner">
					<div class="choices_inner_inner">
						<a href="newsletterActions.php?newsletterAction=filterGroup&group=all" {if $groupFilter=="all"}class="choice_selected changeOptionOr"{else}class="filterGroup"{/if}>All</a>
						<a href="newsletterActions.php?newsletterAction=filterGroup&group=" {if $groupFilter==""}class="choice_selected changeOptionOr"{else}class="filterGroup"{/if}>Default</a>
						<div class="bpe_rule"></div>
						{foreach from=$emailGroups item=calCat key=key name=loop1}
						<a href="newsletterActions.php?newsletterAction=filterGroup&group={$calCat.id}" id="{$calCat.id}" class="filterGroup {if $calCat.id==$groupFilter}choice_selected{/if}">{$calCat.name|truncate:30:"…":false:false|@htmlspecialchars}</a>
						{/foreach}
					</div>
				</div>
			</div>
		</div>
		{/if}
	<div class="clear"><!-- --></div>
	</div>
	*}
	{if !$ajax}<span class="noPages" {if $emails}style='display:none'{/if}>{$SetSeedLangs.No_Recipients}</span>{/if}
	{if !$ajax}
	<div class="dropzone"><div></div></div>
	{/if}
	{foreach from=$emails item=item key=key name=loop1}
		<div class="responsiveListItem {if $item.inactive=="yes"}offline{/if}" subscriber-id="{$item.id}" data-subscriber-status="{if $item.inactive=="yes"}inactive{else}active{/if}" data-subscriber-categories="{$item.subscriberCatsCSV}" {foreach from=$item.custom_field_values item=custom_field}data-custom-field-{$custom_field.id}="{$custom_field.value|htmlspecialchars}"{/foreach}>
	 		{*}
			<div class="menu_options">
				<div class="option_selected">
					{if $item.inactive=="yes"}
					Inactive
					{else}
					Active
					{/if}
				</div>
				<div class="choices toggleEmailActive">
					<div class="choices_inner">
						<div class="choices_inner_inner">
							{if $item.inactive=="yes"}
							<a href="|{$item.id}">Active</a>
							<a href="yes|{$item.id}" class="choice_selected">Inactive</a>
							{else}
							<a href="|{$item.id}" class="choice_selected">Active</a>
							<a href="yes|{$item.id}">Inactive</a>
							{/if}
						</div>
					</div>
				</div>
			</div>
			{if $emailGroups}
			<div class="menu_options">
				<div class="option_selected">
					Group(s)
				</div>
				<div class="choices">
					<div class="choices_inner">
						<div class="choices_inner_inner">
							<a href="newsletterActions.php?newsletterAction=changeGroup&itemId={$item.id}&groupId=" {if $item.belongs_to_mailing_list==""}class="choice_selected changeOptionOr"{else}class="changeOptionOr"{/if}>Default</a>
							<div class="bpe_rule"></div>
							{foreach from=$emailGroups item=calCat key=key name=loop1}
							<a href="newsletterActions.php?newsletterAction=changeGroup&itemId={$item.id}&groupId={$calCat.id}" id="{$calCat.id}" class="toggleGroup changeOptionOr {if $calCat.id==$item.belongs_to_mailing_list}choice_selected{/if}">{$calCat.name|truncate:30:"…":false:false|@htmlspecialchars}</a>
							{/foreach}
						</div>
					</div>
				</div>
			</div>
			{/if}
			<div class="hoverButton toggleRecipientEmail" id="renameRecipientEmail-{$item.id}" title="{$item.email}"><input type="hidden" name="" class="recipientEmail" value="{$item.email}" id=""/><div>Edit Email address</div></div>*}{*
			<span class="key hideOnHover">{$item.email}</span>*}
			<span class="responsiveListItemInfo noUC" style="max-width:30%"><span class='overflowEllipsis subscriberEmail' title="{$item.email|@htmlspecialchars}">{$item.email|@htmlspecialchars}</span></span>
			
			<span class="responsiveListItemInfo subscriberInactive" style="max-width:10%;{if $item.inactive==""}visibility:hidden;{/if}"><span class='overflowEllipsis' title="{$SetSeedLangs.Inactive|htmlspecialchars}">{$SetSeedLangs.Inactive|htmlspecialchars}</span></span>
			
			<span class="overflowEllipsis subscriberName" title="{$item.name|@htmlspecialchars}" style="max-width:78%">{$item.name|@htmlspecialchars}</span>
			{foreach from=$item.subscriberCats item=cat} 
				<input type="hidden" id="subcat{$cat}" value="{$cat}"/>
			{/foreach}
		</div>
		<div class="responsiveListAddForm inline" style="display:none">
			<div class="imageContextEditFieldset">
				<div class="imageContextEditLabel">&nbsp;{$SetSeedLangs.Subscriber_Name}</div>
				<div class="imageContextEditInputWrap linkField"><input type="text" name="" class="focus editSubscriberName" value="{$item.name|@htmlspecialchars}"/></div>
			</div>
			<div class="imageContextEditFieldset">
				<div class="imageContextEditLabel">&nbsp;{$SetSeedLangs.Subscriber_Email}</div>
				<div class="imageContextEditInputWrap"><input type="text" name="" class="editSubscriberEmail" value="{$item.email|@htmlspecialchars}"/></div>
			</div>

			<input type="hidden" name="" value="{$groupFilter}" id="currentMailingList"/>	
		</div>
		<div class="dropzone"><div></div></div>
		{*
		<form action="newsletterActions.php" method="post" class="menu_with_options menuForm changeRecipientEmail" style="display:none" id="renameRecipientEmail-{$item.id}form">
			<input type="hidden" name="id" value="{$item.id}"/>
			<input type="hidden" name="newsletterAction" value="changeEmail"/>
			<input type="text" name="email" value=" Enter new email, then hit return" class="pageMenuInput greyedOut focus"/>
		</form>
		<form action="newsletterActions.php" method="post" class="menu_with_options menuForm changeRecipientName" style="display:none" id="renameRecipient-{$item.id}form">
			<input type="hidden" name="id" value="{$item.id}"/>
			<input type="hidden" name="newsletterAction" value="changeName"/>
			<input type="text" name="name" value=" Enter new name, then hit return" class="pageMenuInput greyedOut focus"/>
		</form>*}
			{*
				<div class="rightButtons">
					<a href="" id="{$item.id}||{$item.email}" class="deleteRecipient"><img src="graphics/deleteItem.png" alt=""/></a>
				</div>
				<img src="graphics/newsletter.png" height="25" alt=""/> {$item.name}</td>
			<td>{$item.email}</td>
			<td><input type="checkbox" name="" value="" {if $item.inactive!="yes"}checked="checked"{/if} id="{$item.id}" class="makeEmailInactive"/> {if $item.inactive!="yes"}Active{else}Innactive{/if}</td>
			<td>{if $item.fail_on_last_send=="yes"}<span style="color:#f00"><strong>FAILED</strong></span>{/if} {if $item.fail_on_last_send=="no"}<strong style="color:#1F5400">SENT OK</strong>{/if}</td>
			*}
	{/foreach}
	{if !$ajax || $searching || $initPane}
	<div class="clear insertNewItemsBefore"></div>
	<a href="50" class="showMoreItems">Show more images</a>
	{/if}
	
	<div id="subscriberCatsMenuList" style="display:none">
		{*<div class="fakeAddFormItem iconbarAddProductCategory">{$SetSeedLangs.New_Product_Category|htmlspecialchars}</div>*}
		<div class="responsiveListAddForm addSubscriberCategory hideOnReset" style="display:none">
		<div class="imageContextEditFieldset">
			<div class="imageContextEditLabel">{$SetSeedLangs.Subscriber_Category_Name|htmlspecialchars}</div>
			<div class="imageContextEditInputWrap"><input type="text" name="" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
		</div>

		</div>
	</div>