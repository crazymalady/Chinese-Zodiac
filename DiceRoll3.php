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
Code Demonstration for PHP<sup>While Statement</sup></h1>


<?php
$faceNamesSingular = array("one", "two", "three", "four", "five", "six");
$faceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");

function checkForDoubles($score, $doubles) {
  global $faceNamesSingular;
  global $faceNamesPlural;
  
  switch($score) {
    case 2:
      echo "<span>You rolled snake eyes!</span><br />";
      break;
    case 3:
      echo "<span>You rolled a loose deuce!</span><br />";
      break;
    case 5:
      echo "<span>You rolled a fever fi ve!</span><br />";
      break;
    case 7:
      echo "<span>You rolled a natural!</span><br />";
      break;
    case 9:
      echo "<span>You rolled a nina!<br /></span>";
      break;
    case 11:
      echo "<span>You rolled a yo!</span><br />";
      break;
    case 12:
      echo "<span>You rolled boxcars!</span><br />";
      break;
    default:
      if ($score % 2 == 0) { /* even number */
        if ($doubles) {
          echo "<span>You rolled a hard $score!</span><br />";
        }
        else { /* not doubles */
          echo "<span> You rolled an easy $score!</span><br />";
        }
      }
      break;
  }
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
$doublesCount = 0;
$rollNumber = 1;
while ($rollNumber <= 5) {
  $dice[0] = rand(1,6);
  $dice[1] = rand(1,6);
  $score = $dice[0] + $dice[1];
  echo "<p>";
  echo "<span> The total score for roll $rollNumber was $score.</span><br />";
  $doubles = checkForDoubles($dice[0],$dice[1]);
  displayScoreText($score, $doubles);
  echo "</p>";
  if($doubles){
    ++$doublesCount;
  }
  ++$rollNumber;
} // End of the while loop
echo "<p>Doubles occurred on $doublesCount of the five rolls.</span></p>";
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