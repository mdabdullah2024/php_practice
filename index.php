<?php
$filename = "\Users\user\Desktop\php_practice/file/file.txt";

if (is_readable($filename)){
    
$fo = fopen($filename,"r");

$line = fgets($fo);
while ($line = fgets($fo)){
    echo $line;
}
rewind($fo);
$line = fgets($fo);
while ($line = fgets($fo)){
    echo $line;
}

fclose($fo);
}




