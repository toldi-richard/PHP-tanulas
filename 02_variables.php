<?php

// What is a variable

// Variable types
$name ='Zura';
$age = 28;
$isMale = true;
$isMale2 = false;
$height = 1.86;
$salary = null;

// Declare variables
$name ='Zura';
$age = 28;
$isMale = true;
$height = 1.86;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name.'<br>';
echo $age;

echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>'; // 1 lesz
echo $isMale2.'<br>'; // üres lesz az az null
echo $height.'<br>';
echo $salary.'<br>';

// Print types of the variables
echo gettype($name).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';


$a = '12345';

// This works:
echo '<br>';
echo '<br>';

echo "qwe{$a}rty"; // qwe12345rty, using braces

echo '<br>';

echo "qwe" . $a . "rty"; // qwe12345rty, concatenation used concatenation - összefüggés, láncolat
// concatenate - összefűzés

echo '<br>';

// Does not work:
echo 'qwe{$a}rty'; // qwe{$a}rty, single quotes are not parsed
echo '<br>';

echo "qwe$arty"; // qwe, because $a became $arty, which is undefined
echo '<br>';

echo '<br>';echo '<br>';
$str1=1;
$str2=2;
$str3=3;

echo "{$str1}{$str2}{$str3}"; // one concat = fast
echo '<br>';
echo $str1. $str2. $str3;   // two concats = slow
echo '<br>';
echo "$str1, $str2, $str3"; // "" közt így is lehet
echo '<br>';
echo "${str1}, ${str2}, ${str3}"; // ez is jó, ezt az ajánlott mert kitűnik a változó neve
echo '<br>';echo '<br>';

echo "{$str1} <br> {$str2}";

echo '<br>';echo '<br>';

echo "thr"."ee".'<br>';           //prints the string "three"
echo "twe" . "lve".'<br>';        //prints the string "twelve"
echo 1 . 2 .'<br>';                //prints the string "12"
$teszt = 1 . 2 ;
echo gettype(1);
echo "<br>";
echo gettype($teszt);
echo "<br>";

echo 1.2 .'<br>';                  //prints the number 1.2
echo 1+2 .'<br>';                  //prints the number 3


echo '<br>';echo '<br>';

echo 'a'.
$c = 'x';  // sortörés van és összefűzés

echo 'b';
echo 'c';

// Print the whole variable
echo '<br>';
var_dump($name, $age, $isMale, $height, $salary); // kiírja a változó típusát, méretét és a változót is magát 
echo '<br>';
echo gettype($name);
echo '<br>';
echo '<br>';

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name).'<br>';
var_dump($name);
echo '<br>';
echo '<br>';

// Variable checking functions
echo "Ez lett a stringből: ". is_string($name). " pontosan ez!"; // + + fűzés mint a c# ban nem megy itt
echo '<br>';
echo "Ez lett a stringből: ", is_string($name), " pontosan ez!"; // + + fűzés mint a c# ban nem megy itt
echo is_string($name); // false
echo '<br>';

is_int($age) . "<br>"; // true

echo "Ennek true -anak kellene lennie az az 1-nek".
is_bool($isMale) ? "Igaz" : "Hamis".'<br>'; // Igaz, de az első mondatot nem írja ki valamiért

echo '<br>';
echo is_double($height); // true
echo '<br>';
echo '<br>';

// Check if variable is defined
echo isset($name);
echo '<br>';
echo '<br>';
echo "Ez lesz a nem létező változó isset értéke: ", isset($address);
echo '<br>';
echo '<br>';

// Constants, sose fog változni!!!!!
define('PI', 3.14);
echo PI.'<br>';

// Using PHP built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';
echo PHP_INT_MIN.'<br>';