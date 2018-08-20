<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 19.08.2018
 * Time: 22:00
 */
$string = '12345';
$firstSymbol = substr($string, 0, 1);
if (($firstSymbol == 1) || ($firstSymbol == 2) || ($firstSymbol == 3)) {
    echo "Да" . PHP_EOL;
} else {
    echo "Нет";
}

