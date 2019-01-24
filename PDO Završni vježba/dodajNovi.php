<?php

include_once "PDO.php";

$izraz=$db->prepare("

    insert into serviser (naziv,adresa,postanskibroj,brojtelefona,email)
    values (:naziv,:adresa,:postanskibroj,:brojtelefona,:email);

    ");
$izraz->execute($_POST);
header("location: baza.php");