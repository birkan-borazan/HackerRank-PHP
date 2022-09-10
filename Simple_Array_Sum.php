<?php
function simpleArraySum($ar) {
    $array = $ar;
    $total = 0;
    foreach ($array as $value)
    {
        $total += $value;
    }
    return $total;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$ar_count = intval(trim(fgets(STDIN)));
$ar_temp = rtrim(fgets(STDIN));
$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));
$result = simpleArraySum($ar);
fwrite($fptr, $result . "\n");
fclose($fptr);
?>