<?php /* Smarty version 2.6.18, created on 2017-08-13 16:47:01
         compiled from widgets/Testimonial.tpl */ ?>
<div class="testimonial clearfix">
	<blockquote class="text">
		<?php echo $this->_tpl_vars['editable']['text']; ?>

	</blockquote>
	<?php if ($this->_tpl_vars['editable']['author']): ?>
	<cite class="author">
		<?php echo $this->_tpl_vars['editable']['author']; ?>

	</cite>
	<?php endif; ?>
</div>