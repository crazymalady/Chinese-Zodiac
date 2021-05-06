<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Embedded Words</title>

  <link rel="stylesheet" href="styles/style.css"/>
</head>
<body>
<div class="strings" style="text-align:center">
  <h1>Strings: Embedded Words</h1>

  <?php
  $phrases = array("Your Chinese zodiac sign tells a lot about your personality.", "Embed PHP scripts within an XHTML document.");

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

  function buildLetterCounts($text){
    $text = strtoupper($text);
    $letter_counts = count_chars($text);

    return $letter_counts;
  }

  function AContainsB($A, $B){
    $retval = TRUE;
    $first_letter_index = ord('A');
    $last_letter_index = ord('Z');

    for($letter_index = $first_letter_index; 
    $letter_index <= $last_letter_index; ++$letter_index){
      if($A[$letter_index] < $B[$letter_index]){
        $retval = FALSE;
      }
    }
    return $retval;
  }
  
  foreach($phrases as $phrase){
    $phraseArray = buildLetterCounts($phrase);
    $goodWords = array();
    $badWords = array();

    foreach($signNames as $word){
      $wordArray = buildLetterCounts($word);
      if(AContainsB($phraseArray, $wordArray)){
        $goodWords[] = $word;
      }
      else{
        $badWords[] = $word;
      }
    }

    echo "<p>The following words can be made from the 
          letters in the phrase &quot; $phrase &quot;:"; 
          
    foreach($goodWords as $word){
      echo " $word";
    }
    echo "</p>\n";
    echo "<p>The following words can not be made from the 
          letters in the phrase &quot;:";
    foreach($badWords as $word){
      echo $word;
    }
    echo "</p>\n";
    echo "<hr />\n";
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