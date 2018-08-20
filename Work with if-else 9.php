<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 20.08.2018
 * Time: 13:31
 */
$clockHand = mt_rand(0, 360);
$time = (int)($clockHand / 30);
if ($clockHand / 30 != 0) {
    echo "$time";
}
