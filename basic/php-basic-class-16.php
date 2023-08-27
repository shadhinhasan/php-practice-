<?php
$color = "black";

switch($color){
    case "red":
        echo "This is my favorit";
        break;
    case "green":
    case "blue":
        echo "{$color} not favorit color";
        break;
    default:
        echo "This color is ok";
}
