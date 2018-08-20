<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 20.08.2018
 * Time: 13:28
 */
$string = '123456';
$sumOfFirstPart = $string[0] + $string[1] + $string[2];
$sumOfSecondPart = $string[3] + $string[4] + $string[5];
if ($sumOfFirstPart == $sumOfSecondPart) {
    echo 'Да';
} else {
    echo 'Нет';
}