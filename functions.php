<?php

$password = "";
$lenght = "";

if (isset($_GET['lenght'])) {

    $lenght = $_GET['lenght'];

    $letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $numbers = "0123456789";
    $symbols = "!@#$%^&*()";

    $all = "";

    if (isset($_GET['letters']) && $_GET['letters'] == "on") {
        $all .= $letters;
    }
    if (isset($_GET['numbers']) && $_GET['numbers'] == "on") {
        $all .= $numbers;
    }
    if (isset($_GET['symbols']) && $_GET['symbols'] == "on") {
        $all .= $symbols;
    }


    for ($i = 0; $i < $lenght; $i++) {
        $randomPos = rand(0, strlen($all));
        $randomChar = substr($all, $randomPos, 1);
        $password .= $randomChar;
    }
}

?>