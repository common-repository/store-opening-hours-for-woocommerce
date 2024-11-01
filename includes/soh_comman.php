<?php
if (!defined('ABSPATH'))
  exit;

if (!class_exists('SOH_comman')) {

    class SOH_comman {

        protected static $instance;

        public static function instance() {
            if (!isset(self::$instance)) {
                self::$instance = new self();
                self::$instance->init();
            }
             return self::$instance;
        }
         function init() {
            global $soh_comman;
            $optionget = array(
                'soh_store_hours_manager' => 'yes',
                'soh_alert_box_font_size' => '16',
                'soh_alert_box_color' => '#3d97ff',
                'soh_alert_box_text_color' => '#ffffff',
                'soh_alert_close_box_text_color' => '#ff0000',
                'soh_alert_box_background_color' => '#000cff',
                'soh_alert_box_schedule_text_color' => '#ffffff',
                'soh_clock_logo_color' => '#ffffff',
                'soh_notification_management_mode' => '',
                'soh_text_open_widget' => 'Open',
                'soh_text_close_widget' => 'Close',
                'soh_text_hours_open_model' => 'We are open!',
                'soh_text_hours_close_model' => 'Sorry, today shop is close!',
                'soh_text_schedule_header' => 'Business hours',
                'soh_text_holiday_schedule' => 'Holiday',
                'soh_text_popup_body_close' => 'This time store is closed. we will tacking orders after some time.',
                'soh_widget_countdown_font_size' => '16',
                'soh_widget_icon_color' => '#ffffff',
                'soh_widget_close_text_icon_color' => '#ff0000',
                'soh_widget_background_color' => '#2468f2',
                'soh_period_monday' => 'Monday',
                'soh_period_tuesday' => 'Tuesday',
                'soh_period_wednesday' => 'Wednesday',
                'soh_period_thursday' => 'Thursday',
                'soh_period_friday' => 'Friday',
                'soh_period_saturday' => 'Saturday',
                'soh_period_sunday' => '',
                'soh_time_monday_options' => 'monday_full_day',
                'soh_time_tuesday_options' => 'tuesday_full_day',
                'soh_time_wednesday_options' => 'wednesday_full_day',
                'soh_time_thursday_options' => 'thursday_full_day',
                'soh_time_friday_options' => 'friday_full_day',
                'soh_time_saturday_options' => 'saturday_full_day',
                'soh_time_sunday_options' => 'sunday_full_day',
                'soh_monday_text' => 'Monday',
                'soh_tuesday_text' => 'Tuesday',
                'soh_wednesday_text' => 'Wednesday',
                'soh_thursday_text' => 'Thursday',
                'soh_friday_text' => 'Friday',
                'soh_saturday_text' => 'Saturday',
                'soh_sunday_text' => 'Sunday',
            );
           
            foreach ($optionget as $key_optionget => $value_optionget) {
               $soh_comman[$key_optionget] = get_option( $key_optionget,$value_optionget );
            }
        }
    }

    SOH_comman::instance();
}
?>