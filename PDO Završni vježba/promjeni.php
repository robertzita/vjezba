<?php 
include_once "PDO.php";
$izraz = $db->prepare("select * from serviser where sifra=:sifra");
$izraz->execute($_GET);
$smjer = $izraz->fetch(PDO::FETCH_OBJ);
?>
<form action="promjeniPostojeci.php" method="post">
    <tr>
    <td>Naziv </td>
    <input type="text" name="naziv" value="<?php echo $smjer->naziv ?>" />
    <td>Adresa </td>
    <input type="text" name="adresa" value="<?php echo $smjer->adresa ?>" />
    <td>Poštanski Broj </td>
    <input type="text" name="postanskibroj" value="<?php echo $smjer->postanskibroj ?>" />
    <td>Broj telefona </td>
    <input type="text" name="brojtelefona" value="<?php echo $smjer->brojtelefona ?>" />
    <td>Email </td>
    <input type="text" name="email" value="<?php echo $smjer->email ?>" />
    <input type="hidden" name="sifra"  value="<?php echo $smjer->sifra ?>" />
    <input type="submit" value="Promjeni" />
    </tr>
</form>