<?php

if (!defined('ABSPATH'))
  exit;

if (!class_exists('SOH_frontend_menu')) {

    class SOH_frontend_menu {

        protected static $SOH_front_instance;

        function Schedule_show() {
            global $soh_comman;

            $soh_opening_time_monday = get_option('soh_opening_time_monday',true);
            $soh_closing_time_monday = get_option('soh_closing_time_monday',true);

            $soh_opening_time_tuesday = get_option('soh_opening_time_tuesday',true);
            $soh_closing_time_tuesday = get_option('soh_closing_time_tuesday',true);

            $soh_opening_time_wednesday = get_option('soh_opening_time_wednesday',true);
            $soh_closing_time_wednesday = get_option('soh_closing_time_wednesday',true);

            $soh_opening_time_thursday = get_option('soh_opening_time_thursday',true);
            $soh_closing_time_thursday = get_option('soh_closing_time_thursday',true);

            $soh_opening_time_friday = get_option('soh_opening_time_friday',true);
            $soh_closing_time_friday = get_option('soh_closing_time_friday',true);

            $soh_opening_time_saturday = get_option('soh_opening_time_saturday',true);
            $soh_closing_time_saturday = get_option('soh_closing_time_saturday',true);

            $soh_opening_time_sunday = get_option('soh_opening_time_sunday',true);
            $soh_closing_time_sunday = get_option('soh_closing_time_sunday',true);
            $close_messages = array();
            
            $time_now = mktime(date('h')+5,date('i')+30);

                //print_R($time_now);
            $local_time  = current_time( 'timestamp' );
            //$current_time = $local_time->getTimestamp() + $local_time->getOffset();
            // $local_time  = $current_time;
                 // print_R($local_time);
            $date = date('h:i A', $local_time);

            if ($soh_comman['soh_period_monday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_monday_options'] == 'monday_time_period' && isset($soh_opening_time_monday['0'])  && $soh_opening_time_monday['0'] != '') {
                $value11 = false;
                foreach ($soh_opening_time_monday as $key => $value) {
                    if (strtotime($soh_opening_time_monday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_monday[$key])) {                       
                        $value11 = true;
                    }elseif(strtotime($soh_opening_time_monday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_monday[$key])){
                        $value11 = false;
                    }
                }
                if($value11 == true){
                    $close_message = true;
                }elseif($value11 == false){
                    $close_message = false;
                }
            }elseif ($soh_comman['soh_period_monday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_monday_options'] == 'monday_time_period'){
                $close_message = true;
            }elseif ($soh_comman['soh_period_tuesday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_tuesday_options'] == 'tuesday_time_period' && isset($soh_opening_time_tuesday['0'])  && $soh_opening_time_tuesday['0'] != '') {
                $value111 = false;
                foreach ($soh_opening_time_tuesday as $key => $value) {
                    if (strtotime($soh_opening_time_tuesday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_tuesday[$key])) {                      
                        $value111 = true;
                    }elseif(strtotime($soh_opening_time_tuesday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_tuesday[$key])){
                        $value111 = false;
                    }
                }
                if($value111 == true){
                    $close_message = true;
                }elseif($value111 == false){
                    $close_message = false;
                }
            }elseif ($soh_comman['soh_period_tuesday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_tuesday_options'] == 'tuesday_time_period' ){
                $close_message = true;
            }elseif ($soh_comman['soh_period_wednesday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_wednesday_options'] == 'wednesday_time_period' && isset($soh_opening_time_wednesday['0'])  && $soh_opening_time_wednesday['0'] != '') {
                $value222 = false;
                foreach ($soh_opening_time_wednesday as $key => $value) {
                    if (strtotime($soh_opening_time_wednesday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_wednesday[$key])) {
                        $value222 = true;
                    }elseif(strtotime($soh_opening_time_wednesday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_wednesday[$key])){
                        $value222 = false;
                    }
                }
                if($value222 == true){
                    $close_message = true;
                }elseif($value222 == false){
                    $close_message = false;
                }
            }elseif ($soh_comman['soh_period_wednesday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_wednesday_options'] == 'wednesday_time_period'){ 
                $close_message = true;
            }elseif ($soh_comman['soh_period_thursday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_thursday_options'] == 'thursday_time_period' && isset($soh_opening_time_thursday['0'])  && $soh_opening_time_thursday['0'] != '') {
                $value333 = false;
                foreach ($soh_opening_time_thursday as $key => $value) {
                    if (strtotime($soh_opening_time_thursday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_thursday[$key])) {                            
                        $value333 = true;
                    }elseif(strtotime($soh_opening_time_thursday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_thursday[$key])){
                        $value333 = false;
                    }
                }
                if($value333 == true){
                    $close_message = true;
                }elseif($value333 == false){
                    $close_message = false;
                }
            }elseif ($soh_comman['soh_period_thursday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_thursday_options'] == 'thursday_time_period'){
                $close_message = true;
            }elseif ($soh_comman['soh_period_friday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_friday_options'] == 'friday_time_period' && isset($soh_opening_time_friday['0'])  && $soh_opening_time_friday['0'] != '') {
                $value444 = false;
                foreach ($soh_opening_time_friday as $key => $value) {
                    if (strtotime($soh_opening_time_friday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_friday[$key])) {                   
                        $value444 = true;
                    }elseif(strtotime($soh_opening_time_friday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_friday[$key])){
                        $value444 = false;
                    }
                }
                if($value444 == true){
                    $close_message = true;
                }elseif($value444 == false){
                    $close_message = false;
                }
            }elseif ($soh_comman['soh_period_friday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_friday_options'] == 'friday_time_period'){
                $close_message = true;
            }elseif ($soh_comman['soh_period_saturday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_saturday_options'] == 'saturday_time_period' && isset($soh_opening_time_saturday['0'])  && $soh_opening_time_saturday['0'] != '') {
                $value555 = false;
                foreach ($soh_opening_time_saturday as $key => $value) {
                    if (strtotime($soh_opening_time_saturday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_saturday[$key])) {
                        $value555 = true;
                    }elseif(strtotime($soh_opening_time_saturday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_saturday[$key])){
                        $value555 = false;
                    }
                }
                if($value555 == true){
                    $close_message = true;
                }elseif($value555 == false){
                    $close_message = false;
                }
            }elseif ($soh_comman['soh_period_saturday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_saturday_options'] == 'saturday_time_period'){
                $close_message = true;
            }elseif ($soh_comman['soh_period_sunday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_sunday_options'] == 'sunday_time_period' && isset($soh_opening_time_sunday['0'])  && $soh_opening_time_sunday['0'] != '') {
                $value666 = false;
                foreach ($soh_opening_time_sunday as $key => $value) {
                    if (strtotime($soh_opening_time_sunday[$key]) <= strtotime($date) && strtotime($date) <= strtotime($soh_closing_time_sunday[$key])) {
                        $value666 = true;
                    }elseif(strtotime($soh_opening_time_sunday[$key]) <= strtotime($date) && strtotime($date) >= strtotime($soh_closing_time_sunday[$key])){
                        $value666 = false;
                    }
                }
                if($value666 == true){
                    $close_message = true;
                }elseif($value666 == false){
                    $close_message = false;
                }
            }elseif ($soh_comman['soh_period_sunday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_sunday_options'] == 'sunday_time_period'){
                $close_message = true;
            }elseif(($soh_comman['soh_period_monday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_monday_options'] == 'monday_full_day')  || ($soh_comman['soh_period_tuesday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_tuesday_options'] == 'tuesday_full_day') || ($soh_comman['soh_period_wednesday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_wednesday_options'] == 'wednesday_full_day') || ($soh_comman['soh_period_thursday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_thursday_options'] == 'thursday_full_day') || ($soh_comman['soh_period_friday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_friday_options'] == 'friday_full_day') || ($soh_comman['soh_period_saturday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_saturday_options'] == 'saturday_full_day') || ($soh_comman['soh_period_sunday'] == date("l", strtotime(date("Y-m-d"))) && $soh_comman['soh_time_sunday_options'] == 'sunday_full_day')){
                $close_message = true;
            }elseif($soh_comman['soh_period_monday'] != date("l", strtotime(date("Y-m-d")))|| $soh_comman['soh_period_tuesday'] != date("l", strtotime(date("Y-m-d"))) || $soh_comman['soh_period_wednesday'] != date("l", strtotime(date("Y-m-d"))) || $soh_comman['soh_period_thursday'] != date("l", strtotime(date("Y-m-d"))) || $soh_comman['soh_period_friday'] != date("l", strtotime(date("Y-m-d"))) || $soh_comman['soh_period_saturday'] != date("l", strtotime(date("Y-m-d"))) || $soh_comman['soh_period_sunday'] != date("l", strtotime(date("Y-m-d")))){
                $close_message = false;
            }else{
                $close_message = true;
            }
            $close_messages[] = $close_message;

            return $close_messages;
        }

        function soh_alert_notification() {
            global $soh_comman, $ocwqv_qscfw_icon;

            $soh_opening_time_monday = get_option('soh_opening_time_monday',true);
            $soh_closing_time_monday = get_option('soh_closing_time_monday',true);

            $soh_opening_time_tuesday = get_option('soh_opening_time_tuesday',true);
            $soh_closing_time_tuesday = get_option('soh_closing_time_tuesday',true);

            $soh_opening_time_wednesday = get_option('soh_opening_time_wednesday',true);
            $soh_closing_time_wednesday = get_option('soh_closing_time_wednesday',true);

            $soh_opening_time_thursday = get_option('soh_opening_time_thursday',true);
            $soh_closing_time_thursday = get_option('soh_closing_time_thursday',true);

            $soh_opening_time_friday = get_option('soh_opening_time_friday',true);
            $soh_closing_time_friday = get_option('soh_closing_time_friday',true);

            $soh_opening_time_saturday = get_option('soh_opening_time_saturday',true);
            $soh_closing_time_saturday = get_option('soh_closing_time_saturday',true);

            $soh_opening_time_sunday = get_option('soh_opening_time_sunday',true);
            $soh_closing_time_sunday = get_option('soh_closing_time_sunday',true);
        

            $Schedule_show = $this->Schedule_show();
            if ($Schedule_show['0'] == true) {
                $cus_class = 'open';
            }elseif ($Schedule_show['0'] == false) {
                $cus_class = 'close';
            }
            ?>
            <div class="soh_alert_notification_content" id="soh_alert_hide_click_body">
                <div class="soh_alert_notification_main" style="background-color: <?php echo esc_html($soh_comman['soh_alert_box_color']);?>;">
                    <div class="soh_alert_notification_inner">
                        <div class="soh_alert_status">
                            <?php                            
                            if ($Schedule_show['0'] == true) {
                                echo '<span class="open_title" style="color:'.$soh_comman['soh_alert_box_text_color'].'">'.esc_html($soh_comman['soh_text_hours_open_model']).'</sapn>';
                            }elseif ($Schedule_show['0'] == false) {
                                echo '<span class="close_title" style="color:'.$soh_comman['soh_alert_close_box_text_color'].'">'.esc_html($soh_comman['soh_text_hours_close_model']).'</span>';
                            }
                            ?>
                        </div>
                        <div class="soh_modal_icon_middle soh_modal_icon_circle <?php echo $cus_class;?>" style="font-size: 45px; ">
                            <?php 
                                echo $ocwqv_qscfw_icon['clock_icon_1'];
                            ?>
                        </div>
                        <i class="soh_modal_close_icon soh_icon soh_icon_close"><img src="<?php echo SOH_PLUGIN_DIR;?>/images/Close.png"></i>
                    </div>
                    <?php
                    $close_message = $this->Schedule_show();
                    if ($close_message['0'] == false ) {
                        ?>
                        <div class="store_close_message"  style="color: <?php echo $soh_comman['soh_alert_close_box_text_color'];?>">
                            <?php echo $soh_comman['soh_text_popup_body_close'];?>
                        </div>
                        <?php
                    }
                    ?>
                    <div id="soh_modal_content" style="background-color: <?php echo esc_html($soh_comman['soh_alert_box_background_color']);?>">
                        <h3 class="soh_modal_schedule_header" style="color: <?php echo $soh_comman['soh_alert_box_schedule_text_color'];?>;"><?php echo esc_html($soh_comman['soh_text_schedule_header']);?></h3>
                        <div class="soh_modal_schedule" style="min-height: 260px; font-size: <?php echo esc_html($soh_comman['soh_alert_box_font_size']).'px';?>; color: <?php echo $soh_comman['soh_alert_box_schedule_text_color'];?>;box-shadow: 0px 0px 10px 0px <?php echo esc_html($soh_comman['soh_alert_box_color']);?>;">
                            <div class="soh_modal_day"><?php if(!empty($soh_comman['soh_monday_text'])){echo $soh_comman['soh_monday_text'];}else{echo "Monday";}?></div>
                            <div>
                            <?php
                                $soh_opening_time_monday = get_option('soh_opening_time_monday',true);
                                $soh_closing_time_monday = get_option('soh_closing_time_monday',true);
                                if ($soh_comman['soh_period_monday'] == 'Monday' && $soh_comman['soh_time_monday_options'] == 'monday_time_period' && isset($soh_opening_time_monday['0'])  && $soh_opening_time_monday['0'] != '') {
                                    foreach ($soh_opening_time_monday as $key => $value) {
                                        ?>
                                        <div>
                                        <?php
                                        echo date("h:i A", strtotime($soh_opening_time_monday[$key])).' - '.date("h:i A", strtotime($soh_closing_time_monday[$key]));
                                        ?>
                                        </div>
                                        <?php
                                    }
                                }elseif ($soh_comman['soh_period_monday'] == 'Monday' && $soh_comman['soh_time_monday_options'] == 'monday_time_period'){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }elseif($soh_comman['soh_period_monday'] == 'Monday' && $soh_comman['soh_time_monday_options'] == 'monday_full_day'){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }else{
                                    echo esc_html($soh_comman['soh_text_holiday_schedule']);
                                }
                            ?>
                            </div>
                            <div class="soh_modal_day"><?php if(!empty($soh_comman['soh_tuesday_text'])){echo $soh_comman['soh_tuesday_text'];}else{echo "Tuesday";}?></div>
                            <div>
                                <?php
                                $soh_opening_time_tuesday = get_option('soh_opening_time_tuesday',true);
                                $soh_closing_time_tuesday = get_option('soh_closing_time_tuesday',true);
                                if ($soh_comman['soh_period_tuesday'] == 'Tuesday' && $soh_comman['soh_time_tuesday_options'] == 'tuesday_time_period' && isset($soh_opening_time_tuesday['0'])  && $soh_opening_time_tuesday['0'] != '') {
                                    foreach ($soh_opening_time_tuesday as $key => $value) {
                                        ?>
                                        <div>
                                        <?php
                                        echo date("h:i A", strtotime($soh_opening_time_tuesday[$key])).' - '.date("h:i A", strtotime($soh_closing_time_tuesday[$key]));
                                        ?>
                                        </div>
                                        <?php
                                    }
                                }elseif ($soh_comman['soh_period_tuesday'] == 'Tuesday' && $soh_comman['soh_time_tuesday_options'] == 'tuesday_time_period'){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }elseif ($soh_comman['soh_period_tuesday'] == 'Tuesday' && $soh_comman['soh_time_tuesday_options'] == 'tuesday_full_day'){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }else{
                                    echo esc_html($soh_comman['soh_text_holiday_schedule']);
                                }
                                ?>
                            </div>
                            <div class="soh_modal_day"><?php if(!empty($soh_comman['soh_wednesday_text'])){echo $soh_comman['soh_wednesday_text'];}else{echo "Wednesday";}?></div>
                            <div>
                                <?php
                                $soh_opening_time_wednesday = get_option('soh_opening_time_wednesday',true);
                                $soh_closing_time_wednesday = get_option('soh_closing_time_wednesday',true);
                                if ($soh_comman['soh_period_wednesday'] == 'Wednesday' && $soh_comman['soh_time_wednesday_options'] == 'wednesday_time_period' && isset($soh_opening_time_wednesday['0'])  && $soh_opening_time_wednesday['0'] != '') {
                                    foreach ($soh_opening_time_wednesday as $key => $value) {
                                        ?>
                                        <div>
                                        <?php
                                        echo date("h:i A", strtotime($soh_opening_time_wednesday[$key])).' - '.date("h:i A", strtotime($soh_closing_time_wednesday[$key]));
                                        ?>
                                        </div>
                                        <?php
                                    }
                                }elseif ($soh_comman['soh_period_wednesday'] == 'Wednesday' && $soh_comman['soh_time_wednesday_options'] == 'wednesday_time_period'){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }elseif ($soh_comman['soh_period_wednesday'] == 'Wednesday' && $soh_comman['soh_time_wednesday_options'] == 'wednesday_full_day'){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }else{
                                    echo esc_html($soh_comman['soh_text_holiday_schedule']);
                                }
                                ?>
                            </div>
                            <div class="soh_modal_day"><?php if(!empty($soh_comman['soh_thursday_text'])){echo $soh_comman['soh_thursday_text'];}else{echo "Thursday";}?></div>
                            <div>
                                <?php
                                $soh_opening_time_thursday = get_option('soh_opening_time_thursday',true);
                                $soh_closing_time_thursday = get_option('soh_closing_time_thursday',true);
                                if ($soh_comman['soh_period_thursday'] == 'Thursday' && $soh_comman['soh_time_thursday_options'] == 'thursday_time_period' && isset($soh_opening_time_thursday['0'])  && $soh_opening_time_thursday['0'] != '') {
                                    foreach ($soh_opening_time_thursday as $key => $value) {
                                        ?>
                                        <div>
                                        <?php
                                        echo date("h:i A", strtotime($soh_opening_time_thursday[$key])).' - '.date("h:i A", strtotime($soh_closing_time_thursday[$key]));
                                        ?>
                                        </div>
                                        <?php
                                    }
                                }elseif ($soh_comman['soh_period_thursday'] == 'Thursday' && $soh_comman['soh_time_thursday_options'] == 'thursday_time_period'){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }elseif($soh_comman['soh_period_thursday'] == 'Thursday' && $soh_comman['soh_time_thursday_options'] == 'thursday_full_day'){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }else{
                                    echo esc_html($soh_comman['soh_text_holiday_schedule']);
                                }
                                ?>
                            </div>
                            <div class="soh_modal_day"><?php if(!empty($soh_comman['soh_friday_text'])){echo $soh_comman['soh_friday_text'];}else{echo "Friday";}?></div>
                            <div>
                                <?php
                                $soh_opening_time_friday = get_option('soh_opening_time_friday',true);
                                $soh_closing_time_friday = get_option('soh_closing_time_friday',true);
                                if ($soh_comman['soh_period_friday'] == 'Friday' && $soh_comman['soh_time_friday_options'] == 'friday_time_period' && isset($soh_opening_time_friday['0'])  && $soh_opening_time_friday['0'] != '') {
                                    foreach ($soh_opening_time_friday as $key => $value) {
                                        ?>
                                        <div>
                                        <?php
                                        echo date("h:i A", strtotime($soh_opening_time_friday[$key])).' - '.date("h:i A", strtotime($soh_closing_time_friday[$key]));
                                        ?>
                                        </div>
                                        <?php
                                    }
                                }elseif ($soh_comman['soh_period_friday'] == 'Friday' && $soh_comman['soh_time_friday_options'] == 'friday_time_period'){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }elseif($soh_comman['soh_period_friday'] == 'Friday' && $soh_comman['soh_time_friday_options'] == 'friday_full_day'){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }else{
                                    echo esc_html($soh_comman['soh_text_holiday_schedule']);
                                }
                                ?>
                            </div>
                            <div class="soh_modal_day"><?php if(!empty($soh_comman['soh_saturday_text'])){echo $soh_comman['soh_saturday_text'];}else{echo "Saturday";}?></div>
                            <div>
                                <?php
                                $soh_opening_time_saturday = get_option('soh_opening_time_saturday',true);
                                $soh_closing_time_saturday = get_option('soh_closing_time_saturday',true);
                                if ($soh_comman['soh_period_saturday'] == 'Saturday' && $soh_comman['soh_time_saturday_options'] == 'saturday_time_period' && isset($soh_opening_time_saturday['0'])  && $soh_opening_time_saturday['0'] != '') {
                                    $count = 0;
                                    foreach ($soh_opening_time_saturday as $key => $value) {
                                        ?>
                                        <div>
                                        <?php
                                        echo date("h:i A", strtotime($soh_opening_time_saturday[$key])).' - '.date("h:i A", strtotime($soh_closing_time_saturday[$key]));
                                        ?>
                                        </div>
                                        <?php
                                        $count ++;
                                    }
                                }elseif ($soh_comman['soh_period_saturday'] == 'Saturday' && $soh_comman['soh_time_saturday_options'] == 'saturday_time_period'){
                                    echo esc_html($soh_comman['soh_text_open_widget']);                            
                                }elseif ($soh_comman['soh_period_saturday'] == 'Saturday' && $soh_comman['soh_time_saturday_options'] == 'saturday_full_day'){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }else{
                                    echo esc_html($soh_comman['soh_text_holiday_schedule']);
                                }
                                ?>
                            </div>
                            <div class="soh_modal_day"><?php if(!empty($soh_comman['soh_sunday_text'])){echo $soh_comman['soh_sunday_text'];}else{echo "Sunday";}?></div>
                            <div>
                                <?php
                                $soh_opening_time_sunday = get_option('soh_opening_time_sunday',true);
                                $soh_closing_time_sunday = get_option('soh_closing_time_sunday',true);
                                if ($soh_comman['soh_period_sunday'] == 'Sunday' && $soh_comman['soh_time_sunday_options'] == 'sunday_time_period' && isset($soh_opening_time_sunday['0'])  && $soh_opening_time_sunday['0'] != '') {
                                    foreach ($soh_opening_time_sunday as $key => $value) {
                                        ?>
                                        <div>
                                        <?php
                                        echo date("h:i A", strtotime($soh_opening_time_sunday[$key])).' - '.date("h:i A", strtotime($soh_closing_time_sunday[$key]));
                                        ?>
                                        </div>
                                        <?php
                                    }
                                }elseif ($soh_comman['soh_period_sunday'] == 'Sunday' && $soh_comman['soh_time_sunday_options'] == 'sunday_time_period'){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }elseif ($soh_comman['soh_period_sunday'] == 'Sunday' && $soh_comman['soh_time_sunday_options'] == 'sunday_full_day'){
                                    echo esc_html($soh_comman['soh_text_open_widget']);
                                }else{
                                    echo esc_html($soh_comman['soh_text_holiday_schedule']);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="soh_alert_notification_popup_widget" style="background-color: <?php echo esc_html($soh_comman['soh_widget_background_color']);?>;">
                <?php $close_message = $this->Schedule_show();
                    if ($close_message['0'] == true) {
                        $class_cus = 'open';
                    }else{
                        $class_cus = 'close';
                    }
                ?>
                <div class="soh_alert_notification_popup_widget_content">
                    <div class="soh_alert_notification_popup_widget_top_part">
                        <i class="soh_clock_icon soh_icon soh_icon_time <?php echo $class_cus;?>">
                            <?php echo $ocwqv_qscfw_icon['clock_icon_1'];?>
                        </i>
                        <span style="font-size: <?php echo esc_html($soh_comman['soh_widget_countdown_font_size']).'px';?>;">
                            <?php
                            if ($close_message['0'] == true) {
                                echo '<span class="open_title" style="color:'.$soh_comman['soh_widget_icon_color'].'">'.esc_html($soh_comman['soh_text_open_widget']).'</span>';
                            }elseif ($close_message['0'] == false) {
                                echo '<span class="close_title" style="color:'.$soh_comman['soh_widget_close_text_icon_color'].'">'.esc_html($soh_comman['soh_text_close_widget']).'</span>';
                            }
                            ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php
        }

        function soh_wc_shop_checkout_disabled() {

            wc_print_notice( 'Our Online Shop is Closed :) Please Come Back After Some Time!', 'error');
            exit();

        }

        function soh_add_new_css() {
            global $soh_comman;
            ?>
                <style>
                    .soh_modal_icon_middle.soh_modal_icon_circle.open svg {
                        fill: <?php echo $soh_comman['soh_clock_logo_color'];?>;
                    }
                    .soh_modal_icon_middle.soh_modal_icon_circle.close svg {
                        fill: <?php echo $soh_comman['soh_alert_close_box_text_color'];?>;
                    }

                    i.soh_clock_icon.open svg {
                        fill: <?php echo $soh_comman['soh_widget_icon_color'];?>;
                    }
                    i.soh_clock_icon.close svg {
                        fill: <?php echo $soh_comman['soh_widget_close_text_icon_color'];?>;
                    }
                </style>
            <?php
        }


        function init() {
            global $soh_comman;
            if ($soh_comman['soh_store_hours_manager'] == 'yes') {

                if ($soh_comman['soh_notification_management_mode'] == 'yes') {
                    $user = wp_get_current_user();
                    $user_roles = get_option('wg_roles_select2');
                    if(!empty($user_roles)){  
                        if (array_intersect($user_roles, $user->roles )) {
                            add_action( 'wp_footer', array($this,'soh_alert_notification'), 100 );
                        }
                    }
                }else{
                    add_action( 'wp_footer', array($this,'soh_alert_notification'), 100 );
                }

                $Schedule_show = $this->Schedule_show();
                            
                if ($Schedule_show['0'] == false) {
                    add_action( 'woocommerce_before_checkout_form', array($this,'soh_wc_shop_checkout_disabled'), 5 );
                    remove_action( 'woocommerce_proceed_to_checkout','woocommerce_button_proceed_to_checkout', 20);
                }
                add_action('wp_head', array($this,'soh_add_new_css'));
            }
        }       

        public static function SOH_front_instance() {
            if (!isset(self::$SOH_front_instance)) {
                self::$SOH_front_instance = new self();
                self::$SOH_front_instance->init();
            }
            return self::$SOH_front_instance;
        }
    }
    SOH_frontend_menu::SOH_front_instance();
}

?>