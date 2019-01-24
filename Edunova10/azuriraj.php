<?php 
include_once "PDO.php";

$izraz=$db->prepare("

        select * from smjer where sifra=:sifra ;
                

        ");

$izraz->execute($_GET);
$smjer = $izraz->fetch(PDO::FETCH_OBJ);


?>
<form action="azurirajNovi.php" method="post">
 <tr>
        <th>Naziv</th>
    <input type="text" name="naziv" value="<?php echo $smjer->naziv ?>" />
        <th>Trajanje</th>
    <input type="text" name="trajanje" value="<?php echo $smjer->trajanje ?>" />
        <th>Cijena</th>
    <input type="text" name="cijena" value="<?php echo $smjer->cijena ?>" />
        <th>Upisnina</th>
    <input type="text" name="upisnina" value="<?php echo $smjer->upisnina ?>" />
        <th>Verificiran</th>
    <input type="text" name="verificiran" value="<?php echo $smjer->verificiran ?>" />
    <input type="hidden" name="sifra" value="<?php echo $smjer->sifra ?>" />
</tr>
    <input type="submit" value="Ažuriraj" />
</form>