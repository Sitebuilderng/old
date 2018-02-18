<?php include "html_email_header.php"; ?>


<h1 style="margin: 2em 0 1em;font-size:20px;font-family:arial,sans-serif;text-align:center;">Your website is about to expire! </h1>

<p style="margin: 1em 0;font-size:14px;line-height:18px;font-family:arial,sans-serif;text-align:center;">Your  free trial of our premium plan will expire in <b><?php echo $days_left; ?></b> days. Premium membership includes acess to <b>Unlimited pages with no ads, Unlimited products, Unlimited blog articles, Galleries, Contact Forms, Calendars</b></p>

<p style="margin: 1em 0;font-size:14px;line-height:18px;font-family:arial,sans-serif;text-align:center;">You can keep all these great benefits for just N5,000 a month</p>

<p style="margin: 2em 0 1em;font-size:14px;line-height:18px;font-family:arial,sans-serif;text-align:center;" class="Button_Large"><a style="text-decoration:none; color: #FFF; background-color: #17C3FF; padding:14px 26px; font-weight:bold; margin-right:10px; text-align:center; cursor:pointer; display: inline-block; border-radius: 3px; font-size: 18px; box-shadow: 1px 1px 2px rgba(0,0,0,0.5);" href="<?php echo $link; ?>">Upgrade your Account</a></p>

<p style="margin: 1em 0;font-size:14px;line-height:18px;font-family:arial,sans-serif;text-align:center;">If you do not upgrade your plan, your website will be downgraded to our free plan. On our free plan you will only be able to Create 3 pages, 3 blog articles
and one product. If you've created more content than this your data will be archived and will no longer be accessible. So <a href='<?php echo $link; ?>'>Upgrade Now</a> to maintain your site.</p>

<h2 style="margin: 2em 0 1em;font-size:16px;font-family:arial,sans-serif;text-align:center;">How to Upgrade</h2>
<ul style="margin: 1em 0;font-size:14px;line-height:18px;font-family:arial,sans-serif;text-align:left;">
  <li>Click <a href='<?php echo $link; ?>'>here</a> to visit your platform</li>
  <li>Click Features Store</li>
  <li>Add Billing Information</li>
</ul>


<?php include "html_email_footer.php"; ?>