<?php

// $ft = "Coffee";
// $n = "2 cups";
// serve($ft,$n);

// function serve($foodType,$numberOfItems){
//     echo "{$numberOfItems} of {$foodType} has been served";
// }

echo "**********\n";

// $ft = "Coffee";
// $n = "3 cups";
// serve($ft,$n);
// serve($ft);
serve("salad","2 plates");

function serve($foodType="Coffee",$numberOfItems="1 cup"){
    echo "{$numberOfItems} of {$foodType} has been served\n";
}

serve();
serve("barger","1 pcs");