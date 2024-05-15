<?php
$filename = "\\Users\\user\\Desktop\\php_practice\\file\\file.txt";
$students = array(
    array(
        "fname" => "Kashem",
        "lname" => "Molla",
        "age"=> "16",
        "class"=> "9",
        "roll"=> "41",
    ),
    array(
        "fname" => "Abdullah",
        "lname" => "Molla",
        "age"=> "17",
        "class"=> "9",
        "roll"=> "42",
    ),
    array(
        "fname" => "Israfil",
        "lname" => "Molla",
        "age"=> "18",
        "class"=> "9",
        "roll"=> "43",
    ),
);
// $fo = fopen($filename,"w");

// foreach ($students as $student) {  
//     $data = sprintf("%s %s %s %s %s \n ",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);
//     fwrite($fo,$data);
//  }

// fclose($fo);

// $fo = fopen($filename,"r");

// while($data = fgets($fo)){
//     $student = explode(",",$data);
//     printf("%s%s%s%s%s ",$student[0],$student[1],$student[2],$student[3],$student[4]);

// }


// fclose($fo);


$fo = fopen($filename,"r");

// foreach($students as $student){
//     fputcsv($fo,$student);

// }

while($data = fgetcsv($fo)){
    printf("Name = %s %s \nAge = %s \nclass = %s \nRoll = %s\n\n",$data[0],$data[1],$data[2],$data[3],$data[4]);
}