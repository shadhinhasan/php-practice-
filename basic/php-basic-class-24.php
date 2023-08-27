<?php
$n = 6;
for ($i=$n,$factorial=1; $i>1; $i--){
    $factorial *=$i;
}

printf ("Factorial %d is %d",$n,$factorial);