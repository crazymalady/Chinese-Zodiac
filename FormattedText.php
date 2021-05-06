<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formatted Text</title>

  <link rel="stylesheet" href="styles/style.css"/>
</head>
<body>
<div class="strings" style="text-align:center">
  <h1>Strings: Formatted Text</h1>

  <?php
  $displayValue=9.876;
  
  echo "<p>";
  echo "<pre>\n";
  echo "Unformatted text line 1. ";
  echo "Unformatted text line 2. ";
  echo "$displayValue = $displayValue";
  echo "</pre>";

  echo "<pre>\n";
  echo "Formatted Text line 1. \r\n";
  echo "\tFormatted Text line 2. \r\n";
  echo "\$displayValue = $displayValue";
  echo "</pre>";

  echo "</p>";
?>  
<br><br><br><br><br><br><br>
</div>
</body>
<footer>
  <?php 
    include('includes/inc_footer.php');
  ?>
</footer>
</html>