<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alphabetize Signs</title>

  <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<form action = "AlphabetizeSigns.php" method = "post">
  <div class="zodiacSigns"> <!--connected to style.css, create duplicate of this if edit the sizes-->
    <h1>Alphabetize Signs</h1>
    <div class="justify">
      There are only 3 valid signs in the list. Please enter the remaining 9 signs. <br/>
      Please enter the twelve Chinese zodiac signs below, separated by commas. When you are finished click on the "Sort" button to see them in sorted order. <br/><br>
      
      <input type="text" name="zodiac" placeholder="Ox, Rooster, Pig" /><br><br>
    </div>
    <br/><br>
    <div class="sortSubmit">
        <input type = "submit" name = "submit" value = "Sort">
    </div>
    <br/><br><br/><br/>
  </div>
  
</form>
<?php
  if(isset($_POST['submit'])) {
    $zodiac1 = $_POST['zodiac'];

    if(strpos($zodiac1, " ") == false){
      $replaced = str_replace(",", ", ", $zodiac1);

      $zodiac = explode(", ", $replaced); //explode directly converts string to array
      sort($zodiac);

      echo "SORTED: ";
      foreach($zodiac as $val) {
        //echo "fruits[" . $key . "] = " . $val . "\n";
        echo $val . "\n";
      }
    }
    else{
      $zodiac = explode(", ", $zodiac1); //explode directly converts string to array
      sort($zodiac);

      echo "SORTED: ";
      foreach($zodiac as $val) {
        //echo "fruits[" . $key . "] = " . $val . "\n";
        echo $val . "\n";
      }
    }
    
  }

  /*
   if(isset($_POST['submit'])) {
    $zodiac1 = $_POST['zodiac'];
    $zodiac = explode(", ", $zodiac1); //explode directly converts string to array
    sort($zodiac);

    foreach($zodiac as $val) {
      //echo "fruits[" . $key . "] = " . $val . "\n";
      echo $val . "\n";
    }
  }
   */
?>
</body>
<footer>
  <?php 
    include('includes/inc_footer.php');
  ?>
</footer>
</html>