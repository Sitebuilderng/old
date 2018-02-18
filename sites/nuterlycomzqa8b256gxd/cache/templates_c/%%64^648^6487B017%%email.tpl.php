<?php /* Smarty version 2.6.18, created on 2017-07-19 18:59:20
         compiled from email/email.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'email/email.tpl', 77, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Email</title>

<link rel="stylesheet" type="text/css" href="http://<?php echo $this->_tpl_vars['url']; ?>
/css/email.css" />
<?php echo '
<style media="screen">
	@media only screen and (max-width: 600px) {

		p[class="Button_Large"] a { display:block!important; margin-bottom:10px!important; background-image:none!important; margin-right:0!important;}

		div[class="column"] { width: auto!important; float:none!important;}

		.colblock tr,.colblock td {
			display:block;
		}
		.colblock {
			margin-bottom:20px;
		}
		.colblock td.colblock-divider {
			display:none;
		}

		.mw,.container {
			width:auto!important;
			}

		h1 { font-size: 44px !important; color:#4A4A4A;}
		h2 { font-size: 27px !important; color:#4A4A4A; }
		h3 { font-size: 17px !important; color:#4A4A4A; }
		h4 { font-size: 13px !important; color:#4A4A4A; }
		h5 { font-size: 14px !important; color:#4A4A4A; }
		h6 { font-size: 14px; text-transform: uppercase; color:#444;}
		.cols .Button_Small a,.cols .Button_Medium a,.cols .Button_Large a {
			font-size:10px !important;
			line-height:12px !important;
			padding:3px 1px !important;
			font-weight:normal !important;
		}
		.collapse { margin:0!important;}

		p, ul {
			margin-bottom: 20px;
			font-weight: normal;
			font-size:14px !important;
			line-height:1.6;
			color:#4A4A4A;
			margin-top: 0;
		}

	}
	'; ?>

	<?php echo $this->_tpl_vars['theme_vars_newsletter_css']; ?>

	<?php echo '
</style>
'; ?>

</head>

<body bgcolor="#FFFFFF">
<?php if (! $this->_tpl_vars['form_autoresponse'] && ! $this->_tpl_vars['mailinglist_autoresponse']): ?>
<p id="webversion" class="hide_in_webversion">Can't see this properly? <a href="***WEBVERSION***">Click here</a></p>
<?php endif; ?>

<table class="head-wrap" bgcolor="#e9e9e9">
	<tr>
		<td></td>
		<td class="header container" >

				<div class="content">
				<table bgcolor="#e9e9e9">
					<tr>
						<td><img src="http://<?php echo $this->_tpl_vars['url']; ?>
/images/themegraphics/<?php echo $this->_tpl_vars['theme_vars_newsletter_logo']; ?>
" width="200" height="56" /></td>
						<td align="right"><h6 class="collapse"><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</h6></td>
					</tr>
				</table>
				</div>

		</td>
		<td></td>
	</tr>
</table>

<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" bgcolor="#FFFFFF">

			<div class="content">
			<table>
				<tr>
					<td>

						<?php echo $this->_tpl_vars['contentSplit']['normal']; ?>

						<?php if ($this->_tpl_vars['theme_vars_newsletter_contact']): ?>
						<table class="social" width="100%">
							<tr>
								<td>

									<table align="left" class="column">
										<tr>
											<td>

												<h5 class="">Connect with Us:</h5>
												<p class=""><?php if ($this->_tpl_vars['theme_vars_facebook_link']): ?><a href="<?php echo $this->_tpl_vars['theme_vars_facebook_link']; ?>
" class="soc-btn fb">Facebook</a><?php endif; ?> <?php if ($this->_tpl_vars['theme_vars_twitter_link']): ?><a href="<?php echo $this->_tpl_vars['theme_vars_twitter_link']; ?>
" class="soc-btn tw">Twitter</a><?php endif; ?> <?php if ($this->_tpl_vars['theme_vars_gplus_link']): ?><a href="<?php echo $this->_tpl_vars['theme_vars_gplus_link']; ?>
" class="soc-btn gp">Google+</a><?php endif; ?></p>


											</td>
										</tr>
									</table>
									<table align="left" class="column">
										<tr>
											<td>

												<h5 class="">Contact Info:</h5>
												<p><?php if ($this->_tpl_vars['theme_vars_newsletter_phone']): ?>Phone: <strong><?php echo $this->_tpl_vars['theme_vars_newsletter_phone']; ?>
</strong><br/><?php endif; ?>
													<?php if ($this->_tpl_vars['theme_vars_newsletter_email']): ?>Email: <strong><a href="mailto:<?php echo $this->_tpl_vars['theme_vars_newsletter_email']; ?>
"><?php echo $this->_tpl_vars['theme_vars_newsletter_email']; ?>
</a></strong><?php endif; ?></p>

											</td>
										</tr>
									</table>

									<span class="clear"></span>

								</td>
							</tr>
						</table>
						<?php endif; ?>
					</td>
				</tr>
			</table>
			</div>
		</td>
		<td></td>
	</tr>
</table>
<table class="footer-wrap">
	<tr>
		<td></td>
		<td class="container">

				<!-- content -->
				<div class="content">
				<table>
				<tr>
					<td align="center">
						<?php if (! $this->_tpl_vars['form_autoresponse']): ?>
						<p id="unsub" class="hide_in_webversion">To unsubscribe from this newsletter <a href="http://<?php echo $this->_tpl_vars['url']; ?>
/newsletter_remove.php?id=***ID***&email=***EMAIL***">click here</a>.</p>
						<?php endif; ?>
					</td>
				</tr>
			</table>
				</div>
		</td>
		<td></td>
	</tr>
</table>
</body>
</html>