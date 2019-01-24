<?php

include_once "PDO.php";

$izraz=$db->prepare("

    insert into smjer (naziv,trajanje,cijena,upisnina,verificiran)
    values (:naziv,:trajanje,:cijena,:upisnina,:verificiran);

    ");
$izraz->execute($_POST);
header("location: index.php");