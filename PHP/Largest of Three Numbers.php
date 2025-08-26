<?php
$a = 25;
$b = 50;
$c = 15;

if ($a >= $b && $a >= $c) {
    echo "Largest = $a";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest = $b";
} else {
    echo "Largest = $c";
}
?>
