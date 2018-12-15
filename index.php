<?php
$var1 = 0;
$var2 = 10;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part3 exe2</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php while($var1 <= 20){ ?>
    <p><?= $var1 * $var2 ?></p>
    <?php
    $var1++;
  }
  ?>
  <!--initialisation des variables dans une boucle for -->
  <!--  <?php for($var1 = 0 , $var2 = 10 ; $var1 <= 20 ; $var1++) { ?>
  <p><?= $var1 * $var2 ?></p>
<?php } ?>-->
</body>
</html>
