<?php
$n = -11;
$z = $n % 2;
switch(true){
    case ($z == 0 && $n > 0):
        echo "{$n} is a positive even number";
        break;
    case ($z == 1 && $n > 0):
        echo "{$n} ia a positive odd number";
        break;
    case ($z == 0 && $n < 0):
        echo "{$n} is a negtive even number";
        break;
    case ($z == -1 && $n < 0):
        echo "{$n} ia a negtive odd number";
        break;
}