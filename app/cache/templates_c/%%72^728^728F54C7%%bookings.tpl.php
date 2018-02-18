<?php /* Smarty version 2.6.18, created on 2017-07-23 10:05:40
         compiled from admin/views/shop/bookings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'array_reverse', 'admin/views/shop/bookings.tpl', 16, false),array('modifier', 'date_format_locale', 'admin/views/shop/bookings.tpl', 26, false),array('modifier', 'truncate', 'admin/views/shop/bookings.tpl', 30, false),array('modifier', 'date_format', 'admin/views/shop/bookings.tpl', 96, false),array('modifier', 'htmlspecialchars', 'admin/views/shop/bookings.tpl', 96, false),array('function', 'math', 'admin/views/shop/bookings.tpl', 41, false),)), $this); ?>
<div id="bookingsLeft">
	<div id="bookingAvailabilityTitleBar">
	<div id="bookingsClose">
		<?php echo $this->_tpl_vars['SetSeedLangs']['Done']; ?>

	</div>
	<div id="bookingAvailabilityNext" class="bookingAvailabilityYears"><?php echo $this->_tpl_vars['nextYear']; ?>
</div>
	<div id="bookingAvailabilityCurrent" class="bookingAvailabilityYears"><?php echo $this->_tpl_vars['year']; ?>
</div>
	<?php if ($this->_tpl_vars['prevYear']): ?><div id="bookingAvailabilityPrev" class="bookingAvailabilityYears"><?php echo $this->_tpl_vars['prevYear']; ?>
</div><?php endif; ?>
	<div id="productList"
	data-item-type="<?php echo $this->_tpl_vars['type']; ?>
"
	data-places-available="<?php echo $this->_tpl_vars['modules']; ?>
"
	data-spaces-available="<?php echo $this->_tpl_vars['spaces']; ?>
"
	>
	<select>

		<?php $_from = array_reverse($this->_tpl_vars['products']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
			<option value="<?php echo $this->_tpl_vars['product']['id']; ?>
" <?php if ($this->_tpl_vars['product']['id'] == $this->_tpl_vars['id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['product']['name']; ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
		<option value="all" <?php if ($this->_tpl_vars['id'] == 'all'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['SetSeedLangs']['All_Products']; ?>
</option>
	</select>
	</div>
	
	</div>
	<?php $_from = $this->_tpl_vars['months']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['months'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['months']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['month']):
        $this->_foreach['months']['iteration']++;
?>
	<div class="availabilityMonth" id="availabilityMonth<?php echo $this->_foreach['months']['iteration']; ?>
">
	<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['month'][0])) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%B", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%B", $this->_tpl_vars['language'])); ?>
</h2>
	
	<table class="">
		<tr>
			<th><?php echo ((is_array($_tmp=((is_array($_tmp='Monday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, '2', "") : smarty_modifier_truncate($_tmp, '2', "")); ?>
</th>
			<th><?php echo ((is_array($_tmp=((is_array($_tmp='Tuesday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, '2', "") : smarty_modifier_truncate($_tmp, '2', "")); ?>
</th>
			<th><?php echo ((is_array($_tmp=((is_array($_tmp='Wednesday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, '2', "") : smarty_modifier_truncate($_tmp, '2', "")); ?>
</th>
			<th><?php echo ((is_array($_tmp=((is_array($_tmp='Thursday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, '2', "") : smarty_modifier_truncate($_tmp, '2', "")); ?>
</th>
			<th><?php echo ((is_array($_tmp=((is_array($_tmp='Friday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, '2', "") : smarty_modifier_truncate($_tmp, '2', "")); ?>
</th>
			<th><?php echo ((is_array($_tmp=((is_array($_tmp='Saturday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, '2', "") : smarty_modifier_truncate($_tmp, '2', "")); ?>
</th>
			<th><?php echo ((is_array($_tmp=((is_array($_tmp='Sunday')) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%a", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%a", $this->_tpl_vars['language'])))) ? $this->_run_mod_handler('truncate', true, $_tmp, '2', "") : smarty_modifier_truncate($_tmp, '2', "")); ?>
</th>
		</tr>
		<tr>
		<?php $_from = $this->_tpl_vars['month'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['loop1']['iteration']++;
?>
			<?php if ($this->_tpl_vars['type'] == 2): ?>
				<?php echo smarty_function_math(array('equation' => "y / x * 100",'x' => $this->_tpl_vars['modules'],'y' => $this->_tpl_vars['item'][4]['booked_modules'],'assign' => 'percent_full'), $this);?>

			<?php else: ?>
				<?php echo smarty_function_math(array('equation' => "y / x * 100",'x' => $this->_tpl_vars['spaces'],'y' => $this->_tpl_vars['item'][4]['booked_individuals'],'assign' => 'percent_full'), $this);?>

			<?php endif; ?>
			<?php $this->assign('colourclass', ""); ?>	
			
			<?php if ($this->_tpl_vars['percent_full'] == 100): ?>
			<?php $this->assign('colourclass', 'colour4'); ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['percent_full'] > 66 && $this->_tpl_vars['percent_full'] < 100): ?>
			<?php $this->assign('colourclass', 'colour3'); ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['percent_full'] > 33 && $this->_tpl_vars['percent_full'] <= 66): ?>
			<?php $this->assign('colourclass', 'colour2'); ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['percent_full'] > 0 && $this->_tpl_vars['percent_full'] < 33): ?>
			<?php $this->assign('colourclass', 'colour1'); ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['percent_full'] == 0): ?>
			<?php $this->assign('colourclass', 'colour0'); ?>
			<?php endif; ?>

			<?php if ($this->_tpl_vars['id'] == 'all'): ?> 
			<?php $this->assign('colourclass', 'colourblue'); ?>	
			<?php endif; ?>

			<?php $this->assign('notavailable', false); ?>
			
			
			<td 
			<?php if ($this->_tpl_vars['type'] == 2): ?>
				<?php echo smarty_function_math(array('equation' => "x - y",'x' => $this->_tpl_vars['modules'],'y' => $this->_tpl_vars['item'][4]['booked_modules'],'assign' => 'available_modules'), $this);?>

				<?php if ($this->_tpl_vars['available_modules'] > 0): ?>
					data-available="<?php echo $this->_tpl_vars['spaces']; ?>
"
				<?php else: ?>
					data-available="0"
					<?php $this->assign('notavailable', true); ?>
				<?php endif; ?>
			<?php else: ?>
				<?php echo smarty_function_math(array('equation' => "x - y",'x' => $this->_tpl_vars['spaces'],'y' => $this->_tpl_vars['item'][4]['booked_individuals'],'assign' => 'available'), $this);?>

				data-available="<?php echo $this->_tpl_vars['available']; ?>
"
				<?php if ($this->_tpl_vars['available'] <= 0): ?>
				<?php $this->assign('notavailable', true); ?>
				<?php endif; ?>

			<?php endif; ?>
			
			<?php if ($this->_tpl_vars['item'][4]['rate'] != 0 || $this->_tpl_vars['item'][4]['bookings'] != "[]"): ?><?php else: ?>
			<?php $this->assign('colourclass', ""); ?>			
			<?php endif; ?>
			

			class="
			
			<?php if ($this->_tpl_vars['item'][4]['price_normal'] != 0 && ! $this->_tpl_vars['notavailable']): ?>cms-booking-product-available<?php endif; ?> 
			<?php echo $this->_tpl_vars['colourclass']; ?>
 <?php if ($this->_tpl_vars['item'][4]['block_start'] == 1): ?>block_start<?php endif; ?> <?php if ($this->_tpl_vars['item'][4]['block_middle'] == 1): ?>block_middle<?php endif; ?> <?php if ($this->_tpl_vars['item'][4]['block_end'] == 1): ?>block_end<?php endif; ?> <?php if ($this->_tpl_vars['item'][3] == 'prevMonth' || $this->_tpl_vars['item'][3] == 'nextMonth'): ?>greyDay<?php endif; ?> <?php if (((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")) == $this->_tpl_vars['item'][1]): ?> current<?php endif; ?>" data-rate="<?php echo $this->_tpl_vars['item'][4]['rate']; ?>
" data-bookings="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][4]['bookings'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
" data-local-date="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][1])) ? $this->_run_mod_handler('date_format_locale', true, $_tmp, "%b %e, %Y", $this->_tpl_vars['language']) : smarty_modifier_date_format_locale($_tmp, "%b %e, %Y", $this->_tpl_vars['language'])); ?>
"
			data-minimum-price-per-place="<?php echo $this->_tpl_vars['item'][4]['minimum_price_per_place']; ?>
" 
			data-price-normal="<?php echo $this->_tpl_vars['item'][4]['price_normal']; ?>
"
			data-price-special="<?php echo $this->_tpl_vars['item'][4]['price_special']; ?>
"
			data-price-children="<?php echo $this->_tpl_vars['item'][4]['price_children']; ?>
"
			data-date="<?php echo $this->_tpl_vars['item'][1]; ?>
"
			>
			
				<?php echo $this->_tpl_vars['item'][0]; ?>

			</td>
		<?php if (!($this->_foreach['loop1']['iteration'] % 7)): ?>
		</tr>
		<tr>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		</tr>
	</table>
	</div>
	<?php endforeach; endif; unset($_from); ?>
</div>
<div id="bookingsRight" <?php if ($this->_tpl_vars['id'] == 'all'): ?>class="showingall"<?php endif; ?>>
	<div id="closeBookingsRight"></div>
	<div id="bookingsTabs">
		<a href="#bookingsRightInner" class="currenttab"><?php echo $this->_tpl_vars['SetSeedLangs']['View_Bookings']; ?>
</a>
		<a class="last" href="#bookingsRightAddBooking" id="addBooking" <?php if ($this->_tpl_vars['id'] == 'all'): ?>class="disabled"<?php endif; ?>><?php echo $this->_tpl_vars['SetSeedLangs']['Add_New_Booking']; ?>
</a>
		<a class="last" href="#" id="editBooking"><?php echo $this->_tpl_vars['SetSeedLangs']['Edit_Booking']; ?>
</a>
	</div>
	<h1 id="printTitle"><?php if ($this->_tpl_vars['title'] != ""): ?><?php echo $this->_tpl_vars['title']; ?>
<?php else: ?><?php echo $this->_tpl_vars['SetSeedLangs']['All_Products']; ?>
<?php endif; ?></h1>
	<div id="bookingsRightInner"></div>
	<div id="bookingsRightAddBooking">
		<div class="cms-booking-product" data-use-minimum-price="<?php if ($this->_tpl_vars['type'] == 2): ?><?php echo $this->_tpl_vars['use_minimum_charge_per_place']; ?>
<?php else: ?>0<?php endif; ?>" data-adult-required="<?php echo $this->_tpl_vars['adult_required']; ?>
" data-product-type="<?php echo $this->_tpl_vars['type']; ?>
">
		<div class="cms-boooking-product-quantities clearfix">

				<input type="hidden" name="booking_productsid[]" value="<?php echo $this->_tpl_vars['id']; ?>
">
				<input type="hidden" name="days" value="" class="cms-booking-product-days-input" id="daysInput">
			<div class="cms-booking-product-qty cms-booking-product-normal-qty">
				<div class="cms-booking-product-input-button">
					<input name="number[]" type="text" value="1" id="normalQty">
					<span class="cms-booking-qty-button cms-booking-qty-plus">+</span>
					<span class="cms-booking-qty-button cms-booking-qty-minus">-</span>
				</div>
				<?php if ($this->_tpl_vars['different_price_special'] || $this->_tpl_vars['different_price_children']): ?>
				Adults
				<?php else: ?>
				<?php if ($this->_tpl_vars['type'] == 0): ?>
				Quantity
				<?php else: ?>
				Quantity
				<?php endif; ?>
				<?php endif; ?>
		
			</div>
			<?php if ($this->_tpl_vars['different_price_special']): ?>
			<div class="cms-booking-product-qty cms-booking-product-special-qty">
			
			<div class="cms-booking-product-input-button"><input name="special[]" type="text" value="0" id="specialQty">
			<span class="cms-booking-qty-button cms-booking-qty-plus">+</span>
			<span class="cms-booking-qty-button cms-booking-qty-minus">-</span>
			</div>
			Concessions
			</div>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['different_price_children']): ?>
			<div class="cms-booking-product-qty cms-booking-product-children-qty <?php if ($this->_tpl_vars['different_price_special']): ?>cms-booking-qty-last-of-three<?php endif; ?>">
			
			<div class="cms-booking-product-input-button"><input name="children[]" type="text" value="0" id="childrenQty">
			<span class="cms-booking-qty-button cms-booking-qty-plus">+</span>
			<span class="cms-booking-qty-button cms-booking-qty-minus">-</span>
			</div>
			Children
			</div>
			<?php endif; ?>
		</div>
		</div>
		<label class="addBookingTextLabel clearfix">First Name<br/>
		<input type="text" id="addBookingFirstName"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">Last Name<br/>
		<input type="text" id="addBookingLastName"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">Street<br/>
		<input type="text" id="addBookingAddress1"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">City<br/>
		<input type="text" id="addBookingAddressCity"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">State<br/>
		<input type="text" id="addBookingAddressState"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">Country<br/>
		<input type="text" id="addBookingAddressCountry"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">Zip/Postal Code<br/>
		<input type="text" id="addBookingAddressZip"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">Email address<br/>
		<input type="text" id="addBookingAddressEmail"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">Phone<br/>
		<input type="text" id="addBookingAddressPhone"/>
		
		</label>
		<label class="addBookingTextLabel clearfix">Amount paid now<br/>
		<input type="text" id="addBookingAddressPayment"/>
		
		</label>

		<input type="hidden" id="editBookingID"/>
		<input type="hidden" id="editOrderID"/>
				
		<div class="cms-booking-product-total">
			<p class="cms-booking-product-total-price"><?php echo $this->_tpl_vars['curSym']; ?>
<span>0.00</span></p>
			<p class="cms-booking-product-total-surcharge">Including <?php echo $this->_tpl_vars['curSym']; ?>
<span>0.00</span> under-capacity surcharge</p>
			<p id="createBooking"><a href="" class="cms-booking-product-add-to-basket">Create booking</a></p>
			<p id="saveBooking"><a href="" class="cms-booking-product-add-to-basket">Save booking</a></p>
		</div>
		
		
		
	</div>
</div>