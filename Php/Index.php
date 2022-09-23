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

// creating a new pikachu & charmeleon to fight with their names
$pikachu = new Pikachu("LightningRat", $energyTypeLightning, 60, 60, $electricRing, $pikaPunch, $fireWeakness, $fightingResistance, 20, 1.5);
$charmeleon = new Charmeleon('FireMonster', $energyTypeFire, 60, 60, $headButt, $flare, $waterWeakness, $lightningResistance, 10, 2);

// the complete fight of pikachu vs charmeleon
echo "FIGHT <br> <br>";
require 'battle.php';

$pokemonBattle = new Battle();
$pokemonBattle->startBattle($pikachu, $charmeleon); 
?>
</div>
</body>
</html>