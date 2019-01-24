<?php

include_once "PDO.php";

$izraz=$db->prepare("
    delete from serviser where sifra=:sifra
");

$izraz->execute($_GET);

header("location: baza.php");