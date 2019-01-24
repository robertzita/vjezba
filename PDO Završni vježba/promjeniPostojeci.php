<?php

include_once "PDO.php";

$izraz=$db->prepare("

    update serviser set naziv=:naziv, adresa=:adresa,
    postanskibroj=:postanskibroj,brojtelefona=:brojtelefona,email=:email
    where sifra=:sifra;

");

$izraz->execute($_POST);

header("location: baza.php");