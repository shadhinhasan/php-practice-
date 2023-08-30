<?php

//copy by value
//deep copy
$person = array ('fname'=>'Hello','lname'=>'world');
$newperson = $person;
$newperson['lname']='pluto';

print_r($person);
print_r($newperson);

//copy by reference
//shallow copy
echo "*********************";
$person = array ('fname'=>'Hello','lname'=>'world');
$newperson = &$person;
$newperson['lname']='pluto';

print_r($person);
print_r($newperson);

echo "------------------\n";
function printData($person){
    $person['fname'].= ' changed';
    print_r($person);
}

printData($person);
print_r($person);
