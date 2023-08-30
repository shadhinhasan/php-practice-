<?php

 $vegetables = explode(', ','brinjal, brocolli, carrot, capsicam, capsicam,sweet-potatto');
//  $vegetables = preg_split ('/(, |,)/','brinjal, brocolli, carrot, capsicam, capsicam,sweet-potatto');
// print_r($vegetables);
//  var_dump($vegetables);

$vegetablesString = join(', ', $vegetables);
echo $vegetablesString;