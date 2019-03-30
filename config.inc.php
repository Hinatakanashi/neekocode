<?php
$sys_start_time = microtime(true);
# App Global
$GLOBALS['App'] = [
  'debug' => true ,
	'install_dir' => ''
];
Define( '__ROOTDIR__', "{$_SERVER['DOCUMENT_ROOT']}{$GLOBALS['App']['install_dir']}" );
require __ROOTDIR__.'/Includes/db.php';
require __ROOTDIR__.'/Includes/main.php';
DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'wb_db';
DB::$host = 'localhost';
DB::$port = '3306';
App::$domain = 'ani4vn.com';
App::$port = 80 ;
if( $GLOBALS['App']['debug'] ) error_reporting(1) ; else error_reporting(0) ;
define('DB_PREKEY','wb_');
$tbl_key = DB_PREKEY;
DB::$error_handler = 'error_handle';
function error_handle($params) {
  echo "Error: " . $params['error'] . "<br>\n";
  echo "Query: " . $params['query'] . "<br>\n";
  die;
}
