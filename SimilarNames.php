
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Similar Names</title>

  <link rel="stylesheet" href="styles/style.css"/>
</head>
<body>
<div class="strings" style="text-align:center">
  <h1>Strings: Similar Names/Lavenshtein</h1>

  <?php
  $signNames = array(
    "Rat", 
    "Ox",
    "Tiger",
    "Rabbit",
    "Dragon",
    "Snake",
    "Horse",
    "Goat",
    "Monkey",
    "Rooster",
    "Dog",
    "Pig"
  );

  $levenshteinSmallest = 999999;
  $similarTextLargest = 0;

  for($i=0; $i<11; ++$i){ 
    for( $j= $i + 1; $j < 12; ++$j){
      $levenshteinValue = levenshtein($signNames[$i], $signNames[$j]);
      
      if($levenshteinValue < $levenshteinSmallest){
        $levenshteinSmallest = $levenshteinValue;
        $levenshteinWord1 = $signNames[$i];
        $levenshteinWord2 = $signNames[$j];
      }
      
      $similarTextValue = similar_text($signNames[$i], $signNames[$j]);

      if($similarTextValue > $similarTextLargest){
        $similarTextLargest = $similarTextValue;
        $similarTextWord1 = $signNames[$i];
        $similarTextWord2 = $signNames[$j];
      }
    }
  }

  echo "<p>The levenshtein() function has determined that &quot; $levenshteinWord1 
       and &quot; $levenshteinWord2 &quot; are the most
       similar names.</p>\n";
  echo "<p>The similar_text() function has determined that &quot; $similarTextWord1  
       and &quot; $similarTextWord2 &quot; are the most
       similar names.</p>\n";
?>  

<br><br><br><br><br><br><br><br><br>
</div>
</body>
<footer>
  <?php 
    include('includes/inc_footer.php');
  ?>
</footer>
</html>