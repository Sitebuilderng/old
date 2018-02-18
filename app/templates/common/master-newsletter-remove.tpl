<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$language}" lang="{$language}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>{if $removed}{$langs.You_Have_Been_Unsubscribed}{else}{$langs.No_Email_Address_Found}{/if}</title>
</head>
<body style="background:#F5F5F5">
	<p style="margin:100px auto;width:300px;font-family:arial,sans-serif;font-size:14px;line-height:20px;color:#666;padding:20px 30px;background:#E2E2E2;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;">{if $removed}{$langs.You_Have_Been_Unsubscribed_More} <strong>{$removed}</strong>{else}{$langs.No_Email_Address_Found_More}{/if}</p>

</body>
</html>
{*
------------------------------------------------------------------------------------
VARIABLES AVAILABLE IN THIS TEMPLATE: 
------------------------------------------------------------------------------------	


{$removed}	<-	The email address that has been removed. Only exists if email was 
				successfully removed.

------------------------------------------------------------------------------------		
*}