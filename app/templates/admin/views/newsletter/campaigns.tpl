<div class="clear"></div>
{if $campaigns}
<div id="campaignHeader" class="clear">
	<div class="campaignCell title">{$SetSeedLangs.Subject}</div>
	<div class="campaignCell sentrecips">{$SetSeedLangs.Sent_v_Recips}</div>
	<div class="campaignCell openrate">{$SetSeedLangs.Open_Rate}</div>
	<div class="campaignCell optouts">{$SetSeedLangs.Optouts}</div>
</div>
{foreach from=$campaigns item=campaign key=key name=loop1}
<div class="campaign clearfix {if $campaign.cancelled}cancelled{/if}">
	{if $campaign.complete==0 && $campaign.cancelled==0}
	<div class="campaignBg" style="width:{$campaign.pccomplete}%"></div>
	{/if}
	<div class="campaignCell title"><strong>{$campaign.subject}</strong>{if $campaign.cancelled} ({$SetSeedLangs.Aborted}){/if}<br/>
{$campaign.date_created}<br/>
<a href="{$campaign.webversion}" target="_blank">{$SetSeedLangs.View_Webversion}</a>
	{if $campaign.complete==0 && $campaign.cancelled==0}
<span class="a abort" abortid="{$campaign.id}">{$SetSeedLangs.Abort_Remaining}</span>	
	{/if}
</div>
	<div class="campaignCell sentrecips">{$campaign.sent} / {$campaign.total}</div>
	<div class="campaignCell openrate">{$campaign.openrate}</div>
	<div class="campaignCell optouts">{$campaign.optouts}</div>
</div>
{/foreach}
{else}
<p id="noCampaigns">{$SetSeedLangs.No_Campaigns}</p>
{/if}