<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 21.08.2018
 * Time: 23:09
 */

function dayOfWeek($day)
{
    $day = array(
        'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
        'Четверг', 'Пятница', 'Суббота'
    );

    echo($day [(date('L'))]);
}
dayOfWeek(3)
?>