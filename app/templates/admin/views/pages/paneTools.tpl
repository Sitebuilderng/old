<div class="paneToolsButtonRow">
	<div class="paneToolsBottomHalf paneToolsDuplicate" id="iconbarDuplicatePages">
		{$SetSeedLangs.Duplicate|htmlspecialchars}
	</div>
	<div class="paneToolsBottomHalf paneToolsDelete" id="iconbarDeletePages">
		{$SetSeedLangs.Delete|htmlspecialchars}
	</div>
</div>
<div class="paneToolsPrimary">
	{$SetSeedLangs.Edit_Content|htmlspecialchars}
</div>
<div class="paneToolsPrimary secondaryAction addSubpagePT">
	<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 800 600" enable-background="new 0 0 800 600" xml:space="preserve">
<circle cx="292.079" cy="201.479" r="36.612"/>
<circle cx="292.079" cy="287.479" r="36.612"/>
<circle cx="292.079" cy="373.288" r="36.612"/>
<circle cx="381.079" cy="373.288" r="36.612"/>
<polygon points="544.538,373.094 438.229,434.73 438.006,311.845 "/>
</svg>
	<span id="addSubpageText">
	{$SetSeedLangs.Add_Subpage|htmlspecialchars}
	</span>
	<span id="viewAddSubpageText" style="display:none">
	{$SetSeedLangs.View_Add_Subpages|htmlspecialchars}
	</span>
</div>

{if $allprivs.0==1 || $master}
<div class="stylesHeading">
	<h2>{$SetSeedLangs.Status|htmlspecialchars}</h2>
</div>			
<div class="subHeaderLeftMenuItem" data-test-value="data-pane-status">
	<div class="target">
		
	</div>
	<div class="triShadow"></div>
	<ul>
		<li><a id="makeOnline" data-lang="{$SetSeedLangs.Live|htmlspecialchars}" data-item-value="live"><span class="key hideIfTouch">{$SetSeedLangs.L|htmlspecialchars}</span>{$SetSeedLangs.Live|htmlspecialchars}</a></li>
		<li><a id="makeOffline" data-lang="{$SetSeedLangs.Offline|htmlspecialchars}" data-item-value="offline"><span class="key hideIfTouch">{$SetSeedLangs.O|htmlspecialchars}</span>{$SetSeedLangs.Offline|htmlspecialchars}</a></li>
	</ul> 
	<div class="mtri"></div>
</div>	
{/if}
<div class="stylesHeading">
	<h2>{$SetSeedLangs.Security|htmlspecialchars}</h2>
</div>
<div class="subHeaderLeftMenuItem" data-test-value="data-security" data-test-type="csv">
	<div class="target">
		
	</div>
	<div class="triShadow"></div>
	<ul>
		<li><a id="public" rel="" data-lang="{$SetSeedLangs.Public|htmlspecialchars}" data-item-value="public">{$SetSeedLangs.Public|htmlspecialchars}</a></li>
		<div id="groupList"></div>
		<li class="iconbarRule"></li>
		<li><a id="addAccessGroup" href="{$accessGroupSalt}">{$SetSeedLangs.Add_Access_Groups|htmlspecialchars}&hellip;</a></li>

	</ul> 
	<div class="mtri"></div>
</div>	
{if $type==""}
{if $includedFrontEndLangs}
<div class="stylesHeading">
	<h2>{$SetSeedLangs.Language|htmlspecialchars}</h2>
</div>			
<div class="subHeaderLeftMenuItem" data-test-value="data-lang">
	<div class="target">
		
	</div>
	<div class="triShadow"></div>
	<ul id="changeAddLanguage">
		<div id="languagesWrapper">
		{if $languages|@count > 0}
		{section name=x loop=$languages}
		<li><a data-lang="{$languages[x].name}" data-item-value="{$languages[x].abr}" fakehref="{$languages[x].abr}" class="changeLanguage dontIncludeInPreview">{$languages[x].name}</a></li>
		{/section}
		{/if}
		</div>
		<li class="iconbarRule"></li>
		{if "ab"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Abkhazian" fakehref="Abkhazian|ab" data-item-value="ab">Abkhazian</a></li>
		{/if}
		{if "aa"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Afar" fakehref="Afar|aa" data-item-value="aa">Afar</a></li>
		{/if}
		{if "af"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Afrikaans" fakehref="Afrikaans|af" data-item-value="af">Afrikaans</a></li>
		{/if}
		{if "ak"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Akan" fakehref="Akan|ak" data-item-value="ak">Akan</a></li>
		{/if}
		{if "sq"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Albanian" fakehref="Albanian|sq" data-item-value="sq">Albanian</a></li>
		{/if}
		{if "am"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Amharic" fakehref="Amharic|am" data-item-value="am">Amharic</a></li>
		{/if}
		{if "ar"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Arabic" fakehref="Arabic|ar" data-item-value="ar">Arabic</a></li>
		{/if}
		{if "an"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Aragonese" fakehref="Aragonese|an" data-item-value="an">Aragonese</a></li>
		{/if}
		{if "hy"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Armenian" fakehref="Armenian|hy" data-item-value="hy">Armenian</a></li>
		{/if}
		{if "as"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Assamese" fakehref="Assamese|as" data-item-value="as">Assamese</a></li>
		{/if}
		{if "av"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Avaric" fakehref="Avaric|av" data-item-value="av">Avaric</a></li>
		{/if}
		{if "ae"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Avestan" fakehref="Avestan|ae" data-item-value="ae">Avestan</a></li>
		{/if}
		{if "ay"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Aymara" fakehref="Aymara|ay" data-item-value="ay">Aymara</a></li>
		{/if}
		{if "az"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Azerbaijani" fakehref="Azerbaijani|az" data-item-value="az">Azerbaijani</a></li>
		{/if}
		{if "bm"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Bambara" fakehref="Bambara|bm" data-item-value="bm">Bambara</a></li>
		{/if}
		{if "ba"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Bashkir" fakehref="Bashkir|ba" data-item-value="ba">Bashkir</a></li>
		{/if}
		{if "eu"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Basque" fakehref="Basque|eu" data-item-value="eu">Basque</a></li>
		{/if}
		{if "be"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Belarusian" fakehref="Belarusian|be" data-item-value="be">Belarusian</a></li>
		{/if}
		{if ""|in_array:$includedFrontEndLangs}
		<li><a data-lang="Bengali" fakehref="Bengali|bn" data-item-value="bn">Bengali</a></li>
		{/if}
		{if "bh"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Bihari" fakehref="Bihari|bh" data-item-value="bh">Bihari</a></li>
		{/if}
		{if "bi"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Bislama" fakehref="Bislama|bi" data-item-value="bi">Bislama</a></li>
		{/if}
		{if "nb"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Bokmål, Norwegian; Norwegian Bokmål" fakehref="Bokmål, Norwegian; Norwegian Bokmål|nb" data-item-value="nb">Bokmål, Norwegian; Norwegian Bokmål</a></li>
		{/if}
		{if "bs"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Bosnian" fakehref="Bosnian|bs" data-item-value="bs">Bosnian</a></li>
		{/if}
		{if "br"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Breton" fakehref="Breton|br" data-item-value="br">Breton</a></li>
		{/if}
		{if "bg"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Bulgarian" fakehref="Bulgarian|bg" data-item-value="bg">Bulgarian</a></li>
		{/if}
		{if "my"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Burmese" fakehref="Burmese|my" data-item-value="my">Burmese</a></li>
		{/if}
		{if "ca"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Catalan; Valencian" fakehref="Catalan; Valencian|ca" data-item-value="ca">Catalan; Valencian</a></li>
		{/if}
		{if "km"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Central Khmer" fakehref="Central Khmer|km" data-item-value="km">Central Khmer</a></li>
		{/if}
		{if "ch"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Chamorro" fakehref="Chamorro|ch" data-item-value="ch">Chamorro</a></li>
		{/if}
		{if "ce"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Chechen" fakehref="Chechen|ce" data-item-value="ce">Chechen</a></li>
		{/if}
		{if "ny"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Chichewa; Chewa; Nyanja" fakehref="Chichewa; Chewa; Nyanja|ny" data-item-value="ny">Chichewa; Chewa; Nyanja</a></li>
		{/if}
		{if "zh"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Chinese" fakehref="Chinese|zh" data-item-value="zh">Chinese</a></li>
		{/if}
		{if "cu"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic" fakehref="Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic|cu" data-item-value="cu">Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic</a></li>
		{/if}
		{if "cv"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Chuvash" fakehref="Chuvash|cv" data-item-value="cv">Chuvash</a></li>
		{/if}
		{if "kw"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Cornish" fakehref="Cornish|kw" data-item-value="kw">Cornish</a></li>
		{/if}
		{if "co"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Corsican" fakehref="Corsican|co" data-item-value="co">Corsican</a></li>
		{/if}
		{if "cr"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Cree" fakehref="Cree|cr" data-item-value="cr">Cree</a></li>
		{/if}
		{if "hr"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Croatian" fakehref="Croatian|hr" data-item-value="hr">Croatian</a></li>
		{/if}
		{if "cs"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Czech" fakehref="Czech|cs" data-item-value="cs">Czech</a></li>
		{/if}
		{if "da"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Danish" fakehref="Danish|da" data-item-value="da">Danish</a></li>
		{/if}
		{if "dv"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Divehi; Dhivehi; Maldivian" fakehref="Divehi; Dhivehi; Maldivian|dv" data-item-value="dv">Divehi; Dhivehi; Maldivian</a></li>
		{/if}
		{if "nl"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Dutch; Flemish" fakehref="Dutch; Flemish|nl" data-item-value="nl">Dutch; Flemish</a></li>
		{/if}
		{if "dz"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Dzongkha" fakehref="Dzongkha|dz" data-item-value="dz">Dzongkha</a></li>
		{/if}
		{if "en"|in_array:$includedFrontEndLangs}
		<li><a data-lang="English" fakehref="English|en" data-item-value="en">English</a></li>
		{/if}
		{if "eo"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Esperanto" fakehref="Esperanto|eo" data-item-value="eo">Esperanto</a></li>
		{/if}
		{if "et"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Estonian" fakehref="Estonian|et" data-item-value="et">Estonian</a></li>
		{/if}
		{if "ee"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Ewe" fakehref="Ewe|ee" data-item-value="ee">Ewe</a></li>
		{/if}
		{if "fo"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Faroese" fakehref="Faroese|fo" data-item-value="fo">Faroese</a></li>
		{/if}
		{if "fj"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Fijian" fakehref="Fijian|fj" data-item-value="fj">Fijian</a></li>
		{/if}
		{if "fi"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Finnish" fakehref="Finnish|fi" data-item-value="fi">Finnish</a></li>
		{/if}
		{if "fr"|in_array:$includedFrontEndLangs}
		<li><a data-lang="French" fakehref="French|fr" data-item-value="fr">French</a></li>
		{/if}
		{if "ff"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Fulah" fakehref="Fulah|ff" data-item-value="ff">Fulah</a></li>
		{/if}
		{if "gd"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Gaelic; Scottish Gaelic" fakehref="Gaelic; Scottish Gaelic|gd" data-item-value="gd">Gaelic; Scottish Gaelic</a></li>
		{/if}
		{if "gl"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Galician" fakehref="Galician|gl" data-item-value="gl">Galician</a></li>
		{/if}
		{if "lg"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Ganda" fakehref="Ganda|lg" data-item-value="lg">Ganda</a></li>
		{/if}
		{if "ka"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Georgian" fakehref="Georgian|ka" data-item-value="ka">Georgian</a></li>
		{/if}
		{if "de"|in_array:$includedFrontEndLangs}
		<li><a data-lang="German" fakehref="German|de" data-item-value="de">German</a></li>
		{/if}
		{if "el"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Greek, Modern (1453-)" fakehref="Greek, Modern (1453-)|el" data-item-value="el">Greek, Modern (1453-)</a></li>
		{/if}
		{if "gn"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Guarani" fakehref="Guarani|gn" data-item-value="gn">Guarani</a></li>
		{/if}
		{if "gu"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Gujarati" fakehref="Gujarati|gu" data-item-value="gu">Gujarati</a></li>
		{/if}
		{if "ht"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Haitian; Haitian Creole" fakehref="Haitian; Haitian Creole|ht" data-item-value="ht">Haitian; Haitian Creole</a></li>
		{/if}
		{if "ha"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Hausa" fakehref="Hausa|ha" data-item-value="ha">Hausa</a></li>
		{/if}
		{if "he"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Hebrew" fakehref="Hebrew|he" data-item-value="he">Hebrew</a></li>
		{/if}
		{if "hz"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Herero" fakehref="Herero|hz" data-item-value="hz">Herero</a></li>
		{/if}
		{if "hi"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Hindi" fakehref="Hindi|hi" data-item-value="hi">Hindi</a></li>
		{/if}
		{if "ho"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Hiri Motu" fakehref="Hiri Motu|ho" data-item-value="ho">Hiri Motu</a></li>
		{/if}
		{if "hu"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Hungarian" fakehref="Hungarian|hu" data-item-value="hu">Hungarian</a></li>
		{/if}
		{if "is"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Icelandic" fakehref="Icelandic|is" data-item-value="is">Icelandic</a></li>
		{/if}
		{if "io"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Ido" fakehref="Ido|io" data-item-value="io">Ido</a></li>
		{/if}
		{if "ig"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Igbo" fakehref="Igbo|ig" data-item-value="ig">Igbo</a></li>
		{/if}
		{if "id"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Indonesian" fakehref="Indonesian|id" data-item-value="id">Indonesian</a></li>
		{/if}
		{if "ia"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Interlingua (International Auxiliary Language Association)" fakehref="Interlingua (International Auxiliary Language Association)|ia" data-item-value="ia">Interlingua (International Auxiliary Language Association)</a></li>
		{/if}
		{if "ie"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Interlingue" fakehref="Interlingue|ie" data-item-value="ie">Interlingue</a></li>
		{/if}
		{if "iu"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Inuktitut" fakehref="Inuktitut|iu" data-item-value="iu">Inuktitut</a></li>
		{/if}
		{if "ik"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Inupiaq" fakehref="Inupiaq|ik" data-item-value="ik">Inupiaq</a></li>
		{/if}
		{if "ga"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Irish" fakehref="Irish|ga" data-item-value="ga">Irish</a></li>
		{/if}
		{if "it"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Italian" fakehref="Italian|it" data-item-value="it">Italian</a></li>
		{/if}
		{if "ja"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Japanese" fakehref="Japanese|ja" data-item-value="ja">Japanese</a></li>
		{/if}
		{if "jv"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Javanese" fakehref="Javanese|jv" data-item-value="jv">Javanese</a></li>
		{/if}
		{if "kl"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Kalaallisut; Greenlandic" fakehref="Kalaallisut; Greenlandic|kl" data-item-value="kl">Kalaallisut; Greenlandic</a></li>
		{/if}
		{if "kn"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Kannada" fakehref="Kannada|kn" data-item-value="kn">Kannada</a></li>
		{/if}
		{if "kr"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Kanuri" fakehref="Kanuri|kr" data-item-value="kr">Kanuri</a></li>
		{/if}
		{if "ks"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Kashmiri" fakehref="Kashmiri|ks" data-item-value="ks">Kashmiri</a></li>
		{/if}
		{if "kk"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Kazakh" fakehref="Kazakh|kk" data-item-value="kk">Kazakh</a></li>
		{/if}
		{if "ki"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Kikuyu; Gikuyu" fakehref="Kikuyu; Gikuyu|ki" data-item-value="ki">Kikuyu; Gikuyu</a></li>
		{/if}
		{if "rw"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Kinyarwanda" fakehref="Kinyarwanda|rw" data-item-value="rw">Kinyarwanda</a></li>
		{/if}
		{if "ky"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Kirghiz; Kyrgyz" fakehref="Kirghiz; Kyrgyz|ky" data-item-value="ky">Kirghiz; Kyrgyz</a></li>
		{/if}
		{if "kv"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Komi" fakehref="Komi|kv" data-item-value="kv">Komi</a></li>
		{/if}
		{if "kg"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Kongo" fakehref="Kongo|kg" data-item-value="kg">Kongo</a></li>
		{/if}
		{if "ko"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Korean" fakehref="Korean|ko" data-item-value="ko">Korean</a></li>
		{/if}
		{if "kj"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Kuanyama; Kwanyama" fakehref="Kuanyama; Kwanyama|kj" data-item-value="kj">Kuanyama; Kwanyama</a></li>
		{/if}
		{if "ku"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Kurdish" fakehref="Kurdish|ku" data-item-value="ku">Kurdish</a></li>
		{/if}
		{if "lo"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Lao" fakehref="Lao|lo" data-item-value="lo">Lao</a></li>
		{/if}
		{if "la"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Latin" fakehref="Latin|la" data-item-value="la">Latin</a></li>
		{/if}
		{if "lv"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Latvian" fakehref="Latvian|lv" data-item-value="lv">Latvian</a></li>
		{/if}
		{if "li"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Limburgan; Limburger; Limburgish" fakehref="Limburgan; Limburger; Limburgish|li" data-item-value="li">Limburgan; Limburger; Limburgish</a></li>
		{/if}
		{if "ln"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Lingala" fakehref="Lingala|ln" data-item-value="ln">Lingala</a></li>
		{/if}
		{if "lt"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Lithuanian" fakehref="Lithuanian|lt" data-item-value="lt">Lithuanian</a></li>
		{/if}
		{if "lu"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Luba-Katanga" fakehref="Luba-Katanga|lu" data-item-value="lu">Luba-Katanga</a></li>
		{/if}
		{if "lb"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Luxembourgish; Letzeburgesch" fakehref="Luxembourgish; Letzeburgesch|lb" data-item-value="lb">Luxembourgish; Letzeburgesch</a></li>
		{/if}
		{if "mk"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Macedonian" fakehref="Macedonian|mk" data-item-value="mk">Macedonian</a></li>
		{/if}
		{if "mg"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Malagasy" fakehref="Malagasy|mg" data-item-value="mg">Malagasy</a></li>
		{/if}
		{if "ml"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Malayalam" fakehref="Malayalam|ml" data-item-value="ml">Malayalam</a></li>
		{/if}
		{if "ms"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Malay" fakehref="Malay|ms" data-item-value="ms">Malay</a></li>
		{/if}
		{if "mt"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Maltese" fakehref="Maltese|mt" data-item-value="mt">Maltese</a></li>
		{/if}
		{if "gv"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Manx" fakehref="Manx|gv" data-item-value="gv">Manx</a></li>
		{/if}
		{if "mi"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Maori" fakehref="Maori|mi" data-item-value="mi">Maori</a></li>
		{/if}
		{if "mr"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Marathi" fakehref="Marathi|mr" data-item-value="mr">Marathi</a></li>
		{/if}
		{if "mh"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Marshallese" fakehref="Marshallese|mh" data-item-value="mh">Marshallese</a></li>
		{/if}
		{if "mo"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Moldavian" fakehref="Moldavian|mo" data-item-value="mo">Moldavian</a></li>
		{/if}
		{if "mn"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Mongolian" fakehref="Mongolian|mn" data-item-value="mn">Mongolian</a></li>
		{/if}
		{if "na"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Nauru" fakehref="Nauru|na" data-item-value="na">Nauru</a></li>
		{/if}
		{if "nv"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Navajo; Navaho" fakehref="Navajo; Navaho|nv" data-item-value="nv">Navajo; Navaho</a></li>
		{/if}
		{if "nd"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Ndebele, North; North Ndebele" fakehref="Ndebele, North; North Ndebele|nd" data-item-value="nd">Ndebele, North; North Ndebele</a></li>
		{/if}
		{if "nr"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Ndebele, South; South Ndebele" fakehref="Ndebele, South; South Ndebele|nr" data-item-value="nr">Ndebele, South; South Ndebele</a></li>
		{/if}
		{if "ng"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Ndonga" fakehref="Ndonga|ng" data-item-value="ng">Ndonga</a></li>
		{/if}
		{if "ne"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Nepali" fakehref="Nepali|ne" data-item-value="ne">Nepali</a></li>
		{/if}
		{if "se"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Northern Sami" fakehref="Northern Sami|se" data-item-value="se">Northern Sami</a></li>
		{/if}
		{if "nn"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Norwegian Nynorsk; Nynorsk, Norwegian" fakehref="Norwegian Nynorsk; Nynorsk, Norwegian|nn" data-item-value="nn">Norwegian Nynorsk; Nynorsk, Norwegian</a></li>
		{/if}
		{if "no"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Norwegian" fakehref="Norwegian|no" data-item-value="no">Norwegian</a></li>
		{/if}
		{if "oc"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Occitan (post 1500); Provençal" fakehref="Occitan (post 1500); Provençal|oc" data-item-value="oc">Occitan (post 1500); Provençal</a></li>
		{/if}
		{if "oj"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Ojibwa" fakehref="Ojibwa|oj" data-item-value="oj">Ojibwa</a></li>
		{/if}
		{if "or"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Oriya" fakehref="Oriya|or" data-item-value="or">Oriya</a></li>
		{/if}
		{if "om"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Oromo" fakehref="Oromo|om" data-item-value="om">Oromo</a></li>
		{/if}
		{if "os"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Ossetian; Ossetic" fakehref="Ossetian; Ossetic|os" data-item-value="os">Ossetian; Ossetic</a></li>
		{/if}
		{if "pi"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Pali" fakehref="Pali|pi" data-item-value="pi">Pali</a></li>
		{/if}
		{if "pa"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Panjabi; Punjabi" fakehref="Panjabi; Punjabi|pa" data-item-value="pa">Panjabi; Punjabi</a></li>
		{/if}
		{if "fa"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Persian" fakehref="Persian|fa" data-item-value="fa">Persian</a></li>
		{/if}
		{if "pl"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Polish" fakehref="Polish|pl" data-item-value="pl">Polish</a></li>
		{/if}
		{if "pt"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Portuguese" fakehref="Portuguese|pt" data-item-value="pt">Portuguese</a></li>
		{/if}
		{if "ps"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Pushto" fakehref="Pushto|ps" data-item-value="ps">Pushto</a></li>
		{/if}
		{if "qu"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Quechua" fakehref="Quechua|qu" data-item-value="qu">Quechua</a></li>
		{/if}
		{if "ro"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Romanian" fakehref="Romanian|ro" data-item-value="ro">Romanian</a></li>
		{/if}
		{if "rm"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Romansh" fakehref="Romansh|rm" data-item-value="rm">Romansh</a></li>
		{/if}
		{if "rn"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Rundi" fakehref="Rundi|rn" data-item-value="rn">Rundi</a></li>
		{/if}
		{if "ru"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Russian" fakehref="Russian|ru" data-item-value="ru">Russian</a></li>
		{/if}
		{if "sm"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Samoan" fakehref="Samoan|sm" data-item-value="sm">Samoan</a></li>
		{/if}
		{if "sg"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Sango" fakehref="Sango|sg" data-item-value="sg">Sango</a></li>
		{/if}
		{if "sa"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Sanskrit" fakehref="Sanskrit|sa" data-item-value="sa">Sanskrit</a></li>
		{/if}
		{if "sc"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Sardinian" fakehref="Sardinian|sc" data-item-value="sc">Sardinian</a></li>
		{/if}
		{if "sr"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Serbian" fakehref="Serbian|sr" data-item-value="sr">Serbian</a></li>
		{/if}
		{if "sn"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Shona" fakehref="Shona|sn" data-item-value="sn">Shona</a></li>
		{/if}
		{if "ii"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Sichuan Yi" fakehref="Sichuan Yi|ii" data-item-value="ii">Sichuan Yi</a></li>
		{/if}
		{if "sd"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Sindhi" fakehref="Sindhi|sd" data-item-value="sd">Sindhi</a></li>
		{/if}
		{if "si"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Sinhala; Sinhalese" fakehref="Sinhala; Sinhalese|si" data-item-value="si">Sinhala; Sinhalese</a></li>
		{/if}
		{if "sk"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Slovak" fakehref="Slovak|sk" data-item-value="sk">Slovak</a></li>
		{/if}
		{if "sl"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Slovenian" fakehref="Slovenian|sl" data-item-value="sl">Slovenian</a></li>
		{/if}
		{if "so"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Somali" fakehref="Somali|so" data-item-value="so">Somali</a></li>
		{/if}
		{if "st"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Sotho, Southern" fakehref="Sotho, Southern|st" data-item-value="st">Sotho, Southern</a></li>
		{/if}
		{if "es"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Spanish; Castilian" fakehref="Spanish; Castilian|es" data-item-value="es">Spanish; Castilian</a></li>
		{/if}
		{if "su"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Sundanese" fakehref="Sundanese|su" data-item-value="su">Sundanese</a></li>
		{/if}
		{if "sw"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Swahili" fakehref="Swahili|sw" data-item-value="sw">Swahili</a></li>
		{/if}
		{if "ss"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Swati" fakehref="Swati|ss" data-item-value="ss">Swati</a></li>
		{/if}
		{if "sv"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Swedish" fakehref="Swedish|sv" data-item-value="sv">Swedish</a></li>
		{/if}
		{if "tl"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Tagalog" fakehref="Tagalog|tl" data-item-value="tl">Tagalog</a></li>
		{/if}
		{if "ty"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Tahitian" fakehref="Tahitian|ty" data-item-value="ty">Tahitian</a></li>
		{/if}
		{if "tg"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Tajik" fakehref="Tajik|tg" data-item-value="tg">Tajik</a></li>
		{/if}
		{if "ta"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Tamil" fakehref="Tamil|ta" data-item-value="ta">Tamil</a></li>
		{/if}
		{if "tt"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Tatar" fakehref="Tatar|tt" data-item-value="tt">Tatar</a></li>
		{/if}
		{if "te"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Telugu" fakehref="Telugu|te" data-item-value="te">Telugu</a></li>
		{/if}
		{if "th"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Thai" fakehref="Thai|th" data-item-value="th">Thai</a></li>
		{/if}
		{if "bo"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Tibetan" fakehref="Tibetan|bo" data-item-value="bo">Tibetan</a></li>
		{/if}
		{if "ti"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Tigrinya" fakehref="Tigrinya|ti" data-item-value="ti">Tigrinya</a></li>
		{/if}
		{if "to"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Tonga (Tonga Islands)" fakehref="Tonga (Tonga Islands)|to" data-item-value="to">Tonga (Tonga Islands)</a></li>
		{/if}
		{if "ts"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Tsonga" fakehref="Tsonga|ts" data-item-value="ts">Tsonga</a></li>
		{/if}
		{if "tn"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Tswana" fakehref="Tswana|tn" data-item-value="tn">Tswana</a></li>
		{/if}
		{if "tr"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Turkish" fakehref="Turkish|tr" data-item-value="tr">Turkish</a></li>
		{/if}
		{if "tk"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Turkmen" fakehref="Turkmen|tk" data-item-value="tk">Turkmen</a></li>
		{/if}
		{if "tw"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Twi" fakehref="Twi|tw" data-item-value="tw">Twi</a></li>
		{/if}
		{if "ug"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Uighur; Uyghur" fakehref="Uighur; Uyghur|ug" data-item-value="ug">Uighur; Uyghur</a></li>
		{/if}
		{if "uk"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Ukrainian" fakehref="Ukrainian|uk" data-item-value="uk">Ukrainian</a></li>
		{/if}
		{if "ur"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Urdu" fakehref="Urdu|ur" data-item-value="ur">Urdu</a></li>
		{/if}
		{if "uz"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Uzbek" fakehref="Uzbek|uz" data-item-value="uz">Uzbek</a></li>
		{/if}
		{if "ve"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Venda" fakehref="Venda|ve" data-item-value="ve">Venda</a></li>
		{/if}
		{if "vi"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Vietnamese" fakehref="Vietnamese|vi" data-item-value="vi">Vietnamese</a></li>
		{/if}
		{if "vo"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Volapük" fakehref="Volapük|vo" data-item-value="vo">Volapük</a></li>
		{/if}
		{if "wa"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Walloon" fakehref="Walloon|wa" data-item-value="wa">Walloon</a></li>
		{/if}
		{if "cy"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Welsh" fakehref="Welsh|cy" data-item-value="cy">Welsh</a></li>
		{/if}
		{if "fy"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Western Frisian" fakehref="Western Frisian|fy" data-item-value="fy">Western Frisian</a></li>
		{/if}
		{if "wo"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Wolof" fakehref="Wolof|wo" data-item-value="wo">Wolof</a></li>
		{/if}
		{if "xh"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Xhosa" fakehref="Xhosa|xh" data-item-value="xh">Xhosa</a></li>
		{/if}
		{if "yi"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Yiddish" fakehref="Yiddish|yi" data-item-value="yi">Yiddish</a></li>
		{/if}
		{if "yo"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Yoruba" fakehref="Yoruba|yo" data-item-value="yo">Yoruba</a></li>
		{/if}
		{if "za"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Zhuang; Chuang" fakehref="Zhuang; Chuang|za" data-item-value="za">Zhuang; Chuang</a></li>
		{/if}
		{if "zu"|in_array:$includedFrontEndLangs}
		<li><a data-lang="Zulu" fakehref="Zulu|zu" data-item-value="zu">Zulu</a></li>
		{/if}
	</ul> 
	<div class="mtri"></div>
</div>	
{/if}
{/if}
{if $allprivs.15==1||$master}
{if $permissionGroups}
<div class="stylesHeading">
	<h2>{$SetSeedLangs.Permission_Groups|htmlspecialchars}</h2>
</div>
<div class="subHeaderLeftMenuItem autoCSVItem" 
	
	data-test-value="data-permissions" 
	data-test-type="csv"
	
	data-auto-csv-clicked-id="permission-group-id" 
	data-auto-csv-scope="#adminPages"
	data-auto-csv-list-item-id="rel"
	data-auto-csv-ajax-page="pageActions.php"
	data-auto-csv-query-start="pageAction=changePageInPermissionGroup"
	data-auto-csv-hidden-input-prefix="pagepermissiongroup"
	data-auto-csv-attr-to-update="data-permissions"
	
	>
	<div class="target">
		
	</div>
	<div class="triShadow"></div>
	<ul>
		<div class="permissions-list">{include file=views/admin/permissiongroups.tpl groups=$permissionGroups}</div>
		<a href="" data-lang="{$SetSeedLangs.None|htmlspecialchars}" data-item-value="" class="empty" style="display:none"></a>
	</ul> 
	<div class="mtri"></div>
</div>	
{/if}
{/if}
<a id="redirectingPageToggle" class="paneToolToggleItem paneToolsOnlyOne" data-test-value="data-page-redirect-to" data-test-value-checked="yes">{$SetSeedLangs.Redirecting_Page|htmlspecialchars}</a>

<a id="exludedPageToggle" class="paneToolToggleItem" data-test-value="data-excluded" data-test-value-checked="1">{$SetSeedLangs.Hide_From_Menus|htmlspecialchars}</a>

<a id="redirectFirstSubPageToggle" class="withSubPagesOnly paneToolToggleItem" data-test-value="data-redirect-first" data-test-value-checked="1">{$SetSeedLangs.Redirect_To_Sub|htmlspecialchars}</a>

<a id="newWindowToggle" class="paneToolToggleItem" data-test-value="data-new-window" data-test-value-checked="1">{$SetSeedLangs.Open_In_New|htmlspecialchars}</a>