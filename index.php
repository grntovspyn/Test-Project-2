<?php
include "inc/quiz.php";
// var_dump($questions);
// var_dump($question);
// var_dump($answers);
// var_dump($_POST['answer']);
// var_dump($_POST['index']);
// var_dump($_SESSION);
// var_dump($_SESSION['used_indexes']);
var_dump($_SESSION['totalCorrect']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div id="quiz-box">
        <?php if($show_score == false) { ?>
        <?php 
            if(!empty($toast)){
                echo "<p>" . $toast . "</p>";
            }
            ?>
           
            <p class="breadcrumbs">Question <?php echo count($_SESSION['used_indexes']) ?> of <?php echo $totalQuestions; ?></p>
            <p class="quiz">What is <?php echo $question['leftAdder']; ?> + <?php echo $question['rightAdder']; ?>?</p>
            <form action="index.php" method="post">
                <input type="hidden" name="index" value="<?php echo $index; ?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $answers[0]; ?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $answers[1]; ?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $answers[2]; ?>" />
            </form>
            <?php } ?>
            <?php if($show_score == true) { 
                echo "<p>You got " . $_SESSION['totalCorrect'] . " of " .  $totalQuestions . " correct!</p>";
            } ?>
        </div>
    </div>
</body>
</html>