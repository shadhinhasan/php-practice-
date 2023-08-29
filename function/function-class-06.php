<?php
// একটা বড় ফাংশনকে ছোট ফাংশনে ভাগ করা........

function doTaskA(){
    echo "Step A Done\n";
}
function doTaskB(){
    echo "Step B Done\n";
}
function doTaskC(){
    echo "Step C Done\n";
}
function doTaskD(){
    echo "Step D Done\n";
    doTaskA();
}
function doTaskE(){
    echo "Step E Done\n";
}


function doTheLargerTask(){
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}

doTheLargerTask();