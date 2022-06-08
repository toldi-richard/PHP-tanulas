<?php

// Function which prints "Hello I am Zura"

// Function with argument

// Create sum of two functions

// Create function to sum all numbers using ...$nums

// Arrow functions


// Másik videó
// blocks of code you can name and use it anywhere

$y = 12;

function registerUser() {

    global $y; // így látja csak a globális változókat a funkció
    $x = 10; // csak a funkcióban létezik

    echo 'user registered';
}

registerUser();

echo '<br>';echo '<br>';


$emailem = 'rtoldi@gmail.com';

function email($email) // az email egy argumentum, defines a function
{
    echo $email . ' az email amivel regisztrált.';
}

email($emailem); // amit átadok a funkciónak mint argumentum a paraméter, params

echo '<br>';echo '<br>';

// Legtöbbször ha van egy függvényed akkor van egy visszatérési értéked is
function sum($n1, $n2) {
    return $n1 + $n2;
}
echo sum(5, 5);

echo '<br>';

$number = sum(10, 2);
echo $number;


echo '<br>';echo '<br>';
// Legtöbbször ha van egy függvényed akkor van egy visszatérési értéked is
// Default argumentumú funkció, ha nem kap paramétert akkor a beállítottal fog menni
function sum2($n1 = 2, $n2 = 2) {
    return $n1 + $n2;
}
echo sum2(5, 5);

echo '<br>';

$number = sum2(10, 2);
echo $number;

echo '<br>';

echo sum2();

echo '<br>';echo '<br>';
// névtelen funkció
$subtract = function($n1, $n2) {
    return $n1 - $n2;
};
echo $subtract(10, 5);

echo '<br>';echo '<br>';

// arrow funkció
$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(10, 5);


