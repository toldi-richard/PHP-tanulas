<?php

// Create array

// Print the whole array

// Get element by index

// Set element by index

// Check if array has element at index 2

// Append element

// Print the length of the array

// Add element at the end of the array

// Remove element from the end of the array

// Add element at the beginning of the array

// Remove element from the beginning of the array

// Split the string into an array

// Combine array elements into string

// Check if element exist in the array

// Search element index in the array

// Merge two arrays

// Sorting of array (Reverse order also)


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays




// Másik videó

$numbers = [1,2,3,4,5];
$fruits = array('apple', 'orange');
print_r($numbers);
echo '<br>';
print_r($fruits);
echo '<br>';
var_dump($numbers);
echo '<br>';
echo $fruits[1];
echo '<br>';

// Associative array
$color = [
    1 => 'red',
    2 => 'blue',
    3 => 'black',
];
echo $color[2];
echo '<br>';

$color = [
    'red' => '#f00',
    'blue' => '#f02',
    'green' => '#f03',
];
echo $color['blue'];
echo '<br>';

$person = [
    'firs_name' => 'Brad',
    'last_name' => 'Traversy',
    'age' => 40,
];
echo $person['age'];
echo '<br>';

$people = [
    [
        'firs_name' => 'Brad',
        'last_name' => 'Traversy',
        'age' => 40,
    ],
    [
        'firs_name' => 'Jhon',
        'last_name' => 'Traversy',
        'age' => 32,
    ],
    [
        'firs_name' => 'Alizabeth',
        'last_name' => 'Traversy',
        'age' => 16,
    ]
];
echo $people[2]['age'];
echo '<br>';

var_dump(json_encode($people));

echo '<br>';echo '<br>';echo '<br>';

// Array funkcions tömbökkel való dolgozáshoz
$fruits = ['apple', 'orange', 'grape'];

// Get length
echo count($fruits) . '<br>'; // 3 at ad

// Search array
var_dump(in_array('apple', $fruits)); // bool(true) -t ad

echo '<br>';

// Add to array
$fruits[] = 'potato'; // végére rakja
array_push($fruits, 'blueberry', 'strawberry'); // végébe rakja
array_unshift($fruits, 'mango'); // elejéhez rakja
print_r($fruits);

echo '<br>';echo '<br>';

//Remove from array
array_pop($fruits); // A végéről törli az utolsót
array_shift($fruits); // Törli az elsőt a tömbből
unset($fruits[2]); // Index szerint törli a 2. indexű elemet

print_r($fruits);

echo '<br>';echo '<br>';

// Split into 2 chunks, 2-2 elemet rak egy tömbbe szóval itt 3 tömb lesz 5 elemmel
// 3-4 el is lehet 2 helyett
$fruits = ['apple', 'orange', 'grape', 'watermelon', 'peach'];
$chunked_array = array_chunk($fruits, 2);

print_r($chunked_array);

echo '<br>';echo '<br>';

// Tömbök összevonása
$arr1 = [1,2,3,4];
$arr2 = [5,6,7,8];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

print_r($arr4);

echo '<br>';echo '<br>';

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b); // kombinálja a tömböket, az első lesz a key a második a value
// és egy új tömbbe kerülnek majd

print_r($c);
echo '<br>';echo '<br>';

$keys = array_keys($c); // c tömb kulcsait elhelyezi egy tömbbe
print_r($keys);

echo '<br>';echo '<br>';

$flipped = array_flip($c); // Felcseréli a kulcsokat az értékekkel, érték lesz a kulcs a kulcs pedig az érték
print_r($flipped);


echo '<br>';echo '<br>';

// tömb feltöltése random számokkal
$numbers = range(1,20);
print_r($numbers);
echo '<br>';


// tömb bejárása...
$newNumbers = array_map(function($number) {
    return "Number ${number}" . '<br>';
}, $numbers);

print_r($newNumbers);
echo '<br>';


// számok kiválogatása
$lessThen10 = array_filter($numbers, fn($number) => 
$number <= 10);

print_r($lessThen10);
echo '<br>';echo '<br>';



// Összeadja a tömb elemeit...elvileg 1 értékre redukálja a tömböt....
$sum = array_reduce($numbers, fn($carry, $number) =>
$carry + $number);

var_dump($sum);
echo '<br>';
print_r($sum);
echo '<br>';

$teszt1 = [1,1];
$teszt = array_reduce($teszt1, fn($carry, $number) =>
$carry + $number);

var_dump($teszt);
echo '<br>';
print_r($teszt);

// PHP dokumentáció
// https://www.php.net/manual/en/ref.array.php


