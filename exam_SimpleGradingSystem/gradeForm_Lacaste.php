<!--
  @author   : Lacaste, Jennifer
  @topic    : GradeCalculation
  @sub&Prof : websys2.MialynBungay
  -->
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.org/1999/xhtml" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade Calculation</title>

  <link rel="stylesheet" href="gradeForm.css"/>
</head>
<body>
  <header>
  </header>
  <main>
    <form action="gradeResult_Lacaste.php" method="POST">
      <table border="3">
        <tr>
          <th class="parts">CLASS STANDING</th>
          <th class="parts">Points</th>
          <th class="parts">Over</th>
        </tr>
        <tr>
          <th class="subparts"><label for="recite">Recitation</label></th>
          <td class="fields"><input type="number" name="recite" id="recite" min="0" max="100" required/></td>
          <td class="fields"><input type="number" name="reciteMark" id="reciteMark" min="0" max="100" required/></td>
        </tr>
        <tr>
          <th class="subparts"><label for="seatWork">Seatwork</label></th>
          <td class="fields"><input type="number" name="seatWork" id="seatWork" min="0" max="100" required/></td>
          <td class="fields"><input type="number" name="seatWorkMark" id="seatWorkMark" min="0" max="100" required/></td>
        </tr>
        <tr>
          <th class="subparts"><label for="homeWork">Assignment</label></th>
            <td class="fields"><input type="number" name="homeWork" id="homeWork" min="0" max="100" required/></td>
            <td class="fields"><input type="number" name="homeWorkMark" id="homeWorkMark" min="0" max="100" required/></td>
        </tr>
        <tr>
          <th class="subparts"><label for="report">Reports</label></th>
          <td class="fields"><input type="number" name="report" id="report" min="0" max="100" required/></td>
          <td class="fields"><input type="number" name="reportMark" id="reportMark" min="0" max="100" required/></td>
        </tr>
        <tr>
          <th class="subparts"><label for="paper">Reaction Paper/Case Studies </label></th>
          <td class="fields"><input type="number" name="paper" id="paper" min="0" max="100" required/>
          <td class="fields"><input type="number" name="paperMark" id="paperMark" min="0" max="100" required/></td>
        </tr>
        <tr>
          <th class="subparts"><label for="quiz">Quizzes</label></th>
          <td class="fields"><input type="number" name="quiz" id="quiz" min="0" max="100" required/>
          <td class="fields"><input type="number" name="quizMark" id="quizMark" min="0" max="100" required/></td>
        </tr>

        <!--3 Long Exams-->
        <tr>
          <th class="parts">LONG EXAMS</th>
          <th class="parts">Points</th>
          <th class="parts">Over</th>
        </tr>
        <tr>
          <th class="subparts"><label for="exam1">Long Exam 1</label></th>
          <td class="fields"><input type="number" name="exam1" id="exam1" min="0" max="100"/>
          <td class="fields"><input type="number" name="exam1Mark" id="exam1Mark" min="0" max="100" required/></td>
        </tr>
        <tr>
          <th class="subparts"><label for="exam2">Long Exam 2</label></th>
          <td class="fields"><input type="number" name="exam2" id="exam2" min="0" max="100" required/>
          <td class="fields"><input type="number" name="exam2Mark" id="exam2Mark" min="0" max="100"/></td>
        </tr>
        <tr>
          <th class="subparts"><label for="exam3">Long Exam 3</label></th>
          <td class="fields"><input type="number" name="exam3" id="exam3" min="0" max="100" required/>
          <td class="fields"><input type="number" name="exam3Mark" id="exam3Mark" min="0" max="100" required/></td>
        </tr>
        
        <!--Final Exam-->
        <tr>
          <th class="parts">FINAL EXAM</th>
          <th class="parts">Points</th>
          <th class="parts">Over</th>
        </tr>
        <tr>
          <th class="subparts"><label for="finalExam">Final Exam:</label></th>
          <td class="fields"><input type="number" name="finalExam" id="finalExam" min="0" max="100" required/>
          <td class="fields"><input type="number" name="finalExamMark" id="finalExamMark" min="0" max="100" required/></td>
        </tr>

        <tr class="buttons">
          <td colspan="6">
            <input type="submit" name="submit" value="Calculate"/>
            <input type="reset" name="clear" value="Clear"/>
          </td>
        </tr>
      </table>
      <h1>GRADE CALCULATOR</h1>
    </form>
   
  </main>
</body>
<footer>
  Created and Developed by: Jennifer Lacaste<br/>
  March 23, 2021</br>
  WEBSYS2: Ms. MiaLyn Bungay</br>
</footer>
</html>