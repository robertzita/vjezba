<?php

if(!isset($_GET["email"]) || !isset($_GET["password"])){
    header("location: index.php?g=1");
    exit;
}

if($_GET["email"]==="" || $_GET["password"]===""){
    header("location: index.php?g=2");
    exit;
}

if($_GET["email"]==="edunova@edunova.hr" && $_GET["password"]==="e"){
    session_start();
    $_SESSION["user"]=$_GET["email"];
    header("location: baza.php");
    exit;
}else{
    header("location: index.php?g=3");
}

