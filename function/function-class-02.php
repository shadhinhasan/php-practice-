<?php

// function factorial(int $n){
//     // if(gettype($n) != "intege"){
//     //     return "invalid";
//     // }
//     $result =1;
//     for ($i = $n; $i > 1 ; $i--) { 
//         $result *= $i;
//     }
//     return $result;
// }

// echo "Factorial of {$x} is ".factorial($x);

function series($x){
    $result =1;
   for($a=$x; 0 < $a; $a--){
    $result = $result*$a;
   }
   echo $result;
}

series(6);