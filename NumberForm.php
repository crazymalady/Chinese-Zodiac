<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Number Form</title>

  <link rel="stylesheet" href="styles/style.css"/>
</head>
<body>
<div class="strings" style="text-align:center">
  <h1>While Statement: Number Form</h1>

  <?php
  $DisplayForm = TRUE;
  $Number = "";

  if(isset($_POST['Submit'])){
    $Number = $_POST['Number'];
    if(is_numeric($Number)){
      $DisplayForm = FALSE;
    }
    else{
      echo "<p>You need to enter a numeric value</p>\n";
      $DisplayForm = TRUE;
    }
  }

  if ($DisplayForm) {
    ?>
    <form name="NumberForm" action="NumberForm.php"
     method="post">
    <p>Enter a number: <input type="text" name="Number" 
    value="<?php echo $Number; ?>" /></p>
    <p><input type="reset" value="Clear Form" />&nbsp; 
    &nbsp;<input type="submit" name="Submit" value="Send 
    Form" /></p>
    </form>
    <?php
  }
  else {
    echo "<p>Thank you for entering a number.</p>\n";
    echo "<p>Your number, $Number, squared is " .
    ($Number*$Number) . ".</p>\n ";
    echo "<p><a href=\"NumberForm.php\">Try
    again?</a></p>\n";
   }
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