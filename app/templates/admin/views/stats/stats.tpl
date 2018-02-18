{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}
{assign var="month" value='F'|date}
{assign var="day" value='j'|date}
{assign var="dayending" value='S'|date}



	<div class="clearfix">
		<div id="stats" class="v2">
			<h2 id="statsHeading"><strong>{$SetSeedLangs.Statistics_For_1|htmlspecialchars}<sup>{$SetSeedLangs.st}</sup> - {$day}<sup>{$SetSeedLangs.$dayending}</sup> {$SetSeedLangs.$month}</strong><br/>{$SetSeedLangs.Comparisons_Taken}</h2>
			<div class="statsBox fullWidth">
				<p id="hitsSparksTitle"><strong>{$SetSeedLangs.Hits_Visitors_Day}</strong></p>
				<div id="hitsSparksFlot"><div style="width:100%;height:120px"></div></div>
				<div id="hitsSparksFlotLegend"></div>
			</div>
			<div class="statsColFifth">
				<div class="statsBox clearfix">			
					<p id="totalHitsTitle">{$SetSeedLangs.Total} <strong>{$SetSeedLangs.Hits}</strong></p>
					<p id="totalHits" class="statsNumbers"><span class="statNumbersLeft"><strong>{$stats.curMonthHits}</strong><br/>{$stats.lastMonthHits}</span> <span class="statTrend {$stats.hitsTrendDirection}">{$stats.hitsTrend}%</span></p>
				</div>
			</div>
			<div class="statsColFifth lastIfHalf">
				<div class="statsBox clearfix">			
					<p id="totalVisitorsTitle">{$SetSeedLangs.Total} <strong>{$SetSeedLangs.Visitors}</strong></p>
					<p id="totalVisitors" class="statsNumbers"><span class="statNumbersLeft"><strong>{$stats.curMonthVisitors}</strong><br/>{$stats.lastMonthVisitors}</span> <span class="statTrend {$stats.visitorsTrendDirection}">{$stats.visitorsTrend}%</span></p>
				</div>
			</div>
			<div class="statsColFifth">
				<div class="statsBox clearfix">			
					<p id="totalHitsDayTitle">{$SetSeedLangs.Avg} <strong>{$SetSeedLangs.Hits_Day}</strong></p>
					<p id="totalHitsDay" class="statsNumbers"><span class="statNumbersLeft"><strong>{$stats.curHitsDay}</strong><br/>{$stats.lastHitsDay}</span> <span class="statTrend {$stats.hitsDayTrendDirection}">{$stats.hitsDayTrend}%</span></p>
				</div>
			</div>
			<div class="statsColFifth lastIfHalf">
				<div class="statsBox clearfix">	
					<p id="totalVisitorsDayTitle">{$SetSeedLangs.Avg} <strong>{$SetSeedLangs.Visitors_Day}</strong></p>
					<p id="totalVisitorsDay" class="statsNumbers"><span class="statNumbersLeft"><strong>{$stats.curVisitorsDay}</strong><br/>{$stats.lastVisitorsDay}</span> <span class="statTrend {$stats.visitorsDayTrendDirection}">{$stats.visitorsDayTrend}%</span></p>
				</div>
			</div>
			<div class="statsColFifth last">
				<div class="statsBox clearfix">	
					<p id="totalHitsVisitorsTitle">{$SetSeedLangs.Hits} <strong>{$SetSeedLangs.Per_Visitor}</strong></p>
					<p id="hitsPerVisitorDay" class="statsNumbers"><span class="statNumbersLeft"><strong>{$stats.curHitsPerVisitorDay}</strong><br/>{$stats.lastHitsPerVisitorDay}</span> <span class="statTrend {$stats.hitsPerVisitorTrendDirection}">{$stats.hitsPerVisitorTrend}%</span></p>								
				</div>
			</div>
			<script type="text/javascript">
			{literal}
			$(function () {

			    var thisMonthHits = {
				    label: "{/literal}{$SetSeedLangs.Hits}{literal}",
				    data: [{/literal}{foreach from=$stats.dayByDayThisMonth item=day name=loop1}[{$smarty.foreach.loop1.iteration},{$day.hits}]{if !$smarty.foreach.loop1.last},{/if}{/foreach}{literal}]
					,color:"rgb(255,148,148)"
					,shadowSize:1
				  };
	
				var thisMonthVisits = {
				    label: "{/literal}{$SetSeedLangs.Visitors}{literal}",
				    data: [{/literal}{foreach from=$stats.dayByDayThisMonth item=day name=loop1}[{$smarty.foreach.loop1.iteration},{$day.visitors}]{if !$smarty.foreach.loop1.last},{/if}{/foreach}{literal}]
					,color:"rgb(110,209,255)"
					,shadowSize:1
				  };
	
				var lastMonthHits = {
				    data: [{/literal}{foreach from=$stats.dayByDayLastMonth item=day name=loop1}[{$smarty.foreach.loop1.iteration},{$day.hits}]{if !$smarty.foreach.loop1.last},{/if}{/foreach}{literal}]
					,color:"rgba(255,148,148,0.3)"
					,shadowSize:0
				  };
	
				var lastMonthVisits = {
				    data: [{/literal}{foreach from=$stats.dayByDayLastMonth item=day name=loop1}[{$smarty.foreach.loop1.iteration},{$day.visitors}]{if !$smarty.foreach.loop1.last},{/if}{/foreach}{literal}]
					,color:"rgba(110,209,255,0.3)"
					,shadowSize:0
				  };

			    $.plot($("#hitsSparksFlot div"), [ lastMonthVisits, lastMonthHits, thisMonthVisits, thisMonthHits ], {
					grid: {
					    show: true
					    ,color: "#ABABAB"
					    ,backgroundColor: null
					    ,borderWidth: 0
		
					}
					,yaxis: {
					    show: true
						,min:0
					}
					,xaxis: {
					    show: true
						,ticks:{/literal}{$stats.showDays}{literal}
						,tickDecimals:0
					  }
					,legend: {
					    show: true
					    ,noColumns: 4
					    ,backgroundOpacity: 0
						,container: $("#hitsSparksFlotLegend")
					  }
		
				});
			});
			{/literal}
			</script>

			<div class="clear"></div>
			<div class="statsColQuart">
				<div class="statsBox clearfix">
					<p id="browserTitle">{$SetSeedLangs.Top_5} <strong>{$SetSeedLangs.Browsers}</strong></p>
					<div id="top5Browsers"></div>
					<div id="top5browsersLegend"></div> <!-- end #top5browsersLegend -->
					<script type="text/javascript">
					var pieColour = new Array();
					pieColour[1] = "#ffd234";
					pieColour[2] = "#6ed1ff";
					pieColour[3] = "#ff9494";
					pieColour[4] = "#9fff75";
					pieColour[5] = "#cf8bff";
					{literal}
					$(function () {

						var top5Browsers = [
						{/literal}{foreach from=$stats.browsersArray item=browser name=loop1}
						{literal}{{/literal} 
						label: "{$browser.browser}"
						, data: {$browser.count}
						,color:pieColour[{$smarty.foreach.loop1.iteration}]
						{literal}}{/literal}{if !$smarty.foreach.loop1.last},{/if}
						{/foreach}{literal}
						  ];
					    $.plot($("#top5Browsers"), top5Browsers, {
							series: {
							     pie: { 
					                show: true
					                ,innerRadius: 0.8
					            }
					        }
						 	,legend: {
						        show: true
								,backgroundOpacity: 0
								,container:$("#top5browsersLegend")
						    }

						});
					});
					{/literal}
					</script>
				</div>
			</div>
			<div class="statsColQuart lastIfHalf">
				<div class="statsBox clearfix">
	
					<p id="osTitle"><strong>{$SetSeedLangs.Operating_System}</strong></p>
					<div id="osChart"></div>
					<div id="osChartLegend"></div> <!-- end #top5browsersLegend -->
					<script type="text/javascript">
					{literal}
					$(function () {

						var osChart = [
						{/literal}{foreach from=$stats.osArray item=browser name=loop1}
						{literal}{{/literal} label: "{$browser.os}", data: {$browser.count},color:pieColour[{$smarty.foreach.loop1.iteration}]{literal}}{/literal}{if !$smarty.foreach.loop1.last},{/if}
						{/foreach}{literal}
						  ];
					    $.plot($("#osChart"), osChart, {
							series: {
							     pie: { 
					                show: true
					                ,innerRadius: 0.8
					            }
					        }
						 	,legend: {
						        show: true
								,backgroundOpacity: 0
								,container:$("#osChartLegend")
						    }

						});
					});
					{/literal}
					</script>

				</div>
			</div>

			<div class="statsColQuart">
				<div class="statsBox clearfix">

					<p id="sourceTitle"><strong>{$SetSeedLangs.Visit_Source}</strong></p>
						<div id="sourceChart"></div>
						<div id="sourceChartLegend"></div>
						<script type="text/javascript">
						{literal}
						$(function () {

							var sourceChart = [
							{/literal}{foreach from=$stats.sourceArray item=browser name=loop1}
							{literal}{{/literal} label: "{$browser.type}", data: {$browser.count},color:pieColour[{$smarty.foreach.loop1.iteration}]{literal}}{/literal}{if !$smarty.foreach.loop1.last},{/if}
							{/foreach}{literal}
							  ];
						    $.plot($("#sourceChart"), sourceChart, {
								series: {
								     pie: { 
						                show: true
						                ,innerRadius: 0.8
						            }
						        }
							 	,legend: {
							        show: true
									,backgroundOpacity: 0
									,container:$("#sourceChartLegend")
							    }

							});
						});
						{/literal}
						</script>
				</div>
			</div>
			<div class="statsColQuart last lastIfQuart">
				<div class="statsBox clearfix">
					<p id="engineTitle">{$SetSeedLangs.Top_5} <strong>{$SetSeedLangs.Search_Engines}</strong></p>
					<div id="engineChart"></div>
					<div id="engineChartLegend"></div>
					<script type="text/javascript">
					{literal}
					$(function () {

						var engineChart = [
						{/literal}{foreach from=$stats.searchArray item=browser name=loop1}
						{literal}{{/literal} label: "{$browser.engine}", data: {$browser.count},color:pieColour[{$smarty.foreach.loop1.iteration}]{literal}}{/literal}{if !$smarty.foreach.loop1.last},{/if}
						{/foreach}{literal}
						  ];
					    $.plot($("#engineChart"), engineChart, {
							series: {
							     pie: { 
					                show: true
					                ,innerRadius: 0.8
					            }
					        }
						 	,legend: {
						        show: true
								,backgroundOpacity: 0
								,container:$("#engineChartLegend")
						    }

						});
					});
					{/literal}
					</script>
				</div>
			</div>
			<div class="clear"></div>
			<div class="statsColHalf">
				<div class="statsBox clearfix">
					<p id="topPagesTitle">{$SetSeedLangs.Top} <strong>{$SetSeedLangs.Pages}</strong></p>
					<div id="topPagesList">
						{foreach from=$stats.topPagesList item=toppage key=key name=loop1}
						{if $toppage.pagename}
						<p class="{cycle values=",alt" name="1"}"><a href="{$toppage.url|htmlspecialchars}" title="{$toppage.pagename|htmlspecialchars}"><span class="pageListNumber">{$toppage.count}</span><span class="overflowEllipsis">{$toppage.pagename|htmlspecialchars}</span></a></p>
						{/if}
						{/foreach}
					</div>
				</div>
			</div>
			<div class="statsColHalf last">
				<div class="statsBox clearfix">
	
					<p id="topReferrersTitle">{$SetSeedLangs.Top} <strong>{$SetSeedLangs.Referrers}</strong></p>
					<div id="topReferrersList">
						{foreach from=$stats.topReferrersList item=topref key=key name=loop1}
						<p class="{cycle values=",alt" name="2"}" title="{$topref.referrer|htmlspecialchars}">{if $topref.url|htmlspecialchars}<a href="{$topref.url|htmlspecialchars}" title="{$topref.referrer|htmlspecialchars}">{else}<span class="fakeA" title="{$topref.referrer|htmlspecialchars}">{/if}<span class="pageListNumber">{$topref.count}</span><span class="overflowEllipsis">{$topref.referrer|htmlspecialchars}</span>{if $topref.url}</a>{else}</span>{/if}</p>
						{/foreach}
					</div>
				</div>
			</div>
		</div>
	</div>
