<?php
$n = 10;
$f1 = 0;
$f2 = 1;
echo "Fibonacci Series: ";
for ($i = 0; $i < $n; $i++) {
    echo $f1 . " ";
    $next = $f1 + $f2;
    $f1 = $f2;
    $f2 = $next;
}
?>
