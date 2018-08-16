<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 16.08.2018
 * Time: 16:33
 */
define ('EMAIL', 'ludchen2009@gmail.com'); //Valid name
$a = strpos(EMAIL, '@');
$username = substr(EMAIL, 0, $a);
$domain = substr(EMAIL, $a + 1);
echo $username . PHP_EOL;
echo $domain . PHP_EOL;
?>


