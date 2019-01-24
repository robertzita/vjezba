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
  <body>
   

      <div class="grid-x grid-padding-x" >
        <div class="medium-offset-3 medium-6">
          <div class="callout text-center">
          <form class="log-in-form"  action="autoriziraj.php">
  <h4 class="text-center">Log in with you email account</h4>
  <label>Email
    <input type="email" name="email" placeholder="somebody@example.com">
  </label>
  <label>Password
    <input type="password" name="password" placeholder="Password">
  </label>
  <input id="show-password" type="checkbox"><label for="show-password">Show password</label>
  <p><input type="submit" class="button expanded" style="background-color:#85e085" value="Log in"></input></p>
  <p class="text-center"><a href="#">Forgot your password?</a></p>
</form>
<?php 
if(isset($_GET["g"])):
  switch ($_GET["g"]):
    case '1':
      echo "Obavezno email i lozinka";
      break;
    case '2':
      echo "Email i lozinka ne smiju biti prazni";
      break;
    case '3':
      echo "Email i lozinka ne odgovaraju";
      break;
    case '4':
      echo "Obavezno se prijavite";
      break;
    case '5':
      echo "Odjavljeni ste, ponovo se prijavite";
      break;
  endswitch;
endif;
?>


          </div>
        </div>
      </div>
      
    </div>

    <?php include_once "skripte.php" ?>
  </body>
</html>

