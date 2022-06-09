<?php

$file = 'extras/valami2.txt';

if (file_exists($file)) {
    $handle = fopen($file,'r');
    $content = fread($handle, filesize($file));
    echo $content;
} else {
    $handle = fopen($file,'w');
    $content = 'nagyon' . PHP_EOL . 'jó' . PHP_EOL . 'minden' . PHP_EOL . 'koszi koszi';
    fwrite($handle, $content);
    fclose($handle);
}

    echo '<br>';
    $handle = fopen($file,'r');
    $content = fread($handle, filesize($file));
    echo $content;