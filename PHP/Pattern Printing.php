<?php
$rows = 3;    
$ch = 'A';    

for ($i = 1; $i <= $rows; $i++) {

    // 1) Stars
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }

    echo "   "; 

    // 2) Numbers
    for ($k = $rows; $k >= $i; $k--) {
        echo ($rows - $k + 1);
    }

    echo "   "; 

    // 3) Letters
    for ($l = 1; $l <= $i; $l++) {
        echo $ch . " ";
        $ch++;
    }

    echo "<br>";
}
?>
