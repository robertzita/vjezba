<?php

if($_SERVER["SERVER_NAME"]==="localhost"){
    $host = "localhost";
    $user = "edunova";
    $pass = "edunova";
    $baza = "grijanje";
    $dev=true;
}else{
    $host = "localhost";
    $user = "aurelije_rzita";
    $pass = "grijanje123";
    $baza = "aurelije_kalkulator_grijanje";
    $dev=false;
}


$db = new PDO("mysql:dbname=" . $baza . ";host=" .$host . ";charset=utf8",$user,$pass);



