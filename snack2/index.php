<?php
  $user = [
    "name" => $_GET["name"],
    "email" => $_GET["email"],
    "age" => $_GET["age"],
  ];

  // Validazione nome
  // 1. name più lungo di 3 caratteri,
  if (strlen( $user["name"]) > 3) {
    $nameValid = 1;
  }

  // Validazione email
  // 2. mail contenga un punto e una chiocciola
  if (strpos($user["email"], ".") && strpos($user["email"], "@")) {
    $emailValid = 1;
  }

  // Validazione email
  // 3. age sia un numero.
  if ((int)$user["age"] > 0) {
    $ageValid = 1;
  }

  // Validazione Utente
  if($nameValid && $emailValid && $ageValid){
    $user["valid"] = 1;
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack Blocco-1</title>
  </head>
  <body>
    <?php if($user["valid"]): ?>
      <h2>Accesso riuscito</h2>
      <?php
      echo "Nome: ".$user['name']."<br> Email: ".$user['email']."<br> Età: ".$user['age']."<br>";
      ?>
    <?php else :?>
      <h2>Accesso negato</h2>
    <?php endif; ?>

  </body>
</html>
