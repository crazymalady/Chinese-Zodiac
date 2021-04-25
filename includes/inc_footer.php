<link rel="stylesheet" href="styles/style.css"/>
<footer>
 <div class="footerWrapper">
  <img class="myLogo" src="assets/logo_Official YTB Logo.png" alt="Jennie Cuddles Logo"/>
  <span class="proverbs"><!--style="font-style:italic"-->
  |  
  <?php 
    $ProverbFileName = "includes/proverbs.txt";

    $ProverbArray = file($ProverbFileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if($ProverbArray===FALSE){
      echo "There are no proverbs available.\n";
    }
    else if(count($ProverbArray)==0){
      echo "There are no proverbs available.\n";
    }
    else{
      $i = rand(1, count($ProverbArray) - 1);
      echo htmlentities(trim($ProverbArray[$i])) . "\n";
      /*echo "&ldquo;" . htmlentities(trim($ProverbArray[$i])) . "&rdquo;\n";*/
    }
  ?>
  |
  <span class="source">source: https://examples.yourdictionary.com/examples-of-proverbs.html</span>
  <br/><br/>
  <?php 
    
    for($i=0; $i<3; ++$i){
      $randomed = rand($i+1, 4);
      echo "<img src='assets/dragon$randomed.png' alt='Dragon: $i+1'/>" . "</th>\n";
    }
  ?>
  |
  <span class="copyright">&copy; Copyright 2021</span>
  </div>
</footer>
