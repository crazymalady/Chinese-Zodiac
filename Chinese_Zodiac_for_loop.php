<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chinese Zodiac For Loop</title>

  <link rel="stylesheet" href="styles/style.css"/>
</head>
<body>
  <div class="zodiacSigns">
    <h1>Chinese Zodiac For Loop</h1>
    
    <?php 
      $signNames = array(
        "Rat",
        "Ox",
        "Tiger",
        "Rabbit",
        "Dragon",
        "Snake",
        "Horse",
        "Sheep",
        "Monkey",
        "Rooster",
        "Dog",
        "Pig");
      echo "<table>\n";
      echo "<tr>\n";
      for($i=0; $i<12; ++$i){
        echo "<th>" . $signNames[$i] . "<br />\n"; 
        echo "<img src='assets/$signNames[$i]_Lacaste.png' alt='$signNames[$i]'/>" . "</th>\n";
        /*echo "<img src='assets/$signNames[$i]_Lacaste.png'/>" . "</th>\n";*/
      }
      for($i = 1912; $i<=2021; ++$i){
        if((($i-1912)%12)==0){
          echo "</tr>\n";
          echo "<tr>\n";
        }
        echo "<td>$i</td>";
      }
      echo "</tr>\n";
      echo "</table>\n";
    ?>

  </div>
</body>
<footer>
  <?php 
    include('includes/inc_footer.php');
  ?>
</footer>
</html>