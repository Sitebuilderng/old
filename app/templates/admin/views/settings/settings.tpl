{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}
<form action="settingsActions.php" method="post" id="settingsForm">
	<input type="hidden" name="settingsAction" value="save"/>
<table class="settingsTable">
	<tr>
		<td class="settingLeft">Tracking Code</td>
		<td><textarea name="tracking_code">{$tracking_code}</textarea></td>
	</tr>
	<tr>
		<td class="settingLeft">Show condensed version of icon menu</td>
		<td><input type="checkbox" name="mini_nav" {if $mini_nav=="yes"}checked="checked"{/if} value="yes" id="changeNav" style="width:auto"/> Click 'Save Settings' below to keep the new menu style if you change this.
	</tr>
</table>
<p class="buttonWrapper"><a href="" class="button" id="saveSettingsButton"><span>Save Settings</span></a></p>
</form>