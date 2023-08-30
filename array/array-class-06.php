<?php

$student = array(
    'fname'=>'Shadhin',
    'lname'=>'Hasan',
    'age'=>'18',
    'class'=>10,
    'section'=>'B'
);

// print_r($student);

printf ("%s %s \n",$student['fname'],$student['lname']);

$serialized = serialize($student);
echo $serialized."\n";

$newstudent = unserialize($serialized);
print_r($newstudent);

$jsondata = json_encode($student);
echo $jsondata."\n";
echo "-----------------------\n";

$student2 = json_decode($jsondata,true);
print_r ($student2);