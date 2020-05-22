<?php
// Turn on/off error reporting
error_reporting(-1);

// Start session
session_start();

define('ROOT_PATH', '..' . __DIR__ . '/'); // path to 'my-page-3/'
define('SRC_PATH',  __DIR__ . '/'); // path to 'my-page-3/src/'

// Include functions and classes
require('app/common_functions.php');

require('app/user_DbHandler.php');
$userDbHandler = new userDbHandlerClass();

require('app/product_DbHandler.php');
$productDbHandler = new productDbHandlerClass();