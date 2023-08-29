<?php

function printN($i){
    if($i>=10){
        return;
    }

    echo $i."\n";
    $i++;
    printN($i);
}

// printN(1);

// function printNumber($counter,$end){
//     if($counter>$end){
//         return;
//     }
//     echo $counter."\n";
//     $counter++;
//     printNumber($counter,$end);
// }

// printNumber(10,20);
//recursive function //recursion



function printNumber($counter,$end,$stepping=2){
    if($counter>$end){
        return;
    }
    echo $counter."\n";
    $counter += $stepping;
    printNumber($counter,$end,$stepping);
}

printNumber(21,37);