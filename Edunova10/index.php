<?php 
include_once "select.php";
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="grid-container">
      <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <input type="text" name="uvjet" value="<?=$uvjet; ?>" />
        <input type="submit" value="Traži" class="button" />
      </form>

      <table>
        <thead>
          <tr>
            <th>Naziv</th>
            <th>Trajanje</th>
            <th>Cijena</th>
            <th>Upisnina</th>
            <th>Verificiran</th>
            <th>Akcija</th>
            <th>Ažuriraj</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($rezultati as $red): ?>

          <tr>
            <td><?=$red->naziv?></td>
            <td><?=$red->trajanje?></td>
            <td><?=$red->cijena?></td>
            <td><?=$red->upisnina?></td>
            <td><?=$red->verificiran?></td>
            <td><a href="obrisi.php?sifra=<?=$red->sifra?>">Obriši</a></td>
            <td><a href="azuriraj.php">Ažuriraj</a></td>
          </tr>

          <?php endforeach;?>
        </tbody>
      </table>
      <a href="novi.php" class="button">Novi</a>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
