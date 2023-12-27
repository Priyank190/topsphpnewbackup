
<?php
$a = [1, 2, 3, 4, 5, 6, 6, 5, 4];
$b = [2, 4, 6, 7, 8];

// Convert $a array to unique values
$a = [];
foreach ($a as $value) {
    if (!in_array($value, $a)) {
        $a[] = $value;
    }
}

// Intersect $a and $b arrays
$b = [];
foreach ($a as $valueA) {
    foreach ($b as $valueB) {
        if ($valueA == $valueB) {
            $b[] = $valueA;
            break;
        }
    }
}


echo "Unique values of \$a: [" . implode(", ", $a) . "]\n";
echo "Intersection of \$a and \$b: [" . implode(", ", $b) . "]\n";
?>
