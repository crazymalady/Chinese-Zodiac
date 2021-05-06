<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books And Authors 2</title>

  <link rel="stylesheet" href="styles/style.css"/>
</head>
<body>
<div class="strings" style="text-align:center">
  <h1>Strings: Books And Authors 2</h1>

  <?php
    $books = array("The Adventures of Huckleberry Finn","Nineteen Eighty-Four", "Alice's Adventures in Wonderland", "The Cat in the Hat");
    $authors = array("Mark Twain", "George Orwell", "Lewis Carroll", "Dr. Seuss");
    $realNames = array("Samuel Clemens", "Eric Blair", "Charles Dodson", "Theodor Geisel");

    for($i = 0; $i < count($books); ++$i){
      echo "<p>The title \"{$books[$i]}\" contains " . 
      strlen($books[$i]) . " characters and " . 
      str_word_count($books[$i]) . " words.</p>";
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