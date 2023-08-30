<?php
$foods = [
    'vegetables' => ' brinjal, brocolli, carrot, capsicam',
    'fruits' => ' orange, banana, apple',
    'drinks' => ' water, milk'
];

// $foods['drinks'] =$foods['drinks'].",orange juice";
$foods['drinks'] .=", orange juice";
// echo $foods ['vegetables'];


foreach($foods as $key => $value){
    echo $key."=".$value."\n";
}
    

// $keys = array_keys($foods);
// for ($i=0; $i < count($keys); $i++) { 
//     $key = $keys[$i];
//     echo $foods[$key]."\n";
// }


// $valuse = array_values($foods);
// for($i=0; $i<count($valuse); $i++){
//     $value = $valuse[$i];
//     echo $value."\n";
// }