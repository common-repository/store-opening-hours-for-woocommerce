<?php 
/**
* Plugin Name: Store Opening Hours For WooCommerce
* Description: This plugin allows create Store Opening Hours plugin.
* Version: 1.0
* Copyright: 2020
* Text Domain: store-opening-hours-for-woocommerce
* Domain Path: /languages 
*/


if (!defined('ABSPATH')) {
	exit();
}
if (!defined('SOH_PLUGIN_NAME')) {
  define('SOH_PLUGIN_NAME', 'Store Opening Hours For WooCommerce');
}
if (!defined('SOH_PLUGIN_VERSION')) {
  define('SOH_PLUGIN_VERSION', '2.0.0');
}
if (!defined('SOH_PLUGIN_FILE')) {
  define('SOH_PLUGIN_FILE', __FILE__);
}
if (!defined('SOH_PLUGIN_DIR')) {
  define('SOH_PLUGIN_DIR',plugins_url('', __FILE__));
}
if (!defined('SOH_BASE_NAME')) {
    define('SOH_BASE_NAME', plugin_basename(SOH_PLUGIN_FILE));
}
if (!defined('SOH_DOMAIN')) {
    define('SOH_DOMAIN', 'store-opening-hours-for-woocommerce');
}

if (!class_exists('SOH')) {

	class SOH {

  	protected static $SOH_instance;

  	public static function SOH_instance() {
    	if (!isset(self::$SOH_instance)) {
      	self::$SOH_instance = new self();
      	self::$SOH_instance->init();
      	self::$SOH_instance->includes();
    	}
    	return self::$SOH_instance;
    }

    function __construct() {
    	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    	//check plugin activted or not
    	add_action('admin_init', array($this, 'SOH_check_plugin_state'));
  	}

  	function init() {	   
  		add_action( 'admin_notices', array($this, 'SOH_show_notice'));   	
    	add_action( 'admin_enqueue_scripts', array($this, 'SOH_load_admin_script_style'));
    	add_action( 'wp_enqueue_scripts',  array($this, 'SOH_load_script_style'));
  		add_filter( 'plugin_row_meta', array( $this, 'SOH_plugin_row_meta' ), 10, 2 );

    }		

    //Load all includes files
    function includes() {
      	include_once('includes/soh_comman.php');
        include_once('includes/soh_svg.php');
        include_once('includes/soh_backend.php');
        include_once('includes/soh_kit.php');
      	include_once('includes/soh_frontend.php');
    }

    function SOH_load_admin_script_style() {
      global $soh_comman;
  	  wp_enqueue_style( 'soh-backend-css', SOH_PLUGIN_DIR.'/assets/css/soh_backend_css.css', false, '1.0' );
      wp_enqueue_script( 'soh-backend-js', SOH_PLUGIN_DIR.'/assets/js/soh_backend_js.js', array( 'jquery', 'select2'),'1.0', true );
      wp_enqueue_style( 'woocommerce_admin_styles-css', WP_PLUGIN_URL. '/woocommerce/assets/css/admin.css',false,'1.0',"all");
      wp_enqueue_script( 'wp-color-picker-alpha', SOH_PLUGIN_DIR . '/assets/js/wp-color-picker-alpha.js', array( 'wp-color-picker' ), '1.0.0', true );
      wp_enqueue_style( 'wp-color-picker' );
      wp_enqueue_media();
      wp_upload_dir();

      wp_localize_script( 'soh-backend-js', 'SOH_data', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'soh_time_monday_options' => $soh_comman['soh_time_monday_options'],
        'soh_time_tuesday_options' => $soh_comman['soh_time_tuesday_options'],
        'soh_time_wednesday_options' => $soh_comman['soh_time_wednesday_options'],
        'soh_time_thursday_options' => $soh_comman['soh_time_thursday_options'],
        'soh_time_friday_options' => $soh_comman['soh_time_friday_options'],
        'soh_time_saturday_options' => $soh_comman['soh_time_saturday_options'],
        'soh_time_sunday_options' => $soh_comman['soh_time_sunday_options'],
      ) );
    }


    function SOH_load_script_style() {

    	wp_enqueue_style( 'soh-frontend-css', SOH_PLUGIN_DIR.'/assets/css/soh_frontend_css.css', false, '1.0' );
      wp_enqueue_script( 'soh-frontend-js', SOH_PLUGIN_DIR . '/assets/js/soh_frontend_js.js', array( 'jquery' ), '1.0', true);
    }

    function SOH_show_notice() {
    	if ( get_transient( get_current_user_id() . 'wfcerror' ) ) {

    		deactivate_plugins( plugin_basename( __FILE__ ) );

    		delete_transient( get_current_user_id() . 'wfcerror' );

    		echo '<div class="error"><p> This plugin is deactivated because it require <a href="plugin-install.php?tab=search&s=woocommerce">WooCommerce</a> plugin installed and activated.</p></div>';
    	}
  	}

    function SOH_plugin_row_meta( $links, $file ) {
      if ( SOH_BASE_NAME === $file ) {
        $row_meta = array(
            'rating'    =>  '<a href="https://xthemeshop.com/store-opening-hours-for-woocommerce/" target="_blank">Documentation</a> | <a href="https://xthemeshop.com/contact/" target="_blank">Support</a> | <a href="https://wordpress.org/support/plugin/store-opening-hours-for-woocommerce/reviews/?filter=5" target="_blank"><img src="'.SOH_PLUGIN_DIR.'/images/star.png" class="soh_rating_div"></a>'
        );
        return array_merge( $links, $row_meta );
      }
      return (array) $links;
    }

    function SOH_check_plugin_state(){
  		if ( ! ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) ) {
    		set_transient( get_current_user_id() . 'wfcerror', 'message' );
  		}
  	}

	}
  	add_action('plugins_loaded', array('SOH', 'SOH_instance'));  	
}


add_action( 'plugins_loaded', 'soh_load_textdomain' );
 
function soh_load_textdomain() {
    load_plugin_textdomain( 'store-opening-hours-for-woocommerce', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}

function soh_load_my_own_textdomain( $mofile, $domain ) {
    if ( 'store-opening-hours-for-woocommerce' === $domain && false !== strpos( $mofile, WP_LANG_DIR . '/plugins/' ) ) {
      $locale = apply_filters( 'plugin_locale', determine_locale(), $domain );
      $mofile = WP_PLUGIN_DIR . '/' . dirname( plugin_basename( __FILE__ ) ) . '/languages/' . $domain . '-' . $locale . '.mo';
    }
    return $mofile;
}
add_filter( 'load_textdomain_mofile', 'soh_load_my_own_textdomain', 10, 2 );

?>