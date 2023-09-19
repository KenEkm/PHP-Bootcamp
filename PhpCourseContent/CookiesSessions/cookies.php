<?php
//Achtung: Cookies sind einsehbar und manipulierbar!
header("Set-Cookie: name=Chandler");
print_r($_COOKIE);
echo "<br>";

//expire parameter, cookie gültig für 24h, bei 0 wird cookie gelöscht bei browser schließung.
setcookie("sirname", "Joey", time() + (24 * 60 * 60));
print_r($_COOKIE);
echo "<br>";

//Aufrufe des Besuchers zählen.
if(!isset($_COOKIE['count'])){
    setcookie("count", 1);
    echo "Das ist Ihr erster Besuch. <br>";
} else {
    $count = $_COOKIE['count'] + 1;
    setcookie("count", $count);
    echo "Das ist Ihr {$count}. Besuch.";
}
?>