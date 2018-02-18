<?php /* Smarty version 2.6.18, created on 2017-07-19 18:38:51
         compiled from widgets/Livechat_Status.tpl */ ?>
<p class="Icon_Livechat Button_Medium"><?php echo $this->_tpl_vars['langs']['Livechat']; ?>
: 
<span class="livechatWidgetOffline"><?php echo $this->_tpl_vars['langs']['Offline']; ?>
</span>
<a href="/livechat/convo.php?language=<?php echo $this->_tpl_vars['language']; ?>
" class="startConvo livechatWidgetOnline"><?php echo $this->_tpl_vars['langs']['Online']; ?>
</a>
</p>