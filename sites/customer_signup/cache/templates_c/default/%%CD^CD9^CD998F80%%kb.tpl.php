<?php /* Smarty version 2.6.18, created on 2017-08-03 06:52:08
         compiled from nav/kb.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'nav/kb.tpl', 20, false),)), $this); ?>

<div id="kbIndex">
	<div id="kbSearch" class="clearfix">
		<div id="hideWhenContact">
			<label>Start typing your question or search terms to see results instantly below.</label>
			<div id="kbSearchWrap">
			<p id="kbSearchEg">eg. how to add a link to an email address?</p>
			<input type="text" id="kbSearchInput" />
			<div id="clearKBSearch"></div>
			</div>
		</div>
		<p id="contactSupport">Can't find a solution? <a href="#contactform">Contact Support</a></p>
		<div id="contactform">
		<?php echo $this->_tpl_vars['sitewideContent']['Support_Form']; ?>

		</div>
	</div>
<?php $_from = $this->_tpl_vars['mainNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>

	<?php if ($this->_tpl_vars['item']['url'] == 'support'): ?>
		<?php if (count($this->_tpl_vars['item']['subs']) > 0): ?>
			<?php $_from = $this->_tpl_vars['item']['subs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['kb'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['kb']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sub']):
        $this->_foreach['kb']['iteration']++;
?>
						
					
					<?php if (($this->_foreach['kb']['iteration']-1) % 2 == 0): ?>
					<div class="kbRow clearfix">
					<?php endif; ?>

							<div class="kbItem <?php if ((1 & $this->_foreach['kb']['iteration'])): ?>left<?php else: ?>right<?php endif; ?>">
								<h3><?php echo $this->_tpl_vars['sub']['pagetitle']; ?>
</h3>
								<?php if (count($this->_tpl_vars['sub']['subSubs']) > 0): ?>
									<ul>
									<?php $_from = $this->_tpl_vars['sub']['subSubs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['kb3'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['kb3']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['subSub']):
        $this->_foreach['kb3']['iteration']++;
?>
										<li class="<?php if ($this->_tpl_vars['subSub']['id'] == $this->_tpl_vars['content']['id']): ?>currentSubSub<?php endif; ?> <?php if ($this->_foreach['kb3']['iteration'] == '1'): ?>firstSubSub<?php endif; ?> <?php if ($this->_foreach['kb3']['iteration'] > 5): ?>hidden<?php endif; ?> kbItem1 <?php if (count($this->_tpl_vars['subSub']['subSubSubs']) > 0): ?>hasSubs<?php else: ?>kbArticle<?php endif; ?>" data-keywords="<?php echo $this->_tpl_vars['subSub']['keywords']; ?>
"><a href="/<?php echo $this->_tpl_vars['subSub']['topParentUrl']; ?>
/<?php echo $this->_tpl_vars['subSub']['parentUrl']; ?>
/<?php echo $this->_tpl_vars['subSub']['url']; ?>
/"><?php echo $this->_tpl_vars['subSub']['pagetitle']; ?>
</a>
																		
											<?php if (count($this->_tpl_vars['subSub']['subSubSubs']) > 0): ?>
												<ul class="kbSubSubs">
												
												<?php $_from = $this->_tpl_vars['subSub']['subSubSubs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['kb4'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['kb4']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['subSubSub']):
        $this->_foreach['kb4']['iteration']++;
?>
													<li class="kbItem2" data-keywords="<?php echo $this->_tpl_vars['subSubSub']['keywords']; ?>
"><a href="/<?php echo $this->_tpl_vars['subSubSub']['topParentUrl']; ?>
/<?php echo $this->_tpl_vars['subSubSub']['subParentUrl']; ?>
/<?php echo $this->_tpl_vars['subSubSub']['parentUrl']; ?>
/<?php echo $this->_tpl_vars['subSubSub']['url']; ?>
/" class="<?php if ($this->_tpl_vars['subSubSub']['id'] == $this->_tpl_vars['content']['id']): ?>current<?php endif; ?> <?php if ($this->_foreach['kb4']['iteration'] > 5): ?>hidden<?php endif; ?>"><?php echo $this->_tpl_vars['subSubSub']['pagetitle']; ?>
</a></li>
												<?php endforeach; endif; unset($_from); ?>
												</ul>
											<?php endif; ?> 
										</li>
										
									<?php endforeach; endif; unset($_from); ?>
									<?php if ($this->_foreach['kb3']['total'] > 5): ?>
										<?php $this->assign('remaining', $this->_foreach['kb3']['total']-5); ?>
										<li class="kbAll"><a href="/<?php echo $this->_tpl_vars['sub']['parentUrl']; ?>
/<?php echo $this->_tpl_vars['sub']['url']; ?>
/" data-lang-close="View top 5" data-lang-open="View all (<?php echo $this->_tpl_vars['remaining']; ?>
 more)">View all (<?php echo $this->_tpl_vars['remaining']; ?>
 more)</a></li>
									<?php endif; ?>
									</ul>
								<?php endif; ?> 

							</div>	
					
					<?php if (($this->_foreach['kb']['iteration']-1) % 2 == 1 || ($this->_foreach['kb']['iteration'] == $this->_foreach['kb']['total'])): ?>
					</div>
					<?php endif; ?>
				   	
				  
			<?php endforeach; endif; unset($_from); ?>

			
		<?php endif; ?> 
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?> 
</div>