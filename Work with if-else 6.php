<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 20.08.2018
 * Time: 13:10
 */
$year = mt_rand(1000, 2018);
if ($year%4 == 0 && $year % 100 != 0 || $year % 400 == 0) {
    echo 'Высокосный';
} else
{
    echo 'Не высокосный';}
