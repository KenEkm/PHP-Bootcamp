<?php

//restricts type casting, for ex. float to int
declare(strict_types=1);

//:int declares the return value type; int|fload akzeptiert beide datentypen
function add(int|float $a,int|float $b):int|float|null{
    return $a + $b;
}

var_dump(add(4.5,5.6));

?>