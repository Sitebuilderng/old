{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}
<form action="newsletterActions.php" method="post" id="newsletterSettingsForm">
	<input type="hidden" name="newsletterAction" value="saveSettings"/>
	
				<label class="bpe_label">“From” Name</label>
				<input type="text" name="from_name" value="{$from_name}" id="from_name" class="bpe_input"/>
				
				
				<label class="bpe_label">“From” Email Address</label>
				<input type="text" name="from_email" value="{$from_email}" id="from_email" class="bpe_input"/>

				<p class="bpe_fieldset">Optional:</p>
				<label class="bpe_label">Outgoing Mail Server</label>
				<input type="text" name="smtp_server" value="{$smtp_server}" id="smtp_server" class="bpe_input"/>
				
				<label class="bpe_label">Username</label>
				<input type="text" name="username" value="{$username}" id="username" class="bpe_input"/>
					
				<label class="bpe_label">Password</label>
				<input type="password" name="password" value="{$password}" id="password" class="bpe_input"/>

			   
</form>