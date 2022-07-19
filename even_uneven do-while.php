<?php
$i = -1;
$cont = -1;
do {
    $i++;
    $numeros[$i] = $i;
} while ($i <= 100);

for ($n = -1; $n <= 100; $n++) {
    if ($n % 2 == 0) {
        echo $numeros[$n].PHP_EOL;
    }   
}
?>