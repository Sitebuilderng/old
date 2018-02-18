<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>{if $brand_name}{$brand_name}{else}SetSeed{/if} Hub</title>
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" title="Default Style" charset="utf-8"/>
	<link rel="stylesheet" href="css/global.css?v=5" type="text/css" media="screen" title="Default Style" charset="utf-8"/>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

	<script src="javascripts/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="javascripts/form.js" type="text/javascript" charset="utf-8"></script>
	<script src="javascripts/jquery.hoverintent.js" type="text/javascript" charset="utf-8"></script>
	<script src="javascripts/sha1-min.js" type="text/javascript" charset="utf-8"></script>
	<script src="javascripts/passwordcheck.js" type="text/javascript" charset="utf-8"></script>
	<script src="javascripts/custom.js?v=6" type="text/javascript" charset="utf-8"></script>
	<link rel="icon" href="graphics/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="graphics/favicon.ico" type="image/x-icon"/>
</head>

<body {if !$loggedIn || $firstTimeUser}id="loginbody"{else}id="main"{/if}>
	<div id="header"><img src="{if $brand_img}{$brand_img}{else}graphics/logo-light.png{/if}" width="220" height="65" alt="{if $brand_name}{$brand_name}{else}SetSeed{/if}" id="logo"/>
	{if $firstTimeUser || !$loggedIn}{else}<a id="logout" href="logout.php" title="Logout">Logout</a><div id="settings" title="Settings">Change email/pass</div><div id="serverAPI" title="View Server API Key">API</div><a href="#" id="brands">Brands</a>
	<a href="export.php" target="_blank" id="export">Export Master Users</a>
	<a href="export.php?allstaff=1" target="_blank" id="exportall">Export All Users</a>
	<a href="#" id="addNewSite">Add new website</a>{/if}


	<p id="hub">Hub</p>
	<div class="clear"><!-- --></div>
	</div>
	{if $installExists}
		<div id="wrapper"><p class="info">Important: As a security precaution please delete the 'install' folder from your Document Root, then refresh this page to continue.</p></div>
	{else}

	<div id="wrapper">

		{if !$loggedIn && !$firstTimeUser}
			{if $loginFail}
			<p id="loginerror">Your username/email or password is incorrect.</p>
			{/if}
			{if $reset}
			<p id="loginerror"><strong>Reset password.</strong> If you entered a correct email address you will receive a password reset confirmation email. </p>
			{/if}
			{if $resestok}
<p id="loginerror">A new password has been emailed to you - please use it to login below.</p>
			{/if}
			<form action="/sh/" method="post" id="login">
				<input type="hidden" name="salt" value="{$salt}" id="salt"/>
				<input type="hidden" name="timestamp" value="{$time}" id="timestamp"/>
				<input type="hidden" name="hash" value="" id="hash"/>
				{if $returnUrl!=""}
				<input type="hidden" name="returnUrl" value="{$returnUrl}" id="returnUrl"/>
				{/if}
				{*<label class="addSiteLabel">{if $emailAsLogin}Email{else}Username{/if}:</label>*}
				<input type="text" name="username" value="" id="loginUser" class="permInput" placeholder="{if $emailAsLogin}Email{else}Username{/if}"/>
				<div class="clear"><!-- --></div>
				<div id="passwordFieldset">
				{*<label class="addSiteLabel">Password:</label>*}
				<input type="password" name="password" value="" id="loginPass" class="permInput" placeholder="Password"/>
				<div class="clear"><!-- --></div>
				</div>
				{if $emailAsLogin}<div class='passwordReset'><input type="checkbox" name='reset' id='resetPass'> <label for='resetPass'>I have forgotten my password</label></div>{/if}
				<div class='keepLoggedIn'><input type="checkbox" name='persistent' value="yes" id='keep'> <label for='keep'>Keep me logged in on this machine</label></div>

				<div class="clear"><!-- --></div>
				<div class='formButton' id="loginGo">Login</div>

			</form>

		{/if}
		{if $firstTimeUser}
			{if $smarty.get.installsuccess}
			<p class="info success">Installation complete.</p>
			{/if}
			<p class="info">Before you can start creating and managing websites with SetSeed, you need to create a login account for your SetSeed Hub.</p>
			<form action="" method="post" id="addLogin">
				<input type="hidden" name="salt" value="{$salt}" id="salt"/>
				<input type="hidden" name="timestamp" value="{$time}" id="timestamp"/>

				{*<label class="addSiteLabel">Email:</label>*}
				<input type="text" placeholder="Email" name="username" value="" id="addUsername" class="permInput"/>
				<div class="clear"><!-- --></div>
				{*<label class="addSiteLabel">Password:</label>*}
				<input type="password" placeholder="Password" name="password" value="" id="addPassword1" class="permInput"/>
				<div class="clear"><!-- --></div>
				{*<label class="addSiteLabel">Password (again):</label>*}
				<input type="password" placeholder="Password (again)" name="password2" value="" id="addPassword2" class="permInput"/>
				<div class="clear"><!-- --></div>
				{*<input type="image" src="graphics/create-account.gif" value="" id="loginBut"/>*}

				<div class="formButton" id="loginBut">Create Account</div>
			</form>
			<div class="clear"><!-- --></div>
			<p id="notmatch">The passwords don't match!</p>
			<p id="notstrong">Your password isn't secure enough.</p>
		{/if}
		{if $loggedIn}{*
			<form action="" method="post" id="addSiteForm">
				<label id="addSiteLabel">http://</label>
				<input type="text" name="url" value="" id="addSiteInput" class="permInput"/>
				<a href="" id="addSite">Add Site</a>
			</form>
*}

			<div class="clearfix"></div>
			{if $readytoload}
				<p class="section">You have {$readytoload|@count} site{if $readytoload|@count > 1}s{/if} in your 'sites' folder that {if $readytoload|@count > 1}aren't{else}isn’t{/if} imported. They will not be accessible until you have imported them. </p>
				{foreach from=$readytoload item=load key=key name=loop1}
					<div class="site clearfix importSite">
						{*<div class="preview"><img src="preview.php?folder={$load.folder}" class="previewImage"/><img src="graphics/corners.png" class="corners"/></div>*}
						<p class="url"><span class="edit">{$load.folder}</span></p>
						<div class="popup">
						<img src='/admin/graphics/bpeditor/help.png' alt='{if $fullpriv==false}Your SetSeed master user doesn’t have sufficient privileges to automate the creation of new MySQL Databases and Users, so please use your web host control panel to create a new database and user to use with this website and enter the connection information. This must be a unique and empty database used only with the website you are creating. It is not the same database/user you used when you installed SetSeed. || You can also use an existing database which already contains a valid SetSeed site database by choosing ‘Use existing database’ and entering the connection information for your existing database. || {else}If you want to import this site into SetSeed but use an existing database which you’ve already imported manually, you can choose ‘Use existing database’ and then enter the database connection information for your database. This should be a database that already contains a SetSeed website’s data.{/if}' class='bpe_help' />

						<label class="bpe_label">URL:</label>
						{if $load.folder=="examplecom"}
						<p class="infoP">This is an example site and must use www.example.com as the URL. You will be able to visit it using the preview domain system at: http://www.example.com.{$server}/ providing you add that URL as an Addon Domain or Domain Alias in your server control panel.</p>
						<input type="hidden" value="www.example.com" name="newUrl" class="newUrl bpe_input"/>
						<input type="radio" value="import" name="dbsource" style="position:absolute;top:-1000px;" checked="checked"/>
						{else}
						<form class="editUrl"><input type="text" value="" name="newUrl" class="newUrl bpe_input"/></form>
						{/if}
						<label class="bpe_label">Folder:</label>
						<p class="infoP">{$sitespath}/sites/{$load.folder}</p>
						<div class="clear"><!-- --></div>
						{if $load.folder!="examplecom"}
						<p class="infoLabel"><input type="radio" value="import" name="dbsource" checked="checked"/></p>
						<p class="infoP">Import data from db.sql file in site's folder</p>
						<div class="clear"><!-- --></div>
						<p class="infoLabel"><input type="radio" value="existing" name="dbsource"/></p>
						<p class="infoP">Use existing database</p>
						<div class="clear"><!-- --></div>
						{/if}
						<div class="manualimport clearfix {if $fullpriv==false}show{/if}"{if $fullpriv==true}style="display:none"{/if}>
							<label class="bpe_label">Database name:</label> <input type="text" name="" value="" id="" class="bpe_input dbname"/>
							<div class="clear"><!-- --></div>
							<label class="bpe_label">Database host:</label> <input type="text" name="" value="{$host}" id="" class="bpe_input dbhost"/>
							<div class="clear"><!-- --></div>

							<label class="bpe_label">Database user:</label> <input type="text" name="" value="" id="" class="bpe_input dbuser"/>
							<div class="clear"><!-- --></div>

							<label class="bpe_label">Database password:</label> <input type="text" name="" value="" id="" class="bpe_input dbpass"/>
						</div>

						<div class="clear"><!-- --></div>
						<img src="graphics/4-1.gif" class="loadingButton" style="float:right;margin-top:10px;margin-right:25px;"/>
						<div class='bpe_savecancel'>
							<div class="bpe_savecancel_inner">
							<a href='{$load.folder}' class='importNow bpe_save {if $fullpriv==false}manDB{/if}'><span>Import</span></a><a href='#' class='bpe_cancel'><span>Cancel</span></a>
							<h2>Import site: {$load.folder}</h2>
							</div>
						</div>
						</div>
					</div>
				{/foreach}
				<div class="clear dotted"><!-- --></div>

			{/if}

			<p class="section">The following sites are imported and will be visible on their preview domain or providing the actual domain's DNS is pointing to this server. {if $smarty.get.dnscheck}<a href="/sh/">Done.</a>{else}<a href="?dnscheck=1" id="dnstest">Test live domains</a>{/if}.</p>
			{*<div class="site clearfix fake">*}
				{*<div class="preview"></div>*}
				{*<p class="url"><span class="edit">Add new website</span></p>
			</div>*}
			{foreach from=$sites|@array_reverse item=site key=key name=loop1}
				<div class="site clearfix {if $site.is_live}islive{/if}" title="{$site.url}">
					{*<div class="preview"><img src="preview.php?folder={$site.invisible_key}" class="previewImage"/><img src="graphics/corners.png" class="corners"/></div>*}
					<p class="url">
						{if $smarty.get.dnscheck==1}
						<span class="dns {if $site.dns}dns-live{/if}">DNS</span>
						{/if}
						<span class="edit">{$site.url}</span>
						<span class="client_name_row">{$site.client_name|htmlspecialchars}</span>
						<span class="client_phone_row">{$site.client_phone|htmlspecialchars}</span>
						<span class="site-buttons">
							<a class="site-button site-settings">Settings</a>
							{if $site.is_live}
						
							<a target="_blank" class="site-button site-cms" href="/sh/sso.php?url={$site.url}">CMS</a>
							<a target="_blank" class="site-button site-view" href="http://{$site.url}/">View Site</a>
							{else}
							<a target="_blank" class="site-button site-cms" href="/sh/sso.php?url={$site.url}.{$server}">CMS</a>
							<a target="_blank" class="site-button site-view" href="http://{$site.url}.{$server}/">View Site</a>
						
							{/if}
						</span>
					</p>


					<input type="hidden" name="" value="{$site.invisible_key}" class="folderVal"/>
					{if $site.dbname==""}
					<input type="hidden" name="" value="setseed_{$site.invisible_key}" class="dbVal"/>
					{else}
					<input type="hidden" name="" value="{$site.dbname}" class="dbVal"/>
					{/if}
					<input type="hidden" name="" value="{$site.user}" class="userVal"/>
					<input type="hidden" name="" value="{$site.lang}" class="langVal"/>
					<input type="hidden" name="" value="{$site.storage}" class="storageVal"/>

					<input type="hidden" name="" value="{$site.limit_storage}" class="limit_storage"/>
					<input type="hidden" name="" value="{$site.limit_pages}" class="limit_pages"/>
					<input type="hidden" name="" value="{$site.limit_products}" class="limit_products"/>
					<input type="hidden" name="" value="{$site.limit_blogs}" class="limit_blogs"/>
					<input type="hidden" name="" value="{$site.limit_staff}" class="limit_staff"/>
					<input type="hidden" name="" value="{$site.disabled_backend}" class="disabled_backend"/>
					<input type="hidden" name="" value="{$site.disabled_frontend}" class="disabled_frontend"/>
					<input type="hidden" name="" value="{$site.disabled_backend_redirect}" class="disabled_backend_redirect"/>
					<input type="hidden" name="" value="{$site.disabled_frontend_redirect}" class="disabled_frontend_redirect"/>

					<input type="hidden" name="" value="{$site.disable_videos}" class="disable_videos"/>
					<input type="hidden" name="" value="{$site.disable_galleries}" class="disable_galleries"/>
					<input type="hidden" name="" value="{$site.disable_forms}" class="disable_forms"/>
					<input type="hidden" name="" value="{$site.disable_products}" class="disable_products"/>
					<input type="hidden" name="" value="{$site.disable_calendars}" class="disable_calendars"/>
					<input type="hidden" name="" value="{$site.disable_snippets}" class="disable_snippets"/>
					<input type="hidden" name="" value="{$site.disable_livechat}" class="disable_livechat"/>
					<input type="hidden" name="" value="{$site.disable_embed_codes}" class="disable_embed_codes"/>
					<input type="hidden" name="" value="{$site.disable_mailing_list}" class="disable_mailing_list"/>
					<input type="hidden" name="" value="{$site.disable_blog}" class="disable_blog"/>
					<input type="hidden" name="" value="{$site.disable_staff}" class="disable_staff"/>
					<input type="hidden" name="" value="{$site.disable_bookings}" class="disable_bookings"/>
					<input type="hidden" name="" value="{$site.disable_design}" class="disable_design"/>
					<input type="hidden" name="" value="{$site.client_name|htmlspecialchars}" class="client_name"/>
					<input type="hidden" name="" value="{$site.client_phone|htmlspecialchars}" class="client_phone"/>
					<input type="hidden" name="" value="{$site.client_notes|htmlspecialchars}" class="client_notes"/>
					<input type="hidden" name="" value="{$site.force_ssl}" class="force_ssl"/>
					<input type="hidden" name="" value="{$site.is_live}" class="is_live"/>
					<input type="hidden" name="" value="{$site.disable_help}" class="disable_help"/>
					<input type="hidden" name="" value="{$site.custom_link_1_text}" class="custom_link_1_text"/>
					<input type="hidden" name="" value="{$site.custom_link_1_link}" class="custom_link_1_link"/>
					<input type="hidden" name="" value="{$site.custom_link_2_text}" class="custom_link_2_text"/>
					<input type="hidden" name="" value="{$site.custom_link_2_link}" class="custom_link_2_link"/>
					<input type="hidden" name="" value="{$site.omit_fourth}" class="omit_fourth"/>
					<input type="hidden" name="" value="{$site.disable_cache}" class="disable_cache"/>
					<input type="hidden" name="" value="{$site.ui_colour}" class="ui_colour"/>
					<input type="hidden" name="" value="{$site.api_key}" class="api_key"/>
					<input type="hidden" name="" value="{$site.license_status}" class="license_status"/>
					<input type="hidden" name="" value="{$site.brand}" class="brand_id"/>
					<input type="hidden" name="" value="{$site.siteid}" class="site_id"/>
					<div class="themes" style="display:none">
					<select name="theme" class="themesel">
						{if $site.themes|@count>=1 || $site.global_themes|@count>=1}
							{foreach from=$site.themes item=theme key=key name=loop1}
							<option value={$theme} {if $theme==$site.theme}selected="selected"{/if}>{$theme}</option>
							{/foreach}
							{foreach from=$site.global_themes item=theme key=key name=loop1}
							<option value={$theme} {if $theme==$site.theme}selected="selected"{/if}>{$theme}</option>
							{/foreach}

						{else}
						<option class="dropdown" selected="selected">{$site.theme}</option>
						{/if}
					</select>
					</div>
				</div>
			{/foreach}
		{/if}
			<div class="clear"><!-- --></div>
	</div>
	{/if}
	{if $loggedIn}
	<div id="mask"></div>
	<div id="lightbox" class="bpe_add_popup">
		<div id="lightboxInner" class="bpe_add_popup_inner">
		<img src='/admin/graphics/bpeditor/help.png' alt='To remove this site from SetSeed: || Export the database to the db.sql file in the site folder by clicking the "Prepare backup" button. This will then make it simple to re-import the site if you need to later. ||  Make a complete backup of the MySQL database. We recommend using the mysqldump tool to do this. The "Prepare backup" button above may not make an exact copy of the database (in particular it doesn’t save site statistics). || Removing the site from SetSeed by clicking the remove button. This will only remove the reference to this site from the master SetSeed list - it will not remove the MySQL user or database associated with this site. || You can then remove the site’s folder from the ‘sites’ folder on your server. Make a backup first! || Tip: Use your own preview image by adding a JPG image called preview.jpg to this site’s folder' class='bpe_help' />
		<input type="hidden" name="" value="" id="license_status">
		<input type="hidden" name="" value="" id="site_id">
		<form class="editUrl">

		<label class="bpe_label">URL:</label>
<input type="hidden" class="oldUrl" name="oldUrl" value="" /><input type="text" value="" name="newUrl" class="newUrl bpe_input"/>

		<label class="bpe_label">Force HTTPS:</label>
		<input type="checkbox" class="bpe_checkbox" id="force_ssl"/>
		<label class="bpe_label">Use live domain:</label>
		<input type="checkbox" class="bpe_checkbox" id="is_live"/>

<label class="bpe_label">Preview URL:</label>
<p class="infoP "><a href="" target="_blank" title="{$server}" class="newURLHref">http://<span class="newUrlText"></span>.<span id="server">{$server}</span></a></p>
		<p class="bpe_input_info">You'll need to configure your server/DNS to use both the URL and preview URL as aliases for your main SetSeed host ( http://{$server}/ ).  </p>

		<a href="#" id="loginCMS" class="bpe_popup_button belowInput" target="_blank"><span>Login to CMS</span></a>

		<div class="clear"></div>
		<div style="margin-top:20px;" class="clear visible"></div>
		
				<label class="bpe_label">Client name:</label>
				<input type="text" value="" name="" id="" class=" clientname bpe_input"/>
				<label class="bpe_label">Client phone:</label>
				<input type="text" value="" name="" id="" class="clientphone bpe_input"/>
				
				<label class="bpe_label">Notes:</label>
				<textarea id="" class="notes bpe_textarea"></textarea>
		
		<div style="margin-top:20px;" class="clear visible"></div>
		
		<label class="bpe_label">Theme:</label>
		<p class="theme"></p>
		<div class="clear"></div>
		<label class="bpe_label">Brand:</label>
		<select id="brandChoose">
			<option class="leave" value="0">Default Branding</option>
		</select>
		<div class="clear"></div>
		<label class="bpe_label">Default Page Language:</label>
		<select class="lang" id="lang">
								<option value="en">English</option>
								<option value='-' disabled>---</option>
								{if "ab"|in_array:$includedFrontEndLangs}
								<option value="ab">Abkhazian</option>
								{/if}
								{if "aa"|in_array:$includedFrontEndLangs}
								<option value="aa">Afar</option>
								{/if}
								{if ""|in_array:$includedFrontEndLangs}
								<option value="af">Afrikaans</option>
								{/if}
								{if "ak"|in_array:$includedFrontEndLangs}
								<option value="ak">Akan</option>
								{/if}
								{if "sq"|in_array:$includedFrontEndLangs}
								<option value="sq">Albanian</option>
								{/if}
								{if "am"|in_array:$includedFrontEndLangs}
								<option value="am">Amharic</option>
								{/if}
								{if "ar"|in_array:$includedFrontEndLangs}
								<option value="ar">Arabic</option>
								{/if}
								{if "an"|in_array:$includedFrontEndLangs}
								<option value="an">Aragonese</option>
								{/if}
								{if "hy"|in_array:$includedFrontEndLangs}
								<option value="hy">Armenian</option>
								{/if}
								{if "as"|in_array:$includedFrontEndLangs}
								<option value="as">Assamese</option>
								{/if}
								{if "av"|in_array:$includedFrontEndLangs}
								<option value="av">Avaric</option>
								{/if}
								{if "ae"|in_array:$includedFrontEndLangs}
								<option value="ae">Avestan</option>
								{/if}
								{if "ay"|in_array:$includedFrontEndLangs}
								<option value="ay">Aymara</option>
								{/if}
								{if "az"|in_array:$includedFrontEndLangs}
								<option value="az">Azerbaijani</option>
								{/if}
								{if "bm"|in_array:$includedFrontEndLangs}
								<option value="bm">Bambara</option>
								{/if}
								{if "ba"|in_array:$includedFrontEndLangs}
								<option value="ba">Bashkir</option>
								{/if}
								{if "eu"|in_array:$includedFrontEndLangs}
								<option value="eu">Basque</option>
								{/if}
								{if "be"|in_array:$includedFrontEndLangs}
								<option value="be">Belarusian</option>
								{/if}
								{*
								{if ""|in_array:$includedFrontEndLangs}
								<option value="bn">Bengali</option>
								{/if}*}
								{if "bh"|in_array:$includedFrontEndLangs}
								<option value="bh">Bihari</option>
								{/if}
								{if "bi"|in_array:$includedFrontEndLangs}
								<option value="bi">Bislama</option>
								{/if}
								{if "nb"|in_array:$includedFrontEndLangs}
								<option value="nb">Bokmål, Norwegian; Norwegian Bokmål</option>
								{/if}
								{if "bs"|in_array:$includedFrontEndLangs}
								<option value="bs">Bosnian</option>
								{/if}
								{if "br"|in_array:$includedFrontEndLangs}
								<option value="br">Breton</option>
								{/if}
								{if "bg"|in_array:$includedFrontEndLangs}
								<option value="bg">Bulgarian</option>
								{/if}
								{if "my"|in_array:$includedFrontEndLangs}
								<option value="my">Burmese</option>
								{/if}
								{if "ca"|in_array:$includedFrontEndLangs}
								<option value="ca">Catalan; Valencian</option>
								{/if}
								{if "km"|in_array:$includedFrontEndLangs}
								<option value="km">Central Khmer</option>
								{/if}
								{if "ch"|in_array:$includedFrontEndLangs}
								<option value="ch">Chamorro</option>
								{/if}
								{if "ce"|in_array:$includedFrontEndLangs}
								<option value="ce">Chechen</option>
								{/if}
								{if "ny"|in_array:$includedFrontEndLangs}
								<option value="ny">Chichewa; Chewa; Nyanja</option>
								{/if}
								{if "zh"|in_array:$includedFrontEndLangs}
								<option value="zh">Chinese</option>
								{/if}
								{if "cu"|in_array:$includedFrontEndLangs}
								<option value="cu">Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic</option>
								{/if}
								{if "cv"|in_array:$includedFrontEndLangs}
								<option value="cv">Chuvash</option>
								{/if}
								{if "kw"|in_array:$includedFrontEndLangs}
								<option value="kw">Cornish</option>
								{/if}
								{if "co"|in_array:$includedFrontEndLangs}
								<option value="co">Corsican</option>
								{/if}
								{if "cr"|in_array:$includedFrontEndLangs}
								<option value="cr">Cree</option>
								{/if}
								{if "hr"|in_array:$includedFrontEndLangs}
								<option value="hr">Croatian</option>
								{/if}
								{if "cs"|in_array:$includedFrontEndLangs}
								<option value="cs">Czech</option>
								{/if}
								{if "da"|in_array:$includedFrontEndLangs}
								<option value="da">Danish</option>
								{/if}
								{if "dv"|in_array:$includedFrontEndLangs}
								<option value="dv">Divehi; Dhivehi; Maldivian</option>
								{/if}
								{if "nl"|in_array:$includedFrontEndLangs}
								<option value="nl">Dutch; Flemish</option>
								{/if}
								{if "dz"|in_array:$includedFrontEndLangs}
								<option value="dz">Dzongkha</option>
								{/if}
								{if "eo"|in_array:$includedFrontEndLangs}
								<option value="eo">Esperanto</option>
								{/if}
								{if "et"|in_array:$includedFrontEndLangs}
								<option value="et">Estonian</option>
								{/if}
								{if "ee"|in_array:$includedFrontEndLangs}
								<option value="ee">Ewe</option>
								{/if}
								{if "fo"|in_array:$includedFrontEndLangs}
								<option value="fo">Faroese</option>
								{/if}
								{if "fj"|in_array:$includedFrontEndLangs}
								<option value="fj">Fijian</option>
								{/if}
								{if "fi"|in_array:$includedFrontEndLangs}
								<option value="fi">Finnish</option>
								{/if}
								{if "fr"|in_array:$includedFrontEndLangs}
								<option value="fr">French</option>
								{/if}
								{if "ff"|in_array:$includedFrontEndLangs}
								<option value="ff">Fulah</option>
								{/if}
								{if "gd"|in_array:$includedFrontEndLangs}
								<option value="gd">Gaelic; Scottish Gaelic</option>
								{/if}
								{if "gl"|in_array:$includedFrontEndLangs}
								<option value="gl">Galician</option>
								{/if}
								{if "lg"|in_array:$includedFrontEndLangs}
								<option value="lg">Ganda</option>
								{/if}
								{if "ka"|in_array:$includedFrontEndLangs}
								<option value="ka">Georgian</option>
								{/if}
								{if "de"|in_array:$includedFrontEndLangs}
								<option value="de">German</option>
								{/if}
								{if "el"|in_array:$includedFrontEndLangs}
								<option value="el">Greek, Modern (1453-)</option>
								{/if}
								{if "gn"|in_array:$includedFrontEndLangs}
								<option value="gn">Guarani</option>
								{/if}
								{if "gu"|in_array:$includedFrontEndLangs}
								<option value="gu">Gujarati</option>
								{/if}
								{if "ht"|in_array:$includedFrontEndLangs}
								<option value="ht">Haitian; Haitian Creole</option>
								{/if}
								{if "ha"|in_array:$includedFrontEndLangs}
								<option value="ha">Hausa</option>
								{/if}
								{if "he"|in_array:$includedFrontEndLangs}
								<option value="he">Hebrew</option>
								{/if}
								{if "hz"|in_array:$includedFrontEndLangs}
								<option value="hz">Herero</option>
								{/if}
								{if "hi"|in_array:$includedFrontEndLangs}
								<option value="hi">Hindi</option>
								{/if}
								{if "ho"|in_array:$includedFrontEndLangs}
								<option value="ho">Hiri Motu</option>
								{/if}
								{if "hu"|in_array:$includedFrontEndLangs}
								<option value="hu">Hungarian</option>
								{/if}
								{if "is"|in_array:$includedFrontEndLangs}
								<option value="is">Icelandic</option>
								{/if}
								{if "io"|in_array:$includedFrontEndLangs}
								<option value="io">Ido</option>
								{/if}
								{if "ig"|in_array:$includedFrontEndLangs}
								<option value="ig">Igbo</option>
								{/if}
								{if "id"|in_array:$includedFrontEndLangs}
								<option value="id">Indonesian</option>
								{/if}
								{if "ia"|in_array:$includedFrontEndLangs}
								<option value="ia">Interlingua (International Auxiliary Language Association)</option>
								{/if}
								{if "ie"|in_array:$includedFrontEndLangs}
								<option value="ie">Interlingue</option>
								{/if}
								{if "iu"|in_array:$includedFrontEndLangs}
								<option value="iu">Inuktitut</option>
								{/if}
								{if "ik"|in_array:$includedFrontEndLangs}
								<option value="ik">Inupiaq</option>
								{/if}
								{if "ga"|in_array:$includedFrontEndLangs}
								<option value="ga">Irish</option>
								{/if}
								{if "it"|in_array:$includedFrontEndLangs}
								<option value="it">Italian</option>
								{/if}
								{if "ja"|in_array:$includedFrontEndLangs}
								<option value="ja">Japanese</option>
								{/if}
								{if "jv"|in_array:$includedFrontEndLangs}
								<option value="jv">Javanese</option>
								{/if}
								{if "kl"|in_array:$includedFrontEndLangs}
								<option value="kl">Kalaallisut; Greenlandic</option>
								{/if}
								{if "kn"|in_array:$includedFrontEndLangs}
								<option value="kn">Kannada</option>
								{/if}
								{if "kr"|in_array:$includedFrontEndLangs}
								<option value="kr">Kanuri</option>
								{/if}
								{if "ks"|in_array:$includedFrontEndLangs}
								<option value="ks">Kashmiri</option>
								{/if}
								{if "kk"|in_array:$includedFrontEndLangs}
								<option value="kk">Kazakh</option>
								{/if}
								{if "ki"|in_array:$includedFrontEndLangs}
								<option value="ki">Kikuyu; Gikuyu</option>
								{/if}
								{if "rw"|in_array:$includedFrontEndLangs}
								<option value="rw">Kinyarwanda</option>
								{/if}
								{if "ky"|in_array:$includedFrontEndLangs}
								<option value="ky">Kirghiz; Kyrgyz</option>
								{/if}
								{if "kv"|in_array:$includedFrontEndLangs}
								<option value="kv">Komi</option>
								{/if}
								{if "kg"|in_array:$includedFrontEndLangs}
								<option value="kg">Kongo</option>
								{/if}
								{if "ko"|in_array:$includedFrontEndLangs}
								<option value="ko">Korean</option>
								{/if}
								{if "kj"|in_array:$includedFrontEndLangs}
								<option value="kj">Kuanyama; Kwanyama</option>
								{/if}
								{if "ku"|in_array:$includedFrontEndLangs}
								<option value="ku">Kurdish</option>
								{/if}
								{if "lo"|in_array:$includedFrontEndLangs}
								<option value="lo">Lao</option>
								{/if}
								{if "la"|in_array:$includedFrontEndLangs}
								<option value="la">Latin</option>
								{/if}
								{if "lv"|in_array:$includedFrontEndLangs}
								<option value="lv">Latvian</option>
								{/if}
								{if "li"|in_array:$includedFrontEndLangs}
								<option value="li">Limburgan; Limburger; Limburgish</option>
								{/if}
								{if "ln"|in_array:$includedFrontEndLangs}
								<option value="ln">Lingala</option>
								{/if}
								{if "lt"|in_array:$includedFrontEndLangs}
								<option value="lt">Lithuanian</option>
								{/if}
								{if "lu"|in_array:$includedFrontEndLangs}
								<option value="lu">Luba-Katanga</option>
								{/if}
								{if "lb"|in_array:$includedFrontEndLangs}
								<option value="lb">Luxembourgish; Letzeburgesch</option>
								{/if}
								{if "mk"|in_array:$includedFrontEndLangs}
								<option value="mk">Macedonian</option>
								{/if}
								{if "mg"|in_array:$includedFrontEndLangs}
								<option value="mg">Malagasy</option>
								{/if}
								{if "ml"|in_array:$includedFrontEndLangs}
								<option value="ml">Malayalam</option>
								{/if}
								{if "ms"|in_array:$includedFrontEndLangs}
								<option value="ms">Malay</option>
								{/if}
								{if "mt"|in_array:$includedFrontEndLangs}
								<option value="mt">Maltese</option>
								{/if}
								{if "gv"|in_array:$includedFrontEndLangs}
								<option value="gv">Manx</option>
								{/if}
								{if "mi"|in_array:$includedFrontEndLangs}
								<option value="mi">Maori</option>
								{/if}
								{if "mr"|in_array:$includedFrontEndLangs}
								<option value="mr">Marathi</option>
								{/if}
								{if "mh"|in_array:$includedFrontEndLangs}
								<option value="mh">Marshallese</option>
								{/if}
								{if "mo"|in_array:$includedFrontEndLangs}
								<option value="mo">Moldavian</option>
								{/if}
								{if "mn"|in_array:$includedFrontEndLangs}
								<option value="mn">Mongolian</option>
								{/if}
								{if "na"|in_array:$includedFrontEndLangs}
								<option value="na">Nauru</option>
								{/if}
								{if "nv"|in_array:$includedFrontEndLangs}
								<option value="nv">Navajo; Navaho</option>
								{/if}
								{if "nd"|in_array:$includedFrontEndLangs}
								<option value="nd">Ndebele, North; North Ndebele</option>
								{/if}
								{if "nr"|in_array:$includedFrontEndLangs}
								<option value="nr">Ndebele, South; South Ndebele</option>
								{/if}
								{if "ng"|in_array:$includedFrontEndLangs}
								<option value="ng">Ndonga</option>
								{/if}
								{if "ne"|in_array:$includedFrontEndLangs}
								<option value="ne">Nepali</option>
								{/if}
								{if "se"|in_array:$includedFrontEndLangs}
								<option value="se">Northern Sami</option>
								{/if}
								{if "nn"|in_array:$includedFrontEndLangs}
								<option value="nn">Norwegian Nynorsk; Nynorsk, Norwegian</option>
								{/if}
								{if "no"|in_array:$includedFrontEndLangs}
								<option value="no">Norwegian</option>
								{/if}
								{if "oc"|in_array:$includedFrontEndLangs}
								<option value="oc">Occitan (post 1500); Provençal</option>
								{/if}
								{if "oj"|in_array:$includedFrontEndLangs}
								<option value="oj">Ojibwa</option>
								{/if}
								{if "or"|in_array:$includedFrontEndLangs}
								<option value="or">Oriya</option>
								{/if}
								{if "om"|in_array:$includedFrontEndLangs}
								<option value="om">Oromo</option>
								{/if}
								{if "os"|in_array:$includedFrontEndLangs}
								<option value="os">Ossetian; Ossetic</option>
								{/if}
								{if "pi"|in_array:$includedFrontEndLangs}
								<option value="pi">Pali</option>
								{/if}
								{if "pa"|in_array:$includedFrontEndLangs}
								<option value="pa">Panjabi; Punjabi</option>
								{/if}
								{if "fa"|in_array:$includedFrontEndLangs}
								<option value="fa">Persian</option>
								{/if}
								{if "pl"|in_array:$includedFrontEndLangs}
								<option value="pl">Polish</option>
								{/if}
								{if "pt"|in_array:$includedFrontEndLangs}
								<option value="pt">Portuguese</option>
								{/if}
								{if "ps"|in_array:$includedFrontEndLangs}
								<option value="ps">Pushto</option>
								{/if}
								{if "qu"|in_array:$includedFrontEndLangs}
								<option value="qu">Quechua</option>
								{/if}
								{if "ro"|in_array:$includedFrontEndLangs}
								<option value="ro">Romanian</option>
								{/if}
								{if "rm"|in_array:$includedFrontEndLangs}
								<option value="rm">Romansh</option>
								{/if}
								{if "rn"|in_array:$includedFrontEndLangs}
								<option value="rn">Rundi</option>
								{/if}
								{if "ru"|in_array:$includedFrontEndLangs}
								<option value="ru">Russian</option>
								{/if}
								{if "sm"|in_array:$includedFrontEndLangs}
								<option value="sm">Samoan</option>
								{/if}
								{if "sg"|in_array:$includedFrontEndLangs}
								<option value="sg">Sango</option>
								{/if}
								{if "sa"|in_array:$includedFrontEndLangs}
								<option value="sa">Sanskrit</option>
								{/if}
								{if "sc"|in_array:$includedFrontEndLangs}
								<option value="sc">Sardinian</option>
								{/if}
								{if "sr"|in_array:$includedFrontEndLangs}
								<option value="sr">Serbian</option>
								{/if}
								{if "sn"|in_array:$includedFrontEndLangs}
								<option value="sn">Shona</option>
								{/if}
								{if "ii"|in_array:$includedFrontEndLangs}
								<option value="ii">Sichuan Yi</option>
								{/if}
								{if "sd"|in_array:$includedFrontEndLangs}
								<option value="sd">Sindhi</option>
								{/if}
								{if "si"|in_array:$includedFrontEndLangs}
								<option value="si">Sinhala; Sinhalese</option>
								{/if}
								{if "sk"|in_array:$includedFrontEndLangs}
								<option value="sk">Slovak</option>
								{/if}
								{if "sl"|in_array:$includedFrontEndLangs}
								<option value="sl">Slovenian</option>
								{/if}
								{if "so"|in_array:$includedFrontEndLangs}
								<option value="so">Somali</option>
								{/if}
								{if "st"|in_array:$includedFrontEndLangs}
								<option value="st">Sotho, Southern</option>
								{/if}
								{if "es"|in_array:$includedFrontEndLangs}
								<option value="es">Spanish; Castilian</option>
								{/if}
								{if "su"|in_array:$includedFrontEndLangs}
								<option value="su">Sundanese</option>
								{/if}
								{if "sw"|in_array:$includedFrontEndLangs}
								<option value="sw">Swahili</option>
								{/if}
								{if "ss"|in_array:$includedFrontEndLangs}
								<option value="ss">Swati</option>
								{/if}
								{if "sv"|in_array:$includedFrontEndLangs}
								<option value="sv">Swedish</option>
								{/if}
								{*
								{if "tl"|in_array:$includedFrontEndLangs}
								<option value="tl">Tagalog</option>
								{/if}*}
								{if "ty"|in_array:$includedFrontEndLangs}
								<option value="ty">Tahitian</option>
								{/if}
								{if "tg"|in_array:$includedFrontEndLangs}
								<option value="tg">Tajik</option>
								{/if}
								{if "ta"|in_array:$includedFrontEndLangs}
								<option value="ta">Tamil</option>
								{/if}
								{if "tt"|in_array:$includedFrontEndLangs}
								<option value="tt">Tatar</option>
								{/if}
								{if "te"|in_array:$includedFrontEndLangs}
								<option value="te">Telugu</option>
								{/if}
								{if "th"|in_array:$includedFrontEndLangs}
								<option value="th">Thai</option>
								{/if}
								{if "bo"|in_array:$includedFrontEndLangs}
								<option value="bo">Tibetan</option>
								{/if}
								{if "ti"|in_array:$includedFrontEndLangs}
								<option value="ti">Tigrinya</option>
								{/if}
								{if "to"|in_array:$includedFrontEndLangs}
								<option value="to">Tonga (Tonga Islands)</option>
								{/if}
								{if "ts"|in_array:$includedFrontEndLangs}
								<option value="ts">Tsonga</option>
								{/if}
								{if "tn"|in_array:$includedFrontEndLangs}
								<option value="tn">Tswana</option>
								{/if}
								{if "tr"|in_array:$includedFrontEndLangs}
								<option value="tr">Turkish</option>
								{/if}
								{if "tk"|in_array:$includedFrontEndLangs}
								<option value="tk">Turkmen</option>
								{/if}
								{if "tw"|in_array:$includedFrontEndLangs}
								<option value="tw">Twi</option>
								{/if}
								{if "ug"|in_array:$includedFrontEndLangs}
								<option value="ug">Uighur; Uyghur</option>
								{/if}
								{if "uk"|in_array:$includedFrontEndLangs}
								<option value="uk">Ukrainian</option>
								{/if}
								{if "ur"|in_array:$includedFrontEndLangs}
								<option value="ur">Urdu</option>
								{/if}
								{if "uz"|in_array:$includedFrontEndLangs}
								<option value="uz">Uzbek</option>
								{/if}
								{if "ve"|in_array:$includedFrontEndLangs}
								<option value="ve">Venda</option>
								{/if}
								{if "vi"|in_array:$includedFrontEndLangs}
								<option value="vi">Vietnamese</option>
								{/if}
								{if "vo"|in_array:$includedFrontEndLangs}
								<option value="vo">Volapük</option>
								{/if}
								{if "wa"|in_array:$includedFrontEndLangs}
								<option value="wa">Walloon</option>
								{/if}
								{if "cy"|in_array:$includedFrontEndLangs}
								<option value="cy">Welsh</option>
								{/if}
								{if "fy"|in_array:$includedFrontEndLangs}
								<option value="fy">Western Frisian</option>
								{/if}
								{if "wo"|in_array:$includedFrontEndLangs}
								<option value="wo">Wolof</option>
								{/if}
								{if "xh"|in_array:$includedFrontEndLangs}
								<option value="xh">Xhosa</option>
								{/if}
								{*
								{if "yi"|in_array:$includedFrontEndLangs}
								<option value="yi">Yiddish</option>
								{/if}*}
								{if "yo"|in_array:$includedFrontEndLangs}
								<option value="yo">Yoruba</option>
								{/if}
								{if "za"|in_array:$includedFrontEndLangs}
								<option value="za">Zhuang; Chuang</option>
								{/if}
								{if "zu"|in_array:$includedFrontEndLangs}
								<option value="zu">Zulu</option>
								{/if}


		</select>
		<div class="clear"></div>
		<div id="siteAPIKey">
			<label class="bpe_label">Localhost API Key:</label>
			<textarea id="apiKey" class="bpe_textarea"></textarea>
			<div class="clear"></div>

			<div class="clear"></div>
			<p class="bpe_input_info">This API key only allows access from scripts running on the same server as the SetSeed installation. It's ideal for using in a custom Smarty template, i.e for a payment gateway integration.</p>
			<a href="#" id="regenLocalhostKeyStep1" class="bpe_popup_button belowInput"><span>Replace with new API Key&hellip;<img src="graphics/4-1.gif" class="loadingButton"/><img src="graphics/button-tick.gif" class="buttonSuccess"/></span></a>
			<div class="clear"></div>

			<div class="moreContent" id="regenKeyMore">
				<p>Are you sure you want to replace the current API key with a new one? This will instantly prevent any scripts using the current API key from working until you update those scripts with the new key. <a href="#" id="regenLocalhostKey">Click here</a> to deactivate the current Key and generate a new one. </p>
			<div class="clear"></div>
		</div>

		</div>
		</form>
		<div class="clear visible"><!-- --></div>
	<div id="proSeller">
		<label class="bpe_label">UI Colour Scheme :</label>
		<input type="text" value="" name="" id="ui_colour" class="bpe_input short"/>
		<p class="sideInfo">(HEX Value)</p>

		<div class="clear visible"><!-- --></div>
		<label class="bpe_label">Custom admin link 1 text:</label>
		<input type="text" value="" name="" id="custom_link_1_text" class="bpe_input"/>
		<label class="bpe_label">Custom admin link 1 link:</label>
		<input type="text" value="" name="" id="custom_link_1_link" class="bpe_input"/>
		<div class="clear visible"><!-- --></div>
		<label class="bpe_label">Custom admin link 2 text:</label>
		<input type="text" value="" name="" id="custom_link_2_text" class="bpe_input"/>
		<label class="bpe_label">Custom admin link 2 link:</label>
		<input type="text" value="" name="" id="custom_link_2_link" class="bpe_input"/>

		<div class="clear visible"><!-- --></div>
		<div class="freeMode">This website is running in free mode and won't count against your chargeable sites.</div>
		<div class="paidMode">You will be billed for this website unless it is included in your subscription package.</div>
		<label class="bpe_label">Limit storage space (MB):</label>
		<input type="text" value="" name="" id="limit_storage" class="bpe_input short"/>
		<p class="sideInfo">0 = unlimited</p>
		<label class="bpe_label">Limit number of pages:</label>
		<input type="text" value="" name="" id="limit_pages" class="bpe_input short"/>
		<p class="sideInfo">0 = unlimited</p>
		<label class="bpe_label">Limit number of blogs:</label>
		<input type="text" value="" name="" id="limit_blogs" class="bpe_input short"/>
		<p class="sideInfo">0 = unlimited</p>
		<label class="bpe_label">Limit number of products:</label>
		<input type="text" value="" name="" id="limit_products" class="bpe_input short"/>
		<p class="sideInfo">0 = unlimited</p>
		<label class="bpe_label">Limit number of staff accounts:</label>
		<input type="text" value="" name="" id="limit_staff" class="bpe_input short"/>
		<p class="sideInfo">0 = unlimited</p>

		<label class="bpe_label">Lockout frontend:</label>
		<input type="checkbox" class="bpe_checkbox" id="disabled_frontend"/>

		<label class="bpe_label">Frontend send to URL:</label>
		<input type="text" value="" name="" id="disabled_frontend_redirect" class="bpe_input"/>
		<p class="bpe_input_info">Only operational if 'Lockout frontend' is ticked</p>
		<label class="bpe_label">Lockout backend:</label>
		<input type="checkbox" class="bpe_checkbox"  id="disabled_backend"/>
		<label class="bpe_label">Backend send to URL:</label>
		<input type="text" value="" name="" id="disabled_backend_redirect" class="bpe_input"/>
		<p class="bpe_input_info">Only operational if 'Lockout backend' is ticked</p>
		<div class="featureBlockLeft">
		<label class="bpe_label">Design:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_design"/>
		<label class="bpe_label">Videos:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_videos"/>
		<label class="bpe_label">Galleries:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_galleries"/>
		<label class="bpe_label">Contact forms:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_forms"/>
		<label class="bpe_label">Products:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_products"/>
		<label class="bpe_label">Calendars:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_calendars"/>
		<label class="bpe_label">Staff accounts:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_staff"/>
		</div>
		<div class="featureBlockLeft">
		<label class="bpe_label">Video Help:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_help"/>
		<label class="bpe_label">Snippets:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_snippets"/>
		<label class="bpe_label">Livechat:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_livechat"/>
		<label class="bpe_label">Embed Codes:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_embed_codes"/>
		<label class="bpe_label">Mailing lists:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_mailing_list"/>
		<label class="bpe_label">Blog:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_blog"/>
		<label class="bpe_label">Booking products (beta):</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_bookings"/>
		</div>
		<div class="clear visible"><!-- --></div>
	</div>
		<label class="bpe_label">Disable page caching:</label>
		<input type="checkbox" class="bpe_checkbox" id="disable_cache"/>
		<p class="bpe_input_info">Prevent the caching system from being used on the whole site. Only enable when developing themes.</p>
		<label class="bpe_label">Omit fourth level pages:</label>
		<input type="checkbox" class="bpe_checkbox" id="omit_fourth"/>
				<p class="bpe_input_info">Improve performance on sites with many pages by omitting fourth level pages from main menu and sitemap</p>

		<div class="clear visible"><!-- --></div>

		<label class="bpe_label">Folder:</label>
		<p class="infoP foldername"></p>
		<label class="bpe_label">Storage space used:</label>
		<p class="infoP storage"></p>
		<label class="bpe_label">MySQL Database:</label>
		<p class="infoP db"></p>
		<label class="bpe_label">MySQL User:</label>
		<p class="infoP user"></p>
		<div class="clear"><!-- --></div>
		<div class="clear visible"><!-- --></div>
		<a href="#" id="backup" class="bpe_popup_button"><span>Prepare backup <img src="graphics/4-1.gif" class="loadingButton"/><img src="graphics/button-tick.gif" class="buttonSuccess"/></span></a>
		<a href="#" id="removeSite" class="bpe_popup_button"><span>Remove site&hellip;</span></a>
		<div class="clear"><!-- --></div>
		<div class="moreContent removeSiteConfirm">
			<p>Remove the site by clicking <a href="" id="removeLink">here</a> - <span style="color:#f00">This will only remove the reference to this site from the master list - it will not remove the MySQL user ('<span class="user"></span>') or database ('<span class="db"></span>') associated with this site.</span></p>
		</div>
		<div class="clear"><!-- --></div>
		<div class="clear visible"><!-- --></div>
<div class='bpe_savecancel'>
	<div class="bpe_savecancel_inner">
	<a href='#' id="editSite" class='bpe_save {if $fullpriv==false}manDB{/if}'><span>Done</span></a><a href='#' class='bpe_cancel'><span>Cancel</span></a>
	<h2>Edit site: <span class="newUrlText"></span></h2>
	</div>
</div>

		</div>
	</div>
	<div id="import" class="bpe_add_popup">
		<div id="importInner" class="bpe_add_popup_inner clearfix">

		</div>
	</div>

	<div class='bpe_mask'></div><div class='bpe_add_popup' id="addnewsite"><div class='bpe_add_popup_inner'><img src='/admin/graphics/bpeditor/help.png' alt='Enter the domain you want to use with your site in the URL field. You will need to change your DNS settings to make sure that the domain points at this server, and also ensure that apache uses this host to serve the site when called from that domain. This is usually done by adding the domain as a Domain Alias (Plesk) or a Parked Domain (cPanel). {if $fullpriv==false}|| Please use your web host control panel to create a new database and user to use with your new website and enter the connection information. This must be a unique and empty database used only with the website you are creating. It is not the same database/user you used when you installed SetSeed. || Please note: SetSeed can automatically create the database for you if you have root access to your server (VPS, dedicated etc) and can grant the following permissions to your master MySQL user (the one you used when you installed SetSeed): ALTER, DROP, CREATE, CREATE USER, SELECT, INSERT, UPDATE, GRANT OPTION{/if}' class='bpe_help' /><form action="" method="post" id="addSiteForm" class="clearfix">
		<label class="bpe_label">URL: http://</label>
		<input type="text" name="url" value="" id="addSiteInput" class="bpe_input permInput"/>
		<label class="bpe_label">Theme:</label>
		<p><select name="theme" id="newsiteTheme">

			{foreach from=$default_site_themes item=theme key=key name=loop1}
			<option value={$theme}>{$theme}</option>
			{/foreach}
			{foreach from=$default_site_global_themes item=theme key=key name=loop1}
			<option value={$theme}>{$theme}</option>
			{/foreach}
			
		</select></p>
		<div class="clear"><!-- --></div>
		<br/>
		<div class="clear"><!-- --></div>
		<label class="bpe_label">Copy content from:</label>
		<p style="margin-top:0px"><select name="import_data" id="siteToClone">
			<option value=''>Default</default>
			{foreach from=$sites|@array_reverse item=site key=key name=loop1}
				<option value="{$site.invisible_key}">{$site.url}</option>
			{/foreach}
			
		</select></p>
		<p class="infoP" style="margin-left:182px">Database will be copied from db.sql inside the folder belonging to the site above. Click Prepare Backup in Settings for the site to ensure db.sql is up to date.</p>
		
		
		
		
		{if $fullpriv==false}
		<div id="manualDB">
			<div class="manDBForm clearfix">
			<label class="bpe_label">Database name:</label> <input type="text" name="" value="" id="dbname" class="bpe_input"/>
			<div class="clear"><!-- --></div>
			<label class="bpe_label">Database host:</label> <input type="text" name="" value="{$host}" id="dbhost" class="bpe_input"/>
			<div class="clear"><!-- --></div>

			<label class="bpe_label">Database user:</label> <input type="text" name="" value="" id="dbuser" class="bpe_input"/>
			<div class="clear"><!-- --></div>

			<label class="bpe_label">Database password:</label> <input type="text" name="" value="" id="dbpass" class="bpe_input"/>

			</div>

		</div>
		{/if}
	</form><div class='clear'></div><img src="graphics/4-1.gif" class="loadingButton" style="float:right;margin-top:10px;margin-right:25px;"/>
	<div class='bpe_savecancel'>
		<div class="bpe_savecancel_inner">
			<a href='#' id="addSite" class='bpe_save {if $fullpriv==false}manDB{/if}'><span>Add site</span></a><a href='#' class='bpe_cancel'><span>Cancel</span></a>
			<h2>Add new site</h2>
		</div>
	</div>
	<div class='clear'></div>
	</div></div>

	<div id="overlay"></div>
	<div id="error"></div>
	<div id="changePass" class="bpe_add_popup">
		<div class="bpe_add_popup_inner">

			{if !$emailAsLogin}
			<p class="important">Your account was created using an old version of the SetSeed Hub. You should change your username to your email address to allow password recovery.</p>
			{/if}
			<form action="" method="post" id="changePassForm">
				<input type="hidden" name="salt" value="{$salt}" id="salt"/>
				<input type="hidden" name="timestamp" value="{$time}" id="timestamp"/>

				<label class="bpe_label">Current password:</label>
				<input type="password" name="old_password" value=""  class="bpe_input"/>
				<div class="clear"><!-- --></div>

				<label class="bpe_label">Email:</label>
				<input type="text" name="username" value="" class="bpe_input"/>
				<div class="clear"><!-- --></div>
				<label class="bpe_label">Password:</label>
				<input type="password" name="password" value=""  class="bpe_input"/>
				<div class="clear"><!-- --></div>
				<label class="bpe_label">Password (again):</label>
				<input type="password" name="password2" value="" class="bpe_input"/>
				<div class="clear"><!-- --></div>
				<div class='bpe_savecancel'>
					<div class='bpe_savecancel_inner'>
					<a href='#' id="changePassButton" class='bpe_save'><span>Change password</span></a><a href='#' class='bpe_cancel'><span>Cancel</span></a>
					<h2>Change Hub email and password</h2>
					</div>
				</div>
			</form>
			<p id="notmatch">The passwords don't match!</p>
			<p id="notstrong">Your password isn't secure enough.</p>
			<p id="currentpasswrong">Current password incorrect.</p>

		</div>
	</div>
	<div id="viewAPIKey" class="bpe_add_popup">
		<div class="bpe_add_popup_inner">

			<label class="bpe_label">Server API Key:</label>
			<textarea id="serverApiKey" class="bpe_textarea">{$api_key}</textarea>
			<p class="bpe_input_info">This is your Server API key. It allows remote access to SetSeed Hub operations like creating new websites.</p>
			<a href="#" id="regenServerKeyStep1" class="bpe_popup_button belowInput"><span>Replace with new API Key&hellip;<img src="graphics/4-1.gif" class="loadingButton"/><img src="graphics/button-tick.gif" class="buttonSuccess"/></span></a>

			<div class="clear"></div>
			<div class="moreContent" id="regenServerKeyMore">
				<p>Are you sure you want to replace the current API key with a new one? This will instantly prevent any scripts using the current API key from working until you update those scripts with the new key. <a href="#" id="regenServerKey">Click here</a> to deactivate the current Key and generate a new one. </p>
			</div>

			<div class="clear"></div>

			<div class='bpe_savecancel'>
				<div class="bpe_savecancel_inner">
				<a href='#' id="closeAPI" class='bpe_save'><span>Done</span></a>
				<h2>Server API Key</h2>
				</div>
			</div>

		</div>
	</div>
	<div class="dialogueMask"></div>
	<div class="dialogueWrapper" data-active="{$active}" id="activateWrapper">
		<div class="dialogue" id="activate">
			<h1>SetSeed Activation</h1>
			<p>Please enter your SetSeed Activation Code. This can be found after logging in via your App Direct account and click the 'SetSeed Subscription' app.</p>
			<p><strong>You need to have an active subscription to create new websites with SetSeed.</strong></p>
			{if $activecode_error=="payment"}
			<p class="dialogueError">Error: Your current subscription payment has failed. Please ensure your billing details are up to date in your AppDirect account.</p>
			{/if}
			{if $activecode_error=="notfound"}
			<p class="dialogueError">Error: Your Activation Code has not been recognised. Please try again.</p>
			{/if}
			{if $activecode_error=="prevented"}
			<p class="dialogueError">Error: Your server is preventing access to the licensing server.</p>
			{/if}
			<form action="/sh/" method="post">
				<input type="text" class="big" value="{$activecode}" placeholder="Activation Code" name="activation_code" id="activation_code" />
				<p><a href="#" class="dismissDialogue">I'll do this later</a></p>
				<input type="submit" name="" value="Activate" class="submit">
			</form>

		</div>
	</div>
	<div class="dialogueWrapper" id="brandsEditor">
		<div class="dialogue" id="activate">
			<div class="dismissDialogueCorner">Close</div>
			<h1>Brands Editor</h1>
			<div id="currentBrands"></div>
			<p class="diaButton clearfix"><a href="#" id="showAddBrand">Add new brand</a></p>
			<div id="addNewBrandWrap">
				<form action="brands.php?action=add" id="addNewBrand" method="post"  enctype="multipart/form-data">
					<label>Brand Title<br/>
						<input type="text" name="name" value="" class="required"/>
					</label>
					<label>Favicon (16x16)<br/>
					<input type="file" name="favicon" value="" id="favicon" class="required"></label>
					<label>Logo<br/>
					<input type="file" name="logo" value="" id="favicon" class="required"></label>
					<p class="labelInfo">@2x artwork up to 440x130px, displays at max size: 220x65</p>
					<label>Theme Colour (HEX)<br/>
					<input type="text" name="colour" value="" id="colour" class="required"></label>
					<input type="submit" name="" value="Add Brand" class="submit">
				</form>
			</div>
		</div>
	</div>

	<div id="about">
		<p><img src="graphics/logo-dark.png" alt="SetSeed" width="144" height="67"/></p>
		<p>SetSeed<br/>© Copyright 2006-2017 Ben Vallack and Chris Parnell. <br/>
			All Rights Reserved</p>
		<p style="text-align:right">Version: 8.2017.7.18<br/>
			<a href="http://setseed.com"><strong>setseed.com</strong></a></p>
	</div>
	{else}
	<p id="loginVersion">Version: 8.2017.7.18</p>
	{/if}

	<input type="hidden" id="folderPath" value="{$sitespath}" />
</body>
</html>
