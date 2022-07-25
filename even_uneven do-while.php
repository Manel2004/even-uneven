<?php
$i = 0;
$cont = 0;
do {
    $numeros[] = $i;
    $i++;
} while ($i <= 100);

for ($n = 0; $n <= 100; $n++) {
    if ($n % 2 == 0) {
        echo $numeros[$n].PHP_EOL;
    }   
}
?>
