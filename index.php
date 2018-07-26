<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>exo3</title>
  </head>
  <body>
    <p>
    <?php
    $genre= 'femme';
    $gender= 'homme';
    $age= 19;
    if ($genre AND $age >= 18) {
      echo 'Vous êtes une femme et vous êtes majeur';
    }
    elseif($genre AND $age < 18) {
      echo 'Vous êtes une femme et vous êtes mineur';
    }
    if($gender AND $age >= 18) {
      echo 'Vous êtes un homme et vous êtes majeur';
    }
    elseif($gender AND $age < 18) {
      echo 'Vous êtes un homme et vous êtes mineur';
    }
     ?>
   </p>
  </body>
</html>
