<?php
$numbers = array(5, 7, 12, 30, 90);
$search = 30; 
$found = false;

foreach ($numbers as $num) {
    if ($num == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search found in array";
} else {
    echo "$search not found in array";
}
?>
