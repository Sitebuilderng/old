<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
	
<link rel="stylesheet" type="text/css" href="http://{$url}/css/email.css" />
<style type="text/css">
{literal}
@media only screen and (max-width: 600px) {
	
	p[class="Button_Large"] a { display:block!important; margin-bottom:10px!important; background-image:none!important; margin-right:0!important;}

	div[class="column"] { width: auto!important; float:none!important;}
	
	table.social div[class="column"] {
		width:auto!important;
		}
	td {
	    font-family: "Helvetica Neue", "Open Sans", Helvetica, Arial, sans-serif; 
	}


	h1 { font-size: 34px !important; color:#4A4A4A;}
	h2 { font-size: 27px !important; color:#4A4A4A; }
	h3 { font-size: 17px !important; color:#4A4A4A; }
	h4 { font-size: 17px !important; color:#4A4A4A; }
	h5 { font-size: 14px !important; color:#4A4A4A; }
	h6 { font-size: 14px; text-transform: uppercase; color:#444;}

	.collapse { margin:0!important;}

	p, ul { 
		margin-bottom: 20px; 
		font-weight: normal; 
		font-size:14px !important; 
		line-height:1.6;
		color:#4A4A4A;
		margin-top: 0;
	}
	.container {
		width:auto !important;
	}


}
{/literal}
</style>
</head>
 
<body bgcolor="#FFFFFF">
	{if !$form_autoresponse && !$mailinglist_autoresponse}
		<div style="text-align:center;color:#BEBEBE;font-size:11px;padding:10px 0 10px;font-familiy:arial,sans-serif;" class="hide_in_webversion">Email not displaying properly? <a href="***WEBVERSION***">Click here to view web version</a></div>
	{/if}
<table class="body-wrap header" bgcolor="#192127">
	<tr>
		<td></td>
		<td class="container" width="650">
			<div class="content">
			<table>
				<tr>
					<td colspan="2">
						{$contentSplit.Header}
					</td>
				</tr>
			</table>
			</div><!-- /content -->									
		</td>
		<td></td>
	</tr>
</table>
<table class="body-wrap" bgcolor="#E0E0E0">
	<tr>
		<td></td>
		<td class="container" width="650">
			<div class="content">
			<table>
				<tr>
					<td>{$contentSplit.normal}
					</td>
				</tr>
			</table>
			</div><!-- /content -->
									
		</td>
		<td></td>
	</tr>
</table><!-- /BODY -->

<!-- FOOTER -->
<table class="footer-wrap">
	<tr>
		<td></td>
		<td class="container" width="650">
				<!-- content -->
				<div class="content">
				<table>
				<tr>
					<td align="center">
						{$contentSplit.Footer}
						
					</td>
				</tr>
				</table>
				</div><!-- /content -->
				
		</td>
		<td></td>
	</tr>
</table><!-- /FOOTER -->
<table class="sub-footer-wrap">
	<tr>
		<td></td>
		<td class="container" width="650">
			<div class="content">
				<table>
				<tr>
					<td align="center">

						<p>Sent using our <a href="http://{$url}/">website builder</a>.<br/>
							{if !$form_autoresponse}<a href="http://{$url}/newsletter_remove.php?id=***ID***&email=***EMAIL***" class="hide_in_webversion">Unsubscribe</a>{/if}</p>
					</td>
				</tr>
				</table>
				</div><!-- /content -->
</td>
		<td></td>
	</tr>
</table><!-- /FOOTER -->
</body>
</html>
{*
-------------------------------------------------------------------------------------------------
VARIABLES AVAILABLE IN THIS TEMPLATE: 
-------------------------------------------------------------------------------------------------
{$url} 			<-	URL of the website, without ending slash and without 'http://'
{$content}		<-	The content from the page selected for the newsletter email

-------------------------------------------------------------------------------------------------
PLEASE NOTE THERE ARE THREE OTHER 'VARIABLES' AVAILABLE, BUT THEY ARE NOT SMARTY VARIABLES
-------------------------------------------------------------------------------------------------
The following strings get replaced when them email is sent to a member of the mailing list. 

***FIRST_NAME***
***LAST_NAME***
***EMAIL***
***ID***

-------------------------------------------------------------------------------------------------
*}
