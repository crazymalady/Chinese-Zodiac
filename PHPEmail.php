<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Email</title>

  <link rel="stylesheet" href="styles/style.css"/>
</head>
<body>
<div class="strings" style="text-align:center">
  <h1>Strings: PHP Email</h1>

  <?php
  $emailAddresses = array(
    "john.smith@php.test",
    "mary.smith.mail.php.example",
    "john.jones@php.invalid",
    "alan.smithee@test",
    "jsmith456@example.com",
    "jsmith456@test",
    "mjones@example",
    "mjones@example.net",
    "jane.a.doe@example.org"
  );

  function validateAddress($address){
    if(strpos($address, '@') !== FALSE 
       && strpos($address, '.') !== FALSE)
       return TRUE;
    else{
      return FALSE;
    }
  }

  foreach($emailAddresses as $address){
    if(validateAddress($address) == FALSE)
      echo "<p>The e-mail address <em>$address</em>does not appear to be valid.</p>\n";
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