<link rel="stylesheet" href="gradeForm.css"/>
<body>
<?php 
  if(isset($_POST['submit']))
  { 
    /**FUNCTIONS-------------------------------------- */
    /**calcClassStanding() */
      /*points*/
      $recitation = $_POST['recite'];
      $seatwork = $_POST['seatWork'];
      $assignment = $_POST['homeWork'];
      $report = $_POST['report'];
      $paper = $_POST['paper'];
      $quiz = $_POST['quiz'];

      /*over*/
      $reciteMark = $_POST['reciteMark'];
      $seatworkMark = $_POST['seatWorkMark'];
      $assignMark = $_POST['homeWorkMark'];
      $reportMark = $_POST['reportMark']; 
      $paperMark = $_POST['paperMark'];
      $quizMark = $_POST['quizMark'];

      /*average*/
      $reciteAve = ($recitation / $reciteMark);
      $seatworkAve = ($seatwork / $seatworkMark);
      $assignmentAve = ($assignment / $assignMark);
      $reportAve = ($report / $reportMark);
      $paperAve = ($paper / $paperMark);
      $quizAve = ($quiz / $quizMark);
      
      /**weighted ave*/
      $totalClassStanding = $reciteAve + $seatworkAve + $assignmentAve + $reportAve + $paperAve + $quizAve;
      $classStandingResult = round(($totalClassStanding / 6) * 100 * 0.3, 2);
     
    /**calcLongExams -----------------*/
      /**points*/
      $exam1 = $_POST['exam1'];
      $exam2 = $_POST['exam2'];
      $exam3 = $_POST['exam3'];

      /**over*/
      $exam1Mark = $_POST['exam1Mark'];
      $exam2Mark = $_POST['exam2Mark'];
      $exam3Mark = $_POST['exam3Mark'];

      /**average*/
      $exam1Ave = ($exam1 / $exam1Mark);
      $exam2Ave = ($exam2 / $exam2Mark);
      $exam3Ave = ($exam3 / $exam3Mark);

      /**weighted ave*/
      $totalLongExams = $exam1Ave + $exam2Ave + $exam3Ave;
      $longExamResult = round(($totalLongExams / 3) * 100 * 0.4, 2);

    /**calcFinalExam -----------------*/
      $finalExam =  $_POST['finalExam'];
      $finalExamMark = $_POST['finalExamMark'];

      /**average*/
      $finalExamAve = ($finalExam / $finalExamMark);

      /**weighted ave*/
      $finalExamResult = ($finalExamAve * 100) * 0.3;

    /**percentageRating -----------------*/
      $returnValues = array($classStandingResult, $longExamResult, $finalExamResult);
      $gradePercent = round(array_sum($returnValues), 2);

      switch($gradePercent){
        case ($gradePercent >= 96 && $gradePercent <= 100):
          $desc = "Excellent";
          $numericGrade = 1.00;
          break;
        case ($gradePercent >= 94 && $gradePercent <= 95):
          $desc = "Superior";
          echo $numericGrade = 1.25;
          break;
        case ($gradePercent >= 92 && $gradePercent <= 93):
          $desc = "Very Good";
          $numericGrade = 1.50;
          break;
        case ($gradePercent >= 90 && $gradePercent <= 91):
          $desc = "Above Average";
          $numericGrade = 1.75;
          break;
        case ($gradePercent >= 87 && $gradePercent <= 89):
          $desc = "Good";
          $numericGrade = 2.00;
          break;
        case ($gradePercent >= 84 && $gradePercent <= 86):
          $desc = "Satisfactory";
          $numericGrade = 2.25;
          break;
        case ($gradePercent >= 81 && $gradePercent <= 83):
          $desc = "Average";
          $numericGrade = 2.50;
          break;
        case ($gradePercent >= 78 && $gradePercent <= 80):
          $desc = "Fair";
          $numericGrade = 2.75;
          break;
        case ($gradePercent >= 75 && $gradePercent <= 77):
          $desc = "Passed";
          $numericGrade = 3.00;
          break;
        case ($gradePercent >= 72 && $gradePercent <= 74):
          $desc = "Conditionally Failed";
          $numericGrade = 4.00;
          break;
        case ($gradePercent <= 72):
          $desc = "Failed";
          $numericGrade = 5.00;
          break;
        default: 
          $desc = "DRP/F.A/INC";
          break;
      }
  }
  else{
    header("location: ./gradeForm_Lacaste.php");
  }
?><!--phpbreak-->

<div class="wrapper">
  CLASS STANDING - 
  <span><?php echo $classStandingResult . "%" ?>   (out of 30%)</span><br/>

  LONG EXAMS - 
  <span><?php echo $longExamResult . "%" ?></span>   (out of 40%)<br/>

  FINAL EXAM - 
  <span><?php echo $finalExamResult . "%" ?></span>   (out of 30%)<br/><br/>

  <span>FINAL GRADE<br/></span>
  <span><input type="text" value="<?php echo $gradePercent . "%" ?>" disabled/><br/></span>
  <span><input type="text" value="<?php echo $numericGrade ?>" disabled/><br/></span>
  <span><?php echo $desc ?><br/></span>
</div>
</body>
<footer>
  Created and Developed by: Jennifer Lacaste<br/>
  March 23, 2021</br>
  WEBSYS2: Ms. MiaLyn Bungay</br>
</footer>









