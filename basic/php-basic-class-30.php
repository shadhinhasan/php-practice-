<?php
$x =10;
$y =11;

$result = $x<=>$y; 
if ($result ==1) {
    echo "{$x} big";
}elseif($result ==0){
    echo "{$x} and {$y}suman";
}elseif($result ==-1){
    echo "{$x} ar thakay {$y} big";
}
