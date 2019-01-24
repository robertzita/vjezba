<?php

include_once "PDO.php";

$uvjet = isset($_GET["uvjet"]) ? $_GET["uvjet"] : "";

$izraz = $db->prepare("select * from serviser where naziv like :uvjet");

$izraz->execute(["uvjet"=> "%" . $uvjet . "%" ]);

$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);

