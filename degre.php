<?php
function FaranheitToCelcius($faranheit) {
    return ($faranheit - 32) * (5 / 9);
}
$faranheit = rand(0, 500);           
$celcius = FaranheitToCelcius($faranheit);
if($celcius < 0 ) {
    echo PHP_EOL."Il fait froid: ".$celcius.PHP_EOL;
}
if($celcius >= 0 ) {
    echo PHP_EOL."Il fait: ".$celcius.PHP_EOL;
}