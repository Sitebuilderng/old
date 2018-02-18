<?php /* Smarty version 2.6.18, created on 2017-07-19 18:40:04
         compiled from components/livechat.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title><?php echo $this->_tpl_vars['langs']['Livechat']; ?>
</title>
	
	<script src="/livechat/javascripts/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="/livechat/javascripts/regjquery.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="/livechat/css/master.css" type="text/css" media="screen" title="Default Style" charset="utf-8"/>

	<!--[if lte IE 7]>
		<style type="text/css" media="screen">
			<?php echo '
			#scroll {
				height:237px
			}
			'; ?>

		</style>
	<![endif]-->
	
</head>
<body id="user">
	<div id="header"><?php echo $this->_tpl_vars['langs']['Livechat']; ?>
</div>
	<div id="scroll">
		<p class="user"><?php echo $this->_tpl_vars['message']; ?>
</p>
		<div id="chat">
		<?php if (! $this->_tpl_vars['cookieTrue']): ?>
			<p id="cookieError"><?php echo $this->_tpl_vars['langs']['Cookie_Error']; ?>

		<?php endif; ?>
		</div>
	</div>
	<?php if ($this->_tpl_vars['cookieTrue']): ?>
	<form id="form" action="#" method="post">
		<input type="text" id="message" name="message" value="<?php echo $this->_tpl_vars['langs']['Livechat_Type']; ?>
"/>
		<span id="convoend" style="display:none;"><?php echo $this->_tpl_vars['langs']['Livechat_End']; ?>
</span>
		<input type="hidden" name="chatId" value="" id="chatId" style="display:none;"/>
	</form>
	<?php endif; ?>
</body>
</html>