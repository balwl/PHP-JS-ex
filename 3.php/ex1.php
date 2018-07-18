<?php

$deposit = $argv[1];
$duration = $argv[2];
$percent =  $argv[3];

echo calculate_deposit_after($deposit, $duration, $percent);

function calculate_deposit_after($deposit, $duration, $percent) {
    return $deposit + ($deposit * $percent * $duration)/(365 * 100);
}