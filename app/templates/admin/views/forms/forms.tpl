{*
	IMPORTANT:
	Editing this template in any way will result in the admin system failing to work and is in breech of the EULA.

*}
{*<a href="" id="showAddFormForm">Add new form</a>
<div class="bpe_rule"></div>*}

<span class='noPages' {if $forms}style='display:none'{/if}>{$SetSeedLangs.No_Forms_Added}</span>
{if $forms|@count>0}
<div class="dropzone"><div></div></div>
{foreach from=$forms item=form key=key name=formloop}
<div class="bpe_menu_sub responsiveListItem formItem dropship_component_item"  rel="{$form.name|@htmlspecialchars}" id="form{$form.id}" form-id="{$form.id}" data-destination="{$form.destination|@htmlspecialchars}" name="{$form.name|htmlspecialchars}" data-autoresponder-id="{$form.autoresponder_id}" data-autoresponder-title="{$form.autoresponder_page_title}" data-autoresponder-subject="{$form.autoresponder_subject}" data-redirect-on-send="{$form.redirect_on_send|htmlspecialchars}" data-newsletter-id="{$form.add_to_newsletter_id}">
	<div class="menu_with_options menu_hidden_extras bpe_menu_sub_item2 {if $form.show=="yes"}bpe_sub_hilite2{/if}">
	{*}<div class="duplicateItem dupeForm" title="Duplicate form" href="{$form.id}"></div>
	<div class="show_choices bpe_remove_menu_item" title="Remove form">
	 	<div class="choices confirmDelete">
			<div class="choices_inner">
				<div class="choices_inner_inner">
					<span class='bpe_menu_group'>Delete form. Are you sure?</span>
					<div class="bpe_rule"></div>
					<a href="" class="cancel_confirm">No</a>
					<a href="" class="confirmDeleteForm" id="{$form.id}">Yes</a>
				</div>
			</div>
		</div>
	 </div>*}
	{*<span class="renameItem toggleRenameForm" id="renameForm-{$form.id}" title="{$form.name|htmlspecialchars}">*}<span class="overflowEllipsis">{$form.name|htmlspecialchars}</span>{*</span>*}</div>
	<div class='bpe_menu_sub_items2 bpe_wide menuScroll'{* {if $form.show=="yes"} style="display:block"{/if}*}>
		<div class='bpe_menu_top'>
			<div class='bpe_menu_bottom'>{*
				<a href="" id="addInputForm{$form.id}" class="toggleAddInputform">Add new field</a>
				<div class="bpe_rule"></div>*}
				
				<div class="formInputs">
					
					{if !$form.inputs}<span class='noPages'>{$SetSeedLangs.No_Fields_Added}</span>{/if}
						<div class="sortable" id="formFields-{$form.id}">
							<div class="dropzone"><div></div></div>
							
						{foreach from=$form.inputs item=item key=key name=loop1}

							<div class="responsiveListItem formInputItem {if $item.type=="radiogroup" || $item.type=="select"}withOptions{/if}" id="input-{$item.id}" input-id="{$item.id}" rel="{$item.label|htmlspecialchars}" data-input-type="{if $item.date}date{else}{$item.type}{/if}" data-input-required="{$item.required}" data-input-width="{$item.width}">
{*								<div class="formFieldDrag pageDrag"></div>
								<div class="show_choices3 bpe_remove_menu_item">
								 	<div class="choices3 confirmDelete" style="left:-150px">
										<div class="choices_inner">
											<div class="choices_inner_inner">
												<span class='bpe_menu_group'>Delete field. Are you sure?</span>
												<div class="bpe_rule"></div>
												<a href="" class="cancel_confirm">No</a>
												<a href="{$form.id}" class="deleteInputButton" id="{$item.id}">Yes</a>
											</div>
										</div>
									</div>
								 </div>*}
{*								<div class="menu_options4 inputType">
									<div class="option_selected">*}
										<span class="itemTag">
										{if $item.type=="name"}{$SetSeedLangs.Field_Type_Name}{/if}
										{if $item.type=="hr"}{$SetSeedLangs.Field_Type_HR}{/if}
										{if $item.type=="clear"}{$SetSeedLangs.Field_Type_New_Row}{/if}
										{if $item.type=="email"}{$SetSeedLangs.Field_Type_Email}{/if}
										{if $item.type=="phone"}{$SetSeedLangs.Field_Type_Phone}{/if}
										{if $item.date}
										{$SetSeedLangs.Field_Type_Date}
										{else}
										{if $item.type=="short"}{$SetSeedLangs.Field_Type_Short}{/if}
										{/if}
										{if $item.type=="long"}{$SetSeedLangs.Field_Type_Long}{/if}

										{if $item.type=="checkbox"}{$SetSeedLangs.Field_Type_Checkbox}{/if}
										{if $item.type=="select"}{$SetSeedLangs.Field_Type_Dropdown}{/if}
										{if $item.type=="radiogroup"}{$SetSeedLangs.Field_Type_Radio}{/if}
										{if $item.type=="heading"}{$SetSeedLangs.Field_Type_Heading}{/if}
										{if $item.type=="text"}{$SetSeedLangs.Field_Type_Text}{/if}
										{if $item.type=="file"}{$SetSeedLangs.Field_Type_File}{/if}
										</span>
{*
									</div>
									
									<div class="choices menuScroll" style="left:auto;right:-15px">
										<div class="choices_inner">
											<div class="choices_inner_inner">
												<a href="{$item.id}" class="{if $item.required=="yes"}choice_selected{/if} fieldRequired" id="{$form.id}">Required</a>
												<div class="bpe_rule"></div>
												<div class="changeFieldType" id="{$form.id}">
													<a href="name" {if $item.type=="name"} class="choice_selected"{/if} id="{$item.id}">Name</a>
													<a href="email" {if $item.type=="email"} class="choice_selected"{/if} id="{$item.id}">Email Address</a>
													<a href="phone" {if $item.type=="phone"} class="choice_selected"{/if} id="{$item.id}">Phone Number</a>
													<a href="short" {if $item.type=="short"} class="choice_selected"{/if} id="{$item.id}">Short text field</a>
													<a href="long" {if $item.type=="long"} class="choice_selected"{/if} id="{$item.id}">Long text field</a>
													<a href="checkbox" {if $item.type=="checkbox"} class="choice_selected"{/if} id="{$item.id}">Check-box</a>
													<a href="select" {if $item.type=="select"} class="choice_selected"{/if} id="{$item.id}">Drop down menu of choices</a>
													<a href="radiogroup" {if $item.type=="radiogroup"} class="choice_selected"{/if} id="{$item.id}">List of choices</a>
													<a href="file" {if $item.type=="file"} class="choice_selected"{/if} id="{$item.id}">File upload</a>
													<div class="bpe_rule"></div>
													<a href="heading" {if $item.type=="heading"} class="choice_selected"{/if} id="{$item.id}">Heading</a>
													<a href="text" {if $item.type=="text"} class="choice_selected"{/if} id="{$item.id}">Text</a>
												</div>
											</div>
										</div>
									</div>
								</div>*}
								{*{if $item.type == "select" || $item.type == "radiogroup"}*}
								<div class="inputOptions">
									
									<div class="optionSortable" id="options-{$item.id}">
										{if !$item.options}<span class="noPages">{$SetSeedLangs.No_Field_Options_Added}</span>{/if}
										<div class="dropzone"><div></div></div>
										
										{foreach from=$item.options item=option}
											<div class="responsiveListItem optionItem" name="{$option|htmlspecialchars}">												
												<span class='overflowEllipsis'>{$option|htmlspecialchars}</span>
											</div>
											<div class="dropzone"><div></div></div>
										{/foreach}
									</div>
									<div class="hideOnReset addOptionForm responsiveListAddForm showAtBottom" action="" method="post" id="{$item.id}" style="display:none">
										<div class="imageContextEditFieldset">
											<div class="imageContextEditLabel">{$SetSeedLangs.Option_Name|htmlspecialchars}</div>
											<div class="imageContextEditInputWrap"><input type="text" name="" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
										</div>
										<input type="hidden" name="formid" value="{$form.id}" class="formid"/>
										
									</div>
								</div>
								{*{/if}*}
								
								
								<span class='overflowEllipsis'>{$item.label|htmlspecialchars}<span {if $item.required!="yes"}style="display:none;"{/if} class="responsiveListItemInfo asterix">*</span></span>


								
						</div>
						
						<div class="responsiveListAddForm inline renameFieldForm" id="renameFieldForm{$form.id}{$item.id}form" action="" method="post" rel="{$item.id}" style="display:none">
							<input type="hidden" name="formid" value="{$form.id}" class="formid"/>
							<input type="text" name="" value="{$item.label|htmlspecialchars}" class="renameFieldInput focus"	/>
						</div>

						<div class="dropzone"><div></div></div>
						
					{/foreach}
					<form action="/admin/formsActions.php" method="post" style="display:none" class="hideOnReset addInputForm responsiveListAddForm showAtBottom" id="addInputForm{$form.id}form">
						<div class="imageContextEditFieldset">
							<div class="imageContextEditLabel">{$SetSeedLangs.Input_Label|htmlspecialchars}</div>
							<div class="imageContextEditInputWrap"><input type="text" name="label" id="selectOption{$form.id}label" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
						</div>
						<input type="hidden" name="formsAction" value="addInput"/>
						<input type="hidden" name="order" value="{if $form.inputs}{$item.order+10}{else}10{/if}" style="width:40px"/>
						<input type="hidden" name="belongs_to_form" value="{$form.id}" class="selectedForm"/>
					</form>
					{if $form.inputs}
					{*<div class="listTipUp">{$SetSeedLangs.Tip_List_Sort}</div>*}
					{/if}
					</div>

					
				</div>
					<div class="bpe_rule"></div>
				<a href="" class="toggleChangeDestinationForm" id="changeDestination-{$form.id}"><span class="key" style="max-width:280px;text-align:right;">{if $form.destination!=""}{$form.destination}{else}No recipient specified yet{/if}</span>Email recipient</a>	
				{*
				<form action="formsActions.php" method="" id="changeDestination-{$form.id}form" class="changeDestinationForm menuForm menu_with_options" style="display:none;">
					<input type="hidden" name="formsAction" value="changeDestination"/>
					<input type="hidden" name="formId" value="{$form.id}"/>
					<input type="text" name="destination" value=" Type email address, then Enter" class="pageMenuInput greyedOut focus"/>
				</form>*}
			</div>
		</div>
	</div>
	{*
	<form action="formsActions.php" method="" id="renameForm-{$form.id}form" class="renameFormForm menuForm menu_with_options" style="display:none;">
		<input type="hidden" name="formsAction" value="changeDestination"/>
		<input type="hidden" name="formId" value="{$form.id}"/>
		<input type="text" name="name" value=" Type new name, then Enter" class="pageMenuInput greyedOut focus"/>
	</form>
	*}
</div>
<div class="dropzone"><div></div></div>

{/foreach}
{*<div class="listTipUp">{$SetSeedLangs.Tip_List_No_Sort}</div>*}

{/if}
