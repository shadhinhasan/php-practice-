<?php
$n = 13;

if ($n%2==0){
    echo "Even number";
}else{
    echo "Odd number";
}
echo PHP_EOL;

// if ($n%2==0)
//     echo "Even number";
//     echo PHP_EOL;
//     echo "Some text";
// else:
//     echo "Odd number";
//     echo PHP_EOL;
//     echo "Some text++";
// endif;
// echo PHP_EOL;

switch($n%2==0):
    case 0:
    echo "Even number";
    break;
    default;
    echo "Odd number";
endswitch;
echo PHP_EOL;
?>

<!--*********************************************************-->

<?php
$x = 12;

if ($x%2==0):
    ?>
Even number
Some text
    <?php
else:
    ?>
Odd number 
Some text ++
    <?php
endif;


