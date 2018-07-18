<?php

$hours = $argv[1];
$minutes = $argv[2];

function countDegree($hours, $minutes) {	
    $hoursDegree = ($hours + $minutes/60)/12 * 360;
    $minuteDegree = $minutes/60 * 360;
	$differenceDegree = $hoursDegree - $minuteDegree;
	if ($differenceDegree >= 360) {
		$differenceDegree -= 360;
	}
    return $differenceDegree;
}

echo countDegree($hours, $minutes);