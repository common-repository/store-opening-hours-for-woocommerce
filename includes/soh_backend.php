<?php

if (!defined('ABSPATH'))
  exit;

if (!class_exists('SOH_admin_menu')) {

    class SOH_admin_menu {

        protected static $SOH_instance;

        function SOH_submenu_page() {
            add_menu_page(__( 'woocommerce Store Opening Hours', 'Store Opening Hours' ),'Store Opening Hours Settings','manage_options','store-opening-hours-settings',array($this, 'SOH_callback'));
        }

        function SOH_callback(){
        	global $soh_comman, $ocwqv_qscfw_icon;;
        	?>
        	<div class="soh-container">
	            <form method="post" enctype="multipart/form-data">
	            	<div class="wrap">
	                	<h2><?php echo __('Store Opening Hours For WooCommerce','store-opening-hours-for-woocommerce');?></h2>	            		
	            	</div>
	                <ul class="tabs">
	                    <li class="tab-link soh-current" data-tab="soh-tab-Schedule"><?php echo __('Schedule','store-opening-hours-for-woocommerce');?></li>
	                    <li class="tab-link" data-tab="soh-tab-Notification"><?php echo __('Notification','store-opening-hours-for-woocommerce');?></li>
	                    <li class="tab-link" data-tab="soh-tab-Settings"><?php echo __('Settings','store-opening-hours-for-woocommerce');?></li>
	                </ul>
	                <div id="soh-tab-Schedule" class="soh-tab-content soh-current"> 
	                	<span class="soh_imp_note"><strong>Note:</strong> Store Time Based Upon <a href="<?php echo admin_url('options-general.php');?>">General Settings</a> > Timezone Settings, Local Time</span>
	                	<div class="table_title_header">
	                		<h3><?php echo __('Status','store-opening-hours-for-woocommerce');?></h3>
	                	</div>
	                    <table class="data_table">
	                        <tbody class="soh_table_body">
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Store Hours Manager','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="checkbox" name="soh_comman[soh_store_hours_manager]" value="yes"<?php if($soh_comman['soh_store_hours_manager'] == 'yes'){echo "checked";}?>>
	                                    <span class="soh_store_status_note"><?php echo __('<strong>Note:</strong> check this checkbox than plugin is working on frontend.','store-opening-hours-for-woocommerce');?></span>
	                                </td>
	                            </tr>
	                        </tbody>
	                    </table>
	                    <div class="table_title_header">
	                    	<h3><?php echo __('Days Schedule','store-opening-hours-for-woocommerce');?></h3>
	                	</div>
	                    <table class="data_table">
	                        <tbody class="soh_table_body">
	                        	<tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Disable Checkout','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="radio" id="yes" name="soh_checkout_disable" value="yes" checked>
	                                    <span for="yes">Yes</span>
	                                    <input type="radio" id="no" name="soh_checkout_disable" value="no" disabled>
	                                    <span for="no" style="opacity: .6;">No</span>
	                                    <label class="soh_pro_link">Only available in pro version <a href="https://xthemeshop.com/product/store-opening-hours-for-woocommerce-pro/" target="_blank">link</a></label>
	                                </td>
	                            </tr>
	                        	<tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Time Schedule Countdown','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="radio" id="on" name="soh_time_schedule_countdown" value="on" disabled>
	                                    <span for="on" style="opacity: .6;">On</span>
	                                    <input type="radio" id="off" name="soh_time_schedule_countdown" value="off" checked>
	                                    <span for="off">Off</span>
	                                    <label class="soh_pro_link">Only available in pro version <a href="https://xthemeshop.com/product/store-opening-hours-for-woocommerce-pro/" target="_blank">link</a></label>
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Time Period','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                	<div class="soh_day_monday">
	                                		<input type="checkbox" class="soh_period_check_monday" name="soh_comman[soh_period_monday]" value="Monday"<?php if($soh_comman['soh_period_monday'] == 'Monday'){echo "checked";}?>>
	                                		<label>Monday</label>
	                                	</div>
	                                	<div class="soh_day_monday_period_and_options">
		                                	<div class="soh_day_monday_options soh_options">
		                                		<input type="radio" name="soh_comman[soh_time_monday_options]" class="soh_time_monday_options" value="monday_full_day" <?php if($soh_comman['soh_time_monday_options'] == 'monday_full_day'){echo "checked";}?>>
		                                		<span><?php echo __('Full Day Open','store-opening-hours-for-woocommerce');?></span>
		                                		<input type="radio" name="soh_comman[soh_time_monday_options]" class="soh_time_monday_options" value="monday_time_period"  <?php if($soh_comman['soh_time_monday_options'] == 'monday_time_period'){echo "checked";}?>>
		                                		<span><?php echo __('Time Schedule','store-opening-hours-for-woocommerce');?></span>
		                                	</div>
		                                    <div class="soh_day_period_monday soh_period">
							                    <table>
							                        <thead>
								                        <tr>
								                            <th><?php echo __('Monday Opening', 'store-opening-hours-for-woocommerce'); ?></th>
								                            <th><?php echo __('Monday Closing', 'store-opening-hours-for-woocommerce'); ?></th>
								                            <th>
								                                <a href="javascript:void(0);" class="soh_day_add_monday button">+</a>
								                            </th>
								                            <th>
								                                <input class="soh_all_day_value_monday" type="hidden" name="" value=""/>
								                                <a href="#" class="soh_all_day_monday button">
								                                <?php echo __('All Clear', 'store-opening-hours-for-woocommerce' ); ?>
								                                </a>
								                             </th>
								                        </tr>
							                        </thead>
							                        <tbody class="soh_time_wrapaer_monday">
						                        		<?php 
						                        		$soh_opening_time_monday = get_option('soh_opening_time_monday');
						                        		$soh_closing_time_monday = get_option('soh_closing_time_monday');
						                        		if (empty($soh_opening_time_monday) || $soh_opening_time_monday['0'] == '') {
						                        			?>
						                        			<tr class="soh_time_current_monday">
								                        		<td class="soh_opening_timepicker_field_monday">
								                        			<input type="time" class="soh_opening_timepicker_monday" name="soh_opening_time_monday[]" value="">
								                        		</td>
								                        		<td class="soh_closing_timepicker_field_monday">
			                                    					<input type="time" class="soh_closing_timepicker_monday" name="soh_closing_time_monday[]" value="">
								                        		</td>
								                        		<td>
								                        			<a href="javascript:void(0);" class="soh_day_close_monday button">X</a>
								                        		</td>
								                        		<td></td>
								                        	</tr>
								                        	<?php
						                        		}else{
						                        			foreach ($soh_opening_time_monday as $key => $value) {
					                        				?>
								                        	<tr class="soh_time_current_monday">
								                        		<td class="soh_opening_timepicker_field_monday">
								                        			<input type="time" class="soh_opening_timepicker_monday" name="soh_opening_time_monday[]" value="<?php echo $soh_opening_time_monday[$key];?>">
								                        		</td>
								                        		<td class="soh_closing_timepicker_field_monday">
			                                    					<input type="time" class="soh_closing_timepicker_monday" name="soh_closing_time_monday[]" value="<?php echo $soh_closing_time_monday[$key];?>">
								                        		</td>
								                        		<td>
								                        			<a href="javascript:void(0);" class="soh_day_close_monday button">X</a>
								                        		</td>
								                        		<td></td>
								                        	</tr>
		                                					<?php
						                        			}	
						                        		}
					                        			?>
	                                                </tbody>
							                    </table>
							                </div>
						                </div>
						                <div class="soh_day_tuesday">
	                                		<input type="checkbox" class="soh_period_check_tuesday" name="soh_comman[soh_period_tuesday]" value="Tuesday"<?php if($soh_comman['soh_period_tuesday'] == 'Tuesday'){echo "checked";}?>>
	                                		<label>Tuesday</label>
	                                	</div>
	                                	<div class="soh_day_tuesday_period_and_options">
		                                	<div class="soh_day_tuesday_options soh_options">
		                                		<input type="radio" name="soh_comman[soh_time_tuesday_options]" class="soh_time_tuesday_options" value="tuesday_full_day" <?php if($soh_comman['soh_time_tuesday_options'] == 'tuesday_full_day'){echo "checked";}?>>
		                                		<span><?php echo __('Full Day Open','store-opening-hours-for-woocommerce');?></span>
		                                		<input type="radio" name="soh_comman[soh_time_tuesday_options]" class="soh_time_tuesday_options" value="tuesday_time_period"  <?php if($soh_comman['soh_time_tuesday_options'] == 'tuesday_time_period'){echo "checked";}?>>
		                                		<span><?php echo __('Time Schedule','store-opening-hours-for-woocommerce');?></span>
		                                	</div>
							                <div class="soh_day_period_tuesday soh_period">
							                    <table>
							                        <thead>
								                        <tr>
								                            <th><?php echo __('Tuesday Opening', 'store-opening-hours-for-woocommerce'); ?></th>
								                            <th><?php echo __('Tuesday Closing', 'store-opening-hours-for-woocommerce'); ?></th>
								                            <th>
								                                <a href="javascript:void(0);" class="soh_day_add_tuesday button">+</a>
								                            </th>
								                            <th>
								                                <input class="soh_all_day_value_tuesday" type="hidden" name="" value=""/>
								                                <a href="#" class="soh_all_day_tuesday button">
								                                <?php echo __('All Clear', 'store-opening-hours-for-woocommerce' ); ?>
								                                </a>
								                             </th>
								                        </tr>
							                        </thead>
							                        <tbody class="soh_time_wrapaer_tuesday">
						                        		<?php 
						                        		$soh_opening_time_tuesday = get_option('soh_opening_time_tuesday');
						                        		$soh_closing_time_tuesday = get_option('soh_closing_time_tuesday');
						                        		if (empty($soh_opening_time_tuesday) || $soh_opening_time_tuesday['0'] == '') {
						                        			?>
						                        			<tr class="soh_time_current_tuesday">
								                        		<td class="soh_opening_timepicker_field_tuesday">
								                        			<input type="time" class="soh_opening_timepicker_tuesday" name="soh_opening_time_tuesday[]" value="">
								                        		</td>
								                        		<td class="soh_closing_timepicker_field_tuesday">
			                                    					<input type="time" class="soh_closing_timepicker_tuesday" name="soh_closing_time_tuesday[]" value="">
								                        		</td>
								                        		<td>
								                        			<a href="javascript:void(0);" class="soh_day_close_tuesday button">X</a>
								                        		</td>
								                        		<td></td>
								                        	</tr>
								                        	<?php
						                        		}else{
						                        			foreach ($soh_opening_time_tuesday as $key => $value) {
					                        				?>
								                        	<tr class="soh_time_current_tuesday">
								                        		<td class="soh_opening_timepicker_field_tuesday">
								                        			<input type="time" class="soh_opening_timepicker_tuesday" name="soh_opening_time_tuesday[]" value="<?php echo $soh_opening_time_tuesday[$key];?>">
								                        		</td>
								                        		<td class="soh_closing_timepicker_field_tuesday">
			                                    					<input type="time" class="soh_closing_timepicker_tuesday" name="soh_closing_time_tuesday[]" value="<?php echo $soh_closing_time_tuesday[$key];?>">
								                        		</td>
								                        		<td>
								                        			<a href="javascript:void(0);" class="soh_day_close_tuesday button">X</a>
								                        		</td>
								                        		<td></td>
								                        	</tr>
		                                					<?php
						                        			}	
						                        		}
					                        			?>
	                                                </tbody>
							                    </table>
							                </div>
							            </div>
						                <div class="soh_day_wednesday">
	                                		<input type="checkbox" class="soh_period_check_wednesday" name="soh_comman[soh_period_wednesday]" value="Wednesday"<?php if($soh_comman['soh_period_wednesday'] == 'Wednesday'){echo "checked";}?>>
	                                		<label>Wednesday</label>
	                                	</div>
	                                	<div class="soh_day_wednesday_period_and_options">
		                                	<div class="soh_day_wednesday_options soh_options">
		                                		<input type="radio" name="soh_comman[soh_time_wednesday_options]" class="soh_time_wednesday_options" value="wednesday_full_day" <?php if($soh_comman['soh_time_wednesday_options'] == 'wednesday_full_day'){echo "checked";}?>>
		                                		<span><?php echo __('Full Day Open','store-opening-hours-for-woocommerce');?></span>
		                                		<input type="radio" name="soh_comman[soh_time_wednesday_options]" class="soh_time_wednesday_options" value="wednesday_time_period"  <?php if($soh_comman['soh_time_wednesday_options'] == 'wednesday_time_period'){echo "checked";}?>>
		                                		<span><?php echo __('Time Schedule','store-opening-hours-for-woocommerce');?></span>
		                                	</div>
							                <div class="soh_day_period_wednesday soh_period">
							                    <table>
							                        <thead>
								                        <tr>
								                            <th><?php echo __('Wednesday Opening', 'store-opening-hours-for-woocommerce'); ?></th>
								                            <th><?php echo __('Wednesday Closing', 'store-opening-hours-for-woocommerce'); ?></th>
								                            <th>
								                                <a href="javascript:void(0);" class="soh_day_add_wednesday button">+</a>
								                            </th>
								                            <th>
								                                <input class="soh_all_day_value_wednesday" type="hidden" name="" value=""/>
								                                <a href="#" class="soh_all_day_wednesday button">
								                                <?php echo __('All Clear', 'store-opening-hours-for-woocommerce' ); ?>
								                                </a>
								                             </th>
								                        </tr>
							                        </thead>
							                        <tbody class="soh_time_wrapaer_wednesday">
						                        		<?php 
						                        		$soh_opening_time_wednesday = get_option('soh_opening_time_wednesday');
						                        		$soh_closing_time_wednesday = get_option('soh_closing_time_wednesday');
						                        		if (empty($soh_opening_time_wednesday) || $soh_opening_time_wednesday['0'] == '') {
						                        			?>
						                        			<tr class="soh_time_current_wednesday">
								                        		<td class="soh_opening_timepicker_field_wednesday">
								                        			<input type="time" class="soh_opening_timepicker_wednesday" name="soh_opening_time_wednesday[]" value="">
								                        		</td>
								                        		<td class="soh_closing_timepicker_field_wednesday">
			                                    					<input type="time" class="soh_closing_timepicker_wednesday" name="soh_closing_time_wednesday[]" value="">
								                        		</td>
								                        		<td>
								                        			<a href="javascript:void(0);" class="soh_day_close_wednesday button">X</a>
								                        		</td>
								                        		<td></td>
								                        	</tr>
								                        	<?php
						                        		}else{
						                        			foreach ($soh_opening_time_wednesday as $key => $value) {
					                        				?>
								                        	<tr class="soh_time_current_wednesday">
								                        		<td class="soh_opening_timepicker_field_wednesday">
								                        			<input type="time" class="soh_opening_timepicker_wednesday" name="soh_opening_time_wednesday[]" value="<?php echo $soh_opening_time_wednesday[$key];?>">
								                        		</td>
								                        		<td class="soh_closing_timepicker_field_wednesday">
			                                    					<input type="time" class="soh_closing_timepicker_wednesday" name="soh_closing_time_wednesday[]" value="<?php echo $soh_closing_time_wednesday[$key];?>">
								                        		</td>
								                        		<td>
								                        			<a href="javascript:void(0);" class="soh_day_close_wednesday button">X</a>
								                        		</td>
								                        		<td></td>
								                        	</tr>
		                                					<?php
						                        			}	
						                        		}
					                        			?>
	                                                </tbody>
							                    </table>
							                </div>
							            </div>
						                <div class="soh_day_thursday">
	                                		<input type="checkbox" class="soh_period_check_thursday" name="soh_comman[soh_period_thursday]" value="Thursday"<?php if($soh_comman['soh_period_thursday'] == 'Thursday'){echo "checked";}?>>
	                                		<label>Thursday</label>
	                                	</div>
	                                	<div class="soh_day_thursday_period_and_options">
		                                	<div class="soh_day_thursday_options soh_options">
		                                		<input type="radio" name="soh_comman[soh_time_thursday_options]" class="soh_time_thursday_options" value="thursday_full_day" <?php if($soh_comman['soh_time_thursday_options'] == 'thursday_full_day'){echo "checked";}?>>
		                                		<span><?php echo __('Full Day Open','store-opening-hours-for-woocommerce');?></span>
		                                		<input type="radio" name="soh_comman[soh_time_thursday_options]" class="soh_time_thursday_options" value="thursday_time_period"  <?php if($soh_comman['soh_time_thursday_options'] == 'thursday_time_period'){echo "checked";}?>>
		                                		<span><?php echo __('Time Schedule','store-opening-hours-for-woocommerce');?></span>
		                                	</div>
							                <div class="soh_day_period_thursday soh_period">
							                    <table>
							                        <thead>
								                        <tr>
								                            <th><?php echo __('Thursday Opening', 'store-opening-hours-for-woocommerce'); ?></th>
								                            <th><?php echo __('Thursday Closing', 'store-opening-hours-for-woocommerce'); ?></th>
								                            <th>
								                                <a href="javascript:void(0);" class="soh_day_add_thursday button">+</a>
								                            </th>
								                            <th>
								                                <input class="soh_all_day_value_thursday" type="hidden" name="" value=""/>
								                                <a href="#" class="soh_all_day_thursday button">
								                                <?php echo __('All Clear', 'store-opening-hours-for-woocommerce' ); ?>
								                                </a>
								                            </th>
								                        </tr>
							                        </thead>
							                        <tbody class="soh_time_wrapaer_thursday">
						                        		<?php 
						                        		$soh_opening_time_thursday = get_option('soh_opening_time_thursday');
						                        		$soh_closing_time_thursday = get_option('soh_closing_time_thursday');
						                        		if (empty($soh_opening_time_thursday) || $soh_opening_time_thursday['0'] == '') {
						                        			?>
						                        			<tr class="soh_time_current_thursday">
								                        		<td class="soh_opening_timepicker_field_thursday">
								                        			<input type="time" class="soh_opening_timepicker_thursday" name="soh_opening_time_thursday[]" value="">
								                        		</td>
								                        		<td class="soh_closing_timepicker_field_thursday">
			                                    					<input type="time" class="soh_closing_timepicker_thursday" name="soh_closing_time_thursday[]" value="">
								                        		</td>
								                        		<td>
								                        			<a href="javascript:void(0);" class="soh_day_close_thursday button">X</a>
								                        		</td>
								                        		<td></td>
								                        	</tr>
								                        	<?php
						                        		}else{
						                        			foreach ($soh_opening_time_thursday as $key => $value) {
					                        				?>
								                        	<tr class="soh_time_current_thursday">
								                        		<td class="soh_opening_timepicker_field_thursday">
								                        			<input type="time" class="soh_opening_timepicker_thursday" name="soh_opening_time_thursday[]" value="<?php echo $soh_opening_time_thursday[$key];?>">
								                        		</td>
								                        		<td class="soh_closing_timepicker_field_thursday">
			                                    					<input type="time" class="soh_closing_timepicker_thursday" name="soh_closing_time_thursday[]" value="<?php echo $soh_closing_time_thursday[$key];?>">
								                        		</td>
								                        		<td>
								                        			<a href="javascript:void(0);" class="soh_day_close_thursday button">X</a>
								                        		</td>
								                        		<td></td>
								                        	</tr>
		                                					<?php
						                        			}	
						                        		}
					                        			?>
	                                                </tbody>
							                    </table>
							                </div>
							            </div>
						                <div class="soh_day_friday">
	                                		<input type="checkbox" class="soh_period_check_friday" name="soh_comman[soh_period_friday]" value="Friday"<?php if($soh_comman['soh_period_friday'] == 'Friday'){echo "checked";}?>>
	                                		<label>Friday</label>
	                                	</div>
	                                	<div class="soh_day_friday_period_and_options">
		                                	<div class="soh_day_friday_options soh_options">
		                                		<input type="radio" name="soh_comman[soh_time_friday_options]" class="soh_time_friday_options" value="friday_full_day" <?php if($soh_comman['soh_time_friday_options'] == 'friday_full_day'){echo "checked";}?>>
		                                		<span><?php echo __('Full Day Open','store-opening-hours-for-woocommerce');?></span>
		                                		<input type="radio" name="soh_comman[soh_time_friday_options]" class="soh_time_friday_options" value="friday_time_period"  <?php if($soh_comman['soh_time_friday_options'] == 'friday_time_period'){echo "checked";}?>>
		                                		<span><?php echo __('Time Schedule','store-opening-hours-for-woocommerce');?></span>
		                                	</div>
							                <div class="soh_day_period_friday soh_period">
							                    <table>
							                        <thead>
								                        <tr>
								                            <th><?php echo __('Friday Opening', 'store-opening-hours-for-woocommerce'); ?></th>
								                            <th><?php echo __('Friday Closing', 'store-opening-hours-for-woocommerce'); ?></th>
								                            <th>
								                                <a href="javascript:void(0);" class="soh_day_add_friday button">+</a>
								                            </th>
								                            <th>
								                                <input class="soh_all_day_value_friday" type="hidden" name="" value=""/>
								                                <a href="#" class="soh_all_day_friday button">
								                                <?php echo __('All Clear', 'store-opening-hours-for-woocommerce' ); ?>
								                                </a>
								                             </th>
								                        </tr>
							                        </thead>
							                        <tbody class="soh_time_wrapaer_friday">
						                        		<?php 
						                        		$soh_opening_time_friday = get_option('soh_opening_time_friday');
						                        		$soh_closing_time_friday = get_option('soh_closing_time_friday');
						                        		if (empty($soh_opening_time_friday) || $soh_opening_time_friday['0'] == '') {
						                        			?>
						                        			<tr class="soh_time_current_friday">
								                        		<td class="soh_opening_timepicker_field_friday">
								                        			<input type="time" class="soh_opening_timepicker_friday" name="soh_opening_time_friday[]" value="">
								                        		</td>
								                        		<td class="soh_closing_timepicker_field_friday">
			                                    					<input type="time" class="soh_closing_timepicker_friday" name="soh_closing_time_friday[]" value="">
								                        		</td>
								                        		<td>
								                        			<a href="javascript:void(0);" class="soh_day_close_friday button">X</a>
								                        		</td>
								                        		<td></td>
								                        	</tr>
								                        	<?php
						                        		}else{
						                        			foreach ($soh_opening_time_friday as $key => $value) {
					                        				?>
								                        	<tr class="soh_time_current_friday">
								                        		<td class="soh_opening_timepicker_field_friday">
								                        			<input type="time" class="soh_opening_timepicker_friday" name="soh_opening_time_friday[]" value="<?php echo $soh_opening_time_friday[$key];?>">
								                        		</td>
								                        		<td class="soh_closing_timepicker_field_friday">
			                                    					<input type="time" class="soh_closing_timepicker_friday" name="soh_closing_time_friday[]" value="<?php echo $soh_closing_time_friday[$key];?>">
								                        		</td>
								                        		<td>
								                        			<a href="javascript:void(0);" class="soh_day_close_friday button">X</a>
								                        		</td>
								                        		<td></td>
								                        	</tr>
		                                					<?php
						                        			}	
						                        		}
					                        			?>
	                                                </tbody>
							                    </table>
							                </div>
							            </div>
						                <div class="soh_day_saturday">
	                                		<input type="checkbox" class="soh_period_check_saturday" name="soh_comman[soh_period_saturday]" value="Saturday"<?php if($soh_comman['soh_period_saturday'] == 'Saturday'){echo "checked";}?>>
	                                		<label>Saturday</label>
	                                	</div>
	                                	<div class="soh_day_saturday_period_and_options">
		                                	<div class="soh_day_saturday_options soh_options">
		                                		<input type="radio" name="soh_comman[soh_time_saturday_options]" class="soh_time_saturday_options" value="saturday_full_day" <?php if($soh_comman['soh_time_saturday_options'] == 'saturday_full_day'){echo "checked";}?>>
		                                		<span><?php echo __('Full Day Open','store-opening-hours-for-woocommerce');?></span>
		                                		<input type="radio" name="soh_comman[soh_time_saturday_options]" class="soh_time_saturday_options" value="saturday_time_period"  <?php if($soh_comman['soh_time_saturday_options'] == 'saturday_time_period'){echo "checked";}?>>
		                                		<span><?php echo __('Time Schedule','store-opening-hours-for-woocommerce');?></span>
		                                	</div>
							                <div class="soh_day_period_saturday soh_period">
							                    <table>
							                        <thead>
								                        <tr>
								                            <th><?php echo __('Saturday Opening', 'store-opening-hours-for-woocommerce'); ?></th>
								                            <th><?php echo __('Saturday Closing', 'store-opening-hours-for-woocommerce'); ?></th>
								                            <th>
								                                <a href="javascript:void(0);" class="soh_day_add_saturday button">+</a>
								                            </th>
								                            <th>
								                                <input class="soh_all_day_value_saturday" type="hidden" name="" value=""/>
								                                <a href="#" class="soh_all_day_saturday button">
								                                <?php echo __('All Clear', 'store-opening-hours-for-woocommerce' ); ?>
								                                </a>
								                             </th>
								                        </tr>
							                        </thead>
							                        <tbody class="soh_time_wrapaer_saturday">
						                        		<?php 
						                        		$soh_opening_time_saturday = get_option('soh_opening_time_saturday');
						                        		$soh_closing_time_saturday = get_option('soh_closing_time_saturday');
						                        		if (empty($soh_opening_time_saturday) || $soh_opening_time_saturday['0'] == '') {
						                        			?>
						                        			<tr class="soh_time_current_saturday">
								                        		<td class="soh_opening_timepicker_field_saturday">
								                        			<input type="time" class="soh_opening_timepicker_saturday" name="soh_opening_time_saturday[]" value="">
								                        		</td>
								                        		<td class="soh_closing_timepicker_field_saturday">
			                                    					<input type="time" class="soh_closing_timepicker_saturday" name="soh_closing_time_saturday[]" value="">
								                        		</td>
								                        		<td>
								                        			<a href="javascript:void(0);" class="soh_day_close_saturday button">X</a>
								                        		</td>
								                        		<td></td>
								                        	</tr>
								                        	<?php
						                        		}else{
						                        			foreach ($soh_opening_time_saturday as $key => $value) {
					                        				?>
								                        	<tr class="soh_time_current_saturday">
								                        		<td class="soh_opening_timepicker_field_saturday">
								                        			<input type="time" class="soh_opening_timepicker_saturday" name="soh_opening_time_saturday[]" value="<?php echo $soh_opening_time_saturday[$key];?>">
								                        		</td>
								                        		<td class="soh_closing_timepicker_field_saturday">
			                                    					<input type="time" class="soh_closing_timepicker_saturday" name="soh_closing_time_saturday[]" value="<?php echo $soh_closing_time_saturday[$key];?>">
								                        		</td>
								                        		<td>
								                        			<a href="javascript:void(0);" class="soh_day_close_saturday button">X</a>
								                        		</td>
								                        		<td></td>
								                        	</tr>
		                                					<?php
						                        			}	
						                        		}
					                        			?>
	                                                </tbody>
							                    </table>
							                </div>
							            </div>
						                <div class="soh_day_sunday">
	                                		<input type="checkbox" class="soh_period_check_sunday" name="soh_comman[soh_period_sunday]" value="Sunday"<?php if($soh_comman['soh_period_sunday'] == 'Sunday'){echo "checked";}?>>
	                                		<label>Sunday</label>
	                                	</div>
	                                	<div class="soh_day_sunday_period_and_options">
		                                	<div class="soh_day_sunday_options soh_options">
		                                		<input type="radio" name="soh_comman[soh_time_sunday_options]" class="soh_time_sunday_options" value="sunday_full_day" <?php if($soh_comman['soh_time_sunday_options'] == 'sunday_full_day'){echo "checked";}?>>
		                                		<span><?php echo __('Full Day Open','store-opening-hours-for-woocommerce');?></span>
		                                		<input type="radio" name="soh_comman[soh_time_sunday_options]" class="soh_time_sunday_options" value="sunday_time_period"  <?php if($soh_comman['soh_time_sunday_options'] == 'sunday_time_period'){echo "checked";}?>>
		                                		<span><?php echo __('Time Schedule','store-opening-hours-for-woocommerce');?></span>
		                                	</div>
							                <div class="soh_day_period_sunday soh_period">
							                    <table>
							                        <thead>
								                        <tr>
								                            <th><?php echo __('Sunday Opening', 'store-opening-hours-for-woocommerce'); ?></th>
								                            <th><?php echo __('Sunday Closing', 'store-opening-hours-for-woocommerce'); ?></th>
								                            <th>
								                                <a href="javascript:void(0);" class="soh_day_add_sunday button">+</a>
								                            </th>
								                            <th>
								                                <input class="soh_all_day_value_sunday" type="hidden" name="" value=""/>
								                                <a href="#" class="soh_all_day_sunday button">
								                                <?php echo __('All Clear', 'store-opening-hours-for-woocommerce' ); ?>
								                                </a>
								                             </th>
								                        </tr>
							                        </thead>
							                        <tbody class="soh_time_wrapaer_sunday">
						                        		<?php 
						                        		$soh_opening_time_sunday = get_option('soh_opening_time_sunday');
						                        		$soh_closing_time_sunday = get_option('soh_closing_time_sunday');
						                        		if (empty($soh_opening_time_sunday) || $soh_opening_time_sunday['0'] == '') {
						                        			?>
						                        			<tr class="soh_time_current_sunday">
								                        		<td class="soh_opening_timepicker_field_sunday">
								                        			<input type="time" class="soh_opening_timepicker_sunday" name="soh_opening_time_sunday[]" value="">
								                        		</td>
								                        		<td class="soh_closing_timepicker_field_sunday">
			                                    					<input type="time" class="soh_closing_timepicker_sunday" name="soh_closing_time_sunday[]" value="">
								                        		</td>
								                        		<td>
								                        			<a href="javascript:void(0);" class="soh_day_close_sunday button">X</a>
								                        		</td>
								                        		<td></td>
								                        	</tr>
								                        	<?php
						                        		}else{
						                        			foreach ($soh_opening_time_sunday as $key => $value) {
					                        				?>
								                        	<tr class="soh_time_current_sunday">
								                        		<td class="soh_opening_timepicker_field_sunday">
								                        			<input type="time" class="soh_opening_timepicker_sunday" name="soh_opening_time_sunday[]" value="<?php echo $soh_opening_time_sunday[$key];?>">
								                        		</td>
								                        		<td class="soh_closing_timepicker_field_sunday">
			                                    					<input type="time" class="soh_closing_timepicker_sunday" name="soh_closing_time_sunday[]" value="<?php echo $soh_closing_time_sunday[$key];?>">
								                        		</td>
								                        		<td>
								                        			<a href="javascript:void(0);" class="soh_day_close_sunday button">X</a>
								                        		</td>
								                        		<td></td>
								                        	</tr>
		                                					<?php
						                        			}	
						                        		}
					                        			?>
	                                                </tbody>
							                    </table>
							                </div>
							            </div>
	                                </td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </div>               
	                <div id="soh-tab-Notification" class="soh-tab-content">
	                	<div class="table_title_header">
	                    	<h3><?php echo __('Alert box','store-opening-hours-for-woocommerce');?></h3>
	                	</div>
	                    <table class="data_table">
	                        <tbody class="soh_table_body">
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Alert Box schedule Font Size','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="number" name="soh_comman[soh_alert_box_font_size]" value="<?php echo $soh_comman['soh_alert_box_font_size'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Alert Box Color','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" class="color-picker" data-alpha="true" data-default-color="" name="soh_comman[soh_alert_box_color]" value="<?php echo $soh_comman['soh_alert_box_color'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Alert Box Open text Color','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" class="color-picker" data-alpha="true" data-default-color="" name="soh_comman[soh_alert_box_text_color]" value="<?php echo $soh_comman['soh_alert_box_text_color'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Alert Box Close text Color','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" class="color-picker" data-alpha="true" data-default-color="" name="soh_comman[soh_alert_close_box_text_color]" value="<?php echo $soh_comman['soh_alert_close_box_text_color'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Alert Box schedule Background Color','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" class="color-picker" data-alpha="true" data-default-color="" name="soh_comman[soh_alert_box_background_color]" value="<?php echo $soh_comman['soh_alert_box_background_color'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Alert Box schedule text Color','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" class="color-picker" data-alpha="true" data-default-color="" name="soh_comman[soh_alert_box_schedule_text_color]" value="<?php echo $soh_comman['soh_alert_box_schedule_text_color'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Alert Box Header Logo','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="radio" id="clock_icon" name="soh_alert_box_logo" class="soh_alert_box_logo" value="clock_icon" checked>
	                                    <label for="clock_icon">Clock Icon</label>
	                                    <input type="radio" id="custom_icon" name="soh_alert_box_logo" class="soh_alert_box_logo" value="custom_icon" disabled>
	                                    <label for="custom_icon" style="opacity: .6;">Add Custom Image</label>
	                                    <label class="soh_pro_link">Only available in pro version <a href="https://xthemeshop.com/product/store-opening-hours-for-woocommerce-pro/" target="_blank">link</a></label>
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr clock">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Clock Logo','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td soh_svg_section">
	                                    <input type="radio" id="clock_icon_1" name="soh_popup_logo" value="clock_icon_1" checked>
	                                    <label for="clock_icon_1"><?php echo $ocwqv_qscfw_icon['clock_icon_1'];?></label>
	                                    <input type="radio" id="clock_icon_2" name="soh_popup_logo" value="clock_icon_2" disabled>
	                                    <label for="clock_icon_2" style="opacity: .6;"><?php echo $ocwqv_qscfw_icon['clock_icon_2'];?></label>
	                                    <input type="radio" id="clock_icon_3" name="soh_popup_logo" value="clock_icon_3" disabled>
	                                    <label for="clock_icon_3" style="opacity: .6;"><?php echo $ocwqv_qscfw_icon['clock_icon_3'];?></label>
	                                    <input type="radio" id="clock_icon_4" name="soh_popup_logo" value="clock_icon_4" disabled>
	                                    <label for="clock_icon_4" style="opacity: .6;"><?php echo $ocwqv_qscfw_icon['clock_icon_4'];?></label>
	                                    <input type="radio" id="clock_icon_5" name="soh_popup_logo" value="clock_icon_5" disabled>
	                                    <label for="clock_icon_5" style="opacity: .6;"><?php echo $ocwqv_qscfw_icon['clock_icon_5'];?></label>
	                                    <input type="radio" id="clock_icon_6" name="soh_popup_logo" value="clock_icon_6" disabled>
	                                    <label for="clock_icon_6" style="opacity: .6;"><?php echo $ocwqv_qscfw_icon['clock_icon_6'];?></label>
	                                    <label class="soh_pro_link">Only available in pro version <a href="https://xthemeshop.com/product/store-opening-hours-for-woocommerce-pro/" target="_blank">link</a></label>
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr clock">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Clock Logo Color','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" class="color-picker" data-alpha="true" data-default-color="" name="soh_comman[soh_clock_logo_color]" value="<?php echo $soh_comman['soh_clock_logo_color'];?>">
	                                </td>
	                            </tr>
	                        </tbody>
	                    </table>
	                    <div class="table_title_header">
	                    	<h3><?php echo __('Alert Widget','store-opening-hours-for-woocommerce');?></h3>
	                	</div>
	                    <table class="data_table">
	                        <tbody class="soh_table_body">
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Alert Widget Countdown Font Size','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="number" name="soh_comman[soh_widget_countdown_font_size]" value="<?php echo $soh_comman['soh_widget_countdown_font_size'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Alert Widget Open Text/Icon Color','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" class="color-picker" data-alpha="true" data-default-color="" name="soh_comman[soh_widget_icon_color]" value="<?php echo $soh_comman['soh_widget_icon_color'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Alert Widget Close Text/Icon Color','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" class="color-picker" data-alpha="true" data-default-color="" name="soh_comman[soh_widget_close_text_icon_color]" value="<?php echo $soh_comman['soh_widget_close_text_icon_color'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Alert Widget Background Color','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" class="color-picker" data-alpha="true" data-default-color="" name="soh_comman[soh_widget_background_color]" value="<?php echo $soh_comman['soh_widget_background_color'];?>">
	                                </td>
	                            </tr>
	                        </tbody>                         
	                    </table>
	                </div>
	                <div id="soh-tab-Settings" class="soh-tab-content">
	                	<div class="table_title_header">
	                    	<h3><?php echo __('Notification Settings','store-opening-hours-for-woocommerce');?></h3>
	                	</div>
	                    <table class="data_table">
	                        <tbody class="soh_table_body">
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Management Mode','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="checkbox" class="soh_notification_management_mode" name="soh_comman[soh_notification_management_mode]" value="yes"<?php if($soh_comman['soh_notification_management_mode'] == 'yes'){echo "checked";}?>>
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr" id="soh_role_section">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('By Role','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                	<select id="wg_select_user_role" name="wg_roles_select2[]" multiple="multiple" style="width:50%;">
	                                		<?php 
				                           		$user_roles = get_option('wg_roles_select2');

				                           		if (!empty($user_roles)) {

					                           		foreach ($user_roles as $key => $value) {
					                           					$role_names = ( mb_strlen( $value ) > 50 ) ? mb_substr( $value, 0, 49 ) . '...' : $value; 
					                           				?>

					                                 		<option value="<?php echo esc_attr($value);?>" selected="selected"><?php echo esc_attr($role_names);?></option>
					                                 	<?php   
					                           		}

				                           		}
				                           	?>
	                                	</select>
	                                </td>
	                            </tr>
	                        </tbody>
	                    </table>
	                    <div class="table_title_header">
	                    	<h3><?php echo __('Alert Texts','store-opening-hours-for-woocommerce');?></h3>
	                	</div>
	                    <table class="data_table">
	                        <tbody class="soh_table_body">
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Text for Open widget','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" name="soh_comman[soh_text_open_widget]" class="regular-text" value="<?php echo $soh_comman['soh_text_open_widget'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Text for Close widget','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" name="soh_comman[soh_text_close_widget]" class="regular-text" value="<?php echo $soh_comman['soh_text_close_widget'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Text for Hours Open Modal','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" name="soh_comman[soh_text_hours_open_model]" class="regular-text" value="<?php echo $soh_comman['soh_text_hours_open_model'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Text for Hours Close Modal','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" name="soh_comman[soh_text_hours_close_model]" class="regular-text" value="<?php echo $soh_comman['soh_text_hours_close_model'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Text for Schedule Header','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" name="soh_comman[soh_text_schedule_header]" class="regular-text" value="<?php echo $soh_comman['soh_text_schedule_header'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Text for Holiday Schedule','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" name="soh_comman[soh_text_holiday_schedule]" class="regular-text" value="<?php echo $soh_comman['soh_text_holiday_schedule'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Text for store closed then popup body','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" name="soh_comman[soh_text_popup_body_close]" class="regular-text" value="<?php echo $soh_comman['soh_text_popup_body_close'];?>">
	                                </td>
	                            </tr>
	                        </tbody>                         
	                    </table>
	                    <div class="table_title_header">
	                    	<h3><?php echo __('Week Day Texts','store-opening-hours-for-woocommerce');?></h3>
	                	</div>
	                    <table class="data_table">
	                        <tbody class="soh_table_body">
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Monday Text Translate','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" name="soh_comman[soh_monday_text]" class="regular-text" value="<?php echo $soh_comman['soh_monday_text'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Tuesday Text Translate','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" name="soh_comman[soh_tuesday_text]" class="regular-text" value="<?php echo $soh_comman['soh_tuesday_text'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Wednesday Text Translate','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" name="soh_comman[soh_wednesday_text]" class="regular-text" value="<?php echo $soh_comman['soh_wednesday_text'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Thursday Text Translate','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" name="soh_comman[soh_thursday_text]" class="regular-text" value="<?php echo $soh_comman['soh_thursday_text'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Friday Text Translate','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" name="soh_comman[soh_friday_text]" class="regular-text" value="<?php echo $soh_comman['soh_friday_text'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Saturday Text Translate','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" name="soh_comman[soh_saturday_text]" class="regular-text" value="<?php echo $soh_comman['soh_saturday_text'];?>">
	                                </td>
	                            </tr>
	                            <tr class="soh_table_inner_tr">
	                                <th class="soh_table_inner_th">
	                                    <label><?php echo __('Sunday Text Translate','store-opening-hours-for-woocommerce');?></label>
	                                </th>
	                                <td class="soh_table_inner_td">
	                                    <input type="text" name="soh_comman[soh_sunday_text]" class="regular-text" value="<?php echo $soh_comman['soh_sunday_text'];?>">
	                                </td>
	                            </tr>
	                        </tbody>                         
	                    </table>
	                </div>
	                <div class="submit_button">
	                    <input type="hidden" name="soh_form_submit" value="soh_save_option">
	                    <input type="submit" value="Save changes" name="submit" class="button-primary" id="soh-btn-space">
	                </div>              
	            </form>  
	        </div>
	        <?php
        }


        function soh_role_ajax(){
        	global $wp_roles;
        	$return = array();
            
            foreach( $wp_roles->role_names as $role => $name ) {
            	$return[] = array( $role, $name );
            }

            echo json_encode( $return );
            die;
        }

        function SOH_recursive_sanitize_text_field( $array ) {
            foreach ( $array as $key => &$value ) {
                if ( is_array( $value ) ) {
                    $value = $this->SOH_recursive_sanitize_text_field($value);
                }else{
                    $value = sanitize_text_field( $value );
                }
            }
            return $array;
        
        }


        function SOH_save_option(){
        	if( current_user_can('administrator') ) { 
	            if(isset($_REQUEST['soh_form_submit']) && $_REQUEST['soh_form_submit'] == 'soh_save_option'){
	            	
                    $isecheckbox = array(
                    	'soh_store_hours_manager',
                    	'soh_enable_cache_clearing',
                    	'soh_notification_management_mode',
                    	'soh_all_products',
                    	'soh_all_pages',
                    	'soh_all_posts',
                    	'soh_period_monday',
                    	'soh_period_tuesday',
                    	'soh_period_wednesday',
                    	'soh_period_thursday',
                    	'soh_period_friday',
                    	'soh_period_saturday',
                    	'soh_period_sunday',
                    );

                    foreach ($isecheckbox as $key_isecheckbox => $value_isecheckbox) {
                        if(!isset($_REQUEST['soh_comman'][$value_isecheckbox])){
                            $_REQUEST['soh_comman'][$value_isecheckbox] ='no';
                        }
                    }

                    	$wg_roles_select2 = $this->SOH_recursive_sanitize_text_field( $_REQUEST['wg_roles_select2'] );
        				update_option('wg_roles_select2', $wg_roles_select2, 'yes');

	        			$soh_opening_time_monday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_opening_time_monday'] );
	        			update_option('soh_opening_time_monday', $soh_opening_time_monday, 'yes');
        		
	        			$soh_closing_time_monday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_closing_time_monday'] );
	        			update_option('soh_closing_time_monday', $soh_closing_time_monday, 'yes');
	        		
	        			$soh_opening_time_tuesday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_opening_time_tuesday'] );
	        			update_option('soh_opening_time_tuesday', $soh_opening_time_tuesday, 'yes');
	        		
	        			$soh_closing_time_tuesday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_closing_time_tuesday'] );
	        			update_option('soh_closing_time_tuesday', $soh_closing_time_tuesday, 'yes');
	        		
	        			$soh_opening_time_wednesday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_opening_time_wednesday'] );
	        			update_option('soh_opening_time_wednesday', $soh_opening_time_wednesday, 'yes');
	        		
	        			$soh_closing_time_wednesday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_closing_time_wednesday'] );
	        			update_option('soh_closing_time_wednesday', $soh_closing_time_wednesday, 'yes');
	        	
	        			$soh_opening_time_thursday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_opening_time_thursday'] );
	        			update_option('soh_opening_time_thursday', $soh_opening_time_thursday, 'yes');
	        		
	        			$soh_closing_time_thursday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_closing_time_thursday'] );
	        			update_option('soh_closing_time_thursday', $soh_closing_time_thursday, 'yes');
	        		
	        			$soh_opening_time_friday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_opening_time_friday'] );
	        			update_option('soh_opening_time_friday', $soh_opening_time_friday, 'yes');
	        		
	        			$soh_closing_time_friday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_closing_time_friday'] );
	        			update_option('soh_closing_time_friday', $soh_closing_time_friday, 'yes');
	        		
	        			$soh_opening_time_saturday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_opening_time_saturday'] );
	        			update_option('soh_opening_time_saturday', $soh_opening_time_saturday, 'yes');
	        		
	        			$soh_closing_time_saturday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_closing_time_saturday'] );
	        			update_option('soh_closing_time_saturday', $soh_closing_time_saturday, 'yes');
	        		
	        			$soh_opening_time_sunday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_opening_time_sunday'] );
	        			update_option('soh_opening_time_sunday', $soh_opening_time_sunday, 'yes');
	        		
	        			$soh_closing_time_sunday = $this->SOH_recursive_sanitize_text_field( $_REQUEST['soh_closing_time_sunday'] );
	        			update_option('soh_closing_time_sunday', $soh_closing_time_sunday, 'yes');
                   	
                    foreach ($_REQUEST['soh_comman'] as $key_soh_comman => $value_soh_comman) {
                        update_option($key_soh_comman, sanitize_text_field($value_soh_comman), 'yes');
                    }

	                wp_redirect( admin_url( '/admin.php?page=store-opening-hours-settings' ) );
	                exit;     
	            }
	        }
        }	

        function SOH_support_and_rating_notice() {
            $screen = get_current_screen();
            //print_r($screen );
            if( 'store-opening-hours-settings' == $screen->parent_base) {
                ?>
                <div class="soh_ratess_open">
                    <div class="soh_rateus_notice">
                        <div class="soh_rtusnoti_left">
                            <h3>Rate Us</h3>
                            <label>If you like our plugin, </label>
                            <a target="_blank" href="https://wordpress.org/support/plugin/store-opening-hours-for-woocommerce/reviews/?filter=5">
                                <label>Please vote us</label>
                            </a>
                            
                            <label>,so we can contribute more features for you.</label>
                        </div>
                        <div class="soh_rtusnoti_right">
                            <img src="<?php echo SOH_PLUGIN_DIR;?>/images/review.png" class="soh_review_icon">
                        </div>
                    </div>
                    <div class="soh_support_notice">
                        <div class="soh_rtusnoti_left">
                            <h3>Having Issues?</h3>
                            <label>You can contact us at</label>
                            <a target="_blank" href="https://xthemeshop.com/contact/">
                                <label>Our Support Forum</label>
                            </a>
                        </div>
                        <div class="soh_rtusnoti_right">
                            <img src="<?php echo SOH_PLUGIN_DIR;?>/images/support.png" class="soh_review_icon">
                        </div>
                       
                    </div>
                </div>
                <div class="soh_donate_main">
                   <img src="<?php echo SOH_PLUGIN_DIR;?>/images/coffee.svg">
                   <h3>Buy me a Coffee !</h3>
                   <p>If you like this plugin, buy me a coffee and help support this plugin !</p>
                   <div class="soh_donate_form">
                        <a class="button button-primary ocwg_donate_btn" href="https://www.paypal.com/paypalme/shayona163/" data-link="https://www.paypal.com/paypalme/shayona163/" target="_blank">Buy me a coffee !</a>
                   </div>
                </div>
                <?php
            }
        }
				
        function init() {
        	add_action( 'admin_menu',  array($this, 'SOH_submenu_page'));
        	add_action( 'init',  array($this, 'SOH_save_option'));
        	add_action( 'wp_ajax_nopriv_wg_roles_ajax',array($this, 'soh_role_ajax') );
            add_action( 'wp_ajax_wg_roles_ajax', array($this, 'soh_role_ajax') );
			add_action( 'admin_notices', array($this, 'SOH_support_and_rating_notice' ));		
        }

        public static function SOH_instance() {
            if (!isset(self::$SOH_instance)) {
                self::$SOH_instance = new self();
                self::$SOH_instance->init();
            }
            return self::$SOH_instance;
        }
    }
    SOH_admin_menu::SOH_instance();
}

?>