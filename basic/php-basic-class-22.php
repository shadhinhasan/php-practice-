<?php
for ($x=1; $x<=10; $x+=1){
    echo $x;
    echo PHP_EOL;
    // for($y=1; $y<=$x; $y++){
    //     echo "*";
    // }
}
echo PHP_EOL;

echo "Wile";
$i = 0;
while ($i<10){
    $i++;
    echo $i;
    echo PHP_EOL;
}
echo PHP_EOL;

echo "do/Wile";
$k=0;
do{
    $k++;
    echo $k. PHP_EOL;
} while ($k < 10);

echo "Go to\n";
$a = 0;
b:$a++;
echo $a. PHP_EOL;
if ($a<10) goto b; 
