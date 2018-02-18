<?php /* Smarty version 2.6.18, created on 2017-08-22 03:47:19
         compiled from widgets/SetSeed_Website_Builder_Account.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'setseed_website_builder', 'widgets/SetSeed_Website_Builder_Account.tpl', 2, false),array('modifier', 'array_reverse', 'widgets/SetSeed_Website_Builder_Account.tpl', 259, false),array('modifier', 'htmlspecialchars', 'widgets/SetSeed_Website_Builder_Account.tpl', 540, false),array('modifier', 'strip_tags', 'widgets/SetSeed_Website_Builder_Account.tpl', 540, false),)), $this); ?>
<?php if ($_GET['paymentemails_kerw324ew']): ?>
<?php echo smarty_function_setseed_website_builder(array('action' => 'emailreminder'), $this);?>

<?php endif; ?>
<?php if ($_POST['theme']): ?>
	<?php echo smarty_function_setseed_website_builder(array('action' => 'register','domain' => $_POST['domain'],'email' => $_POST['email'],'phone' => $_POST['phone'],'theme' => $_POST['theme'],'import_data' => $_POST['import_data']), $this);?>

<?php endif; ?>
<?php if ($_GET['resend']): ?> 
	<?php echo smarty_function_setseed_website_builder(array('action' => 'resend','email' => $_GET['resend']), $this);?>
 
<?php endif; ?>
<?php if ($_GET['packagesave']): ?>
	<?php echo smarty_function_setseed_website_builder(array('action' => 'packagesave','data' => $_GET['data'],'plan' => $_GET['plan'],'websiteid' => $_GET['websiteid']), $this);?>

<?php endif; ?>

<?php if ($_POST['changepass']): ?>
	<?php echo smarty_function_setseed_website_builder(array('action' => 'changepass'), $this);?>

<?php endif; ?>
<?php if ($_GET['pay']): ?>
	<?php echo smarty_function_setseed_website_builder(array('action' => 'pay'), $this);?>

<?php endif; ?>

<?php if ($_GET['reset']): ?>
	<?php echo smarty_function_setseed_website_builder(array('action' => 'reset','guid' => $_GET['reset']), $this);?>

<?php endif; ?>
<?php if ($_GET['action'] == 'logout'): ?>
	<?php echo smarty_function_setseed_website_builder(array('action' => 'logout'), $this);?>

<?php endif; ?>


<?php if ($_GET['action'] == "collectpayments-jsknvfjk-jkdncsdd"): ?> 
	<?php echo smarty_function_setseed_website_builder(array('action' => 'cron'), $this);?>

<?php endif; ?>


<?php if ($_POST['email'] && ! $_POST['domain'] && ! $_POST['theme']): ?>
	<?php echo smarty_function_setseed_website_builder(array('action' => 'login','email' => $_POST['email'],'pass' => $_POST['pass'],'keep' => $_POST['keep'],'forgot' => $_POST['forgot']), $this);?>

<?php endif; ?>
<?php if ($_POST['coupon']): ?>
	<?php echo smarty_function_setseed_website_builder(array('action' => 'applycoupon','usersid' => $this->_tpl_vars['swb_logged_in_id'],'coupon' => $_POST['coupon']), $this);?>

<?php endif; ?>


<?php if ($_REQUEST['update']): ?>
<?php echo smarty_function_setseed_website_builder(array('action' => 'admin_update'), $this);?>

<?php endif; ?>


<?php if ($_REQUEST['delete']): ?>
<?php echo smarty_function_setseed_website_builder(array('action' => 'admin_delete'), $this);?>

<?php endif; ?>


<?php if ($_REQUEST['delete_account']): ?>
<?php echo smarty_function_setseed_website_builder(array('action' => 'admin_delete_account'), $this);?>

<?php endif; ?>

<?php if ($_SESSION['token'] || $_COOKIE['token'] && ! $_GET['verify'] && ! $_POST['email']): ?>
	<?php echo smarty_function_setseed_website_builder(array('action' => 'session'), $this);?>

<?php endif; ?>

<?php if ($_GET['createbillingagreement']): ?>
	<?php echo smarty_function_setseed_website_builder(array('action' => 'createbillingagreement','usersid' => $this->_tpl_vars['swb_logged_in_id'],'token' => $_GET['token'],'ref' => $_POST['trxref']), $this);?>

<?php endif; ?>



<?php if ($this->_tpl_vars['swb_logged_in'] && $this->_tpl_vars['swb_admin'] == false): ?>
<?php if ($this->_tpl_vars['swb_logged_in'] && $this->_tpl_vars['swb_admin'] == false && ! $_GET['addsite'] && ! $_GET['changepass'] && ! $this->_tpl_vars['swb_logged_in_coupon_pc']): ?>
	<p id="swb_coupon_link" data-original-text="Enter coupon code"><?php if ($_POST['coupon'] && ! $this->_tpl_vars['swb_coupon_ok']): ?>Cancel<?php else: ?>Enter coupon code<?php endif; ?></p>
<?php endif; ?>
<p id="swb_tabs"><a href="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'account_url'), $this);?>
" <?php if ($this->_tpl_vars['swb_logged_in'] && $this->_tpl_vars['swb_admin'] == false && ! $_GET['addsite'] && ! $_GET['changepass']): ?>class="current"<?php endif; ?>>Manage Websites</a><a href="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'account_url'), $this);?>
?changepass=true" <?php if ($_GET['changepass']): ?>class="current"<?php endif; ?>>Change Password</a><a href="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'account_url'), $this);?>
?action=logout">Logout</a></p>
<?php endif; ?>
<?php if ($this->_tpl_vars['swb_logged_in'] && $this->_tpl_vars['swb_admin'] == true): ?>
<p id="swb_tabs"><a href="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'account_url'), $this);?>
" <?php if ($this->_tpl_vars['swb_logged_in'] && $this->_tpl_vars['swb_admin'] == true && ! $_GET['addsite'] && ! $_GET['changepass']): ?>class="current"<?php endif; ?>>View Accounts</a><a href="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'account_url'), $this);?>
?changepass=true" <?php if ($_GET['changepass']): ?>class="current"<?php endif; ?>>Change Password</a><a href="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'account_url'), $this);?>
?action=logout">Logout</a></p>
<?php endif; ?>
<?php if ($this->_tpl_vars['swb_logged_in'] && ! $_GET['addsite'] && ( $_GET['changepass'] || $_POST['oldpass'] )): ?>
	<form method="post" action="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'account_url'), $this);?>
?changepass=true" id="swb_change_pass">
		<input type="hidden" name="changepass" value="test">
		<?php if ($this->_tpl_vars['swb_errors_change']): ?>
			<?php $_from = $this->_tpl_vars['swb_errors_change']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['error']):
        $this->_foreach['loop1']['iteration']++;
?>
				<p class="Icon_Alert"><?php echo $this->_tpl_vars['error']; ?>
</p>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['swb_password_change']): ?>
			<p class="Icon_Tick">Password changed</p>
		<?php endif; ?>
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
<?php endif; ?>
<?php if ($this->_tpl_vars['swb_logged_in'] && $this->_tpl_vars['swb_admin'] == false && ! $_GET['addsite'] && ! $_GET['changepass']): ?>
	
		<?php echo $this->_tpl_vars['editable']['Logged_In_Top']; ?>

	<?php if ($_GET['nobilling'] == 'true'): ?>
			<?php echo smarty_function_setseed_website_builder(array('action' => 'generate_trxref'), $this);?>

		<div id="nobilling">
			<div id="nobillinginner">
			<h2>No payment method found</h2>
			<p>Before your new features can be applied you need to add a payment method to your account. Please set-up recurring billing via PayStack to continue.</p>
			<p style="font-size:.8em;">Your will be charged N100 to store your payment details<br />
			<span style="font-size:.8em;style:italic">(required by payment processor)</span>
			</p>
			 <form action="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'account_url'), $this);?>
?createbillingagreement=true" method="POST" >								<input type="hidden" name="trxref" value=<?php echo $this->_tpl_vars['trxref']; ?>
 />
				<script
					src="https://js.paystack.co/v1/inline.js" 
					data-key="<?php echo $this->_tpl_vars['paystack_pk']; ?>
"
					data-email="<?php echo $this->_tpl_vars['swb_logged_in_email']; ?>
"
					data-amount="10000"
					data-ref="<?php echo $this->_tpl_vars['trxref']; ?>
"
				>
				</script>
      </form>
					</div>
		</div>
	<?php endif; ?>


	<?php if ($_GET['createbillingagreement']): ?>
		<?php if ($this->_tpl_vars['billingagreement']): ?>
		<div id="nobilling">
			<div id="nobillinginner">
			<p class="Icon_Tick">You have successfully added a payment method.</p>
			<p class="Button_Large"><a href="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'account_url'), $this);?>
">Done</a></p>
			</div>
		</div>
		<?php else: ?>
			<div id="nobilling">
				<div id="nobillinginner">
				<p class="Icon_Alert"><?php echo $this->_tpl_vars['billingmessage']; ?>
</p>
				<p class="Button_Large"><a href="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'account_url'), $this);?>
?nobilling=true">Try Again</a></p>
				</div>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['swb_errors_subscribe']): ?>
		<?php $_from = $this->_tpl_vars['swb_errors_subscribe']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['error']):
        $this->_foreach['loop1']['iteration']++;
?>
			<p class="Icon_Alert"><?php echo $this->_tpl_vars['error']; ?>
</p>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>


	<div class="swb_coupon_code" <?php if ($_POST['coupon'] && ! $this->_tpl_vars['swb_coupon_ok']): ?>style="display:block"<?php endif; ?>>
		<h4>Enter coupon code:</h4>

		<form method="post" class="">
			<p class="swb_coupon">Coupon code: <input type="text" name="coupon" value="<?php echo $_POST['coupon']; ?>
" <?php if ($_POST['coupon'] && ! $this->_tpl_vars['swb_coupon_ok']): ?>class="focusonload"<?php endif; ?>/></p>
			<?php if ($this->_tpl_vars['swb_errors_coupon']): ?>
				<?php $_from = $this->_tpl_vars['swb_errors_coupon']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['error']):
        $this->_foreach['loop1']['iteration']++;
?>
					<p class="Icon_Alert"><?php echo $this->_tpl_vars['error']; ?>
</p>
				<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
			<p class="Button_Large submit_form"><a href="#">Apply coupon</a></p>
		</form>


	</div>
	<?php if ($this->_tpl_vars['swb_logged_in_coupon_pc']): ?>
		<input id="couponvalue" value="<?php echo $this->_tpl_vars['swb_logged_in_coupon_pc']; ?>
" type="hidden" />
		<p class="Icon_Tick" id="swb_coupon_status">Your '<?php echo $this->_tpl_vars['swb_logged_in_coupon_pc']; ?>
% off' coupon code is currently active until <?php echo $this->_tpl_vars['swb_logged_in_coupon_expires']; ?>
.</p>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['websites']): ?>
	<input type="hidden" id="swb_logged_in_agreementid" value="<?php echo $this->_tpl_vars['swb_logged_in_agreementid']; ?>
">
	<ul class="swb_websites">
		<?php $_from = array_reverse($this->_tpl_vars['websites']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['website']):
        $this->_foreach['loop1']['iteration']++;
?>
		<li class="clearfix <?php if (!($this->_foreach['loop1']['iteration'] % 2)): ?>endofrow2<?php endif; ?> <?php if (!($this->_foreach['loop1']['iteration'] % 3)): ?>endofrow<?php endif; ?>">
		<?php if ($this->_tpl_vars['website']['failed']): ?>
		<strong>Error:</strong> <?php echo $this->_tpl_vars['website']['domain']; ?>
<br/>Please contact support
		<?php else: ?>
			<div class="swb_webthumb clearfix"><img src="/graphics/swb_thumb_titlebar.png" class="swb_thumb_titlebar"/><img src="/graphics/swb_thumb_scaffold.png" class="swb_thumb_scaffold"/><img class="swb_thumb_img" src="<?php echo $this->_tpl_vars['website']['thumb']; ?>
" /></div>
			<div class="swb_website_buttons">
				<p class="swb_title"><a href="http://<?php echo $this->_tpl_vars['website']['domain']; ?>
.<?php echo $this->_tpl_vars['primary_url']; ?>
" title="http://<?php echo $this->_tpl_vars['website']['domain']; ?>
">http://<?php echo $this->_tpl_vars['website']['domain']; ?>
</a></p>
				<p class="swb_button Button_Large first"><a href="http://<?php echo $this->_tpl_vars['website']['domain']; ?>
.<?php echo $this->_tpl_vars['primary_url']; ?>
/admin" target="_blank">Manage Website</a></p>
				<p class="swb_button Button_Large"><a href="#" class="swb_show_features_store" data-annual="<?php echo $this->_tpl_vars['website']['annual']; ?>
" data-plan="<?php echo $this->_tpl_vars['website']['plan']; ?>
" data-unlimited_pages="<?php echo $this->_tpl_vars['website']['unlimited_pages']; ?>
" data-blog="<?php echo $this->_tpl_vars['website']['blog']; ?>
" data-unlimited_blog="<?php echo $this->_tpl_vars['website']['unlimited_blog']; ?>
" data-mailing_lists="<?php echo $this->_tpl_vars['website']['mailing_lists']; ?>
" data-shop="<?php echo $this->_tpl_vars['website']['shop']; ?>
" data-unlimited_products="<?php echo $this->_tpl_vars['website']['unlimited_products']; ?>
" data-livechat="<?php echo $this->_tpl_vars['website']['livechat']; ?>
" data-video="<?php echo $this->_tpl_vars['website']['video']; ?>
" data-galleries="<?php echo $this->_tpl_vars['website']['galleries']; ?>
" data-contact_forms="<?php echo $this->_tpl_vars['website']['contact_forms']; ?>
" data-calendar="<?php echo $this->_tpl_vars['website']['calendar']; ?>
" data-websiteid="<?php echo $this->_tpl_vars['website']['id']; ?>
" data-free-trial="<?php echo $this->_tpl_vars['website']['free_trial']; ?>
">Features Store</a></p></form>

			</div>
		<?php endif; ?>
		</li>
		<?php endforeach; endif; unset($_from); ?>
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
						<div class="swb_features_store_plan" data-plan-name="free" data-plan-features="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'plan_includes','plan' => 'free'), $this);?>
" data-plan-price="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'plan_price','plan' => 'free'), $this);?>
" data-plan-price-annual="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'plan_price_annual','plan' => 'free'), $this);?>
">
							<h3>Free
								<span class='monthly'>
									<span class="swb_plan_price">
									<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>
<span class="swb_plan_price_val"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'plan_price','plan' => 'free'), $this);?>
 </span>
									/month</span>
								</span>
								<span class='yearly'>
									<span class="swb_plan_price">
									<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>
<span class="swb_plan_price_val"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'plan_price_annual','plan' => 'free'), $this);?>
 </span>
									/year</span>
								</span>

							</h3>
							<p class="swb_plan_feature">Create up to 3 pages</p>
							<p class="swb_plan_feature">Create up to 3 blog articles</p>
							<p class="swb_plan_feature">Add one product</p>
							<p class="swb_plan_feature">Add videos</p>

							<p class="swb_plan_choose_button"><button>Choose this plan</button></p>
							<p class="swb_plan_selected"><span>Current plan</span></p>
							<?php if ($this->_tpl_vars['default_plan'] == ""): ?>
							<p class="swb_plan_remove"><span>Cancel this plan</span></p>
							<?php endif; ?>
						</div>
					<div class="swb_features_store_plan swb_plan_featured swb_plan_disabled" data-plan-name="premium" data-plan-features="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'plan_includes','plan' => 'premium'), $this);?>
" data-plan-price="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'plan_price','plan' => 'premium'), $this);?>
" data-plan-price-annual="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'plan_price_annual','plan' => 'premium'), $this);?>
">
						<p class="swb_plan_recommended">Recommended</p>
						<h3>Premium
					
					
							
							<span class='monthly'>
								<span class="swb_plan_price">
								<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>
<span class="swb_plan_price_val"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'plan_price','plan' => 'premium'), $this);?>
 </span>
								/month</span>
							</span>
							<span class='yearly'>
								<span class="swb_plan_price">
								<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>
<span class="swb_plan_price_val"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'plan_price_annual','plan' => 'premium'), $this);?>
 </span>
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
						<?php if ($this->_tpl_vars['default_plan'] == ""): ?>
						<p class="swb_plan_remove"><span>Cancel this plan</span></p>
						<?php endif; ?>

					</div>
				</div>
				<div class="hr"></div>
				<div class="swb_features_store_feature swb_feature_disabled" data-feature-name="unlimited_pages">
					<div class="menus swb_icon"></div>
					<h3>Unlimited Pages and Remove Ads</h3>
					<p class="swb_feature_info">Removes the ads that display on your site and removes the <?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'lite_mode_pages'), $this);?>
 page limit.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>

						<span class='monthly'><span class="swb_feature_price_val"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_unlimited_pages'), $this);?>
</span>/month</span>
						<span class='yearly'><span class="swb_feature_price_val_annual"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_unlimited_pages_annual'), $this);?>
</span>/year</span></p>
				</div>
				<div class="swb_features_store_feature lastoftwo swb_feature_disabled" data-feature-dependents="unlimited_blog" data-feature-name="blog">
					<div class="blog swb_icon"></div>
					<h3>Blog</h3>
					<p class="swb_feature_info">Publish articles in a blog format with user comments, categories and more.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price">Free (Add up to <?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'lite_mode_blogs'), $this);?>
 articles)</p>
				</div>
				<div class="swb_features_store_feature swb_feature_disabled" data-feature-dependent="blog"  data-feature-name="unlimited_blog">
					<div class="blog swb_icon"><div class="swb_icon_unlimited">Unlimited</div></div>
					<h3>Unlimited Blog Articles</h3>
					<p class="swb_feature_info">Create unlimited blog articles.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>

						<span class='monthly'><span class="swb_feature_price_val"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_unlimited_blog'), $this);?>
</span>/month</span>
						<span class='yearly'><span class="swb_feature_price_val_annual"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_unlimited_blog_annual'), $this);?>
</span>/year</span>
					</p>
				</div>
				<div class="swb_features_store_feature last swb_feature_disabled" data-feature-name="mailing_lists">
					<div class="email swb_icon"></div>
					<h3>Email Mailing Lists</h3>
					<p class="swb_feature_info">Collect subscribers through your website and use built in tools to send out bulk messages to your list.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>

						<span class='monthly'><span class="swb_feature_price_val"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_newsletter'), $this);?>
</span>/month</span>
						<span class='yearly'><span class="swb_feature_price_val_annual"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_newsletter_annual'), $this);?>
</span>/year</span>
					</p>
				</div>
				<div class="swb_features_store_feature swb_feature_disabled" data-feature-dependents="unlimited_products" data-feature-name="shop">
					<div class="ecommerce swb_icon"></div>
					<h3>Shop</h3>
					<p class="swb_feature_info">Add products with options, stock level, multi-tier pricing and more and sell them with a shopping basket and integrated online payments via PayStack.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<?php ob_start(); ?><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'lite_mode_products'), $this);?>
<?php $this->_smarty_vars['capture']['products'] = ob_get_contents(); ob_end_clean(); ?>
					<p class="swb_features_price">Free (add up to <?php echo $this->_smarty_vars['capture']['products']; ?>
 product<?php if ($this->_smarty_vars['capture']['products'] > 1): ?>s<?php endif; ?>)</p>
				</div>
				<div class="swb_features_store_feature lastoftwo swb_feature_disabled" data-feature-dependent="shop" data-feature-name="unlimited_products">
					<div class="ecommerce swb_icon"><div class="swb_icon_unlimited">Unlimited</div></div>
					<h3>Unlimited Shop Products</h3>
					<p class="swb_feature_info">Add unlimited products</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>

						<span class='monthly'><span class="swb_feature_price_val"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_shop_unlimted'), $this);?>
</span>/month</span>
						<span class='yearly'><span class="swb_feature_price_val_annual"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_shop_unlimted_annual'), $this);?>
</span>/year</span>
					</p>
				</div>
				<div class="swb_features_store_feature swb_feature_disabled" data-feature-name="livechat">
					<div class="livecaht swb_icon"></div>
					<h3>Live-chat</h3>
					<p class="swb_feature_info">Allow visitors to initiate an instant message chat with you over your website.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>

						<span class="monthly"><span class="swb_feature_price_val"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_livechat'), $this);?>
</span>/month</span>
						<span class='yearly'><span class="swb_feature_price_val_annual"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_livechat_annual'), $this);?>
</span>/year</span>
					</p>

				</div>
				<div class="swb_features_store_feature last swb_feature_disabled" data-feature-name="video">
					<div class="video swb_icon"></div>
					<h3>Video</h3>
					<p class="swb_feature_info">Upload and host video directly on your website.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<?php ob_start(); ?><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_video'), $this);?>
<?php $this->_smarty_vars['capture']['videos'] = ob_get_contents(); ob_end_clean(); ?>
					<?php ob_start(); ?><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_video_annual'), $this);?>
<?php $this->_smarty_vars['capture']['videosannual'] = ob_get_contents(); ob_end_clean(); ?>
					<p class="swb_features_price"><?php if ($this->_smarty_vars['capture']['videos'] != "0.00"): ?><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>

						<span class="monthly"><span class="swb_feature_price_val"><?php echo $this->_smarty_vars['capture']['videos']; ?>
</span>/month</span>
						<span class="yearly"><span class="swb_feature_price_val_annual"><?php echo $this->_smarty_vars['capture']['videosannual']; ?>
</span>/year</span>
					<?php else: ?>Free<?php endif; ?></p>

				</div>
				<div class="swb_features_store_feature swb_feature_disabled" data-feature-name="galleries">
					<div class="images-galleries swb_icon"></div>
					<h3>Galleries</h3>
					<p class="swb_feature_info">Create stylish galleries based on batches of images. Upload multiple images at once and the system does the rest.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>

						<span class='monthly'><span class="swb_feature_price_val"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_galleries'), $this);?>
</span>/month</span>
						<span class='yearly'><span class="swb_feature_price_val_annual"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_galleries_annual'), $this);?>
</span>/year</span>
					</p>

				</div>
				<div class="swb_features_store_feature lastoftwo swb_feature_disabled" data-feature-name="contact_forms">
					<div class="contact-form swb_icon"></div>
					<h3>Contact Forms</h3>
					<p class="swb_feature_info">Create advanced contact forms to protect your email address and collect information from visitors.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>

						<span class="monthly"><span class="swb_feature_price_val"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_forms'), $this);?>
</span>/month</span>
						<span class="yearly"><span class="swb_feature_price_val_annual"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_forms_annual'), $this);?>
</span>/year</span>
					</p>

				</div>
				<div class="swb_features_store_feature swb_feature_disabled" data-feature-name="calendar">
					<div class="calendars swb_icon"></div>
					<h3>Calendars</h3>
					<p class="swb_feature_info">Add events to beautiful calendars and display them directly on your website.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>

						<span class="monthly"><span class="swb_feature_price_val"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_calendar'), $this);?>
</span>/month</span>
						<span class="yearly"><span class="swb_feature_price_val_annual"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_calendar_annual'), $this);?>
</span>/year</span>
					</p>

				</div>
				<div class="swb_features_store_feature last swb_feature_disabled lastofall" data-feature-name="unlimited_staff">
					<div class="admin swb_icon"><div class="swb_icon_unlimited">Unlimited</div></div>
					<h3>Unlimited Staff Accounts</h3>
					<p class="swb_feature_info">Removes the <?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'lite_mode_staff'), $this);?>
 staff account limit.</p>
					<p class="swb_feature_disabled_button"><button class="swb_feature_button">Enable</button></p>
					<p class="swb_feature_enabled_button"><span>Enabled</span> <button class="swb_feature_button">Remove</button></p>
					<p class="swb_feature_included_label"><span>Included in plan</span></p>
					<p class="swb_features_price"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>

						<span class="monthly"><span class="swb_feature_price_val"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_staff'), $this);?>
</span>/month</span>
						<span class="yearly"><span class="swb_feature_price_val_annual"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'feature_price_staff_annual'), $this);?>
</span>/year</span>
					</p>

				</div>
			</div>
			<div id="swb_features_store_purchase">
				<button id="swb_save_package" style="display:none">Save</button>
				<div id="swb_package_price"><span class="originalValue"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>
<span id="swb_package_price_value">0.00</span></span><span class="discountValue"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'currency_sym'), $this);?>
<span id="swb_package_price_value_discount">0.00</span></span><span class="taxComment"><?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'tax_comment'), $this);?>
</span><span id="swb_pacakge_month">per <span class='monthly'>30</span><span class='yearly'>365</span> days</span></div>
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
	<?php endif; ?>

	<?php echo $this->_tpl_vars['editable']['Logged_In_Bottom']; ?>

<?php endif; ?>
<?php if ($_GET['addsite'] || $_REQUEST['theme'] || $this->_tpl_vars['swb_register_success']): ?>

	<?php if ($this->_tpl_vars['swb_logged_in']): ?>
		<?php echo $this->_tpl_vars['editable']['Above_New_Site_Logged_In']; ?>

	<?php endif; ?>
	<?php if ($this->_tpl_vars['swb_register_success']): ?>
		<?php echo $this->_tpl_vars['editable']['Signup_Thanks']; ?>

	<?php else: ?>
		<?php if (! $this->_tpl_vars['swb_logged_in']): ?>
		<?php echo $this->_tpl_vars['editable']['Above_New_Site']; ?>

		<?php endif; ?>
		<form method="post" action="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'signup_page'), $this);?>
?addsite=true" id="swb_add_site" class="clearfix">

		<?php if ($this->_tpl_vars['swb_errors']): ?>
			<?php $_from = $this->_tpl_vars['swb_errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['error']):
        $this->_foreach['loop1']['iteration']++;
?>
				<p class="Icon_Alert"><?php echo $this->_tpl_vars['error']; ?>
</p>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>

		<?php if (! $this->_tpl_vars['swb_logged_in']): ?>

			<div class="row">
				<div class='column threeThirdsCol first'>

					<label>Choose your domain name<br/>
					<div id="swb_signup_domain_wrap">
						<span id="swb_http">http://</span>
						<input type="text" name="domain" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['domain'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" id="swb_add_site_input"/>
					</div>
					</label>
					<?php if ($_REQUEST['theme']): ?>

						<p>Theme: <strong><?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['theme_text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</strong></p>
						<input type="hidden" name="theme" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['theme'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" />
						<input type="hidden" name="theme_text" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['theme_text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" />
						<?php if ($_REQUEST['import_data']): ?>
						<input type="hidden" name="import_data" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['import_data'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" />
						<?php endif; ?>
						

					<?php else: ?>
						<input type="hidden" name="theme" value="global_elegant">
					<?php endif; ?>

				</div>
				<div class='column threeThirdsCol'>
					<label>Your Email Address:<br/>
					<input type="text" name="email" value="<?php echo $_POST['email']; ?>
" <?php if ($this->_tpl_vars['setseed_website_builder_errors']['email']): ?>class="error"<?php endif; ?> />
					</label>
				</div>
				<div class='column threeThirdsCol last'>
					<label>Your Phone Number:<br/>
					<input type="text" name="phone" value="<?php echo $_POST['phone']; ?>
" <?php if ($this->_tpl_vars['setseed_website_builder_errors']['phone']): ?>class="error"<?php endif; ?> />
					</label>
				</div>
				<div class='column threeThirdsCol last'>
					<noscript>
					<input type="submit" value="Add new site"/>
					</noscript>
					<p class="Button_Large submit_form"><a href="#">Create new website</a></p>

				</div>
			</div>
		<?php else: ?>
			<div class="row">
			<div class='column twoCol first'>
					<label>Domain name<br/>
					<div id="swb_signup_domain_wrap">
					<span id="swb_http">http://</span>
					<input type="text" name="domain" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['domain'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" id="swb_add_site_input"/>
					</div>
					</label>
					<?php if ($_REQUEST['theme']): ?>

						<p>Theme: <strong><?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['theme_text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</strong></p>
						<input type="hidden" name="theme" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['theme'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" />
						<input type="hidden" name="theme_text" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['theme_text'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" />
						<?php if ($_REQUEST['import_data']): ?>
						<input type="hidden" name="import_data" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['import_data'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" />
						<?php endif; ?>
						
					<?php else: ?>
						<input type="hidden" name="theme" value="global_elegant">
					<?php endif; ?>
			</div>
			<div class='column twoCol last'>
				<noscript>
				<input type="submit" value="Add new site"/>
				</noscript>
				<p class="Button_Large submit_form"><a href="#">Create new website</a></p>
				<p id="swb_add_site_info">Immediate setup. 100% Free!</p>
			</div>
			</div>
		<?php endif; ?>

		</form>
		<?php if (! $this->_tpl_vars['swb_logged_in']): ?>
			<?php echo $this->_tpl_vars['editable']['Below_New_Site']; ?>

		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['swb_logged_in'] && $this->_tpl_vars['swb_admin'] == true && ! $_POST['coupon_quantity'] && ! $_GET['changepass'] && ! $_POST['oldpass']): ?>
	<p>Welcome, Admin.</p>
	<?php if ($this->_tpl_vars['swb_errors']): ?>
		<?php $_from = $this->_tpl_vars['swb_errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['error']):
        $this->_foreach['loop1']['iteration']++;
?>
			<p class="Icon_Alert"><?php echo $this->_tpl_vars['error']; ?>
</p>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['swb_oks']): ?>
		<?php $_from = $this->_tpl_vars['swb_oks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['ok']):
        $this->_foreach['loop1']['iteration']++;
?>
			<p class="Icon_Tick"><?php echo $this->_tpl_vars['ok']; ?>
</p>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
	<div class="row">
	<div class='column twoThirds first'>
		<?php if ($this->_tpl_vars['users']): ?>
		<ul class="swb_websites_admin">
		<?php $_from = array_reverse($this->_tpl_vars['users']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['user']):
        $this->_foreach['loop1']['iteration']++;
?>
		<li>
			<?php if (! $this->_tpl_vars['user']['websites']): ?>
			<a style="float:right;" href="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'account_url'), $this);?>
?delete_account=<?php echo $this->_tpl_vars['user']['id']; ?>
">Delete Account</a>
			<?php endif; ?>
			<strong>Email: <?php echo $this->_tpl_vars['user']['email']; ?>
 Joined: <?php echo $this->_tpl_vars['user']['joined']; ?>
</strong><br/>
			<?php if ($this->_tpl_vars['user']['websites']): ?>
				<ul style="margin:20px 0 10px;">
					<?php $_from = array_reverse($this->_tpl_vars['user']['websites']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['website']):
        $this->_foreach['loop1']['iteration']++;
?>
					<li style="background:#ccc;margin:10px 0;padding:8px 10px;border-radius:3px;">
						<a style="float:right" href="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'account_url'), $this);?>
?delete=<?php echo $this->_tpl_vars['website']['id']; ?>
" onclick="<?php echo 'if (confirm(\'Are you sure you want to remove this website?\')) { return true; } else { return false; }'; ?>
">Delete Website</a>
						<form style="margin:0;" action="<?php echo smarty_function_setseed_website_builder(array('action' => 'config','value' => 'account_url'), $this);?>
" method="post">
							<input type="hidden" name="update" value="<?php echo $this->_tpl_vars['website']['id']; ?>
"/>
								<input style="margin:0;font-size:14px;color:#000;border-radius:3px;border:none;width:300px;float:left;box-shadow:inset 2px 2px 2px rgba(0,0,0,0.3)" type="text" name="domain" value="<?php echo $this->_tpl_vars['website']['domain']; ?>
"/>
								<input type="submit" value="Update" style="margin:1px 0 10px 5px;padding:6px 10px; 6px"/>
						</form>
						<p style="margin:0;">(Status: <?php echo ''; ?><?php if ($this->_tpl_vars['website']['valid']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['website']['free_trial']): ?><?php echo 'Free Trial'; ?><?php else: ?><?php echo 'Currently Subscribed'; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php if ($this->_tpl_vars['website']['free_trial']): ?><?php echo 'Free Trial Ended'; ?><?php else: ?><?php echo 'Subscription Cancelled'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
)
						</p>
						<?php if ($this->_tpl_vars['website']['failed']): ?>
						<p style="margin:0;" class="Button_Small"><strong>Error:</strong> <a href="" class="swb_show_debug">Show debug info</a></p> <pre style="display:none"><?php echo $this->_tpl_vars['website']['errors']; ?>
</pre>
						<?php endif; ?>
					</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			<?php endif; ?>
		</li>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
		<?php endif; ?>
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



<?php endif; ?>
<?php if ($_POST['coupon_quantity'] && $this->_tpl_vars['swb_logged_in'] && $this->_tpl_vars['swb_admin'] == true): ?>
	<?php echo smarty_function_setseed_website_builder(array('action' => 'coupon_gen','discount' => $_POST['coupon_discount'],'quantity' => $_POST['coupon_quantity'],'months' => $_POST['coupon_months']), $this);?>


	<h2>Your coupons:</h2>
	<p>
	<?php $_from = $this->_tpl_vars['coupon_codes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['code']):
?>

		<?php echo $this->_tpl_vars['code']; ?>
<br/>

	<?php endforeach; endif; unset($_from); ?>
	</p>

<?php endif; ?>


<?php if (! $this->_tpl_vars['swb_logged_in'] && ! $_GET['verify'] && ! $_GET['addsite'] && ! $this->_tpl_vars['swb_register_success']): ?>
	<?php echo $this->_tpl_vars['editable']['Above_Login']; ?>

	<form method="post" id="swb_login">
	<?php if ($this->_tpl_vars['swb_errors']): ?>
		<?php $_from = $this->_tpl_vars['swb_errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['error']):
        $this->_foreach['loop1']['iteration']++;
?>
			<p class="Icon_Alert"><?php echo $this->_tpl_vars['error']; ?>
</p>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
	<?php if ($_GET['resetdone']): ?>
	<p class="Icon_Alert">Your password has been reset and your new password has been emailed to you.</p>
	<?php endif; ?>
	<div class="row">
		<div class='column threeThirdsCol first'>

			<label>Email:
				<input type="text" name="email" <?php if ($this->_tpl_vars['swb_login_errors']['email']): ?>class="error"<?php endif; ?> value="<?php echo $_POST['email']; ?>
"/>
			</label>
			<fieldset>
				<label>Keep me logged in
					<input type="checkbox" name="keep" value="true"/>
				</label>
			</fieldset>
		</div>
		<div class='column threeThirdsCol'>
			<label id="swb_password">Password:
			<input type="password" name="pass" <?php if ($this->_tpl_vars['swb_login_errors']['pass']): ?>class="error"<?php endif; ?> />
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
		<?php echo $this->_tpl_vars['editable']['Below_Login']; ?>

<?php endif; ?>



<?php if ($_POST['verify'] && $_POST['password']): ?>
	<?php echo smarty_function_setseed_website_builder(array('action' => 'choosepass','code' => $_POST['verify'],'pass' => $_POST['password'],'keep' => $_POST['keep']), $this);?>

	<?php if ($this->_tpl_vars['swb_errors']): ?>
		<?php $_from = $this->_tpl_vars['swb_errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['error']):
        $this->_foreach['loop1']['iteration']++;
?>
			<p class="Icon_Alert"><?php echo $this->_tpl_vars['error']; ?>
</p>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
<?php endif; ?>


<?php if ($_GET['verify']): ?>
	<?php echo smarty_function_setseed_website_builder(array('action' => 'verify','code' => $_GET['verify']), $this);?>

	<div class="narrowCenteredColumn">

	<?php if ($this->_tpl_vars['swb_verify_code_found']): ?>
		<h2>Thanks for verifying your email.</h2>
		<p>We just need you to <strong>choose a password</strong> to you can securely access your account in the future. You’ll be immediately logged in after this step and you can start enjoying your site!</p>
		<form method="post" id="verifyAndLogin">
		<input type="hidden" name="verify" value="<?php echo $_GET['verify']; ?>
" />
		<label>Choose a password:
			<input type="password" name="password" <?php if ($this->_tpl_vars['swb_verify_errors']['password']): ?>class="error"<?php endif; ?>/>
		</label>
		<fieldset>
			<label>Keep me logged in
				<input type="checkbox" name="keep" value="true"/>
			</label>
		</fieldset>
		<input type="submit" value="Login" />
		</form>
	<?php else: ?>
		<h2>Invalid Verification Link</h2>
		<p>Please contact us for help</p>
	<?php endif; ?>
	</div>
<?php endif; ?>

<script>
<?php echo '
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
		if ($(\'#swb_features_store\').data(\'annual\')) {
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
		if ($(\'#swb_features_store\').data(\'annual\')) {
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
	    if ($f.data(\'sent\') === true) {
	      e.preventDefault();
	    } else {
		  $(".submit_form,input[type=submit]",$(this)).css("opacity","0.5").after("<div class=\\"loader loader-7\\"></div>");
	      $f.data(\'sent\', true);
	    }
	});
	$("input[name=domain]").focus();
	$(".swb_show_features_store").click(function(){
		var $clicked = $(this);
		if ($clicked.data(\'annual\')) {
			$(\'#swb_features_store\').data(\'annual\',1);
			$(".monthly").hide();
			$(".yearly").show();
		} else {
			$(\'#swb_features_store\').data(\'annual\',0);
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
		$(".swb_features_store_plan[data-plan-name=\'"+$(this).attr("data-plan")+"\']").addClass("swb_tmp");
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
			var inc_features  = $(".swb_features_store_plan[data-plan-name=\'"+$(this).attr("data-plan")+"\']").attr("data-plan-features").split(",");
			$(".swb_feature_included").each(function(){
				$(this).addClass("swb_feature_disabled").removeClass("swb_feature_included");
			});
			for (var i = inc_features.length - 1; i >= 0; i--) {
				$(".swb_features_store_feature[data-feature-name=\'"+inc_features[i]+"\']").removeClass("swb_feature_enabled").removeClass("swb_feature_disabled").addClass("swb_feature_included");
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
			$(".swb_features_store_feature[data-feature-name=\'"+inc_features[i]+"\']").removeClass("swb_feature_enabled").removeClass("swb_feature_disabled").addClass("swb_feature_included");

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
				data+=\',\'
			}
			data+=\' "\'+$(this).attr("data-feature-name")+\'":\';
			if ($(this).hasClass("swb_feature_disabled") || $(this).hasClass("swb_feature_included")) {
				data+=\'"0"\';
			} else {
				data+=\'"1"\';
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
			if (typeof $(this).parents(".swb_features_store_feature").attr("data-feature-dependents") != \'undefined\') {
				var a = $(this).parents(".swb_features_store_feature").attr("data-feature-dependents");
				$(".swb_features_store_feature[data-feature-name="+a+"]").removeClass("swb_feature_enabled").addClass("swb_feature_disabled");
			}
		} else {
			$(this).parents(".swb_features_store_feature").addClass("swb_feature_enabled").removeClass("swb_feature_disabled");
			if (typeof $(this).parents(".swb_features_store_feature").attr("data-feature-dependent") != \'undefined\') {
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
		if ($(this).is(\':checked\')) {
			$("#swb_password").slideUp();
		} else {
			$("#swb_password").slideDown();
		}

	});
	$("#swb_add_site").submit(function(){
		$(".submit_form,input[type=submit]",$(this)).hide().after("<div class=\\"loader loader-7\\"></div>");
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
		$(".submit_form,input[type=submit]",$(this)).hide().after("<div class=\\"loader loader-7\\"></div>");
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
'; ?>

</script>


