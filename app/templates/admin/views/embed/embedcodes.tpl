<div class="dropzone"><div></div></div>
{foreach from=$embedCodes item=embedCode key=key name=loop1}
{include file="admin/views/embed/embedcodeitem.tpl" embedCode=$embedCode}
{/foreach}
<div class="noPages"{if $embedCodes} style="display:none;"{/if}>{$SetSeedLangs.No_Embed_Codes}</div>
{if $embedCodes}
{*<div class="listTipUp">{$SetSeedLangs.Tip_List_No_Sort}</div>*}
{/if}