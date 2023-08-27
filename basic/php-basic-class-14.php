<?php
// $condition1 = true;
// $condition2 = true;
// $condition3 = false;


// if ($condition1) {
//     echo "First condition true\n";
//     if ($condition2) {
//         echo "Second condition true\n";
//         if($condition3){
//             echo "Third condition true\n";
//         }else{
//             echo "no1";
//         }
//     } else {
//         echo "no2";
//     }
// } else {
//     echo "no3";
// }
// echo "\n";

// if($condition1 && $condition2 && $condition3){
//     echo "Hallo";
// }elseif($condition1 && $condition2){
//     echo "no1";
// }elseif($condition1){
//     echo "on2";
// }else{
//     echo "no3";
// }


$x = 90;
$y = 85;
$z = 91;

// if ($x>$y && $x>$z) {
//     echo "big ".$x;
// } elseif($y>$z){
//     echo "big ".$y;
// }else{
//     echo "big ".$z;
// }

if($x>$y){
    if ($x>$z) {
        echo "Big x ".$x;
    } else {
       if($y>$z){
        echo "big y".$y;
       }if($z>$x && $z>$y){
        echo "big z ".$z;
       }
    }
    
}else{

}