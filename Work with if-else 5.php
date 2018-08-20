<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 16.08.2018
 * Time: 20:46
 */
$month = 5;
switch ($month) {
    case 12:
    case 1:
    case 2:
        echo "Winter";
        break;
    case 3:
    case 4:
    case 5:
        echo "Spring";
        break;
    case 6:
    case 7:
    case 8:
        echo "Summer";
        break;
    case 9:
        echo "Autumn";
        break;
    default:
        echo "ghh";
        break;


}