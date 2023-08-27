<?php
//Tarnary operator...

$number = 10;

if ($number == 12) {
    echo "Twelv";
} elseif($number == 10){
    echo "Ten";
}else{
    echo "A number";
}
echo "\n";

// $numberInword = ($number == 12) ? "Twelv" : "A number";
$numberInword = ($number == 12) ? "Twelv" :( ($number == 10) ? "Ten" : "A number");
echo $numberInword;
