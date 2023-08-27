<?php
$n = 6;
$result = 1;
for ($i = $n; $i>1; $i--){
    $result *=$i;
}
echo "Factorial of {$n} is {$result}\n";

$j=1;
for($n=1;$n<=10; $n++){
    $result=1;
    for ($i = $n; $i>1; $i--){
        $result *=$i;
        $j++;
    }
    echo"Factorial of {$n} is {$result}\n";
}
echo "Total {$j} number of operations\n";

// Short

$j = 1;
for ($n=1; $n<=10; $n++){
    $result *=$n;
    $j++;
    echo"Factorial of {$n} is {$result}\n";
}
echo "Total {$j} number of operations\n";