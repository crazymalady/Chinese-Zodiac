<main>
<?php 
  include('inc_home_links_bar.php');
  if(isset($_GET['section'])){
    switch($_GET['section']){
      case 'zodiac': 
        include('includes/inc_chinese_zodiac.php');
        break;
      case 'php': //A value of 'php' means
                  //to display the default page
      default:
        include('includes/inc_php_info.php');
        break;
    }
  }
  else{
    include('includes/inc_php_info.php');
  }
?>
</main>