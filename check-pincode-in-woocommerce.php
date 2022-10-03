<?php
/**
* Plugin Name: Check Pincode For Woocommerce
* Description: This plugin allows Check Pincode in Woocommerce.
* Version: 1.0
* Copyright: 2022
* Text Domain:check-pincode-in-woocommerce
* Domain Path: /languages 
*/


define('CPIW_PLUGIN_FILE', __FILE__);

/* define  plugin diretorypath  name   */
define('CPIW_PLUGIN_DIR',plugins_url('', __FILE__));

/* Backend file include*/
include_once('main/backend/cpiw-backend.php');
include_once('main/backend/cpiw-postcode.php');
include_once('main/backend/cpiw-postcode-list.php');
include_once('main/backend/cpiw-postcode-import.php');
include_once('main/backend/cpiw-initial.php');
include_once('main/backend/cpiw-comman.php');

/* Front file include*/
include_once('main/front/cpiw-front.php');
include_once('main/front/cpiw-check-pincode.php');
include_once('main/front/cpiw-pincode-cart.php');
include_once('main/front/cpiw-pincode-checkout.php');
include_once('main/front/cpiw-pincode-popup.php');

/* Resources file include*/
include_once('main/resources/cpiw-installation-require.php');
include_once('main/resources/cpiw-language.php');
include_once('main/resources/cpiw-load-js-css.php');
include_once('main/resources/cpiw-table-create.php');
?>