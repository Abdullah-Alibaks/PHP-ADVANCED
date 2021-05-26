<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  function rekenUit(int $a, int $b, int $c){
    $x = $a + $b + $c;
    return $x;
  }
  $sum1 = rekenUit(3,4,5);
  $sum2 = rekenUit(6,7,8);
  $sum3 = rekenUit(9,10,11);
  echo "Als ik de getallen 3,4 en 5 bij elkaar op krijg ik $sum1 <br>";
  echo "Als ik de getallen 6,7 en 8 bij elkaar op krijg ik $sum2 <br>";
  echo "Als ik de getallen 9,10 en 11 bij elkaar op krijg ik $sum3";
  ?>
</body>
</html>