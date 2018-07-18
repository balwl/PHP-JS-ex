<?php

$day = $argv[1];
$n_month = $argv[2];

$months = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 
    'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];

if (($n_month === 4 || $n_month === 6 || $n_month === 9 || $n_month === 11) && $day > 30) {
    echo 'Невозможная дата.';
    return;
}
if ($n_month === 2 && $day > 29) {
    echo 'Невозможная дата.';
    return;
}
if ($day > 31 || $day < 1) {
    echo 'Невозможная дата.';
    return;
}

$month_str = $months[$n_month - 1];

echo $day . ' ' . $month_str;