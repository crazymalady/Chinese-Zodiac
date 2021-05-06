<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control Structures</title>
</head>
<body>
<main>
<h2>CONDITIONAL AND LOOPING STATEMENT</h2>
<p style="text-align: center">
  <a href="#if_else">[&nbsp;<span class="code"> if..else</span>&nbsp;Statement&nbsp;]</a>
  <a href="#switch">[&nbsp;<span class="code"> Switch</span>&nbsp;Statement&nbsp;]</a>
  <a href="#while_loop">[&nbsp;<span class="code"> While</span>&nbsp;Loop&nbsp;]</a>
  <a href="#for_loop">[&nbsp;<span class="code"> For</span>&nbsp;Loop&nbsp;]</a>
</p>

<p><br>
<span id="if_else"></span>
<b  style="color:orange"><i>If-Else Statement</i></b><br><br>
In PHP we have the following conditional statements: <br>

➲if statement - executes some code if one condition is true <br>
➲if...else statement - executes some code if a condition is true and another code if that condition is false <br>
➲if...elseif...else statement - executes different codes for more than two conditions
<br><br>
<b style="color:green">if..else Statement</b><br>
This all-in one web form prompts the user to enter a 4 digit birth year, which is validated for numeric input. <br>
The browser displays the user's chinese zodiac sign and the associated zodiac image using a <span class="code">switch</span> statement.
<br>
<small>
<a href="BirthYear_ifelse.php">[&nbsp;Test&nbsp;the&nbsp;Script&nbsp;]</a>
<a href="https://github.com/crazymalady/Chinese-Zodiac/blob/main/BirthYear_ifelse.php" target=_>[&nbsp;View&nbsp;Source&nbsp;Code&nbsp;]</a>
</small>

<span id="switch"></span>
<br><br><br>
<b style="color:orange"><i>Switch Statement</i></b><br><br>
➲A switch statement is a conditional block used as a method of shortening a long set of if else statements. <br>
➲Switch statement - selects one of many blocks of code to be executed
<br><br>
<b style="color:green">switch Statement</b><br>
This page uses switch statement to display the zodiac sign pictures or the gallery. And when image clicked it will <br> 
display the zodiac sign details. This also uses associative arrays.
<br>
<small>
<a href="ZodiacGallery.php">[&nbsp;Test&nbsp;the&nbsp;Script&nbsp;]</a>
<a href="https://github.com/crazymalady/Chinese-Zodiac/blob/main/ZodiacGallery.php" target=_>[&nbsp;View&nbsp;Source&nbsp;Code&nbsp;]</a>
</small>

<span id="while_loop"></span>
<br><br><br>
<b style="color:orange"><i>While Statement</i></b><br><br>
➲a while loop is a control flow statement that allows code to be executed repeatedly based on a given Boolean condition. The while loop can be thought of as a repeating if statement.<br>
➲The main characteristic of a while loop is that it will repeat a set of instructions based on a condition. As far as the loop returns a boolean value of TRUE, the code inside it will keep repeating. We use this kind of loop when we don't know the exact number of times a code needs to be executed. <br>
➲If you do not declare the ending value of the loop it will lead to an infinite loop.
<br><br>
<b style="color:green">while Loop</b><br>
This page uses <span class="code">while</span>loop to calculate the square of the user input.
<br>
<small>
<a href="NumberForm.php">[&nbsp;Test&nbsp;the&nbsp;Script&nbsp;]</a>
<a href="https://github.com/crazymalady/Chinese-Zodiac/blob/main/NumberForm.php" target=_>[&nbsp;View&nbsp;Source&nbsp;Code&nbsp;]</a>
</small>


<span id="for_loop"></span>
<br><br><br>
<b style="color:orange"><i>For Statement</i></b><br><br>
➲A for loop enables a particular set of conditions to be executed repeatedly until a condition is satisfied. <br>
➲The for loop starts with a for statement followed by a set of parameters inside the parenthesis.
<br><br>
<b style="color:green">for Loop</b><br>
This page uses <span class="code">for</span>loop to display all of the years from 1912 to the current year in a table with each year under the appropriate sign.
<br>
<small>
<a href="Chinese_Zodiac_for_loop.php">[&nbsp;Test&nbsp;the&nbsp;Script&nbsp;]</a>
<a href="https://github.com/crazymalady/Chinese-Zodiac/blob/main/Chinese_Zodiac_for_loop.php" target=_>[&nbsp;View&nbsp;Source&nbsp;Code&nbsp;]</a>
</small>


<br><br>
</p>
</main>
</body>
</html>