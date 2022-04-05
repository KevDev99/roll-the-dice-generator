<?php

$numberOfRolls = $_POST["numberOfRolls"];
$diceType = $_POST["diceType"];

$rolledDices = [];

if( $numberOfRolls < 1  || $numberOfRolls > 100 ) {
  throw new Exception('The number of rolls must be between 1 and 100.');
}

if( !$diceType  ) {
  throw new Exception('Empty dice type.');
}
  

// create random numbers for each dice with the php rand function
for ($x = 1; $x <= $numberOfRolls; $x++) {
   array_push($rolledDices, rand(1, (int)substr($diceType, 1)));
}

// return as json
$rolledDicesJson = json_encode($rolledDices);
echo $rolledDicesJson;
?>