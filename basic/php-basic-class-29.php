<?php
$v =0;
$o =1;
$n =1;

for($i=0; $i<10; $i++){
    // echo "i=$i,v=$v,o=$o,n=$n\n";
    echo $v.",";
    $o=$n;
    $n=$o+$v;
    $v=$o;
}
