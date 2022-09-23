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

$fireResistance = new resistanceType('Water', 20);
$waterResistance = new resistanceType('Fighting', 5);
$lightningResistance = new resistanceType('Fire', 10);
$fightingResistance = new resistanceType('Lightning', 20);

$energyTypeLightning = new energyType('Lightning');
$energyTypeFire = new energyType('Fire');
$energyTypeWater = new energyType('Water');
$energyTypefighting = new energyType('Fighting');

$fireWeakness = new weaknessType('Lightning', 1.5);
$waterWeakness = new weaknessType('Fire', 2);
$fightingWeakness = new weaknessType('Water', 1.75);
$lightningWeakness = new weaknessType('Fighting', 1.4);

// creating a new pikachu & charmeleon to fight with their names
$pikachu = new Pikachu("LightningRat");
$charmeleon = new Charmeleon('FireMonster');

// the complete fight of pikachu vs charmeleon
echo "FIGHT <br> <br>";
require 'battle.php';
?>

</div>
</body>
</html>

