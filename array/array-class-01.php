<?php

$student = array(
    "shadhin",
    "hasan",
    123,
    "hossen"
);

var_dump($student)."\n";
echo "----------------------.\n";
echo count($student)."\n";
echo "----------------------.\n";

$y = count($student);
for($x=0; $x<$y; $x++){
    echo $student[$x]."\n";
}

echo "----------------------.\n";

$y = count($student);
for($x = $y-1; $x >= 0; $x--){
    echo $student[$x]."\n";
}