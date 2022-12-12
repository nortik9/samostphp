<pre>
<?php

// Задание 1

$arrRange = range(-50, 50, 8);
print_r($arrRange);

// Задание 2 

echo(implode("**", $arrRange));

// Задание 3

foreach($arrRange as $key => $value) if($key&1) unset($arrRange[$key]);
print_r($arrRange);

// Задание 4

print_r($arrRange);
// Задание 5

$arrRandom = range(-5, 10);
print_r($arrRandom);

// Задание 6

$count = array_count_values($arrRandom);
print_r($count);

// Задание 7

echo (array_sum($arrRandom) . "<br>");

// Задание 8



// Задание 9



// Задание 10



// Задание 11



// Задание 12



// Задание 13



// Задание 14



// Задание 15


?>
</pre>