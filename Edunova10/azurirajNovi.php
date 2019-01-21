<?php

include_once "PDO.php";

$izraz=$db->prepare("

        update smjer set naziv=:naziv,trajanje=:trajanje,cijena=:cijena,upisnina=:upisnina,verificiran=:verificiran where sifra=:sifra ;
                

        ");

$izraz->execute($_POST);
header("location: index.php");