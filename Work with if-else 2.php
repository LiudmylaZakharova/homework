<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 16.08.2018
 * Time: 21:29
 */

$b = mt_rand(1, 3);
$c = mt_rand(1, 3);
function compareNumbers($b, $c)
{
    if ($b < $c) {
        echo 'more';
    } elseif ($b > $c) {
        echo 'less';
    } else {
        echo 'equal';
    }

    //    if($b>$c);
//    echo 'more';
//     elseif($b<$c);
//        echo 'less';
//    else($b == $c);
//        echo 'equal';
}

compareNumbers($b, $c);



