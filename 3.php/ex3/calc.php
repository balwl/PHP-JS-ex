<?php

$first_num = filter_input(INPUT_GET, 'first', FILTER_VALIDATE_FLOAT);
$second_num = filter_input(INPUT_GET, 'second', FILTER_VALIDATE_FLOAT);
$operation = filter_input(INPUT_GET, 'operation', FILTER_VALIDATE_INT);

if (empty($first_num) || empty($second_num)) {
    die('Необходимо указать оба операнда.');
}

if ($operation < 1 || $operation > 4) {
    die('Необходимо выбрать корректную операцию.');
}

switch ($operation) {
    case 1:
        echo "$first_num + $second_num = " . ($first_num + $second_num);
        break;
    case 2:
        echo "$first_num - $second_num = " . ($first_num - $second_num);
        break;
    case 3:
        echo "$first_num * $second_num = " . ($first_num * $second_num);
        break;
    case 4:
        echo "$first_num / $second_num = " . ($first_num / $second_num);
        break;
}


