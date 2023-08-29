<?php

function doSomething(){
    static $i;
      //static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}
doSomething();
doSomething();
doSomething();
doSomething();
doSomething();

echo "***-----------***\n";

function doExtra(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

doExtra();
doExtra();
doExtra();
doExtra();