<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> OOP </title>
</head>
<body>

<?php 
require 'pokeman.php';

echo $pikachu . "<br>";
echo $charmeleon . "<br>";
echo "FIGHT <br> <br>";

if($pikachu->hitpoints > 0 && $charmeleon->hitpoints > 0) {

  echo $rat . " has " . ($pikachu->health) . " health <br>";
  echo $char . " has " . ($charmeleon->health) . " health <br>";
  echo $rat . " uses " . ($pikachu->attack1) . "<br>";

  $charmeleon->hitpoints = $charmeleon->hitpoints - ($pikachu->dmg1 - 10);

  echo $char . " has taken damage! His health is now at " . ($charmeleon->hitpoints) . " health<br>";
  echo $char . " starts a counter attack and uses " . ($charmeleon->attack2) . " <br>";

  $pikachu->hitpoints = $pikachu->hitpoints - ($charmeleon->dmg2 * 1.5);

  echo $rat . " took a lot of damage! Their health is now at " . ($pikachu->hitpoints) . " health<br>";
  echo $rat . " is going crazy and jumps around to show he's full of energy to attack back <br>";
  echo $rat . " uses " . ($pikachu->attack2) . "<br>";

  $charmeleon->hitpoints = $charmeleon->hitpoints - ($pikachu->dmg2 - 10);

  echo $char . " is now at " . ($charmeleon->hitpoints) . " health <br>";
  echo $char . " attacks with " . ($charmeleon->attack1) . "<br>";
  echo $rat . " has blocked the attack! <br>";
  echo $rat . " has " . ($pikachu->hitpoints) . " health <br>";
  echo $rat . " uses " . ($pikachu->attack2) . "<br>";

  $charmeleon->hitpoints = $charmeleon->hitpoints - ($pikachu->dmg2 - 10);

  echo $char . " has " . ($charmeleon->hitpoints) . " health left the attack was fatal!<br>";
  echo $rat . " has survived with " . ($pikachu->hitpoints) . " health left and won the fight!";
  }
?>

</div>
</body>
</html>

