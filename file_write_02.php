<?php

$filename = "C:\\Users\\user\\Desktop\\php_practice\\file\\file.txt";

if(is_writable($filename)) {
    $fo = fopen($filename,'w');

$write = fwrite($fo,"Bangla\n");
$write = fwrite($fo,"English\n");
$write = fwrite($fo,"Math\n");
$write = fwrite($fo,"Social Science\n");
$write = fwrite($fo,"ICT\n");


echo $write;

fclose($fo);
}