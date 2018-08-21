<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 22.08.2018
 * Time: 0:39
 */
$string = "bar_next_text";

function transferToCamlCase($string, $FirstChapter = false)
{
    $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));
    if (!$FirstChapter) {
        $str[0] = strtolower($str[0]);
    }
    return $str;
}
echo transferToCamlCase($string);