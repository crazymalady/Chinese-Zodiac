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
<?php
require 'ZodiacGallery.php';
//include("ZodiacGallery.php");
if(isset($_POST['gallery'])) {
echo "IM HERE";
  echo 'HELLO!' ;
  echo $samp;
  
  /*$zodiacSigns = array(
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

  foreach($zodiacSigns as $zodiac => $key){
    //$values = $zodiac . "_Lacaste";
    //$key = values($zodiacSigns);
    //echo "<img src='assets/$values.png'>\n";
    //echo $key;
    echo "Caption: " . $key;
    echo "Sample";
  }
  echo "Sample2";
  */
}//IF END
?>
Your ON GALLERY IMG

</body>

<br/><br><br/><br><br/><br><br/>
<footer>
  <small>
    by: Jennifer A. Lacaste </br>
    WEBSYS2-Mia Lyn Bungay </br>
    &copy; 06 April 2021
  </small>
</footer>
</html>