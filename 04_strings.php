<?php

// Create simple string

// String concatenation

// String functions

// Multiline text and line breaks

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php


// Másik videó string funkciók
$string = 'Hello World';

echo 'String hossza: ' . strlen($string) . '<br>';

echo 'Első keresett betű indexe: ' . strpos($string, 'o') . '<br>';

echo 'Első keresett szó  első betűjének indexe: ' . stripos($string, 'World') . '<br>'; // megadja hogy hol kezdődik a string, első betű indexét

echo 'Visszaadja a keresett szót: ' . strstr($string, 'rld') . '<br>';

echo 'Visszaadja a keresett szó hányszor szerepel case-sensitív: ' . substr_count($string, 'World') . '<br>';

echo 'Utolsó előfordulása a betűnek indexe: ' . strrpos($string, 'o') . '<br>';


// Elejéről és a végéről vágja le a dolgokat, amiket megtalál sorrend mindegy, de csak a végéről vág !
// Hell jó de ell nem jó!!!
// rtrim a végéről várja le chop is az utolsó karaktert szedi le a stringről

echo 'Trimmelés: ' . trim($string, "Hell") . '<br>';

$hello  = "Hello World";
$trimmed = trim($hello, "Hdle");
var_dump($trimmed);

echo '<br>';

echo 'Megfordítja a stringet: ' . strrev($string) . '<br>';

echo 'Minden upperCase lesz: ' . strtoupper($string) . '<br>';

echo 'Csak az első karakter szavanként upperCase: ' . ucwords($string) . '<br>';

echo 'Lecserél egy szót egy másikra: ' . str_replace('World', 'Everyone', $string) . '<br>';

echo 'Első 5 karaktert küldi vissza: ' . substr($string, 0, 5) . '<br>';

echo 'Az 7. karaktertől adja vissza a végéig: ' . substr($string, 7) . '<br>';

// Starts with
if (str_starts_with($string, 'Hello')) {
    echo 'Yes' . '<br>';
}

// Starts with
if (str_ends_with($string, 'ld')) {
    echo 'Yes' . '<br>';
}

$string2 = '<h1>Hello</h1>';
echo $string2 . '<br>'; 

$string3 = '<script>alert(1)</script>';
echo $string3 . '<br>'; 


// Ez nem működik valamiért, de számmal simán ment, stringgel nem
// $alertstr = 'Szia!';
// $string4 = '<script>alert(' . $alertstr . ')</script>';
// echo $string4 . '<br>'; 


$string5 = '<script>alert(1)</script>';
echo htmlspecialchars($string5) . '<br>';   // scriptet látjuk,alert nem fut le


printf('%s likes to %s', 'Brad', 'Code'); // %s-t helyettesíti

echo '<br>';

printf('<script>alert(%s)</script>', 'Szia!'); // ez se jó...
echo '<br>';
printf('1+1');
echo '<br>';
printf('1+1=%d' , 2);
echo '<br>';
printf('1+1=%d' , 1+1);
echo '<br>';
printf('1+1=%f' , 1+1);


// Fontos !!!

$str = "Apple is healthy.";
$delimiter = ' ';
$words = explode($delimiter, $str);
 
foreach ($words as $word) {
    echo $word;
    echo "<br>";
}
