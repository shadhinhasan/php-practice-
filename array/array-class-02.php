<?php
$students = array(
    "romjan",
    "rakib",
    123,
    "hossen"
);

$students[2]= "shofik";

// $student = array_pop($students);
// $student = array_shift($students);
$student = array_push($students,"monir");
$student = array_unshift($students,"shadhin");
echo count($students)."\n";

$y = count($students);
for($x=0; $x<$y; $x++){
    echo $students[$x]."\n";
}


// Array_shift();
// Array_unshift();
// Array_pop();
// Array_push();