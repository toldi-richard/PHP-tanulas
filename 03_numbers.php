<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo 'Arithmetic operátor'.'<br>';
echo 'What ? fura'.($a + $b) * $c.'<br>';

echo $a - $b.'<br>';
echo $a * $b.'<br>';
echo $a / $b.'<br>';
echo 'Maradékos osztás:'. $a % $b.'<br>';



// Assignment with math operators
echo 'Assignment operátor'.'<br>';
$a = $a + $b;
echo $a.'<br>';

// működik + - / * % -kal is, mindegyikkel megy
$a += $b;
echo $a.'<br>';

// Increment operator
echo 'Increment operátor'.'<br>';
echo $a++.'<br>';
echo $a.'<br>';
echo ++$a.'<br>';


// Decrement operator
echo 'Decrement operátor'.'<br>';
echo $a--.'<br>';
echo $a.'<br>';
echo --$a.'<br>';


// Number checking functions
echo 'Checking types, check functions'.'<br>';
echo is_float($c).'<br>';
echo is_double($c).'<br>';
echo is_int($a).'<br>';
echo is_numeric($a).'<br>';
echo 'Ez:'. is_numeric("3.45").'<br>';
echo 'Ez +g:'. is_numeric("3g.45").'<br>';

// Conversion
echo 'Conversion'.'<br>';

$strNumber = '12.34';
$number = (float)$strNumber;
var_dump($number);
echo '<br>';
$number = (int)$strNumber;
var_dump($number);
echo '<br>';
$number = intval($strNumber); // vagy floatval
var_dump($number);

echo '<br>';echo '<br>';
// Number functions
echo 'Conversion'.'<br>';

echo "abs(-15)" . abs(-15) . '<br>';
echo "pow(2, 3)" . pow(2, 3) . '<br>';
echo "sqrt(16)" . sqrt(16) . '<br>';
echo "max(2, 3, 9)" . max(2, 9, 3) . '<br>';
echo "min(2, 3, 1)" . min(2, 3, 1) . '<br>';
echo "round(2.4)" . round(2.4) . '<br>';
echo "round(2.5)" . round(2.5) . '<br>';
echo "floor(2.6)" . floor(2.6) . '<br>';
echo "ceil(2.4)" . ceil(2.4) . '<br>';

echo '<br>';echo '<br>';
// Formatting numbers
echo 'Formatting'.'<br>';

$number = 123456789.12212;
echo number_format($number, 2, '.', ' ');

echo '<br>';echo '<br>';
echo 'Random szám'.'<br>';
echo rand(1, 200);

echo '<br>';echo '<br>';
echo 'Szám-e'.'<br>';


$number = 12;
echo 'Szám1: '.is_nan($number).'<br>'; 
echo 'Szám2: '.is_numeric($number).'<br>'; 

$numeric_string = '42';
echo 'Szám-e3:'.ctype_digit($numeric_string).'<br>'; // megnézi hogy a stringben szám van-e true-tad az az 1-t
echo 'Szám-e4:'.ctype_digit($number).'<br>'; // hamis lesz mert számot vizsgálunk és nem stringet
echo 'Szám: 5'.is_numeric($numeric_string).'<br>'; 

echo '<br>';echo '<br>';

print_r([1,2,3,4]);

echo '<br>';echo '<br>';

echo 'Számok összeadása:' . '<br>';
echo '5'+'5'.'<br>';
echo 5+5 . '<br>';

$x = '5'+'5';
$y = 5+5;
$z = 5 . 5;
$c = 5.5;

echo $x . '<br>';
echo $y . '<br>';
echo $z . '<br>';
echo $c . '<br>';

// https://www.php.net/manual/en/ref.math.php
