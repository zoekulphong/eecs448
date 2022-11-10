<!DOCTYPE html>
<html>
  <head>
    <title>Quiz Results</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  
  <body>
    <h1>Quiz Results</h1>
        <?php
            $question1 = "1 x 1 =";
            $question2 = "9 - 2 =";
            $question3 = "7 % 4 =";
            $question4 = "8 + 8 =";
            $question5 = "10 / 5 =";

            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];


            $correct1 = "1";
            $correct2 = "7";
            $correct3 = "3";
            $correct4 = "16";
            $correct5 = "2";

            $totalCorrect = 0;
            
            if ($answer1 == "1") { $totalCorrect++; }
            if ($answer2 == "7") { $totalCorrect++; }
            if ($answer3 == "3") { $totalCorrect++; }
            if ($answer4 == "16") { $totalCorrect++; }
            if ($answer5 == "2") { $totalCorrect++; }

            $percentCorrect = ($totalCorrect/5) * 100;
            
            for ($r = 1; $r < 6; $r++) {
              echo "<h3>Question $r: ${'question'.$r}</h3>";
              echo "<p>You answered: ${'answer'.$r}</p>";
              echo "<p>Correct Answer: ${'correct'.$r}</p><br>";
            }

            echo "<div>$totalCorrect / 5 correct</div>";   
            echo "<div>$percentCorrect %</div>"       
        ?>
  </body>
</html>