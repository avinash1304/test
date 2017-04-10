<?php 
error_reporting(0);

ob_start();

session_start();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined('BASE_URL') ? null : define('BASE_URL','http:'.DS.DS.'hrm.einfachsolutions.com'.DS.'demo'.DS);

defined('CPANEL_URL') ? null : define('CPANEL_URL','http:'.DS.DS.'hrm.einfachsolutions.com'.DS.'demo'.DS.'cpanel'.DS);


defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates".DS."front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates".DS."back");


// Must REMEMBER resources Directory must have permisions 755 for all user while uploading it Online...

defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", "../resources/uploads/");


defined("DB_HOST") ? null : define("DB_HOST", "localhost");

defined("DB_USER") ? null : define("DB_USER","root");


defined("DB_PASS") ? null : define("DB_PASS", "");

defined("DB_NAME") ? null : define("DB_NAME",  "einfach_solutions");



$conn = new  mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($conn->connect_errno > 0)
die('DATABASE ERROR: '.$conn->error);


 ?>