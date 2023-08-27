<?php
$x=0;
while($x<5){
    echo $x++;
    echo PHP_EOL;
}
echo "*******\n";

$j =0;
while ($j++<5){
    echo $j;
    echo PHP_EOL;
}
echo "*******\n";

$y = 0;
while (++$y<5){
    echo $y;
    echo PHP_EOL;
}
echo "*******\n";


$x = $y=5;
echo $x;

echo "\n";
$x = $y=5;
echo ++$y;
echo "\n";
echo $x;

