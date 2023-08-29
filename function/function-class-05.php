<?php
// ফাংশন এ আনলিমিটেড আর্গুমেন্ট এক্সেপ্ট করা.....

// function sun (int $x=0, int $y=0,int $z=0):int {
//     return $x+$y+$z;
// }

// echo sun(5,7,8);
echo "*************\n";

function sun (int ...$numbers):int {
    $result = 0;
    for($i=0; $i < count($numbers); $i++){ 
        $result += $numbers[$i];
    }
    return $result;
}

echo sun(1,2,3,4,5,6,7,8,9,10);