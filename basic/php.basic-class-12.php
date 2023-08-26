<?php
$number = 13;
if ($number % 2 == 0) {
    echo "$number is an even mumber";
}else{
    echo "$number is a odd number";
}

echo "\n";

$alam = 100;
$rahim = 1000;

if ($alam == $rahim) {
    echo "Alam and Rahim has same amount of maney";
} else if($alam > $rahim){
    echo "Alam has more money than Rahim";
}elseif($alam < $rahim){
    echo "Alam has less money than Rahim";
}
echo "\n";


$age = 12;

if ($age >= 13 && $age <= 19) {
    echo "This person is Teenager";
} else {
    echo "This person is not a Teenager";
}
echo "\n";


$food = "mango";

if ("tuna" == $food || "salmon" == $food) {
    echo "{$food} has vitamin D";
} else if("apple"==$food){
    echo "Apple doesn't cantain vitamin D";
}else{
    echo "We don't know if {$food} cantains nitamin D";
}

