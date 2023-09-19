<?php

//generiert neue session id die in cookie gespeichert wird.
session_start();

var_dump(session_save_path());

$_SESSION["name"] = "Joey";

//um alte session id ungültig zu machen und neue zu generieren.
session_regenerate_id(true);

print_r($_SESSION);

print_r($_COOKIE);

?>