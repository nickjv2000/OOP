<?php 
class Battle {
  //pokemonDefender = charmeleon
  //pokemonAttacker = pikachu
  public function startBattle($pokemonAttacker, $pokemonDefender){ 
    
    if($pokemonAttacker->getHitpoints() > 0 && $pokemonDefender->getHitpoints() > 0) {  

      echo $pokemonAttacker->getName() . " has " . $pokemonAttacker->getHealth() . " health <br>";
      echo $pokemonDefender->getName() . " has " . $pokemonDefender->getHealth() . " health <br>";
      echo $pokemonAttacker->getName() . " uses " . $pokemonAttacker->getAttack1()->getAttackName() . "<br>";

      $pokemonDefender->setHitpoints($pokemonDefender->getHitpoints() - ($pokemonAttacker->getAttack1()->getAttackDamage() - $pokemonDefender->getWorth()));

      echo $pokemonDefender->getName() . " has taken damage! His health is now at " . $pokemonDefender->getHitpoints() . " health<br>";
      echo $pokemonDefender->getName() . " starts a counter attack and uses " . $pokemonDefender->getAttack2()->getAttackName() . " <br>";

      $pokemonAttacker->setHitpoints($pokemonAttacker->getHitpoints() - ($pokemonDefender->getAttack2()->getAttackDamage() * $pokemonAttacker->getMultiplier())); 

      echo $pokemonAttacker->getName() . " took a lot of damage! Their health is now at " . $pokemonAttacker->getHitpoints() . " health<br>";
      echo $pokemonAttacker->getName() . " is going crazy and jumps around to show he's full of energy to attack back <br>";
      echo $pokemonAttacker->getName() . " uses " . $pokemonAttacker->getAttack2()->getAttackName() . "<br>";

      $this->HealthAttack2($pokemonDefender, $pokemonAttacker);

      echo $pokemonDefender->getName() . " is now at " . $pokemonDefender->getHitpoints() . " health <br>";
      echo $pokemonDefender->getName() . " attacks with " . $pokemonDefender->getAttack1()->getAttackName() . "<br>";
      echo $pokemonAttacker->getName() . " has blocked the attack! <br>";
      echo $pokemonAttacker->getName() . " has " . $pokemonAttacker->getHitpoints() . " health <br>";
      echo $pokemonAttacker->getName() . " uses " . $pokemonAttacker->getAttack2()->getAttackName() . "<br>";

      $this->HealthAttack2($pokemonDefender, $pokemonAttacker); 

      echo $pokemonDefender->getName() . " has " . $pokemonDefender->getHitpoints() . " health left the attack was fatal!<br>";
      echo $pokemonAttacker->getName() . " has survived with " . $pokemonAttacker->getHitpoints() . " health left and won the fight!";
    }
  }

  public function HealthAttack2($pokemonDefender, $pokemonAttacker) {
    $pokemonDefender->setHitpoints($pokemonDefender->getHitpoints() - ($pokemonAttacker->getAttack2()->getAttackDamage() - $pokemonDefender->getWorth()));
  }
} 
?>