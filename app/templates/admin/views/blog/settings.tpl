{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}

			<p><input type="checkbox" name="sidebar_cal" value="{$sidebar_cal}" id="sidebar_cal" {if $sidebar_cal=="yes"}checked="checked"{/if} class="checkbox"/> Show calendar</p>
			<p><input type="checkbox" name="sidebar_search" value="{$sidebar_search}" id="sidebar_search" {if $sidebar_search=="yes"}checked="checked"{/if} class="checkbox"/> Show search</p>
			<p><input type="checkbox" name="sidebar_cats" value="{$sidebar_cats}" id="sidebar_cats" {if $sidebar_cats=="yes"}checked="checked"{/if} class="checkbox"/> Show categories</p>
			<p><input type="checkbox" name="sidebar_recent" value="{$sidebar_recent}" id="sidebar_recent" {if $sidebar_recent=="yes"}checked="checked"{/if} class="checkbox"/> Show <input type="text" name="number_sidebar_recent" value="{$number_sidebar_recent}" class="orderInput" id="number_sidebar_recent" style="width:20px"/> recent articles</p>
			
		<p>New comments require approval:</p>
		<p><input type="checkbox" name="manual_approve" {if $manual_approve=="yes"}checked="checked"{/if} id="manual_approve" class="checkbox"/> When enabled new comments will not be published until you tick the 'approve' button by the comment in the list above.</p>
		<p>Pagination Settings:</p>
		<p>Show <input type="text" name="items_on_page" value="{$items_on_page}" class="orderInput" id="items_on_page" style="width:20px"/> items on each page of entries</p>
			
		<p>Email comments to:</p>
		<p><input type="text" name="comment_email_notification" value="{$comment_email_notification}" id="comment_email_notification" style="width:150px;float:left"/></p>

		<label class="bpe_label">Author Reply Password:</label>
		<input type="text" name="secret_passcode" value="{$secret_passcode}" id="secret_passcode" class="bpe_input"/>

