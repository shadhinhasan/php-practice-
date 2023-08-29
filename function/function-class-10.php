<?php
// রিকার্সিভ ফাংশনের সাহায্যে ফ্যাক্টোরিয়াল বের করা...

function factorial ($n){
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n-1);
}

echo factorial(5);