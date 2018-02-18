{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}
{*		<div id="mainMenu">
			<div class="menuWrapper">*}
			<div id="dragBoundry">
				<div id="loginWrapper" {if $create}class="create"{/if}>
					<div id="loginWrapperInner" class="clearfix">
					<div id="loginHeader">
						<span id="logo" {if $svgLogo==1}class="svgLogo"{/if}><img src="graphics/branding.php?i=l" alt="" /></span>
					</div>
					{if $create}
					<div id="createAccountInstructions">
							{$SetSeedLangs.Create_Account_Instructions}
					</div>
					<form id="CreateForm" action="adminUsersActions.php" method="post">

						<div class='imageContextualEdit'>
							<div class='imageContextEditFieldset showingLabel' id="usernameFieldset">
								<div class='imageContextEditLabel'>{$SetSeedLangs.Email|htmlspecialchars}</div>
								<div class='imageContextEditInputWrap'>
									<input type='text' class='usr toggleLabelValue imageContextInput' value='' title='{$SetSeedLangs.Email|htmlspecialchars}' name='username' />
								</div>
							</div>
							<div class='imageContextEditFieldset showingLabel' id="passwordFieldset">
								<div class='imageContextEditLabel'>{$SetSeedLangs.Password|htmlspecialchars}</div>
								<div class='imageContextEditInputWrap'>
									<input type='password' title='{$SetSeedLangs.Password|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='password' />
								</div>
							</div>
							<div class='imageContextEditFieldset showingLabel' id="passwordFieldset">
								<div class='imageContextEditLabel'>{$SetSeedLangs.Password_Again|htmlspecialchars}</div>
								<div class='imageContextEditInputWrap'>
									<input type='password' title='{$SetSeedLangs.Password_Again|htmlspecialchars}' class='toggleLabelValue imageContextInput' value='' name='password2' />
								</div>
							</div>
						</div>
						<div id="createButton">{$SetSeedLangs.Create_Account}</div>

						<input type="hidden" name="adminUsersAction" value="addNew" />
						<input type="hidden" name="salt" value="{$createSalt}" id="saltInput" />
						<input type="hidden" name="hash" value="" id="hashInput" />

					</form>

					{else}
					<div style="display:none" id="timedOut">{$SetSeedLangs.Login_Error_Reloading}</div>
					<form id="LoginForm" action="login.php" method="post">

						<div class='imageContextualEdit'>
							<div class='imageContextEditFieldset showingLabel' id="usernameFieldset">
								<div class='imageContextEditLabel'>{if $accountTypes=="email"}{$SetSeedLangs.Email}{/if}
									{if $accountTypes=="username"}{$SetSeedLangs.Login}{/if}
									{if $accountTypes=="both"}{$SetSeedLangs.Login_Email}{/if}

								</div>
								<div class='imageContextEditInputWrap'>
									<input type='{if $accountTypes=="email"}email{else}text{/if}' class='usr toggleLabelValue imageContextInput withLoginButton' value='' title='{$SetSeedLangs.Login}' name='username' id="usernameInput"/>

								</div>
							</div>
							<div class='imageContextEditFieldset showingLabel' id="passwordFieldset">
								<div class='imageContextEditLabel'>{$SetSeedLangs.Password}</div>
								<div class='imageContextEditInputWrap'>
									<input type='password' title='{$SetSeedLangs.Password}' class='toggleLabelValue imageContextInput withLoginButton' value='' name='password' id="passwordInput"/>
								</div>
							</div>
						</div>
						{if $accountTypes!="username"}
						<p id="loginButtonEmailOnly">{$SetSeedLangs.Forgotten_Password}</p>
						{/if}
						{*
						{if $accountTypes!="username"}
						<div id="resetPass"><input type="checkbox" value="yes" name="reset" id="resetPassC" /> <label for="resetPassC">{$SetSeedLangs.Forgotten_Password}</label></div>
						{/if}
						*}

						<div id="loginButton">{$SetSeedLangs.Login_Button}</div>
						<div id="keepLoggedIn" class="checked">{$SetSeedLangs.Keep_Me_Logged_In}</div>

						<input type="hidden" value="yes" name="persistent" value="yes" id="persistentLogin" />
						<input type="hidden" name="timestamp" value="{$securityTime}" id="timestampInput"/>
						<input type="hidden" name="salt" value="{$securitySalt}" id="saltInput"/>
						<input type="hidden" name="hash" value="" id="hashInput"/>
						<input type="hidden" name="reset" value="no" id="resetInput"/>

					</form>
					{/if}

				</div>
				<p id="vendorLogin"><a href="http://{$primaryDomain}/sh/sso.php?url={$ssourl}">{$SetSeedLangs.Support_Login}</a></p>

			</div>
		<div id="error">
			<span class="messageText" id="error1">{$SetSeedLangs.Login_Error_Inactivity}</span>
			<span class="messageText" id="error2">{$SetSeedLangs.Login_Error_Other_Computer}</span>
			<span class="messageText" id="error3">{$SetSeedLangs.Login_Error_Inactivity}</span>
			<span class="messageText" id="error4">{$SetSeedLangs.Login_Error_Wrong_Email}</span>
			<span class="messageText" id="error5">{$SetSeedLangs.Login_Error_Wrong_Pass}</span>
			<span class="messageText" id="error6">{$SetSeedLangs.Login_Error_Window}</span>
			<span class="messageText" id="error9">{$SetSeedLangs.Login_Error_Empty}</span>
			<span class="messageText" id="error10">{$SetSeedLangs.Passwords_Not_Match}</span>
		</div>
		<div id="success">
			<span id="success7" class="messageText">{$SetSeedLangs.Login_Error_Reset1}</span>
			<span id="success8" class="messageText">{$SetSeedLangs.Login_Error_Reset2}</span>
			<span id="success11" class="messageText">{$SetSeedLangs.Login_Account_Created}</span>
		</div>
		</div>
		<div id="livepreviewResize"><div id="resizeHandle">
		<div class="handle1"></div>
		<div class="handle2"></div>
		<div class="handle3"></div>
		</div></div>
		<div id="livepreviewmask"></div>

		<div id="livepreview">
			<div id="iframeWrapper">
				<iframe src="/" ></iframe>
			</div>
		</div>
	{*}
	{if $message}
		<div id="loginMessage">
			<div id="loginMessageInner">
				{$message}
			</div>
		</div>
	{/if}*}
	<noscript><div id="loginMessage">
		<div id="loginMessageInner">
			Error - you need to have Javascript enabled in your browser to login.
		</div>
	</div></noscript>
{*	</div>*}

</body>
</html>
