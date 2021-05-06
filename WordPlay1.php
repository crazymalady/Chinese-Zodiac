<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WordPlay 1</title>

  <link rel="stylesheet" href="styles/style.css"/>
</head>
<body>
<div class="strings" style="text-align:center">
  <h1>Strings: WordPlay 1</h1>

  <?php
  $startingText = "mAdAm, i'M aDaM.";
  
  $uppercaseText = strtoupper($startingText);
  $lowercaseText = strtolower($startingText);
  echo "<p>$uppercaseText</p>\n";
  echo "<p>$lowercaseText</p>\n";

  echo "<p>" . ucfirst($lowercaseText) . "</p>\n";
  echo "<p>" . lcfirst($uppercaseText) . "</p>\n";
  $workingText = ucwords($lowercaseText);
  echo "<p>$workingText</p>\n";
?>  
 
<br><br><br><br><br><br>
</div>
</body>
<footer>
  <?php 
    include('includes/inc_footer.php');
  ?>
</footer>
</html>