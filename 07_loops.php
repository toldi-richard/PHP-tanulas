<?php

// while

// Loop with $counter

// do - while

// for

// foreach

// Iterate Over associative array.



// Másik videó:

for ($i=0; $i <= 10 ; $i++) { 
    echo $i;
}

$a = 0;

while ($a <= 10) {
    echo 'Number' . $a . '<br>';
    $a++;
}

// A kód egyszer mindig lefog futni a sima whilenál csak ha a feltétel igaz
do {
    # code...
} while ($a <= 10);


// Ezt szokták leggyakrabban használni
$posts = ['First post', 'Second post', 'Third post'];

for ($i = 0; $i < count($posts); $i++) { 
    echo $posts[$i] . '<br>';
}

echo '<br>';

foreach ($posts as $post) {
    echo $post . '<br>';
}

echo '<br>';

foreach ($posts as $index => $post) {
    echo 'Száma: ' . $index . ' a post ' . $post . '<br>';;
}

echo '<br>';

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Trucki',
    'age' => 40
];

foreach ($person as $key => $value) {
    echo "$key - $value <br>";
}