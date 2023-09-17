<?php

//closures sind anonyme Funktionen. Auch Klasse mit __invoce() Funktion.
$test = function()
{
    var_dump("test()");
};


$test();
var_dump($test);
?>