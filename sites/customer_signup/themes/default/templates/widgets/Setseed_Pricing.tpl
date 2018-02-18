<div id="swb_plans">
						<div class="swb_features_store_plan" data-plan-name="free" data-plan-features="{setseed_website_builder action=config value=plan_includes plan=free}" data-plan-price="{setseed_website_builder action=config value=plan_price plan=free}" data-plan-price-annual="{setseed_website_builder action=config value=plan_price_annual plan=free}">
							<h3>Free
								<span class='monthly'>
									<span class="swb_plan_price">
									{setseed_website_builder action=config value=currency_sym}<span class="swb_plan_price_val">{setseed_website_builder action=config value=plan_price plan=free} </span>
									/month</span>
								</span>
								<span class='yearly'>
									<span class="swb_plan_price">
									{setseed_website_builder action=config value=currency_sym}<span class="swb_plan_price_val">{setseed_website_builder action=config value=plan_price_annual plan=free} </span>
									/year</span>
								</span>

							</h3>
							<p class="swb_plan_feature">Create up to 3 pages</p>
							<p class="swb_plan_feature">Create up to 3 blog articles</p>
							<p class="swb_plan_feature">Add one product</p>
							<p class="swb_plan_feature">Add videos</p>

							<p class="swb_plan_choose_button"><button>Choose this plan</button></p>
							<p class="swb_plan_selected"><span>Current plan</span></p>
							{if $default_plan==""}
							<p class="swb_plan_remove"><span>Cancel this plan</span></p>
							{/if}
						</div>
					<div class="swb_features_store_plan swb_plan_featured swb_plan_disabled" data-plan-name="premium" data-plan-features="{setseed_website_builder action=config value=plan_includes plan=premium}" data-plan-price="{setseed_website_builder action=config value=plan_price plan=premium}" data-plan-price-annual="{setseed_website_builder action=config value=plan_price_annual plan=premium}">
						<p class="swb_plan_recommended">Recommended</p>
						<h3>Premium
					
					
							
							<span class='monthly'>
								<span class="swb_plan_price">
								{setseed_website_builder action=config value=currency_sym}<span class="swb_plan_price_val">{setseed_website_builder action=config value=plan_price plan=premium} </span>
								/month</span>
							</span>
							<span class='yearly'>
								<span class="swb_plan_price">
								{setseed_website_builder action=config value=currency_sym}<span class="swb_plan_price_val">{setseed_website_builder action=config value=plan_price_annual plan=premium} </span>
								/year</span>
							</span>
						</h3>
						<p class="swb_plan_feature">Unlimited pages and remove ads</p>
						<p class="swb_plan_feature">Unlimited products</p>
						<p class="swb_plan_feature">Unlimited blog articles</p>
						<p class="swb_plan_feature">Galleries</p>
						<p class="swb_plan_feature">Contact Forms</p>
						<p class="swb_plan_feature">Calendar</p>

						<p class="swb_plan_choose_button"><button>Choose this plan</button></p>
						<p class="swb_plan_selected"><span>Current plan</span></p>
						{if $default_plan==""}
						<p class="swb_plan_remove"><span>Cancel this plan</span></p>
						{/if}

					</div>
				</div>
				