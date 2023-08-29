<?php
// বিকার্সিভ  ফাংশনের সাহায্যে ফিবোনাচ্চি সিরিজ প্রিন্ট করা....

function fibonacci($old,$new,$end){

    static $start;
    $start = $start ?? 1;

    if($start>$end){
        return;
    }
    $start++;

    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old,$new,$end);
}

fibonacci(0,1,5);
