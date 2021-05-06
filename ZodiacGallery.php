<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zodiac Gallery</title>

  <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<form action="ZodiacGallery.php" method="post">
<div class="zodiacGal"> 
    <h1>Zodiac Gallery</h1>
    <h2 style="color:white">CLICK ON THE ZODIAC</h2>
</form>  
    <?php 
      $zodiac = array(
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
        "Pig"
      );

      $zodiacSigns = array(
        "Rat" => "The fortunes of Rat people will be exceptionally smooth. This year, regardless of whether they have difficulties in their careers or studies, Rats can get help from others in time",
        "Ox" => "Oxen are expected to face many challenges when their birth year recurs every twelfth year.",
        "Tiger" => " Tigers, if you can relax and condition yourself, you can have a smooth end to the year. In 2021, Tigers' careers and financial performance is set to be relatively flat. Emotional luck is good, and singles will have a great chance of making a connection, while people of marriageable age may also enter marriage. In terms of health, Tigers should be alert to small physical ailments, paying attention to seeking health care in a timely way",
        "Rabbit" => "Rabbit is strange at all times",
        "Dragon" => "Dragon is strange at all times",
        "Snake" => "Snake is tricky",
        "Horse" => "Horse is fast",
        "Sheep" => "Sheep is kind",
        "Monkey" => "Monkey is something",
        "Rooster" => "Rooster is very early",
        "Dog" => "Dog is a guard",
        "Pig" => "Pig is fat",
      );
      echo "<table>\n";
      echo "<tr>\n";

      /**
       * Example:
       * <?php
       * $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
       * echo "Peter is " . $age['Peter'] . " years old.";
       * ?>
       */

      /*$zodiacSigns = array(
        "Rat" => " The fortunes of Rat people will be exceptionally smooth. This year, regardless of whether they have difficulties in their careers or studies, Rats can get help from others in time",
        "Ox" => "Ox is strange at all times",
        "Rabbit" => "Rabbit is strange at all times",
      );*/

      /**
       * Example:
       * array_column($array, $columnname);
       * $array is the array you have
       * $columnname is the name of the key
       */
      
        //foreach($zodiacSigns as $zodiac => $key){
          //for($i = 0; $i < count($zodiacSigns); $i++){
          //$values = $zodiac . "_Lacaste";
          //$key = values($zodiacSigns);
          //$key = key($zodiacSigns); //. "_Lacaste";
          
          //if($zodiacSigns[$i] <= 3){
            //echo "<img src='assets/$values.png'>\n";
            //echo $key;
            //echo $zodiacSigns[$i];
            //echo $i;
            //echo "Caption: " . $key;
            
            /*elseif($i == 1){
              echo "<img src='assets/$values.png'>\n";
            }*/
          //}
          /*else{
            echo "this";
          }*/
        //}
      //}

          //echo "Caption: " . $key;
        
//$cars = array("Volvo", "BMW", "Toyota", "Amazing", "Wow", "Crazy");
for($i = 0; $i < count($zodiac); $i++){
  if($i == 0 || $i == 1 || $i == 2 || $i == 3 ){
    switch($i){
      case 0: 
        /**
         * Comment:
         * when u use an image for input, it doesnt post values as "name"="value" as it does in case of buttons..
         * instead it will post name_x=... and name_y=... where the values are the x & y coordinates of the point where user clicks the image..
         * modify ur code to
         * if(isset($_POST['submit_x'] && isset($_POST['submit_y'])){ // rest remains the same
         * OR - <input type ="image" src="myfile.jpeg" name="submit" value="Submit">
         */

        //echo "<a name='gallery' href='ZodiacGallery.php'><img name='gallery' id='gallery' src='assets/$zodiac[$i]_Lacaste.png'></a>\n";
        $imgVal = 'Rat';
        echo "<input type='image' name='gallery' id='gallery' value='Submit' src='assets/$zodiac[$i]_Lacaste.png'>\n";         
        echo "<input type='hidden' name='galVal' value='$imgVal'/>";
        break;
      case 1: 
        //$imgVal = 'Ox';
        echo "<input type='image' name='gallery' id='gallery' value='Submit' src='assets/$zodiac[$i]_Lacaste.png'>\n";
        //echo "<input type='hidden' name='galVal' value='$imgVal'/>";
        break;
      case 2: 
        //$imgVal = 'Tiger';
        echo "<input type='image' name='gallery' id='gallery' value='Submit' src='assets/$zodiac[$i]_Lacaste.png'>\n";
        //echo "<input type='hidden' name='galVal' value='$imgVal'/>";
        break;
      case 3: 
        echo "<input type='image' name='gallery' id='gallery' value='Submit' src='assets/$zodiac[$i]_Lacaste.png'>\n";
        echo "\n<br/>";
    }
  }
  elseif($i == 4 || $i == 5 || $i == 6 || $i == 7) {
    switch($i){
      case 4: 
        echo "<input type='image' name='gallery' id='gallery' value='Submit' src='assets/$zodiac[$i]_Lacaste.png'>\n";
        break;
      case 5: 
        echo "<input type='image' name='gallery' id='gallery' value='Submit' src='assets/$zodiac[$i]_Lacaste.png'>\n";
        break;
      case 6:
        echo "<input type='image' name='gallery' id='gallery' value='Submit' src='assets/$zodiac[$i]_Lacaste.png'>\n";
        break;
      case 7: 
        echo "<input type='image' name='gallery' id='gallery' value='Submit' src='assets/$zodiac[$i]_Lacaste.png'>\n";
        echo "\n<br/>";
    }
  }
  elseif($i == 8 || $i == 9 || $i == 10 || $i == 11) {
    echo "<input type='image' name='gallery' id='gallery' value='Submit' src='assets/$zodiac[$i]_Lacaste.png'>\n";
  }
}
?>
<br><br><br><br>
<?php 
if(isset($_POST['gallery_x']) && isset($_POST['gallery_y']) != '') {
  $galVal = stripslashes($_POST['galVal']);
  
  for($i = 0; $i < 1; $i++){
    switch($galVal){
      case 'Rat': 
        echo "<img name='gallery' id='gallery' src='assets/Rat_Lacaste.png'></a>\n";
        if(key($zodiacSigns) == 'Rat'){
          //echo array_values($zodiacSigns);
          echo "You chose Rat!";
        }
        break;
      /*case 'Ox': 
        echo "<img name='gallery' id='gallery' src='assets/Ox_Lacaste.png'></a>\n";
        if(key($zodiacSigns) == 'Ox'){
          //echo array_values($zodiacSigns);
          echo "You chose Ox!";
        }
        break;
      case 'Tiger': 
        echo "<img name='gallery' id='gallery' src='assets/Tiger_Lacaste.png'></a>\n";
        if(key($zodiacSigns) == 'Tiger'){
          //echo array_values($zodiacSigns);
          echo "Tiger!";
        }
        break;
*/
      default: 
        echo "none";
        break;
    }
  }
  //for($i = 0; $i < count($zodiacSigns); $i++){
     
  /*while($curr = current($zodiacSigns)){
    if($curr = 'Rat'){
      echo key($zodiacSigns);
    }
  }*/
    /*switch($galVal){
      case 0: 
        echo "<img name='gallery' id='gallery' src='assets/$zodiacSigns[$i]_Lacaste.png'></a>\n";
        while($curr = current($zodiacSigns)){
          if($curr = 'Rat'){
            echo key($zodiacSigns);
            echo "You chose Rat!";
          }
        }
        break;

      default: 
        echo "none";
        break;
    }*/
  }
?>

</body>
<!--
<footer>
  <small>
    by: Jennifer A. Lacaste </br>
    WEBSYS2-Mia Lyn Bungay </br>
    &copy; 06 April 2021
  </small>
</footer>-->
<footer>
  <?php 
    include('includes/inc_footer.php');
  ?>
</footer>
</html>