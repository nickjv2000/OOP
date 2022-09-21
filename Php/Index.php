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
$pikachu = new Pikachu("LightningRat");
$charmeleon = new Charmeleon('FireMonster');

// the complete fight of pikachu vs charmeleon

echo "FIGHT <br> <br>";

require('battle.php');
?>

</div>
</body>
</html>

