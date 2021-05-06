<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post Message</title>

  <link rel="stylesheet" href="styles/style.css"/>
</head>
<body>
<div class="strings" style="text-align:center">
  <?php
  if (isset($_POST['submit'])) {
    $Subject = stripslashes($_POST['subject']); //stripslashes
    $Name = stripslashes($_POST['name']);
    $Message = stripslashes($_POST['message']);
    // Replace any '~' characters
    // with '-' characters
    $Subject = str_replace("~", "-", $Subject);
    $Name = str_replace("~", "-", $Name);
    $Message = str_replace("~", "-", $Message);
    
    /*added: page 444*/
    $ExistingSubjects = array();
    if(file_exists("MessageBoard/messages.txt") && filesize("MessageBoard/messages.txt") > 0 ){
      $MessageArray = file("MessageBoard/messages.txt"); //file(), reads file into array including newlines
      $count = count($MessageArray);
      for($i = 0; $i < $count; ++$i){
        $CurrMsg = explode("~", $MessageArray[$i]); //explode split the originalString when delimiter has been detected "~"
        $ExistingSubjects[] = $CurrMsg[0]; //its on index 0(For Subject only) everything becoz explode() returns array containing strings that are formed from splits or the output after splits

        if(in_array($Subject, $ExistingSubjects)){ //find the oldSubject with -, and search if from $ExistingSubjects
          echo "<p>The subject you entered already exists!<br/>\n";
          echo "Please enter a new subject and try again. <br/>\n";
          echo "Your message was not saved.</p>";                
          $Subject = "";    
        }
        else{
          $MessageRecord = "$Subject~$Name~$Message\n";
          $MessageFile = fopen("MessageBoard/messages.txt", "ab"); //variable that directly appends
          if($MessageFile === false){ //if hinedi sya nagappend ito ang message
            echo "There was an error saving your message!\n";
          }
          else{//if subject is not yet existing and theres no error in saving message
            fwrite($MessageFile, $MessageRecord); //put the returned ouput of $MessageFile which "ab" we will append it to the $MessageRecord
            fclose($MessageFile);
            echo "Your Message has been saved.";
            $Subject = "";
            $Message = "";
          }
        }
      }

    }
    

    $MessageRecord ="$Subject~$Name~$Message\n";
    $MessageFile =
    fopen("MessageBoard/messages.txt", "ab");
    if ($MessageFile === FALSE)
    echo "There was an error saving your message!\n";
    else {
    fwrite($MessageFile, $MessageRecord);
    fclose($MessageFile);
    echo "Your message has been saved.\n";
    }
  }
  else{
    /**
     * Th ese lines clear out the $Subject, $Name, and 
     * $Message variables if there is no posted data.
     */
    $Subject = "";
    $Name = "";
    $Message = ""; 

  }  
?> 
<h1>Post New Message</h1>
<hr />
<form action="PostMessage.php" method="POST">
  <span style="font-weight:bold">Subject:</span>
  <input type="text" name="subject" value="<?php echo $Subject; ?>"/>
  <span style="font-weight:bold">Name:</span>
  <input type="text" name="name" value="<?php echo $Name; ?>"/><br />
  <textarea name="message" rows="6" cols="80" value="<?php echo $Message?>"></textarea><br />
  <input type="submit" name="submit" value="Post Message" />
  <input type="reset" name="reset" value="Reset Form" />
</form>
<hr />
<p>
<a href="MessageBoard.php">View Messages</a>
</p>

<br><br><br><br><br><br><br>
</div>
</body>
<footer>
  <?php 
    include('includes/inc_footer.php');
  ?>
</footer>
</html>