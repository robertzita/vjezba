<?php 
include_once "select.php";
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator grijanja </title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body style="<?php echo $dev ? "background-color: lightgreen" : "" ?>">
  <div class="grid-container">
        <div class="large-3 cell">
          <a class="button expanded" style="background-color:coral" href="logout.php">Logout</a>
        </div>
        </div>
      <div class="grid-container">
      <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <input type="text" name="uvjet" value="<?=$uvjet; ?>" />
        <input type="submit" value="Traži" class="button" />
      </form>

      <table>
        <thead>
          <tr>
            <th>Naziv</th>
            <th>Adresa</th>
            <th>Poštanski Broj</th>   
            <th>Broj telefona</th>
            <th>Email</th>
            <th>Akcija</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($rezultati as $red): ?>

          <tr>
            <td><?=$red->naziv?></td>
            <td><?=$red->adresa?></td>
            <td><?=$red->postanskibroj?></td>
            <td><?=$red->brojtelefona?></td>
            <td><?=$red->email?></td>
            <td>
            <a href="promjeni.php?sifra=<?=$red->sifra?>">Promjeni</a> | 
            <a href="obrisi.php?sifra=<?=$red->sifra?>">Obriši</a></td>
          </tr>

          <?php endforeach;?>
        </tbody>
      </table>
      <a href="novi.php" class="button">Novi</a>
    </div>

    <?php include_once "skripte.php" ?>
  </body>
</html>
