{foreach from=$livechatarchives item=item key=key name=loop1}
	<a livechat-href="/livechat/chat-save.php?saves={$item.filename|htmlspecialchars}">
	{$item.date} {$item.time} - IP: {$item.ip}</a>
{/foreach}