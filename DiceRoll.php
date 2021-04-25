<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dice Roll</title>

  <link rel="stylesheet" href="style.css"/>
</head>
<body>
<h1>
Code Demonstration for PHP<sup>Conditional Statement</sup></h1>


<?php
$faceNamesSingular = array("one", "two", "three", "four", "five", "six");
$faceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");

function checkForDoubles($die1, $die2) {
  global $faceNamesSingular;
  global $faceNamesPlural;
  if ($die1 == $die2) // Doubles
  echo "The roll was double ",
  $faceNamesPlural[$die1-1], ".<br />";
  if($die1 != $die2) // Not Doubles
  echo "<span>The roll was a ",
  $faceNamesSingular[$die1-1],
  " and a ", $faceNamesSingular[$die2-1],
  ".</span><br />";
}

function displayScoreText($score) {
  if ($score == 2)
    echo "<span>You rolled snake eyes!</span><br />";
  if ($score == 3)
    echo "<span>You rolled a loose deuce!</span><br />";
  if ($score == 5)
    echo "<span>You rolled a fever five!</span><br />";
  if ($score == 7)
    echo "<span>You rolled a natural!</span><br />";
  if ($score == 9)
    echo "<span>You rolled a nina!</span><br />";
  if ($score == 11)
    echo "<span>You rolled a yo!</span><br />";
  if ($score == 12)
    echo "<span>You rolled boxcars!</span><br />";
}

$dice = array();
$dice[0] = rand(1,6);
$dice[1] = rand(1,6);
$score = $dice[0] + $dice[1];
echo "<p>";
echo "<span>The total score for the roll was $score.<br />";

checkForDoubles($dice[0],$dice[1]);
displayScoreText($score);
echo "</p></span>";

?>  
</body>
<footer>
  <small>
    by: Jennifer A. Lacaste </br>
    WEBSYS2-Mia Lyn Bungay </br>
    &copy; 27 February 2021
  </small>
</footer>
</html>