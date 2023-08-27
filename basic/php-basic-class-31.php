<?php
// নাল কোলেস অপারেটর.....

$default_lat = 23.8;
$default_lon = 90.8;

$user_lat;

if (isset($user_lat)) {
    echo $lat = $user_lat;
} else {
    echo $lat = $default_lat;
}
echo "\n";

$lat = isset($user_lat) ? $user_lat : $default_lat;
echo $lat;
echo "\n";

$lat = $user_lat ?? $default_lat;
echo $lat;
