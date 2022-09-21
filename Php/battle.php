<?php 
echo $pikachu . "<br>";
echo $charmeleon . "<br>";

if($pikachu->getHitpoints() > 0 && $charmeleon->getHitpoints() > 0) {

  echo $pikachu->getName() . " has " . $pikachu->getHealth() . " health <br>";
  echo $charmeleon->getName() . " has " . $charmeleon->getHealth() . " health <br>";
  echo $pikachu->getName() . " uses " . $pikachu->getAttack1() . "<br>";

  // $charmeleon->setHitpoints($charmeleon->getHitpoints() - ($pikachu->getAttackDmg() - $charmeleon->getWorth()));

  echo $charmeleon->getName() . " has taken damage! His health is now at " . $charmeleon->getHitpoints() . " health<br>";
  echo $charmeleon->getName() . " starts a counter attack and uses " . $charmeleon->getAttack2() . " <br>";

  // $pikachu->setHitpoints($pikachu->getHitpoints() - ($charmeleon->getDmg2() * $pikachu->getMultiplier())); 

  echo $pikachu->getName() . " took a lot of damage! Their health is now at " . $pikachu->getHitpoints() . " health<br>";
  echo $pikachu->getName() . " is going crazy and jumps around to show he's full of energy to attack back <br>";
  echo $pikachu->getName() . " uses " . $pikachu->getAttack2() . "<br>";

  // $charmeleon->setHitpoints($charmeleon->getHitpoints() - ($pikachu->getDmg2() - $charmeleon->getWorth()));

  echo $charmeleon->getName() . " is now at " . $charmeleon->getHitpoints() . " health <br>";
  echo $charmeleon->getName() . " attacks with " . $charmeleon->getAttack1() . "<br>";
  echo $pikachu->getName() . " has blocked the attack! <br>";
  echo $pikachu->getName() . " has " . $pikachu->getHitpoints() . " health <br>";
  echo $pikachu->getName() . " uses " . $pikachu->getAttack2() . "<br>";

  // $charmeleon->setHitpoints($charmeleon->getHitpoints() - ($pikachu->getDmg2() - $charmeleon->getWorth())); 

  echo $charmeleon->getName() . " has " . $charmeleon->getHitpoints() . " health left the attack was fatal!<br>";
  echo $pikachu->getName() . " has survived with " . $pikachu->getHitpoints() . " health left and won the fight!";
}

?>