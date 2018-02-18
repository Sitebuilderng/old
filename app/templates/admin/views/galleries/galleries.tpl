{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}
{*<a href="" id="showAddGalForm">Add new gallery</a>
	
<div class="bpe_rule"></div>*}

<div class="dropzone"><div></div></div>
<span {if $galleries}style="display:none;"{/if} class='noPages'>{$SetSeedLangs.No_Galleries}</span>

{foreach from=$galleries item=gallery key=key name=loop1}
<div class="bpe_menu_sub responsiveListItem galleryItem {if $gallery.dynamic==1}dynamic{/if}" rel="{$gallery.name|@htmlspecialchars}" id="gal{$gallery.id}" gallery-id="{$gallery.id}" data-gallery-style="{$gallery.style|htmlspecialchars}" data-name="{$gallery.name|@htmlspecialchars}" data-images-from-categories="{$gallery.from_image_tags}" data-dynamic="{$gallery.dynamic}">
				{foreach from=$gallery.from_image_tags_array item=grp} 
					<input type="hidden" id="tagingal{$grp}" value="{$grp}"/>
				{/foreach}
 		<div class="menu_with_options menu_hidden_extras bpe_menu_sub_item2 {if $gallery.show=="yes"}bpe_sub_hilite2{/if}">
	{*
		<div class="show_choices bpe_remove_menu_item">
		 	<div class="choices confirmDelete">
				<div class="choices_inner">
					<div class="choices_inner_inner">
						<span class='bpe_menu_group'>Delete gallery. Are you sure?</span>
						<div class="bpe_rule"></div>
						<a href="" class="cancel_confirm">No</a>
						<a href="" class="confirmDeleteGallery" id="{$gallery.id}">Yes</a>
					</div>
				</div>
			</div>
		 </div>*}{*
		<span class="renameItem toggleRenameGallery" id="renameGallery-{$gallery.id}" title="{$gallery.name|@htmlspecialchars}">*}<span class="overflowEllipsis" title="{$gallery.name|@htmlspecialchars}">{$gallery.name|@htmlspecialchars}</span>{*</span>*}</div>
		<div class='galleryImages'>
			{*<div class="addGalleryThumb thumbItem"><div class="fakeImageWrapper"><div class="fakeImage"></div></div><span class="overflowEllipsis">{$SetSeedLangs.New_Image|htmlspecialchars}</span></div>*}
			{*
				<a href="" id="{$gallery.id}" class="addImagesToGallery">Add new image(s)&hellip;</a>*}
					<div class="dropzone"><div></div></div>
					
						{if !$gallery.images}<span class='noPages'>{$SetSeedLangs.No_Images_Added}</span>{/if}
{*							<div class="sortable" id="galleryImages-{$gallery.id}">*}
							{foreach from=$gallery.images item=thumb key=key name=loop2}
								<div class="responsiveListItem galleryThumb" id="galleryThumb-{$thumb.id}" gallery-image-id="{$thumb.id}" title="{$thumb.filename|@htmlspecialchars}" name="{$thumb.caption|@htmlspecialchars}">
									{*<div class="galImageDrag pageDrag"></div>
									<div class="show_choices3 bpe_remove_menu_item">
									 	<div class="choices3 confirmDelete" style="left:-150px">
											<div class="choices_inner">
												<div class="choices_inner_inner">
													<span class='bpe_menu_group'>Delete image. Are you sure?</span>
													<div class="bpe_rule"></div>
													<a href="" class="cancel_confirm">No</a>
													<a href="{$gallery.id}" class="deleteImageButton" id="{$thumb.id}">Yes</a>
												</div>
											</div>
										</div>
									 </div>*}
									 <div class="responsiveListItemImage" style="background: url('/images/galleries/thumbs/{$thumb.filename|@htmlspecialchars}?width=100&amp;height=100&amp;shrink=false&d={$smarty.now}') 50% 50% no-repeat;background-size:50px 50px;"></div>
									 	<span class="overflowEllipsis">{$thumb.caption|@htmlspecialchars}</span>
									 	{*}
								   <span class='tiny_image_wrapper'><span class="bpe_tiny_image"><img src="/images/galleries/thumbs/{$thumb.filename|@htmlspecialchars}?s=90&d={$smarty.now}"/></span></span><span class="overflowEllipsis">{$thumb.caption|htmlspecialchars}</span><span class="thumbItemEdit"><input type="text" value="{$thumb.caption|htmlspecialchars}" /></span>*}
								{*
									<span class="renameItem renameImageLink" id="renameImageForm{$gallery.id}{$thumb.id}" title="{$thumb.caption}">{if $thumb.caption==""}(no caption){else}{$thumb.caption|truncate:52:"…":true:true}{/if}</span>
								<div class="renameImageLink" title="Change the caption for this image, currently: {$thumb.caption}" id="renameImageForm{$gallery.id}{$thumb.id}"><img src="graphics/rename.gif" alt=""/></div>*}
								<input type="hidden" name="" value="{$gallery.id}" class="galid"/>
								<input type="hidden" name="" value="{$thumb.id}" class="thumbid"/>
							</div>
							{*
							<form class="menuForm menu_with_options renameImageForm" id="renameImageForm{$gallery.id}{$thumb.id}form" action="" method="post" rel="{$thumb.id}">
								<input type="hidden" name="" value="{$gallery.id}" class="galid"/>
								<input type="text" name="" value=" Type new caption, then Enter" class="renameImageInput pageMenuInput greyedOut focus"	/>
							</form>*}
							<div class="dropzone {if $smarty.foreach.loop2.iteration+1 is div by 5}fifth{/if} {if $smarty.foreach.loop2.iteration+1 is div by 4}fourth{/if} {if $smarty.foreach.loop2.iteration+1 is div by 3}third{/if} {if $smarty.foreach.loop2.iteration+1 is div by 2}second{/if}"><div></div></div>
							
						{/foreach}
{*						</div>*}
						{if $gallery.images}
						{*<div class="listTipUp thumbsTip">{$SetSeedLangs.Tip_List_Sort}</div>*}
						{/if}

						
				</div>
			</div>
		</div>
		{*
		<form action="galleriesActions.php" method="" id="renameGallery-{$gallery.id}form" class="renameGalleryForm menuForm menu_with_options" style="display:none;">
			<input type="hidden" name="galleriesAction" value="renameGallery"/>
			<input type="hidden" name="id" value="{$gallery.id}" id="id"/>
			<input type="text" name="name" value=" Type new name, then Enter" class="pageMenuInput greyedOut focus"/>
		</form>*}
</div>
<div class="dropzone"><div></div></div>
{/foreach}
{*{if $galleries}
<div class="listTipUp">{$SetSeedLangs.Tip_List_No_Sort}</div>
{/if}*}