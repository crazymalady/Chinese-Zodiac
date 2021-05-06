<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Birth Year</title>

  <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div class="zodiacSignsBday"> 
<h1>
Your Chinese Zodiac Sign<sup>If Else Statement</sup></h1>

<?php 
  function validateInput($data, $fieldName){
    global $errorCount;

    if(empty($data)){
      echo "\"$fieldName\" is a required field.<br/>\n";
      ++$errorCount;
      $retval = "";
    }
    else{ //only clean up the input if it isn't empty
      $retval = trim($data);
      $retval = stripslashes($retval);
    }
    return($retval);
  }

  function displayForm($Year){
    ?><!--php break-->
   <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method = "post">
      <h2 style="color:white">BIRTH YEAR | ZODIAC CALCULATOR!</h2>
      <div class="justifyField">
        <br>
        Enter your birth year to check your zodiac: <br><input type="text" placeholder="1999" name="Year" value="<?php echo $Year; ?>"/>
        <br><br>
      </div>
      <br/><br>
      <div class="sortSubmit">
        <input type="reset" value="Clear Form"/>&nbsp; &nbsp;
        <input type="submit" name="Submit" value="Show Me My Sign" />
      </div>
   </form>
   
   <?php
    }

    /*function file_get_contents($fname){
      $retval = "";
      $fp = fopen($fname, "rb");
      if($fp===FALSE){
        $retval = false;
      }
      else{
        while(!feof($fp)){
          $retval .= fread($fp, 8192);
        }
        fclose($fp);
      }
      return($retval);
    }

    function file_put_contents($fname, $data){
      $retval = true;
      
      $fp = fopen($fname, "wb");
      
      if($fp===FALSE){
        $retval = false;
      }
      else{
        $retval=fwrite($fp, $data);
        fclose($fp);
      }
      return($retval);
    }*/

    function StatisticsForYear($Year){
      $retval = 0;
      $counter_file = "./statistics/BirthYear_" . $Year . "_Count.txt";
      
      if((is_file($counter_file)) && (is_readable($counter_file))){
        $retval = file_get_contents($counter_file);
      }

      ++$retval; //add the current visitor to the total

      file_put_contents($counter_file, $retval);
      return($retval);
    }

    function displayResults($Year){
      $CZIndex = ($Year+8) % 12;
      if($CZIndex == 0){
        echo "<p>You were born under the sign of the Rat.</p>\n";
        echo "<p><img src='assets/Rat_Lacaste.png' alt='Rat' title='Rat'></p>\n";
      }
      else if($CZIndex == 1){
        echo "<p>You were born under the sign of the Ox.</p>\n";
        echo "<p><img src='assets/Ox_Lacaste.png' alt='Ox' title='Ox'></p>";
      }
      else if($CZIndex == 2){
        echo "<p>You were born under the sign of the Tiger.</p>\n";
        echo "<p><img src='assets/Tiger_Lacaste.png' alt='Tiger' title='Tiger'></p>";
      }
      else if($CZIndex == 3){
        echo "<p>You were born under the sign of the Rabbit.</p>\n";
        echo "<p><img src='assets/Rabbit_Lacaste.png' alt='Rabbit' title='Rabbit'></p>";
      }
      else if($CZIndex == 4){
        echo "<p>You were born under the sign of the Dragon.</p>\n";
        echo "<p><img src='assets/Dragon_Lacaste.png' alt='Dragon' title='Dragon'></p>";
      }
      else if($CZIndex == 5){
        echo "<p>You were born under the sign of the Snake.</p>\n";
        echo "<p><img src='assets/Snake_Lacaste.png' alt='Snake' title='Snake'></p>";
      }
      else if($CZIndex == 6){
        echo "<p>You were born under the sign of the Horse.</p>\n";
        echo "<p><img src='assets/Horse_Lacaste.png' alt='Horse' title='Horse'></p>";
      }
      else if($CZIndex == 7){
        echo "<p>You were born under the sign of the Goat.</p>\n";
        echo "<p><img src='assets/Goat_Lacaste.png' alt='Goat' title='Goat'></p>";
      }
      else if($CZIndex == 8){
        echo "<p>You were born under the sign of the Monkey.</p>\n";
        echo "<p><img src='assets/Monkey_Lacaste.png' alt='Monkey' title='Monkey'></p>";
      }
      else if($CZIndex == 9){
        echo "<p>You were born under the sign of the Rooster.</p>\n";
        echo "<p><img src='assets/Rooster_Lacaste.png' alt='Rooster' title='Rooster'></p>";
      }
      else if($CZIndex == 10){
        echo "<p>You were born under the sign of the Dog.</p>\n";
        echo "<p><img src='assets/Dog_Lacaste.png' alt='Dog' title='Dog'></p>";
      }
      else if($CZIndex == 11){
        echo "<p>You were born under the sign of the Pig.</p>\n";
        echo "<p><img src='assets/Pig_Lacaste.png' alt='Pig' title='Pig'></p>";
      }
      $YearCount = StatisticsForYear($Year);
      echo "<p>You are person $YearCount to enter the year $Year</p>\n";
      echo "<p style ='text-align:center'><a href='index.php?page=control_structures'>Back</a></p>\n";
    } 

    $ShowForm = TRUE;
    $errorCount = 0;
    $Year = "";

    if(isset($_POST['Submit'])){
      $Year = validateInput($_POST['Year'], "Birth Year");
      if($errorCount==0)
        $ShowForm = FALSE;

      else
        $ShowForm = TRUE;
      }
      if($ShowForm == TRUE){
        if($errorCount>0)
          echo "<p>Please re-enter the form information below</p>\n";
    
        displayForm($Year);
      }
      else{
          displayResults($Year);      
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
<!--<footer>
  <small>
    by: Jennifer A. Lacaste </br>
    WEBSYS2-Mia Lyn Bungay </br>
    &copy; 23 March 2021
  </small>
</footer>-->
</html>