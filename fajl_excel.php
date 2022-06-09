<?php



$file = 'extras/teszt.xlsx';

if (file_exists($file)) {
    $handle = fopen($file, 'r');
    $content = fread($handle, filesize($file));

    echo $content;
}



use Shuchkin\SimpleXLSX;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__.'../src/SimpleXLSX.php';

echo '<h1>Parse books.xslx</h1><pre>';
if ($xlsx = SimpleXLSX::parse('extras/teszt.xlsx')) {
    print_r($xlsx->rows());
} else {
    echo SimpleXLSX::parseError();
}
echo '<pre>';