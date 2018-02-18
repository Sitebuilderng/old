{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}
	{*<div class="addVideoThumb thumbItem"><div class="fakeImageWrapper"><div class="fakeImage"></div></div><span class="overflowEllipsis">{$SetSeedLangs.New_Video|htmlspecialchars}</span></div>*}

{foreach from=$playlists item=playlist name=ply}
	<div class="dropzone"></div>
	{foreach from=$playlist.media_items item=media_item}
		<div class="addVideoItem responsiveListItem" id="{$media_item.filename}||**||{$media_item.thumbnail}" media-id="{$media_item.id}" playlist-id="{$playlist.id}" data-src="{$media_item.filename}" data-thumb="{if $media_item.thumbnail==""}/graphics/play.jpg{else}{$media_item.thumbnail}{/if}">
			{*
			<div class="show_choices bpe_remove_menu_item">
			 	<div class="choices confirmDelete" style="left:-95px">
					<div class="choices_inner">
						<div class="choices_inner_inner">
							<span class='bpe_menu_group'>Delete video. Are you sure?</span>
							<div class="bpe_rule"></div>
							<a href="" class="cancel_confirm">No</a>
							<a href="" class="confirmDeleteVideo" id="{$playlist.id}">Yes</a>
						</div>
					</div>
				</div>
			 </div>
			*}
			{if $media_item.thumbnail==""} 
			{*<span class='tiny_image_wrapper'><span class="bpe_tiny_image"><img src="/graphics/play.jpg"/></span></span>*}
			 <div class="responsiveListItemImage" style="background: url('/graphics/play.jpg') 50% 50% no-repeat;background-size:70px;"></div>


			{else}
			{*<span class='tiny_image_wrapper'><span class="bpe_tiny_image"><img src="{$media_item.thumbnail}"/></span></span><span class="overflowEllipsis">{$media_item.title}</span>*}
			 <div class="responsiveListItemImage" style="background: url('{$media_item.thumbnail}?width=100&amp;height=100&amp;shrink=false') 50% 50% no-repeat;background-size:50px 50px;"></div>
			{/if}
			<span class="overflowEllipsis">{$media_item.title}</span>

		</div>
	{/foreach}
{/foreach}
<span class='noPages' {if $playlists}style="display:none"{/if}>{$SetSeedLangs.No_Videos_Added}</span>