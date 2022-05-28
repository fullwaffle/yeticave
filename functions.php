<?php
function format_price($price) {
    $price = ceil($price);
    if ($price >= 1000) {
        $price = number_format($price, 0, ',', ' ');
    }

    return $price . " ₽";
}

function get_dt_range($expiration) {
    date_default_timezone_set('Europe/Moscow');
    $currentDate = strtotime(date('Y-m-d H:i'));
    $expiration = strtotime($expiration);
    $diff = $expiration - $currentDate;
    $hours = floor($diff/3600);
    $minutes = $diff / 60 % 60;

    $res[] = $hours;
    $res[] = $minutes;

    return $res;
}
