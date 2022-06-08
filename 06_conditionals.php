<?php

$age = 20;
$salary = 300000;

// Sample if

// Without circle braces

// Sample if-else

// Difference between == and ===

// if AND

// if OR

// Ternary if

// Short ternary

// Null coalescing operator

// switch


// másik videó
if ($age) {
    echo 'Van age-nek értéke!' . '<br>';
}

if (isset($age)) {
    echo 'Van age-nek értéke!' . '<br>';
}



if ($age >= 21) {
    echo 'old enough';
} else {
    echo 'Sorry you are not old enough to vote';
}

echo '<br>';

$date = date("H");

// $date = 20;

if ($date <= 12) {
    echo 'Good morning!';
} elseif($date < 17) {
    echo "Good afternoon! ${date}";
} else {
    echo "Good night! ${date}";
}

echo '<br>';

$posts = ['First post'];

if (!empty($posts)) {
    echo  "Az első post:  ${posts[0]}" . '<br>';
    print_r($posts);
} else {
    echo 'Nincsen post!';
}
echo '<br>';
echo !empty($posts) ? $posts[0] : 'No Posts';

echo '<br>';
$firstPost = !empty($posts) ? $posts[0] : 'No Posts';
$firstPost = !empty($posts) ? $posts[0] : null; // Ez is megfelelő ha nincs else águnk
$firstPost = $posts[0] ?? null; // Ha van benne valami akkor ok ha nincs null lesz
echo $firstPost;

echo '<br>';

$favcolor = 'blue';

switch ($favcolor) {
    case 'red':
        echo 'Your favourite color is red!';
        break;
        
    case 'blue':
        echo 'Your favourite color is blue!';
        break;

    case 'green':
        echo 'Your favourite color is green!';
        break;
    
    default:
        echo 'Your fav color is not red, blue or green!';
        break;
}