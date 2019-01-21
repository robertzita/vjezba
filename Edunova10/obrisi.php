<?php

include_once "PDO.php";

$izraz=$db->prepare("
    delete from smjer where sifra=:sifra
");

$izraz->execute($_GET);

header("location: index.php");