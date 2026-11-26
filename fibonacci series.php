<?php
$a = 0;
$b = 1;
$n = 10;

echo "Fibonacci Series: ";

for ($i = 1; $i <= $n; $i++) {
    echo $a . " ";
    $c = $a + $b;
    $a = $b;
    $b = $c;
}
?>