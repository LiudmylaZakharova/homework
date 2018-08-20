<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 19.08.2018
 * Time: 22:36
 */
$num = mt_rand(1, 30);
if ($num % 5 == 0) {
    echo 'Делится на 5';
} elseif ($num % 3 == 0) {
    echo 'Делится на 3';
} elseif ($num % 5 == 0 && $num % 3 == 0){
    echo 'Делиться на 3';
    echo 'Делиться на 5' . PHP_EOL;
}