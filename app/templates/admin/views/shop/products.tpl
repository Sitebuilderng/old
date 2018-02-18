<input type="hidden" name="" value="{$currency_sym}" id="curSym"/>
{if !$ajax || $init}

<div class="filterBox clearfix dropshipToolbar">
	<div class="toolbarFilter clearfix">
	<input type="text" class="productsFilterSearch" value="{if !$productsFilterSearch}Search{else}{$productsFilterSearch}{/if}" />	
	{if $productsFilterSearch}
	<img src="/admin/graphics/bpeditor/remove_menu_item_off.png" class="clearSearch" id='clearSearch'/>
	{/if}
	</div>
	
</div>
{/if}
{if $initPane}
<div class="dropzone"><div></div></div>
{/if}
{if !$pagination}
<span class="noPages" {if $products}style="display:none"{/if}>{$SetSeedLangs.No_Products}</span>
{/if}
{foreach from=$products item=item key=key name=loop1}
	<div class="bpe_menu_sub responsiveListItem productItemMain" id="prod{$item.id}" rel="{$item.name|@htmlspecialchars}" data-discount-1-price="{$item.vol_dis_1_price}" data-discount-1-threshold="{$item.vol_dis_1_thr}" data-discount-2-price="{$item.vol_dis_2_price}" data-discount-2-threshold="{$item.vol_dis_2_thr}" product-id="{$item.id}" data-product-type="{$item.type}" only-one="{$item.only_one}" product-price="{$item.price}" product-sell-only-if-stock="{$item.sellOnlyIfStock}" product-stock="{$item.inStock}" product-weight="{$item.weight}" name="{$item.name|@htmlspecialchars}" data-product-cats="{$item.inCatsCSV}" data-form-id="{$item.formId}" data-gal-id="{$item.galId}" options-separate-stock="{if $item.speparateStockForOptions==1}yes{else}no{/if}">
	<div class="insertProduct menu_with_options menu_hidden_extras productItem type_{$item.type} {if $item.speparateStockForOptions==1}optionsSeparateStock{/if}" id="{$item.id}" rel="{$item.name|@htmlspecialchars}">
		
		<div class="productOptions">
			
			<div class="dropzone"><div></div></div>
			<span class='noPages' {if $item.variants}style="display:none"{/if}>{$SetSeedLangs.No_Product_Options}</span>
			{foreach from=$item.variants item=variants key=key name=loop1}
		
				<div class="responsiveListItem productOption {if $item.speparateStockForOptions==1}optionsSeparateStock{/if}" name="{$variants.name|htmlspecialchars}" data-option-price="{$currency_sym}{$variants.price}" data-discount-1-price="{$variants.vol_dis_1_price}" data-discount-1-threshold="{$variants.vol_dis_1_thr}" data-discount-2-price="{$variants.vol_dis_2_price}" data-discount-2-threshold="{$variants.vol_dis_2_thr}" data-option-has-stock="{if $item.speparateStockForOptions==1}yes{else}no{/if}" product-option-stock="{$variants.stock}">
					<span class="responsiveListItemInfo productOptionPrice">{$currency_sym}{$variants.price}</span>
					<span class="responsiveListItemInfo productOptionStock">{$variants.stock}</span>
					<span class="overflowEllipsis" title="{$variants.name|htmlspecialchars}">{$variants.name|htmlspecialchars}</span>
				</div>
		
				<div class="dropzone"><div></div></div>	
	
			{/foreach}
			<div class="showAtBottom addProductOptionForm responsiveListAddForm hideOnReset" action="" method="post" id="{$item.id}" style="display:none">
				<div class="imageContextEditFieldset">
					<div class="imageContextEditLabel">{$SetSeedLangs.Product_Option_Name|htmlspecialchars}</div>
					<div class="imageContextEditInputWrap"><input type="text" name="" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
				</div>

			</div>
			
		</div>
		<span class="responsiveListItemInfo productPrice">{$currency_sym}{$item.price}</span>
		<span class="responsiveListItemInfo productStock">{$item.inStock}</span>

		<span class="overflowEllipsis">{$item.name|htmlspecialchars}</span>
		{foreach from=$item.inCats item=cat} 
				<input type="hidden" id="cat{$cat}" value="{$cat}"/>
		{/foreach}
	</div>
	{*
	<form action="shopActions.php" method="post" class="renameForm" style="display:none;">
		<input type="hidden" name="shopAction" value="renameProduct"/>
		<input type="hidden" name="id" value="{$item.id}"/>
		<input type="text" name="name" value=" Type new name, then Enter" class="pageMenuInput greyedOut focus"/>
	</form>*}
	</div>
	<div class="dropzone"><div></div></div>
{/foreach}
{if !$ajax || $searching || $initPane}
<div class="clear insertNewItemsBefore"></div>
<a href="50" class="showMoreItems"></a>
{/if}
{if $products}
{*<div class="listTipUp">{$SetSeedLangs.Tip_List_No_Sort}</div>*}
{/if}
<div id="productCatsMenuList" style="display:none">
	{*<div class="fakeAddFormItem iconbarAddProductCategory">{$SetSeedLangs.New_Product_Category|htmlspecialchars}</div>*}
	<div class="responsiveListAddForm addProductCategory hideOnReset" style="display:none">
	<div class="imageContextEditFieldset">
		<div class="imageContextEditLabel">{$SetSeedLangs.Product_Category_Name|htmlspecialchars}</div>
		<div class="imageContextEditInputWrap"><input type="text" name="" class="focus clearAfterSend okToSendWhenFilled" value=""/></div>
	</div>

	</div>
	{*{if $products}
	{foreach from=$products item=prodCat name=loop1}
	<a href="#" product-cat-id="{$prodCat.id}" product-parent-id="{$prodCat.parent_id}" class="indent{$prodCat.level} bpe_selection_tool greyedOut"><span class="overflowEllipsis">{$prodCat.name}</span></a>
		
	{/foreach}	
	<div class='iconbarRule'></div>
	{/if}*}
</div>