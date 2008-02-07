--TEST--
Testing a regular IP. We shouldn't find anything.
--FILE--
<?php
set_include_path(dirname(__FILE__) . '/../' . PATH_SEPARATOR . get_include_path());
require_once 'Services/ProjectHoneyPot.php';
include dirname(__FILE__) . '/../examples/config.php';
$sphp   = Services_ProjectHoneyPot::factory($access_key);
$ip     = '24.132.194.14';
$status = $sphp->query($ip);
var_dump($status);
?>
--EXPECT--
bool(false)
