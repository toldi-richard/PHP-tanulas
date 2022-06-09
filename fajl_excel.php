<?php



$file = 'extras/teszt.xlsx';

if (file_exists($file)) {
    $handle = fopen($file, 'r');
    $content = fread($handle, filesize($file));

    echo $content;
}



use Shuchkin\SimpleXLSX;

// Tömbökben adja vissza az egyes sorokat
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

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);


echo '<br>';

// Mezők típusát adja vissza és értékét is
require_once __DIR__.'../src/SimpleXLSX.php';

echo '<h1>rows() and rowsEx()</h1>';
if ($xlsx = SimpleXLSX::parse('extras/teszt.xlsx')) {
    // ->rows()
    echo '<h2>$xlsx->rows()</h2>';
    echo '<pre>';
    print_r($xlsx->rows());
    echo '</pre>';

    // ->rowsEx();
    echo '<h2>$xlsx->rowsEx()</h2>';
    echo '<pre>';
    print_r($xlsx->rowsEx());
    echo '</pre>';
} else {
    echo SimpleXLSX::parseError();
}

echo '<br>';

// Táblazatosan adja vissza
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__.'../src/SimpleXLSX.php';

echo '<h1>Read several sheets</h1>';
if ($xlsx = SimpleXLSX::parse('extras/teszt.xlsx')) {
    echo '<pre>'.print_r($xlsx->sheetNames(), true).'</pre>';

    echo '<table cellpadding="10">
	<tr><td valign="top">';

    // output worksheet 1 (index = 0)

    $dim = $xlsx->dimension();
    $num_cols = $dim[0];
    $num_rows = $dim[1];

    echo '<h2>'.$xlsx->sheetName(0).'</h2>';
    echo '<table border=1>';
    foreach ($xlsx->rows() as $r) {
        echo '<tr>';
        for ($i = 0; $i < $num_cols; $i ++) {
            echo '<td>' . ( ! empty($r[ $i ]) ? $r[ $i ] : '&nbsp;' ) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    echo '</td><td valign="top">';

    // output worsheet 2 (index = 1)

    $dim = $xlsx->dimension(1);
    $num_cols = $dim[0];
    $num_rows = $dim[1];

    echo '<h2>'.$xlsx->sheetName(1).'</h2>';
    echo '<table border=1>';
    foreach ($xlsx->rows(1) as $r) {
        echo '<tr>';
        for ($i = 0; $i < $num_cols; $i ++) {
            echo '<td>' . ( ! empty($r[ $i ]) ? $r[ $i ] : '&nbsp;' ) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    echo '</td></tr></table>';
} else {
    echo SimpleXLSX::parseError();
}

echo '<br>';

// Beolvassa az excelt és azt megjeleníti táblázatba, nem hard kódolt a file útvonala

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__.'../src/SimpleXLSX.php';

echo '<h1>XLSX to HTML</h1>';

if (isset($_FILES['file'])) {
    if ($xlsx = SimpleXLSX::parse($_FILES['file']['tmp_name'])) {
        echo '<h2>Parsing Result</h2>';
        echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';

        $dim = $xlsx->dimension();
        $cols = $dim[0];

        foreach ($xlsx->readRows() as $k => $r) {
            //      if ($k == 0) continue; // skip first row
            echo '<tr>';
            for ($i = 0; $i < $cols; $i ++) {
                echo '<td>' . ( isset($r[ $i ]) ? $r[ $i ] : '&nbsp;' ) . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo SimpleXLSX::parseError();
    }
}
echo '<h2>Upload form</h2>
<form method="post" enctype="multipart/form-data">
*.XLSX <input type="file" name="file"  />&nbsp;&nbsp;<input type="submit" value="Parse" />
</form>';


echo '<br>';

// Mátrixot hoz létre az adatokból, talán

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__.'../src/SimpleXLSX.php';

echo '<h1>Rows with header values as keys</h1>';
if ($xlsx = SimpleXLSX::parse('extras/teszt.xlsx')) {
    // Produce array keys from the array values of 1st array element
    $header_values = $rows = [];

    foreach ($xlsx->rows() as $k => $r) {
        if ($k === 0) {
            $header_values = $r;
            continue;
        }
        $rows[] = array_combine($header_values, $r);
    }
    print_r($rows);

    $keys = array_keys($rows); // c tömb kulcsait elhelyezi egy tömbbe
    print_r($keys);

    print_r($rows[0]);
    echo 'Ez az egyik mező: ' . $rows[0][1];
}

// https://github.com/shuchkin/simplexlsx