<?php /* Smarty version 2.6.18, created on 2017-07-23 10:50:20
         compiled from widgets/Search.tpl */ ?>
<div class="styleBox">
<form action="/actions/SearchForward/" method="post">
	<input type="hidden" name="language" value="<?php echo $this->_tpl_vars['content']['language']; ?>
"/>
	<input type="text" name="string" value="" maxlength="60" title="<?php echo $this->_tpl_vars['langs']['Search']; ?>
" id="pagesearch" placeholder="<?php echo $this->_tpl_vars['langs']['Search']; ?>
"/>
	<p class="submit_form Button_Medium"><a href="#"><?php echo $this->_tpl_vars['langs']['Search']; ?>
</a></p>
</form>
</div>