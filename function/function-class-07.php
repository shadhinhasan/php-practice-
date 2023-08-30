<?php

// function printN($i){
//     if($i>=10){
//         return;
//     }

//     echo $i."\n";
//     $i++;
//     printN($i);
// }

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



// function printNumber($counter,$end,$stepping=2){
//     if($counter>$end){
//         return;
//     }
//     echo $counter."\n";
//     $counter += $stepping;
//     printNumber($counter,$end,$stepping);
// }

// printNumber(21,37);

// echo "*************************\n";

function sumetionSeries($start,$end,$result=1){
    if($start-1 >= $end){
        echo "fectorial is =".$result;
        return;
    }
    echo $end ."\n";
    $result *= $end;
    $end--; 
    sumetionSeries($start,$end,$result);
}

sumetionSeries(1,5);
