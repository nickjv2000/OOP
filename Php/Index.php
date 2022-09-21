<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> OOP </title>
</head>
<body>

<center>
<?php 
require 'pokeman.php';

// create energytypes / weaknesses / resistances and the worth & multiplier for the weakness & resistance
$energyTypeLightning = new energyType('Lightning');
$energyTypeFire = new energyType('Fire');
$energyTypeWater = new energyType('Water');
$energyTypefighting = new energyType('Fighting');

$fireWeakness = new weaknessType('Lightning', 1.5);
$waterWeakness = new weaknessType('Fire', 2);
$fightingWeakness = new weaknessType('Water', 1.75);
$lightningWeakness = new weaknessType('Fighting', 1.4);

$fireResistance = new resistanceType('Water', 20);
$waterResistance = new resistanceType('Fighting', 5);
$lightningResistance = new resistanceType('Fire', 10);
$fightingResistance = new resistanceType('Lightning', 20);

// creating a new pikachu & charmeleon to fight with their names
$pikachu = new Pikachu("LightningRat");
$charmeleon = new Charmeleon('FireMonster');

// the complete fight of pikachu vs charmeleon

echo "FIGHT <br> <br>";

if($pikachu->getHitpoints() > 0 && $charmeleon->getHitpoints() > 0) {

  echo $pikachu->getName() . " has " . $pikachu->getHealth() . " health <br>";
  echo $charmeleon->getName() . " has " . $charmeleon->getHealth() . " health <br>";
  echo $pikachu->getName() . " uses " . $pikachu->getAttack1() . "<br>";

  $charmeleon->setHitpoints($charmeleon->getHitpoints() - ($pikachu->getDmg1() - $charmeleon->getWorth()));

  echo $charmeleon->getName() . " has taken damage! His health is now at " . $charmeleon->getHitpoints() . " health<br>";
  echo $charmeleon->getName() . " starts a counter attack and uses " . $charmeleon->getAttack2() . " <br>";

  $pikachu->setHitpoints($pikachu->getHitpoints() - ($charmeleon->getDmg2() * $pikachu->getMultiplier())); 

  echo $pikachu->getName() . " took a lot of damage! Their health is now at " . $pikachu->getHitpoints() . " health<br>";
  echo $pikachu->getName() . " is going crazy and jumps around to show he's full of energy to attack back <br>";
  echo $pikachu->getName() . " uses " . $pikachu->getAttack2() . "<br>";

  $charmeleon->setHitpoints($charmeleon->getHitpoints() - ($pikachu->getDmg2() - $charmeleon->getWorth()));

  echo $charmeleon->getName() . " is now at " . $charmeleon->getHitpoints() . " health <br>";
  echo $charmeleon->getName() . " attacks with " . $charmeleon->getAttack1() . "<br>";
  echo $pikachu->getName() . " has blocked the attack! <br>";
  echo $pikachu->getName() . " has " . $pikachu->getHitpoints() . " health <br>";
  echo $pikachu->getName() . " uses " . $pikachu->getAttack2() . "<br>";

  $charmeleon->setHitpoints($charmeleon->getHitpoints() - ($pikachu->getDmg2() - $charmeleon->getWorth())); 

  echo $charmeleon->getName() . " has " . $charmeleon->getHitpoints() . " health left the attack was fatal!<br>";
  echo $pikachu->getName() . " has survived with " . $pikachu->getHitpoints() . " health left and won the fight!";
}
?>

</div>
</body>
</html>

