<?php

class MyException extends Exception
{

}

/**
 * MyException ist eine MyException
 * MyException ist eine Exception
 * Exception ist eine Exception
 * Exception ist keine MyException
*/

function inverse($a)
{
    if ($a == 0) {
        throw new Exception("Nachricht");
    } else {
        return -$a;
    }
}

var_dump("davor");

try {
    var_dump(inverse(0));
} catch (MyException $e) {
    var_dump("Es ist eine MyException aufgetreten");
} catch (Exception $e) {
    var_dump("Es ist eine Exception aufgetreten");
}

var_dump("danach");
?>
