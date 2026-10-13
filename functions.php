<?php

$password = "";
$lenght = "";

if (isset($_GET['lenght'])) {

    $lenght = $_GET['lenght'];

    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $numbers = "0123456789";
    $symbols = "!@#$%^&*()";

    $all = $uppercase . $lowercase . $numbers . $symbols;



    for ($i = 0; $i < $lenght; $i++) {
        $randomPos = rand(0, strlen($all));
        $randomChar = substr($all, $randomPos, 1);
        $password .= $randomChar;
    }
}

?>