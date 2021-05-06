<link rel="stylesheet" href="styles/style.css"/>
<footer>
 <div class="footerWrapper">
  <a href="https://github.com/crazymalady" target=_><img class="myLogo" src="assets/logo_Official YTB Logo.png" alt="Jennie Cuddles Logo"/></a>
  <span class="proverbs"><!--style="font-style:italic"-->
  
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
      echo "&#x2770;" . htmlentities(trim($ProverbArray[$i])) . "&#x2771;" . "\n";
      /*echo "&ldquo;" . htmlentities(trim($ProverbArray[$i])) . "&rdquo;\n";*/
    }
  ?>
  <small><br>
  <span class="source">&#x273F; source: https://examples.yourdictionary.com/examples-of-proverbs.html &#x273F;</span>
  </small>
  <br/><br/>
  <?php     
    for($i=0; $i<1; ++$i){
      $randomed = rand($i+1, 5);
      echo "<img class='imgDragons' src='assets/dragon_$randomed.png' title='Surprise Me!'/>" . "</th>\n";
    }
  ?>
  <small><span class="copyright">&#x269D;&copy;Copyright WebSys2, Ms./Mrs. Bungay 2021&#x269D; <br>Designed and Developed by: Jennifer A. Lacaste</span></small>
  </div>
</footer>
