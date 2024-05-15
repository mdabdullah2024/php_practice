<?php
$filename = "\\Users\\user\\Desktop\\php_practice\\file\\file.txt";


// rewind($fo);
// $fw = fwrite($fo,"Angola\n");
// // rewind($fo);
// $fr = fgets($fo);

file_put_contents($filename,"Bulgeria\n",FILE_APPEND | LOCK_EX);
// echo $fr ;

