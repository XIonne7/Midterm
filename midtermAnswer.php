<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="answertsyle.css">
    </head>
    <body>

<?php

if(isset($_POST['submit'])){


    $score = 0; 
   
     
    $answer_1 = $_POST['answer_1'];
    $answer_2 = $_POST['answer_2'];
    $answer_3 = $_POST['answer_3'];
    $answer_4 = $_POST['answer_4'];
    $answer_5 = $_POST['answer_5'];
    $answer_6 = $_POST['answer_6'];
    $answer_7 = $_POST['answer_7'];
    $answer_8 = $_POST['answer_8'];
    $answer_9 = $_POST['answer_9'];
    $answer_10 = $_POST['answer_10'];
    $answer_11 = $_POST['answer_11'];
    $answer_12 = $_POST['answer_12'];
    $answer_13 = $_POST['answer_13'];
    $answer_14 = $_POST['answer_14'];
    $answer_15 = $_POST['answer_15'];
    $answer_16 = $_POST['answer_16'];
    $answer_17 = $_POST['answer_17'];
    $answer_18 = $_POST['answer_18'];
    $answer_19 = $_POST['answer_19'];
    $answer_20 = $_POST['answer_20'];
    $answer_21 = $_POST['answer_21'];
    $answer_22 = $_POST['answer_22'];
    $answer_23 = $_POST['answer_23'];
    $answer_24 = $_POST['answer_24'];
    $answer_25 = $_POST['answer_25'];





    if($answer_1 == "C"){
        $score++;
    }
    if($answer_2 == "A"){
        $score++;
    }
    if($answer_3 == "C"){
        $score++;
    }
    if($answer_4 == "C"){
        $score++;
    }
    if($answer_5 == "B"){
        $score++;
    }
    if($answer_6 == "C"){
        $score++;
    }
    if($answer_7 == "B"){
        $score++;
    }
    if($answer_8 == "A"){
        $score++;
    }
    if($answer_9 == "C"){
        $score++;
    }
    if($answer_10 == "B"){
        $score++;
    }
    if($answer_11 == "C"){
        $score++;
    }
    if($answer_12 == "C"){
        $score++;
    }
    if($answer_13 == "B"){
        $score++;
    }
    if($answer_14 == "C"){
        $score++;
    }
    if($answer_15 == "D"){
        $score++;
    }
    if($answer_16 == "D"){
        $score++;
    }
    if($answer_17 == "A"){
        $score++;
    }
    if($answer_18 == "B"){
        $score++;
    }
    if($answer_19 == "C"){
        $score++;
    }
    if($answer_20 == "C"){
        $score++;
    }
    if($answer_21 == "C"){
        $score++;
    }
    if($answer_22 == "A"){
        $score++;
    }
    if($answer_23 == "B"){
        $score++;
    }
    if($answer_24 == "B"){
        $score++;
    }
    if($answer_25 == "A"){
        $score++;
    }


    echo $score;

   }

?>


<br>
<h2> <a href="midtermQuiz..php" class="tryAgainbox">Try Again? </a> </h2>

</html>
</body>