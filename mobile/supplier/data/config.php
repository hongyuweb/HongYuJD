<?php
// database host
$db_host   = "localhost:3306";

// database name
$db_name   = "xjd42";

// database username
$db_user   = "xjd42";

// database password
$db_pass   = "xjd42";

// table prefix
$prefix    = "ecs_";

$timezone    = "PRC";

$cookie_path    = "/";

$cookie_domain    = "";

$session = "1440";

define('EC_CHARSET','utf-8');

if(!defined('ADMIN_PATH'))
{
define('ADMIN_PATH','admin');
}

define('AUTH_KEY', 'this is a key');

define('OLD_AUTH_KEY', '');

define('API_TIME', '2015-07-17 08:49:45');

?>