<?php
// database host
$db_host   = "localhost:3306";

// database name
$db_name   = "hongyu";

// database username
$db_user   = "hongyu";

// database password
$db_pass   = "hongyu888";

// table prefix
$prefix    = "ecs_";

$timezone    = "PRC";

$cookie_path    = "/";

$cookie_domain    = "";

$session = "1440";

define('EC_CHARSET','utf-8');

/*start  By  QQ:1527200768 */
if(!defined('ADMIN_PATH'));
{
define('ADMIN_PATH','admin');
}
/*start  By  QQ:1527200768 */
if(!defined('ADMIN_PATH_M'));
{
define('ADMIN_PATH_M','admin');
}
define('AUTH_KEY', 'this is a key');

define('OLD_AUTH_KEY', '');

define('API_TIME', '');

?>