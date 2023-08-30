<?php

$fruits = array ('apple','banana','orange','plum','dates','mango');

// $someFruits = array_slice($fruits,2);
// $someFruits = array_slice($fruits,2,2);
// $someFruits = array_slice($fruits,2,-3);
// $someFruits = array_slice($fruits,-5);
// $someFruits = array_slice($fruits,-5,-1);
$someFruits = array_slice($fruits,3,3,true);

print_r($someFruits)."\n";

$random =array("a"=>12, "b"=>85, "c"=>25, "d"=>50, "e"=>77, "f"=>35, 12=>90, "g"=>100);

// $randomData = array_slice($random,3);
$randomData = array_slice($random,1,-2);
// $randomData = array_slice($random,3,null,true);

print_r($randomData);