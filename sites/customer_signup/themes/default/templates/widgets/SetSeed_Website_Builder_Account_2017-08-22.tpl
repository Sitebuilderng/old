{if $smarty.get.paymentemails_kerw324ew}
{setseed_website_builder action=emailreminder}
{/if}
{* if new user registering *}
{if $smarty.post.theme}
	{setseed_website_builder
		action=register
		domain=$smarty.post.domain
		email=$smarty.post.email
		theme=$smarty.post.theme
		import_data=$smarty.post.import_data
	}
{/if}
{* If resend email request*}
{if $smarty.get.resend} 
	{setseed_website_builder action=resend email=$smarty.get.resend } 
{/if}
{*
	If package save
*}
{if $smarty.get.packagesave}
	{setseed_website_builder
		action=packagesave
		data=$smarty.get.data
		plan=$smarty.get.plan
		websiteid=$smarty.get.websiteid
	}
{/if}

{*
	If change pass
*}
{if $smarty.post.changepass}
	{setseed_website_builder
		action=changepass
	}
{/if}
{*
	If payment authredirect
*}
{if $smarty.get.pay}
	{setseed_website_builder
		action=pay
	}
{/if}

{*
	Check to see if it's a password reset link
*}
{if $smarty.get.reset}
	{setseed_website_builder
		action=reset
		guid=$smarty.get.reset
	}
{/if}
{*
	Check to see if someone is logging out
*}
{if $smarty.get.action=="logout"}
	{setseed_website_builder
		action=logout
	}
{/if}


{*
	Check to see if its a cron fire
*}
{if $smarty.get.action=="collectpayments-jsknvfjk-jkdncsdd"} 
	{setseed_website_builder
		action=cron
	}
{/if}


{*
	Check to see if someone is trying to login.
*}
{if $smarty.post.email && !$smarty.post.domain && !$smarty.post.theme}
	{setseed_website_builder
		action=login
		email=$smarty.post.email
		pass=$smarty.post.pass
		keep=$smarty.post.keep
		forgot=$smarty.post.forgot
	}
{/if}
{if $smarty.post.coupon}
	{setseed_website_builder
		action=applycoupon
		usersid=$swb_logged_in_id
		coupon=$smarty.post.coupon
	}
{/if}


{*if admin updating *}
{if $smarty.request.update}
{setseed_website_builder
	action=admin_update
}
{/if}


{*if admin deleting *}
{if $smarty.request.delete}
{setseed_website_builder
	action=admin_delete
}
{/if}


{*if admin deleting account *}
{if $smarty.request.delete_account}
{setseed_website_builder
	action=admin_delete_account
}
{/if}

{*
	Check to see token sesssion is already set
*}
{if $smarty.session.token || $smarty.cookies.token && !$smarty.get.verify && !$smarty.post.email}
	{setseed_website_builder
		action=session
	}
{/if}

{*
	If create billing agreement (success from payment auth)
*}
{if $smarty.get.createbillingagreement}
	{setseed_website_builder
		action=createbillingagreement
		usersid=$swb_logged_in_id
		token=$smarty.get.token
		ref=$smarty.post.trxref
	}
{/if}


{*
	User is logged in
	================================================
*}

{if $swb_logged_in && $swb_admin==false}
{if $swb_logged_in && $swb_admin==false && !$smarty.get.addsite && !$smarty.get.changepass && !$swb_logged_in_coupon_pc}
	<p id="swb_coupon_link" data-original-text="Enter coupon code">{if $smarty.post.coupon&&!$swb_coupon_ok}Cancel{else}Enter coupon code{/if}</p>
{/if}
<p id="swb_tabs"><a href="{setseed_website_builder action=config value=account_url}" {if $swb_logged_in && $swb_admin==false && !$smarty.get.addsite && !$smarty.get.changepass}class="current"{/if}>Manage Websites</a><a href="{setseed_website_builder action=config value=account_url}?changepass=true" {if $smarty.get.changepass}class="current"{/if}>Change Password</a><a href="{setseed_website_builder action=config value=account_url}?action=logout">Logout</a></p>
{/if}
{if $swb_logged_in && $swb_admin==true}
<p id="swb_tabs"><a href="{setseed_website_builder action=config value=account_url}" {if $swb_logged_in && $swb_admin==true && !$smarty.get.addsite && !$smarty.get.changepass}class="current"{/if}>View Accounts</a><a href="{setseed_website_builder action=config value=account_url}?changepass=true" {if $smarty.get.changepass}class="current"{/if}>Change Password</a><a href="{setseed_website_builder action=config value=account_url}?action=logout">Logout</a></p>
{/if}
{if $swb_logged_in && !$smarty.get.addsite && ($smarty.get.changepass || $smarty.post.oldpass)}
	<form method="post" action="{setseed_website_builder action=config value=account_url}?changepass=true" id="swb_change_pass">
		<input type="hidden" name="changepass" value="test">
		{if $swb_errors_change}
			{foreach from=$swb_errors_change item=error key=key name=loop1}
				<p class="Icon_Alert">{$error}</p>
			{/foreach}
		{/if}
		{if $swb_password_change}
			<p class="Icon_Tick">Password changed</p>
		{/if}
		<div class="row">
			<div class='column oneCol first'>
				<label>Current password:
					<input type="password" name="oldpass" value=""/>
				</label>
			</div>
			<div class='column oneCol lastiftwo'>
				<label id="swb_password">New Password:
				<input type="password" name="newpass1" />
				</label>
			</div>
			<div class="cleariftwo"></div>
			<div class='column oneCol firstiftwo'>
				<label>New password (again):
					<input type="password" name="newpass2" />
				</label>
			</div>
			<div class='column oneCol last'>
				<noscript>
				<input type="submit" value="Login"/>
				</noscript>
				<p class="Button_Large submit_form"><a href="#">Change Password</a></p>
			</div>
		</div>

	</form>
{/if}
{if $swb_logged_in && $swb_admin==false && !$smarty.get.addsite && !$smarty.get.changepass}
	{*
		Login successful or user is already logged in.
	*}

		{$editable.Logged_In_Top}
	{if $smarty.get.nobilling=="true"}
			{setseed_website_builder action=generate_trxref}
		<div id="nobilling">
			<div id="nobillinginner">
			<h2>No payment method found</h2>
			<p>Before your new features can be applied you need to add a payment method to your account. Please set-up recurring billing via PayStack to continue.</p>
			<p style="font-size:.8em;">Your will be charged N100 to store your payment details<br />
			<span style="font-size:.8em;style:italic">(required by payment processor)</span>
			</p>
			 <form action="{setseed_website_builder action=config value=account_url}?createbillingagreement=true" method="POST" >								<input type="hidden" name="trxref" value={$trxref} />
				<script
					src="https://js.paystack.co/v1/inline.js" 
					data-key="{$paystack_pk}"
					data-email="{$swb_logged_in_email}"
					data-amount="10000"
					data-ref="{$trxref}"
				>
				</script>
      </form>
		{*<	<p class="Button_Large"><a href="{setseed_website_builder action=config value=account_url}?paystack=true">Continue to PayStack</a></p>
      <p class="Button_Large"><a href="{setseed_website_builder action=config value=account_url}?pay=true">Continue to PayPal</a></p>*}
			</div>
		</div>
	{/if}


	{if $smarty.get.createbillingagreement}
		{if $billingagreement}
		<div id="nobilling">
			<div id="nobillinginner">
			<p class="Icon_Tick">You have successfully added a payment method.</p>
			<p class="Button_Large"><a href="{setseed_website_builder action=config value=account_url}">Done</a></p>
			</div>
		</div>
		{else}
			<div id="nobilling">
				<div id="nobillinginner">
				<p class="Icon_Alert">{$billingmessage}</p>
				<p class="Button_Large"><a href="{setseed_website_builder action=config value=account_url}?nobilling=true">Try Again</a></p>
				</div>
			</div>
		{/if}
	{/if}
	{if $swb_errors_subscribe}
		{foreach from=$swb_errors_subscribe item=error key=key name=loop1}
			<p class="Icon_Alert">{$error}</p>
		{/foreach}
	{/if}


	<div class="swb_coupon_code" {if $smarty.post.coupon&&!$swb_coupon_ok}style="display:block"{/if}>
		<h4>Enter coupon code:</h4>

		<form method="post" class="">
			<p class="swb_coupon">Coupon code: <input type="text" name="coupon" value="{$smarty.post.coupon}" {if $smarty.post.coupon&&!$swb_coupon_ok}class="focusonload"{/if}/></p>
			{if $swb_errors_coupon}
				{foreach from=$swb_errors_coupon item=error key=key name=loop1}
					<p class="Icon_Alert">{$error}</p>
				{/foreach}
			{/if}
			<p class="Button_Large submit_form"><a href="#">Apply coupon</a></p>
		</form>


	</div>
	{if $swb_logged_in_coupon_pc}
		<input id="couponvalue" value="{$swb_logged_in_coupon_pc}" type="hidden" />
		<p class="Icon_Tick" id="swb_coupon_status">Your '{$swb_logged_in_coupon_pc}% off' coupon code is currently active until {$swb_logged_in_coupon_expires}.</p>
	{/if}
	{if $websites}
	<input type="hidden" id="swb_logged_in_agreementid" value="{$swb_logged_in_agreementid}">
	<ul class="swb_websites">
		{foreach from=$websites|@array_reverse item=website key=key name=loop1}
		<li class="clearfix {if $smarty.foreach.loop1.iteration is div by 2}endofrow2{/if} {if $smarty.foreach.loop1.iteration is div by 3}endofrow{/if}">
		{if $website.failed}
		<strong>Error:</strong> {$website.domain}<br/>Please contact support
		{else}
			<div class="swb_webthumb clearfix"><img src="/graphics/swb_thumb_titlebar.png" class="swb_thumb_titlebar"/><img src="/graphics/swb_thumb_scaffold.png" class="swb_thumb_scaffold"/><img class="swb_thumb_img" src="{$website.thumb}" /></div>
			<div class="swb_website_buttons">
				<p class="swb_title"><a href="http://{$website.domain}.{$primary_url}" title="http://{$website.domain}">http://{$website.domain}</a></p>
				<p class="swb_button Button_Large first"><a href="http://{$website.domain}.{$primary_url}/admin" target="_blank">Manage Website</a></p>
				<p class="swb_button Button_Large"><a href="#" class="swb_show_features_store" data-annual="{$website.annual}" data-plan="{$website.plan}" data-unlimited_pages="{$website.unlimited_pages}" data-blog="{$website.blog}" data-unlimited_blog="{$website.unlimited_blog}" data-mailing_lists="{$website.mailing_lists}" data-shop="{$website.shop}" data-unlimited_products="{$website.unlimited_products}" data-livechat="{$website.livechat}" data-video="{$website.video}" data-galleries="{$website.galleries}" data-contact_forms="{$website.contact_forms}" data-calendar="{$website.calendar}" data-websiteid="{$website.id}" data-free-trial="{$website.free_trial}">Features Store</a></p></form>

			</div>
		{/if}
		</li>
		{/foreach}
	</ul>
	<div id="swb_features_store" class="">
		<div id="swb_features_store_inner">
			<div id="swb_features_store_features">
				<h2>Features Store</h2>
				<p style="font-size:1.2em;">You can add or remove features at any time. You will not be charged until you click 'Save' below. <br />You will be immediately charged a partial amount based on the number of days until your next billing day.</p>
					<div class="hr"></div>
					<div id="free_trial_full" style="display:none">
					<p class="Button_Large"><a href="" id="addPaymentMethod">Add payment method</a></p>
					<p>You are enjoying a 30 day free trial. Please add a payment method now to ensure your website stays live at the end of the trial.</p>

					</div>
					<div id="free_trial" style="display:none">
					<p>You are enjoying a 30 day free trial. Your payment method will be charged at the end of your 30 day trial.</p>
					</div>

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
				<div class="hr"></div>
				<div class="swb_features_store_feature swb_feature_disabled" data-feature-name="unlimited_pages">
					<div class="menus swb_icon"></div>
					<h3>Unlimited Pages and Remove Ads</h3>
					<p class="swb_feature_info">Removes the ads that display on your site and removes the {setseed_website_builder action=config value=lite_mode_pages} page limit.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price">{setseed_website_builder action=config value=currency_sym}
						<span class='monthly'><span class="swb_feature_price_val">{setseed_website_builder action=config value=feature_price_unlimited_pages}</span>/month</span>
						<span class='yearly'><span class="swb_feature_price_val_annual">{setseed_website_builder action=config value=feature_price_unlimited_pages_annual}</span>/year</span></p>
				</div>
				<div class="swb_features_store_feature lastoftwo swb_feature_disabled" data-feature-dependents="unlimited_blog" data-feature-name="blog">
					<div class="blog swb_icon"></div>
					<h3>Blog</h3>
					<p class="swb_feature_info">Publish articles in a blog format with user comments, categories and more.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price">Free (Add up to {setseed_website_builder action=config value=lite_mode_blogs} articles)</p>
				</div>
				<div class="swb_features_store_feature swb_feature_disabled" data-feature-dependent="blog"  data-feature-name="unlimited_blog">
					<div class="blog swb_icon"><div class="swb_icon_unlimited">Unlimited</div></div>
					<h3>Unlimited Blog Articles</h3>
					<p class="swb_feature_info">Create unlimited blog articles.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price">{setseed_website_builder action=config value=currency_sym}
						<span class='monthly'><span class="swb_feature_price_val">{setseed_website_builder action=config value=feature_price_unlimited_blog}</span>/month</span>
						<span class='yearly'><span class="swb_feature_price_val_annual">{setseed_website_builder action=config value=feature_price_unlimited_blog_annual}</span>/year</span>
					</p>
				</div>
				<div class="swb_features_store_feature last swb_feature_disabled" data-feature-name="mailing_lists">
					<div class="email swb_icon"></div>
					<h3>Email Mailing Lists</h3>
					<p class="swb_feature_info">Collect subscribers through your website and use built in tools to send out bulk messages to your list.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price">{setseed_website_builder action=config value=currency_sym}
						<span class='monthly'><span class="swb_feature_price_val">{setseed_website_builder action=config value=feature_price_newsletter}</span>/month</span>
						<span class='yearly'><span class="swb_feature_price_val_annual">{setseed_website_builder action=config value=feature_price_newsletter_annual}</span>/year</span>
					</p>
				</div>
				<div class="swb_features_store_feature swb_feature_disabled" data-feature-dependents="unlimited_products" data-feature-name="shop">
					<div class="ecommerce swb_icon"></div>
					<h3>Shop</h3>
					<p class="swb_feature_info">Add products with options, stock level, multi-tier pricing and more and sell them with a shopping basket and integrated online payments via PayStack.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					{capture name=products}{setseed_website_builder action=config value=lite_mode_products}{/capture}
					<p class="swb_features_price">Free (add up to {$smarty.capture.products} product{if $smarty.capture.products > 1}s{/if})</p>
				</div>
				<div class="swb_features_store_feature lastoftwo swb_feature_disabled" data-feature-dependent="shop" data-feature-name="unlimited_products">
					<div class="ecommerce swb_icon"><div class="swb_icon_unlimited">Unlimited</div></div>
					<h3>Unlimited Shop Products</h3>
					<p class="swb_feature_info">Add unlimited products</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price">{setseed_website_builder action=config value=currency_sym}
						<span class='monthly'><span class="swb_feature_price_val">{setseed_website_builder action=config value=feature_price_shop_unlimted}</span>/month</span>
						<span class='yearly'><span class="swb_feature_price_val_annual">{setseed_website_builder action=config value=feature_price_shop_unlimted_annual}</span>/year</span>
					</p>
				</div>
				<div class="swb_features_store_feature swb_feature_disabled" data-feature-name="livechat">
					<div class="livecaht swb_icon"></div>
					<h3>Live-chat</h3>
					<p class="swb_feature_info">Allow visitors to initiate an instant message chat with you over your website.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price">{setseed_website_builder action=config value=currency_sym}
						<span class="monthly"><span class="swb_feature_price_val">{setseed_website_builder action=config value=feature_price_livechat}</span>/month</span>
						<span class='yearly'><span class="swb_feature_price_val_annual">{setseed_website_builder action=config value=feature_price_livechat_annual}</span>/year</span>
					</p>

				</div>
				<div class="swb_features_store_feature last swb_feature_disabled" data-feature-name="video">
					<div class="video swb_icon"></div>
					<h3>Video</h3>
					<p class="swb_feature_info">Upload and host video directly on your website.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					{capture name=videos}{setseed_website_builder action=config value=feature_price_video}{/capture}
					{capture name=videosannual}{setseed_website_builder action=config value=feature_price_video_annual}{/capture}
					<p class="swb_features_price">{if $smarty.capture.videos!="0.00"}{setseed_website_builder action=config value=currency_sym}
						<span class="monthly"><span class="swb_feature_price_val">{$smarty.capture.videos}</span>/month</span>
						<span class="yearly"><span class="swb_feature_price_val_annual">{$smarty.capture.videosannual}</span>/year</span>
					{else}Free{/if}</p>

				</div>
				<div class="swb_features_store_feature swb_feature_disabled" data-feature-name="galleries">
					<div class="images-galleries swb_icon"></div>
					<h3>Galleries</h3>
					<p class="swb_feature_info">Create stylish galleries based on batches of images. Upload multiple images at once and the system does the rest.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price">{setseed_website_builder action=config value=currency_sym}
						<span class='monthly'><span class="swb_feature_price_val">{setseed_website_builder action=config value=feature_price_galleries}</span>/month</span>
						<span class='yearly'><span class="swb_feature_price_val_annual">{setseed_website_builder action=config value=feature_price_galleries_annual}</span>/year</span>
					</p>

				</div>
				<div class="swb_features_store_feature lastoftwo swb_feature_disabled" data-feature-name="contact_forms">
					<div class="contact-form swb_icon"></div>
					<h3>Contact Forms</h3>
					<p class="swb_feature_info">Create advanced contact forms to protect your email address and collect information from visitors.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price">{setseed_website_builder action=config value=currency_sym}
						<span class="monthly"><span class="swb_feature_price_val">{setseed_website_builder action=config value=feature_price_forms}</span>/month</span>
						<span class="yearly"><span class="swb_feature_price_val_annual">{setseed_website_builder action=config value=feature_price_forms_annual}</span>/year</span>
					</p>

				</div>
				<div class="swb_features_store_feature swb_feature_disabled" data-feature-name="calendar">
					<div class="calendars swb_icon"></div>
					<h3>Calendars</h3>
					<p class="swb_feature_info">Add events to beautiful calendars and display them directly on your website.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price">{setseed_website_builder action=config value=currency_sym}
						<span class="monthly"><span class="swb_feature_price_val">{setseed_website_builder action=config value=feature_price_calendar}</span>/month</span>
						<span class="yearly"><span class="swb_feature_price_val_annual">{setseed_website_builder action=config value=feature_price_calendar_annual}</span>/year</span>
					</p>

				</div>
				<div class="swb_features_store_feature last swb_feature_disabled lastofall" data-feature-name="unlimited_staff">
					<div class="admin swb_icon"><div class="swb_icon_unlimited">Unlimited</div></div>
					<h3>Unlimited Staff Accounts</h3>
					<p class="swb_feature_info">Removes the {setseed_website_builder action=config value=lite_mode_staff} staff account limit.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price">{setseed_website_builder action=config value=currency_sym}
						<span class="monthly"><span class="swb_feature_price_val">{setseed_website_builder action=config value=feature_price_staff}</span>/month</span>
						<span class="yearly"><span class="swb_feature_price_val_annual">{setseed_website_builder action=config value=feature_price_staff_annual}</span>/year</span>
					</p>

				</div>
			</div>
			<div id="swb_features_store_purchase">
				<button id="swb_save_package" style="display:none">Save</button>
				<div id="swb_package_price"><span class="originalValue">{setseed_website_builder action=config value=currency_sym}<span id="swb_package_price_value">0.00</span></span><span class="discountValue">{setseed_website_builder action=config value=currency_sym}<span id="swb_package_price_value_discount">0.00</span></span><span class="taxComment">{setseed_website_builder action=config value=tax_comment}</span><span id="swb_pacakge_month">per <span class='monthly'>30</span><span class='yearly'>365</span> days</span></div>
				<button id="swb_cancel_package">Close</button>
			</div>
			<div id="swb_features_loader">
				<div class="loader loader-7"></div>
			</div>
			<div id="swb_features_success">
				<p><span>Success. Your subscription has been updated.</span></p>
			</div>
		</div>
	</div>
	{/if}

	{$editable.Logged_In_Bottom}
{/if}
{if $smarty.get.addsite || $smarty.request.theme || $swb_register_success}

	{if $swb_logged_in}
		{$editable.Above_New_Site_Logged_In}
	{/if}
	{if $swb_register_success}
		{$editable.Signup_Thanks}
	{else}
		{if !$swb_logged_in}
		{$editable.Above_New_Site}
		{/if}
		<form method="post" action="{setseed_website_builder action=config value=signup_page}?addsite=true" id="swb_add_site" class="clearfix">

		{if $swb_errors}
			{foreach from=$swb_errors item=error key=key name=loop1}
				<p class="Icon_Alert">{$error}</p>
			{/foreach}
		{/if}

		{if !$swb_logged_in}

			<div class="row">
				<div class='column threeThirdsCol first'>

					<label>Choose your domain name<br/>
					<div id="swb_signup_domain_wrap">
					<span id="swb_http">http://</span>
					<input type="text" name="domain" value="{$smarty.post.domain|htmlspecialchars|strip_tags}" id="swb_add_site_input"/>
					</div>
					</label>
					{if $smarty.request.theme}

						<p>Theme: <strong>{$smarty.request.theme_text|htmlspecialchars|strip_tags}</strong></p>
						<input type="hidden" name="theme" value="{$smarty.request.theme|htmlspecialchars|strip_tags}" />
						<input type="hidden" name="theme_text" value="{$smarty.request.theme_text|htmlspecialchars|strip_tags}" />
						{if $smarty.request.import_data}
						<input type="hidden" name="import_data" value="{$smarty.request.import_data|htmlspecialchars|strip_tags}" />
						{/if}
						

					{else}
						<input type="hidden" name="theme" value="global_elegant">
					{/if}

				</div>
				<div class='column threeThirdsCol'>
					<label>Your Email Address:<br/>
					<input type="text" name="email" value="{$smarty.post.email}" {if $setseed_website_builder_errors.email}class="error"{/if} />
					</label>
				</div>
				<div class='column threeThirdsCol last'>
					<noscript>
					<input type="submit" value="Add new site"/>
					</noscript>
					<p class="Button_Large submit_form"><a href="#">Create new website</a></p>

				</div>
			</div>
		{else}
			<div class="row">
			<div class='column twoCol first'>
					<label>Domain name<br/>
					<div id="swb_signup_domain_wrap">
					<span id="swb_http">http://</span>
					<input type="text" name="domain" value="{$smarty.post.domain|htmlspecialchars|strip_tags}" id="swb_add_site_input"/>
					</div>
					</label>
					{if $smarty.request.theme}

						<p>Theme: <strong>{$smarty.request.theme_text|htmlspecialchars|strip_tags}</strong></p>
						<input type="hidden" name="theme" value="{$smarty.request.theme|htmlspecialchars|strip_tags}" />
						<input type="hidden" name="theme_text" value="{$smarty.request.theme_text|htmlspecialchars|strip_tags}" />
						{if $smarty.request.import_data}
						<input type="hidden" name="import_data" value="{$smarty.request.import_data|htmlspecialchars|strip_tags}" />
						{/if}
						
					{else}
						<input type="hidden" name="theme" value="global_elegant">
					{/if}
			</div>
			<div class='column twoCol last'>
				<noscript>
				<input type="submit" value="Add new site"/>
				</noscript>
				<p class="Button_Large submit_form"><a href="#">Create new website</a></p>
				<p id="swb_add_site_info">Immediate setup. 100% Free!</p>
			</div>
			</div>
		{/if}

		</form>
		{if !$swb_logged_in}
			{$editable.Below_New_Site}
		{/if}
	{/if}
{/if}
{if $swb_logged_in && $swb_admin==true && !$smarty.post.coupon_quantity && !$smarty.get.changepass && !$smarty.post.oldpass}
	<p>Welcome, Admin.</p>
	{if $swb_errors}
		{foreach from=$swb_errors item=error key=key name=loop1}
			<p class="Icon_Alert">{$error}</p>
		{/foreach}
	{/if}
	{if $swb_oks}
		{foreach from=$swb_oks item=ok key=key name=loop1}
			<p class="Icon_Tick">{$ok}</p>
		{/foreach}
	{/if}
	<div class="row">
	<div class='column twoThirds first'>
		{if $users}
		<ul class="swb_websites_admin">
		{foreach from=$users|@array_reverse item=user key=key name=loop1}
		<li>
			{if !$user.websites}
			<a style="float:right;" href="{setseed_website_builder action=config value=account_url}?delete_account={$user.id}">Delete Account</a>
			{/if}
			<strong>Email: {$user.email} Joined: {$user.joined}</strong><br/>
			{if $user.websites}
				<ul style="margin:20px 0 10px;">
					{foreach from=$user.websites|@array_reverse item=website key=key name=loop1}
					<li style="background:#ccc;margin:10px 0;padding:8px 10px;border-radius:3px;">
						<a style="float:right" href="{setseed_website_builder action=config value=account_url}?delete={$website.id}" onclick="{literal}if (confirm('Are you sure you want to remove this website?')) { return true; } else { return false; }{/literal}">Delete Website</a>
						<form style="margin:0;" action="{setseed_website_builder action=config value=account_url}" method="post">
							<input type="hidden" name="update" value="{$website.id}"/>
								<input style="margin:0;font-size:14px;color:#000;border-radius:3px;border:none;width:300px;float:left;box-shadow:inset 2px 2px 2px rgba(0,0,0,0.3)" type="text" name="domain" value="{$website.domain}"/>
								<input type="submit" value="Update" style="margin:1px 0 10px 5px;padding:6px 10px; 6px"/>
						</form>
						<p style="margin:0;">(Status: {strip}
						{if $website.valid}
							{if $website.free_trial}
								Free Trial
							{else}
								Currently Subscribed
							{/if}
						{else}
							{if $website.free_trial}
								Free Trial Ended
							{else}
								Subscription Cancelled
							{/if}
						{/if}
						{/strip})
						</p>
						{if $website.failed}
						<p style="margin:0;" class="Button_Small"><strong>Error:</strong> <a href="" class="swb_show_debug">Show debug info</a></p> <pre style="display:none">{$website.errors}</pre>
						{/if}
					</li>
					{/foreach}
				</ul>
			{/if}
		</li>
		{/foreach}
		</ul>
		{/if}
	</div>
	<div class='column thirdsCol last'>
		<form method="post" target="_blank" class="swb_side_form">
			<p>Generate Coupons</p>
			<label>Months:</label>
			<input type="text" value="6" name="coupon_months" style="width:100px"/>
			<label>Percentage Discount:</label>
			<input type="text" value="50" name="coupon_discount" style="width:100px"/>
			<label>Number of codes to generate:</label>
			<input type="text" value="10" name="coupon_quantity" style="width:100px"/>
			<input type="submit" value="Generate Coupons"/>
		</form>
	</div>
	</div>



{/if}
{if $smarty.post.coupon_quantity && $swb_logged_in && $swb_admin==true}
	{setseed_website_builder
		action=coupon_gen
		discount=$smarty.post.coupon_discount
		quantity=$smarty.post.coupon_quantity
		months=$smarty.post.coupon_months
	}

	<h2>Your coupons:</h2>
	<p>
	{foreach from=$coupon_codes item=code}

		{$code}<br/>

	{/foreach}
	</p>

{/if}

{*
	User is NOT logged in and not an email verify page
	==================================================
*}

{if !$swb_logged_in && !$smarty.get.verify && !$smarty.get.addsite && !$swb_register_success}
	{$editable.Above_Login}
	<form method="post" id="swb_login">
	{if $swb_errors}
		{foreach from=$swb_errors item=error key=key name=loop1}
			<p class="Icon_Alert">{$error}</p>
		{/foreach}
	{/if}
	{if $smarty.get.resetdone}
	<p class="Icon_Alert">Your password has been reset and your new password has been emailed to you.</p>
	{/if}
	<div class="row">
		<div class='column threeThirdsCol first'>

			<label>Email:
				<input type="text" name="email" {if $swb_login_errors.email}class="error"{/if} value="{$smarty.post.email}"/>
			</label>
			<fieldset>
				<label>Keep me logged in
					<input type="checkbox" name="keep" value="true"/>
				</label>
			</fieldset>
		</div>
		<div class='column threeThirdsCol'>
			<label id="swb_password">Password:
			<input type="password" name="pass" {if $swb_login_errors.pass}class="error"{/if} />
			</label>
			<fieldset>
				<label>I’ve forgotten my password.
					<input type="checkbox" name="forgot" value="true" id="swb_forgot"/>
				</label>
			</fieldset>
		</div>
		<div class='column threeThirdsCol last'>
			<noscript>
			<input type="submit" value="Login"/>
			</noscript>
			<p class="Button_Large submit_form"><a href="#">Login</a></p>
		</div>
	</div>





	</form>
		{$editable.Below_Login}
{/if}



{*
	Check to see if someone is trying to login after verifying their email (choosing a password for the first time).
*}
{if $smarty.post.verify && $smarty.post.password}
	{setseed_website_builder
		action=choosepass
		code=$smarty.post.verify
		pass=$smarty.post.password
		keep=$smarty.post.keep
	}
	{if $swb_errors}
		{foreach from=$swb_errors item=error key=key name=loop1}
			<p class="Icon_Alert">{$error}</p>
		{/foreach}
	{/if}
{/if}


{*
	User is NOT logged in and IS viewing an email verify page
	=========================================================
*}
{if $smarty.get.verify}
	{setseed_website_builder
		action=verify
		code=$smarty.get.verify
	}
	<div class="narrowCenteredColumn">

	{if $swb_verify_code_found}
		<h2>Thanks for verifying your email.</h2>
		<p>We just need you to <strong>choose a password</strong> to you can securely access your account in the future. You’ll be immediately logged in after this step and you can start enjoying your site!</p>
		<form method="post" id="verifyAndLogin">
		<input type="hidden" name="verify" value="{$smarty.get.verify}" />
		<label>Choose a password:
			<input type="password" name="password" {if $swb_verify_errors.password}class="error"{/if}/>
		</label>
		<fieldset>
			<label>Keep me logged in
				<input type="checkbox" name="keep" value="true"/>
			</label>
		</fieldset>
		<input type="submit" value="Login" />
		</form>
	{else}
		<h2>Invalid Verification Link</h2>
		<p>Please contact us for help</p>
	{/if}
	</div>
{/if}

<script>
{literal}
function features() {
	var h = 0;
	$(".swb_features_store_feature").css("height","auto");
	$(".swb_features_store_feature").each(function(){
		if($(this).height()>h) {
			h=$(this).height();
		}
	});
	$(".swb_features_store_feature").css("height",h+"px");
}
function setPrices() {
	var total = 0;
	$(".swb_feature_enabled").each(function(){
		if ($('#swb_features_store').data('annual')) {
			if ($(".swb_feature_price_val_annual",$(this)).length) {
				var price = parseFloat($(".swb_feature_price_val_annual",$(this)).text());
				total=total+price;
			}
		} else {
			if ($(".swb_feature_price_val",$(this)).length) {
				var price = parseFloat($(".swb_feature_price_val",$(this)).text());
				total=total+price;
			}
		}
		
	});
	$(".swb_features_store_plan:not(.swb_plan_disabled)").each(function(){
		if ($('#swb_features_store').data('annual')) {
			var price = parseFloat($(this).attr("data-plan-price-annual"));
		} else {
			var price = parseFloat($(this).attr("data-plan-price"));			
		}

		total=total+price;
	});
	$(".discountValue").hide().removeClass("discounted");
	$(".originalValue").removeClass("discounted");
	if ($("#couponvalue").length) {
		var newtotal = 100 - parseInt($("#couponvalue").val());

		var t = newtotal * total / 100;
		t = t.toFixed(2);
		$(".discountValue").show().addClass("discounted");
		$(".originalValue").addClass("discounted");
		$("#swb_package_price_value").html(total.toFixed(2));
		$("#swb_package_price_value_discount").html(t);
	} else {
		var t = total.toFixed(2);
		$("#swb_package_price_value").html(t);

	}
	if (total!=0) {
		$(".taxComment").show();
	} else {
		$(".taxComment").hide();
	}

}
$(document).ready(function(){
	$("#verifyAndLogin").submit(function(e){
		var $f = $(this);
	    if ($f.data('sent') === true) {
	      e.preventDefault();
	    } else {
		  $(".submit_form,input[type=submit]",$(this)).css("opacity","0.5").after("<div class=\"loader loader-7\"></div>");
	      $f.data('sent', true);
	    }
	});
	$("input[name=domain]").focus();
	$(".swb_show_features_store").click(function(){
		var $clicked = $(this);
		if ($clicked.data('annual')) {
			$('#swb_features_store').data('annual',1);
			$(".monthly").hide();
			$(".yearly").show();
		} else {
			$('#swb_features_store').data('annual',0);
			$(".monthly").show();
			$(".yearly").hide();
		}
		$(".swb_show_features_store.swb_editing").removeClass("swb_editing");
		$clicked.addClass("swb_editing");
		$(".swb_features_store_feature").each(function(){
			var n = $(this).attr("data-feature-name");
			var enabled = $clicked.attr("data-"+n);
			if (enabled=="1") {
				$(this).addClass("swb_feature_enabled").removeClass("swb_feature_disabled");
			} else {
				$(this).addClass("swb_feature_disabled").removeClass("swb_feature_enabled");
			}
		});
		$(".swb_features_store_plan[data-plan-name='"+$(this).attr("data-plan")+"']").addClass("swb_tmp");
		if ($(this).data("free-trial")===1) {
			if ($("#swb_logged_in_agreementid").val()=="") {
				$("#free_trial_full").show();
			} else {
				$("#free_trial").show();
			}
		} else {
			$("#free_trial,#free_trial_full").hide();
		}
		$(".swb_features_store_plan.swb_plan_disabled").removeClass("swb_plan_disabled");
		$(".swb_features_store_plan:not(.swb_tmp)").addClass("swb_plan_disabled");
		$(".swb_features_store_plan.swb_tmp").removeClass("swb_tmp");
		if ($(this).attr("data-plan")!="") {
			var inc_features  = $(".swb_features_store_plan[data-plan-name='"+$(this).attr("data-plan")+"']").attr("data-plan-features").split(",");
			$(".swb_feature_included").each(function(){
				$(this).addClass("swb_feature_disabled").removeClass("swb_feature_included");
			});
			for (var i = inc_features.length - 1; i >= 0; i--) {
				$(".swb_features_store_feature[data-feature-name='"+inc_features[i]+"']").removeClass("swb_feature_enabled").removeClass("swb_feature_disabled").addClass("swb_feature_included");
			}
		}


		$("#swb_features_store").fadeIn(200);
		$("#swb_features_success").hide();
		$("#swb_save_package").hide();
		$("#swb_cancel_package").html("Done");
		features();
		setPrices();
		return false;
	});
	$("#swb_cancel_package").click(function(){
		$("#swb_features_store").fadeOut(200);
	});
	$(".swb_plan_remove").click(function(){
		$("#swb_save_package").show();
		$("#swb_cancel_package").html("Cancel");
		$(".swb_feature_included").each(function(){
			$(this).addClass("swb_feature_disabled").removeClass("swb_feature_included");
		});
		$(this).parent(".swb_features_store_plan").addClass("swb_plan_disabled");
		setPrices();
	});
	$(".swb_plan_choose_button").click(function(){
		$("#swb_save_package").show();
		$("#swb_cancel_package").html("Cancel");

		$(this).parent(".swb_features_store_plan").removeClass("swb_plan_disabled").addClass("swb_tmp");
		$(".swb_features_store_plan:not(.swb_tmp)").addClass("swb_plan_disabled");
		$(".swb_tmp").removeClass("swb_tmp");
		var inc_features  = $(this).parent(".swb_features_store_plan").attr("data-plan-features").split(",");
		$(".swb_feature_included").each(function(){
			$(this).addClass("swb_feature_disabled").removeClass("swb_feature_included");
		});
		for (var i = inc_features.length - 1; i >= 0; i--) {
			$(".swb_features_store_feature[data-feature-name='"+inc_features[i]+"']").removeClass("swb_feature_enabled").removeClass("swb_feature_disabled").addClass("swb_feature_included");

		}
		setPrices();
	});
	$("#addPaymentMethod").click(function(){
		$("#swb_save_package").trigger("click");
		return false;
	});
	$("#swb_save_package").click(function(){
		$("#swb_features_store").addClass("swb_features_loading");
		var data="[{";

		var plan="";
		$(".swb_features_store_plan:not(.swb_plan_disabled)").each(function(){
			plan = $(this).attr("data-plan-name");
		});

		$(".swb_features_store_feature:not(.pacakge)").each(function(){
			if (data!="[{") {
				data+=','
			}
			data+=' "'+$(this).attr("data-feature-name")+'":';
			if ($(this).hasClass("swb_feature_disabled") || $(this).hasClass("swb_feature_included")) {
				data+='"0"';
			} else {
				data+='"1"';
			}
		});
		data+="}]";
		$.ajax(
			{
				url: "?packagesave=true&websiteid="+$(".swb_show_features_store.swb_editing").attr("data-websiteid")+"&plan="+plan+"&data="+data
				, success: function(res){
					$("#swb_features_store").removeClass("swb_features_loading");
					$("#swb_features_success").show();
					$("#swb_save_package").hide();
					$("#swb_cancel_package").html("Done");
					var $clicked = $(".swb_show_features_store.swb_editing");
					$(".swb_features_store_feature").each(function(){
						var n = $(this).attr("data-feature-name");
						if ($(this).hasClass("swb_feature_enabled")) {
							var enabled="1";
						} else {
							var enabled="0";
						}
						$clicked.attr("data-"+n,enabled);
					});
					$(".swb_features_store_plan:not(.swb_plan_disabled)").each(function(){
						$clicked.attr("data-plan",$(this).attr("data-plan-name"));
					});
					setTimeout(function () {
						$("#swb_features_success").fadeOut(4000);
					}, 1000);

					if (res.trim()=="nobilling" && $("#swb_package_price_value").html()!="0.00") {
						var url = window.location.href.split("#");
						var w = screen.width;
						var h = screen.height;
						var pw = 650;
						var ph = 570;
						var l = w/2 - pw/2;
						var t = h/2 - ph/2;
//						window.open(url[0]+"?nobilling=true","_blank","height="+ph+",width="+pw+",titlebar=no,menubar=no,top="+t+",left="+l);
						window.location.href=url[0]+"?nobilling=true";
					}
				}
			}
		);
		return false;
	});
	$(".swb_feature_button").click(function(){
		$("#swb_save_package").show();
		$("#swb_cancel_package").html("Cancel");
		if ($(this).parents(".swb_features_store_feature").hasClass("swb_feature_enabled")) {
			$(this).parents(".swb_features_store_feature").removeClass("swb_feature_enabled").addClass("swb_feature_disabled");
			if (typeof $(this).parents(".swb_features_store_feature").attr("data-feature-dependents") != 'undefined') {
				var a = $(this).parents(".swb_features_store_feature").attr("data-feature-dependents");
				$(".swb_features_store_feature[data-feature-name="+a+"]").removeClass("swb_feature_enabled").addClass("swb_feature_disabled");
			}
		} else {
			$(this).parents(".swb_features_store_feature").addClass("swb_feature_enabled").removeClass("swb_feature_disabled");
			if (typeof $(this).parents(".swb_features_store_feature").attr("data-feature-dependent") != 'undefined') {
				var a = $(this).parents(".swb_features_store_feature").attr("data-feature-dependent");
				$(".swb_features_store_feature[data-feature-name="+a+"]").addClass("swb_feature_enabled").removeClass("swb_feature_disabled");
			}
		}
		setPrices();
	});
	$(".swb_show_debug").click(function(){
		if ($(this).parent().next().is(":visible")) {
			$(this).parent().next().slideUp();
		} else {
			$(this).parent().next().slideDown();
		}
		return false;
	});
	$("#swb_forgot").change(function(){
		if ($(this).is(':checked')) {
			$("#swb_password").slideUp();
		} else {
			$("#swb_password").slideDown();
		}

	});
	$("#swb_add_site").submit(function(){
		$(".submit_form,input[type=submit]",$(this)).hide().after("<div class=\"loader loader-7\"></div>");
	});
	$("#swb_coupon_link").click(function(){
		if ($(this).hasClass("showing")) {
			$(this).removeClass("showing");
			$(this).text($(this).attr("data-original-text"));
			$(".swb_coupon_code").slideUp();
		} else {
			$(this).addClass("showing");
			$(".swb_coupon_code").slideDown();
			$(this).text("Cancel");
		}
	});
	$(".focusonload").focus();
	$("#swb_signup_form").submit(function(){
		$(".submit_form,input[type=submit]",$(this)).hide().after("<div class=\"loader loader-7\"></div>");
	});
});
$(window).resize(function(){
	features();
});
$(window).load(function(){
	$(".swb_webthumb").each(function(){
		if ($(".swb_thumb_img",$(this)).width()>150) {
			$(".swb_thumb_img",$(this)).css("opacity","1");
		} else {
			$(".swb_thumb_img",$(this)).attr("src","/graphics/swb_broken_thumb.png").css("opacity","1");
		}
	});
	var w = $("#swb_http").width();
	w = w + 10;
	$("#swb_add_site_input").css("padding-left",w+"px");
});
{/literal}
</script>



