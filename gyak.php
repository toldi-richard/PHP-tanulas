<?php

$file = 'extras/valami.txt';

if (file_exists($file)) {
    $handle = fopen($file,'r');
    $content = fread($handle, filesize($file));
    echo $content;
}
