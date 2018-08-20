<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 16.08.2018
 * Time: 19:40
 */
$a = 1;
$b = 2;
$c = 2;
If (($a == $b)||($b == $c)||($c == $a)) {
    echo($a += 5) . PHP_EOL;
echo($b += 5) . PHP_EOL;
echo($c += 5) . PHP_EOL;
}
