<!--
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60
-->
<?php
$matches = [
  '12/02/2021' =>
  [
    'home-team'=> 'Olimpia Milano',
    'outer-team' => 'Cantù',
    'home-score' => 55,
    'outer-score' => 60
  ],
  '15/02/2021' =>
  [
    'home-team'=> 'Pippo ',
    'outer-team' => 'Pluto',
    'home-score' => 30,
    'outer-score' => 20

  ],
  '18/02/2021' =>
  [
    'home-team'=> 'Ciao',
    'outer-team' => 'Hello',
    'home-score' => 15,
    'outer-score' => 10

  ]
];


foreach ($matches as $match) {
  // echo "{$match['home-team']} - {$match['outer-team']} / {$match['home-score']} - {$match['outer-score']}\n" ;

  echo $match['home-team']." - ".$match['outer-team']." / ".$match['home-score']." - ".$match['outer-score']."\n";

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack Blocco-1</title>
  </head>
  <body>

  </body>
</html>
